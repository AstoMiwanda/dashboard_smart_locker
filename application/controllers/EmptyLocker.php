<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmptyLocker extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        $this->load->model('M_EmptyLocker');
	}
	
	public function index()
	{
		$data_nav 	= array('page' => 'empty');
        $data 		= array('status' => $this->get_status());
		$this->load->view('template/header');
		$this->load->view('template/navbar_top');
		$this->load->view('template/navbar_left', $data_nav);
		$this->load->view('empty_locker', $data);
		$this->load->view('template/footer');		
	}
 
    function get_status(){
        return $this->M_EmptyLocker->getStatusRFTAG();        
    }
	
	/*
    function save(){
        $data=$this->product_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->product_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->product_model->delete_product();
        echo json_encode($data);
	}
	*/
}
