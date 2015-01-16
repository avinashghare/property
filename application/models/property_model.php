<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Property_model extends CI_Model
{
	//property
	public function createproperty($name,$area,$description,$lat,$long,$price,$builder,$propertytype,$status,$brochure)
	{
		$user = $this->session->userdata('id');
		$data  = array(
			'name' => $name,
			'area' => $area,
			'description' => $description,
			'lat' => $lat,
			'long' => $long,
			'price' => $price,
			'builder' => $builder,
			'propertytype' => $propertytype,
			'status' => $status,
			'createdby' => $user,
			'brochure' => $brochure
		);
		$query=$this->db->insert( 'property', $data );
		$id=$this->db->insert_id();
		
		if($query)
		{
			$data2  = array(
				'property' => $id,
			);
			$query=$this->db->insert( 'propertyinfo', $data2 );
			$this->savepropertylog($id,"property Created");
		}
		/*
		if(!empty($relatedproperty))
		{
			foreach($relatedproperty as $key => $pro)
			{
				$data2  = array(
					'property' => $id,
					'relatedproperty' => $pro,
				);
				$query=$this->db->insert( 'relatedproperty', $data2 );
			}
		}*/
		return  1;
	}
    
    public function getpropertybrochurebyid($id)
	{
		$query=$this->db->query("SELECT `brochure` FROM `property` WHERE `id`='$id'")->row();
		return $query;
	}
	function viewproperty()
	{
		$query=$this->db->query("SELECT `property`.`id`,`property`.`name`,`area`.`name` as `area`,`property`.`price`,`propertytype`.`name` as `propertytype`,`builder`.`name` as `builder` FROM `property` 
		INNER JOIN `propertytype` ON `propertytype`.`id` =  `property`.`propertytype`
		INNER JOIN `builder` ON `builder`.`id` =  `property`.`builder`
		INNER JOIN `area` ON `area`.`id` =  `property`.`area`
		ORDER BY `property`.`id` ASC")->result();
		return $query;
	}
	public function beforeeditproperty( $id )
	{
		$this->db->where( 'id', $id );
		$query['property']=$this->db->get( 'property' )->row();
		$query['propertyinfo']=$this->db->get( 'propertyinfo' )->row();
		$query['propertyamenity']=array();
		$propertyamenity=$this->db->query("SELECT `amenity` FROM `propertyamenity` WHERE `propertyamenity`.`property`='$id'")->result();
		foreach($propertyamenity as $pro)
		{
			$query['propertyamenity'][]=$pro->amenity;
		}
		/*
		$property_category=$this->db->query("SELECT `category` FROM `propertycategory` WHERE `propertycategory`.`property`='$id'")->result();
		$query['property_category']=array();
		foreach($property_category as $cat)
		{
			$query['property_category'][]=$cat->category;
		}
		$related_property=$this->db->query("SELECT `relatedproperty` FROM `relatedproperty` WHERE `relatedproperty`.`property`='$id'")->result();
		$query['related_property']=array();
		foreach($related_property as $pro)
		{
			$query['related_property'][]=$pro->relatedproperty;
		}*/
		return $query;
	}
	
	public function editproperty( $id,$name,$area,$description,$lat,$long,$price,$builder,$propertytype,$status,$brochure)
	{
		$data = array(
			'name' => $name,
			'area' => $area,
			'description' => $description,
			'lat' => $lat,
			'long' => $long,
			'price' => $price,
			'builder' => $builder,
			'propertytype' => $propertytype,
			'status' => $status,
			'brochure' => $brochure
		);
		$this->db->where( 'id', $id );
		$q=$this->db->update( 'property', $data );
		if($q)
		{
			$this->savepropertylog($id,"property Details Edited");
		}
		/*
		if(!empty($relatedproperty))
		{
			foreach($relatedproperty as $key => $pro)
			{
				$data2  = array(
					'property' => $id,
					'relatedproperty' => $pro,
				);
				$query=$this->db->insert( 'relatedproperty', $data2 );
			}
		}*/
		
		return 1;
	}
	function deleteproperty($id)
	{
		$query=$this->db->query("DELETE FROM `property` WHERE `id`='$id'");
		$this->db->query("DELETE FROM `propertyamenity` WHERE `property`='$id'");
		$this->db->query("DELETE FROM `propertyinfo` WHERE `property`='$id'");
	}
	public function getpropertytype()
	{
		$query=$this->db->query("SELECT * FROM `propertytype`  ORDER BY `name` ASC")->result();
		$return=array(
		
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	public function getallpropertytype()
	{
		$query=$this->db->query("SELECT * FROM `propertytype`  ORDER BY `name` ASC")->result();
		return $query;
	}
	public function getpropertydropdown()
	{
		$query=$this->db->query("SELECT * FROM `property`  ORDER BY `id` ASC")->result();
		$return=array(
		
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	public function getbuilder()
	{
		$query=$this->db->query("SELECT * FROM `builder`  ORDER BY `id` ASC")->result();
		$return=array(
		
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Enabled",
			 "0" => "Disabled",
			);
		return $status;
	}
	public function getvisibility()
	{
		$status= array(
			 "1" => "Yes",
			 "0" => "No",
			);
		return $status;
	}
	function viewallimages($id)
	{
		$query=$this->db->query(" SELECT `propertyimage`.`id` as `id`, `propertyimage`.`image` as `propertyimage`,`propertyimage`.`property` as `propertyid`,`propertyimage`.`is_default` as `is_default`,`propertyimage`.`order` as `order`  FROM `propertyimage` WHERE `propertyimage`.`property`='$id' ORDER BY `propertyimage`.`order` ")->result();
		return $query;
	}
	function addimage($id,$uploaddata)
	{
		$propertyimage	= $uploaddata[ 'file_name' ];
		$path = $uploaddata[ 'full_path' ];
		$nextorder=$this->db->query("SELECT IFNULL(MAX(`order`)+1,0) AS `nextorder` FROM `propertyimage` WHERE `property`='$id'")->row();
		$nextorder= $nextorder->nextorder;
		
		if($nextorder=="0")
		$isdefault="1";
		else
		$isdefault="0";
		$data  = array(
			'image' => $propertyimage,
			'property' => $id,
			'is_default' => $isdefault,
			'order' => $nextorder,
			);
		$query=$this->db->insert( 'propertyimage', $data );
		if($query)
		{
			$this->savepropertylog($id,"property Image Added");
		}
		
	}
	function deleteimage($propertyimageid,$id)
	{
		$query=$this->db->query("DELETE FROM `propertyimage` WHERE `property`='$id' AND `id`='$propertyimageid'");
		if($query)
		{
			$this->savepropertylog($id,"property Image Deleted");
		}
	}
	function defaultimage($propertyimageid,$id)
	{
		$order=$this->db->query("SELECT `order` FROM `propertyimage` WHERE `id`='$propertyimageid'")->row();
		$order=$order->order;
		
		$this->db->query(" UPDATE `propertyimage` SET `order`='$order' WHERE `is_default`='1' ");		
		$this->db->query(" UPDATE `propertyimage` SET `is_default`='0' WHERE `propertyimage`.`property`='$id' ");
		
		$query=$this->db->query(" UPDATE `propertyimage` SET `is_default`='1',`order`='0' WHERE `propertyimage`.`id`='$propertyimageid' AND `propertyimage`.`property`='$id' ");
		if($query)
		{
			$this->savepropertylog($id,"property Image set to default");
		}
	}
	function changeorder($propertyimageid,$order,$property)
	{
		$query=$this->db->query("UPDATE `propertyimage` SET `order`='$order' WHERE `id`='$propertyimageid' ");
		if($query)
		{
			$this->savepropertylog($property,"property Image Order Edited");
		}
	}
	function getamenity()
	{
		$query=$this->db->query("SELECT * FROM `amenity`  ORDER BY `name` ASC")->result();
		
		return $query;
	}
	function editpropertyinfo($id,$propertyarea,$propertyage,$nearby,$bedroom,$bathroom,$kitchen,$floor)
	{
		$data = array(
			'propertyarea' => $propertyarea,
			'propertyage' => $propertyage,
			'nearby' => $nearby,
			'bedroom' => $bedroom,
			'bathroom' => $bathroom,
			'kitchen' => $kitchen,
			'floor' => $floor,
		);
		$this->db->where( 'id', $id );
		$q=$this->db->update( 'propertyinfo', $data );
		if($q)
		{
			$this->savepropertylog($id,"property Info  Edited");
		}
		return 1;
	}
	function editpropertyamenity($id,$amenity)
	{
		$this->db->query("DELETE FROM `propertyamenity` WHERE `property`='$id'");
		
		if(!empty($amenity))
		{
			foreach($amenity as $key => $ame)
			{
				$data2  = array(
					'property' => $id,
					'amenity' => $ame,
				);
				$query=$this->db->insert( 'propertyamenity', $data2 );
			}
		}
		
		{
			$this->savepropertylog($id,"Property Amenity updated");
		}
		return 1;
	}
	public function viewpropertycomment($property)
	{
		$query="SELECT `user`.`name` as `name`,`property`.`name` as `property`,`comment`.`timestamp` as `timestamp`,`comment`.`comment` FROM `comment`
		INNER JOIN `user` ON `user`.`id` = `comment`.`user` AND `comment`.`property`='$property'
		INNER JOIN `property` ON `comment`.`property` = `property`.`id`		
		ORDER BY `comment`.`timestamp` DESC";
	   
		$query=$this->db->query($query)->result();
		
		return $query;
	}
	function savepropertylog($id,$action)
	{
		$user = $this->session->userdata('id');
		$data2  = array(
			'property' => $id,
			'user' => $user,
			'action' => $action,
		);
		$query2=$this->db->insert( 'propertylog', $data2 );
	}
	function searchproperty($locality,$city,$propertytype)
	{
		$where = "";
		/*
		if($price != "" || $price != 0)
		{
			if($price == 1)
				$where .= " AND `property`.`price` <= 500000 ";
			else if($price == 2)
				$where .= " AND `property`.`price` BETWEEN '500000' AND '1000000' ";	
			else if($price == 3)
				$where .= " AND `property`.`price` BETWEEN 1500000 AND 2000000 ";	
			else if($price == 4)
				$where .= " AND `property`.`price` BETWEEN 2500000 AND 3000000 ";	
			else if($price == 5)
				$where .= " AND `property`.`price` BETWEEN 3500000 AND 4000000 ";	
			else if($price == 6)
				$where .= " AND `property`.`price` BETWEEN 4500000 AND 5000000 ";	
		}*/
		if($locality != "" )
			$where .= " AND `area`.`name` LIKE '%$locality%' OR `builder`.`name` LIKE '%$locality%' OR `property`.`name` LIKE '%$locality%'";
		if($city != "" || $city != 0 )
			$where .= " AND `area`.`city` = '$city'";
		if($propertytype != "" || $propertytype != 0 )
			$where .= " AND `property`.`propertytype` = '$propertytype'";
		/*
		if($bedroom != "" || $bedroom != 0 )
			$where .= " AND `propertyinfo`.`bedroom` = '$bedroom'";	*/
		$query=$this->db->query("SELECT `property`.`id`,`property`.`name` as `property`,`property`.`price`,`builder`.`name` as `builder`,`propertyinfo`.`propertyarea`,`propertyimage`.`image`,`city`.`name` as `city`,`area`.`name` as `locality`,`propertytype`.`name` as `propertytype` FROM `property`
		INNER JOIN `builder` ON `builder`.`id`=`property`.`builder`
		INNER JOIN `propertytype` ON `property`.`propertytype`=`propertytype`.`id`
		INNER JOIN `area` ON `property`.`area` = `area`.`id` 
		INNER JOIN `city` ON `area`.`city`=`city`.`id`
		INNER JOIN `propertyinfo` ON `property`.`id`=`propertyinfo`.`property`
        LEFT JOIN `propertyimage` ON `propertyimage`.`property`=`property`.`id`
		WHERE `property`.`status`=1 $where
		GROUP BY `property`.`id`
		ORDER BY `propertyimage`.`order`,`property`.`name`  ")->result();
		return $query; 
	}
	function getcompleteproperty($property)
	{
		$query['property']=$this->db->query("SELECT `property`.`id`,`property`.`name` as `property`,`property`.`price`,`builder`.`name` as `builder`,`propertyinfo`.`propertyarea`,`propertyinfo`.`propertyage`,`propertyinfo`.`bedroom`,`propertyinfo`.`bathroom`,`propertyinfo`.`kitchen`,`propertyinfo`.`floor`,`propertyinfo`.`presentuse`,`propertyinfo`.`nearby`,`property`.`lat`,`property`.`long`,`property`.`description`,`city`.`name` as `city`,`state`.`name` as `state`,`area`.`name` as `area`,`builderimage`.`image` as `builderimage`,`propertyinfo`.`propertyage`,`property`.`builder`,`builder`.`name` as `buildername`,`builder`.`description` as `builderdesc`,`area`.`city` as `cityid` FROM `property`
		INNER JOIN `builder` ON `builder`.`id`=`property`.`builder` 
		LEFT JOIN `builderimage` ON `builder`.`id`=`builderimage`.`builder`
		INNER JOIN `propertytype` ON `property`.`propertytype`=`propertytype`.`id`
		INNER JOIN `area` ON `property`.`area` = `area`.`id` 
		INNER JOIN `city` ON `area`.`city`=`city`.`id`
		INNER JOIN `state` ON `city`.`state`=`state`.`id`
		INNER JOIN `propertyinfo` ON `property`.`id`=`propertyinfo`.`property`
		WHERE `property`.`status`=1 AND `property`.`id`='$property' 
		GROUP BY `builder`.`id` ")->row();
		$builder = $query['property']->builder;
		$query['bannerimage']=$this->db->query("SELECT `propertyimage`.`image` FROM `builder`
		INNER JOIN `property` ON `property`.`builder`=`builder`.`id` AND `builder` AND `builder`.`id`='$builder'
		INNER JOIN `propertyimage` ON `propertyimage`.`property`
		")->result();
		$query['propertyimage']=$this->db->query("SELECT `image`,`order`,`is_default` FROM `propertyimage` WHERE `property`='$property'")->result();
		$query['propertyamenity']=$this->db->query("SELECT `amenity`.`name`,`amenity`.`icon` FROM `propertyamenity`
		INNER JOIN `amenity` ON `propertyamenity`.`amenity`=`amenity`.`id`
		WHERE `property`='$property'")->result();
		return $query;
	}
}
?>