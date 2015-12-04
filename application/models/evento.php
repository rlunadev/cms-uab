<?php

class evento extends CI_Model {
	  // table name
  private $tbl_eventos= 'tbl_eventos';

  function evento(){
    //parent::Model();
    parent::__construct();
  }

  // get Evento with paging
  function getAll(){
    
    return $this->db->get($this->tbl_eventos);
  }
  // add new evento
  function save($evento){
    $this->db->insert($this->tbl_eventos, $evento);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update evento by id
  function modifica($id_eventos, $evento){
    $this->db->where('id_eventos', $id_eventos);
    $this->db->update($this->tbl_eventos, $evento);
    return $this->get_by_id($id_eventos);
  }
  // delete evento by id
  function delete($id){
    $this->db->where('id_eventos', $id);
    $this->db->delete($this->tbl_eventos);
  }
  function get_by_id($id_eventos){
    $this->db->where('id_eventos', $id_eventos);
    return $this->db->get($this->tbl_eventos);
  }
}