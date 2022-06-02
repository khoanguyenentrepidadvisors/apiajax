
<?php
class Api_model extends CI_Model
{
 function fetch_all()
 {
  $this->db->order_by('id', 'DESC');
  return $this->db->get('tbl_sinhvien');
 }

 function insert_api($data)
 {
  $this->db->insert('tbl_sinhvien', $data);
  if($this->db->affected_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function fetch_single_user($id)
 {
  $this->db->where("id", $id);
  $query = $this->db->get('tbl_sinhvien');
  return $query->result_array();
 }
 function update_api($id, $data)
 {
  $this->db->where("id", $id);
  $this->db->update("tbl_sinhvien", $data);
 }
 
 function delete_single_user($id)
 {
  $this->db->where("id", $id);
  $this->db->delete("tbl_sinhvien");
  if($this->db->affected_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }
}
