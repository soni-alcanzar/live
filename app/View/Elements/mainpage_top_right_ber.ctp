 <div class="col-md-9 col-sm-9 col-xs-9 bar321 bar876">
            <div class="pull-right setnote">
              <i class="fa fa-cog dshclr1"></i>
              <span class="dashbrd1 grg">Settings</span>
              <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
              <span class="dashbrd1 grg">Notification</span>
              <?php 
                       $profile_img=$user_view['UserMaster']['profile_image'];
                       $user_type_id=$user_view['UserMaster']['user_type_id'];
                       $gmail_id=$user_view['UserMaster']['gmail_id'];
                       //echo $user_type_id;
                       //die;
                       if($profile_img!='' and $gmail_id==1)
                       {
                        ?>
                          <img src="<?php echo $profile_img; ?>" class="georgeimg"> 
                          <?php
                       }
                       elseif($profile_img!='' and $user_type_id==1)
                       {
                        ?>
                         <img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg"> 
                         <?php
                     }
                     elseif($profile_img!='' and $user_type_id==2)
                     {
                        ?>
                        <img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg"> 
                        <?php
                    }
                 ?>
              <span class="dropdown1">
                <span class="dashbrd1 grg1"><?php echo $user_view['UserMaster']['first_name'];?></span>
                <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                <div class="dropdown-content1 logout">
                  <p><a href="#" class="logout_a">Profile</a></p>
                  <p><a href="#" class="logout_a">Change Password</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout" class="logout_a">Logout</a></p>
                </div>
              </span><br>
             <!--  <span class="vendor">Vendor</span> -->
            </div>
          </div>