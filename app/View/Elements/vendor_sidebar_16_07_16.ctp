<?php  $user_data=$this->requestAction(array('controller'=>'Homes', 'action'=>'getUser'), 
                              array('pass'=>array($user_view['UserMaster']['id'])));
                              ?>
                             
<div class="col-md-2 col-lg-2 col-sm-3 col-xs-12 vendor-left-bar" id="s_1_lpad">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_lside1" id="">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" id="s_5_user">
                    <?php 
                   $profile_img=$user_data['UserMaster']['profile_image'];
                   $user_type_id=$user_data['UserMaster']['user_type_id'];
                   $gmail_id=$user_data['UserMaster']['gmail_id'];
                   //echo $user_type_id;
                   //die;

                   if($gmail_id==1)
                       {
                        ?>
                         <img src="<?php echo $profile_img; ?>" class="rth654" style="width:90px;height:100px;border-radius:50%;border:2px solid white;"> 
                         <?php
                     }
                   else if($profile_img!='' and $user_type_id==1)
                   {
                    ?>
                     <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="rth654" style="width:90px;height:100px;border-radius:50%;border:2px solid white;"> 
                     <?php
                 }
                 elseif($profile_img!='' and $user_type_id==2)
                 {
                    ?>
                    <img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="rth654" style="width:90px;height:100px;border-radius:50%;border:2px solid white;"> 
                    <?php
                }
                elseif($profile_img!='' and $user_type_id=='')
                     {
                        ?>
                        <img src="<?php echo $profile_img; ?>" class="rth654" style="width:90px;height:100px;border-radius:50%;border:2px solid white;"> 
                        <?php
                    }
                 ?>
                 </div>
                <div class="col-md-8 col-lg-8 col-sm-8 col-xs-6" id="s_5_user">
                  <label class="s_5_welcome" style="padding:25px;"><?php echo $user_data['UserMaster']['first_name'];?></label><br>
                  <span id="s_5_john" style="font-weight:bold;padding:25px;"><?php if($user_data['UserMaster']['user_type_id']=='1'){
                    echo ucwords("Vendor");
                  }
                  else{
                    echo ucwords("Learner");
                  }?></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 bg_vendor" id="<?php if($user_data['UserMaster']['user_type_id']=='1'){
                    echo "vndr1"; } else { echo "buyer1";}?>">
                  <p><?php if($user_data['UserMaster']['user_type_id']=='1'){
                    echo "Vendor"; } else { echo "Learner"; 
                }?></p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 bg_vendor1" id="<?php if($user_data['UserMaster']['user_type_id']=='1'){
                    echo "buyer1"; } else { echo "vndr1"; }?>">
                  <p><?php if($user_data['UserMaster']['user_type_id']=='1'){
                    echo "Learner"; } else { echo "Vendor"; }?></p>
                </div>
                <!-- *****************vendor***************** -->
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 padd_l_r" id="buyer" style="display:none;">
                    <!-- **************courses*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/dashboard1.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/dashboard">Dashboard</a>
                        </div>
                    </div>
                    <!-- **************courses*********** -->
                    <!-- **************skills*********** -->
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php //echo HTTP_ROOT;?>/img/img/home.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Home</a>
                        </div>
                    </div> -->
                    <!-- **************skills*********** -->
                    <!-- **************Companies*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-building-o"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/myprofile.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/myProfile">My Profile</a>
                        </div>
                    </div>
                    <!-- **************Companies*********** -->
                    <!-- **************Roles*********** -->
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="images/img/postagenda1.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Post Agenda</a>
                        </div>
                    </div> -->
                    <!-- **************Roles*********** -->
                    <!-- **************My Profile*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-user"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/postclass1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Class Near You</a>
                        </div>
                    </div>
                    <!-- **************My Profile*********** -->
                    <!-- **************Setting*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/recommendclasses.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Class catalogue for Organization</a>
                        </div>
                    </div>
                    <!-- **************Setting*********** -->
                    <!-- **************Reports*********** -->
                   
                    <!-- **************Reports*********** -->
                    <!-- **************Lessons*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/faq1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="Faq">FAQ</a>
                        </div>
                    </div>
                    <!-- **************Lessons*********** -->
                    <!-- **************Practice*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/term1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Terms and Condition</a>
                        </div>
                    </div>
                    <!-- **************Practice*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/changepassword.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Change Password</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php //echo HTTP_ROOT;?>/img/img/settings.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Settings</a>
                        </div>
                    </div> -->
                    <!-- **************Test*********** -->
                     <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/logout.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/logout">Logout</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/mobileverification.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Mobile Verification</a>
                        </div>
                    </div>
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="mob_img new-veri-imgg">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Booking History</a>
                        </div>
                    </div>
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="mob_img new-veri-imgg new-veri-imggage">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Wishlist</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                </div>  
                <!-- *****************vendor***************** -->
                <!--******************buyer ******************-->
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 padd_l_r" id="vndr">
                    <!-- **************courses*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/dashboard1.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/dashboard">Dashboard</a>
                        </div>
                    </div>
                    <!-- **************courses*********** -->
                    <!-- **************skills*********** -->
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php //echo HTTP_ROOT;?>/img/img/home.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Home</a>
                        </div>
                    </div> -->
                    <!-- **************skills*********** -->
                    <!-- **************Companies*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-building-o"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/myprofile.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/myProfile">My Profile</a>
                        </div>
                    </div>
                    <!-- **************Companies*********** -->
                    <!-- **************Roles*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/postagenda1.png" id="s_5_img_width">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="PostClass">Post Class</a>
                        </div>
                    </div>
                    <!-- **************Roles*********** -->
                    <!-- **************My Profile*********** -->
                    <!--  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="images/img/postclass1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Post Class</a>
                        </div>
                    </div> -->
                    <!-- **************My Profile*********** -->
                    <!-- **************Setting*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/recommendclasses.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/promoteClass">Promote Your Classes</a>
                        </div>
                    </div>
                    <!-- **************Setting*********** -->
                    <!-- **************Reports*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-file-text-o"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/promot1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/addClassCatalog">Add Class to catalogue</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-file-text-o"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/promot1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="#">Blog/Feed</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <!-- <i class="fa fa-file-text-o"></i> -->
                        <img src="<?php echo HTTP_ROOT;?>/img/img/promot1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r" id="s_5_pad_h">
                        <a href="<?php echo HTTP_ROOT;?>/Homes/paymentDetails">Payment Details</a>
                        </div>
                    </div>

                    
                    <!-- **************Reports*********** -->
                    <!-- **************Lessons*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/faq1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="Faq">FAQ</a>
                        </div>
                    </div>
                    <!-- **************Lessons*********** -->
                    <!-- **************Practice*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="s_5_cource">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/term1.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Term and condition</a>
                        </div>
                    </div>
                    <!-- **************Practice*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/changepassword.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Change Password</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php //echo HTTP_ROOT;?>/img/img/settings.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Settings</a>
                        </div>
                    </div> -->
                    <!-- **************Test*********** -->
                     <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/logout.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                       <a href="<?php echo HTTP_ROOT;?>/Homes/logout">Logout</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/img/mobileverification.png" class="mob_img">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">Mobile Verification</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="mob_img new-veri-imgg">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">My Classes</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                    <!-- **************Test*********** -->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 s_5_cource321" id="">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 b_pad">
                        <img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="mob_img new-veri-imgg new-veri-imggage">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9  padd_l_r">
                        <a href="#">My Wishlist</a>
                        </div>
                    </div>
                    <!-- **************Test*********** -->
                </div>
                <!-- *****************buyer******************* -->
            
      </div>
<?php if($user_data['UserMaster']['user_type_id']=='1'){?>
<script>
$(document).ready(function(){
$('#vndr1').css('font-family','os_bold');
$('#vndr1').css('background','#00CDC6');
$('#buyer1').css('background','#fff');
});
</script>
<?php }else{?>
<script>
$(document).ready(function(){
$('#buyer1').css('font-family','os_bold');
$('#buyer1').css('background','#fff');
$('#vndr1').css('background','#00CDC6');


});
</script>
<?php }?>
<script>
$('#buyer1').click(function(){
$('#buyer1').css('font-family','os_bold');

$('#vndr1').css('font-family','os_regular');
$('#buyer1').css('background','#008079');
$('#vndr1').css('background','#00B9AF');

});
$('#vndr1').click(function(){
$('#vndr1').css('font-family','os_bold');
$('#buyer1').css('font-family','os_regular');

$('#vndr1').css('background','#008079');
$('#buyer1').css('background','#00B9AF');

});

</script>
