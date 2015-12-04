<?php

class actividad extends CI_Model {
	  // table name
  private $tbl_actividad= 'tbl_actividad';

  function actividad(){
    //parent::Model();
    parent::__construct();
  }

  // get actividad with paging
  function getAll(){
    
    return $this->db->get($this->tbl_actividad);
  }
  // add new actividad
  function save($actividad){
    $this->db->insert($this->tbl_actividad, $actividad);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update actividad by id
  function modifica($id_actividad, $actividad){
    $this->db->where('id_actividad', $id_actividad);
    $this->db->update($this->tbl_actividad, $actividad);
    return $this->get_by_id($id_actividad);
  }
  // delete actividad by id
  function delete($id){
    $this->db->where('id_actividad', $id);
    $this->db->delete($this->tbl_actividad);
  }
  function get_by_id($id_actividad){
    $this->db->where('id_actividad', $id_actividad);
    return $this->db->get($this->tbl_actividad);
  }
}