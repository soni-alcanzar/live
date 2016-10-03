 <?php 
                    
                $profile_img=$user_view['UserMaster']['profile_image'];
                $user_type_id=$user_view['UserMaster']['user_type_id'];
                $user_pic1 = substr($profile_img,0,4);
   
                 if($user_pic1 == 'http'){ ?>
                 
                      <img src="<?php echo $profile_img; ?>" class="georgeimg"> 
                       
                  <?php }else if($profile_img!='' and $user_type_id==1) {  ?>

                      <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg"> 

                  <?php }elseif($profile_img!='' and $user_type_id==2){  ?>
                      
                      <img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg"> 

                  <?php }elseif($profile_img!='' and $user_type_id==''){ ?>

                     
                      <img src="<?php echo $profile_img; ?>" class="georgeimg"> 
                                  
<?php } ?>
              <span class="dropdown1 sp-chennai">
                <span class="dashbrd1 grg1"><?php echo $user_view_comman['UserMaster']['first_name'];?></span>
                <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                <div class="dropdown-content1 logout">
                  <p><a href="<?php echo HTTP_ROOT; ?>/Homes/dashboard" class="logout_a">My Profile</a></p>
                  <p><a href="<?php echo HTTP_ROOT; ?>/Homes/changepassword" class="logout_a">Change Password</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout" class="logout_a">Logout</a></p>
                </div>
              </span>