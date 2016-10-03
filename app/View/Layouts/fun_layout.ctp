<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
  if($this->request->params['pass'][0] == 1){
  	$keywords = 'online hobby classes, fun classes, list of hobby classes, fun and recreation classes in chennai, fun and recreation classes,fun and recreation workshop, fun classes to take, recreation classes, entertainment courses, hobby classes ideas';
  }
  else if($this->request->params['pass'][0] == 2){
  	$keywords = 'informative speech, motivational courses, motivational speaker in chennai, informative and motivational courses in chennai, informative seminar, tutor, motivational events, informative speech online';
  }
  	else if($this->request->params['pass'][0] == 3){
	  	$keywords = 'health, health care, health information, medical information, health and wellness, medical information, health and wellness courses, health and wellness classes, health and wellness wworkshops, health courses';
	  }
	  else if($this->request->params['pass'][0] == 3){
	  	$keywords = 'health, health care, health information, medical information, health and wellness, medical information, health and wellness courses, health and wellness classes, health and wellness wworkshops, health courses';
	  }
	  else if($this->request->params['pass'][0] == 4){
	  	$keywords = 'kids classes, classes for kids, teens classes, kids and teens, online courses for kids, kids portal, kids and teens courses in chennai, kids courses, kids and teens courses online, kids and teens courses';
	  }
	  else if($this->request->params['pass'][0] == 5){
	  	$keywords = 'education and skills development, skills development courses, skill development, educational courses, career, education and skill development courses in chennai, educational and skill development courses, educational and skill development workshop';
	  }
	else if($this->request->params['pass'][0] == 6){
			$keywords ='handyman courses, home maintenance, home maintenance services, home maintenance courses, home repair services, handyman courses online';
	} else {
			$keywords = 'braingroom, online marketplace, business directory,braingroom india,braingroom chennai,braingroom classes,braingroom workshops, short term courses, online education, top online marketplace, brain groom, brain groom chennai, braingroom in chennai, brain groom i chennai';	
	}
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $keywords;?>"
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $url; ?></title>
     <link rel="shortcut icon" type="image/icon" href="logo.png"/>
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
             echo $this->Html->css('front/datepicar');
            echo $this->Html->css('front/num'); 
            echo $this->Html->css('front/newupadted');
        ?>
        <?php 
            echo $this->Html->script('front/jquery.min');
            echo $this->Html->script('front/fadeInScroll.jQuery');
            echo $this->Html->script('front/bootstrap');
			     echo $this->Html->script('front/jssor.slider-21.1.mini');
           echo $this->Html->script('front/fadeInScroll.jQuery');
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
            echo $this->Html->script('datepicar');
            echo $this->Html->script('front/jquery.bxslider');
             ?>
           
       
		 <?php echo $scripts_for_layout;?>
         <style>
            th,td {
                border-style: solid;
                border-width: 5px;
                border-color: #BCBCBC;
                word-wrap: break-word;
            }
			
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }

         </style>
         <!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"po+Kn1QolK104B", domain:"braingroom.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=po+Kn1QolK104B" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
    </head>
    <body>
        <?php  echo $this->Element('fun_header1');?>
         
         <!-- <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 brdash1 padd_l_r lglbrgroom brdash_naj"> -->
	            <?php //echo $this->Element('vendor_sidebar');?>
              <?php echo $this->fetch('content'); ?>
          <!-- </div> -->
          
	      <?php  echo $this->Element('homes_footer');?>

        
    </body>
