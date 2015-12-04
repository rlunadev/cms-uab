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

class multimedias extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('multimedia','',TRUE);
    }

    function multimedia_get()
    {
        $multimedia = $this->multimedia->getAll()->result();
        if($multimedia)
        {
            $this->response($multimedia, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el registro'), 404);
        }
    }

    function multimedia_put()
  {
    try 
    {
       $id_multimedia=$this->get('id_multimedia');
       $input_values = $this->put();
       $item = $this->multimedia->modifica($id_multimedia, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_multimedia), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function multimedia_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $product=$this->multimedia->save($input);
        $this->response($product, 200);
    }

    function multimedia_delete()
    {
        $id = $this->get('id_multimedia');
        $this->multimedia->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}

	
}
