<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		$this->load->view('templates/');
	}
	public function administradoras()
	{
		return view('administradoras');
	}
	//--------------------------------------------------------------------

}
