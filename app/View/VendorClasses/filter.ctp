<?php  $total_class=count ($all_total_class); 
                    $page_count = $page-10;
             ?>
            <?php if($page_count > $total_class){ 

          ?>
<div class="col-lg-9 col-md-8 col-sm-9 col-xs-7 padd_l_r sr_2605_02 tab-content padd_220" style="border:0px solid black;width:75%;height:1000px;overflow-y:scroll" id="">
           <?php 
            }
              else{

                ?>
                     <div class="col-lg-9 col-md-8 col-sm-9 col-xs-7 padd_l_r sr_2605_02 tab-content padd_220" id="cat_list" >
              <?php
              }
              ?>
                <div class="col-md-12 col-sm-12 col-xs-12 fltrdv">
                  <div class="filter_br">
                   
                    <?php echo $total_class; ?> Class listing Found
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 sr_2605_03_padding tab-pane fade  active in list_filter1" id="banking" name="banking">

                  <?php 

                  if($total_class==0)
                  {

                    echo "Classes not Exist!";

                  }

                  ?>
                  <?php foreach ($all_total_class as $key => $allclass_value) {
                    
                 $seg_pic = explode(',',$allclass_value['VendorClasse']['segment_id']);
                  $class_id                 =   $allclass_value['VendorClasse']['id'];
                  $class_topic              =   $allclass_value['VendorClasse']['class_topic'];
                  $upload_class_photo       =   $allclass_value['VendorClasse']['upload_class_photo'];
                  $class_class_summary      =   $allclass_value['VendorClasse']['class_summary'];
                  $class_class_duration     =   $allclass_value['VendorClasse']['class_duration'];
                  $class_price_per_head     =   $allclass_value['VendorClasse']['price_per_head'];
                  $class_status             =   $allclass_value['VendorClasse']['status'];
                  $class_mod_id             =   $allclass_value['VendorClasse']['class_timing_id'];
					$cl_shud_session_date     =   $allclass_value['ClassSchedule']['session_date'];
					if(!empty($allclass_value['ClassSchedule'])):
						
						$cl_shud_session_time     =   $allclass_value['ClassSchedule']['session_time'];
					endif;
					if($class_mod_id==1){
					
						$class_name_type='Flexible';
					}
					else if($class_mod_id==2)
					{
						$class_name_type='Fixed';
					}
					$class_id = base64_encode($class_id);
					$top = substr($class_topic, 0, 10). '...';
                ?> 
                <div class="col-sm-12 col-xs-12 sr_260501 padd_l_r scroll_box_display"> 
                          <!-- ********images************ -->
                          <div class="col-md-4 col-sm-4 col-xs-12 img-responsive padd_l_r">
                            <div class="col-xs-12 col-sm-12 fun01_img_w">
                              <span class="flexible-fixed-fun"><?php echo $class_name_type; ?></span>
                              <span class="image_price12-fun pull-right-fun" style="color:white">₹ <?php echo $allclass_value['VendorClasseLevelDetail'][0]['price']; ?></span>
      
  <?php 
												if(!empty($allclass_value['VendorClasse']['upload_class_photo'])){
													
//echo $this->Html->link($this->Html->image('Vendor/class_image/'.$allclass_value['VendorClasse']['upload_class_photo'].'.jpg', array('class' => 'imgresponsive img-thumbnail')),array('controller'=>'Vendor_classes','action'=>'classes',$class_id),array('escape' => false));
                                                 ?>    
													 <a href="<?php echo HTTP_ROOT?>/classes/<?php echo $allclass_value['VendorClasse']['class_topic']; ?>" >
											
										<?php	echo $this->Image->resize('Vendor/class_image/'.$allclass_value['VendorClasse']['upload_class_photo'].'.jpg','305','148', array('class' => 'imgresponsive img-thumbnail'));
											?>
											</a>
                                            <?php
                                                 }
			else{
												$seg_pic = explode(',',$allclass_value['VendorClasse']['segment_id']);
echo $this->Html->link($this->Html->image('Vendor/'.$result['VendorClasse']['category_id'].'/'.$seg_pic[0].'/defult_pic.jpg', array('class' => 'imgresponsive img-thumbnail')), array('controller'=>'Vendor_classes','action'=>'classes',$class_id), array('escape' => false));
			}
			
 ?>
                            </div>  

                          </div><!-- ********images************ -->
                          <!-- ********text************ -->
                          <div class="col-md-8 col-sm-8 col-xs-12 text_res sr_2605_03_padding">
                             <div class="col-xs-12 col-sm-12 sr_2605_06 sr_2605_06_textLorem021">
                                <div class="hathyga col-xs-12 col-sm-12">
                                <?php //echo $this->Html->link($class_topic,array('controller' => 'vendor_classes','action'=>'classes',base64_encode($allclass_value['VendorClasse']['id'])), array('escape' => false)); ?>
             <a href="<?php echo HTTP_ROOT?>/classes/<?php echo $allclass_value['VendorClasse']['class_topic']; ?>" ><?php echo $class_topic; ?></a>
                                    <span class="pull-right">
                                        <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite sr_class_acc_div padd_l_r"
                                        style="margin-bottom:7px;">
                                            <div class="row">
                                                <img class="img-responsive" style="display: inline; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/user.png">
                                                <span class="city">
                                                <strong> By :</strong> 
                                                <?php echo ucfirst($allclass_value['User']['first_name'].' '.$allclass_value['User']['last_name']);?>
                                                </span>
                                            </div>
                                        </div>
                                   
                                    </span>
                              </div>
                                   
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite">
                                  <img class="img-responsive" style="display: inline; margin-top: -10px;  width: 20px; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/location.png">
                                  <span class="city">
                                  <?php
								  if(!empty($allclass_value['VendorClasseLocationDetail'])):
								  	echo $allclass_value['VendorClasseLocationDetail'][0]['Locality']['name'];
								  endif;	
								  ?>
                                  </span>
                                  <?php /*?><a href="javascript:void(0);" type="button" class="btn btn-nfo js-show-locations" data-id="<?php echo $allclass_value['VendorClasse']['id']?>" data-toggle="modal" data-target="#myModal">Other Places</a><?php */?>
                                <img src="<?php echo HTTP_ROOT;?>/img/8.jpg" class="pull-right star" style="height: 20px;">
                                </div>
                                <?php /*?><div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite sr_class_acc_div padd_l_r"
                                   style="margin-bottom:7px;">
                                  <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <img class="img-responsive" style="display: inline; margin-right: 5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/user.png">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 sr_class_acc_text02 upclass-location">
                                   <span class="city">
                                    <strong> By :</strong> 
                                    <?php echo ucfirst($allclass_value['User']['first_name'].' '.$allclass_value['User']['last_name']);?>
                                   </span>
                                    </div>
                                  </div>
                                </div><?php */?>
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_serch_div_l_hite">
                                 
                                <?php
                                  if($class_mod_id==1){
                                  ?>
                                  <img class="img-responsive" style="display: inline; width: 15px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/clock.png">
                                  <span class="city">Total Duration: <?php echo $class_class_duration; ?></span>
                                   <span class="city"><?php echo $cl_shud_session_date; ?></span>
                                   <span>No of Sessions: <?php echo $allclass_value['VendorClasse']['no_of_session'];?></span>
                                  <?php
                                  }
                                  else if($class_mod_id==2)
                                  {
                                    ?>
                                        <img class="img-responsive" style="display: inline; width: 15px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/clock.png">
                                 
                                   <span class="city"><?php echo $cl_shud_session_date; ?></span>
                                     <span class="city"><?php echo $cl_shud_session_time; ?></span>

                                    <?php
                                  }
                                  ?>
                                </div>
                                <?php /*?><div class="col-xs-12 col-sm-12 ">
                                	<span>No of Sessions: <?php echo $allclass_value['VendorClasse']['no_of_session'];?></span>
                                </div><?php */?>
                                <div class="col-xs-12 col-sm-12 sr_2605_03_padding sr_2605_06_textLorem sr_serch_div_l_hite">
                                  <img class="img-responsive" style="display: inline; margin-right: 5px; width: 10px; margin-top: -5px;" src="<?php echo HTTP_ROOT;?>/img/fun&refreshment/information.png">&nbsp;&nbsp;
                                  <!-- <img class="img-responsive" style="display: inline; margin-right: 5px; margin-top: -5px; width: 17px;" src="images/fun&refreshment/calander.png">&nbsp;&nbsp; -->
                                  <?php /*?><span class="comment more city"><?php echo $class_class_summary; ?></span><?php */?>
                                  <p class="comment more city text-justify"><?php echo $class_class_summary; ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                	<span>Age Group: 
                                    
                                     <?php 
												$z= explode(',',$allclass_value['VendorClasse']['age_category']);
												foreach($z as $x =>$value){
													if($x == 0): $c[$x] = 'Kids'; endif;
													if($x == 1): $c[$x]= 'Teens';endif;
													if($x == 2): $c[$x]= 'Adults';endif;
												}  
												echo implode(',',$c);
											?>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                <span>Other Localities:
                                <?php 
								//if(count($allclass_value['VendorClasseLocationDetail'])>1):
									foreach($allclass_value['VendorClasseLocationDetail'] as $other_citie){
											$other_cities[] =  $other_citie['Locality']['name'];
									}
									//reset($other_cities);
									//$key = key($other_cities);
									//unset($other_cities[$key]);
									echo implode(',',array_unique($other_cities));
									
								//else:
								//	echo 'NA'; 		
								//endif;
								?>
                                </span>
                                </div>
                                
                          </div>        
                          <!-- ********text************ -->
                    </div> 
                  <?php } ?>
                  <center class="white_bg">
                    <div id="status1"></div>
                    <style type="text/css">
                     

               
                    </style>

<?php //if($total_class>5){ ?>
                    <!-- <div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div> -->
    <?php
  //}
  ?>

                </center>
                </div><!-- tab 1 / -->
                                             
            </div>
          </div>
                    <script>
	var showChar = 150;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});
	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
      </script>
