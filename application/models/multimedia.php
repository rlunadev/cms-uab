<?php

class multimedia extends CI_Model {
	  // table name
  private $tbl_multimedia= 'tbl_multimedia';

  function multimedia(){
    //parent::Model();
    parent::__construct();
  }

  // get multimedia with paging
  function getAll(){
    
    return $this->db->get($this->tbl_multimedia);
  }
  // add new multimedia
  function save($multimedia){
    $this->db->insert($this->tbl_multimedia, $multimedia);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update multimedia by id
  function modifica($id_multimedia, $multimedia){
    $this->db->where('id_multimedia', $id_multimedia);
    $this->db->update($this->tbl_multimedia, $multimedia);
    return $this->get_by_id($id_multimedia);
  }
  // delete multimedia by id
  function delete($id){
    $this->db->where('id_multimedia', $id);
    $this->db->delete($this->tbl_multimedia);
  }
  function get_by_id($id_multimedia){
    $this->db->where('id_multimedia', $id_multimedia);
    return $this->db->get($this->tbl_multimedia);
  }
}