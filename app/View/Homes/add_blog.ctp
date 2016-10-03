<?php $user_id   = $user_view['UserMaster']['id']; ?>
<style type="text/css">
  .butt_dollar-br {
    position: relative;
    top: -171px;
    left: 31%;
    background: #30AFA8;
    color: #FFF !important;
    border-radius: 15px;
  }

  .flexible-fixed-fun {
    color: #FFF;
    background-color: #00CDC6;
    font-family: OS_regular;
    padding: 3px 6px;
    z-index: 1050;
    position: absolute;
    border-radius: 25px;
    top: 9px;
    left: 8px;
    width: 69px;
    height: 28px;
    text-align: center;
    font-size: 13px;
}

.image_price12-fun {
    background-color: #00CDC6;
    margin-top: 10px;
    padding: 3px 6px;
    z-index: 1050;
    text-align: center;
    position: absolute;
    float: right;
    margin-left: 174px;
}
.pull-right-fun {
    float: right !important;
}

/*akash add blog css */

.add_blog_carimg{
  
    position: relative;
    top: -35px;
    left: 93%;
}
.add_blog_carimg img{

    width:15px;
    height:15px; 

}

.add_blog_carimg2{
  
    position: relative;
    top: -50px;
    left: 93%;
}
.add_blog_carimg2 img{

    width:15px;
    height:15px; 

}
.add_blog_img {
position: relative;
right: -82%;
top: -65px;
}
.add_blog_img img {
    border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
}
.add_blog_img img {
    height: 45px;
    width: 18%;
}
#hideimge{
    display:none;
}
.form-control[readonly]{
    background-color: white;

}       
/* akash css end */

</style>

<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786">
    <div class="col-md-12 col-sm-12 col-xs-12 clrdash123 ruth1">
          <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
            <div>
              <i class='fa fa-rss' style='color:#fff;'></i>
              <span class="dashbrd12 prf543">Blog/Feed</span>
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
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r flex_page_tb">
            <?php echo $this->Session->flash(); ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-xs-12 col-sm-12" style="margin-top: 10px; margin-bottom: 10px;">
                    <span class="faq_home01">Add Blog Form</span>
                </div>
                <form action="#" method="post" name="pro_pic" id="pro_pic" enctype="multipart/form-data">
                <div class="col-sm-12 col-xs-12 sr_pv_padding_lr">
                    <div class="col-sm-12 col-xs-12 sr_pv_padding_lr01" style="margin-top: 20px; margin-bottom: 20px;"> 
                        <div class="col-sm-12 col-xs-12 col-md-6"> 
                            <div class="col-sm-12 col-xs-12 sr_remove_pad" style="">
                                <div class="form-group" style="margin-bottom: 5px;">
                                    <select  class="form-control reg_input" name="category_id" id="category_id" onchange="show_subcat(this.value);">
                                        <option value="0">Choose Class Category</option>
                                         <?php foreach ($cat_data as  $value) { ?>
                                            <option value="<?php echo $value['Category']['id']; ?>">
                                                <?php  echo $value['Category']['category_name']; ?>
                                            </option>
                                         <?php } ?>   
                                    </select>
                                    <script type="text/javascript">
                                           function show_subcat(cat_id){
                                                $.ajax({
                                                  method: "POST",
                                                  url: 'addBlogFindSegment',
                                                  data: 'cat_id='+cat_id
                                                })
                                                  .done(function(states) {
                                                    $('#segment_id').html(states); 
                                                });
                                            }
                                    </script>                  
                                    <span class="add_blog_carimg">
                                        <img src="<?php echo HTTP_ROOT; ?>/img/caret.png">
                                    </span>
                                    <span id="err_category_id">&nbsp;</span>            
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 sr_remove_pad">
                                <div class="form-group br_state" style="margin-bottom: 10px;">
                                    <input class="form-control reg_input" name="blog_topic" placeholder="Blog Topic" type="text" id="blog_topic"> 
                                    <span id="err_blog_topic">&nbsp;</span>    
                                </div> 
                            </div>
                            <div class="col-sm-12 col-xs-12 sr_remove_pad">
                                <input type="text" class="form-control  reg_input" id="docs_upload"  placeholder="Upload your image" readonly>        
                                <span class="add_blog_img">
                                    <img onclick="ClickUpload();" style="margin-top: 20px;" id="img_click1" src="<?php echo HTTP_ROOT; ?>/img/browse.png">
                                </span>                     
                                <span id="err_blog_image">&nbsp;</span>   
                            </div> 
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-6">
                            <div class="col-sm-12 col-xs-12 sr_remove_pad" id="sub_cat_id">
                                <div class="form-group">
                                    <div class="form-group">
                                        <select  class="form-control reg_input" name="segment_id" id="segment_id">
                                            <option value="0">Select Class Segments</option>                                     
                                        </select>
                                        <span id="err_segment_id">&nbsp;</span>             
                                        <span class="add_blog_carimg">
                                            <img src="<?php echo HTTP_ROOT; ?>/img/caret.png">
                                        </span>
                                    </div> 
                                </div>
                            </div>
                            <div style="margin-top: 0px;" class="col-sm-12 col-xs-12">
                                <div style="margin-bottom: 5px;" class="form-group">
                                    <textarea id="blog_summary" placeholder="Blog Description" class="form-control pc_texta reg_input" name="blog_summary" row="5" type="text"></textarea>
                                    <span id="err_blog_summary">&nbsp;</span>    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <button onclick="docsupload();" class="btn btn-primary pc_sub_class" type="button">Add Blog</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
