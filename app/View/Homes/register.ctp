<style type="text/css">
.error_msg {
    color: #A94442;
    margin-left: 12px;
}
</style>
<script type="text/javascript">
  function firstname(){
      var valdataget = document.getElementById('first_name');
      var message = document.getElementById('f1');
      if(valdataget.value==''){
        	message.innerHTML = "Please enter first name";
      	}else if(valdataget.value != ""){
	      	if(!/^[a-zA-Z ]*$/.test(valdataget.value)) {	      		
	      		message.innerHTML = "Please enter only alphabets";		        
		        document.getElementById('first_name').focus();	
		        return false;	        
	    	}else{
	           message.innerHTML = "&nbsp;";
	        }
      	}
  }  

    function pass(){
	      var valdataget = document.getElementById('password');
	      
	      var message = document.getElementById('f4');
	      if(valdataget.value==''){
	        message.innerHTML = "Please enter password";
	      }else{
	        message.innerHTML = "&nbsp;";
	        }
	 } 
	  function pass1(){
	      var valdataget = document.getElementById('password');
	      var valdataget1= document.getElementById('cnfrm_password');
	      var message = document.getElementById('f27');
	      if(valdataget1.value==''){
	        message.innerHTML = "Please enter Confirm password";
	      }
          else if((valdataget.value)!=(valdataget1.value)){
            message.innerHTML = "Password And Confirm Password Are not Same";
          }
	      else{
	        message.innerHTML = "&nbsp;";
	        }

	 }  
 

	 function mob(){
	      var valdataget = document.getElementById('mobile');
	      var message = document.getElementById('f5');
	      if(valdataget.value==''){
	        message.innerHTML = "Please enter mobile number";
	      }else if(valdataget.value != ""){
	      	if(valdataget.value.length < 10 ){	      		
          		message.innerHTML = "Please enter atleast 10 digit mobile number";
          	}else{
          		 message.innerHTML = "&nbsp;";
          	}
	       
	      }
	 } 

	 function city(){
	      var valdataget = document.getElementById('city_id');
	      var message = document.getElementById('f6');
	      if(valdataget.value==''){
	        message.innerHTML = "Please select city";
	      }else{
	         message.innerHTML = "&nbsp;";
	        }
	 } 

	 function locality(){
	      var valdataget = document.getElementById('locality_id');
	      var message = document.getElementById('f7');
	      if(valdataget.value==''){
	        message.innerHTML = "Please select locality";
	      }else{
	         message.innerHTML = "&nbsp;";
	        }
	 } 
	 function cat(){
	 if (interest==null) {
	    	//alert('gfdgf');
           
            $("#f8").html('Please select atleast 1');
            $("#locality").focus();
            return false;
	    }
	    else
	    {
	    	$("#f8").html('');
            //$("#locality").focus();
            return false;
	    }
	}


	 function usertype(){
	      if($('input[name=user_type_id]:checked').length<=0)
		{
      		$('#f9').html('Please Select User Type Vendor or Learner');
      		return false;
		}
		else
		{
			$('#f9').html('');
      		return false;
		}

	 }
	 function validateVendor(){
	 	if($('input[name=vendor_type_id]:checked').length<=0)
		{
      		$('#s1').html('Please Select One Individual or Organization');
      		$("#radio-3").focus();
	        return false;
		}else
		{
      		
			$('#s1').html('');
      		return true;
		}
	 }
	 function validateDob(date){
        if(date=="")
			{
				$('#s2').html('Please Select Date');
      			$("#datepicker2").focus();
	        	return false;
			}
			else{
			$('#s2').html('');
			return true;	
			}
	 }
	 function validatePhoto(upload_photo1){
	 	if (upload_photo1==''){

				$('#s3').show();
				$('#s3').html('Please Browse Photos');
      			$("#upload_photo1").focus();
	        	return false;

			}
			else{
				$('#s3').html('');
				return true;
			}

	 }
	 function validateExpertise(area_exp){
	 	if(area_exp==''){
			$('#s6').html('Please Enter Expertise Area');
			//alert(area_exp);
      			$("#area_exp").focus();
	        	return false;
		}
		else{
			$('#s6').html('');
			return true;
		}
	 }
	 function validateAddress(address){
	 	if(address==''){
			$('#s7').html('Please Enter Full Address');
			//alert(area_exp);
      			$("#address").focus();
	        	return false;
		}
		else{
			$('#s7').html('');
			return true;
		}
	 }
	 function validateYourself(yourself){
	 	if(yourself==''){
			$('#s8').html('Please Enter About Your Self');
			//alert(area_exp);
      			$("#yourself").focus();
	        	return false;
		}
		else{
		$('#s8').html('');
		return true;	
		}
	 }
	 function validateInstitute(institute_name){
	 	if(institute_name=="")
			{
				$('#s4').html('Please Enter Institute Name');
      			$("#institute_name").focus();
	        	return false;
			}
			else{
				$('#s4').html('');
			}
			
	 }
	 function validateRegID(official_reg_id){
	 	 if(official_reg_id=="")
			{
				$('#s5').html('Institute Official Registration Id');
      			$("#official_reg_id").focus();
	        	return false;
			}
			else{
			$('#s5').html('');	
			}
			
	 }
	 function validateUploadPhoto2(upload_photo2){


	   if (upload_photo2==''){

				$('#s33').html('Please Browse Photos');
      			$("#upload_photo2").focus();
	        	return false;

			}
			else{
				$('#s33').html('');
			}
		 }
