<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RoboKwik</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/paper/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
 <nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">RoboKwik</a>
		</div>
		 <ul class="nav navbar-nav">
			 <li><a href="<?php echo base_url();?>">Home</a></li>
			 <li><a href="<?php echo base_url(); ?>/about">About</a></li>
			 <li><a href="<?php echo base_url();?>/courses">Courses</a></li>
			 <li><a href="">Contact Us</a></li>


		 </ul>
		
		 
		<ul class="nav navbar-nav navbar-right"> 
			
		</ul>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			    <?php if(! $this->session->userdata('logged_in')): ?>
			    <li><a href="<?php echo base_url();?>/register">Register</a></li>
				<li><a href="<?php echo base_url();?>/login">Login</a></li>
			    <?php endif; ?>	
			    <?php if($this->session->userdata('logged_in')): ?>
			     <?php if($this->session->userdata('user_id')==1): ?>	
                 <li><a href="<?php echo base_url();?>/courses/create">Create</a></li>
                 <?php endif; ?>
                 <li><a href="<?php echo base_url();?>cart/get_cart_data"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
                 
				<li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
				<?php endif; ?>	

			</ul>
		</div>
	</div>
</nav>	

<div class="container-fluid">
	
<?php if($this->session->flashdata('user_loggedin')): ?>
	<?php echo 
    '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> <h4>'.$this->session->flashdata('user_loggedin').'</h4></div>';?>
<?php endif; ?>	

<?php if($this->session->flashdata('loggedin_invalid')): ?>
	<?php echo 
    '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> <h4>'.$this->session->flashdata('loggedin_invalid').'</h4></div>';?>
<?php endif; ?>	

<?php if($this->session->flashdata('user_logout')): ?>
	<?php echo 
    '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> <h4>'.$this->session->flashdata('user_logout').'</h4></div>';?>
<?php endif; ?>	
