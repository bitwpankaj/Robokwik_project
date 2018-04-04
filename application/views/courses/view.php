<?php $qty_num = array(
                         '1' => '1',
                         '2'=> '2',
                         '3 ' =>'3',
                         '4'=>'4',
                         '5'=>'5',
                         '6'=>'6'
                   ); 
?>

<img src="<?php  echo base_url();?>assets/images/courses/<?php echo $course['course_images']?>" alt="Generic placeholder image" style="width:210px; height:210px; margin:4px;">
<h2><?php echo $course['course_name']?></h2>
<div class="container-fluid">
    <?php echo $course['course_description'] ?>

</div>
<?php echo form_open('cart/add_to_cart',['class' => 'form-horzontal']);  ?>
<div class="row">
<div class="form-group">
   <div class="col-xs-1">
   <!--?php form_hidden('id', $course['course_id']);
         form_hidden('name', $course['course_name']); 
         form_hidden('price', $course['fees']);
         

   ?>

      <!--?php echo form_input(['qty'=>'qty','placeholder'=>'Quantity','class'=>'form-control','value'=>set_value('qty')]); ?>
   </div-->
   <input type="hidden" name="name" value="<?php echo $course['course_name']; ?>">
   <input type="hidden" name="price" value="<?php echo $course['fees']; ?>">
   <input type="hidden" name="id" value="<?php echo $course['course_id']; ?>">
   <input type="text" name="qty" class="qty" placeholder="Quatntity"> 
   <div class="col-xs-3">
     <?php echo form_submit(['name'=>'submit', 'value'=>'Add','class'=>'btn btn-primary' ]); ?>
   </div>
    
  </div>
 </div> 
  
<hr>
<?php if ($this->session->userdata('user_id')==1):?>
<?php echo  form_open('/courses/delete/'.$course['course_id']); ?>
 <input type="submit" class="btn btn-danger" value="delete" >
</form> 
<br>
<?php echo  form_open('/courses/edit/'.$course['slug']); ?>
 <input type="submit" class="btn btn-default" value="Edit" >
<?php endif;  ?> 
</form> 
