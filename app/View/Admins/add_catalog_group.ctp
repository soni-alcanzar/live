<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<?php echo $this->Html->css('backend/jquery.multiselect');?>
<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
 					<li><a href="<?php echo HTTP_ROOT."/Admins/editSegment";?>">Add Catalog Group</a></li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading pannel-heading-strip"><i class="fa fa-edit"></i>&nbsp; Add  Class To Catalog Group</div>
 					<div class="panel-body">
 						
 							 <?php echo $this->Form->create('RequestCatalog',array('enctype'=>'multipart/form-data'));?>   
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								
 								<div style="color:red;text-align:center;">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Class Title</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('class_topic', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Class Title','value'=>substr($vendor_title['VendorClasse']['class_topic'],0,200),'readonly'));?>
 									
 									
 								</div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Group Name</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" style="margin-top:17px;">
 									 <select name="group_id[]" multiple id="langOpt2">
			 									 	<?php 
			                        if(!empty($my_group)){
			                          
			                      foreach($my_group as $res){
			                        ?>
			                        <option selected value="<?php echo $res;?>"><?php echo $res;?></option>
			                        <?php }?>
			                      <?php foreach($view_group as $cat){?>
			                        <option value="<?php echo $cat;?>"><?php echo $cat;?></option>
			                        <?php }}?>
                        
                  </select>
 									<!--<?php echo $this->Form->input('group_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Catalog Group Name','options'=>$view_group));?>-->
 								</div>
 								

 								
 								<center>
 								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Add Catalog Group ">
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
<?php echo $this->Html->script('backend/jquery.multiselect'); ?>


<script>
$('#langOpt2').multiselect({


    
    
   
});
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