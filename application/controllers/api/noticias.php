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

class noticias extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->model('noticia','',TRUE);
    }

    function noticia_get()
    {
        $noticia = $this->noticia->getAll()->result();
        if($noticia)
        {
            $this->response($noticia, 200);
        }
        else
        {
            $this->response(array('error' => 'no se encontro el producto'), 404);
        }
    }

    function noticia_put()
  {
    try 
    {
       $id_noticias=$this->get('id_noticia');
       $input_values = $this->put();
       $item = $this->noticia->modifica($id_noticia, $input_values);
       $this->response($item, 200);
       //$this->response(array('id'=>$id_noticias), 200);
    }
    catch (Exception $e) 
    {
     $this->response(array("error" => $e->getMessage()), 404);
    }
  }
    function noticia_post()
    {
        $input=(array)json_decode(file_get_contents("php://input"));
        $product=$this->noticia->save($input);
        $this->response($product, 200);
    }

    function noticia_delete()
    {
        $id = $this->get('id_noticia');
        $this->noticia->delete($id);
        $this->response(array('param'=>$id), 200);
    }
	function send_post()
	{
	var_dump($this->request->body);
	}

	
}
