<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {




 public function register_user()
 {
 	$data = array(
                  'first_name' =>$this->input->post('first_name') ,
                  'last_name' =>$this->input->post('last_name') ,
                  'user_email'=>$this->input->post('user_email') ,
                  'user_name'=>$this->input->post('user_name'),
                  'password'=> $this->input->post('password')
                 );
 	$this->db->insert('users', $data);
    $this->session->set_flashdata('You have been registered and now you can login');

 	return redirect('courses');
 }
	

public function login_user($username,$password)
	{

              

              $this->db->where('user_name =', $username);
              $this->db->or_where('user_email =', $username);
              $this->db->where('password', $password);
                
                
		       $query = $this->db->get('users');
         
                $res= $query->result_array();
                return $res;
}

//Logout user
public function logout()
{
	
}

public function add_cart_data($userid,$cartdata)
{
	$data=array('prev_cart_data'=>$cartdata);
	$this->db->where('user_id', $userid);
	$this->db->update('users', $data);
	return redirect();

}

public function get_cart_data_from_db($userid)
{
	       $query=$this->db->get_where('users',array('user_id' => $userid));
  	     $res= $query->row_array();
  	     return $res;
}

}
/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
