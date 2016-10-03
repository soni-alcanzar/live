<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Find a Workshop Braingroom</title>
     <link rel="shortcut icon" type="image/icon" href="assets/images/favicon-32x32.png"/>
        <!-- The styles -->
	  <!-- Braingroom modifications -->

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
            
        ?>
        <?php 
            echo $this->Html->script('front/jquery-1.11.0.min');
			echo $this->Html->script('front/bootstrap');
			echo $this->Html->script('front/jssor.slider-21.1.mini');
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
          
        ?>
		 <?php echo $scripts_for_layout;?>
      <script>
        $(document).ready(function () {
            
            var jssor_1_options = {
              $AutoPlay: false,
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

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
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

                <?php echo $this->fetch('content'); ?>
          
    </body>
</html>
<script type="text/javascript">

var from = 0, step = 4;

function showNext(list) {
  list
    .find('li').hide().end()
    .find('li:lt(' + (from + step) + '):not(li:lt(' + from + '))')
      .show();
  from += step;
}

function showPrevious(list) {
  from -= step;
  list
    .find('li').hide().end()
    .find('li:lt(' + from + '):not(li:lt(' + (from - step) + '))')
      .show();
}

// show initial set
showNext($('ul'));
setInterval("showNext($('ul'))", 5000);
</script>

