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
                      
                        <?php  
                         
                        $user =$this->Session->read('User'); 

                        if(!empty($user))
                        {
                          ?>
                          <?php 
						  echo $this->Element('home_comman_logout');
						  //echo $this->Html->link('Dashboard', array('controller' => 'Homes','action' => 'dashboard'), array('escape' => false,'id'=>'','class'=>'b_signup','style'=>'padding:10px 12px;')); 
						  ?>
                        
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
        <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-xs-12 col-sm-12 padd_l_r">
              <!-- <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 br_pad brn_pad"> -->
                 <!--  <div class="col-sm-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 col-xs-12 brn_pad"> -->
                      <div class="col-md-3 col-sm-3 col-xs-12 b_logo brn_pad b_widh">
                         <?php /*?> <img src="<?php echo HTTP_ROOT;?>/img/logo.jpg"  width="267" height="76" class="blwdh"><?php */?>
                          
                               <?php
						echo $this->Image->resize('img/logo.jpg','190','76', array('class' => 'blwdh'));
						?>
                      </div>
                      <!-- ******************new alignment***************** -->
                      <div class="col-md-6 col-sm-5 col-xs-12 padd_l_r b_fcb1 b_pad1">
                        <center class="bl_cntr">
              <form action="vendor_Classes/lists" name="s_cat" method="post">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input type="hidden" id="search_cat_id" name="search_cat_id" value=""/>
                  <?php /*?>  <img src="<?php echo HTTP_ROOT;?>/img/img/all.jpg" id="m_search" class="all_img"><?php */?>
                    <?php
						echo $this->Image->resize('img/all.jpg','51','49', array('class' => 'all_img'));
						?>
                    <input type="text" placeholder="Search for classes & activities..." name="search_key" id="search_key" class="b_1_input1">
                    <button type="submit" class="srchbutt">
                      <i class="fa fa-search srci"></i>
                    </button>
                    <!-- hide category -->
                    
                    <!-- hide category -->
                </div>
              </form>
                            <div class="col-md-9 col-sm-12 col-xs-12 bl_inpt">
                              <div>
                                <div id="b11"><a href="#" class="fun123" onclick="serch_cat('1');">Fun & Recreation</a></div>
                                <div id="b12"><a href="#" class="fun123" onclick="serch_cat('2');">Informative & Motivational</a></div>
                                <div id="b13"><a href="#" class="fun123" onclick="serch_cat('3');">Health & Fitness</a></div>
                                <div id="b14"><a href="#" class="fun123" onclick="serch_cat('4');">Kids & Teens</a></div>
                                <div id="b15"><a href="#" class="fun123" onclick="serch_cat('5');">Education & Skill Development</a></div>
                                <div id="b16"><a href="#" class="fun123" onclick="serch_cat('6');">Home Maintenance</a></div>
                              </div>
                            </div>    
                        </center>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-12 padd_l_r b_fcb2 b_pad12">
                          <div class="pull-right b_lft">
                            <button class="btn btclass1 fbttp" style="padding:5px 20px;">
                           <?php /*?> <img src="<?php echo HTTP_ROOT;?>/img/iconfind.png" /><?php */?>
                              <?php
						echo $this->Image->resize('img/iconfind.png','19','19', array('class' => 'b_1map img-responsive','style' => 'display: inline;'));
						?>
                            Find</button>
                            <button class="btn btclassnt1  fbttp" style="padding:5px 10px;">
                           <?php /*?> <img src="<?php echo HTTP_ROOT;?>/img/iconconnect1.png" /><?php */?>
                            <?php
						echo $this->Image->resize('img/iconconnect1.png','22','21', array('class' => 'b_1map img-responsive','style' => 'display: inline;'));
						?>
                            Connect</button>
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
          <li class="dropdown active first maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/1" class="# pad_right_5 maiin-menu-list-link">Fun & Recreation<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/1" id="cooking">Cooking & Baking</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/2">Arts & Crafts</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/3">Music & Dance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/4">Sports</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/5">Photography</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/6">Adventure Activities</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/7">Media & Literature</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/8">Self Defence</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/1/61">India Indigenous</a></li>                
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/2" class="# pad_right_5 maiin-menu-list-link">Informative & Motivational<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/9">Personality Development</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/10">Communication & Soft Skills</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/11">Brain Efficiency Improvement</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/12">Language Learning</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/13">Motivational Talks</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/14">Spiritual Talks</a></li>  
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/15">Career Management</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/16">Relationship Management</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/2/62">India Indigenous</a></li>               
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/3" class="# pad_right_5 maiin-menu-list-link">Health & Wellness<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/17">Yoga & Meditation</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/18">Nutritional Cooking / Eating</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/19">Weight Loss</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/20">Lifestyle Management</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/21">Disease Management</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/22">Alternative Therapies</a></li>   
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/23">Fun & Fitness</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/24">Women's Health & Beauty</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/3/63">India Indigenous</a></li>                
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/4" class="# pad_right_5 maiin-menu-list-link" >Kids & Teens<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/25">Arts & Crafts</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/26">Abacus & Vedic Mathematics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/27">Music & Dance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/28">Personality Development</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/29">Brain Efficiency</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/30">Parenting</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/31">Special Kids</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/32">Science & Technology</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/39">Sports</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/42">Self Defence</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/4/38">India Indigenous</a></li>             
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/5" class="# pad_right_5 maiin-menu-list-link" >Education & Skill Development<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/35">Academics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/67">Skill Development</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/46">Robotics</a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/47">Electronics</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/48">Programming</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/49">Design</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/50">Experimental Learning</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/51">Industrial Training</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/5/40">India Indigenous</a></li>             
              </ul>
            </li>
            <li class="dropdown active last maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/homes/fun/6" class="# pad_right_5 maiin-menu-list-link">Home Maintenance<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu last-droppp-menu" role="menu" style="background-color:#00FFFF; z-index:100000;">
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/52">Home Hardware </a></li>                
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/53">Farming & Gardening</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/54">Interior Design</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/55">Automobile Maintenance</a></li>
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/56">Eco Friendly / Energy Savings</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/57">Building & Buying</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/58">Pets Maintenance</a></li> 
                <li><a href="<?php echo HTTP_ROOT;?>/homes/fun/6/41">India Indigenous</a></li>              
              </ul>
            </li>
          </ul>     
          <a href="#" class="menu-close"><span class="fa fa-close"></span></a>        </div><!--/.nav-collapse -->
        <!-- search icon -->
      </div>     
    </nav>
</section>  
<script type="text/javascript">
function serch_cat(catid){

  $('#search_cat_id').val(catid);

}
</script>

