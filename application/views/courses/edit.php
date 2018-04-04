<h2><?= $title; ?></h2>

<!--
course_name    
slug
course_description
trainer_name
trainer_profile
course_type
course_level
course_certification
company_name
course_time_slot
course_day_slot
course_start_date
course_end_date
course_timing
-->
<?php $courses_type = array(
                         'Java' => 'Java',
                         'Android'=> 'Android',
                         'IOT ' =>'IOT',
                         'Digital Marketing'=>'Digital Marketing'







                        ); 
                        
       $courses_level = array(
                         'Beginner' => 'Beginner',
                         'Intermediate'=> 'Intermediate',
                         'Advanced ' =>'Advanced'
                        ); 
         $courses_company = array(
                         'EI Systems' => 'EI Systems',
                         'Technix IIT BHU'=> 'Technix IIT BHU'
                        );    
        $courses_day_slot = array(
                         'Week'=>'Week',
                         'Weekend'=>'Weekend'
                         
                        );
        $courses_time_slot = array(
                         
                         '9:00 am to 12:00 pm ' => '9:00 am to 12:00 pm',
                         '12:00 pm to 3:00 pm'=> '12:00 pm to 3:00 pm',
                         '3:00 pm to 6:00 pm'=> '3:00 pm to 6:00 pm'
                        );                                                
  ?>

<div class="container">
  <?php echo  form_open('courses/update',['class' => 'form-horzontal']); ?>		
  <!--?php echo form_hidden('uid', $this->session->userdata('user_id')); ?-->
  <input type="hidden"  name="course_id" value="<?php echo $course['course_id'] ?>"
  <fieldset>
    <legend>Edit Course</legend>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      			<label for="inputEmail" class="col-lg-2 control-label">Course Name</label>
      				<div class="col-lg-10">
       			 		<?php echo form_input(['name'=>'course_name','placeholder'=>'Course Name','class'=>'form-control','value'=>$course['course_name']]); ?>
      				</div>
    		</div>
    	</div>

    	<div class="col-lg-6">
    		<?php echo form_error('course_name'); ?>
    	</div>
    </div>	

    <br>


    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Course Description</label>
              <div class="col-lg-10">
                <?php echo form_textarea(['name'=>'course_description','placeholder'=>'Course Description','class'=>'form-control','value'=>$course['course_description']]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('course_description'); ?>
      </div>
    </div>  

    <br>

    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Trainer</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'trainer_name','placeholder'=>'Trainer Name','class'=>'form-control','value'=>$course['trainer_name']]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('trainer_name'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Trainer Profile</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'trainer_profile','placeholder'=>'Trainer Profile','class'=>'form-control','value'=>$course['trainer_profile']]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('trainer_profile'); ?>
      </div>
    </div>  

    <br>

     <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Course Type</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('course_type', $courses_type,$course['course_type'],['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_type'); ?-->
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Course Level</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('course_level', $courses_level,$course['course_level'],['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_level'); ?-->
      </div>
    </div>  

    <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Certification</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'course_certification','placeholder'=>'Course Certification','class'=>'form-control','value'=>$course['course_certification']]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('course_certification'); ?>
      </div>
    </div>  


    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Company</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('company_name', $courses_company,$course['company_name'],['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('company_name'); ?-->
      </div>
    </div>  

    <br>
     <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Day Slot</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('course_day_slot', $courses_day_slot,$course['course_day_slot'],['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_day_slot'); ?-->
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Time Slot</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('course_time_slot', $courses_time_slot,$course['course_time_slot'],['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_time_slot'); ?-->
      </div>
    </div>  

    <br>

    <!--div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email id</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_email','placeholder'=>'Company Email','class'=>'form-control','value'=>set_value('company_email')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_email'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Account no.</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_account_no','placeholder'=>'Account Number','class'=>'form-control','value'=>set_value('company_account_no')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_account_no'); ?>
      </div>
    </div>  

    <br>

  



    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Branch</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_bank_branch','placeholder'=>'Bank Branch','class'=>'form-control','value'=>set_value('company_bank_branch')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_bank_branch'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">IFSC Code</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_ifsc_code','placeholder'=>'IFSC Code','class'=>'form-control','value'=>set_value('company_ifsc_code')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_ifsc_code'); ?>
      </div>
    </div-->  


    <br>
      <div class="col-lg-10 col-lg-offset-2">
         <?php echo form_reset(['name'=>'reset', 'value'=>'Reset','class'=>'btn btn-default' ]); ?>
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit','class'=>'btn btn-primary' ]); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>