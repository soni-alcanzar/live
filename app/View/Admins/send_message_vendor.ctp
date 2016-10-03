<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<section id="main-content">
  <section class="wrapper">
    <div style="padding-top:20px" class="row">
      <div style="" class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i></a></li>
          <li><a href="<?php echo HTTP_ROOT."/Admins/manageQuote";?>">Mennage Catalog Quote</a></li>
          <li>Message Send To Vendor</li>
        </ol>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading pannel-heading-strip"><i class="fa fa-gift"></i>&nbsp; Send Message To Vendor </div>
          <div class="panel-body">
            
                  
              <div class="login-wrap" style="padding:0;margin:0px auto;">
               
                <div style="color:red;text-align:center;">
                  <?php echo  $this->Session->flash(); ?>
                </div>
                 <?php echo $this->Form->create('GetQuote');?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Organization Name</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('organization_name', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit_quote['GetQuote']['organization']
                  ));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Excepted Audience Strength</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('audience_strength', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit_quote['GetQuote']['strength']
                  ));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Host Class Location</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('location', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit_quote['GetQuote']['location']
                  ));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Class Mode</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('class_type', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit_quote['ClassType']['types']
                  ));?>
                </div>
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Date</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('date', array('type'=>'text','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>date('Y-m-d',$edit_quote['GetQuote']['quote_data'])
                  ));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Explain Catalog Need</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('description', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control boxesstyle','value'=>$edit_quote['GetQuote']['explain_catalogue_class']
                  ));?>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 boxesstyle">Admin  Description</div>
                
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <?php echo $this->Form->input('admin_message', array('type'=>'textarea','label' => false,'div'=>false, 'class' => 'form-control boxesstyle'
                  ));?>
                </div>
                
                <center>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px;"><input type="submit" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Send To Vendor">
               <input type="reset" class="btn btn-default savebtn" style="background-color:#AB1A1F;color:#fff; !important;" value="Reset">
                  
                </div></center>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("#point").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  
   

});
</script>
<script>
$(document).ready(function(){
$('#success_msg').delay(5000).fadeOut();
});
$(document).ready(function(){
$('#Manage_Gift_Card').css('background-color','black');
});
</script>