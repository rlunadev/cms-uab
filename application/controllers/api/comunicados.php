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

class comunicados extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('comunicado','',TRUE);
    }

    function comunicado_get()
    {
        $comunicado = $this->comunicado->getAll()->result();
        if($comunicado)
        {
            $this->response($comunicado, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el producto'), 404);
        }
    }

    function comunicado_put()
  {
    try 
    {
       $id_comunicados=$this->get('id_comunicados');
       $input_values = $this->put();
       $item = $this->comunicado->modifica($id_comunicados, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_eventos), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function comunicado_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $comunicado=$this->comunicado->save($input);
        $this->response($comunicado, 200);
    }

    function comunicado_delete()
    {
        $id = $this->get('id_comunicados');
        $this->comunicado->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}
}
