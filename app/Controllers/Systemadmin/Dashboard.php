<?php namespace App\Controllers\Systemadmin;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
	public function index()
	{
		return view('systemadmin/index');
	}
}