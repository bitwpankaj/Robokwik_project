<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		
	}

	public function register()
	{
		$data['title']='User registration';
	    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
	    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
	    $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
	    $this->form_validation->set_rules('user_name', 'username', 'trim|required|min_length[5]|is_unique[users.user_name]',array('is_unique' => 'This %s already exists.'));
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    $this->form_validation->set_rules('password_repeat', 'Repeat Name','trim|required|matches[password]');


	    if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('templates/header');
		    $this->load->view('users/register', $data);
		    $this->load->view('templates/footer');
	    } else {
         
            $this->user_model->register_user();
            $this->session->flashdata('user_registered','You are registered. You can now login.');
            return redirect('courses');
	    	
	    }
		
	}

	public function login()
	{
		$data['title']='Login page';
		$this->load->view('templates/header');
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer');
	}

	public function login_validation()
	{
        $data['title']='Login';
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    


	    if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('templates/header');
		    $this->load->view('users/login_validation', $data);
		    $this->load->view('templates/footer');
	    } else {
               $username=$this->input->post('username');
               $password=$this->input->post('password');
               $uid=$this->user_model->login_user($username,$password);
               //print_r($uid[0]['user_id']);
               //$this->load->view('users/login_dashboard', $data);
	    	   $userid=$uid[0]['user_id'];
	    	   if ($userid) {
	    	   	    //Create Session
	    	   	    $user_data =array(
                       'user_id' =>$uid[0]['user_id'],  
                       'username' =>$uid[0]['user_name'],
                       'logged_in' => true
	    	   	    	);

	    	   	    
	    	   	    
	    	   	    $this->session->set_userdata($user_data);

	    	   	    $this->session->set_flashdata('user_loggedin', 'You are logged in');

	    	   	    redirect('courses');
                   

	    	   } else {
	    	   	
	    	   	//Set Message
                $this->session->set_flashdata('loggedin_invalid', 'Your login in  is inavalid');
                redirect('courses');
	    	   }
	    	   
	    }


        

	}

//Logout user
public function logout()
{
	$this->session->unset_userdata('logged_in');
	$this->session->unset_userdata('user_id');
	$this->session->unset_userdata('username');

	//Set message
	$this->session->set_flashdata('user_logout', 'You have logged out.');
	redirect('users/login');

}


}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
