<?php 


// Merchant key here as provided by Payu
$MERCHANT_KEY = "hF6qmoBJ";

// Merchant Salt as provided by Payu
$SALT = "sBL86X9MpG";

 // Generate random transaction id
 $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

// End point - change to https://secure.payu.in for LIVE mode
//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";

if($user_view['UserMaster']['user_type_id']=='1'){

?>

<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $user_view['UserMaster']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php } else{?>
<style>
.funmp1 {
    width: 100%;
  
    background-image: url("<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $user_view['UserMaster']['background_image'];?>");

    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-bottom:10px;
}
</style>
<?php }?>
<style>
.myprflbrd {
    border: 0px solid #00477B !important;
}
.snr {
    padding-top: 3px;
}
.edit-bg {
    color: rgb(255, 255, 255);
    font-size: 21px;
}
.edit-photo{
  color: #FFF;
  font-family: 'os_bold';
  font-size: 14px;
  cursor: pointer;
}
.image_price12{

   background-color: #54c0c1;
    border-radius: 40%;
    bottom: 239px;
    height: 48px;
    position: relative;
    width: 90px;
    margin-right:8px;
}
.ccc{
     bottom: -10px;
    font-size: 20px;
    padding-left: 32px;
    padding-top: 20px;
    position: relative; 
}
.fa-camera-br {
    color: white;
    font-size: 24px;
    position: relative;
    right: 21px;
    top: 57px;
}

#hideimge{
display:none;
}
.user765 {
    position: relative;
    bottom: 90px;
    left: 155px;
}
.najm1 {
    position: relative;
    bottom: 50px;
    right: -5px;
}
.pimgtop{padding: 5px;
}
.booking{
background-color:#00477B;
color:#fff;
border-radius:30%;
}
.clrdash123 {
    background-color: #2BCDC1;
    padding: 10px 0px;
}


    
</style>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
	<div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
        <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
            <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432 dummy_user"><span class="dashbrd12 prf543">Provider Profile</span></div>
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
                        <p><a href="#" class="logout_a">Profile</a></p>
                        <p><a href="#" class="logout_a">Change Password</a></p>
                        <p><a href="<?php echo HTTP_ROOT;?>/homes/logout" class="logout_a">Logout</a></p>
                    </div>
                </span>
                <br>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 funmp1" style="display:none;"> 
        <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 starruth">
	                <div class="elemnt">
	                   <?php if($user_view['UserMaster']['user_type_id']=='1'){?> 

	                    <span><img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321 prflimg" style="height:132px;border-radius:50%;border:2px solid white;"></span>
	                    
	                    <!-- file upload -->
	                   
	                    <?php }else if($user_view['UserMaster']['user_type_id']=='2'){?>
	                     <span><img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321" style="width:123px;height:132px;border-radius:50%;border:2px solid white;"></span>
	                     
	                    <!-- file upload -->
	                    
	                    <?php }else if($user_view['UserMaster']['user_type_id']==''){?>
	                     <span><img src="<?php echo $user_view['UserMaster']['profile_image'];?>" class="rth321 prflimg" style="width:123px; height:132px;border-radius:50%;border:2px solid white;"></span>
	                     <!-- file upload -->
	                    
	                    <?php }else{?>
	                    <span><img src="<?php echo HTTP_ROOT;?>/img/profile_img/ruth_img.png" class="rth321 prflimg" style="width:123px; height:132px;border-radius:50%;border:2px solid white;"></span>
	                    <!-- file upload -->
	                    

	                    <?php }?>

	                    <span class="fa-camera-br" onclick="ClickUpload()">
	                      
	                        <i class="fa fa-camera " aria-hidden="true" type="button" value="Upload" class="camera" ></i>
	                        <span class="edit-photo">Edit</span>
	                    </span>
	                    
	                    <form action="#" method="post" name="pro_pic" id="pro_pic" enctype="multipart/form-data">
	                      <div id="hideimge">
	                      <input type="file" name="FileUpload" id="FileUpload" class="uploadbox"/>
	                      <input type="hidden" class="customer" value="<?php echo $user_view['UserMaster']['id'];?>">
	                      </div>
	                    </form>

	                    <span class="rth321 user765 elemnt">
	                      <div class="grg321 elemnt"><?php echo $user_view['UserMaster']['first_name']; ?></div>
	                      <div class="tnk321 elemnt"><?php echo $user_view['UserMaster']['email']?></div>
	                    </span>
	                  </div>
	                  <div class="najm1 elemnt">
	                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
	                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
	                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
	                    <span><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star.png" class="star321"></span>
	                    <span ><img src="<?php echo HTTP_ROOT;?>/img/profile_img/star2.png" class="star321"></span>
	                </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 mntop">
                    <div class="pull-right">
                        <img src="<?php echo HTTP_ROOT;?>/img/profile_img/notification.png" class="note321">
                        <img src="<?php echo HTTP_ROOT;?>/img/profile_img/message.png" class="msg543">
                    </div>
                </div>
            </div>  
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="pull-right">
            <span onclick="ClickUpload1()">
              <i class="fa fa-camera edit-bg" aria-hidden="true"></i>
              <span class="edit-photo">Edit</span>
            </span>  
          </div>
        </div>
        <form action="#" method="post" name="pro_pic1" id="pro_pic1" enctype="multipart/form-data">
            <div id="hideimge">
            <input type="file" name="FileUpload" id="FileUpload1" class="uploadbox1"/>
            </div>
        </form>
    </div>  
