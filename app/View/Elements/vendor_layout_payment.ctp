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
           
            echo $this->Html->css('front/slick');
            echo $this->Html->css('front/jquery.fancybox'); 
			      echo $this->Html->css('front/animate'); 
            echo $this->Html->css('front/bootstrap-chosen'); 
            echo $this->Html->css('front/style1'); 
            echo $this->Html->css('front/media'); 
            echo $this->Html->css('front/style'); 
            //echo $this->Html->css('front/brain_new'); 
            echo $this->Html->css('front/brain');
            echo $this->Html->css('front/style_g'); 
            echo $this->Html->css('front/header'); 
            echo $this->Html->css('front/num'); 
            echo $this->Html->css('front/sub_main'); 
            echo $this->Html->css('front/datepicar');
            echo $this->Html->css('front/jquery.bxslider');  
	          echo $this->Html->css('front/header'); 
            echo $this->Html->css('connet/connect');


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
         </style>
    </head>
    <body>
        <?php  echo $this->Element('vendor_header');?>
         <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 brdash1 padd_l_r lglbrgroom brdash_naj">
		            <?php //echo $this->Element('vendor_sidebar');?>
                <?php echo $this->fetch('content'); ?>
            </div>
        
	      <?php  echo $this->Element('homes_footer');?>

        
    </body>
</html>
<script>
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
                    })
        </script>
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
          // **********div hide***********// 
          $("#pls").click(function(){
              $("#dis").fadeIn();
              $("#min").show();
              $("#pls").hide();
              $("#dis1").fadeOut();
              $("#min1").hide();
              $("#pls1").show();
          });

          $("#min").click(function(){
              $("#dis").fadeOut();
              $("#pls").show();
              $("#min").hide();
          });
          // ***********2nd*************
           $("#pls1").click(function(){
              $("#dis1").fadeIn();
              $("#min1").show();
              $("#pls1").hide();
              $("#dis").fadeOut();
              $("#min").hide();
              $("#pls").show();
          });

          $("#min1").click(function(){
              $("#dis1").fadeOut();
              $("#pls1").show();
              $("#min1").hide();
          });
          // *******vendor lside
          $("#vndr1").click(function(){
              $("#vndr").show();
              $("#buyer").hide();
              $("#work1").show();
              $("#work2").hide();
              $('#wishlistt').hide();
              $("#vndr1").css('background','#00CDC6');
               $("#vndr1").css('color','#00CDC6');
              $("#buyer1").css('background','#fff');
              $('.bg_vendor p').css('color','#fff');
              $('.bg_vendor1 p').css('color','#00CDC6');
              $('.bg_vendor p').css('font-family','OS_bold');
              $('.bg_vendor p').css('text-decoration','underline');
              $('.bg_vendor1 p').css('text-decoration','none');
              $('.bg_vendor1 p').css('font-family','OS_regular');
          });
          $("#buyer1").click(function(){
              $("#buyer").show();
              $("#vndr").hide();
              $("#work1").hide();
              $("#work2").show();
              $("#buyer1").css('background','#00CDC6');
              $("#vndr1").css('background','#fff');
              $('.bg_vendor1 p').css('color','#fff');
              $('.bg_vendor p').css('color','#00CDC6');
              $('.bg_vendor p').css('font-family','OS_regular');
              $('.bg_vendor1 p').css('font-family','OS_bold');
              $('.bg_vendor p').css('text-decoration','none');
              $('.bg_vendor1 p').css('text-decoration','underline');
          });
          // *******vendor lside
          // ***********2nd*************
          // **********div hide***********//
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
