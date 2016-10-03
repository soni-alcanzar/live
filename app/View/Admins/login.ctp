<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Login</title>
 
    <!--Core CSS -->
    <?php echo $this->Html->css('font-awesome'); 
            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('style');
            echo $this->Html->css('style-responsive'); 
			echo $this->Html->css('my-custom'); ?>

</head>

  <style>
  .form-control :focus {
  border-color: #66afe9;
  outline: 0;
  font-font-color:black;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
  </style>

  <body class="login-body bg" style="background-color:#00806E;">

    <div class="container" style="width:70%;">
      <div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div>
      <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6">
        <div class="col-xs-12 col-sm-12" style="background-color: white;">
          <div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div>
          <div class="">&nbsp;</div>
          <div style="" >
              <center>
                <?php echo $this->Html->image('logo.jpg',array('style'=>'','class'=>'img-responsive'));?>
              </center>
          </div>
          <div style="text-align:center;" class="col-xs-12"><h3>Welcome Admin </h3></div>
		
        <div class="login-wrap col-xs-12 col-sm-12">
		      <?php echo $this->Form->create('Admins', array('class'=>'')); ?> 
            <div class=" col-xs-12 col-sm-12">
			        <div><?php echo  $this->Session->flash(); ?></div>  
                 <div class="col-xs-12 col-sm-12" style="margin-bottom:15px;">      
                  <?php echo $this->Form->input('username', array('label' => false,'div'=>false, 'class' => 'form-control focus','placeholder'=>'User name','required'=>true));?> 
                </div>
                  <div class="col-xs-12 col-sm-12" style="margin-bottom:15px;">
				            <?php echo $this->Form->input('password', array('label' => false,'div'=>false, 'class' => 'form-control focus ','placeholder'=>'Password','required'=>true));?> 
                  </div>
            </div>
            <div class="">&nbsp;</div>
            <div class="user-login-info col-xs-12 col-sm-12">
			        <center><input type="submit" name="submit" value="Login" style="width:69x; height:30px; align:center; font-size:16px; background-color:#66ccff">
              <input type="reset" name="Cancel" value="Cancel" style="width:69x; height:30px; align:center; font-size:16px; background-color:#66ccff"></center>
            </div>
            <div class="">&nbsp;</div><div class="">&nbsp;</div><div class="">&nbsp;</div>
          <div class="">&nbsp;</div>
          </form>
        </div>
      </div>
    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <?php 
       
			echo $this->Html->script('jquery');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('jquery.dcjqaccordion.2.7');
			echo $this->Html->script('jquery.nicescroll');
			echo $this->Html->script('scripts');
?>

  </body>
</html>
