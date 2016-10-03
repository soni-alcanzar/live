 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    
                    <?php if($view['UserMaster']['user_type_id']=='1'){?>
                     <li class="active"><a href="<?php echo HTTP_ROOT."/Admins/manageVendor" ?>">Manage Vendor</a></li>
                    <li class="active">View Vendor</li>
                <?php }
                else{?>
                 <li class="active"><a href="<?php echo HTTP_ROOT."/Admins/manageLearner";?>">Manage Learner</a></li>
                 <li class="active">View Learner</li>
           <?php  }?>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <?php if($view['UserMaster']['user_type_id']=='1'){?>
                    <div class="panel-heading profileedit" style="background-color:#d13539 !important;"><i class="fa fa-user"></i>&nbsp; View  Vendor Details</div>
                    <?php }else{?>
                    <div class="panel-heading profileedit" style="background-color:#d13539 !important;"><i class="fa fa-user"></i>&nbsp; View  Learner Details</div>
                    <?php }?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="editprofilewrap">
                                <div class="col-md-12">
                                     
                                    <div class="login-wrap" style="padding:0;margin:0px auto;">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>First Name</td>
                                                <td><?php echo !empty($view['UserMaster']['first_name'])?ucfirst($view['UserMaster']['first_name']):'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo !empty($view['UserMaster']['email'])?$view['UserMaster']['email']:'N/A';?></td>
                                            </tr>
					    <tr>
                                                <td>Contact_no</td>
                                                <td><?php echo !empty($view['UserMaster']['contact_no'])?$view['UserMaster']['contact_no']:'N/A';?></td>
                                            </tr>
                                            <?php if($res['UserMaster']['user_type_id']=='1'){?>
                                            <tr>
                                                <td>Vendor Type</td>
                                                <td><?php if($res['UserMaster']['vendor_type_id']=='1'){
                                                     echo "Organization";
                                                    }else{
                                                     echo "Indivisual";
                                                         }?>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            <tr>
                                                <td>City</td>
                                                <td><?php echo !empty($view['UserMaster']['city'])?$view['UserMaster']['city']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Interest</td>
                                                <td><?php echo !empty($view['UserMaster']['interest'])?$view['UserMaster']['interest']:'N/A';?></td>
                                            </tr>
                                            <?php if($view['UserMaster']['user_type_id']=='1'){?>
                                            <tr>
                                                <td>Institution</td>
                                                <td><?php echo !empty($view['UserMaster']['institute_name'])?$view['UserMaster']['institute_name']:'N/A';?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>Registration Id</td>
                                                <td><?php echo !empty($view['UserMaster']['official_reg_id'])?$view['UserMaster']['official_reg_id']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td> Expertise Area</td>
                                                <td><?php echo !empty($view['UserMaster']['area_of_expertise'])?$view['UserMaster']['area_of_expertise']:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td> Address</td>
                                                <td><?php 
                                      echo !empty($view['UserMaster']['address'])?$view['UserMaster']['address']:'N/A';?></td>
                                            </tr>
                                             <tr>
                                                <td> Description</td>
                                                <td>
                                     <?php  echo !empty($view['UserMaster']['description'])?$view['UserMaster']['description']:'N/A';?></td>
                                            </tr>
                                             <tr>
                                                <td> Teaching Experience</td>
                                                <td><?php echo !empty($view['UserMaster']['coaching_experience'])?$view['UserMaster']['coaching_experience']:'N/A';?></td>
                                            </tr>
                                             <?php }?>
                                             <tr>

                                                <td>Gender</td>
                                                <td>
                                                    <?php if($view['UserMaster']['gender']=='1'){
                                                        echo "Male";}
                                                        else if($view['UserMaster']['gender']=='2'){
                                                            echo "Female";
                                                        }else{
                                                                echo "N/A";
                                                            }?></td>
                                            </tr>
                                            <?php if($view['UserMaster']['user_type_id']=='1'){?>
                                            <tr>
                                                <td>Profile Pic</td>
                                                <td><?php if(!empty($view['UserMaster']['profile_image'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Vendor/profile/".$view['UserMaster']['profile_image'];?>" width="100" height="100">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                            </tr>
                                    <tr>
                                                <td>Background Image</td>
                                                <td><?php if(!empty($view['UserMaster']['background_image'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Vendor/profile/".$view['UserMaster']['background_image'];?>" width="100" height="100">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                            </tr>
                                            <?php }else{?>
                                             <tr>
                                                <td>Profile Pic</td>
                                                <td><?php if(!empty($view['UserMaster']['profile_image'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Buyer/profile/".$view['UserMaster']['profile_image'];?>" width="100" height="100">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                     <tr>
                                                <td>Background Image</td>
                                                <td><?php if(!empty($view['UserMaster']['background_image'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Buyer/profile/".$view['UserMaster']['background_image'];?>" width="100" height="100">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                            </tr>
                                            </tr>
                                            <?php }?>

                                            

                                            <tr>
                                                <td>Current Status</td>
                                                <td><?php if($view['UserMaster']['status']==1){
                                                  echo "Active";
                                                  }else if($view['UserMaster']['status']==2){
                                                  echo "Inactive";
                                                  }else if($view['UserMaster']['status']==3){
                                                  echo "Unverified";
                                                  }?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>    

<style>
  .table{
   font-size:14px;
 }
 .table  > tbody > tr > td:first-child{
   font-weight:bold;

 }
</style>
 <?php if($view['UserMaster']['user_type_id']=='1'){?>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#manage_vendor').css('background-color','black');
});
</script>
<?php }else{?>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Learner').css('background-color','black');
});
</script>
<?php }?>

