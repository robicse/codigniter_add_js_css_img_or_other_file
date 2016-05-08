<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['maincontent']=$this->load->view('home_content','',true);
		$this->load->view('master',$data);
	}
}
