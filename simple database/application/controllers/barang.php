<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index(){
		$data['barang'] = $this->M_barang->get_barang();
		$this->load->view('v_barang',$data);
	}
}
