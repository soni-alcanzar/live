<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Form</title>
    
    <!-- core CSS -->
    <?php 
            echo $this->Html->css('front/bootstrap');
            echo $this->Html->css('front/bootstrap.min');?>
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
            <?php
            echo $this->Html->css('front/brain');
            echo $this->Html->css('front/check_box');
            echo $this->Html->css('front/style1');
            echo $this->Html->css('front/style_g');
            echo $this->Html->css('connect/connect');
          echo $this->Html->script('front/jquery.min');
            ?>
<style>
.profile{
    border: 3px solid #B7B7B7;
    padding: 10px;
    margin-top: 10px;
    width: 350px;
    background-color: #F7F7F7;
    height: 160px;
}
.profile p{margin: 0px 0px 10px 0px;}
.head{margin-bottom: 10px;}
.head a{float: right;}
.profile img{width: 100px;float: left;margin: 0px 10px 10px 0px;}
.proDetails{float: left;}
</style>

<script type="text/javascript">
window.onload = function() {
  signOut();

}
</script>

</head><!--/head-->
<?php  echo $this->Element('facebook'); ?>
<?php echo $this->element('gmail_login');?>

<body>
<div class="container-fluid padd_l_r">
    <div class="row-fluid b_1_icon">
        <div class="container ">
        <!-- **********icon********** -->
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 "> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo HTTP_ROOT;?>"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px;" class="img-responsive b_1_img"></a>
                </div>
            <!-- </div> --> 
        </div>
    </div>

    <!-- **********icon********** -->
    <!-- **********registration head************ -->
    <div class="row-fluid b_1_reg">
        <div class="container ">
        <!-- <div class="col-md-12 col-sm-12 b_1_reg"> -->
            <div class="col-md-12  col-sm-12">
                <div class="col-md-6 col-sm-6 pull-left b_1_rgh"><h4>LOGIN</h4></div>
                <div class="col-md-6 col-sm-6">
                    <div class="pull-right">
                        <label class="b_1_home"><a href="<?php echo HTTP_ROOT;?>" class="b_11_home">Home</a></label>
                        <label class="b_1_angle"><i class="fa fa-angle-left" aria-hidden="true"></i></label>
                        <label class="b_1_rgtn">Login</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- **********registration head************ -->
    <!-- **********whole body**************** -->
    <div class="row-fluid b_1_body b_1_lgnbg">
        <div class="container ">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field1 col-xs-12">
                  <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="col-md-12 col-sm-12 col-xs-12 bg_clr">      
                      <div class="col-md-offset-1 col-lg-offset-2 col-md-10 col-lg-8 col-sm-12 col-xs-12">
                            <div class="form-group">
                                  <div  id="msg_error" >&nbsp;</div>
                            </div>
                          <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 br_crte">
                              <div class="row">
                                  <center>
                                      <h2>LOGIN</h2>
                                      <img src="<?php echo HTTP_ROOT;?>/img/underline.png" class="img_lgnpd img-responsive">
                                  </center>

                              </div>
                                <p class="abc" id='response_msg'>
                               <?php echo  $this->Session->flash(); ?>
                             </p>

                          </div>
                          <!-- <h2 class="b_step">Step 1</h2> -->
                          <!-- *************radio button 1********** -->
                                
                                <!-- *************radio button 1********** -->
                          <!-- ***************input field 1*************** -->
                          <?php echo $this->Form->create('UserMaster');?>

                
                          <div class="form-group">
                          
                                    <label for="usr">&nbsp;</label>
                                    <input type="text" class="form-control reg_input" id="email" name="email" placeholder="Email Id">
                                    <span id="error1" style="font-size:14px;">&nbsp;</span>
                          </div> 
                          <!-- ***************input field 1*************** -->
                          <!-- ***************input field 2*************** -->
                         <div class="form-group"> 
                                   
                                    <input type="password" class="form-control reg_input" name="password" id="password" placeholder="Password">
                                    <span id="error2" style="font-size:14px;">&nbsp;</span>
                        </div>
                        <div class="form-group" style="margin-bottom:0px;">
                              <input name="check" class="radiobtn required"  value="1" id="checkbox" type="checkbox" onclick="open_terms()" checked>
                                <a href="<?php echo HTTP_ROOT;?>/Homes/terms" target="_blank">
                                  <span class="connt_flex_middle_text_model" >
                                    Terms and conditions
                                  </span>
                                </a>
                          </div>
                           <span id="error5" style="font-size:14px;">&nbsp;</span> 

                        <div class="form-group col-xs-12 padd_l_r"> 
                             
                              <div class="col-sm-12 b_butt_pad b_1_pdnxt lgn padd_l_r"  >
                              
                               
                                <a href="dash_vendor.php"><button class="btn br_login1" id="submit">Login</button></a>
                              </div>
                          </div>
                          <div class="col-xs-12" style="border: 1px solid #789BBA;"></div>
                          <div class="col-xs-12" style="margin-top: -11px; margin-bottom: 25px;">

                            <center class="">
                              <span style="background-color: rgb(51, 185, 180); border-radius: 15px; padding: 7px 15px;">OR</span>
                            </center>
                          </div>
                          
                          <!-- ***************fb & gmail****************** -->
                          <div class="form-group" style="float:left !important;">
                            <div class="col-md-5 col-sm-6 col-xs-12 lgn blogin sr_18_07_login_padding02">
                               <!-- Gmail Login  Btn-->
                              				<style>
                              				.abcRioButtonBlue {
                              				    background-color: #F44F42;
                              				}
                              				
                              				.abcRioButtonBlue .abcRioButtonIcon {
                              					   
                              					   
                              					    border-right: 1px solid #F63A2B;
                              					}
                              					.abcRioButtonBlue .abcRioButtonIcon {
                              					    background-color: #F44F42;
                              					    border-radius: 1px;
                              					}
                              				</style>
                                <div id="gSignIn"></div>

                                <!-- End Gmail Login  Btn-->
                                    
                            </div>
                            <div class="col-md-2 col-sm-1 col-xs-12 ordiv col-lg-1 sr_18_07_login_padding01 hidden-xs">
                              <p class="bl_or"></p>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 blogin1 sr_18_07_login_padding03">
                                <a href="#">
                                    <img src="<?php echo HTTP_ROOT;?>/img/img/facebookl_btn.jpg" id="fblogin" class="img-responsive sr_18_07_login_img_fb02">
                                </a>
                            </div>
                            <?php echo $this->Form->end();?>
                          </div>

                          <!-- ***************fb & gmail****************** -->
                        
                          <!-- **************forget password****** -->
                          <div class="form-group">        
                              <div class="col-md-8 col-sm-12 col-xs-12 frg1 padd_l_r b_widh">
                                  <a href="Register">Don't have an account yet? Sign up</a>
                              </div>
                              <div class="col-md-4 col-sm-12 col-xs-12 frg2 padd_l_r b_widh">
                                  <a href="<?php echo HTTP_ROOT;?>/homes/sendOtp" class="pull-right">Forgot Password</a>
                              </div>
                          </div>
                          <!-- **************forget password****** -->
                      </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

      <!-- Start Gmail Details -->
    <div class="userContent"></div>
    <!-- End Gmail Details -->
    <!-- *********************footer******************** -->
   <?php echo $this->Element('homes_footer'); ?>
    <!-- *********************footer******************** -->
    <!-- **********whole body**************** -->
