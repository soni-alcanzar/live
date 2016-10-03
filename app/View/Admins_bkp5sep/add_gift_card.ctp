<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="<?php echo HTTP_ROOT."/Admins/manageGift";?>">Manage Gift Card</a></li>
 					<li>Add Gift Card</li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading pannel-heading-strip"><i class="fa fa-gift"></i>&nbsp; Add Gift Card</div>
 					<div class="panel-body">
 						
 							 <?php echo $this->Form->create('GiftCard',array('enctype'=>'multipart/form-data'));?>   
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								
 								<div style="color:red;text-align:center;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Gift Title</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('title', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Gift Title'));?>
 								
 								</div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Gift Card For</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('card_type_status', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle',
 									'options'=>$card_type));?>
 								</div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Gift Category</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('category_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle',
 									'options'=>$category));?>
 								</div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Description</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('description', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Description',));?>
 								</div>
 								
                              
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Gift Image</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9"> 
 									<?php echo $this->Form->input('gift_image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
 								</div>
 								
 								<center>
 								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Add Gift Card">
<input type="reset" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Reset">
 									
 								</div></center>
 							</div>
 						
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
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Gift_Card').css('background-color','black');
});
</script>