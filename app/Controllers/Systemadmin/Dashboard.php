<?php namespace App\Controllers\Systemadmin;

use CodeIgniter\Controller;

class Dashboard extends Controller{
	public function index(){
		$data['title']	= "Atlantis Lite - Bootstrap 4 Admin Dashboard";
		return view('systemadmin/dashboard/index', $data);
	}
}