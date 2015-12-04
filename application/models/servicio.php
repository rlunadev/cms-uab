<?php

class servicio extends CI_Model {
	  // table name
  private $tbl_servicios= 'tbl_servicios';

  function servicio(){
    //parent::Model();
    parent::__construct();
  }

  // get servicio with paging
  function getAll(){
    
    return $this->db->get($this->tbl_servicios);
  }
  // add new servicio
  function save($servicio){
    $this->db->insert($this->tbl_servicios, $servicio);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update servicio by id
  function modifica($id_servicios, $servicio){
    $this->db->where('id_servicios', $id_servicios);
    $this->db->update($this->tbl_servicios, $servicio);
    return $this->get_by_id($id_servicios);
  }
  // delete servicio by id
  function delete($id){
    $this->db->where('id_servicios', $id);
    $this->db->delete($this->tbl_servicios);
  }
  function get_by_id($id_servicios){
    $this->db->where('id_servicios', $id_servicios);
    return $this->db->get($this->tbl_servicios);
  }
}