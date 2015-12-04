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

class convocatorias extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('convocatoria','',TRUE);
    }

    function convocatoria_get()
    {
        $convocatoria = $this->convocatoria->getAll()->result();
        if($convocatoria)
        {
            $this->response($convocatoria, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el producto'), 404);
        }
    }

    function convocatoria_put()
  {
    try 
    {
       $id_convocatorias=$this->get('id_convocatorias');
       $input_values = $this->put();
       $item = $this->convocatoria->modifica($id_convocatorias, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_eventos), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function convocatoria_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $convocatoria=$this->convocatoria->save($input);
        $this->response($convocatoria, 200);
    }

    function convocatoria_delete()
    {
        $id = $this->get('id_convocatorias');
        $this->convocatoria->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}
}
