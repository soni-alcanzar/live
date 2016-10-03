<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
        <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
          <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
            <div>
              <img src="<?php echo HTTP_ROOT;?>/img/dashboard1.png" class="user432 img_br786">
              <span class="dashbrd12 prf543">Dashboard</span>
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
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout" class="logout_a">Logout</a></p>
                </div>
              </span><br>
             <!--<span class="vendor">Vendor</span>-->
            </div>
          </div>
        </div> 
        <!-- ************work************** -->
        <?php $user_type_id = $_SESSION['User']['UserMaster']['user_type_id']; ?>

        <div class="col-md-12 col-sm-12 col-xs-12 ruth11 brdprfl" id="work1" style="<?php if($user_type_id==1){
         echo 'display:none'; } else { echo '' ; } ?>">
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center class="my_prfl">
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon1.png" class="prfl123"></div>
                  <div><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile" class="mybg">My Profile</a></div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center class="pst">
                  <div><img src="<?php echo HTTP_ROOT;?>/img/classnearyou.png" class="prfl123"></div>
                  <div class="mybg">Class Near You</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/cataloguefororgnizar.png" class="prfl123"></div>
                  <div class="mybg">Class Catalogue for Organization</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon4.png" class="prfl123"></div>
                  <div class="mybg">Recommended Class</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="prfl123"></div>
                  <div class="mybg">FAQ</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="prfl123"></div>
                  <div class="mybg">Terms<br> Condition</div>
                </center>  
              </div>  
            </div>
        </div>
        <!-- ************work************** -->
        <!-- ************work1************** -->
        <div class="col-md-12 col-sm-12 col-xs-12 ruth11" id="work" style="<?php if($user_type_id==2){
         echo 'display:none'; } else { echo '' ; } ?>">
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon1.png" class="prfl123"></div>
                  <div><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile" class="mybg">My Profile</a></div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon2.png" class="prfl123"></div>
                  <div class="mybg">Post Class</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon3.png" class="prfl123"></div>
                  <div class="mybg">Promote<br> Your Class</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon4.png" class="prfl123"></div>
                  <div class="mybg">Add Class<br>To Catalogue</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="prfl123"></div>
                  <div class="mybg">FAQ</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="prfl123"></div>
                  <div class="mybg">Terms<br> Condition</div>
                </center>  
              </div>  
            </div>
        </div>
        <!-- ************work1************** -->
      </div>
    </div>
  </div>  
  <script>
  $(document).ready(function(){
    $('#vndr1').css('background','#008079');
  })
  </script>
