<?php

class comunicado extends CI_Model {
	  // table name
  private $tbl_comunicados= 'tbl_comunicados';

  function comunicado(){
    //parent::Model();
    parent::__construct();
  }
  // get Evento with paging
  function getAll(){ 
    return $this->db->get($this->tbl_comunicados);
  }
  // add new evento
  function save($comunicado){
    $this->db->insert($this->tbl_comunicados, $comunicado);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update evento by id
  function modifica($id_comunicados, $comunicado){
    $this->db->where('id_comunicados', $id_comunicados);
    $this->db->update($this->tbl_comunicados, $comunicado);
    return $this->get_by_id($id_comunicados);
  }
  // delete evento by id
  function delete($id){
    $this->db->where('id_comunicados', $id);
    $this->db->delete($this->tbl_comunicados);
  }
  function get_by_id($id_comunicados){
    $this->db->where('id_comunicados', $id_comunicados);
    return $this->db->get($this->tbl_comunicados);
  }
}