<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/redmond/jquery-ui.css" />
<?php echo $this->Html->css('jquery.timepicker');
 echo $this->Html->script('jquery.timepicker');
   
?>
<section id="main-content">
    <section class="wrapper">
        <div style="padding-top:20px" class="row">
            <div style="" class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="<?php echo HTTP_ROOT."/Admins/ChangePassword";?>">Change Password</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading profileedit"><i class="fa fa-suitcase"></i>&nbsp; Change Password</div>
                    <div class="panel-body">
                      <div style="color:red; font-size:16px;"><?php  echo $this->Session->flash(); ?></div>
                        
                       <?php echo $this->Form->create('ChangePassword',array('enctype'=>'multipart/form-data'));?>

                        <div class="login-wrap" style="padding:0;margin:0px auto;">
                           
                            <div style="color:red;text-align:center;">
                                <?php echo  $this->Session->flash(); ?>
                            </div>
                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <center><div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Old Password</div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        
                                             <?php echo $this->Form->input('password', array(
                                             'type' => 'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'
                                             )
                                             );?>
                                              
                                        
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">New Password</div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        
                                             <?php echo $this->Form->input('new_password', array(
                                             'type' => 'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'
                                             )
                                             );?>
                                             
                                        
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Confirm Password</div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        
                                             <?php echo $this->Form->input('confirm_password', array(
                                             'type' => 'password','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'
                                             )
                                             );?>
                                             
                                        
                        </div>
                        
                        
                        

                                
                                   

                                 
                                   
                                 

                                 
                                   
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" style="background-color:#428BCA !important;" id="submit" value="Save"><input type="Reset" class="btn btn-default savebtn" style="background-color:#428BCA !important;" id="reset" value="Reset"></center>
                                             
                                   </div>                           
                          </div>
                           </form>
                         </div>
                       </div>
                </div>
            </div>
        </div> 
    </section>
 </section>

<script>
                $(function() {
                    $('#close_time').timepicker();
                });
            </script>
