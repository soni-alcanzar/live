<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">

        <title><?php echo  $title_for_layout; ?></title>
        <!-- The styles -->
	      <?php 
            echo $this->Html->css('backend/font-awesome'); 
            echo $this->Html->css('backend/bootstrap.min');
            echo $this->Html->css('backend/style');
            echo $this->Html->css('backend/style-responsive'); 
			echo $this->Html->css('backend/my-custom'); 
            echo $this->Html->css('backend/jquery.multiselect');
            
            
            echo $this->Html->script('backend/jquery.min');
        ?>
        <?php 
            
            echo $this->Html->script('backend/jquery');
            echo $this->Html->script('backend/bootstrap.min');
            echo $this->Html->script('backend/jquery.dcjqaccordion.2.7');
            echo $this->Html->script('backend/jquery.nicescroll');
            echo $this->Html->script('backend/scripts');
            echo $this->Html->script('backend/jquery.multiselect'); ?>
       
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
