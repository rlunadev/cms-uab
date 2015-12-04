<?php

class noticia extends CI_Model {
	  // table name
  private $tbl_noticias= 'tbl_noticias';

  function noticia(){
    //parent::Model();
    parent::__construct();
  }

  // get noticia with paging
  function getAll(){
    
    return $this->db->get($this->tbl_noticias);
  }
  // add new noticia
  function save($noticia){
    $this->db->insert($this->tbl_noticia, $noticia);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update noticia by id
  function modifica($id_noticias, $noticia){
    $this->db->where('id_noticia', $id_noticia);
    $this->db->update($this->tbl_noticia, $noticia);
    return $this->get_by_id($id_noticias);
  }
  // delete noticia by id
  function delete($id){
    $this->db->where('id_noticia', $id);
    $this->db->delete($this->tbl_noticia);
  }
  function get_by_id($id_noticia){
    $this->db->where('id_noticia', $id_noticia);
    return $this->db->get($this->tbl_noticia);
  }
}