</script>
<div class="container-fluid padd_l_r">
	<div class="row-fluid b_1_icon">
	    <div class="container ">
			<!-- **********icon********** -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a href="<?php echo HTTP_ROOT;?>"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px;" class="img-responsive b_1_img"></a>
				</div>
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
						<label class="b_1_home"><a href="<?php echo HTTP_ROOT;?>" class="b_11_home">Home</a></label>
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
				<form action="saveRegister" name="frm" method="post" enctype="multipart/form-data"  onsubmit="return validateForm()">
					<!-- Reg 1 -->
					<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 b_1_field" id="reg1">
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<h2 class="b_step">Step 1</h2>
							<!-- ***************input field 0*************** -->
							<div class="form-group sr_08_08_div_h">
								  <input type="text" class="form-control reg_input" name="first_name" id="first_name" placeholder="First Name" onblur="firstname(this.value)">
								  <div id="f1" class="error_msg">&nbsp;&nbsp;</div>
							</div>
						
							<!-- ***************input field 0*************** -->
							<!-- ***************input field 1*************** -->
							<div class="form-group sr_08_08_div_h">
								 
								   <input type="text" class="form-control reg_input" name="email" id="email" placeholder="Email Id">
								   <div id="f3" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************input field 1*************** -->
							<!-- ***************input field 2*************** -->
							<div class="form-group sr_08_08_div_h">
								  
								  <input type="password" class="form-control reg_input" name="password" id="password" placeholder="Password" onblur="pass(this.value)">
								  <div id="f4" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<div class="form-group sr_08_08_div_h">
									  
									  <input type="password" class="form-control reg_input" name="cnfrm_password" id="cnfrm_password" placeholder="Confirm Password" onblur="pass1(this.value)">
									  <div id="f27" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************input field 2*************** -->
							<!-- ***************input field 3*************** -->
							<div class="form-group sr_08_08_div_h">
								  
								  <input type="text" class="form-control reg_input" name="mobile" id="mobile" maxlength="10" placeholder="Mobile No" onblur="mob(this.value)">
								  <div id="f5" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************input field 3*************** -->
							<!-- ***************select field 1************** -->
							<div class="form-group sr_08_08_div_h">
							
								<select class="form-control reg_input" name="city_id" id="city_id" onblur="city(this.value)">
								<option value="">Select City</option>
								<?php
								foreach ($city as $key => $city_value){

									$id   =$city_value['City']['id'];
									$name =$city_value['City']['name'];
									//}
									?>
									<option value="<?php echo $id; ?>" <?php if($id!=1){ echo 'disabled'; } ?>><?php echo $name; ?></option>
									<?php
									}
								?>
								</select>
								<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
								<div id="f6" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************select field 1************** -->
							<!-- ***************register field 2************ -->
							<div class="form-group sr_08_08_div_h">

								<?php 
								/*echo "<pre>";
								print_r($localitie);
								echo "</pre>";*/
								?>
								<select id="locality_id" name="locality_id" class="form-control reg_input" onblur="locality(this.value)">
									<option value="">Select Locality</option>
									<?php foreach ($localitie as $key => $localitie_value) {
										
										$loc_id=$localitie_value['Locality']['id'];
										$loc_name=$localitie_value['Locality']['name'];
									
									?>
									<option value="<?php echo $loc_id; ?>"><?php echo $loc_name; ?></option>
									<?php
										}
									?>
									
								</select>
								<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
								<div id="f7" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************register field 2************ -->
							<!-- ***************register field 3************ -->
							<div class="form-group">
							
								<select class="form-control reg_input" name="category_id[]" id="interest" multiple="multiple" value="" data-actions-box="true"  style='overflow:auto' onblur="cat(this.value)">
									<?php 
									foreach ($category as $key => $value_category) {

										$c_cat =$value_category['Category']['category_name'];
										$c_id  =$value_category['Category']['id'];
										?>
									<option value="<?php echo $c_id; ?>"><?php echo $c_cat; ?></option>
									
									<?php
								}
								?>
								</select>
								<span class="carimg"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
								<div id="f8" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************register field 3************ -->
							<!-- ***************radio button 1 -->
							<div class="form-group b_1_radio btt_id">
								<div class="row">
									<div class="col-md-4 col-sm-6 col-xs-6 b_1_pd b_1_flt">
									     <input type="radio" name="user_type_id" class="radio-custom" id="radio-1" value="2" onchange="usertype(this.value)">
									     <label class="radio-custom-label" for="radio-1"><span class="b_1_check">Learner</span></label>
									</div>
									<div class="col-md-8 col-sm-6 col-xs-6 b_1_pd b_1_flt">
									    <input type="radio" name="user_type_id" class="radio-custom" id="radio-2" value="1" onchange="usertype(this.value)">
									    <label class="radio-custom-label" for="radio-2"><span class="b_1_check">Vendor</span></label>
								     </div>
								     <div id="f9" class="error_msg">&nbsp;&nbsp;</div>
								</div>	
							</div>
							<!-- ***************radio button 1 -->
							<!-- **************button************* -->
							<div class="form-group btt_id">
									<div class=" col-sm-12 b_butt_pad b_1_pdnxt pull-right">
										<div class=" pull-right padd_l_r">
									    	<a href="#" class="btn br_login2 next1" name="next1" onclick="reg_2();">Next<i class="bangl fa fa-angle-right" aria-hidden="true"></i></a>
									    	
								  		</div>
								  	</div>
							</div>
							<!-- **************button************* -->
						</div>
					</div>

					<!-- End Reg 1 -->

					<!-- Reg 2 -->
					<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 b_1_field_02" id="reg2" style="display:none">
						<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
							<h2 class="b_step">Step 2</h2>
							<!-- ***************input field 1*************** -->
							<!-- ***************radio button 1 -->
				            <div class="form-group b_1_radio">
			                    <div class="row">
				                    <div class="col-md-4 col-sm-6 col-xs-12 b_1_pd b_1_flt rad_br">
				                        <input type="radio"  name="vendor_type_id" class="radio-custom" value="1" id="radio-3" cheacked>
				                        <label class="radio-custom-label" for="radio-3" onchange="validateVendor(this.value)"><span class="b_1_check">Individual</span></label>
				                    </div>
				                    <div class="col-md-8 col-sm-6 col-xs-12 b_1_pd b_1_flt rad_br">
				                       <input type="radio" name="vendor_type_id" class="radio-custom" id="radio-4" value="2">
				                        <label class="radio-custom-label" for="radio-4" onchange="validateVendor(this.value)"><span class="b_1_check">Organization</span></label>
				                    </div>
				                   
			                    </div> 
			                    <div id="s1" class="error_msg">&nbsp;&nbsp;</div>
				            </div>
        					<!-- ***************radio button 1 -->
							<!-- ***************input field 1*************** -->
							<!-- ***************input field 2*************** -->
            				<div id="individual" class="col-xs-12 sr_09_08_padding_div_reg_3">
		  						<div class="form-group sr_08_08_div_h">
		  							  <!-- <label for="usr"><img src="images/reg_pwd.png" class="reg_id"></label> -->
		  							  <input class="form-control reg_input" name="d_o_b" id="datepicker2" placeholder="Date of Birth" type="text" onblur="validateDob(this.value);">
		  							  
		  							  <span class="sr_08_08_calender_stp2"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
		  							  <div id="s2" class="error_msg">&nbsp;&nbsp;</div>
		  						</div>
		  						<!-- ***************input field 2*************** -->
		  						<!-- ***************input field 3*************** -->
		  						<div class="form-group sr_08_08_div_h">
								  	<!-- <label for="usr"><img src="images/mobile.png" class="reg_id"></label> -->
	                				<?php echo $this->Form->input('profile_image1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload1'));?>
		             
								  	<input type="text" class="form-control reg_input" id="upload_photo1" placeholder="Upload Photo">
								  
								  	<span class="sr_08_08_file_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click1" onclick="validatePhoto(this.value);"></span>
									<div id="s3" class="error_msg" style="display:none;">&nbsp;&nbsp;</div>
								</div>
	            			</div>

				            <div id="organization" class="col-xs-12 sr_09_08_padding_div_reg_3">
				              	<div class="form-group sr_08_08_div_h">
				                    <label for="usr">&nbsp;</label>
				                  	<input type="text" class="form-control reg_input" name="institute_name" id="institute_name" placeholder="Institute Name" onblur="validateInstitute(this.value);">
				                  	<div id="s4" class="error_msg">&nbsp;&nbsp;</div>
				            	</div>
				              	<div class="form-group sr_08_08_div_h">
				                   	<label for="usr">&nbsp;</label>
				                  	<input type="text" class="form-control reg_input" name="official_reg_id" id="official_reg_id" placeholder="Institute Official Registration Id" onblur="validateRegID(this.value);">
				                  	<div id="s5" class="error_msg">&nbsp;&nbsp;</div>
				            	</div>
				            	<div class="form-group reg_text sr_08_08_div_h">
				            			<label for="us1212r">&nbsp;</label>
				            		<?php echo $this->Form->input('profile_image2', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload2'));?>
				             		<input type="text" class="form-control reg_input" id="upload_photo2" placeholder="Upload Photo">
								   
								    <span class="sr_08_08_file_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click2" onclick="validateUploadPhoto2(this.value);"></span>
								    	<div id="s33" class="error_msg">&nbsp;&nbsp;</div>
								</div>
				            </div>
							<!-- ***************input field 3*************** -->
							<!-- ***************select field 1************** -->
							<div class="form-group b_exprt sr_08_08_div_h_area_exp col-xs-12 sr_09_08_padding_div_reg_3">
								<input class="form-control reg_input" name="area_of_expertise" id="area_exp" placeholder="Expertise Area" type="text" onblur="validateExpertise(this.value);">
								
								<p style="margin-left:13px;" class="p_tag_sr_08_08">like Hatha Yoga expert, Karata Black Belt Holder, 6 sigma expert etc</p>
								<div id="s6" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ***************select field 1************** -->
							<!-- ************text area 1********* -->
							<div class="form-group sr_08_08text_a_h col-xs-12 sr_09_08_padding_div_reg_3">
							  	<textarea class="form-control reg_input" rows="3" name="address" id="address" placeholder="Full Address" onblur="validateAddress(this.value);"></textarea>
							  	<div id="s7" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ************text area 1********* -->
							<!-- ************text area 2********* -->
							<div class="form-group sr_08_08text_a_h col-xs-12 sr_09_08_padding_div_reg_3">
							  	<textarea class="form-control reg_input" rows="3" name="yourself" id="yourself" placeholder="About Yourself" onblur="validateYourself(this.value);"></textarea>
							  	<div id="s8" class="error_msg">&nbsp;&nbsp;</div>
							</div>
							<!-- ************text area 2********* -->
							<!-- **************button************* -->
							<div class="form-group col-xs-12 sr_09_08_padding_div_reg_3">        
								<div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
				                  	<div class="pull-left">
				                    	<a type="button" class="btn br_login2" onclick="back_reg_1();"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</a>
				                  	</div>
				                  	<div class="pull-right">
				                    	<a href="#" class="btn br_login1" onclick="skip_2();">Skip</a>
		  							    <a class="btn br_login2" onclick="reg_3();" >Next<i class="bangl fa fa-angle-right" aria-hidden="true"></i></a>
				                  	</div>
							  	</div>
							</div>
							<!-- **************button************* -->
						</div>
					</div>

				<!-- End Reg 2 -->

				<!-- Reg 3 -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 b_1_field_033 col-xs-12" id="reg3" style="display:none">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<h2 class="b_step">Step 3</h2>
            			<?php //echo $this->Form->create('UserVerfication',array('enctype'=>'multipart/form-data'));?>
            				
	      					<p class="abc">
	                       		<?php echo  $this->Session->flash(); ?>
	                     	</p>
									<!-- ************select field1********* -->
							<div class="form-group sr_08_08_div_h">
                  				<label for="usr">&nbsp;</label>

                 				<input type="text" name="coaching_experience" class="form-control reg_input" id="coaching_experience" placeholder="Teaching Experience In Number Of Years">
                 				 <div id="sp3_1" class="error_msg">&nbsp;&nbsp;</div>
            				</div>
							<!-- ************select field1********* -->
							<!-- ************select field2********* -->
							<div id="p_veri_id_1" class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3">
								<div class="form-group reg_text212">
							   	 	<label for="usr" class="b_1_primary">Primary Verification:1</label>
								    <div class="sr_08_08_div_h">
									    <select class="form-control reg_input reg_input1" id="p_verification1" name="identity_of_primary_verification1">
										    <option value="">Select One</option>
										    <option value="Aadhar Card">Aadhar Card</option>
										    <option value="Passport">Passport</option>
										    <option value="Passport">Voter Id</option>
				                  			<option value="PAN Card">PAN Card</option>
				                  			<option value="Other central gov issued id">Other central gov issued id</option>
									    </select>
									    <div id="sp3_2" class="error_msg">&nbsp;&nbsp;</div>
		             	 				<span class="se_08_08_carret_img02_2016">
		             	 					<img src="<?php echo HTTP_ROOT;?>/img/caret.png">	
	             	 					</span>
	         	 					</div>

	         	 					<div class="sr_08_08_div_h">
		              					<input type="text" name="document_id" class="form-control reg_input" id="document_id" placeholder="Document Id">
	              						<div id="sp3_3" class="error_msg">&nbsp;&nbsp;</div>
								  		<span class="carimg">&nbsp;</span>
								  	</div>
								  	<div class="sr_08_08_div_h">
		              					<?php echo $this->Form->input('document_image_pvri_1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload'));?>
	                  					<input class="form-control reg_input" name="upload_photo" id="upload_photo" placeholder="Upload Photo" type="text">
	                  					<div id="sp3_4" class="error_msg">&nbsp;&nbsp;</div>
	                  					<span class="sr_08_08_step_3_02_browse"><img src="<?php echo HTTP_ROOT;?>/img/img/browse.png" id="img_click"></span>
									</div>
								</div>
							</div>
							<div id="p_veri_id_2" class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3" style="display:none">
								<div class="form-group reg_text212 col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3">
								  	<label for="usr" class="b_1_primary">Primary Verification:2</label>
								  	<div class="col-xs-12 col-sm-12 sr_08_08_div_h sr_09_08_padding_div_reg_3">
									  	<select class="form-control reg_input reg_input1" id="sel1" name="identity_of_primary_verification2">
										    <option value="">Select One</option>
										    <option value="Aadhar Card">Aadhar Card</option>
										    <option value="Passport">Passport</option>
										    <option value="Passport">Voter Id</option>
				                  			<option value="PAN Card">PAN Card</option>
				                  			<option value="Other central gov issued id">Other central gov issued id</option>
									  	</select>
			              				<span class="se_09_08_carret_img03"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
		              				</div>

		              				<div class="col-xs-12 col-sm-12 sr_08_08_div_h sr_09_08_padding_div_reg_3">
		             		 			<input type="text" name="document_id2" class="form-control reg_input" id="usr" placeholder="Document Id">
		             		 		</div>

								  	<span class="carimg">&nbsp;</span>

								  	<div class="col-xs-12 col-sm-12 sr_08_08_div_h sr_09_08_padding_div_reg_3">
			              				<?php echo $this->Form->input('document_image_pvri_2', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload_d3'));?>

		                  				<input class="form-control reg_input" id="upload_photo_d3" placeholder="Upload Document Photo" type="text">

		              					<span class="sr_08_08_file_browse"><img src="<?php echo HTTP_ROOT;?>/img/img/browse.png" id="img_click_d3"></span>
	     							</div>
								</div>
							</div>


				            <div class="col-md-12 sr_09_08_ma_top_step3 col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3">
				              	<div class="form-group reg_text31">
				                	<div class="pull-right">
				                  		<a href="#" class="add_more" id="add_more1" onclick="add_more();">
				                    		<i class="fa fa-plus" aria-hidden="true"></i><span style="font-weight:bold;">Add More</span>
				                  		</a>
				                	</div>
				              	</div>
				            </div> 
						<!-- ************select field2********* -->
            <!-- ************select field2********* -->
           
            <!-- <div class="form-group reg_text212" id="verification2" style="padding-top:0px !important;display:none;">
              <label for="usr" class="b_1_primary">Primary Verification:2</label>
              <select class="form-control reg_input reg_input1" id="sel1">
                  <option value="Aadhar Card">Aadhar Card</option>
                  <option value="Passport">Passport</option>
                  <option value="Voter Id">Voter Id</option>
                  <option value="PAN Card">PAN Card</option>
                  <option value="Other central gov issued id">Other central gov issued id</option>
              </select>
             <span class="carimg1"><img src="<?php //echo HTTP_ROOT;?>/img/caret.png"></span>
              <input type="text" class="form-control reg_input" id="usr" placeholder="Registration Id">
              <span class="carimg">&nbsp;</span>
              <input type="text" class="form-control reg_input br_pd123" id="usr" placeholder="Upload Photo">
              
              <span class="cal_br"><img src="<?php //echo HTTP_ROOT;?>/img/browse.png"></span>
            </div> -->
             <div class='abc1'>

            </div>
            <!-- ************select field2********* -->
						<!-- **************browse button******* -->
						<div id="s_veri_id_1">
						<div class="form-group reg_text31 col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3">
						  	<label for="usr" class="b_1_primary">Secondary Verification:1</label>
						  	<div class="sr_08_08_div_h">
				               	<select class="form-control reg_input reg_input1" name="identity_of_secoundry_verification1" id="sel1">
				                  	<option value="">Certificates of excellence</option>
				                  	<option value="Awards Received">Awards Received</option>
				                  	<option value="Course Completion certificates">Course Completion certificates</option>
				                    <option value="Papers Published">Papers Published</option>
				                    <option value="Distinguished Accomplishments">Distinguished Accomplishments</option>
				                    <option value="Newspaper Mentions">Newspaper Mentions</option>
				                </select>
				                <div id="ss3_1" class="error_msg">&nbsp;&nbsp;</div>
				            </div>
			              	<div class="sr_08_08_div_h">
	                			<?php echo $this->Form->input('certif_img1', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload_c1'));?>
	                  			<input class="form-control reg_input" name="upload_photo_c1" id="upload_photo_c1" placeholder="Upload Document Photo" type="text">
	                  			<div id="ss3_2" class="error_msg">&nbsp;&nbsp;</div>
	                  			<span class="sr_08_08_step_3_02_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click_c1"></span>
	                  		</div>

						</div>
					</div>
            			<!-- hide div -->
            			<div class='abc'>

            			</div>
			            <div class="form-group reg_text31 col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3" id="s_veri_id_2" style="display:none;">

			              	<label for="usr" class="b_1_primary">Secondary Verification:2</label>
			              	<div class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3 sr_08_08_div_h">
				               	<select class="form-control reg_input reg_input1" name="identity_of_secoundry_verification2" id="secoundry_verification2">
				                  <option value="">Certificates of excellence</option>
				                  <option value="Awards Received">Awards Received</option>
				                  <option value="Course Completion certificates">Course Completion certificates</option>
				                  <option value="Papers Published">Papers Published</option>
				                  <option value="Distinguished Accomplishments">Distinguished Accomplishments</option>
				                  <option value="Newspaper Mentions">Newspaper Mentions</option>
				              	</select>
			              	</div>

			              	<div class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3 sr_08_08_div_h">
				               	<?php echo $this->Form->input('certif_img2', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload_c2'));?>
	                  			<input class="form-control reg_input" name="upload_photo_c2" id="upload_photo_c2" placeholder="Upload Document Photo" type="text">

	                  			<span class="sr_08_08_file_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click_c2"></span>
	                  		</div>
			            </div>

			            <div class="form-group reg_text31 col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3" id="s_veri_id_3" style="display:none;">
			              	<label for="usr" class="b_1_primary">Secondary Verification:3</label>
			              	<div class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3 sr_08_08_div_h">
			               		<select class="form-control reg_input reg_input1" name="identity_of_secoundry_verification3" id="sel1" style="margin-bottom: 0px;">
				                  <option value="">Certificates of excellence</option>
				                  <option value="Awards Received">Awards Received</option>
				                  <option value="Course Completion certificates">Course Completion certificates</option>
				                  <option value="Papers Published">Papers Published</option>
				                  <option value="Distinguished Accomplishments">Distinguished Accomplishments</option>
				                  <option value="Newspaper Mentions">Newspaper Mentions</option>
				              	</select>
				            </div>
				            <div class="col-xs-12 col-sm-12 sr_09_08_padding_div_reg_3 sr_08_08_div_h">
				              	<?php echo $this->Form->input('certif_img3', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload_c3'));?>
	                  			<input class="form-control reg_input" id="upload_photo_c3" placeholder="Upload Document Photo" type="text">
	                  			<span class="sr_08_08_file_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click_c3"></span>
	                  		</div>
			            </div>
          
            <!-- hide div -->
            <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="form-group reg_text31">
      
                <div class="pull-right">
                  <a href="#" class="add_more" id="s_add_more1" onclick="add_smore1();">
                    <i class="fa fa-plus" aria-hidden="true"></i><span style="font-weight:bold;">Add More</span>
                  </a>
                   <a href="#" class="add_more" id="s_add_more2" onclick="add_smore2();" style="display:none;">
                    <i class="fa fa-plus" aria-hidden="true"></i><span style="font-weight:bold;">Add More</span>
                  </a>

                  
                </div>
              </div>
            </div>  
            <!-- hide div -->

            <div class="form-group" style="margin-bottom:0px;">
                  <input name="check" class="radiobtn required"  value="1" id="checkbox" type="checkbox">
                     <a href="<?php echo HTTP_ROOT;?>/Homes/terms">
                                  <span class="b_1_check" target="_blank">
                                    Terms and conditions
                                  </span>
                      </a>
                               
                </div>
            <span id="error5" style="font-size:14px;">&nbsp;</span>		
           
						
						<!-- **************button************* -->
				<div class="form-group">        
					<div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
	                  <div class="pull-left">
	                   <!--  <a href="reg2.php"><button class="btn br_login2"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</button></a> -->
	                     <!-- <a href="#" class="btn br_login2" onclick="back();"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</a> -->
	                     <a type="button" class="btn br_login2" onclick="back_reg_2();">Back</a>
	                  </div>
	                  <div class="pull-right">
	                 
	                   <!--  <a href="#" class="btn br_login1" onclick="skip_3();">Skip<i class="bangl fa fa-angle-right" aria-hidden="true"></i></a> -->
	                    <!-- <a href="#" class="btn br_login3" onclick="reg_4();">Next</a> -->
	                    <button type="submit" class="btn br_login3">Sign Up</button>
	                  </div>
	                </div>
			</div>
             
						<!-- **************button************* -->
					</div>
				</div>

			<!-- End Reg 3 -->

			<!-- Reg 4 -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field" id="reg4" style="display:none">
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<h2 class="b_step">Step 2</h2>
						<!-- ************select field1********* -->
						<div class="form-group reg_text1 sr_08_08_div_h">
						  <!-- <label for="usr"><img src="images/interest.png" class="reg_id"></label> -->
						  <select class="form-control reg_input" id="com_id" name="community_id" multiple="multiple">
							    <?php foreach ($community as $key => $value_community) {
							    	# code...
							    ?>
							    <option value="<?php echo $value_community['Community']['id'] ?>">
							    	<?php echo $value_community['Community']['community_name'] ?>
							    </option>
							    <?php
									}
								?>
						  </select>
						  <div id="s4_1" class="error_msg">&nbsp;&nbsp;</div>
						  
						  <span class="sr_08_08_carreta_2016_02"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
						</div>
						<!-- ************select field1********* -->
						<!-- ************select calendar********* -->
						<div class="form-group reg_text sr_08_08_div_h">
						  <!-- <label for="usr"><img src="images/reg_pwd.png" class="reg_id"></label> -->
						  <input type="text" class="form-control reg_input" name="d_o_b2" id="datepicker3" placeholder="Date of Birth">
						  <div id="s4_2" class="error_msg">&nbsp;&nbsp;</div>
						  <span class="sr_08_08_calender"><img src="<?php echo HTTP_ROOT;?>/img/cal.png"></span>
						</div>
						<!-- ************select calendar********* -->
						<!-- ***************select field 3*************** -->
						<div class="form-group reg_text sr_08_08_div_h">
						  <!-- <label for="usr"><img src="images/interest.png" class="reg_id"></label> -->
						  <select class="form-control reg_input" name="gender" id="gender">
							    <option value="">Gender</option>
							    <option value="1">Male</option>
							    <option value="2">Female</option>
						  </select>
						  <div id="s4_3" class="error_msg">&nbsp;&nbsp;</div>
						  <span class="sr_08_08_carreta_2016_02"><img src="<?php echo HTTP_ROOT;?>/img/caret.png"></span>
						</div>
						<!-- ***************select field 3*************** -->
						<!-- *****************browse************* -->
							<div class="form-group reg_text sr_08_08_div_h">
							  		<!-- <label for="usr"><img src="images/mobile.png" class="reg_id"></label> -->
	                			<?php echo $this->Form->input('profile_image', array('type'=>'file','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','style'=>'display:none','id'=>'file-upload_4_2'));?>
	             
							  <input type="text" class="form-control reg_input" name="upload_photo_4_2" id="upload_photo_4_2" placeholder="Upload Photo">
							  <div id="s4_4" class="error_msg">&nbsp;&nbsp;</div>
							  <span class="sr_08_08_step_3_02_browse"><img src="<?php echo HTTP_ROOT;?>/img/browse.png" id="img_click_4_2"></span>
						</div>
						<!-- *****************browse************* -->
						 <div class="form-group" style="margin-bottom:0px;">
			                  <input name="check" class="radiobtn required"  value="1" id="checkbox1" type="checkbox">
			                     <a href="<?php echo HTTP_ROOT;?>/Homes/terms" target="_blank">
                                                 <span class="b_1_check" >
                                                    Terms and conditions
                                                 </span>
                                             </a>
			                               
			            </div>
			            <span id="error6" style="font-size:14px;">&nbsp;</span>			
            <!-- **************button************* -->
            <div class="form-group">        
              <div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                  <div class="pull-left">
                   <a class="btn br_login2" onclick="back_reg_3();"><i class="bangr fa fa-angle-left" aria-hidden="true"></i>Back</a>
                  </div>
                  <div class="pull-right">
                    <!-- <a href="#"><button class="btn br_login1">Skip</button></a> -->
                    <button class="btn br_login3" type="submit">Sign Up</button>
                  </div>
                </div>
              </div>
            <!-- **************button************* -->
					</div>
				</div>

			<!-- End Reg 4 -->
		</form>



		</div>	
		<!-- </div> -->
	</div>	
</div>

	<!-- *********************footer******************** -->
<!-- End latest news -->
  <script type="text/javascript">
  	function reg_2(){
  		//alert('hi');
  		var first_name    = $("#first_name").val();
  		var last_name     = $("#last_name").val();
  		var email         = $("#email").val();
  		var password      = $("#password").val();
  		var mobile        = $("#mobile").val();
  		var city_id       = $("#city_id").val();
  		var locality      = $("#locality_id").val();
  		var interest      = $("#interest").val();
  		var radioValue    =$("input[name='user_type_id']:checked").val();
		var regemail      = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  		//alert(interest);
  		if(first_name=='')
  		{
  			$("#f1").html('Please enter first name');
  			$("#first_name").focus();
  			return false;
  		}
  		
  		else if(email=='')
  		{
  			$("#f3").html('Please enter email address');
  			$("#email").focus();
        	return false;
  		}
  		else if(regemail.test(email) == false)
    	{
	      $("#f3").html('Please enter valid e-mail address!');
	      $("#email").focus();
	        return false;
   		}
   		else if(password=='')
   		{
   			$("#f4").html('Please enter password');
   			$("#password").focus();
	        return false;
	    }
	    else if(mobile=='')
   		{
   			$("#f5").html('Please enter mobile number');
   			$("#mobile").focus();
	        return false;
	    }
	    else if(city_id=='')
   		{
   			$("#f6").html('Please select city');
   			$("#city_id").focus();
	        return false;
	    }
	    else if(locality=='')
   		{
   			$("#f7").html('Please select locality');
   			$("#locality").focus();
	        return false;
	    }
	    else if (interest==null) {
	    	//alert('gfdgf');
           
            $("#f8").html('Please select atleast 1');
            $("#locality").focus();
            return false;
	    }
	    else  if($('input[name=user_type_id]:checked').length<=0)
		{
      		$('#f9').html('Please Select User Type Vendor or Learner');
      		return false;
		}
		else if(radioValue==2)
		{
			$("#reg4").show();
  			$("#reg1").hide();
  			$("input[type=checkbox]:not(:checked)").attr("disabled",false);
		}
		else
  		{

  		$("#reg1").hide();
  		$("#reg2").show();


  		}
  	}
  	function skip_2(){
  		//alert('hi');
  		$("#reg3").show();
  		$("#reg2").hide();
  	}
  	
  	function back_reg_1(){
  		//alert('hi');
  		$("#reg1").show();
  		$("#reg2").hide();
  	}

  	function reg_3(){
  		//alert('hi');

	var date             = $("#datepicker2").val();
	var fileupload1      = $("#file-upload1").val();
	var vandor_type_id   = $("input[name='vendor_type_id']:checked").val();
	
	var upload_photo1    = $("#upload_photo1").val();
	var area_exp         = $("#area_exp").val();
	var address          = $("#address").val();
	var yourself         = $("#yourself").val();
	var upload_photo_4_1 = $("#upload_photo_4_1").val();
	
	if($('input[name=vendor_type_id]:checked').length<=0)
		{
      		$('#s1').html('Please Select One Individual or Organization');
      		$("#radio-3").focus();
	        return false;
		}

	if(vandor_type_id=='1'){
			if(date=="")
			{
				$('#s2').html('Please Select Date');
      			$("#datepicker2").focus();
	        	return false;
			}
			else if (upload_photo1==''){

				$('#s3').show();
				$('#s3').html('Please Browse Photos');
      			$("#upload_photo1").focus();
	        	return false;

			}

			else if(area_exp==''){
			$('#s6').html('Please Enter Expertise Area');
			//alert(area_exp);
      			$("#area_exp").focus();
	        	return false;
		}
		else if(address==''){
			$('#s7').html('Please Enter Full Address');
			//alert(area_exp);
      			$("#address").focus();
	        	return false;
		}
		else if(yourself==''){
			$('#s8').html('Please Enter About Your Self');
			//alert(area_exp);
      			$("#yourself").focus();
	        	return false;
		}
		else
		{
			
			$("#reg2").hide();
  			$("#reg3").show();
		}

		}
		else
		{
			
			var institute_name = $("#institute_name").val();
			var official_reg_id = $("#official_reg_id").val();
			var upload_photo2 = $("#upload_photo2").val();
			

			
			if(institute_name=="")
			{
				$('#s4').html('Please Enter Institute Name');
      			$("#institute_name").focus();
	        	return false;
			}
			else if(official_reg_id=="")
			{
				$('#s5').html('Institute Official Registration Id');
      			$("#official_reg_id").focus();
	        	return false;
			}
			else if (upload_photo2==''){

				$('#s33').html('Please Browse Photos');
      			$("#upload_photo2").focus();
	        	return false;

			}

			else if(area_exp==''){
			$('#s6').html('Please Enter Expertise Area');
			//alert(area_exp);
      			$("#area_exp").focus();
	        	return false;
		}
		else if(address==''){
			$('#s7').html('Please Enter Full Address');
			//alert(area_exp);
      			$("#address").focus();
	        	return false;
		}
		else if(yourself==''){
			$('#s8').html('Please Enter About Your Self');
			//alert(area_exp);
      			$("#yourself").focus();
	        	return false;
		}
		else
		{
			$("#reg2").hide();
  			$("#reg3").show();
		}


		}
	
		
  	}
  	function back_reg_2(){
  		//alert('hi');
  		$("#reg2").show();
  		$("#reg3").hide();
  	}
  	
  	function skip_3(){
  		//alert('hi');
  		$("#reg4").show();
  		$("#reg3").hide();
  	}
  	function reg_4(){
  		//alert('hi');
  		
  		$("#reg4").show();
  		$("#reg3").hide();
  	}

  	function back_reg_3(){
  		var radioValue    =$("input[name='user_type_id']:checked").val();
  		//alert(radioValue);
  		if(radioValue==2)
		{
			$("#reg1").show();
  			$("#reg4").hide();
  			$("input[type=checkbox]:not(:checked)").attr("disabled", "disabled")
		}
		else
		{
			$("#reg3").show();
	  		$("#reg4").hide();
  		}
  	}
  	function add_more(){
  		$("#p_veri_id_1").hide();
  		$("#p_veri_id_2").show();
  		$("#add_more1").hide();
  		
  	}
  	function add_smore1(){
  		$("#s_veri_id_1").hide();
  		$("#s_veri_id_2").show();
  		$("#s_add_more1").hide();
  		$("#s_add_more2").show();
  		
  	}

  	function add_smore2(){
  		$("#s_veri_id_2").hide();
  		$("#s_veri_id_3").show();
  		$("#s_add_more2").hide();
  		
  	}
  	 $("#mobile").keypress(function (e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
    return false;
    }
   });

  	  $("#coaching_experience").keypress(function (e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
    return false;
    }
   });
  	
</script>
<script type="text/javascript">
$(document).ready(function() {

$('#interest').multiselect({
      nonSelectedText: 'Select Interest Areas',
      
      
    });

$('#com_id').multiselect({
      nonSelectedText: 'Community Class Preference',
      
    });




 //});
/*$("#locality_id").multiselect({
    multiple: false,
    header: true,
    selectedList: 1,
    open: function () {  
        $("#locality_id").multiselect("close");
    }
}); */
}); 
</script>

<script type="text/javascript">
      $(document).ready(function(){
        //alert('najmu');

          $('#organization').hide();
          $('#individual').show(); 

          $("#radio-3").click(function(){
          //alert('najmu');
          //Holds the product ID of the clicked element
          $('#organization').hide();
          $('#individual').show();
        });
        $("#radio-4").click(function(){
          // Holds the product ID of the clicked element
          $('#individual').hide();
          $('#organization').show();
        }); 
        });
</script>
<script>
$(document).ready(function(){
    
     $('#datepicker').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $( "#datepicker" ).datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });
     $( "#datepicker").datepicker("show");
  })
    
   $('#datepicker').keypress(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  });

    $('#datepicker3').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $("#datepicker3").datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });
     $("#datepicker3").datepicker("show");
  })
    
   $('#datepicker3').keypress(function(){
     $("#datepicker3").datepicker();
     $("#datepicker3").datepicker("show");
  });

