<style>
a:hover{text-decoration: none;}
</style>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 cstm_md9">
        <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
          <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
            <div>
              <img src="<?php echo HTTP_ROOT;?>/img/dashboard1.png" class="user432 img_br786">
              <span class="dashbrd12 prf543">Dashboard</span>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 bar321 bar876">
            <div class="pull-right setnote">
              <i class="fa fa-cog dshclr1"></i>
              <span class="dashbrd1 grg">Settings</span>
              <i class="fa fa-bell dshclr1" aria-hidden="true"></i>
              <span class="dashbrd1 grg">Notification</span>
<?php   
                       $profile_img=$user_view['UserMaster']['profile_image'];
                      
                       $user_type_id=$user_view['UserMaster']['user_type_id'];
                      $user_pic1 = substr($profile_img,0,4);
                         if($user_pic1 == 'http'){ ?>
                           
                       
                          <img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 

<?php } 
   else if($profile_img!='' and $user_type_id==1) {  ?>
<img src="<?php echo HTTP_ROOT;?>/img/Vendor/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 

<?php }elseif($profile_img!='' and $user_type_id==2){  ?>

<img src="<?php echo HTTP_ROOT;?>/img/Buyer/profile/<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
<?php }elseif($profile_img!='' and $user_type_id==''){ ?>

<img src="<?php echo $profile_img; ?>" class="georgeimg prflimg"> 
<?php
}


?>
              <span class="dropdown1">
                <span class="dashbrd1 grg1"><?php echo $user_view['UserMaster']['first_name'];?></span>
                <i class="fa fa-caret-down grg1 dshclr1" aria-hidden="true" id="nti"></i>
               <div class="dropdown-content1 logout">
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile" class="logout_a">Profile</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/changepassword" class="logout_a">Change Password</a></p>
                  <p><a href="<?php echo HTTP_ROOT;?>/Homes/logout" class="logout_a">Logout</a></p>
                </div>
              </span><br>
             <!--<span class="vendor">Vendor</span>-->
            </div>
          </div>
        </div> 
        <!-- ************work************** -->
<?php $user_type_id = $_SESSION['User']['UserMaster']['user_type_id']; ?>

        <div class="col-md-12 col-sm-12 col-xs-12 ruth11 brdprfl" id="work2" style="<?php if($user_type_id==1){
         echo 'display:none'; } else { echo '' ; } ?>">
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center class="my_prfl">
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon1.png" class="prfl123"></div>
                  <div><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile/lern_dash" class="mybg">My Profile</a></div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center class="pst">
                  <div><img src="<?php echo HTTP_ROOT;?>/img/classnearyou.png" class="prfl123"></div>
                  <div class="mybg">Class Near You</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/cataloguefororgnizar.png" class="prfl123"></div>
                  <div class="mybg">
                    <a href="<?php echo HTTP_ROOT;?>/Homes/arrangeClass" class="mybg">
                        Class Catalogue for Organization
                    </a>
                  </div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon4.png" class="prfl123"></div>
                  <div class="mybg">Recommended Class</div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="prfl123"></div>
                  <div>
                    <a href="<?php echo HTTP_ROOT;?>/Homes/myProfile/Booking" class="mybg">Booking History</a>
                  </div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="prfl123"></div>
                  <div>
                    <a href="<?php echo HTTP_ROOT;?>/Homes/myProfile/Wishlist" class="mybg">Wishlist</a>
                  </div>
                </center>  
              </div>  
            </div>
        </div>
        <!-- ************work************** -->
        <!-- ************work1************** -->
        <hr class="dashboard-borderr">
        <div class="col-md-12 col-sm-12 col-xs-12 ruth11" id="work1" style="<?php if($user_type_id==2){
         echo 'display:none'; } else { echo '' ; } ?>">
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon1.png" class="prfl123"></div>
                   <div>
                    <a href="<?php echo HTTP_ROOT;?>/Homes/myProfile" class="mybg">My Profile</a>
                  </div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon2.png" class="prfl123"></div>
                  <div>
                    <a href="<?php echo HTTP_ROOT;?>/vendor_classes/create" class="mybg">Post Class</a>
                  </div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon3.png" class="prfl123"></div>
                  <div> 
                    <a href="<?php echo HTTP_ROOT;?>/Homes/promoteClass" class="mybg">Promote <br> Your Class </a>
                  </div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon4.png" class="prfl123"></div>
                   <div><a href="<?php echo HTTP_ROOT;?>/Homes/addClassCatalog" class="mybg">Add Class<br>To Catalogue</a></div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon5.png" class="prfl123"></div>
                  <div><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile/pastclass" class="mybg">Class History</a></div>
                </center>  
              </div>  
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  br_pad1 prflg12 rad_br">
              <div class="col-md-12 col-sm-12 col-xs-12 prbg prfls123">
                <center>
                  <div><img src="<?php echo HTTP_ROOT;?>/img/vendoricon6.png" class="prfl123"></div>
                  <div ><a href="<?php echo HTTP_ROOT;?>/Homes/myProfile/video" class="mybg">Photo &<br> Video </a></div>
                </center>  
              </div>  
            </div>
        </div>
        <?php echo '<pre>'; print_r('Session'); print_r($this->Session->read('User'));die;?>
