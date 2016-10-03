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
				<div class="col-md-6 col-sm-6 pull-left b_1_rgh"><h4>Reset Password</h4></div>
				<div class="col-md-6 col-sm-6">
					<div class="pull-right blfthd">
						<label class="b_1_home"><a href="index.php" class="b_11_home">Home</a></label>
						<label class="b_1_angle"><i class="fa fa-angle-left" aria-hidden="true"></i></label>
						<label class="b_1_rgtn">Reset Password</label>
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
								<h2>Reset Password</h2>
								<img src="<?php echo HTTP_ROOT;?>/img/underline.png" class="bdrline img-responsive">
							</center>
						</div>
					</div>	
					<!-- ********************border & heading****************** -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<p class="mbno">Sit Back & Relex! While We Verify Your Mobile Number</p>
						<!-- ***************select field 1************** -->
						<div class="form-group b_exprt">

							
							<input class="form-control reg_input" id="usr" placeholder="Enter Your Code" type="text">
						</div>
						<!-- ***************select field 1************** -->
						<!-- **************button************* -->
						<div class="form-group">        
							<div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                  <div class="pull-left">
                    <a href="<?php echo HTTP_ROOT;?>/homes/resetPassword"><button class="btn br_cnch">Reset Password </button></a>
                  </div>
                  <div class="pull-right">
                    <!-- <a href="#"><button class="btn br_login1">Skip</button></a> -->
  							    <a href="#"><button class="btn br_cncl2 br_cncl22">Cancel</button></a>
                  </div>
							  </div>
							</div>
						<!-- **************button************* -->
					</div>
				</div>
			</div>	
		<!-- </div> -->
	</div>	

	<!-- *********************footer******************** -->
 <?php echo $this->Element('homes_footer'); ?>
</body>
</html>
