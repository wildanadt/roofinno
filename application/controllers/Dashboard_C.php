<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_C extends CI_Controller {

	public function index()
	{
		$this->load->view('VDashboard_Dashboard');
		
	}

	public function Dashboard_Produksi()
	{
		$this->load->view('VDashboard_Produksi');
	}

	public function Dashboard_Konsumsi()
	{
		$this->load->view('VDashboard_Konsumsi');
	}

	public function Dashboard_Performa()
	{
		$this->load->view('VDashboard_Performa');
	}

	public function Dashboard_Penghematan()
	{
		$this->load->view('VDashboard_Penghematan');
	}

	public function Dashboard_Baterai()
	{
		$this->load->view('VDashboard_Baterai');
	}

	public function Dashboard_Laporan()
	{
		$this->load->view('VDashboard_Laporan');
	}

	public function Dashboard_Penjadwalan()
	{
		$this->load->view('VDashboard_Penjadwalan');
	}

	public function Dashboard_Pengaturan()
	{
		$this->load->view('VDashboard_Pengaturan');
	}	
}