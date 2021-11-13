<?php

class About extends Controller {

	public function index()
	{
		$data['title'] = 'UTS INTERNET PUBLISHER';
		$data['title2'] = 'Nama Kelompok';
		$data['anggota1'] = 'Muh. Rizal';
		$data['NIM1'] = '18083000034';
		$data['kelas'] = '7A';

		$data['anggota2'] = 'Devienta Ayu Rachmasari';
		$data['NIM2'] = '18083000076';
		$data['kelas'] = '7A';

		$data['anggota3'] = 'Dhita Alifia Alfianty';
		$data['NIM3'] = '18083000169';
		$data['kelas'] = '7A';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
}