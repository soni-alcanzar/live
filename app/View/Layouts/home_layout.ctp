<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <title><?php echo  $title_for_layout; ?></title>
        <link rel="shortcut icon" type="image/icon" href="logo.png"/>
        <!-- The styles -->
	      <?php 
            echo $this->Html->css('font-awesome'); 
            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('style');
            echo $this->Html->css('style-responsive'); 
			      echo $this->Html->css('my-custom'); 	
        ?>
        <?php 
            echo $this->Html->script('jquery');
            echo $this->Html->script('bootstrap.min');
            echo $this->Html->script('jquery.dcjqaccordion.2.7');
            echo $this->Html->script('jquery.nicescroll');
            echo $this->Html->script('scripts');
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
         <!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"po+Kn1QolK104B", domain:"braingroom.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=po+Kn1QolK104B" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
    </head>
    <body>
        <?php  echo $this->Element('admin_header');?>
        <div class="container-fluid" style="padding:0px;">
            <div class="row-fluid">
		            <?php echo $this->Element('admin_sidebar');?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
	      <?php  echo $this->Element('admin_footer');?>

        
    </body>
</html>
