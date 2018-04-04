<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
	     $this->load->model('course_model');
	}

	public function index($offset=0)

	{   
		//Pagination Config
  
		$config['base_url'] = base_url().'/courses/index/';
        $config['total_rows'] = $this->db->count_all('courses');
        $config['per_page'] = 5;
        $config['uri_segment']=3;

        //Imitialize pagination
        
        $this->pagination->initialize($config);
        
        

		$data['title']="Latest Courses";
        $data['courses'] = $this->course_model->get_courses(FALSE, $config['per_page'],$offset);
		// print_r($data['courses']);
		$this->load->view('templates/header');
        $this->load->view('courses/index', $data);
		$this->load->view('templates/footer');
		
	}
	public function view($slug=NULL){
     
	   
    	$data['course'] = $this->course_model->get_courses($slug);
       
	    if(empty($data['course'])) {
			show_404();
		}
        $data['course_name']=$data['course']['course_name'];
        
		$this->load->view('templates/header');
        $this->load->view('courses/view', $data);
		$this->load->view('templates/footer');
	}
    
	public function create()
	{  if ($this->session->userdata('logged_in')) {
		 if ($this->session->userdata('user_id')==1) {
		 	$data['title']="Create Course";
		$data['course_type']= $this->course_model->get_courses_type();
		$data['company_name']=$this->course_model->get_companies();
		$data['institute_name']=$this->course_model->get_institutes();
       
		
		$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('course_description', 'Course Description', 'trim|required');
		$this->form_validation->set_rules('trainer_name', 'Trainer Name', 'trim|required');
		$this->form_validation->set_rules('trainer_profile', 'Trainer Profile', 'trim|required');
		$this->form_validation->set_rules('course_certification', 'Course Certification', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('templates/header');
        $this->load->view('courses/create', $data);
		$this->load->view('templates/footer');
			
		} else {

			//Upload Image
			

			$config['upload_path']          = './assets/images/courses';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $course_images='noimage.jpg';
                }
            else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $course_images=$_FILES['userfile']['name'];
                }
			
			$this->course_model->create_course($course_images);
		    redirect('courses');
			
			

		}
		 }
		 else{
		 	redirect('courses');
		 }
	}

		


		
		
		
		
		
	}

	public function delete($course_id)
	{ if($this->session->userdata('logged_in')) {
		 if ($this->session->userdata('user_id')==1) {
	    $this->course_model->delete_course($course_id);
		redirect('courses');
		}
	}
     redirect('courses');
	}
  
    public function edit($slug)
	{  
		if($this->session->userdata('logged_in')) {
		 if ($this->session->userdata('user_id')==1) {
		
		$data['course'] = $this->course_model->get_courses($slug);

       
	    if(empty($data['course'])) {
			show_404();
		}
    
    	$data['title']="Edit Page";
    
		$this->load->view('templates/header');
        $this->load->view('courses/edit', $data);
		$this->load->view('templates/footer');
		
        }
    }
    redirect('courses');
	}


	public function update()
	{   if($this->session->userdata('logged_in')) {
		 if ($this->session->userdata('user_id')==1) {
		$this->load->model('course_model');
		$this->course_model->update_course();
		
		redirect('courses');
	}
  }
    redirect('courses');		
	}


}

/* End of file Courses.php */
/* Location: ./application/controllers/Courses.php */
