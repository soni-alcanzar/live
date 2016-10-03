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
            <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

           
            
            
           

    
    
    
</head><!--/head-->
<body>

<div class="container-fluid padd_l_r">
    <div class="row-fluid b_1_icon">
        <div class="container ">
        <!-- **********icon********** -->
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 "> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="index.php"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px;" class="img-responsive b_1_img"></a>
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
				<div class="col-md-6 col-sm-6 pull-left b_1_rgh"><h4>REGISTRATION</h4></div>
				<div class="col-md-6 col-sm-6">
					<div class="pull-right blfthd">
						<label class="b_1_home"><a href="index.php" class="b_11_home">Home</a></label>
						<label class="b_1_angle"><i class="fa fa-angle-left" aria-hidden="true"></i></label>
						<label class="b_1_rgtn">Registration</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- **********registration head************ -->
	<!-- **********whole body**************** -->
	<div class="row-fluid b_1_body b_1_lgnbg1">
		<div class="container ">	
	<!-- **********whole body**************** -->
			<!-- <div class="col-md-12 col-sm-12 b_1_body"> -->
				<!-- ********************border & heading****************** -->
				  <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 br_crte">
            <div class="row">
              <center>
                <h2>Create An Account</h2>
                <img src="<?php echo HTTP_ROOT;?>/img/underline.png" class="bdrline img-responsive">
              </center>
            </div>
          </div>  
					<!-- ********************border & heading****************** -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<h2 class="b_step">Step 2</h2>
             <?php echo $this->Form->create('UserMaster',array('enctype'=>'multipart/form-data'));?>
              <p class="abc">
                               <?php echo  $this->Session->flash(); ?>
                             </p>
						<!-- ************select field1********* -->
						<div class="form-group reg_text1">
						  <?php echo $this->Form->input('community_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'city_id','options'=>$community_name,'option_selected'=>$city['2']));?>
						 
						  <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
						</div>
						<!-- ************select field1********* -->
						<!-- ************select calendar********* -->
						<div class="form-group reg_text">
              <?php echo $this->Form->input('d_o_b', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'datepicker','placeholder'=>'Date of Birth'));?>
						  <!-- <label for="usr"><img src="images/reg_pwd.png" class="reg_id"></label> -->
						  
						  <span class="cal_b"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
						</div>
						<!-- ************select calendar********* -->
						<!-- ***************select field 3*************** -->
						<div class="form-group reg_text">
						  <!-- <label for="usr"><img src="images/interest.png" class="reg_id"></label> -->
						  <?php echo $this->Form->input('gender', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'gender_id','options'=>$gender));?>
						  <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
						</div>
						<!-- ***************select field 3*************** -->
						<!-- *****************browse************* -->
						<div class="form-group reg_text">
						  <!-- <label for="usr"><img src="images/mobile.png" class="reg_id"></label> -->
                <?php echo $this->Form->input('profile_pic', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload'));?>
             
						  <input type="text" class="form-control reg_input" id="upload_photo" placeholder="Upload Photo">
						  <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click"></span>
						</div>
            
						<!-- *****************browse************* -->
						
            <!-- **************button************* -->
            <div class="form-group">        
              <div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                  <div class="pull-left">
                    <a href="reg1.php"><button class="btn br_login2"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</button></a>
                  </div>
                  <div class="pull-right">
                   <!-- <a href="#"><button class="btn br_login1">Skip</button></a>-->
                   <button class="btn br_login3">Sign Up</button>
                  </div>
                </div>
              </div>
              <?php echo $this->Form->end();?>
            <!-- **************button************* -->
					</div>
				</div>
			</div>	
		<!-- </div> -->
	</div>	

	<!-- *********************footer******************** -->
	<section id="latest-news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_top">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2><div style="color:white;">LINKS</div></h2>
                  <ul>
                     <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="terms.php">TERMS & CONDITION</a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                    <li><a href="privacy.php">PRIVACY POLICY</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="#">HELP CENTER</a></li>
                    <li><a href="#">REVIEWS & TESTMONIALS</a></li>
                   
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2><div style="color:white;">CITYS</div></h2>
                  <ul>
                    <li><a href="#">CHENNAI</a></li>
                    <li><a href="#">BANGLORE</a></li>
                    <li><a href="#">KOLKATA</a></li>
                    <li><a href="#">HYDERABAD</a></li>
                    <li><a href="#">DELHI</a></li>
                    <li><a href="#">PUNE</a></li>
                    <li><a href="#">MUMBAI</a></li>
                   
                  </ul>
              </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2><div style="color:white;">I WANT TO</div> </h2>
                  <ul>
                    <li><a href="#">SIGN UP AS A INSTITUTE</a></li>
                    <li><a href="#">FIND A SCHOOL</a></li>
                    <li><a href="#">FIND A TICKETS</a></li>
                    <li><a href="#">FIND A CLASSES</a></li>
                    <li><a href="#">FIND A TRAINING INSTITUTE</a></li>
                    <li><a href="#">SIGN UP AS A TUTOR</a></li>
                    <li><a href="#">MAKE A PAYMENT</a></li></span>
                   
                  </ul>
                </div>
                </div>
                <!--<div class="single_footer_top">
                  <h2>Social Links </h2>
                  <ul class="social_nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>-->
              </div>
            </div>
          </div>
        </div>        
        <!--<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_bottom">
            <div class="copyright">
              <p>All right reserved  </p>
            </div>
            <div class="developer">
              <p>Developed By <a href="http://www.ovmwebsolutions.com/" rel="nofollow">OVM</a></p>
            </div>
          </div>
        </div>-->
      </div>
    </div>
</section>
  <!-- End latest news -->
  
  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>All right reserved  @ Thirdeye Learning Solutions Pvt Ltd</p>
          <!--  <a href="">
            <img src="assets/images/logo_mini_72x40.png">
            </a>-->
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.html"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<!-- *********************footer******************** -->
	<!-- **********whole body**************** -->
</body>
</html>
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
$(document).ready(function(){
  $('#datepicker').click(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  })
   $('#datepicker').keypress(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  });
  $("#file-upload").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo').val(a);
  });

  $("#img_click").on('click',function(){
      $('#file-upload').click();
  });

})


</script>