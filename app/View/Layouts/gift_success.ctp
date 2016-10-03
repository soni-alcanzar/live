<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Find a Workshop Braingroom</title>
     <link rel="shortcut icon" type="image/icon" href="assets/images/favicon-32x32.png"/>
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- The styles -->
	      <?php 
            echo $this->Html->css('front/bootstrap.min'); 
            echo $this->Html->css('front/style_g');
            echo $this->Html->css('front/header');
            echo $this->Html->css('front/font-awesome.min'); 
			      //echo $this->Html->css('front/bootstrap'); 
            echo $this->Html->css('front/brain'); 
            echo $this->Html->css('front/slick'); 
            echo $this->Html->css('front/jquery.fancybox'); 
            echo $this->Html->css('front/animate');
            echo $this->Html->css('front/bootstrap-progressbar-3.3.4'); 
            echo $this->Html->css('front/default-theme'); 
            //echo $this->Html->css('front/brain_new'); 
            echo $this->Html->css('front/style1');
            echo $this->Html->css('front/tabstyles'); 
            echo $this->Html->css('front/grid-slide-style');
            echo $this->Html->css('front/settings'); 
            echo $this->Html->css('front/media'); 
            echo $this->Html->css('front/jquery.bxslider'); 
            echo $this->Html->css('front/check_box_fun');
            echo $this->Html->css('front/num'); 
        ?>
        <?php 
            echo $this->Html->script('front/jquery.min');
            echo $this->Html->script('front/bootstrap');
            echo $this->Html->script('front/jquery.mixitup');
            echo $this->Html->script('front/jquery.fancybox.pack');
            echo $this->Html->script('front/waypoints');
            echo $this->Html->script('front/jquery.counterup');
            echo $this->Html->script('front/wow');
            echo $this->Html->script('front/chosen.jquery');
            echo $this->Html->script('front/slick1');
            echo $this->Html->script('front/bootstrap-progressbar');
            echo $this->Html->script('front/city-popup-main');
            echo $this->Html->script('front/jquery.flexisel');
            echo $this->Html->script('front/cbpFWTabs');
            echo $this->Html->script('front/custom');
            echo $this->Html->script('front/custom');
            echo $this->Html->script('front/jquery.bxslider');
             ?>
           
    </head>
    <body>
        <?php  //echo $this->Element('vendor_header');?>
         
         <!-- <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 brdash1 padd_l_r lglbrgroom brdash_naj"> -->
	            <?php //echo $this->Element('vendor_sidebar');?>
              <?php echo $this->fetch('content'); ?>
          <!-- </div> -->
          
	      <?php  echo $this->Element('homes_footer');?>

        
    </body>
</html>
