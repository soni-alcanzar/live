<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>demo</title>
    
    <!-- core CSS -->
    <?php 
            echo $this->Html->css('bootstrap');
            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('brain');
            echo $this->Html->css('check_box');
            echo $this->Html->css('style1');
          
            
             ?>
    
    
    
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
                    <div class="pull-right">
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
    <div class="row-fluid b_1_body">
        <div class="container ">    
    <!-- **********whole body**************** -->
            <!-- <div class="col-md-12 col-sm-12 b_1_body"> -->
                <!-- ********************border & heading****************** -->
                    <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 br_crte">
                        <div class="row">
                            <center>
                                <h2>Create An Account</h2>
                                <img src="<?php echo HTTP_ROOT;?>/img/underline.png" class="img-responsive">
                            </center>
                        </div>
                    </div>  
                    <!-- ********************border & heading****************** -->
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field">
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <h2 class="b_step">Step 1</h2>
                        <!-- ***************input field 1*************** -->
                        <div class="form-group">
                                  <label for="usr">&nbsp;</label>
                                  <input type="text" class="form-control reg_input" id="usr" placeholder="Email Id">
                        </div>
                        <!-- ***************input field 1*************** -->
                        <!-- ***************input field 2*************** -->
                        <div class="form-group">
                                  <label for="usr">&nbsp;</label>
                                  <input type="text" class="form-control reg_input" id="usr" placeholder="Password">
                        </div>
                        <!-- ***************input field 2*************** -->
                        <!-- ***************input field 3*************** -->
                        <div class="form-group br_state">
                                  <label for="usr">&nbsp;</label>
                                  <input type="text" class="form-control reg_input" id="usr" placeholder="Mobile No">
                        </div>
                        <!-- ***************input field 3*************** -->
                        <!-- ***************select field 1************** -->
                        <div class="form-group reg_text">
                            <select class="form-control reg_input" id="sel1">
                                <option>State</option>
                                <option>UP</option>
                                <option>MP</option>
                                <option>AP</option>
                            </select>
                            <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                        </div>
                        <!-- ***************select field 1************** -->
                        <!-- ***************register field 2************ -->
                        <div class="form-group reg_text">
                            <select class="form-control reg_input" id="sel1">
                                <option>City</option>
                                <option>Lucknow</option>
                                <option>Tanda</option>
                                <option>Faizabad</option>
                            </select>
                            <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                        </div>
                        <!-- ***************register field 2************ -->
                        <!-- ***************register field 3************ -->
                        <div class="form-group reg_text">
                            <select class="form-control reg_input" id="sel1">
                                <option>Interest</option>
                                <option>UP</option>
                                <option>MP</option>
                                <option>AP</option>
                            </select>
                            <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                        </div>
                        <!-- ***************register field 3************ -->
                        <!-- ***************radio button 1 -->
                        <div class="form-group b_1_radio">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6 b_1_pd">
                                        <input type="radio" checked="" name="radio-group" class="radio-custom" id="radio-1">
                                        <label class="radio-custom-label" for="radio-1"><span class="b_1_check">Buyer</span></label>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-6 b_1_pd">
                                       <input type="radio" checked="" name="radio-group" class="radio-custom" id="radio-2">
                                        <label class="radio-custom-label" for="radio-2"><span class="b_1_check">Vendor</span></label>
                                 </div>
                                </div>  
                              </div>
                        <!-- ***************radio button 1 -->
                        <!-- **************button************* -->
                        <div class="form-group">        
                            <div class=" col-sm-12 b_butt_pad b_1_pdnxt">
                                <a href="#"><img src="<?php echo HTTP_ROOT;?>/img/img/next_btn.png" class="pullright" style="width:30%"></a>
                              </div>
                            </div>
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
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="tearmscondition.html">TEARMS & CONDITION</a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                    <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
                    <li><a href="services.html">SERVICES</a></li>
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