</div>
<div class="modal fade" id="file_size">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2bcdc1;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title cat_mod_title">Error Message</h4>
            </div>
            <div class="modal-body">
                <div class="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <span class="connet_text_hed" style="color:#2bcdc1">
                          Please choose less than 2 mb file!
                        </span>
                    </center>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none;">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="file_success_msg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2bcdc1;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title cat_mod_title">Success Message</h4>
            </div>
            <div class="modal-body">
                <div class="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <span class="connet_text_hed" style="color:#2bcdc1">
                          Your Blog has been added Successfully. 
                        </span>
                    </center>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none;">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="file_success_error">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2bcdc1;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title cat_mod_title">Success Message</h4>
            </div>
            <div class="modal-body">
                <div class="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <span class="connet_text_hed" style="color:#2bcdc1">
                          There is some network issue. Please try again to add blog. 
                        </span>
                    </center>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none;">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="file_type">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2bcdc1;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title cat_mod_title">Error Message</h4>
            </div>
            <div class="modal-body">
                <div class="">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <span class="connet_text_hed" style="color:#2bcdc1">
                            Please choose .png , .jpg , .jpeg type file only!   
                        </span>
                    </center>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none;">
            </div>
        </div>
    </div>
</div>
<div id="hideimge">
    <input type="file" name="FileUpload" id="FileUpload" class="uploadbox"/>
    <input type="text" name="user_id"  value="<?php echo $user_id; ?>"/>
</div>
</form>
<script>
    function ClickUpload() {   
        $("#FileUpload").trigger('click');
    }
</script>
<script>

    jQuery('.uploadbox').change(function() {
          
            var fp = $(".uploadbox");
            var lg = fp[0]
            .files.length; // get length
            var items = fp[0].files;
            var fileName = items[0].name;
            var fileSize = items[0].size; // get file size 
            var fileType = items[0].type;
            var res     = fileName.split(".");
            var filext  = res[1];

            $('#docs_upload').val(fileName);
            $('#docs_upload').focus();

            if(fileSize > 2097152){
               $('#file_size').modal('show');
            }
            if(filext != 'png' && filext != 'jpeg' && filext != 'jpg'){
                $('#file_type').modal('show');
            }
    });
</script>
<script>    
    
    function docsupload(){   
        var category_id            =   $('#category_id').val();
        var segment_id             =   $('#segment_id').val(); 
        var blog_topic             =   $('#blog_topic').val();
        var blog_summary           =   $('#blog_summary').val();
        var blog_image             =   $('#docs_upload').val(); 
        
        if(category_id == 0){
            $('#err_category_id').html('Please Select the Category.');            
            $("#category_id").focus();
            return false;
        }else{
            $('#err_category_id').html('&nbsp;');             
        }

        if(segment_id == 0){
            $('#err_segment_id').html('Please Select the Segment.');            
            $("#segment_id").focus();
            return false;
        }else{
            $('#err_segment_id').html('&nbsp;');             
        }

        if(blog_topic == ""){
            $('#err_blog_topic').html('Please enter the Blog Name.');            
            $("#blog_topic").focus();
            return false;
        }else{
            $('#err_blog_topic').html('&nbsp;');             
        }

         if(blog_summary == ""){
            $('#err_blog_summary').html('Please enter the Blog Description.');            
            $("#blog_summary").focus();
            return false;
        }else{
            $('#err_blog_summary').html('&nbsp;');             
        }
        
        if(blog_image == ""){
            $('#err_blog_image').html('Please enter the file.');            
            $("#blog_image").focus();
            return false;
        }else{
            $('#err_blog_image').html('&nbsp;');             
        }

        var formData = $(this).serializeArray();        
        var WEBURL   ="<?php echo Router::url( '/', true ).'Homes/submitBlog/'; ?>";
            
            $.ajax({ 
               type: 'POST',
               url: WEBURL,
               data: new FormData($('#pro_pic')[0]),
               processData: false,
               contentType: false,  
               success: function(res){              
                  if(res == 1){    
                     //  alert(res);               
                       $('#file_success_msg').modal('show'); 
                    
                    }else{

                        $('#file_success_error').modal('show');
                    }
                }, 
                 
            });
            return false;
    }
</script>
<!-- file upload  -->
 








