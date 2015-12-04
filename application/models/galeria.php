<?php
class galeria extends CI_Model {
	  // table name
  private $tbl_galerias= 'tbl_galeria';

  function galeria(){
    //parent::Model();
    parent::__construct();
  }
  // get Evento with paging
  function getAll(){ 
    return $this->db->get($this->tbl_galerias);
  }
  // add new evento
  function save($galeria){
    $this->db->insert($this->tbl_galerias, $galeria);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update evento by id
  function modifica($id_galeria, $galeria){
    $this->db->where('id_galeria', $id_galeria);
    $this->db->update($this->tbl_galerias, $galeria);
    return $this->get_by_id($id_galeria);
  }
  // delete evento by id
  function delete($id){
    $this->db->where('id_galeria', $id);
    $this->db->delete($this->tbl_galerias);
  }
  function get_by_id($id_galeria){
    $this->db->where('id_galeria', $id_galeria);
    return $this->db->get($this->tbl_galerias);
  }
}