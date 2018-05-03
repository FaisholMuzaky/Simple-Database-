<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
	}
	public function ubah($Kode_barang=0){
		$data['Kode_barang'] = $Kode_barang;
		$data['brg'] = $this->M_barang->get_barang_bykode($Kode_barang);		
		$this->load->view('v_updatebarang',$data);
	}

	public function update($Kode_barang){
        $data = array(
            'Nama_barang' => $this->input->post('nama_barang'),
            'Harga' => $this->input->post('harga')
        );
		$update = $this->M_barang->update($Kode_barang,$data);
		if ($update) {
			echo "<script>alert('Data berhasil diupdate')</script>";
        	redirect('barang','refresh');
		}
		else{
			echo "<script>alert('Data gagal diupdate')</script>";
			redirect('C_barang','refresh');
		}
		
	}
	public function hapus($Kode_barang){
		$hasil = $this->M_barang->delete($Kode_barang);
        if ($hasil) {
        	echo "<script>alert('Data berhasil dihapus')</script>";
        	redirect('barang','refresh');
        }else{
        	echo "<script>alert('Data gagal dihapus')</script>";
        	redirect('barang','refresh');
        }
        
	}
}