</html>
<script type="text/javascript">
            jQuery(document).ready(function(){
              // alert('hfhh');
              jQuery('#recently').bxSlider({
                auto: false,
                pager: true,
                slideWidth: 330,
                controls: true,
                infiniteLoop:true,
                minSlides: 1,
                maxSlides: 4,
                autoControls: true,
                touchEnabled: true,
                responsive:true,
                moveSlides: 1,
                // adaptiveHeight:true,
                // adaptiveHeightSpeed:1000,
                preloadImages:'all'
              });
            });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('.find-near-div').click(function(){
              $('.nearr-border').css('border-color','#00CDC6');
              $('.find-near-div span').css('color','#00CDC6');
              $('.find-people-near-div span').css('color','#343434');
              $('.find-people-near-div-last span').css('color','#343434');
              $('.caret-border-img').show();
              $('.caret-border-img1').hide();
              $('.caret-border-img2').hide();
              $('.handgreen').hide();
              $('.handblack').show();
              $('.globgreen').show();
              $('.globblack').hide();
              $('.mangreen').hide();
              $('.manblack').show();
              $('.nearr-border1').css('border-color','#343434');
              $('.nearr-border2').css('border-color','#343434');
            });
            $('.find-people-near-div').click(function(){
              $('.nearr-border1').css('border-color','#00CDC6');
              $('.find-people-near-div span').css('color','#00CDC6');
              $('.find-near-div span').css('color','#343434');
              $('.handgreen').show();
              $('.handblack').hide();
              $('.globgreen').hide();
              $('.globblack').show();
              $('.mangreen').hide();
              $('.manblack').show();
              $('.find-people-near-div-last span').css('color','#343434');
              $('.caret-border-img1').show();
              $('.caret-border-img').hide();
              $('.caret-border-img2').hide();
              $('.nearr-border').css('border-color','#343434');
              $('.nearr-border2').css('border-color','#343434');
            });
            $('.find-people-near-div-last').click(function(){
              $('.caret-border-img2').show();
              $('.caret-border-img1').hide();
              $('.caret-border-img').hide();
              $('.mangreen').show();
              $('.manblack').hide();
              $('.handgreen').hide();
              $('.handblack').show();
              $('.globgreen').hide();
              $('.globblack').show();
              $('.nearr-border2').css('border-color','#00CDC6');
              $('.nearr-border').css('border-color','#343434');
              $('.nearr-border1').css('border-color','#343434');
              $('.find-people-near-div span').css('color','#343434');
              $('.find-near-div span').css('color','#343434');
              $('.find-people-near-div-last span').css('color','#00CDC6');
            });
          });
        </script>

        <script type="text/javascript">
            $(window).load(function() {
                  $("#grid-contant-slider1").flexisel(
				  	{
						
    visibleItems: 4,
    itemsToScroll: 1,
    animationSpeed: 400,
    infinite: true,
    navigationTargetSelector: null,
    autoPlay: {
      enable: false,
      interval: 5000,
      pauseOnHover: true
    },
    responsiveBreakpoints: { 
      portrait: { 
        changePoint:480,
        visibleItems: 1,
        itemsToScroll: 1
      }, 
        landscape: { 
        changePoint:640,
        visibleItems: 2,
        itemsToScroll: 2
      },
        tablet: { 
        changePoint:768,
        visibleItems: 3,
        itemsToScroll: 3
      }
    }
  
						}
				  );
                  $("#grid-contant-slider2").flexisel({
					
						
    visibleItems: 4,
    itemsToScroll: 4,
    animationSpeed: 400,
    infinite: true,
    navigationTargetSelector: null,
    autoPlay: {
      enable: false,
      interval: 5000,
      pauseOnHover: true
    },
    responsiveBreakpoints: { 
      portrait: { 
        changePoint:480,
        visibleItems: 1,
        itemsToScroll: 1
      }, 
        landscape: { 
        changePoint:640,
        visibleItems: 2,
        itemsToScroll: 2
      },
        tablet: { 
        changePoint:768,
        visibleItems: 3,
        itemsToScroll: 3
      }
    }
  
						
				});
                  $("#grid-contant-slider3").flexisel();
            });

            $(document).ready(function() {
              $('.menu-icon').click(function() {
                $('#navbar').toggleClass('left');
              });
              $('.menu-close').click(function() {
                $('#navbar').removeClass('left');
              });
            });
        </script>
    
        <script>
            jQuery(function($) {
               $('.chosen-select').chosen();
               $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
             })(jQuery);
        </script>
        <!--End 1st slide script-->

        <script src="main.js"></script>
        <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                rtl: true,
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            });
        </script>
        <!-- JQuery search box -->
        <!-- JQuery search box -->
        <script type="text/javascript">
            $("#m_search").click(function(){
              // Holds the product ID of the clicked element
              $('.bl_inpt').toggle();
            });
            // **********first id***********//
              $("#b11").click(function(){
                var val=$('#b11').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
              // **********first id***********//
              // **********second id***********//
              $("#b12").click(function(){
                var val=$('#b12').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
            // **********second id***********//
            // **********third id***********//
            $("#b13").click(function(){
                var val=$('#b13').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
            // **********third id***********//
            // **********four id***********//
            $("#b14").click(function(){
                var val=$('#b14').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
            // **********four id***********//
            // **********fifth id***********//
            $("#b15").click(function(){
                var val=$('#b15').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
            // **********fifth id***********//
            // **********sixth id***********//
            $("#b16").click(function(){
                var val=$('#b16').text();
                $("#search").val(val);
                $('.bl_inpt').hide();
            });
            // **********sixth id***********//
            $(document).ready(function(){
        
              $("#curtain").cycle({fx:'scrollDown'});
            });
            // transotion effect************//
          
            // transotion effect************//
        </script>   
       

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length} ;
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
        </script>
<script>
        $(document).ready(function () {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>