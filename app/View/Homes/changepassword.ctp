<?php //echo "<pre>"; print_r($trans_data);die; 
    $count = count($trans_data);

?>
<style type="text/css">
  .butt_dollar-br {
    position: relative;
    top: -171px;
    left: 31%;
    background: #30AFA8;
    color: #FFF !important;
    border-radius: 15px;
  }

  .flexible-fixed-fun {
    color: #FFF;
    background-color: #00CDC6;
    font-family: OS_regular;
    padding: 3px 6px;
    z-index: 1050;
    position: absolute;
    border-radius: 25px;
    top: 9px;
    left: 8px;
    width: 69px;
    height: 28px;
    text-align: center;
    font-size: 13px;
}

.image_price12-fun {
    background-color: #00CDC6;
    margin-top: 10px;
    padding: 3px 6px;
    z-index: 1050;
    text-align: center;
    position: absolute;
    float: right;
    margin-left: 174px;
}
.pull-right-fun {
    float: right !important;
}

#error_old_class{

    color: red;
    font-size: 13px;
    font-family: "OS_regular";

}

#new_old_class{

    color: red;
    font-size: 13px;
    font-family: "OS_regular";

}

#confirm_old_class{

    color: red;
    font-size: 13px;
    font-family: "OS_regular";

}

</style>

<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
    <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
          <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
            <div>
              <img src="<?php echo HTTP_ROOT;?>/img/img/changepassword.png" class="user432 img_br786">
              <span class="dashbrd12 prf543">Change Password</span>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 bar321 bar876">
            <div class="pull-right setnote">
              <i class="fa fa-cog dshclr1"></i>
              <span class="dashbrd1 grg">Settings</span>
              <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
              <span class="dashbrd1 grg">Notification</span>
<?php   
                       $profile_img=$user_view['UserMaster']['profile_image'];
                      
                       $user_type_id=$user_view['UserMaster']['user_type_id'];
                      $user_pic1 = substr($profile_img,0,4);
                         if($user_pic1 == 'http'){ ?>
                           
                       
                          <img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 

<?php } 
   else if($profile_img!='' and $user_type_id==1) {  ?>
<img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 

<?php }elseif($profile_img!='' and $user_type_id==2){  ?>

<img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
<?php }elseif($profile_img!='' and $user_type_id==''){ ?>

<img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
<?php
}


?>
              <span class="dropdown1">
                <span class="dashbrd1 grg1"><?php echo $user_view['UserMaster']['first_name'];?></span>
                <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
               <div class="dropdown-content1 logout">
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile" class="logout_a">Profile</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/changepassword" class="logout_a">Change Password</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout" class="logout_a">Logout</a></p>
                </div>
              </span><br>
             <!--<span class="vendor">Vendor</span>-->
            </div>
          </div>
        </div> 
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r flex_page_tb">  
            <div class="container ">    
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 b_1_field">
                    <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 br_crte">
                        <div class="row">
                            <center>
                                <h2>Change Password</h2>
                                <img src="<?php echo HTTP_ROOT;?>/img/underline.png" class="bdrline img-responsive">
                            </center>
                        </div>
                    </div>  
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">

                        <div style="color:green; font-size:16px;display:none;" id="flashMessage">
                            <div class="message">
                                <div class="alert alert-success" id="success_msg">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                          <input class="form-control reg_input" id="usr" name="old_password" placeholder="Old Password" 
                          type="password" onblur="myFunction(this.value)">
                          <span id="error_old_class">&nbsp;</span>
                        </div>
                        
                        <div class="form-group ">
                            <input class="form-control reg_input" id="usr1" name="new_password" placeholder="New Password" 
                            type="password">
                            <span id="new_old_class">&nbsp;</span>
                        </div>
                        
                        <div class="form-group ">
                          <input class="form-control reg_input" id="usr2" name="cnfrm_password" placeholder="Confirm Password" 
                          type="password">
                          <span id="confirm_old_class">&nbsp;</span>
                        </div>
                        <div class="form-group">        
                            <div class=" col-sm-12 b_butt_pad b_1_pdnxt padd_l_r">
                                <div class="pull-left">
                                   <button type="submit" onclick="changepass()" class="btn br_cnch">Change Password</button>
                                </div>
                                <div class="pull-right" style="cursor:pointer;">
                                    <button type="reset" class="btn br_cncl2 br_cncl22" onclick="reset_form()" >Reset</button>
                                </div>
                              </div>
                        </div>
                        
                    </div>
               
                </div>
            </div>  
        </div>    
    </div>
