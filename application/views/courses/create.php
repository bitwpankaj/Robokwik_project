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
  <?php echo  form_open_multipart('courses/create',['class' => 'form-horzontal']); ?>		
  <!--?php echo form_hidden('uid', $this->session->userdata('user_id')); ?-->
  <fieldset>
    <legend>Add Course</legend>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      			<label for="inputEmail" class="col-lg-2 control-label">Course Name</label>
      				<div class="col-lg-10">
       			 		<?php echo form_input(['name'=>'course_name','placeholder'=>'Course Name','class'=>'form-control','value'=>set_value('course_name')]); ?>
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
                <?php echo form_textarea(['name'=>'course_description','placeholder'=>'Course Description','class'=>'form-control','value'=>set_value('course_description')]); ?>
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
                <?php echo form_input(['name'=>'trainer_name','placeholder'=>'Trainer Name','class'=>'form-control','value'=>set_value('trainer_name')]); ?>
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
                <?php echo form_input(['name'=>'trainer_profile','placeholder'=>'Trainer Profile','class'=>'form-control','value'=>set_value('trainer_profile')]); ?>
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
                <?php echo form_dropdown('course_type', $course_type,'Java',['class'=>'form-control'] ); ?>
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
                <?php echo form_dropdown('course_level', $courses_level,'Beginner',['class'=>'form-control'] ); ?>
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
                <?php echo form_input(['name'=>'course_certification','placeholder'=>'Course Certification','class'=>'form-control','value'=>set_value('course_certification')]); ?>
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
                <?php echo form_dropdown('company_id', $company_name,'EI Systems',['class'=>'form-control'] ); ?>
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
            <label for="inputEmail" class="col-lg-2 control-label">Institute Name</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('institute_id', $institute_name,'IIT BHU',['class'=>'form-control'] ); ?>
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
            <label for="inputEmail" class="col-lg-2 control-label">Day Slot</label>
              <div class="col-lg-10">
                <?php echo form_dropdown('course_day_slot', $courses_day_slot,'Week',['class'=>'form-control'] ); ?>
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
                <?php echo form_dropdown('course_time_slot', $courses_time_slot,'9:00 am to 12:00 pm',['class'=>'form-control'] ); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_time_slot'); ?-->
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Upload Image</label>
              <div class="col-lg-10">
                <input type="file" name="userfile" size="20" />
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!--?php echo form_error('course_time_slot'); ?-->
      </div>
    </div>  
  


    <br>
      <div class="col-lg-10 col-lg-offset-2">
         <?php echo form_reset(['name'=>'reset', 'value'=>'Reset','class'=>'btn btn-default' ]); ?>
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit','class'=>'btn btn-primary' ]); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>