<div class="col-md-12 col-sm-12 col-xs-12 padd_l_r sr_03_08_padding_git_s">
   
    <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 sr_03_08_padding_git_s">
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
        <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

            <div class="col-xs-12 col-sm-12" style="z-index: 100; top: 10px;">
                <center>
                    <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_yes.png" class="img-responsive" alt="img" style="width: 50px;">
                </center>                 
            </div>
            <div class="col-xs-12 col-sm-12 sr_03_08_padding_git_s" style="border: 1px solid rgb(150, 148, 149); box-shadow: 7px 12px 22px rgb(172, 170, 171);"> 
                <div class="col-xs-12 col-sm-12" style="background: #2BCDC0; padding: 15px 0px 10px;">
                   <span class="success_sr_03_08"><center>Promote class order success</center></span>               
                </div> 

                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-12">
                       <span class="clr_thanx"><center>Thank You. Your order status is .</center></span>
                    </div> 
                    <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">Transaction id:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08">
                            <?php echo $txnid; ?>
                        </span>
                    </div>
                </div>
               <div class="col-xs-12 col-sm-12 " style="">
                    <div class="col-xs-12 col-sm-5 col-md-5 sr_03_08_d_div01">
                        <span class="booking_id_sr_03_08">rs:</span>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-7 sr_03_08_d_div02">
                        <span class="booking_text_sr_03_08">
                              <?php echo $amount;?>
                        </span>
                    </div> 
                </div>
                
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
               <!--  <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> -->
                <div class="col-xs-12 col-sm-12 " style="">
                    <div class=" row__03_08_sr" style="margin: 0px auto;"></div>
                    <div class="col-xs-12 col-sm-12" style="margin-top: -15px;">
                        <center>
                            <span class="share_id_sr_03_08">Share it</span>
                        </center>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> -->
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <center>
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_fb.png" class="common_img_css" alt="img">
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_tw.png" class="common_img_css" alt="img">
                        <img src="<?php echo HTTP_ROOT;?>/img/gift_image/g_ph.png" class="common_img_css" alt="img">
                    </center>    
                </div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 " style="">
                    <center><a href="<?php echo HTTP_ROOT;?>" class="sr_12_08_go_to_home">go to home</a></center>
                </div>
                <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div><div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    
            </div>
            <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div> 
                   
        </div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 " style="">&nbsp;</div>
    </div>
    
</div>
 

</div>    
