<?php

class convocatoria extends CI_Model {
	  // table name
  private $tbl_convocatorias= 'tbl_convocatorias';

  function convocatoria(){
    //parent::Model();
    parent::__construct();
  }
  // get Evento with paging
  function getAll(){ 
    return $this->db->get($this->tbl_convocatorias);
  }
  // add new evento
  function save($convocatoria){
    $this->db->insert($this->tbl_convocatorias, $convocatoria);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update evento by id
  function modifica($id_convocatorias, $convocatoria){
    $this->db->where('id_convocatorias', $id_convocatorias);
    $this->db->update($this->tbl_convocatorias, $convocatoria);
    return $this->get_by_id($id_convocatorias);
  }
  // delete evento by id
  function delete($id){
    $this->db->where('id_convocatorias', $id);
    $this->db->delete($this->tbl_convocatorias);
  }
  function get_by_id($id_convocatorias){
    $this->db->where('id_convocatorias', $id_convocatorias);
    return $this->db->get($this->tbl_convocatorias);
  }
}