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
					<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
						<h2 class="b_step">Step 2</h2>
            
            <?php echo $this->Form->create('UserMaster',array('enctype'=>'multipart/form-data'));?>
              <p class="abc">
                               <?php echo  $this->Session->flash(); ?>
                             </p>
						<!-- ***************input field 1*************** -->
						<!-- ***************radio button 1 -->
            <div class="form-group b_1_radio">
              <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 b_1_pd b_1_flt">
                        <input type="radio" name="vendor_type_id" class="radio-custom" value="2" id="radio-1">
                        <label class="radio-custom-label" for="radio-1"><span class="b_1_check">Individual</span></label>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-6 b_1_pd b_1_flt">
                       <input type="radio"  class="radio-custom" name="vendor_type_id" value="1" id="radio-2">
                        <label class="radio-custom-label" for="radio-2"><span class="b_1_check">Organization</span></label>
                   </div>
                  </div>  
                  </div>
            <!-- ***************radio button 1 -->
						<!-- ***************input field 1*************** -->
						<!-- ***************input field 2*************** -->
            <div id="individual">
  						<div class="form-group reg_text12 date-input-box12">
  							  <!-- <label for="usr"><img src="images/reg_pwd.png" class="reg_id"></label> -->
                    <?php echo $this->Form->input('d-o-b', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'datepicker','placeholder'=>'Date of Birth'));?>
  							  
  							  <span class="cal_b"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
  						</div>
  						<!-- ***************input field 2*************** -->
  						<!-- ***************input field 3*************** -->
  						<div class="form-group reg_text123">
  							  <!-- <label for="usr"><img src="images/mobile.png" class="reg_id"></label> -->
  							   <?php echo $this->Form->input('profile_pic', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload'));?>
                  <input class="form-control reg_input" id="upload_photo" placeholder="Upload Photo" type="text">
  							  <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/img/browse.png" id="img_click"></span>
  						</div>
            </div>

            <div id="organization">
              <div class="form-group">
                  <label for="usr">&nbsp;</label>
                  <?php echo $this->Form->input('Institute', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'institute_name','placeholder'=>'Institute Name'));?>
                 
            </div>
              <div class="form-group">
                  <label for="usr">&nbsp;</label>
                  <?php echo $this->Form->input('registration_id', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'registration_id','placeholder'=>'Registration Id'));?>
                  
            </div>
            <div class="form-group reg_text123">
                  <!-- <label for="usr"><img src="images/mobile.png" class="reg_id"></label> -->
                   <?php echo $this->Form->input('profile_pic1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload1'));?>
                  <input class="form-control reg_input" id="upload_photo1" placeholder="Upload Photo" type="text">
                  <span class="cal_br"><img src="<?php echo HTTP_ROOT;?>/img/img/browse.png" id="img_click1"></span>
              </div>
            </div>
						<!-- ***************input field 3*************** -->
						<!-- ***************select field 1************** -->
						<div class="form-group b_exprt">
              <?php echo $this->Form->input('expertise_area', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'expertise_area','placeholder'=>'Expertise Area'));?>
							
						</div>
						<!-- ***************select field 1************** -->
						<!-- ************text area 1********* -->
						<div class="form-group">
              <?php echo $this->Form->input('address', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'address','placeholder'=>'Full Address','rows'=>3));?>
						
						</div>
						<!-- ************text area 1********* -->
						<!-- ************text area 2********* -->
						<div class="form-group b_desc">
               <?php echo $this->Form->input('description', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'description','placeholder'=>'About Yourself','rows'=>3));?>
            
						 
						</div>
						<!-- ************text area 2********* -->
						<!-- **************button************* -->
						<div class="form-group">        
							<div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                  <div class="pull-left">
                    <a href="reg1.php"><button class="btn br_login2"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</button></a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo HTTP_ROOT;?>/Homes/reg3"><button class="btn br_login1">Skip</button></a>
  							    <a href="reg3"><button class="btn br_login2" id="sub">Next<i class="bangl fa fa-angle-right" aria-hidden="true"></i></button></a>
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
	 <?php echo $this->Element('homes_footer');?>
	<!-- *********************footer******************** -->
	<!-- **********whole body**************** -->
</body>
</html>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        //alert('najmu');

          $('#organization').hide();
          $('#individual').show(); 

          $("#radio-1").click(function(){
          //alert('najmu');
          //Holds the product ID of the clicked element
          $('#organization').hide();
          $('#individual').show();
        });
        $("#radio-2").click(function(){
          // Holds the product ID of the clicked element
          $('#individual').hide();
          $('#organization').show();
        });        
  $('#datepicker').click(function(){
   
     $( "#datepicker").datepicker();
     $( "#datepicker").datepicker("show");
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
  $("#file-upload1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo1').val(a);
  });

  $("#img_click1").on('click',function(){
      $('#file-upload1').click();
  });

  

});
</script>