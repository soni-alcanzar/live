<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/carousel-slider.slider -->
    
    <!-- This demo works with jquery library -->

    <!-- use jssor.slider-21.1.debug.js instead for debug -->

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
         		
          <?php 
	  $x = 1;
	  foreach($recommended_class as $result) { ?>
          <div style="display: none;"> 
           <div class="col-xs-6 col-sm-3">



<div class="grid1 gridworkshopsbg1 grid-slider-image">
                                            <div class="view1 view-first">
                                              <div class="index_img">
                                              <?php 
                                              echo "<span class='flexible-fixed flexible-fixed-index'>";
                                              echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                              echo "</span>";
                                              ?>
                                             
                                                 <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('img/Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'], array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
				if(preg_match("/Guitar\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Guitar/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Keyboard\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Bharathanatiyam\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bharathanatiyam/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Piano\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							   else if(preg_match("/Free style\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Freestyle/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Hip- hop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Hip-hop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Bollywood dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bollywooddance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Folk dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Folkdance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Westerndance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Gymnastics\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Gymnastics/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Karnatic\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Karnatic/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tottos\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tattoos/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Yoga\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/yoga/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Zumba\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Zumba/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 } 
							 else if(preg_match("/Swimming\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Swimming/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Physical fitness\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Physicalfitness/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Ballet Dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/BalletDance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Salsa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Salsa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Jazz\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Jazz/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tango\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tango/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Judo\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Judo/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Drums\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Drums/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tabballa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tabballa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western Pop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Pop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Glasspainting\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Glasspainting/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 
							 									 else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
 }
			}
			
 ?>
                                                <div class="image_price12 pull-right image_price-index">
                                                <span class="ccc" style="color:white">
                                                &#8377;<?php echo $result['VendorClasseLevelDetail'][0]['price'];?></span>
                                                </div>
                                                </div>
                                            </div> 
                                            
                                            
                                             <div class="golden home-tumb-slide">
                                              <div class="slider-topic12">
                                              <?php echo $class_topic;?>
                                              </div>
                                              <div class="provider-by" style="color:black !important; margin-bottom:10px !important;">
                                              <strong>By:</strong>
                                              <?php 
                                              if($result['User']['vendor_type_id'] ==2):
                                              		echo $result['User']['first_name'].' '.$result['User']['last_name'];
                                              	else:
                                              		echo $result['User']['institute_name'];
                                              	endif;
                                              ?>

                                              </div>
                                              <div class="indx-address">Place :<?php echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];?></div>
                                              <h5>No of session:&nbsp;<?php echo $result['VendorClasse']['no_of_session'];?> </h5>
                                              <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                                              </div>
                                           
                                          </div>

</div>
			</div>
            <?php } ?>
        </div>  
           
                       <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>

    <!-- #endregion Jssor Slider End -->
</body>
</html>

