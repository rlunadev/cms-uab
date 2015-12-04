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

class galerias extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('galeria','',TRUE);
    }

    function galeria_get()
    {
        $galeria = $this->galeria->getAll()->result();
        if($galeria)
        {
            $this->response($galeria, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el producto'), 404);
        }
    }

    function galeria_put()
  {
    try 
    {
       $id_galeria=$this->get('id_galeria');
       $input_values = $this->put();
       $item = $this->galeria->modifica($id_galeria, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_eventos), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function galeria_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $galeria=$this->galeria->save($input);
        $this->response($galeria, 200);
    }

    function galeria_delete()
    {
        $id = $this->get('id_galeria');
        $this->galeria->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}
}