</div>

<script>
$(document).ready(function(){
var page_sct_name='<?php echo $page_section_name;?>';
if(page_sct_name == "learner"){

            setTimeout(function(){ 
              $("#vndr").hide();
              $("#buyer").show();  
              $('#work2').show();
              $('#work1').hide();
              $('#vndr1').css('background','#fff');
              $('#vndr1 > p').css('color','#00cdc6');
              $('#vndr1 > p').css('font-family','OS_regular');
              $('#vndr1 > p').css('text-decoration','none');
              $('#buyer1').css('background','#00cdc6');
              $('#buyer1 > p').css('text-decoration','underline');
              $('#buyer1 > p').css('color','#fff');

            }, 1);
       
        }

});
function myFunction(id){

   var user_old_pass = id;
   var userid        = "<?php echo $user_id; ?>"; 

    if(user_old_pass == ""){

      $('#error_old_class').html('Please enter old password');             
      $("#error_old_class").focus();
        
        return false;
     
       }else{
          
          $('#error_old_class').html('&nbsp;');             
          
     } 

    $.ajax({  

              type: "POST",  
              url: "<?php echo HTTP_ROOT; ?>/Homes/checkoldpassword",  
             
              data: 'user_old_pass='+user_old_pass+'&userid='+userid,  
           
              success: function(loginmsg){  
                
                if(loginmsg == 0){

                   $('#error_old_class').html("Your entered old password is incorrect"); 
                   $('#usr').val("");
                   $('#usr').focus();
                    
                   return false; 

                }else{

                   $('#usr1').focus(); 

                }
             }
    }); 

}

function changepass(){

    var old_pass      = $('#usr').val();
    var new_pass      = $('#usr1').val();
    var con_pass      = $('#usr2').val();
    var userid        = "<?php echo $user_id; ?>"; 
   
    if(old_pass == ""){

      $('#error_old_class').html('Please enter old password');             
      $("#usr").focus();
        
        return false;
     
       }else{
          
          $('#error_old_class').html('&nbsp;');             
          
     } 

     if(new_pass == ""){

      $('#new_old_class').html('Please enter new password');             
      $("#usr1").focus();
        
        return false;
     
      }else{
          
          $('#new_old_class').html('&nbsp;');             
          
      }

      if(con_pass == "" ){

      $('#confirm_old_class').html('Please enter confirm password');             
      $("#usr2").focus();
        
        return false;
     
       }else if(new_pass != con_pass){

          $('#confirm_old_class').html('Passwords do not match.'); 
          $("#usr2").focus();
           
            return false;
        
        }else{
          
          $('#confirm_old_class').html('&nbsp;');           

        }

        if(old_pass == new_pass){

           $('#new_old_class').html('Enter password does not match with last password');
           $("#usr1").val('');
           $("#usr1").focus();
           $("#usr2").val('');
           return false;

        }else{

          $('#new_old_class').html('&nbsp;');

        }
            
       $.ajax({  

              type: "POST",  
              url:  "<?php echo HTTP_ROOT; ?>/Homes/changepassword12",  
             
              data: 'old_pass='+old_pass+'&new_pass='+new_pass+'&con_pass='+con_pass+'&userid='+userid,  
           
              success: function(res){  
                
                if(res == 1){
                    
                    $('#flashMessage').show();
                    $('#success_msg').text("Your password has been changed successfully!");
                    $('#flashMessage').delay(2000).fadeOut();
                    $("#usr").val('');
                    $('#usr').focus();
                    $("#usr1").val('');
                    $("#usr2").val(''); 

                }
             }
    }); 
}

function reset_form(){

    var old_pass      = $('#usr').val();
    var new_pass      = $('#usr1').val();
    var con_pass      = $('#usr2').val();

    if((new_pass != "") || (con_pass != "")){

      $('#usr').val("");
      $('#usr2').val("");
      $('#usr1').val("");
      $("#error_old_class").focus(); 

      return false;         
          
    }else{

       $("#error_old_class").focus(); 

       return false;          
    }

}

</script>
