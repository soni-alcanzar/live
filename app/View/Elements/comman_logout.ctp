<div class="col-md-12 col-xs-12 b_header padd_l_r b12_field">
      <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12  b12_field padd_l_r ">
        <!-- <div class="col-md-12 col-sm-12 col-xs-12 b_header padd_l_r"> -->
          <!-- <div class=" bdrcol-sm-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2  col-xs-12 b_row padd_l_r"> -->
            <div class="col-xs-12 col-sm-12">
              <!-- ***************left button*************** -->
              <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 pull-left padd_l_r ">
                  <a href="<?php echo HTTP_ROOT;?>/Homes/sellExpress">
                    <button class="btn buttclass" >Class Providers</button>
                  </a>
                  <a href="<?php echo HTTP_ROOT;?>/Homes/arrangeClass">
                    <button class="btn butidea">Catalogue for Organizers</button>
                  </a>
                  <a href="<?php echo HTTP_ROOT;?>/Homes/gift">
                    <button class="btn butgift" >
                      <i class="fa fa-gift gifticon" aria-hidden="true"></i>
                      Gift A Class
                    </button>
                  </a>  
              </div>
              <!-- ***************left button*************** -->
              <!-- ***************right button*************** -->
              <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4  padd_l_r">
                  <div class="pull-right br_login" id="br_login" >
                      <i class="fa fa-sign-in b_login" aria-hidden="true"></i>
                      
                        <?php  
                         
                        $user =$this->Session->read('User'); 

                        if(!empty($user))
                        {
                          ?>
                          <?php 
                       $user_view_comman =$this->Session->read('User');
					   $profile_img=$user_view_comman['UserMaster']['profile_image'];
                       $user_type_id=$user_view_comman['UserMaster']['user_type_id'];
                       //echo $user_type_id;
                       //die;
                       if($profile_img!='' and $user_type_id==1)
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
              <span class="dropdown1 sp-chennai">
               <span class="dashbrd1 grg1"><?php echo $user_view_comman['UserMaster']['first_name'];?></span>
                <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                <div class="dropdown-content1 logout">
                  <p><a href="<?php echo HTTP_ROOT; ?>/Homes/dashboard" class="logout_a">My Profile</a></p>
                  <p><a href="#" class="logout_a">Change Password</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout1" class="logout_a">Logout</a></p>
                </div>
              </span>
			  <?php
                          }
                          else
                          {

                        ?>
						<span>
                        <!-- <a class="b_signup" href="login" style="padding:10px 12px;">Login/Sign Up</a> -->
                        <?php echo $this->Html->link('Login/Sign Up', array('controller' => 'Homes','action' => 'login'), array('escape' => false,'id'=>'','class'=>'b_signup','style'=>'padding:10px 12px;')); ?>
                        </span>
						<?php
                      }
                      ?>
                      
                      <button class="btn b_chennai" style="padding:10px 12px;">
                         <span>Chennai</span>
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </button>
                  </div>
              </div>
              <!-- ***************right button*************** -->
            </div>
          <!-- </div> -->
        <!-- </div> -->
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 padd_l_r">
			  
			  