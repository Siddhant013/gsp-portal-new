<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Water extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
    
    }

    public function index() {
    	$data['title'] = 'Water';
    	if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
        else
        {
        
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 6 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            
            if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
            {	 
            	if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
		 {  
			$this->load->view('PrimaryWater',$data);
		 }
		else
		{
			$this->load->view('water',$data);
		}
	     }	
            else
            {
	    	$this->load->view('water',$data);//$this->load->view('waste',$data); this is where problem was, I told you that 2 views might be loaded.
	    }
            
            
        }
    }
    public function set()
    {
        
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,6);
        redirect(base_url("waste"));
    }
	
}
