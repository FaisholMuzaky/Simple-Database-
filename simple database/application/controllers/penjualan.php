<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_penjualan');
		$this->load->model('M_barang');
	}

	public function index(){
		$data['penjualan'] = $this->M_penjualan->get_penjualan();
		$this->load->view('v_penjualan',$data);
	}
	public function tambah(){
		$aksi['barang'] = $this->M_barang->get_barang();
		$this->load->view('v_inputpenjualan',$aksi);
	}
	public function input(){
		$nota = $this->input->post('nota');
		$tanggal = $this->input->post('tanggal');
		$kode = $this->input->post('kode_barang');
		$jumlah = $this->input->post('jumlah');
		if ($nota != '' && $tanggal != '' && $kode != '' && $jumlah != '' ) {
			$data = array(
                'no_nota' => $nota,
                'tanggal' => $tanggal,
                'kode_barang' => $kode,
                'jumlah' => $jumlah
            );
            $this->M_penjualan->input_data($data,'penjualan');
            echo "<script>alert('Data Penjualan berhasil di-inputkan')</script>";
            redirect('penjualan','refresh');
		}else{
			echo "<script>alert('Data gagal di-inputkan')</script>";
            redirect('penjualan/tambah','refresh');
		}
		
	}
	public function ubah($no_nota=0){
		$data['no_nota'] = $no_nota;
		$data['pjl'] = $this->M_penjualan->get_barang_bynota($no_nota);	
		$data['barang'] = $this->M_barang->get_barang();	
		$this->load->view('v_updatepenjualan',$data);
	}
	public function update($no_nota){
        $data = array(
			'tanggal' => $this->input->post('tanggal'),
			'kode_barang' => $this->input->post('kode_barang'),
			'jumlah' => $this->input->post('jumlah')
        );
		$update = $this->M_penjualan->update($no_nota,$data);
		if ($update) {
			echo "<script>alert('Data penjualan berhasil diupdate')</script>";
        	redirect('penjualan/index','refresh');
		}
		else{
			echo "<script>alert('Data penjualan gagal diupdate')</script>";
			redirect('penjualan/ubah','refresh');
		}
		
	}
	public function hapus($no_nota){
		$hasil = $this->M_penjualan->delete($no_nota);
        if ($hasil) {
        	echo "<script>alert('Data penjualan berhasil dihapus')</script>";
        	redirect('penjualan/index','refresh');
        }else{
        	echo "<script>alert('Data penjualan gagal dihapus')</script>";
        	redirect('penjualan/index','refresh');
        }
	}
}
