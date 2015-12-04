<?php

class banner extends CI_Model {
	  // table name
  private $tbl_banner= 'tbl_banner';

  function banner(){
    //parent::Model();
    parent::__construct();
  }

  // get banner with paging
  function getAll(){
    
    return $this->db->get($this->tbl_banner);
  }
  // add new banner
  function save($banner){
    $this->db->insert($this->tbl_banner, $banner);
    return (array)$this->get_by_id($this->db->insert_id())->row();
  }
  // update banner by id
  function modifica($id_banner, $banner){
    $this->db->where('id_banner', $id_banner);
    $this->db->update($this->tbl_banner, $banner);
    return $this->get_by_id($id_banner);
  }
  // delete banner by id
  function delete($id){
    $this->db->where('id_banner', $id);
    $this->db->delete($this->tbl_banner);
  }
  function get_by_id($id_banner){
    $this->db->where('id_banner', $id_banner);
    return $this->db->get($this->tbl_banner);
  }
}