

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
 	<section class="wrapper">
 		<div style="padding-top:20px" class="row">
 			<div style="" class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="#"><i class="fa fa-home"></i></a></li>
          <li><a href="<?php echo HTTP_ROOT."/Admins/manageVendor";?>">Manage Learner</a></li>
 					<li>Edit Learner Profile</li>
 				</ol>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col-md-12">
 				<div class="panel panel-default panel-primary">
 					<div class="panel-heading pannel-heading-strip"><i class="fa fa-edit"></i>&nbsp; Edit Learner Profile</div>
 					<div class="panel-body">
 						
 							 <?php echo $this->Form->create('UserMaster',array('enctype'=>'multipart/form-data'));?>   
 							<div class="login-wrap" style="padding:0;margin:0px auto;">
 								
 								<div style="color:red;text-align:center;" id="msg">
 									<?php echo  $this->Session->flash(); ?>
 								</div>
 								
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Name</div>
 								<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
 									<?php echo $this->Form->input('first_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Name','value'=>$edit_profile['UserMaster']['first_name'],'id'=>'name'));?>
 								</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Email Id</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('email', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Email','value'=>$edit_profile['UserMaster']['email'],'readonly'));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Contact Number</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('mobile', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','placeholder'=>'Contact Number','id'=>'mobile_no','value'=>$edit_profile['UserMaster']['mobile'],'maxlength'=>10));?>
                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">City</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <select class="form-control boxesstyle" name="data[UserMaster][city_id]" id="city_id">
                  
                          <option value="0">Select City</option>
                          <option selected="1"> Chennai</option>
                          <?php
                            foreach ($city as $key => $city_value){
                            $id   =$city_value['City']['id'];
                            $name =$city_value['City']['name'];
                            //}
                            ?>
                          
                         <?php  if($id!=1){?>
                          <option value="<?php echo $id; ?>" <?php if($id!=1){ echo 'disabled'; } ?>><?php echo $name; ?></option>
                            <?php
                            }
                          }
                          ?>
                        </select>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Locality</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <select id="locality_id" name="data[UserMaster][locality_id]" class="form-control boxesstyle">
                          <option value="">Select Locality</option>
                          <option selected="selected"><?php echo $edit_profile['UserMaster']['locality_name'] ?></option>
                          <?php foreach ($localitie as $key => $localitie_value) {
                      
                          $loc_id=$localitie_value['Locality']['id'];
                          $loc_name=$localitie_value['Locality']['name'];
                        
                          ?>
                          <option value="<?php echo $loc_id; ?>"><?php echo $loc_name; ?></option>
                          <?php
                            }
                          ?>                      
                        </select>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Interest</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" style="margin-top:15px;">
                  <select name="langOpt2[]" multiple id="langOpt2">

                      <?php 
                        if(!empty($view_cat)){
                          
                      foreach($view_cat as $res){
                        ?>
                        <option selected value="<?php echo $res;?>"><?php echo $res;?></option>
                        <?php }?>
                      <?php foreach($category as $cat){?>
                        <option value="<?php echo $cat['Category']['category_name'];?>"><?php echo $cat['Category']['category_name'];?></option>
                        <?php }}?>
                        
                  </select>
                </div>
                
                
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Gender</div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                 <select id="gender" name="data[UserMaster][gender]" class="form-control boxesstyle">
                  <?php 
                    $str="";
                  if($edit_profile['UserMaster']['gender']=='1'){

                    $str="Male";}
                    else if($edit_profile['UserMaster']['gender']=='2'){
                      $str="Female";}
                      ?>
                  <option selected="<?php $res['Usermaster']['gender'];?>" value="<?php $res['Usermaster']['gender'];?>"><?php echo $str;?></option>
                   <?php if($str=="Male"){?>
                   <option value="2">FeMale</option>
                   
                   <?php }else{?>
                   <option value="1">Male</option>
                   <?php }?>
                    
                </div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Profile_image</div>
                    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                      <img src="<?php echo HTTP_ROOT."/img/Buyer/profile_image/".$category['UserMaster']['profile_image'];?>" width="100" height="80" style="margin-top:10px;"></a>
                                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> 
                  <?php echo $this->Form->input('profile_image1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none;'));?>
                </div>
 								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Profile image</div>
                    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                      <?php 
                       $pic=substr($edit_profile['UserMaster']['profile_image'],0,4);
                       if($pic=='http'){?>
                                  <img src="<?php echo $edit_profile['UserMaster']['profile_image'];?>" width="100" height="80" style="margin-top:10px;">
                                  <?php }else{?>
                                  <img src="<?php echo HTTP_ROOT."/img/Buyer/profile/".$edit_profile['UserMaster']['profile_image'];?>" width="100" height="80" style="margin-top:10px;">
                                <?php }?>
                                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> 
                  <?php echo $this->Form->input('profile_image1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'));?>
                </div>



 								<br>
 								<center>
 								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" id="submit" style="background-color:#AB1A1F;color:#fff; !important;margin-top:30px;" value="Update">
<input type="reset" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;margin-top:30px;" value="Reset">
 									
 								</div></center>
 							</div>
 						
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>



 </section>
<?php echo $this->Html->script('backend/jquery.multiselect'); ?>

<script>
$('#langOpt2').multiselect({


    columns: 1,
    placeholder: 'Select Interest',
    search: true,

});
$(document).ready(function(){
  $("#mobile_no").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#msg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   $('#name').keypress(function (e) {
         var regex = /^[a-zA-Z ]*$/;
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
       $("#msg").html("Alphabet Only").show().fadeOut("slow");
        return false;
        }
    });
$('#submit').click(function(){
 var nm=$('#name').val();
 var mobile_no=$('#mobile_no').val();
if(nm==''){
  $('#msg').html('<div class="alert alert-danger">Name Fields Can not be blank</div>');
  return false;
}
else if(mobile_no.length<10){
  $('#msg').html('<div class="alert alert-danger">Invalid Contact Number!</div>');
  return false;
}
else{
  return true;
}
});
});

</script>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Learner').css('background-color','black');
});
</script>


