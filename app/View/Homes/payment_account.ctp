<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;padding-bottom:30px;">
       
         <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
            <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
              <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432 dummy_user"><span class="dashbrd12 prf543">Payment Account Details</span></div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 bar321 bar876 snr">
                <div class="pull-right setnote">
                    <i class="fa fa-cog dshclr1"></i>
                    <span class="dashbrd1 grg">Settings</span>
                    <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
                    <span class="dashbrd1 grg">Notification</span>
                     <?php 
                           $profile_img=$user_view['UserMaster']['profile_image'];
                          
                           $user_type_id=$user_view['UserMaster']['user_type_id'];
                           //echo $user_type_id;
                           //die;
                           if($profile_img!='' and $user_type_id==1)
                           {
                            ?>
                             <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                             <?php
                         }
                         elseif($profile_img!='' and $user_type_id==2)
                         {
                            ?>
                            <img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                            <?php
                        }
                        elseif($profile_img!='' and $user_type_id=='')
                         {
                            ?>
                            <img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
                            <?php
                        }
                     ?>
                    <span class="dropdown1">
                        <span class="dashbrd1 grg1"><?php echo $user_view['UserMaster']['first_name'];?></span>
                        <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                        <div class="dropdown-content1 logout">
                            <p><a href="<?php echo HTTP_ROOT."/Homes/myProfile";?>" class="logout_a">Profile</a></p>
                            <p><a href="#" class="logout_a">Change Password</a></p>
                            <p><a href="<?php echo HTTP_ROOT;?>/homes/logout" class="logout_a">Logout</a></p>
                        </div>
                    </span>
                    <br>
                </div>
            </div>
        </div>  

        <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr_f"> 

            <?php echo $this->Session->flash();?>
            <!-- class code -->
            <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 2px solid #043D7B">
                <div class="col-xs-12 col-sm-12" style="margin-top: 10px; margin-bottom: 10px;">
                    <span class="faq_home01">Vendors/Organisation</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 tab_head padd_l_r">
              <a href="<?php echo HTTP_ROOT;?>/Homes/paymentAccount"> 
                <div class="col-md-4 col-sm-3 col-xs-4 seg seg786 profile-segg" id="">Account Details</div>
              </a>
              <a href="<?php echo HTTP_ROOT;?>/Homes/payTrackFiexible">
                <div class="col-md-4 col-sm-3 col-xs-4 seg" id="">Payment Tracking Flexible Classes</div>
              </a>
              <a href="<?php echo HTTP_ROOT;?>/Homes/payTrackFixed">
                <div class="col-md-4 col-sm-3 col-xs-4 seg" id="">Payment Tracking Fixed Classes </div>
              </a>
            </div> 
            <!-- form code -->
            <div class="col-md-12 col-sm-12 col-xs-12 faq_width02 sr_pv_padding_lr01" style="margin-top: 30px; margin-bottom: 30px;">
                <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr01" style="border: 1px solid rgb(194, 192, 193); background: rgb(247, 245, 246) none repeat scroll 0% 0%;" >
                    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr01" style="margin-top: 50px; margin-bottom: -53px; ">
                        <!-- Start Form  -->
                      <?php 
                      /*echo "<pre>";
                      print_r($account_detail);
                      echo "</pre>";*/
                      @$a_id            = $account_detail['AccountDetail']['id'];
                      @$a_uid           = $account_detail['AccountDetail']['vender_id'];
                      @$a_name          = $account_detail['AccountDetail']['holder_name'];
                      @$a_number        = $account_detail['AccountDetail']['account_number'];
                      @$a_bank_name     = $account_detail['AccountDetail']['bank_name'];
                      @$a_ifsc_code     = $account_detail['AccountDetail']['ifsc_code'];
                      @$adderss_perment = $account_detail['AccountDetail']['permanent_address'];
                      
                      @$a_status    = $account_detail['AccountDetail']['status'];
                      ?>
                            <form>
                            <!-- 1st -->
                            <div class="col-sm-12 col-xs-12 sr_pv_padding_lr_form">
                                <div class="col-sm-12 col-xs-12">
                                    <span class="faq_t_q01" style="color:#1B191A;">Holders Name</span>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-md-6"> 
                                    <div class="col-sm-12 col-xs-12" style="margin-top: 5px;">
                                        <div class="form-group br_state" style="margin-bottom: 0px;">
                                          <input  name="id" type="hidden" id="id" value="<?php echo @$a_id; ?>">
                                          <input class="form-control reg_input" name="holder_name" placeholder="Account Holder Name" type="text" id="holder_name" value="<?php echo @$a_name; ?>"> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <span class="faq_t_q01" style="color:#1B191A;">Bank Account Number</span>
                                </div>
                                      <div class="col-sm-12 col-xs-12 col-md-6"> 
                                        <div class="col-sm-12 col-xs-12" style="margin-top: 5px;">
                                            <div class="form-group br_state" style="margin-bottom: 0px;">
                                                <input class="form-control reg_input" name="bank_account_number" placeholder="Account Number" type="text" id="bank_account_number" value="<?php echo @$a_number; ?>"> 
                                            </div> 
                                        </div>
                                    </div>  
                                    <div class="col-sm-12 col-xs-12">
                                    <span class="faq_t_q01" style="color:#1B191A;">Bank Name</span>
                                </div>
                                      <div class="col-sm-12 col-xs-12 col-md-6"> 
                                        <div class="col-sm-12 col-xs-12" style="margin-top: 5px;">
                                            <div class="form-group br_state" style="margin-bottom: 0px;">
                                                <input class="form-control reg_input" name="bank_name" placeholder="Name Of Bank" type="text" id="bank_name" value="<?php echo @$a_bank_name; ?>"> 
                                            </div> 
                                        </div>
                                    </div>  
                                <div class="col-sm-12 col-xs-12">
                                    <span class="faq_t_q01" style="color:#1B191A;">Permanent Address</span>
                                </div>
                                      <div class="col-sm-12 col-xs-12 col-md-6"> 
                                        <div class="col-sm-12 col-xs-12" style="margin-top: 5px;">
                                            <div class="form-group br_state" style="margin-bottom: 0px;">
                                                <input class="form-control reg_input" name="permanent_address" placeholder="Address Details" type="text" id="permanent_address" value="<?php echo @$adderss_perment; ?>"> 
                                            </div> 
                                        </div>
                                    </div>  

                                <div class="col-sm-12 col-xs-12">
                                    <span class="faq_t_q01" style="color:#1B191A;">IFSC Code</span>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-md-6"> 
                                    <div class="col-sm-12 col-xs-12" style="margin-top: 5px;">
                                        <div class="form-group br_state" style="margin-bottom: 0px;">
                                            <input class="form-control reg_input" name="ifsc_code" placeholder="Bank IFSC Code" type="text" id="ifsc_code" value="<?php echo @$a_ifsc_code; ?>"> 
                                        </div> 
                                    </div>
                                </div>  
                                    <div class="col-sm-12 col-xs-12 sr_pv_padding_lr" style="margin-top: 30px; margin-bottom: 50px;">
                                     <div class="col-sm-12 col-xs-12">
                                      <?php if(empty($account_detail)){
                                        ?>
                                    <input type="button" class="btn btn-primary pc_sub_class" name="sub_class" id="submit" value="Submit">
                                    <?php
                                  }else{
                                    ?>
                                        <input type="button" class="btn btn-primary pc_sub_class" name="sub_class" id="submit" value="Update">
                                    <?php
                                  }
                                  ?>
                                </div>
                            </div>
                        </form>
                         </div> 
                                        <!-- 4 -->                                          
                                    </div>
                                </div>
                            </div>

                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" >
$(function() {
$("#submit").click(function() {
    var id    = $("#id").val();
    var holder_name    = $("#holder_name").val();
    var bank_account_number       = $("#bank_account_number").val();
    var bank_name    = $("#bank_name").val();
    var permanent_address       = $("#permanent_address").val();
    var ifsc_code    = $("#ifsc_code").val();


    $.ajax({  
    type: "POST",  
    url: "<?php echo HTTP_ROOT; ?>/Homes/saveAccount",  
    data: 'id='+ id+'&holder_name='+ holder_name +'&account_number='+bank_account_number+'&bank_name='+bank_name+'&permanent_address='+permanent_address+'&ifsc_code='+ifsc_code,  
       success: function(loginmsg){  
        
      if(loginmsg==1){
        alert('successfully saved');
            

      }else{
        

      }
    } 
   
  }); 
});
});
</script> 