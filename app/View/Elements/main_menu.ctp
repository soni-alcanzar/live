<?php $Allcategory=$this->requestAction(array('controller'=>'Homes', 'action'=>'getCategory'));
?>
<?php $Allsegment1=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(1)));
      $Allsegment2=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(2)));
     $Allsegment3=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(3)));
     $Allsegment4=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(4)));
     $Allsegment5=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(5)));
     $Allsegment6=$this->requestAction(array('controller'=>'Homes', 'action'=>'getSegment'),array('pass'=>array(6)));
     
    
?>
<section id="menu-area">            
    <nav class="navbar navbar-default" role="navigation padd_l_r"> 
        <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 padd_l_r">
        <a href="#" class="menu-icon"><span class="fa fa-bars logspan"></span></a>
        <div id="navbar" class="navbar-collapse collapse na_bg_clr012">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav col-xs-12 col-sm-12 padd_l_r">
            <li class="dropdown active first maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[0]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link">
                <?php echo $Allcategory[0]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                <?php foreach($Allsegment1 as $res1){ ?>               
                   <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[0]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                    <?php echo $res1['ClassSegment']['segment_name'];?></a>
                  </li>
                <?php }?>
              </ul>    
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[1]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link">
                <?php echo $Allcategory[1]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                <?php foreach($Allsegment2 as $res1){ ?>
                  <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[1]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                       <?php echo $res1['ClassSegment']['segment_name'];?>
                    </a>
                  </li>
                <?php }?>                 
              </ul>
            </li>

            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[2]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link">
                <?php echo $Allcategory[2]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                <?php foreach($Allsegment3 as $res1){ ?>
                  <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[2]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                      <?php echo $res1['ClassSegment']['segment_name'];?>
                    </a>
                  </li>
                <?php }?>  
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[3]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link" >
                <?php echo $Allcategory[3]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                <?php foreach($Allsegment4 as $res1){ ?>
                  <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[3]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                      <?php echo $res1['ClassSegment']['segment_name'];?>
                    </a>
                  </li>
                <?php }?>   
              </ul>
            </li>
            <li class="dropdown active maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[4]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link" >
                <?php echo $Allcategory[4]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>

              <ul class="dropdown-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                
                <?php foreach($Allsegment5 as $res1){ ?>
                  <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[4]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                      <?php echo $res1['ClassSegment']['segment_name'];?>
                    </a>
                  </li>
                <?php }?>    

              </ul>
            </li>
            <li class="dropdown active last maiin-menu-list">
              <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[5]['Category']['id'];?>" class="# pad_right_5 maiin-menu-list-link">
                <?php echo $Allcategory[5]['Category']['category_name'];?>
                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu last-droppp-menu" role="menu" style="background-color:#38B9B5; z-index:100000;">
                
                 <?php foreach($Allsegment6 as $res1){ ?>
                  <li>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/lists/<?php echo $Allcategory[5]['Category']['id'];?>/<?php echo $res1['ClassSegment']['id'];?>">
                      <?php echo $res1['ClassSegment']['segment_name'];?>
                    </a>
                  </li>
                <?php }?>
              </ul>
            </li>
          </ul>     
          <a href="#" class="menu-close"><span class="fa fa-close"></span></a></div>

      </div>     
    </nav>
</section>