<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

 public function __construct()
 {
 	parent::__construct();
 	$this->load->model('user_model');

 }
	public function index()
	{
		
	}
    
    public function add_to_cart()
    {
    	if ($this->session->userdata('logged_in')) {
    		$this->form_validation->set_rules('qty', 'Quanity', 'required');
    	if (!$this->form_validation->run()) {
    		redirect('courses');
    	} else {
    		$data=array(
                     'id'      => $this->input->post('id'),
        			 'qty'     => $this->input->post('qty'),
       				 'price'   => $this->input->post('price'),
        			 'name'    => $this->input->post('name'),


    		);
    	//print_r($data);
    	
    	
    	$this->cart->insert($data);
    	redirect('courses');
    	}
    	}
    	$this->form_validation->set_rules('qty', 'Quanity', 'required');
    	if (!$this->form_validation->run()) {
    		redirect('courses/view');
    	} else {
    		$data=array(
                     'id'      => $this->input->post('id'),
        			 'qty'     => $this->input->post('qty'),
       				 'price'   => $this->input->post('price'),
        			 'name'    => $this->input->post('name'),


    		);
    	//print_r($data);
    	
    	
    	$this->cart->insert($data);
    	redirect('courses');
    	}
     redirect('users/login');	
    	
    }

    public function get_cart_data()
    {   
    	$userid=$this->session->userdata('user_id');
    	
    	$data['details']=$this->user_model->get_cart_data_from_db($userid);
        
    	$this->load->view('cart/view',$data);
    }

    public function update_cart_data()
    {
    	$data=$_POST;
    	
    	$this->cart->update($data);

    	redirect('cart/store_cart_data');
    }

     public function store_cart_data()
    {
     // $data1=serialize($this->cart->contents());
     // print_r($data1);
     // $data2=unserialize($data1);
     // print_r($data2);
    $userid=$this->session->userdata('user_id');
    $cartdata=serialize($this->cart->contents());
     //print_r($userid);
    $this->user_model->add_cart_data($userid,$cartdata);
    redirect('cart/get_cart_data');
    }
}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */
