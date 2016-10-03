
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12" style="padding-top:15px">
                <ol class="breadcrumb">
                    <li class="active"><?php echo $this->Html->link('<i class="fa fa-home"></i>', array('controller'=>'Admins','action'=>'index'), array('escape'=>false))?></li>
                    <li class="active"><a href="<?php echo HTTP_ROOT."/Admins/manageClass";?>">Manage Class</a></li>
                    
                 <li class="active">View Class Details</li>
           
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    
                    <div class="panel-heading profileedit" style="background-color:#d13539 !important;"><i class="fa fa-user"></i>&nbsp; View  Class Details</div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="editprofilewrap">
                                <div class="col-md-12">
                                     
                                    <div class="login-wrap" style="padding:0;margin:0px auto;">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Class Title</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['class_topic'])?ucfirst($view_class[0]['bg_vendor_classes']['class_topic']):'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Class Description</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['class_summary'])?ucfirst($view_class[0]['bg_vendor_classes']['class_summary']):'N/A';?></td>
                                            </tr>
					                         <tr>
                                                <td>Class Type</td>
                                                <td><?php if($view_class[0]['bg_vendor_classes']['class_timing_id']=='1'){
                                                    echo "Flexible";
                                                }else{
                                                    echo "Fixed";
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>No Of Session</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['no_of_session'])?$view_class[0]['bg_vendor_classes']['no_of_session']." Session":'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Class Valid Period</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['starting_month'])?$view_class[0]['bg_vendor_classes']['starting_month']:'N/A';?> - <?php echo !empty($view_class[0]['bg_vendor_classes']['end_month'])?$view_class[0]['bg_vendor_classes']['end_month']:'N/A';?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Class Duration</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['class_duration'])?$view_class[0]['bg_vendor_classes']['class_duration']:'N/A';?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>Total Ticket Available</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['max_ticket_available'])?$view_class[0]['bg_vendor_classes']['max_ticket_available']." Ticket":'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td> Price Per Ticket</td>
                                                <td><?php echo !empty($view_class[0]['bg_vendor_classes']['price_per_head'])?$view_class[0]['bg_vendor_classes']['price_per_head']." &#8377;":'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Class Tag</td>
                                                <td><?php 
                                      echo !empty($view_class[0]['bg_vendor_classes']['class_tag'])?$view_class[0]['bg_vendor_classes']['class_tag']:'N/A';?></td>
                                            </tr>
                                             <tr>
                                                <td>Age Limit</td>
                                                <td>
                                     <?php  echo !empty($view_class[0]['bg_vendor_classes'][' age_group'])?$view['UserMaster']['  age_group']:'N/A';?> to <?php  echo !empty($view_class[0]['bg_vendor_classes'][' age_group'])?$view['UserMaster']['  age_group']:'N/A';?></td>
                                            </tr>
                                             <tr>
                                                <td>Class level</td>
                                                <td>
                                                <?php if($view_class[0]['bg_vendor_classes']['level_id']=='1'){
                                                    echo "Begineer";
                                                }else if($view_class[0]['bg_vendor_classes']['level_id']=='2'){
                                                    echo "Intermediot";
                                                }
                                                else{
                                                   echo "Advance";
                                                }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Class session Date</td>
                                                <td><?php echo !empty($str_date)?$str_date:'N/A';?></td>
                                            </tr>
                                            <tr>
                                                <td>Class Session Time</td>
                                                <td><?php echo !empty($str_time)?$str_time:'N/A';?></td>
                                            </tr>
                                             
                                            
                                            <tr>
                                                <td>Class Image</td>
                                                <td><?php if(!empty($view_class[0]['bg_vendor_classes']['upload_class_photo'])){?>
                                        <img src="<?php echo HTTP_ROOT."/img/Vendor/class_image/".$view_class[0]['bg_vendor_classes']['upload_class_photo'];?>" width="100" height="100">
                                     <?php }else{
                                       echo "N/A";
                                     }?></td>
                                            </tr>
                                            

                                            <tr>
                                                <td>Current Status</td>
                                                <td><?php if($view_class[0]['bg_vendor_classes']['status']==1){
                                                  echo "Active";
                                                  }else if($view_class[0]['bg_vendor_classes']['status']==2){
                                                  echo "Inactive";
                                                  }else if($view_class[0]['bg_vendor_classes']['status']==3){
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

<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Class').css('background-color','black');
});
</script>