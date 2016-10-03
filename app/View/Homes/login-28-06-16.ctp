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
          echo $this->Html->script('front/jquery.min');
            ?>
           
            
      

    
    
    
</head><!--/head-->
<?php  echo $this->Element('facebook'); ?>
<?php  echo $this->Element('gmail'); ?>

<body>
<div class="container-fluid padd_l_r">
    <div class="row-fluid b_1_icon">
        <div class="container ">
        <!-- **********icon********** -->
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 "> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="http://braingroom.com/"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px;" class="img-responsive b_1_img"></a>
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
                        <label class="b_1_home"><a href="index.php" class="b_11_home">Home</a></label>
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
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field1">
                  <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <div class="col-md-12 col-sm-12 col-xs-12 bg_clr">      
                      <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
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
                                <p class="abc">
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

                        <div class="form-group"> 
                             
                              <div class=" col-sm-12 b_butt_pad b_1_pdnxt lgn padd_l_r"  >
                              
                                <!-- <a href="#" style="margin-right:300px;"><img src="images/img/login_btn.png" class="" style="width:30%;" id="login"></a> -->
                                <a href="dash_vendor.php"><button class="btn br_login1" id="submit">Login</button></a>
                              </div>
                          </div>
                          <!-- ***************input field 2*************** -->
                          <!-- ***************underline & or************** -->
                          <!-- <div class="col-md-12">
                                  <img src="images/img/reg_or.png" class="img-responsive b_img_or">
                          </div> -->
                          <!-- ***************underline & or************** -->
                          <!-- ***************fb & gmail****************** -->
                          <div class="form-group" style="float:left !important;">
                            <div class="col-md-5 col-sm-5 col-xs-5 lgn blogin">
                                
                                    <img src="<?php echo HTTP_ROOT;?>/img/img/gmail_btn.jpg" id="authorize-button"  class="img-responsive">
                                
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1 ordiv">
                              <p class="bl_or">OR</p>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-5 blogin1">
                                <a href="#">
                                    <img src="<?php echo HTTP_ROOT;?>/img/img/facebookl_btn.jpg" onclick="return fb_login();" class="img-responsive">
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
    <!-- *********************footer******************** -->
   <?php echo $this->Element('homes_footer'); ?>
    <!-- *********************footer******************** -->
    <!-- **********whole body**************** -->
</div>
</body>
</html>

<script>
$(document).ready(function(){
    //$('#error2').hide();
  //$('#error1').hide();
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
else{
  return true;
}

  });


});
 function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
/*$(document).ready(function() {
    $('#login').on('click',function(){
       //var type=$("input[name='radio-group']:checked").val();
       var email=$('#email').val();
       var pass=$('#password').val();
       $('.loader').show();
        $.ajax({ 
        url: '<?php echo HTTP_ROOT;?>/Homes/login',
        type: 'post',
        dataType: 'json',
        data: {
            email: email,
            password:pass
        },
         success: function(output) {
          $('.loader').hide();
               //console.log(output);
               if(output.res_code==1){
                window.location.href='<?php echo HTTP_ROOT;?>/Homes/main';
               } 
               else{
                $('#msg_error').html(output.res_msg);
                $('#msg_error').show();
                $('#msg_error').addClass('alert alert-danger');
                 
               }
               
                // var e=JSON.parse(output);
                // console.log(e.res_code);
                // $('#error').hide();
                
             
                 
               // window.location.href='<?php echo HTTP_ROOT;?>/Homes/main';
            
               
                   
                  }
        });

    });
});*/
</script>
