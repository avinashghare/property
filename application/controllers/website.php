<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Website extends CI_Controller
{
	public function index( )
	{
		$data[ 'page' ] = 'home';
		$data[ 'title' ] = 'Home';
		$data['city'] = $this->locator_model->getcitydropdown2();
		$data['propertytype'] = $this->propertytype_model->getpropertytypedropdown2();
		$this->load->view( 'fronttemplate',$data );
	}
	public function innerproperty( )
	{
		$data[ 'page' ] = 'innerproperty';
		$data[ 'title' ]     = 'Propert Detail';
		$property = $this->input->get_post('property');
		$data['propertydetails'] = $this->property_model->getcompleteproperty($property);
		$this->load->view( 'fronttemplate',$data );
	}
}
?>