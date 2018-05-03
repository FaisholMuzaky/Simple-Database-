<?php 
 
class M_penjualan extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function get_penjualan() {
		$this->db->select('penjualan.*, barang.nama_barang'); 
    	$this->db->from('penjualan');
        $this->db->join('barang', 'barang.kode_barang = penjualan.kode_barang','left');
        $data =  $this->db->get();
		return $data->result();
    }
     public function get_barang_bynota($no_nota) {
        $query = $this->db->get_where('penjualan', array('No_nota' => $no_nota));
        return $query->row_array();
    }
     public function update($no_nota,$data){
		$this->db->where('no_nota', $no_nota);
        return $this->db->update('penjualan', $data);
	}
	public function delete($no_nota){
		$this->db->where('no_nota', $no_nota);
		return $this->db->delete('penjualan');
	}
    
}
?>