<div class="container">
  <?php echo  form_open_multipart('companies/create',['class' => 'form-horzontal']); ?>		
  <!--?php echo form_hidden('uid', $this->session->userdata('user_id')); ?-->
  <fieldset>
    <legend><?= $title; ?></legend>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      			<label for="inputEmail" class="col-lg-2 control-label">Company Name</label>
      				<div class="col-lg-10">
       			 		<?php echo form_input(['name'=>'company_name','placeholder'=>'Company Name','class'=>'form-control','value'=>set_value('company_name')]); ?>
      				</div>
    		</div>
    	</div>

    	<div class="col-lg-6">
    		<?php echo form_error('company_name'); ?>
    	</div>
    </div>	

    <br>


    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Company Address</label>
              <div class="col-lg-10">
                <?php echo form_textarea(['name'=>'company_registered_addr','placeholder'=>'Course Address','class'=>'form-control','value'=>set_value('company_registered_addr')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_registered_addr'); ?>
      </div>
    </div>  

    <br>

    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Phone Number</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_phone','placeholder'=>'Phone number','class'=>'form-control','value'=>set_value('company_phone')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('	company_phone'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Company Email</label>
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
            <label for="inputEmail" class="col-lg-2 control-label">Account number</label>
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
            <label for="inputEmail" class="col-lg-2 control-label">Bank Name</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_bank_name','placeholder'=>'Bank Name','class'=>'form-control','value'=>set_value('company_bank_name')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_bank_name'); ?>
      </div>
    </div>  

 <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Bank Branch </label>
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
            <label for="inputEmail" class="col-lg-2 control-label">Bank IFSC </label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_ifsc_code','placeholder'=>'Bank Branch','class'=>'form-control','value'=>set_value('company_ifsc_code')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_ifsc_code'); ?>
      </div>
    </div>  


    <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Company Website </label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'company_website','placeholder'=>'Company Website','class'=>'form-control','value'=>set_value('company_website')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('company_website'); ?>
      </div>
    </div>  


    <br>
    

      <div class="col-lg-6">
        <!--?php echo form_error('course_time_slot'); ?-->
      </div>
    </div>  

    <br>

    


    <br>
      <div class="col-lg-10 col-lg-offset-2">
         <?php echo form_reset(['name'=>'reset', 'value'=>'Reset','class'=>'btn btn-default' ]); ?>
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit','class'=>'btn btn-primary' ]); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>
