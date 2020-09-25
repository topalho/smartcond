<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('view_login');
		$this->load->view('/');
	}
	public function administradoras()
	{
		return view('administradoras');
	}
	//--------------------------------------------------------------------

}
