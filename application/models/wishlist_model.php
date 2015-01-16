<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Wishlist_model extends CI_Model
{
	public function wishlistsubmit($user,$property)
	{
		$data  = array(
			'user' => $user,
			'property' => $property,
			
		);
		
		$this->db->insert( 'propertywishlist', $data );
		return 1;
	}
	public function viewwishlist()
	{
		$query="SELECT `user`.`name` as `name`,`property`.`name` as `property`,`propertywishlist`.`timestamp` as `timestamp` FROM `propertywishlist`
		INNER JOIN `user` ON `user`.`id` = `propertywishlist`.`user`
		INNER JOIN `property` ON `propertywishlist`.`property` = `property`.`id`		
		ORDER BY `propertywishlist`.`timestamp` DESC";
	   
		$query=$this->db->query($query)->result();
		
		return $query;
	}
	public function viewuserwishlist($user)
	{
		$query="SELECT `user`.`name` as `name`,`property`.`name` as `property`,`propertywishlist`.`timestamp` as `timestamp` FROM `propertywishlist`
		INNER JOIN `user` ON `user`.`id` = `propertywishlist`.`user` AND `propertywishlist`.`user`='$user'
		INNER JOIN `property` ON `propertywishlist`.`property` = `property`.`id`		
		ORDER BY `propertywishlist`.`timestamp` DESC";
	   
		$query=$this->db->query($query)->result();
		
		return $query;
	}
	public function viewpropertywishlist($property)
	{
		$query="SELECT `user`.`name` as `name`,`property`.`name` as `property`,`propertywishlist`.`timestamp` as `timestamp` FROM `propertywishlist`
		INNER JOIN `user` ON `user`.`id` = `propertywishlist`.`user` AND `propertywishlist`.`property`='$property'
		INNER JOIN `property` ON `propertywishlist`.`property` = `property`.`id`		
		ORDER BY `propertywishlist`.`timestamp` DESC";
	   
		$query=$this->db->query($query)->result();
		
		return $query;
	}
}
?>