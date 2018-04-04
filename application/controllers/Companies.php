<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		
	}
    
    public function create()
    {   $this->load->model('company_model');
    	$data['title']='Create Company';
        
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('company_registered_addr', 'Company Address', 'trim|required');
		$this->form_validation->set_rules('company_phone', 'Company Phone', 'trim|required');
		$this->form_validation->set_rules('company_email', 'Company Email', 'trim|required');
		$this->form_validation->set_rules('company_account_no', 'Company Account Number', 'trim|required');
		$this->form_validation->set_rules('company_bank_name', 'Bank Name', 'trim|required');
		$this->form_validation->set_rules('company_bank_branch', 'Bank Branch', 'trim|required');
		$this->form_validation->set_rules('company_ifsc_code', 'Bank IFSC', 'trim|required');
		$this->form_validation->set_rules('company_website', 'Company Website', 'trim|required');

        
        
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header');
    	$this->load->view('companies/create', $data);
    	$this->load->view('templates/footer');
        }
        else{
  
            $this->company_model->create_company();
            return redirect('courses');
        }
    }
}

/* End of file Company.php */
/* Location: ./application/controllers/Company.php */
