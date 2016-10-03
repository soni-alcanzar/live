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
            <script src="http://maps.googleapis.com/maps/api/js"></script>
       
		 <?php echo $scripts_for_layout;?>
         <style>
            th,td {
                border-style: solid;
                border-width: 5px;
                border-color: #BCBCBC;
                word-wrap: break-word;
            }
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
        <?php  echo $this->Element('vendor_header');?>
         
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
            $(window).load(function() {
                  $("#grid-contant-slider1").flexisel();
                  $("#grid-contant-slider2").flexisel();
                  $("#grid-contant-slider3").flexisel({
                    visibleItems: 4,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: { 
                        portrait: { 
                            changePoint:480,
                            visibleItems: 1
                        }, 
                        landscape: { 
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: { 
                            changePoint:768,
                            visibleItems: 2
                        }
                    }
                  });
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
            function initialize() {
              var mapProp = {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              };
              var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
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