</div>

 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2bcdc1;">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="window.location.reload();">&times;</button>
<h4 class="modal-title cat_mod_title">Choose User Type</h4>
</div>
<div class="modal-body">
<div class="">&nbsp;</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<center>
<span class="connet_text_hed" style="color:#2bcdc1"> Do You Want Registered as </span>
</center>    
</div>
<div class="">&nbsp;</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padd_l_r">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="radio pull-right">
<label>
<input type="radio" name="optradio" value="1" id="radio_1">
<span class="connt_flex_middle_text">Vendor
</span>
</label>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="radio pull-left">
<label>
<input type="radio" name="optradio" value="2" id="radio_2">
<span class="connt_flex_middle_text" >Learner
</span>
</label>
</center>
</div>
</div>    
</div>
<div class="">&nbsp;</div>
</div>
<div class="modal-footer" style="border-top:none;">
<center>
<button style="background-color:#2bcdc1;border:none;" type="button" class="btn btn-primary" id="getcat_ids"> Submit </button>
</center>
</div>

      </div>
      
    </div>
  </div>


</body>
</html>

<script>
$(document).ready(function(){
    //$('#error2').hide();
  //$('#error1').hide();
  $('#fblogin').on('click',function(){
   if($("#checkbox").is(':checked')){
   $('#error5').hide(); 
   fb_login();
    }
else{
   $('#error5').html('Please check the Term And Condition.');
    $('#error5').css('color','red');
    $('#error1').html('&nbsp;');
    $('#error5').show();
      
      return false;
}
});

  $('#submit').on('click',function(){
    var email=$('#email').val();
var pass=$('#password').val();
if(email==''){
  $('#error1').html('Email Address Can Not Be Blank');
  $('#error1').css('color','red');
  $('#error2').html('');
  $('#error1').show();
  
  return false;

}
else if(!isEmail(email)){
  $('#error1').html('Entered Email Address is not valid!');
  $('#error1').css('color','red');
  $('#error2').html('&nbsp;');
  $('#error1').show();
  return false;
}
else if(pass==''){
  $('#error2').html('Password Can Not be Blank');
  $('#error2').css('color','red');
  $('#error1').html('&nbsp;');
  $('#error2').show();
  
   return false;
}
else if(document.getElementById("checkbox").checked == false){

    $('#error5').html('Please check the following checkbox.');
    $('#error5').css('color','red');
    $('#error1').html('&nbsp;');
    $('#error5').show();  
      return false;

}else{
    return true;
}

  });


});
 function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}



</script>
