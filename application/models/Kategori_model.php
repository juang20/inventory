<?php 


class Kategori_model extends CI_Model
{
	
	function getDataKategori() {
		$query = $this->db->get('kategori');
		return $query->result();
	}

	function insertDataKategori($data) {
		$this->db->insert('kategori', $data);
	}

	function getDataKategoriDetail($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get('kategori');
		return $query->row();
	}

	function updateDataKategori($id_kategori, $data)
	{
		$this->db->where('id_kategori', $id_kategori);
		$this->db->update('kategori', $data);
	}

	function deleteDataKategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$this->db->delete('kategori');
	}
}

 ?>