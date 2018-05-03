<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputbarang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
	}
	public function index(){
		$aksi['action'] = ('inputbarang/input'); 
		$this->load->view('v_inputbarang',$aksi);
	}
	public function input(){
		$kode = $this->input->post('kode_barang');
		$nama = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		if ($kode != '' && $nama != '' && $harga != '' ) {
			$data = array(
                'Kode_barang' => $kode,
                'Nama_barang' => $nama,
                'Harga' => $harga
            );
            $this->M_barang->input_data($data,'barang');
            echo "<script>alert('Data berhasil di-inputkan')</script>";
            redirect('barang','refresh');
		}else{
			echo "<script>alert('Data gagal di-inputkan')</script>";
            redirect('inputbarang','refresh');
		}
	}
}