<?php /*?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2bcdc1;">

<h4 class="modal-title cat_mod_title">Choose User Type</h4>
</div>
<div class="modal-body">
<div class="">&nbsp;</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<center>
<span class="connet_text_hed" style="color:#2bcdc1"> Do You Want Login as </span>
<p class="connet11" style="color:red" style="display:none;"></p>
</center>    
</div>
<div class="">&nbsp;</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padd_l_r">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="radio pull-right">
<label>
<input type="radio" name="optradio" value="1" id="radio_1">
<span class="connt_flex_middle_text">Vendor
</span>
</label>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="radio pull-left">
<label>
<input type="radio" name="optradio" value="2" id="radio_2">
<span class="connt_flex_middle_text" >Learner
</span>
</label>
</center>
</div>
</div>    
</div>
<div class="">&nbsp;</div>
</div>
<div class="modal-footer" style="border-top:none;">
<center>
<button style="background-color:#2bcdc1;border:none;" type="button" class="btn btn-primary" id="getcat_ids"> Submit </button>
</center>
</div>

      </div>
      
    </div>
  </div>

        <!-- ************work1************** -->
      </div>
    </div>
  </div> 


<script type="text/javascript">
//window.onload = function() {
  //signOut();

//}
</script>

<script>
  $(document).ready(function(){
    
    <?php if($user_view['UserMaster']['user_type_id']==1){?>  

        $('#vndr1').css('background','#00CDC6');
        
        
        $('#buyer1').css('background','#fff');
        $('#buyer1 > p').css('color','#00cdc6');

    <?php }else{ ?>

      $('#work1').hide();
      
    
    <?php } ?>    

  });
</script>

  <script>
<?php if($user_view['UserMaster']['user_type_id']==0){?>
  $(document).ready(function(){
    $('#vndr1').css('background','#00CDC6');
    $('#myModal').modal({
                                show: true,
                                backdrop: 'static',
                                keyboard: false
                            }
                        ); 
$('#getcat_ids').click(function(){
var vendor_id=$('input[name="optradio"]:checked').val();
  if(vendor_id!='1' && vendor_id!='2'){
   $('.connet11').html('Please Select User Type');
  $('.connet11').show();
  return false; 
 }
else{
$('#myModal').modal('hide');
 $('.loader').show();
 var email='<?php echo $user_view['UserMaster']['email'];?>';
 var user_type_id='<?php echo $user_view['UserMaster']['user_type_id'];?>';
   $.ajax({  
                                type: "POST",  
                                url: "<?php echo HTTP_ROOT;?>/Homes/updateUser/"+email+"/"+vendor_id+"/"+user_type_id,  
                                  
                                success: function(output){ 
                                       
                                      $('#myModal').modal('hide'); 
                                     window.location.href = "<?php echo HTTP_ROOT;?>/Homes/dashboard";
                                     $('.loader').hide();
                                  
                                } 
   
                            });
}
});
  });
<?php }?>
  </script>

<script type="text/javascript">
  $(document).ready(function(){

      var page_sct_name = "<?php echo $page_section_name; ?>";
        
        if(page_sct_name == "lern_dash"){

            setTimeout(function(){ 
              $("#vndr").hide();
              $("#buyer").show();  
              $('#work2').show();
              $('#work1').hide();
              $('#vndr1').css('background','#fff');
              $('#vndr1 > p').css('color','#00cdc6');
              $('#vndr1 > p').css('font-family','OS_regular');
              $('#vndr1 > p').css('text-decoration','none');
              $('#buyer1').css('background','#00cdc6');
              $('#buyer1 > p').css('text-decoration','underline');
              $('#buyer1 > p').css('color','#fff');

            }, 1);
       
        }
 });
</script>
<?php */?>