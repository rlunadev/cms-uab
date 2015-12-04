<?php
class contacto extends CI_Model {
	  // table name
  private $tbl_contactos= 'tbl_contactos';

  function contacto(){
    //parent::Model();
    parent::__construct();
  }
  // get Evento with paging
  function getAll(){ 
    return $this->db->get($this->tbl_contactos);
  }
  // add new evento
  function save($contacto){
    $this->db->insert($this->tbl_contactos, $contacto);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update evento by id
  function modifica($id_contacto, $contacto){
    $this->db->where('id_contacto', $id_contacto);
    $this->db->update($this->tbl_contactos, $contacto);
    return $this->get_by_id($id_contacto);
  }
  // delete evento by id
  function delete($id){
    $this->db->where('id_contacto', $id);
    $this->db->delete($this->tbl_contactos);
  }
  function get_by_id($id_contacto){
    $this->db->where('id_contacto', $id_contacto);
    return $this->db->get($this->tbl_contactos);
  }
}