$("#file-upload").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo').val(a);
  });

  $("#img_click").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload').click();
  });


  $("#file-upload1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo1').val(a);
  });

  $("#img_click1").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload1').click();
  });

  $("#file-upload_4_1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_4_1').val(a);
  });

  $("#img_click_4_1").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_4_1').click();
  });


$("#file-upload_4_2").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_4_2').val(a);
  });

  $("#img_click_4_2").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_4_2').click();
  });




  $("#file-upload2").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo2').val(a);
  });

  $("#img_click2").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload2').click();
  });



$("#file-upload_d3").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_d3').val(a);
  });

  $("#img_click_d3").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_d3').click();
  });



  $("#file-upload_c1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_c1').val(a);
  });

  $("#img_click_c1").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_c1').click();
  });



  $("#file-upload_c2").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_c2').val(a);
  });

  $("#img_click_c2").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_c2').click();
  });



  $("#file-upload_c3").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo_c3').val(a);
  });

  $("#img_click_c3").on('click',function(){
  	//alert("hgfhgfhg");
      $('#file-upload_c3').click();
  });
})

$('#email').on('blur',function(){
	var email=$('#email').val();

	   $('.loader').show();
	      $.ajax({ 
	        url: '<?php echo HTTP_ROOT;?>/Homes/checkEmail/'+email,
	        type: 'post',
	         success: function(output) {
	         	//alert(output)
	         	$('.loader').hide();
	         	if(output==1){
	         $('#f3').html('Email Address Already Exists!');
        	
        	//$('#error_email').show();
        	$('#email').focus();
        	

        	return false;	
	         	}
	         	else{
                   // $('#f3').hide();
                   $('#f3').html('');
	         		return true;
	         	}
	         }
});
	   
	  });

