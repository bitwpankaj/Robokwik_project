<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

	public function index()
	{
		
	}
	public function create_company()
	{
		$data = array(

		  'company_name' =>$this->input->post('company_name') ,
		  'company_registered_addr' =>$this->input->post('company_registered_addr') ,
		  'company_phone' =>$this->input->post('company_phone') ,
		  'company_email' =>$this->input->post('company_email') ,
		  'company_account_no'=>$this->input->post('company_account_no'),
		  'company_bank_name' =>$this->input->post('company_bank_name') ,
		  'company_bank_branch' =>$this->input->post('company_bank_branch') ,
		  'company_ifsc_code' =>$this->input->post('company_ifsc_code') ,
		  'company_website' =>$this->input->post('company_website'),
		 
		  );
		return $this->db->insert('company_details',$data);
	}

}

/* End of file Company_model.php */
/* Location: ./application/models/Company_model.php */
