<div class="row">
		<div class="col-xs-3"><div class="panel panel-default">
		<div class="panel-heading"><h5 style="text-align:center;">FILTER YOUR SEARCH</h5></div> 
		<div class="location" style="align-content:center; padding:2px; margin-left:16px;"><h5>Location </h5></div>
		<div class="form-group">
					<input type="text" class="form-control" placeholder="Search Locations" style="text-align:center;">
		 </div>   
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> Banglore
					</label>
					<br/>

					<label>
						<input type="checkbox"> Chennai
					</label>
					<br/>

					<label>
						<input type="checkbox"> Delhi
					</label>
					<br/>


					<label>
						<input type="checkbox"> Kolkata
					</label>
					<br/>


					<label>
						<input type="checkbox"> Varansi
					</label>



					
				</div>
				<hr>
				<div class="course" style="align-content:center; padding:2px; margin-left:16px;"><h5>Course</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> Android
					</label>
					<br/>

					<label>
						<input type="checkbox"> Java
					</label>
					<br/>

					<label>
						<input type="checkbox"> IOT
					</label>
					<br/>


					<label>
						<input type="checkbox"> Robotics
					</label>
					<br/>


					<label>
						<input type="checkbox"> Digital Marketing
					</label>



					
				</div>

				 <hr>
				<div class="specialization" style="align-content:center; padding:2px; margin-left:16px;"><h5>Specialization</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> Android
					</label>
					<br/>

					<label>
						<input type="checkbox"> Java
					</label>
					<br/>

					<label>
						<input type="checkbox"> IOT
					</label>
					<br/>


					
				</div>
				 <hr>
				<div class="course" style="align-content:center; padding:2px; margin-left:16px;"><h5>Course Level</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> Beginner
					</label>
					<br/>

					<label>
						<input type="checkbox"> Intermediate
					</label>
					<br/>

					<label>
						<input type="checkbox"> Advanced
					</label>
					<br/>

		</div>

		 <hr>
				<div class="mode" style="align-content:center; padding:2px; margin-left:16px;"><h5>Mode of study</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> Virtual Classes
					</label>
					<br/>

					<label>
						<input type="checkbox"> Center Classes
					</label>
					<br/>

					
				</div>
		 <hr>
				<div class="course" style="align-content:center; padding:2px; margin-left:16px;"><h5>Ceritfication</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox"> IIT BHU Technix
					</label>
					<br/>

					<label>
						<input type="checkbox"> EI Systems
					</label>
					<br/>

					<label>
						<input type="checkbox"> IIT Delhi
					</label>
					<br/>



					
				</div>    

				 <hr>
				<div class="course" style="align-content:center; padding:2px; margin-left:16px;"><h5>Fees</h5></div>
		 
		 <div class="checkbox" style="align-content:center; padding:2px; margin-left:16px;">
					<label>
						<input type="checkbox">5000-6500
					</label>
					<br/>

					<label>
						<input type="checkbox"> 6501-7500
					</label>
					<br/>

					<label>
						<input type="checkbox">7501-8500
					</label>
					<br/>
					
				</div>
				
		 <div class="panel-body"> Basic panel</div>
		</div> </div>
<div class="col-xs-9">
<h2><?= $title ?></h2>

<!--?php print_r($courses); ?-->
<?php foreach($courses as $course): ?>  
			 
<div class="panel">
		<div class="media">
				<a class="pull-left" href="#">
				<img class="media-object" src="<?php  echo base_url();?>assets/images/courses/<?php echo $course['course_images']?>" alt="Generic placeholder image" style="width:210px; height:210px; margin:4px;">

				</a>
				<div class="media-body">
						<h3 class="media-heading" style="font-size:24px; font-weight:300; text-decoration:none rgba(0,	0,0,0.9); line-height:31.2px;"><?php echo $course['course_name']; ?></h3>
						<small style="font-size:12px; font-weight:300; line-height:24px;">2106 Learners </small>
						<p><?php echo $course['course_description']; ?></p>
						<p> Course Type:-	<?php echo  $course['name'] ; ?></p>
						<p>Price <?php  echo $course['fees']; ?></p>
						<p>	Course Company:-<?php echo $course['company_name'] ; ?></p>
						<p>	Course image:-<?php echo $course['course_images'] ; ?></p>

						<a href="<?php echo site_url('/courses/'.$course['slug']); ?>" class="btn btn-warning">Know more</a>
				</div> 
</div>
<?php endforeach; ?>
<div style="align-content: center; left: 50%;">
	
  <?php echo $this->pagination->create_links(); ?>
  
</div>


</div>



 
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

<!--div class="media">
				<div class="media-left">
						<a href="#">
								<img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image">
						</a>
				</div>
				<div class="media-body">
						<h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
						<p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
				</div>
</div >



<p><?php echo $course['trainer_name']; ?></p>
<p><?php echo $course['course_type']; ?></p>
<p><?php echo $course['course_level']; ?></p>
<small class="post-date"><?php echo $course['course_start_date']; ?></small>
<br/>
<p><a class="btn btn-default" href="<?php echo site_url('/courses/'.$course['slug']); ?>">Details</a></p-->
<!--?php endforeach; ?-->
</div>


</div>
