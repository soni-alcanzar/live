 <?php //echo "<pre>"; print_r($class_status);//die;?>
 <!-- Start slider -->  
  <div class="col-xs-12 col-sm-12 blink" style="position: absolute; z-index: 50000; line-height: 21px; margin-top: 66px; font-weight: bold;">
 
          <blink style="cursor: pointer; visibility: visible; font-size: 14px; color: rgb(54, 187, 190);"><center>"We are rigorously working to get you the best classes & activities in your city. We are going live on July 15th. Thanks for your patience"<br>For vendor registrations, please contact 9962084477 / 9962584477</center></blink>
  </div>
  
  <section id="slider">
    <div class="main-slider">    
      <div class="single-slide">
        <img src="<?php echo HTTP_ROOT;?>/img/slider/banner1_new.jpg" class="img-responsive" alt="img">

      </div>       
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/Homes/fun">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner4.jpg" class="img-responsive" alt="img">
        </a>  
      </div>
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/homes/informative">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner6.jpg" class="img-responsive" alt="img">
        </a>       
      </div>
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/homes/health">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner7.jpg" class="img-responsive" alt="img">
        </a>
      </div>
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/homes/health">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner9.jpg" class="img-responsive" alt="img">
        </a>
      </div>
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/homes/education">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner10.jpg" class="img-responsive" alt="img">
        </a>
      </div>
      <div class="single-slide">
        <a href="<?php echo HTTP_ROOT;?>/homes/home_maintenance">
          <img src="<?php echo HTTP_ROOT;?>/img/slider/banner5.jpg" class="img-responsive" alt="img">
        </a>
      </div>
    </div> 
  </section>
  <!-- End slider -->
  <!-- Start middle container -->
