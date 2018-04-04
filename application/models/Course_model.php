<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

  public function get_courses($slug = FALSE,$limit=FALSE,$offset=FALSE)
  {
  	if ($slug===FALSE) {
  		if ($limit) {
  			$this->db->limit($limit,$offset);
  		}
         
		 $this->db->order_by('courses.course_id','desc');

		 $this->db->join('course_type_details', 'course_type_details.id = courses.course_type_id');
		 $this->db->join('company_details', 'company_details.company_id = courses.company_id');
		 $this->db->join('institute', 'institute.institute_id = courses.institute_id');
		 
  		 $query=$this->db->get('courses');
  		 return $query->result_array();
  	}

  	     $query=$this->db->get_where('courses',array('slug' => $slug));
  	     return $query->row_array();

  }

  public function create_course($course_images)
  {
	  $slug = url_title($this->input->post('course_name'));
      
      $getcompanyid=$this->input->post('company_id');
      $getinstituteid=$this->input->post('institute_id');
      $getcoursecatid=$this->input->post('course_type');
      print_r($getcompanyid);
      //$getcompanyname=$this->db->select('company_name')->from('company_details')->where('company_id',$getcompanyid);
      //$this->db->select('company_name')->from('company_details')->where('company_id',$getcompanyid);
     // $getcompany=$this->db->get();
      //$getcompanyname=$getcompany->result();
     //
     /*$getcompany = $this->db->select('company_name')
                  ->from('company_details')
                  ->join('company_details', 'company_details.id = courses.company_id')
                  ->get();*/
     // $this->db->select('company_name');
     // $this->db->from('company_details');
     // $this->db->where('company_id', 1);
      $getcompany = $this->db->get_where('company_details',array('company_id'=> $getcompanyid));
      $getcompanyname=$getcompany->result_array();
     // print_r($getcompanyname[0]['company_name']);
      $getcom=$getcompanyname[0]['company_name'];
      
      $getcomp = (string)$getcom;

      //print_r($getcomp);
     $getinstitute = $this->db->get_where('institute',array('institute_id'=> $getinstituteid));
      $getinstitutename=$getinstitute->result_array();
     // print_r($getcompanyname[0]['company_name']);
      $getinst=$getinstitutename[0]['institute_location'];
      
      $getinstname = (string)$getinst;

      $getcoursetype = $this->db->get_where('course_type_details',array('id'=> $getcoursecatid));
      $getcoursetypename=$getcoursetype->result_array();
     // print_r($getcompanyname[0]['company_name']);
      $getct=$getcoursetypename[0]['name'];
      
      $getctname = (string)$getct;

	  $data = array(

		  'course_name' =>$this->input->post('course_name') ,
		  'slug'  => $slug,
		  'course_description' =>$this->input->post('course_description') ,
		  'trainer_name' =>$this->input->post('trainer_name') ,
		  'trainer_profile' =>$this->input->post('trainer_profile') ,
		  'course_type_id'=>$getcoursecatid,
		  'course_type_name'=>$getctname,
		  'course_level' =>$this->input->post('course_level') ,
		  'course_certification' =>$this->input->post('course_certification') ,
		  'institute_id' =>$getinstituteid ,
		  'course_location'=>$getinstname,
		  'company_id' => $getcompanyid,
		  'company_name'=>$getcomp,
		  'course_time_slot' =>$this->input->post('course_time_slot') ,
		  'course_day_slot' =>$this->input->post('course_day_slot'),
		  'course_images' => $course_images
		   
		  
		  );

    return $this->db->insert('courses', $data);
			  
  }	


  public function delete_course($course_id)
  {
	  $this->db->where('course_id',$course_id);
	  $this->db->delete('courses');
	  return true;
	  
  }

  public function update_course()
  {

	  $slug = url_title($this->input->post('course_name'));

	  $data = array(

		  'course_name' =>$this->input->post('course_name') ,
		  'slug'  => $slug,
		  'course_description' =>$this->input->post('course_description') ,
		  'trainer_name' =>$this->input->post('trainer_name') ,
		  'trainer_profile' =>$this->input->post('trainer_profile') ,
		  'course_type' =>$this->input->post('course_type') ,
		  'course_level' =>$this->input->post('course_level') ,
		  'course_certification' =>$this->input->post('course_certification') ,
		  'company_id' =>$this->input->post('company_id') ,
		  'course_time_slot' =>$this->input->post('course_time_slot') ,
		  'course_day_slot' =>$this->input->post('course_day_slot') 
		  
		  );
    
	$this->db->where('course_id', $this->input->post('course_id'));
	
    return $this->db->update('courses', $data);
	 
  }


  public function get_courses_type()
  {
	   
	   $this->db->order_by('id');
	   
	  $query=$this->db->get('course_type_details');
	  $return = array();
         if($query->num_rows() > 0) {
         foreach($query->result_array() as $row) {
             $return[$row['id']] = $row['name'];
          }
	  return $return;
		 }   
	   
  }


   public function get_companies()
  {
	   
	   $this->db->order_by('company_id');
	   
	  $query=$this->db->get('company_details');
	  $res = array();
         if($query->num_rows() > 0) {
         foreach($query->result_array() as $row) {
             $res[$row['company_id']] = $row['company_name'];
          }
	  return $res;
		 }   
	   
  }
  public function get_institutes()
  {
  	$query=$this->db->get('institute');
  	$res_institutes=array();
  	     if($query->num_rows() > 0) {
         foreach($query->result_array() as $row) {
             $res_institutes[$row['institute_id']] = $row['institute_name'];
          }
	  return $res_institutes;
		 }   
  }
}

/* End of file Course_model.php */
/* Location: ./application/models/Course_model.php */
