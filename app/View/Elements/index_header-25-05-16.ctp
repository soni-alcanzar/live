<div class="container-fluid padd_l_r ">  
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
                      <span >

                        <?php  
                         
                        $user =$this->Session->read('User'); 

                        if(empty(!$user))
                        {
                          ?>
                          <?php echo $this->Html->link('Dashboard', array('controller' => 'Homes','action' => 'dashboard'), array('escape' => false,'id'=>'','class'=>'b_signup','style'=>'padding:10px 12px;')); ?>
                        
                        <?php
                          }
                          else
                          {

                        ?>
                        <!-- <a class="b_signup" href="login" style="padding:10px 12px;">Login/Sign Up</a> -->
                        <?php echo $this->Html->link('Login/Sign Up', array('controller' => 'Homes','action' => 'login'), array('escape' => false,'id'=>'','class'=>'b_signup','style'=>'padding:10px 12px;')); ?>
                        <?php
                      }
                      ?>
                      </span>
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
        <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-xs-12 col-sm-12 padd_l_r">
              <!-- <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 br_pad brn_pad"> -->
                 <!--  <div class="col-sm-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 col-xs-12 brn_pad"> -->
                      <div class="col-md-3 col-sm-3 col-xs-12 b_logo brn_pad b_widh">
                          <a href="<?php echo HTTP_ROOT;?>/Homes/"><img src="<?php echo HTTP_ROOT;?>/img/logo.jpg" style="width:210px" class="blwdh"></a>
                      </div>
                      <!-- ******************new alignment***************** -->
                      <div class="col-md-6 col-sm-5 col-xs-12 padd_l_r b_fcb1 b_pad1">
                        <center class="bl_cntr">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <img src="<?php echo HTTP_ROOT;?>/img/img/all.jpg" id="m_search" class="all_img">
                                <input type="text" placeholder="Search for classes & activities..." name="s" id="search" class="b_1_input1">
                                <button type="submit" class="srchbutt">
                                  <i class="fa fa-search srci"></i>
                                </button>
                                <!-- hide category -->
                                
                                <!-- hide category -->
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-12 bl_inpt">
                              <div>
                                <div id="b11"><a href="<?php echo HTTP_ROOT;?>/Homes/fun" class="fun123">Fun & Recreation</a></div>
                                <div id="b12"><a href="<?php echo HTTP_ROOT;?>/homes/informative" class="fun123">Informative & Motivational</a></div>
                                <div id="b13"><a href="<?php echo HTTP_ROOT;?>/homes/health" class="fun123">Health & Fitness</a></div>
                                <div id="b14"><a href="<?php echo HTTP_ROOT;?>/homes/kids" class="fun123">Kids & Teens</a></div>
                                <div id="b15"><a href="<?php echo HTTP_ROOT;?>/homes/education" class="fun123">Education & Skill Development</a></div>
                                <div id="b16"><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance" class="fun123">Home Maintenance</a></div>
                              </div>
                            </div>    
                        </center>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-12 padd_l_r b_fcb2 b_pad12">
                          <div class="pull-right b_lft">
                            <button class="btn btclass1 fbttp" style="padding:5px 20px;"><img src="<?php echo HTTP_ROOT;?>/img/iconfind.png" />Find</button>
                            <button class="btn btclassnt1  fbttp" style="padding:5px 10px;"><img src="<?php echo HTTP_ROOT;?>/img/iconconnect1.png" />Connect</button>
                          </div>
                      </div>
                      <!-- ******************new alignment***************** -->
                  </div>
        </div>
  </div>
</div>  
<section id="menu-area">            
    <nav class="navbar navbar-default" role="navigation padd_l_r"> 
        <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r">
        <a href="#" class="menu-icon"><span class="fa fa-bars logspan"></span></a>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav col-xs-12 col-sm-12 padd_l_r">
          <li class="dropdown active first">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun" class="# pad_right_5">Fun & Recreation<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun#baking" id="cooking">Cooking & Baking</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun#arts">Arts & Crafts</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun#dance">Music & Dance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun#sport">Sports</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun#photo">Photography</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun">Adventure Activities</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun">Media & Literature</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun">Self Defence</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun">India Indigenous</a></li>                
              </ul>
            </li>
            <li class="dropdown active">
              <a href="<?php echo HTTP_ROOT;?>/homes/informative" class="# pad_right_5">Informative & Motivational<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/informative#baking">Personality Development</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative#arts">Communication & Soft Skills</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative#dance">Brain Efficiency Improvement</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative#sport">Language Learning</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative#photo">Motivational Talks</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative">Spiritual Talks</a></li>  
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative">Career Management</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative">Relationship Management</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/informative">India Indigenous</a></li>               
              </ul>
            </li>
            <li class="dropdown active">
              <a href="<?php echo HTTP_ROOT;?>/homes/health" class="# pad_right_5" >Health & Wellness<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health#baking">Yoga & Meditation</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health#arts">Nutritional Cooking / Eating</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health#dance">Weight Loss</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health#sport">Lifestyle Management</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health#photo">Disease Management</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health">Alternative Therapies</a></li>   
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health">Fun & Fitness</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health">Women's Health & Beauty</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/health">India Indigenous</a></li>                
              </ul>
            </li>
            <li class="dropdown active">
              <a href="<?php echo HTTP_ROOT;?>/homes/kids" class="# pad_right_5" >Kids & Teens<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids#baking">Arts & Crafts</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids#arts">Abacus & Vedic Mathematics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids#dance">Music & Dance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids#sport">Personality Development</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids#photo">Brain Efficiency</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">Parenting</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">Special Kids</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">Science & Technology</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">Sports</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">Self Defence</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/kids">India Indigenous</a></li>             
              </ul>
            </li>
            <li class="dropdown active">
              <a href="<?php echo HTTP_ROOT;?>/homes/education" class="# pad_right_5" >Education & Skill Development<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#baking">Academics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#baking">Skill Development</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#baking">Robotics</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#arts">Electronics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#dance">Programming</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education#sport">Design</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/educationp#photo">Experimental Learning</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education">Industrial Training</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/education">India Indigenous</a></li>             
              </ul>
            </li>
            <li class="dropdown active last">
              <a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance" class="# pad_right_5">Home Maintenance<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance#baking">Home Hardware </a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance#arts">Farming & Gardening</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance#dance">Interior Design</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance#sport">Automobile Maintenance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance#photo">Eco Friendly / Energy Savings</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance">Building & Buying</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance">Pets Maintenance</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance">India Indigenous</a></li>              
              </ul>
            </li>
          </ul>     
          <a href="#" class="menu-close"><span class="fa fa-close"></span></a>        </div><!--/.nav-collapse -->
        <!-- search icon -->
      </div>     
    </nav>
</section>