<section> 
  <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 br_pd123">
   
    <div class="col-xs-12 col-sm-12 pad_all">
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
      
      <div class="col-xs-12 col-sm-12 pad_all">
        <center>
          <span class="learning01">YOUR NEW LEARNING COMMUNITY</span>
        </center>
      </div>
      
      <div class="col-xs-12 col-sm-12 ">
          <center>
              <img src="<?php echo HTTP_ROOT;?>/img/img/underline.png" alt="images not found" class="b_img_line img-responsive">
          </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>        
      <div class="col-xs-12 col-sm-12">
      <div class="col-xs-12 col-sm-6 pad_all bg_clr01">
        <div class="">&nbsp;</div>
       
        <div class="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 pad_all">
          <center>
            <img src="<?php echo HTTP_ROOT;?>/img/img/mapicon_1.png" alt="images not found" class="b_1map img-responsive">
          </center>
        </div>
        <div class="">&nbsp;</div>
       
        <div class="col-xs-12 col-sm-12 ">
          <center>
            <span class="find_new01">Find new classes & related <br/>interest groups / clubs 
            <br/>in your locality!</span>
          </center>
        </div>
        <div class="">&nbsp;</div>
        <div class="col-xs-12 col-sm-12 pad_all">
          <center>
            <a href="<?php echo HTTP_ROOT;?>/homes/explore">
              <button type="button" id="explore" class="btn btn-primary btn_clr01">Explore&nbsp;
                  <img src="<?php echo HTTP_ROOT;?>/img/img/mapicon_2.png" alt="img not found" class="map_ex img-responsive" style="display: inline;">
              </button>
            </a>  
          </center>
        </div>
        <div class="">&nbsp;</div>
        <div class="">&nbsp;</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 pad_all">
          <div class="col-xs-12 col-sm-12 col-md-12 pad_all">
            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <div class="map_hite01" style="overflow:hidden;width:100%;">
              <!-- <div id="gmap_canvas" class="map_hite01" style="width:100%;">
                
              </div> -->
              <div id="googleMap" style="width:100%;height:380px;" class="map_hite01"></div>
              <style>#gmap_canvas img{max-width:none!important;background:none!important}
              </style>
              <!-- <a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">themecircle.net</a> -->
            </div>
            <script>
                function initialize() {
                  var mapProp = {
                    center:new google.maps.LatLng(51.508742,-0.120850),
                    zoom:5,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
          </div>
        </div>
      </div>
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
    </div>

    <div class="col-xs-12 col-sm-12 pad_all">            
      <div class="col-xs-12 col-sm-12 pad_all">
        <center>
          <span class="learning01">DISCOVER THE JOY OF LEARNING IN GROUPS</span>
        </center>
      </div>        
      <div class="col-xs-12 col-sm-12 ">
        <center>
          <img src="<?php echo HTTP_ROOT;?>/img/img/underline.png" alt="images not found" class="img-responsive b_img_line">
        </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="row slide2_row12 " >
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="testimonials" class="container-fluid">
              <center>
                <div class="row curtain slider_sr_hite01" id="curtain" style="float-left;">
                    <div class="col-xs-12 col-sm-12" id="trns">
                      <!--  <div class="people-slider"> -->
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon1.png"  class="img-responsive img_br" alt="Image"/><br>
                                 <span class="slide2_text">Parents & kids</span>
                          </center>
                      </div> 
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon2.png" class="img-responsive img_br" alt="Image"/><br>
                              <span class="slide2_text">Study Groups</span>
                          </center>
                      </div>                         
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 hbygrp rad_br" >
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon3.png" class="img-responsive img_br" alt="Image img_br"/><br>
                              <span class="slide2_text">Hobby Groups</span>
                          </center>
                      </div>                         
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 hbygrp rad_br" >
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon9.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text">Fitness Groups </span>
                          </center>
                      </div>
                    </div> 
                    <div class="row " id="pdcmnty">
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon10.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Ladies Club </span>
                          </center>
                      </div>
                       <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon11.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Pack of Men </span>
                          </center>
                      </div>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon4.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Friends Gangs </span>
                          </center>
                      </div>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon12.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Couples </span>
                          </center>
                      </div>
                    </div>
                    <div class="row " id="pdcmnty1">    
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon5.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Community Groups </span>
                          </center>
                      </div>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon6.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Senior Citizens </span>
                          </center>
                      </div>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon7.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Kids Gangs </span>
                          </center>
                      </div>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 rad_br">
                          <center>
                              <img src="<?php echo HTTP_ROOT;?>/img/img/slider_icon8.png" class="img-responsive img_br" alt="Image item"/><br>
                              <span class="slide2_text"> Peers & colleagues </span>
                          </center>
                      </div>
                    </div>    
                      <!--  </div>  -->   
                </div> 
              </center>  
            </div>    
          </div>
        </div>
      </div>           
    </div>

    <div class="col-xs-12 col-sm-12 pad_all">
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
       
      <div class="col-xs-12 col-sm-12 pad_all">
          <center>
          <span class="learning01">TRENDING CLASSES & ACTIVITIES</span>
          </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 ">
          <center>
              <img src="<?php echo HTTP_ROOT;?>/img/underline.png" alt="images not found" class="b_img_line img-responsive">
          </center>
      </div>            
      

      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="row slide3_row1">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div id="testimonials" class="container-fluid">
                      <div class="row">
                          <div class="C_17_num">
  
                              <div id="grid-contant-slider1" class="b_sld">
                                
                                      <?php 
                                          foreach ($class_status as $result) { 
                                            $class_topic = $result['VendorClasse']['class_topic'];
                                            $trending_status = $result['VendorClasse']['trending_status'];
                                            if($trending_status==1){
                                      ?>
                                      <div class="item b_1_crs treding" id="<?php echo $result['VendorClasse']['id'];?>">
                                        
                                        <li>
                                          <div class="grid1 gridworkshopsbg1 grid-slider-image">
                                            <div class="view1 view-first">
                                              <div class="index_img">
                                                <?php if(!empty($result['VendorClasse']['upload_class_photo'])){?>
                                                  <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $result['VendorClasse']['upload_class_photo'];?>" class="img-responsive img-thumbnail" alt=""/>               
                                                <?php }else{?>
                                                  <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/defult_pic.png" class="img-thumbnail img-responsive" alt=""/>
                                                <?php }?>
                                                </div>
                                            </div> 
                                            
                                            
                                             <div class="golden home-tumb-slide">
                                              
                                                   <div class="slider-topic"><?php echo $class_topic;?>
                                                  <p style="margin-top:15px;color:black !important;margin-bottom:5px;"><strong>By:</strong><?php echo $result['VendorClasse']['class_by'];?></p>
                                                  </div>
                                                 <!-- <h4><?php echo substr($class_topic, 0 ,25),'...';?></h4> -->
                                              
                                                  <p>PLACE :<?php echo $result['VendorClasse']['location'];?></p>
                                                  <!-- <p>PLACE :<?php echo substr($result['VendorClasse']['location'],0,25),'....';?></p> -->
                                                  <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                                                  <!-- <h6>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                  </h6> -->
                                                  <!-- <button class="btn" tabindex="0">details</button> -->
                                            </div>
                                           
                                          </div>
                                        </li>
                                      </a>
                                      </div>
                                    
                                    <?php }}?>
                                
                                    
                                      <!-- <div class="item b_1_crs">
                                          <li>
                                            <div class="grid1 gridworkshopsbg1">
                                                    <div class="view1 view-first">
                                                      <div class="index_img2">
                                                        <img src="<?php echo HTTP_ROOT;?>/img/pics2.png" class="img-responsive" alt=""/>
                                                      </div>                 
                                                    </div> 
                                                     <div class="golden">
                                                          <h4>Hatha Yoga For Weight loss</h4>
                                                          <p>PLACE :EAST NAGAR, BNG</p>
                                                          <h5>Sat, 15 jan, 7 to 8pm </h5>
                                                          <h6>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                          </h6>
                                                          <button class="btn" tabindex="0">details</button>
                                                    </div>
                                                   
                                              </div>
                                         </li>
                                      </div>
                                    
                                    
                                      <div class="item b_1_crs">
                                          <li>
                                              <div class="grid1 gridworkshopsbg1">
                                              <div class="view1 view-first">
                                                      <div class="index_img">
                                                        <img src="<?php echo HTTP_ROOT;?>/img/pics3.png" class="img-responsive" alt=""/>
                                                      </div>                      
                                              </div> 
                                               
                                                   <div class="golden">
                                                        <h4>Meringue Tower of Kisses</h4>
                                                        <p>PLACE :EAST NAGAR, BNG</p>
                                                        <h5>Sat, 15 jan, 7 to 8pm </h5>
                                                        <h6>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </h6>
                                                        <button class="btn" tabindex="0">details</button>
                                                  </div>
                                                 
                                               </div>
                                             </li>
                                      </div>
                                          
                                          
                                      <div class="item b_1_crs">
                                          <li>
                                                <div class="grid1 gridworkshopsbg1">
                                                <div class="view1 view-first">
                                                        <div class="index_img">
                                                          <img src="<?php echo HTTP_ROOT;?>/img/pics4.png" class="img-responsive" alt=""/>
                                                        </div>                        
                                                </div> 
                                                 
                                                   <div class="golden">
                                                        <h4>Golden Pineapple Ball(Hands on)</h4>
                                                        <p>PLACE :EAST NAGAR, BNG</p>
                                                        <h5>Sat, 15 jan, 7 to 8pm </h5>
                                                        <h6>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </h6>
                                                        <button class="btn" tabindex="0">details</button>
                                                  </div>
                                                 
                                                 </div>
                                             </li>
                                      </div>
                                          
                                          
                                      <div class="item b_1_crs">
                                        <li>
                                            <div class="grid1 gridworkshopsbg1">
                                              <div class="view1 view-first">
                                                <div class="index_img">
                                                  <img src="<?php echo HTTP_ROOT;?>/img/pics9.png" class="img-responsive" alt=""/>
                                                </div>                 
                                              </div> 
                                            
                                            
                                               <div class="golden">
                                                    <h4>Cookie Pods Workshop</h4>
                                                    <p>PLACE :EAST NAGAR, BNG</p>
                                                    <h5>Sat, 15 jan, 7 to 8pm </h5>
                                                    <h6>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </h6>
                                                    <button class="btn" tabindex="0">details</button>
                                              </div>
                                           
                                            </div>
                                          </li>
                                      </div> -->
                                   
                                </div>
     
                          </div>
                      </div>
                  </div>        
             </div>
          </div>
      </div> 
    </div>

    <div class="col-xs-12 col-sm-12 pad_all">
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
      
      <div class="col-xs-12 col-sm-12 pad_all">
          <center>
          <span class="learning01">FEATURED CLASSES & ACTIVITIES </span>
          </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 ">
          <center>
              <img src="<?php echo HTTP_ROOT;?>/img/underline.png" alt="images not found" class="b_img_line img-responsive">
          </center>
      </div>            
      <div class="">&nbsp;</div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="row slide3_row1">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="testimonials" class="container-fluid">
              <div class="row">
                <div class="C_17_num">
                  <div id="grid-contant-slider3" class="b_sld">
                    <?php 
                        foreach ($featured_status as $result) { 
                          //print_r($result);
                          $class_topic = $result['VendorClasse']['class_topic'];
                          $featured_status = $result['VendorClasse']['featured_status'];
                          if($featured_status==1){
                    ?>
                    <div class="item b_1_crs featured" id="<?php echo $result['VendorClasse']['id'];?>">
                      <li>
                        <div class="grid1 gridfreeclassesbg grid-slider-image">
                          <div class="view3 view-first">
                                <div class="index_img">
                                  <?php if(!empty($result['VendorClasse']['upload_class_photo'])){?>
                                  <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $result['VendorClasse']['upload_class_photo'];?>" class="img-responsive img-thumbnail" alt=""/>
                                  <?php }else{?>
                                   <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/defult_pic.png" class="img-responsive img-thumbnail" alt=""/>
                                  <?php }?>
                                </div>                
                          </div>                
                          <div class="golden home-tumb-slide">
                              <div class="slider-topic"><?php echo $class_topic;?>
                                <p style="margin-top:15px;color:black !important;margin-bottom:5px;"><strong>By:</strong><?php echo $result['VendorClasse']['class_by'];?></p>
                                                  </div><!-- <h4><?php echo substr($class_topic, 0,25),'...';?></h4> -->
                              <p>PLACE :<?php echo $result['VendorClasse']['location'];?></p>
                              <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                             <!--  <h6>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </h6>
                              <button class="btn" tabindex="0">details</button> -->
                          </div>
                        </div>
                      </li>
                    </div>
                    <?php }}?>
                    <!-- <div class="item b_1_crs">
                      <li>
                        <div class="grid1 gridfreeclassesbg">
                          <div class="view3 view-first">
                              <div class="index_img1">
                                <img src="<?php echo HTTP_ROOT;?>/img/pics2.png" class="img-responsive" alt=""/>
                              </div>        
                          </div>                
                          <div class="golden">
                            <h4>Zumba Fitness Friday Promotion</h4>
                            <p>PLACE :EAST NAGAR, BNG</p>
                            <h5>Sat, 15 jan, 7 to 8pm </h5>
                            <h6>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </h6>
                            <button class="btn" tabindex="0">details</button>
                          </div>
                        </div>
                      </li>
                    </div>
                    <div class="item b_1_crs">
                      <li>
                        <div class="grid1 gridfreeclassesbg">
                          <div class="view3 view-first">
                            <div class="index_img2">
                              <img src="<?php echo HTTP_ROOT;?>/img/pics3.png" class="img-responsive" alt=""/>
                            </div>
                          </div>                  
                          <div class="golden">
                            <h4>Meringue Tower of Kisses</h4>
                            <p>PLACE :EAST NAGAR, BNG</p>
                            <h5>Sat, 15 jan, 7 to 8pm </h5>
                            <h6>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </h6>
                            <button class="btn" tabindex="0">details</button>
                          </div>
                        </div>
                      </li>
                    </div>
                    <div class="item b_1_crs">
                      <li>
                        <div class="grid1 gridfreeclassesbg">
                          <div class="view3 view-first">
                            <div class="index_img2">
                              <img src="<?php echo HTTP_ROOT;?>/img/pics4.png" class="img-responsive" alt=""/>
                            </div>
                          </div>                  
                          <div class="golden">
                            <h4>Golden Pineapple Ball(Hands on)</h4>
                            <p>PLACE :EAST NAGAR, BNG</p>
                            <h5>Sat, 15 jan, 7 to 8pm </h5>
                            <h6>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </h6>
                            <button class="btn" tabindex="0">details</button>
                          </div>
                        </div>
                      </li>
                    </div>  -->       
                  </div>                                       
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div> 
    </div>
    <div class="col-xs-12 col-sm-12 pad_all">
      <div class="">&nbsp;</div>
      <div class="">&nbsp;</div>
      
      <div class="col-xs-12 col-sm-12 pad_all">
          <center>
          <span class="learning01">INDIA INDIGENOUS CLASSES</span>
          </center>
      </div>
      <div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-12 ">
          <center>
              <img src="<?php echo HTTP_ROOT;?>/img/underline.png" alt="images not found" class="b_img_line img-responsive">
          </center>
      </div>            
      <div class="">&nbsp;</div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="row slide3_row1">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="testimonials" class="container-fluid">
              <div class="row">
                <div class="C_17_num">
                  <div id="grid-contant-slider2" class="b_sld">
                    <?php 
                        foreach ($recomended_status as $result) { 
                          
                          $class_topic = $result['VendorClasse']['class_topic'];
                          $recomended_status = $result['VendorClasse']['recommended_status'];
                          if($recomended_status == 1){
                    ?>
                    <div class="item b_1_crs">
                      <li>
                        <div class="grid1 gridfreeclassesbg">
                          <div class="view3 view-first">
                                <div class="index_img">
                                 <?php if(!empty($result['VendorClasse']['upload_class_photo'])){?>
                                  <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/<?php echo $result['VendorClasse']['upload_class_photo'];?>" class="img-responsive img-thumbnail" alt=""/>
                                  <?php }else{?>
                                   <img src="<?php echo HTTP_ROOT;?>/img/Vendor/class_image/defult_pic.png" class="img-responsive img-thumbnail" alt=""/>
                                  <?php }?>
                                 </div>                
                          </div>                
                          <div class="golden home-tumb-slide">
                              <div class="slider-topic"><?php echo $class_topic;?>
                                <p style="margin-top:15px;color:black !important;margin-bottom:5px;"><strong>By:</strong><?php echo $result['VendorClasse']['class_by'];?></p>
                                                  </div><!-- <h4><?php echo substr($class_topic, 0,25),'...';?></h4> -->
                              <p>PLACE :<?php echo $result['VendorClasse']['location'];?></p>
                              <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                             <!--  <h6>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </h6>
                              <button class="btn" tabindex="0">details</button> -->
                          </div>
                        </div>
                      </li>
                    </div>
                    <?php }}?>
                    </div>                                       
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>  
<div class="">&nbsp;</div>
<div class="">&nbsp;</div>
<script>
$(document).ready(function(){
  $('.treding').on('click',function(){
    var id=$(this).attr('id');
    window.location.href="<?php echo HTTP_ROOT;?>/Homes/viewclassDetail/"+btoa(id);
  
  });
$('.featured').on('click',function(){
 var id=$(this).attr('id');
    window.location.href="<?php echo HTTP_ROOT;?>/Homes/viewclassDetail/"+btoa(id);
   
})
});
</script>
<!-- End middle container -->
 
