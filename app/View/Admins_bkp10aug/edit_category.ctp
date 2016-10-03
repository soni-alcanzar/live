<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
          <li><a href="<?php echo HTTP_ROOT."/Admins/manageCategory";?>">Manage category</a></li>
 					<li>Edit Category</li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading pannel-heading-strip"><i class="fa fa-edit"></i>&nbsp; Edit Category</div>
 					<div class="panel-body">
 						
 							 <?php echo $this->Form->create('Category',array('enctype'=>'multipart/form-data'));?>   
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								
 								<div style="color:red;text-align:center;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Category Name</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('category_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Category Name','value'=>$category_name));?>
 								</div>
                              
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Category_image</div>
 								    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                                	<img src="<?php echo HTTP_ROOT."/img/category_image/".$category['Category']['category_image'];?>" width="100" height="80" style="margin-top:10px;"></a>
                                </div>
 								<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> 
 									<?php echo $this->Form->input('category_image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
 								</div>
 								 
 								<center>
 								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Update Category">
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
$('#Manage_Categories').css('background-color','black');
});
</script>