<?php /*?><style></style>
<div class="container">
	<div class="row">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
         
          <?php 
	  $x = 1;
	  foreach($recommended_class as $result) { ?>
          <div style="display: none;"> 
           <div class="col-xs-6 col-sm-3">



<div class="grid1 gridworkshopsbg1 grid-slider-image">
                                            <div class="view1 view-first">
                                              <div class="index_img">
                                              <?php 
                                              echo "<span class='flexible-fixed flexible-fixed-index'>";
                                              echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                              echo "</span>";
                                              ?>
                                             
                                                 <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('img/Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'], array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
				if(preg_match("/Guitar\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Guitar/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Keyboard\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Bharathanatiyam\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bharathanatiyam/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Piano\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							   else if(preg_match("/Free style\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Freestyle/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Hip- hop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Hip-hop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Bollywood dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bollywooddance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Folk dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Folkdance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Westerndance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Gymnastics\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Gymnastics/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Karnatic\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Karnatic/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tottos\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tattoos/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Yoga\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/yoga/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Zumba\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Zumba/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 } 
							 else if(preg_match("/Swimming\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Swimming/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Physical fitness\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Physicalfitness/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Ballet Dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/BalletDance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Salsa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Salsa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Jazz\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Jazz/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tango\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tango/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Judo\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Judo/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Drums\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Drums/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tabballa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tabballa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western Pop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Pop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Glasspainting\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Glasspainting/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 
							 									 else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
 }
			}
			
 ?>
                                                <div class="image_price12 pull-right image_price-index">
                                                <span class="ccc" style="color:white">
                                                &#8377;<?php echo $result['VendorClasseLevelDetail'][0]['price'];?></span>
                                                </div>
                                                </div>
                                            </div> 
                                            
                                            
                                             <div class="golden home-tumb-slide">
                                              <div class="slider-topic12">
                                              <?php echo $class_topic;?>
                                              </div>
                                              <div class="provider-by" style="color:black !important; margin-bottom:10px !important;">
                                              <strong>By:</strong>
                                              <?php 
                                              if($result['User']['vendor_type_id'] ==2):
                                              		echo $result['User']['first_name'].' '.$result['User']['last_name'];
                                              	else:
                                              		echo $result['User']['institute_name'];
                                              	endif;
                                              ?>

                                              </div>
                                              <div class="indx-address">Place :<?php echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];?></div>
                                              <h5>No of session:&nbsp;<?php echo $result['VendorClasse']['no_of_session'];?> </h5>
                                              <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                                              </div>
                                           
                                          </div>

</div>
			</div>
            <?php } ?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
		</div>
</div><?php */?>
<?php /*?><div class="container">
  <div class="row">

    <div class="col-sm-12">
      <div class="row" id="slideshow1">
    		<div>
      <?php 
	  $x = 1;
	  foreach($recommended_class as $result) { ?>
		
<div class="col-xs-6 col-sm-3">



<div class="grid1 gridworkshopsbg1 grid-slider-image">
                                            <div class="view1 view-first">
                                              <div class="index_img">
                                              <?php 
                                              echo "<span class='flexible-fixed flexible-fixed-index'>";
                                              echo ($result['VendorClasse']['class_timing_id'] == 2)?'Fixed':'Flexible';
                                              echo "</span>";
                                              ?>
                                             
                                                 <?php 
												if(!empty($result['VendorClasse']['upload_class_photo'])){
													
echo $this->Html->link($this->Html->image('img/Vendor/class_image/'.$result['VendorClasse']['upload_class_photo'], array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                     
                                                 }
			else{
				if(preg_match("/Guitar\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Guitar/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Keyboard\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Bharathanatiyam\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bharathanatiyam/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Piano\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Keyboard/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							   else if(preg_match("/Free style\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Freestyle/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Hip- hop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,5); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Hip-hop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Bollywood dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Bollywooddance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Folk dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Folkdance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Westerndance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Gymnastics\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Gymnastics/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Karnatic\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Karnatic/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tottos\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tattoos/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Yoga\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/yoga/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Zumba\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Zumba/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 } 
							 else if(preg_match("/Swimming\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,6); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Swimming/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Physical fitness\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Physicalfitness/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Ballet Dance\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/BalletDance/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Salsa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Salsa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Jazz\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Jazz/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tango\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tango/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Judo\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Judo/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							  else if(preg_match("/Drums\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Drums/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Tabballa\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,4); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Tabballa/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Western Pop\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,3); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Pop/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 else if(preg_match("/Glasspainting\b/i",$result['VendorClasse']['class_topic'])){
						$data = rand (1,2); 
echo $this->Html->link($this->Html->image('Vendor/class_image/Glasspainting/'.$data.'.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));			 
							 }
							 
							 									 else{
												$seg_pic = explode(',',$result['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
 }
			}
			
 ?>
                                                <div class="image_price12 pull-right image_price-index">
                                                <span class="ccc" style="color:white">
                                                &#8377;<?php echo $result['VendorClasseLevelDetail'][0]['price'];?></span>
                                                </div>
                                                </div>
                                            </div> 
                                            
                                            
                                             <div class="golden home-tumb-slide">
                                              <div class="slider-topic12">
                                              <?php echo $class_topic;?>
                                              </div>
                                              <div class="provider-by" style="color:black !important; margin-bottom:10px !important;">
                                              <strong>By:</strong>
                                              <?php 
                                              if($result['User']['vendor_type_id'] ==2):
                                              		echo $result['User']['first_name'].' '.$result['User']['last_name'];
                                              	else:
                                              		echo $result['User']['institute_name'];
                                              	endif;
                                              ?>

                                              </div>
                                              <div class="indx-address">Place :<?php echo $result['VendorClasseLocationDetail'][0]['Locality']['name'];?></div>
                                              <h5>No of session:&nbsp;<?php echo $result['VendorClasse']['no_of_session'];?> </h5>
                                              <h5>Duration:&nbsp;<?php echo $result['VendorClasse']['class_duration'];?> </h5>
                                              </div>
                                           
                                          </div>

</div>
<?php
   $x++;

}

?>
</div>
</div>      
      </div>
  </div>
  
</div><?php */?>

									