<?php

class All_model extends CI_Model{
	public function get_by_id_row($table,$where)
	{
	    $query = $this->db->get_where($table,$where);
	    return $query->row();
	 }
	function ambil($table,$where)
  {
		return $this->db->get_where($table,$where);
	}

  public function insert_data($table,$data)
  {
    $this->db->insert($table, $data);//coding memasukan db
    return $this->db->insert_id();
  }

  public function update_data($table,$data, $where)
  {
    $this->db->update($table, $data, $where);
    return $this->db->affected_rows();
  }

  public function delete_data($table,$nameid, $id)
  {
    $this->db->where($nameid, $id);
    $this->db->delete($table);
    return $this->db->affected_rows();
  }



}
?>
