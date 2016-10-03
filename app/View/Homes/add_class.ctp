<style type="text/css">
  .butt_dollar-br {
    position: relative;
    top: -171px;
    left: 31%;
    background: #30AFA8;
    color: #FFF !important;
    border-radius: 15px;
  }
</style>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr" style="background:#fff;">
        <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
            <div class="col-md-4 col-sm-4 col-xs-4 bar321 bar786">
                <div><i class="fa fa-bars dshclr12" style="display:none;"></i><img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432"><span class="dashbrd12 prf543">Add Class To Catalogue</span></div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 bar321 bar876">
                <div class="pull-right setnote">
                    <i class="fa fa-cog dshclr1"></i>
                    <span class="dashbrd1 grg">Settings</span>
                    <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
                    <span class="dashbrd1 grg">Notification</span>
                     <img src="<?php echo HTTP_ROOT;?>/img/profile_img/testi2.jpg" alt="testimonial image" class="georgeimg">
                    <span class="dropdown1">
                        <span class="dashbrd1 grg1">Ruth George</span>
                        <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
                        <div class="dropdown-content1 logout">
                            <p><a href="#" class="logout_a">Profile</a></p>
                            <p><a href="#" class="logout_a">Change Password</a></p>
                            <p><a href="#" class="logout_a">Logout</a></p>
                        </div>
                    </span>
                    <br>
                    <span class="vendor">Vendor</span>
                </div>
            </div>
        </div>

        <!-- ************work************** -->
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r add_top">
               <section>
                    <?php for ($i=0; $i < 12; $i++) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 padd_l_r add_top1 ">
                            <div class="grid1 gridworkshopsbg1">
                                <div class="view1 view-first">
                                    <div class="index_img">
                                       
                                        <?php echo $this->Html->image('pics9.png', array('alt' => 'CakePHP'));?>
                                        <button class="btn butt_dollar-br">&#8377;320</button>
                                    </div>                 
                                </div>                           
                                <div class="golden_br">
                                    <h4>Cookie Pods Workshop</h4>
                                    <p>PLACE :EAST NAGAR, BNG</p>
                                    <h5>Sat, 15 jan, 7 to 8pm </h5>
                                    <h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </h6>
                                    <button class="btn" tabindex="0">Send Request</button>
                                </div>
                                <div class="add_class">
                                    <p>Request Status:Added To Catalogue</p>
                                </div>                               
                            </div>
                        </div>
                   <?php } ?>
               </section>
        </div>
        <!-- ************work1************** -->
    </div>


    
</div>

 

<script type="text/javascript">
      $(document).ready(function(){
        //alert('najmu');

          $('#organization').hide();
          $('#individual').show(); 

          $("#radio-1").click(function(){
          //alert('najmu');
          //Holds the product ID of the clicked element
          $('#organization').hide();
          $('#individual').show();
        });
        $("#radio-2").click(function(){
          // Holds the product ID of the clicked element
          $('#individual').hide();
          $('#organization').show();
        });        
  $('#datepicker').click(function(){
   
    /* $( "#datepicker").datepicker();*/
    $( "#datepicker" ).datepicker({yearRange:'1900:2030',maxDate:0,changeYear: true, changeMonth: true });

     $( "#datepicker").datepicker("show");
  })
   $('#datepicker').keypress(function(){
     $( "#datepicker" ).datepicker();
     $( "#datepicker" ).datepicker("show");
  });


    $("#file-upload").on('change',function(){
        var a = $(this).val();      
        $('#upload_photo').val(a);
    });

    $("#img_click").on('click',function(){
        $('#file-upload').click();
    });

    $("#file-upload1").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo1').val(a);
    });

    $("#img_click1").on('click',function(){
      $('#file-upload1').click();
    });


    $("#file-upload2").on('change',function(){
        var a = $(this).val();      
        $('#upload_photo2').val(a);
    });

    $("#img_click2").on('click',function(){
        $('#file-upload2').click();
    });

    $("#file-upload3").on('change',function(){
      var a = $(this).val();
    
      $('#upload_photo3').val(a);
    });

    $("#img_click3").on('click',function(){
      $('#file-upload3').click();
    });

  

});


// $(document).ready(function () {
//  alert('hhh');
//     $('#myModal2').dialog({
//         modal: true,
//         autoOpen: false
//     });

//     $('select').change(function () {
//         if ($(this).val() == "1") {
//             $('#myModal2').dialog('open');
//         }
//     });

// });
</script>






