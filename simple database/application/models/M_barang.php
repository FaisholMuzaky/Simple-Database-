<?php 
 
class M_barang extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function get_barang() {
        return $this->db->get('barang');
    }
    public function get_barang_bykode($Kode_barang) {
        $query = $this->db->get_where('barang', array('Kode_barang' => $Kode_barang));
        return $query->row_array();
    }
    public function update($Kode_barang,$data){
		$this->db->where('Kode_barang', $Kode_barang);
        return $this->db->update('barang', $data);
	}
	public function delete($Kode_barang){
		$this->db->where('Kode_barang', $Kode_barang);
		return $this->db->delete('barang');
	}
}
?>