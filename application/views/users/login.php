<?= $title ;?>
<?php echo form_open('users/login_validation',['class' => 'form-horzontal']); ?>
 <fieldset>
 	<legend><?= $title;?></legend>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
            <label for="username" class="col-lg-2 control-label">Username/Email</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'username','placeholder'=>'Username/Email','class'=>'form-control','value'=>set_value('username')]); ?>
              </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php echo form_error('username'); ?>
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

    <br>

    <br>
    <div class="col-lg-10 col-lg-offset-2">
        <?php echo form_reset(['name'=>'reset', 'value'=>'Reset','class'=>'btn btn-default' ]); ?>
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit','class'=>'btn btn-primary' ]); ?>
      </div>
    </div>
 
 </fieldset>
 </form>
