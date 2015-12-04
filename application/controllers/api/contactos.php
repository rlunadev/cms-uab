<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic product interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class contactos extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('contacto','',TRUE);
    }

    function contacto_get()
    {
        $contacto = $this->contacto->getAll()->result();
        if($contacto)
        {
            $this->response($contacto, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el registro'), 404);
        }
    }

    function contacto_put()
  {
    try 
    {
       $id_contacto=$this->get('id_contacto');
       $input_values = $this->put();
       $item = $this->contacto->modifica($id_contacto, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_eventos), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function contacto_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $contacto=$this->contacto->save($input);
        $this->response($contacto, 200);
    }

    function contacto_delete()
    {
        $id = $this->get('id_contacto');
        $this->contacto->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}
}