$('#datepicker').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $( "#datepicker" ).datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });

     $( "#datepicker").datepicker("show");
  })
   $('#datepicker').keypress(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  });

   $('#datepicker2').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $( "#datepicker2" ).datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });

     	$("#datepicker2").datepicker("show");


  })
   $('#datepicker2').keypress(function(){
     $( "#datepicker2" ).datepicker();
     $( "#datepicker2" ).datepicker("show");
  });


</script>
<script>
function validateForm() {
	//alert('gfhgfhgfh');
    var cc_id                       = document.forms["frm"]["community_id"].value;
    var d_o_b                       = document.forms["frm"]["d_o_b2"].value;
	var gender                      = document.forms["frm"]["gender"].value;
    var upload_photo_4_2            = document.forms["frm"]["upload_photo_4_2"].value;
    var p_verification1             = document.forms["frm"]["identity_of_primary_verification1"].value;
    var coaching_experience         = document.forms["frm"]["coaching_experience"].value;
    var document_id                 = document.forms["frm"]["document_id"].value;
    var upload_photo                = document.forms["frm"]["upload_photo"].value;
    var secoundry_verification1     = document.forms["frm"]["identity_of_secoundry_verification1"].value;
    var upload_photo_c1             = document.forms["frm"]["upload_photo_c1"].value;
	var u_type_id    =$("input[name='user_type_id']:checked").val();


 	if(u_type_id==1)
 	{


 		if(document.getElementById("checkbox").checked == false){

		    $('#error5').html('Please check the following checkbox.');
		    $('#error5').css('color','red');
		    $('#error1').html('&nbsp;');
		    $('#error5').show();  
			     
		    return false;	
	    }	
 	
	}else{
    		
 		if(document.getElementById("checkbox1").checked == false){

		    $('#error6').html('Please check the following checkbox.');
		    $('#error6').css('color','red');
		    $('#error1').html('&nbsp;');
		    $('#error6').show();  
			     
		    return false;	
	    }
     
	}
}
$('#mobile').on('blur',function(){
	var mobile=$('#mobile').val();
	   $('.loader').show();
	      $.ajax({ 
	        url: '<?php echo HTTP_ROOT;?>/Homes/checkMobile/'+btoa(mobile),
	        type: 'post',
	         success: function(output) {
	         	$('.loader').hide();
                 
	         	if(output==1){
	         		
	         $('#f5').html('Mobile Number Already Exists!');
        	$('#f5').css('color','red');
        	$('#f5').show();

        	$('#f5').focus();
        	

        	return false;	
	         	}
	         	else{
                    $('#f5').hide();
	         		return true;
	         	}
	         }
});
	   
	  });
      	
    
</script>