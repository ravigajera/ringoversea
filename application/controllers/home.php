<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set("display_errors","0");
Class home extends MX_Controller {
	
	 /**
     * Class Constructor
     */
    function __construct(){
        parent::__construct();
		$this->load->model('home_model');		 		
    }
	/**
	* function is used for loading the login page
	*/	
	public function index(){
		/*if($this->session->userdata('is_logged_in')){
			redirect('admin/dashboard');
		}*/
		
		
		$data['main_content'] = 'home.php';
		$this->load->view('include/template',$data);
		//$this->load->view('home',$data);		
	}
	
}
?>