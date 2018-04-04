<?php echo form_open('users/register',['class' => 'form-horzontal']); ?>
 <fieldset>
 	<legend><?= $title;?></legend>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="first_name" class="col-lg-2 control-label">First Name</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'first_name','placeholder'=>'First Name','class'=>'form-control','value'=>set_value('first_name')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('first_name'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="last_name" class="col-lg-2 control-label">Last name</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'last_name','placeholder'=>'Last Name','class'=>'form-control','value'=>set_value('last_name')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('last_name'); ?>
      </div>
    </div>  

    <br>
    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="user_email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'user_email','placeholder'=>'Email','class'=>'form-control','value'=>set_value('user_email')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('user_email'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="use_name" class="col-lg-2 control-label">User Name</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'user_name','placeholder'=>'Username','class'=>'form-control','value'=>set_value('user_name')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('user_name'); ?>
      </div>
    </div>  

    <br>
    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="last_name" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <?php echo form_password(['name'=>'password','placeholder'=>'Password','class'=>'form-control','value'=>set_value('password')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('password'); ?>
      </div>
    </div>  

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="last_name" class="col-lg-2 control-label">Repeat Password</label>
              <div class="col-lg-10">
                <?php echo form_password(['name'=>'password_repeat','placeholder'=>'Repeat Passoword','class'=>'form-control','value'=>set_value('password_repeat')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('password_repeat'); ?>
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
