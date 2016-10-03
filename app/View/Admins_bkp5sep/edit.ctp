
<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="#">Edit Hotel</a></li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading profileedit"><i class="fa fa-user"></i>&nbsp; DyneAgain Hotels</div>
 					<div class="panel-body">
 						
 							 <?php echo $this->Form->create('HotelDetail',array('enctype'=>'multipart/form-data'));?>   
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								<div class="user-login-info" style="overflow: hidden;">
 									<p class="signuptext2" style="color:#fff; text-align:center;"><i class="fa fa-edit"></i>&nbsp;Edit Hotel</p>
 								</div>
 								<div style="color:red;text-align:center;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								<div class="col-md-3 boxesstyle">Hotel Name</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('hotel_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Hotel Name','value'=>$edit['hotel_name']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Branch Name</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('branch_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Branch Name','value'=>$edit['branch_name']));?>
 								</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Nearest Area</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('near_area', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Nearest Area Restaurent','value'=>$edit['near_area']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Owner</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('owner_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$owner,
 									'default'=>$owner_detail['owner_id']));?>
 									<?php echo $this->Form->input('owner_member_id', array('type'=>'hidden','label' => false,'div'=>false, 'class' =>'form-control boxesstyle','value'=>$owner_detail['id']
 									));?>
 								</div>
 								
 								<div class="col-md-3 boxesstyle">User Name</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('user_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'User Name','value'=>$edit['user_name']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Password</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('password', array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'User Name','value'=>base64_decode($edit['password'])));?>
 								</div>
 								<!-- <div class="col-md-3 boxesstyle">Category</div>
 								<div class="col-md-9">
 									
 									<?php echo $this->Form->input('category', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','options'=>$category,'selected'=>$edit['category']));
 									?>
 								</div> -->
 								<!-- <div class="col-md-3 boxesstyle">Reedeem Points</div>
 								<div class="col-md-9">
 									
 									<?php echo $this->Form->input('points', array('type'=>'text','id'=>'point','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit['points']));
 									?>
 								</div> -->
 								<div class="col-md-3 boxesstyle">Email</div>
 								<div class="col-md-9">
 									<?php echo $this->Form->input('email', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Email','value'=>$edit['email']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">address</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('address', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Address','value'=>$edit['address']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Contact No</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('mobile_no', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Contact No','value'=>$edit['mobile_no'],'maxlength'=>10));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Latitude</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('latitude', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'latitude','value'=>$edit['latitude']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Longitude</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('longitude', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'latitude','value'=>$edit['longitude']));?>
 								</div>
 								<div class="col-md-3 boxesstyle">Background_image</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('background_image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
 								</div>
 								<div class="col-md-3 boxesstyle">logo_image</div>
 								<div class="col-md-9"> 
 									<?php echo $this->Form->input('logo_image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
 								</div>
 								
 								<center>
 								<div class="col-md-7" style="padding:15px"><input type="submit" class="btn btn-default savebtn" style="background-color:#27A69B !important;" value="Update Hotel">
 							</div></center>
 						
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("#point").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>

