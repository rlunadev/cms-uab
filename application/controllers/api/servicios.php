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

class servicios extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('servicio','',TRUE);
    }

    function servicio_get()
    {
        $servicio = $this->servicio->getAll()->result();
        if($servicio)
        {
            $this->response($servicio, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el servicio'), 404);
        }
    }

    function servicio_put()
  {
    try 
    {
       $id_servicios=$this->get('id_servicios');
       $input_values = $this->put();
       $item = $this->servicio->modifica($id_servicios, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_servicios), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function servicio_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $product=$this->servicio->save($input);
        $this->response($product, 200);
    }

    function servicio_delete()
    {
        $id = $this->get('id_servicios');
        $this->servicio->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}

	
}
