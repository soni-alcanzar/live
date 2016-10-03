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
           
            
<style>
 option:hover, 
         option:focus, 
        option:active, 
         option:checked
            {
                background: linear-gradient(#33B9B4,#33B9B4);
                background-color: #33B9B4; /* for IE */
            }
 option:hover, 
         option:focus, 
        option:active, 
         option:checked
            {
                background: linear-gradient(#33B9B4,#33B9B4);
                background-color: #33B9B4; /* for IE */
            }

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
                    <a href="http://amazer.co.in/brgrooms/"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px;" class="img-responsive b_1_img"></a>
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
						<label class="b_1_home"><a href="http://amazer.co.in/brgrooms/" class="b_11_home">Home</a></label>
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
						<h2 class="b_step">Step 1</h2>
						<!-- ***************input field 0*************** -->
						<?php echo $this->Form->create('UserMaster');?>
						<div class="form-group">
								  <label for="usr">&nbsp;</label>
								  <?php echo $this->Form->input('first_name',array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'name','placeholder'=>'Name'));?>
								  <p id="error_name" style="padding-top:0px;padding-left:10px;"></p>
								  
						</div>
						<!-- ***************input field 0*************** -->
						<!-- ***************input field 1*************** -->
						<div class="form-group">
								  <label for="usr">&nbsp;</label>
								  <?php echo $this->Form->input('email',array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'email','placeholder'=>'Email Id'));?>
								  <p id="error_email" style="padding-top:5px;padding-left:10px;"></p>
								  
						</div>
						<!-- ***************input field 1*************** -->
						<!-- ***************input field 2*************** -->
						<div class="form-group">
								  <label for="usr">&nbsp;</label>
								  <?php echo $this->Form->input('password',array('type'=>'password','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'password','placeholder'=>'Password'));?>
								  <p id="error_password" style="padding-top:5px;padding-left:10px;"></p>
						</div>
						<!-- ***************input field 2*************** -->
						<!-- ***************input field 3*************** -->
						<div class="form-group br_state">
								  <label for="usr">&nbsp;</label>
								  <?php echo $this->Form->input('contact_no',array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'Mobile_No','placeholder'=>'Mobile Number','maxlength'=>10));?>
								  <p id="error_mobile" style="padding-top:5px;padding-left:10px;"></p>
						</div>
						<!-- ***************input field 3*************** -->
						<!-- ***************select field 1************** -->
						<div class="form-group ">
							<?php echo $this->Form->input('city_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'city_id','options'=>$city,'option_selected'=>$city['2']));?>
							
							
							<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                            <p id="error_city" style="padding-top:0px;padding-left:10px;"></p>
						</div>

                        <div class="form-group">
                            
                            <select class="form-control reg_input" id="locality_id">
                                <option value="">Select Locality</option>
                                <?php 
                                foreach ($localitie as $key => $value_location) {
                                
                                 $id=$value_location['Locality']['id'];
                                 $name=$value_location['Locality']['name'];
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                            
                            
                           <span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                            <p id="error_city" style="padding-top:0px;padding-left:10px;"></p>
                        </div>
						<!-- ***************select field 1************** -->
						<!-- ***************register field 2************ -->
						<!-- <div class="form-group ">
							<?php //echo $this->Form->input('locality',array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'Locality','placeholder'=>'Locality','list'=>'productName'));?>
							
							
							
								<datalist id="productName" id="locality">
							    <option value="Pen">Pen</option>
							    <option value="Pencil">Pencil</option>
							    <option value="Paper">Paper</option>
							</datalist>
							
							<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                            <p id="error_locality" style="padding-top:5px;padding-left:10px;"></p>
						</div> -->
						<!-- ***************register field 2************ -->
						<!-- ***************register field 3************ -->
						<div class="form-group ">
							<?php echo $this->Form->input('category_id', array('type'=>'select','label' => false,'div'=>false, 'class' => 'form-control reg_input','id'=>'category_id','options'=>$category,'option_selected'=>$category['1']));?>
						
							<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
                                <p id="error_category" style="padding-top:5px;padding-left:10px;"></p>
						</div>
						<!-- ***************register field 3************ -->
						<!-- ***************radio button 1 -->
						<div class="form-group b_1_radio">
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-6 b_1_pd b_1_flt">

								     <input type="radio"  name="user_type" class="radio-custom" value="2" id="radio-1" >
								     <label class="radio-custom-label" for="radio-1"><span class="b_1_check">Learner</span></label>
								</div>
								<div class="col-md-8 col-sm-6 col-xs-6 b_1_pd b_1_flt">
								    <input type="radio"  name="user_type" class="radio-custom" value="1" id="radio-2" >
								    <label class="radio-custom-label" for="radio-2"><span class="b_1_check">Vendor</span></label>
							     </div>
							</div>	
							<p id="error_user_type" style="padding-top:5px;padding-left:10px;"></p>
						</div>
						<!-- ***************radio button 1 -->
						<!-- **************button************* -->
						<div class="form-group">
								<div class=" col-sm-12 b_butt_pad b_1_pdnxt pull-right">
									<div class=" pull-right padd_l_r">
								    	<button class="btn br_login2 next1" type="submit" id="submit">Next<i class="bangl fa fa-angle-right" aria-hidden="true"></i></button>
								    	<button class="btn br_login2 next2" type="reset" style="display:none;">Next<i class="bangl fa fa-angle-right" aria-hidden="true"></i></button>
							  		</div>
							  	</div>
						</div>
						<!-- **************button************* -->
					</div>
					<?php echo $this->Form->end();?>
				</div>
		</div>	
		<!-- </div> -->
	</div>	

	<!-- *********************footer******************** -->
	<?php echo $this->element('homes_footer');?>
		<!-- *********************footer******************** -->
	<!-- **********whole body**************** -->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

         $("#Mobile_No").keypress(function (e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
    return false;
    }
   });
    	$("#city_id").on('change',function(){
      	  
	     var city_id=$(this).val();
	     
	    $('.loader').show();
	      $.ajax({ 
	        url: '<?php echo HTTP_ROOT;?>/Homes/getLocality/'+city_id,
	        type: 'post',
	         success: function(output) {
	         	$('.loader').hide();
	           if(output=='0'){
	           	alert('comming Soon');
	           }
			var result = jQuery.parseJSON(output);
			$('#productName').empty();
			$.each(result,function(e,temp_obj){
				$('#productName').append('<option value='+temp_obj.name +'>'+temp_obj.name +'</option>');
			  console.log( temp_obj.id + ": " + temp_obj.name );
			});
	               
	                
	                
	                 
	              }
	        });
	  });

    $('#submit').on('click',function(){
    	var name=$('#name').val();
    	var email=$('#email').val();
    	var password=$('#password').val();
    	var contact_no=$('#Mobile_No').val();
    	var city_id=$('#city_id').val();
    	var locality=$('#Locality').val();
       
        var category_id=$('#category_id').val();
        

       
        if(name==''){
        	$('#error_name').html('Please Enter Name');
        	$('#error_name').css('color','red');
        	$('#error_name').show();
        	$('#error_email').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#name').focus();
        	

        	return false;
        }
        else if(email==''){
            $('#error_email').html('Please Enter Email Address');
        	$('#error_email').css('color','red');
        	$('#error_email').show();
        	$('#error_name').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#email').focus();
        	

        	return false;
        }
        else if(!isEmail(email)){
 		    $('#error_email').html('Entered Email Address is not valid!');
        	$('#error_email').css('color','red');
        	$('#error_email').show();
        	$('#error_name').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#email').focus();
        	

        	return false;
}
  
        else if(password==''){
        	 $('#error_password').html('Please Enter Password');
        	$('#error_password').css('color','red');
        	$('#error_password').show();
        	$('#error_name').hide();
        	$('#error_email').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#password').focus();
        	

        	return false;
            
        }
        else if(contact_no==''){
        	$('#error_mobile').html('Please Enter Mobile Number');
        	$('#error_mobile').css('color','red');
        	$('#error_mobile').show();
        	$('#error_name').hide();
        	$('#error_email').hide();
        	$('#error_password').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#contact_no').focus();
           return false;
        }
        else if(city_id=='0'){
        	$('#error_city').html('Please Select City Name');
        	$('#error_city').css('color','red');
        	$('#error_city').show();
        	$('#error_name').hide();
        	$('#error_email').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
           return false;
        }
        else if(locality==''){
        	$('#error_locality').html('Please Enter Locality');
        	$('#error_locality').css('color','red');
        	$('#error_locality').show();
        	$('#error_name').hide();
        	$('#error_email').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
           return false;
        }
        else if(category_id=='0'){
        	$('#error_category').html('Please Select Interest Area');
        	$('#error_category').css('color','red');
        	$('#error_category').show();
        	$('#error_name').hide();
        	$('#error_email').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_user_type').hide();
           return false;
        }
       else  if($('input[name=user_type]:checked').length<=0)
{
      $('#error_user_type').html('Please Select User Type Vendor or Buyer');
       $('#error_user_type').css('color','red');
       $('#error_user_type').show();
       return false;
}
              else{
                 $('#error_user_type').hide();
    	return true;
    }
    });
$('#Mobile_No').on('blur',function(){
    var mobile_no=$(this).val();
   $('.loader').show();
          $.ajax({ 
            url: '<?php echo HTTP_ROOT;?>/Homes/checkMobile/'+btoa(mobile_no),
            type: 'post',
             success: function(output) {
                $('.loader').hide();
               if(output=='1'){
            $('#error_mobile').html('Mobile Number Already Exists');
            $('#error_mobile').css('color','red');
            $('#error_mobile').show();

            $(this).select();
               }
               else{
                $('#error_mobile').hide();
               }
                }
            });
})
$('#email').on('blur',function(){
	var email=$('#email').val();
	   $('.loader').show();
	      $.ajax({ 
	        url: '<?php echo HTTP_ROOT;?>/Homes/checkEmail/'+email,
	        type: 'post',
	         success: function(output) {
	         	$('.loader').hide();
	         	if(output=="1"){
	         $('#error_email').html('Email Address Already Exists!');
        	$('#error_email').css('color','red');
        	$('#error_email').show();
        	$('#error_name').hide();
        	$('#error_password').hide();
        	$('#error_mobile').hide();
        	$('#error_city').hide();
        	$('#error_locality').hide();
        	$('#error_category').hide();
        	$('#error_user_type').hide();
        	$('#email').focus();
        	

        	return false;	
	         	}
	         	else{
                    $('#error_email').hide();
	         		return true;
	         	}
	         }
});
	   
	  });
      	
    });
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
