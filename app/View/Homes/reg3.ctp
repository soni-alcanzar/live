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

            <style type="text/css">
            input:-moz-placeholder { /* Firefox 18- */
                color: #555 !important;  
                }
                 
                input::-moz-placeholder {  /* Firefox 19+ */
                color: #555 !important;  
                }
                 
                input:-ms-input-placeholder {  
                color: #555 !important;  
                }
                input::-webkit-input-placeholder {
                    color: #555 !important;  
                }
            </style>
</head><!--/head-->

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
						<h2 class="b_step">Step 3</h2>
            <?php echo $this->Form->create('UserMaster',array('enctype'=>'multipart/form-data'));?>
              <p class="abc">
                               <?php echo  $this->Session->flash(); ?>
                             </p>
						<!-- ************select field1********* -->
						<div class="form-group">
                  <label for="usr">&nbsp;</label>
                   <?php echo $this->Form->input('coaching_experience', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'coaching_experience','placeholder'=>'Teaching Experience In Number Of Years'));?>
                  
            </div>
						<!-- ************select field1********* -->
						<!-- ************select field2********* -->
						<div class="form-group reg_text212">
						  <label for="usr" class="b_1_primary">Primary Verification:1</label>
						  <select class="form-control reg_input reg_input1" id="sel1">
							    <option>Aadhar Card</option>
							    <option>Passport</option>
							    <option>Voter Id</option>
                  <option>PAN Card</option>
                  <option>Other central gov issued id</option>
						  </select>
              <span class="carimg1"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
              <input type="text" class="form-control reg_input" id="usr" placeholder="Document Id">
						  <span class="carimg">&nbsp;</span>

              <?php echo $this->Form->input('profile_pic', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload'));?>
                  <input class="form-control reg_input" id="upload_photo" placeholder="Upload Photo" type="text">
                  <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/img/browse.png" id="img_click"></span>
              <!-- <input type="text" class="form-control reg_input br_pd123" id="usr" placeholder="Upload Photo">
              
              <span class="cal_br"><img src="<?php //echo HTTP_ROOT;?>/img/browse.png"></span> -->
						</div>
            <div class="col-md-12">
              <div class="form-group reg_text31">
      
                <div class="pull-right">
                  <a href="#" class="add_more" id="add11">
                    <i class="fa fa-plus" aria-hidden="true"></i><span style="font-weight:bold;">Add More</span>
                  </a>
                </div>
              </div>
            </div> 
						<!-- ************select field2********* -->
            <!-- ************select field2********* -->
            
            <div class="form-group reg_text212" id="verification2" style="padding-top:0px !important;display:none;">
              <label for="usr" class="b_1_primary">Primary Verification:2</label>
              <select class="form-control reg_input reg_input1" id="sel1">
                  <option>Aadhar Card</option>
                  <option>Passport</option>
                  <option>Voter Id</option>
                  <option>PAN Card</option>
                  <option>Other central gov issued id</option>
              </select>
              <span class="carimg1"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
              <input type="text" class="form-control reg_input" id="usr" placeholder="Registration Id">
              <span class="carimg">&nbsp;</span>
              <input type="text" class="form-control reg_input br_pd123" id="usr" placeholder="Upload Photo">
              
              <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/browse.png"></span>
            </div>
             <div class='abc1'>

            </div>
            <!-- ************select field2********* -->
						<!-- **************browse button******* -->
						<div class="form-group reg_text31">
						  <label for="usr" class="b_1_primary">Secondary Verification:1</label>
               <select class="form-control reg_input reg_input1" id="sel1">
                  <option>Certificates of excellence</option>
                  <option>Awards Received</option>
                  <option>Course Completion certificates</option>
                  <option>Papers Published</option>
                  <option>Distinguished Accomplishments</option>
                  <option>Newspaper Mentions</option>
              </select>
               <span class="carimg1"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
						  <input type="text" class="form-control reg_input" id="usr" placeholder="Upload Photo">
						  <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/browse.png"></span>
						</div>
            <!-- hide div -->
            <div class='abc'>

            </div>
            <div class="form-group reg_text31" id="add1" style="display:none;">
              <label for="usr" class="b_1_primary">Secondary Verification:2</label>
               <select class="form-control reg_input reg_input1" id="sel1">
                  <option>Certificates of excellence</option>
                  <option>Awards Received</option>
                  <option>Course Completion certificates</option>
                  <option>Papers Published</option>
                  <option>Distinguished Accomplishments</option>
                  <option>Newspaper Mentions</option>
              </select>
               <span class="carimg1"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
              <input type="text" class="form-control reg_input" id="usr" placeholder="Upload Photo">
              <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/browse.png"></span>
            </div>
          
            <!-- hide div -->
            <div class="col-md-12">
              <div class="form-group reg_text31">
      
                <div class="pull-right">
                  <a href="#" class="add_more" id="add">
                    <i class="fa fa-plus" aria-hidden="true"></i><span style="font-weight:bold;">Add More</span>
                  </a>
                </div>
              </div>
            </div>  
            <!-- hide div -->
            <!-- <div class="form-group reg_text31">
              <label for="usr" class="b_1_primary">Secondary Verification:</label>
               <select class="form-control reg_input reg_input1" id="sel1">
                  <option>Certificates of excellence</option>
                  <option>Awards Received</option>
                  <option>Course Completion certificates</option>
                  <option>Papers Published</option>
                  <option>Distinguished Accomplishments</option>
                  <option>Newspaper Mentions</option>
              </select>
               <span class="carimg1"><img src="images/caret.png"></span>
              <input type="text" class="form-control reg_input" id="usr" placeholder="Upload Photo">
              <span class="cal_br"><img src="images/img/browse.png"></span>
            </div> -->
						<!-- **************browse button******* -->
						
						<!-- **************button************* -->
						  <div class="form-group">        
							 <div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                  <div class="pull-left">
                   <!--  <a href="reg2.php"><button class="btn br_login2"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</button></a> -->
                     <a href="#" class="btn br_login2" onclick="back();"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</a>
                  </div>
                  <div class="pull-right">
                   <!--  <a href="#"><button class="btn br_login1">Skip</button></a> -->
                    <a href="#" class="btn br_login1" onclick="skip();">Skip<i class="bangl fa fa-angle-right" aria-hidden="true"></a>
                    <a href="#"><button class="btn br_login3">Sign Up</button></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
<script type="text/javascript">
    $("#add").click(function(){
         
           $('.abc').append('<div class="form-group reg_text31" id="add1"><label for="usr" class="b_1_primary">Secondary Verification:2</label><select class="form-control reg_input reg_input1" id="sel1"><option>Certificates of excellence</option><option>Awards Received</option><option>Course Completion certificates</option><option>Papers Published</option><option>Distinguished Accomplishments</option><option>Newspaper Mentions</option></select> <span class="carimg1"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span><input type="text" class="form-control reg_input" id="usr" placeholder="Upload Photo"><span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/browse.png"></span></div>');
          // alert('najmu');
        });
   
  
</script>
<script type="text/javascript">
function skip()
{
  //alert('hi');
   //alert('Skip-->go-->reg4');
  var skip_val='Skip';

  window.location.assign("<?php echo HTTP_ROOT;?>/Homes/reg4/"+skip_val)
}

function back()
{
 //alert('Back-->go-->reg2');
  var skip_val='Back';

  window.location.assign("<?php echo HTTP_ROOT;?>/Homes/reg2/"+skip_val)
}
</script>
<script type="text/javascript">
$("#file-upload").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo').val(a);
  });

  $("#img_click").on('click',function(){
      $('#file-upload').click();
  });
  $("#file-upload1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo1').val(a);
  });

  $("#img_click1").on('click',function(){
      $('#file-upload1').click();
  });

</script>