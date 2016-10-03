<?php 

  $user_id   = $user_view['UserMaster']['id'];

?>
<style>
.review_star i{
  font-size: 50px;
  color:#2bcdc1;
  margin-right: 10px;
}
</style>
<div class="">&nbsp;</div>
<div class="">&nbsp;</div>
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
    <div class="">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  padd_l_r connt_flex_middle_bdr">      
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  fle_page_haedre">
              <span class="connet_text_hed">
                Customer Review Form
              </span>
          </div>   
          <div class="hidden-xs hidden-sm">&nbsp;</div>
          <div class="">&nbsp;</div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                <div class="container" id="thanks_review">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <span style="" class="connt_flex_middle_bdr12">
                      <strong>
                        Rate this class : 
                      </strong>
                    </span>
                    <span class="review_star">
                      <?php for($i=1; $i<6; $i++){ ?>
                        <i class="fa fa-star-o" style="cursor:pointer;" aria-hidden="true" onclick="get_count('<?php echo $i; ?>');" id="empty_star_<?php echo $i;?>">
                        </i>
                      <?php } ?>
                    </span>
                    <br>
                    <span class="err" id="err_star">&nbsp;</span>  
                  </div>

                  <div class="hidden-xs hidden-sm">&nbsp;</div>
                  <div class="">&nbsp;</div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <fieldset class="form-group">
                      <span style="" class="connt_flex_middle_bdr12">
                        <strong>
                          Write your review :
                        </strong>
                      </span>
                      <textarea rows="6" cols="50" type="text" id="review" class="form-control input_login" 
                            placeholder="Add a review..." style="border: 2px solid #2bcdc1 !important;"></textarea>
                      </fieldset>
                  </div>
                  <div class="modal-footer" style="border-top:none;">
                    <button style="background-color:#2bcdc1;border:none;" type="button" class="btn btn-primary" onclick="review_submit()">Submit</button>
                  </div>  
                </div>  
            </div>   
          </div>
        </div>
    </div>
    <input type="hidden" id="star_count" value="">
    <div class="">&nbsp;</div>
    <div class="">&nbsp;</div>
</div>
<div class="modal fade" id="err_msg1">
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
                            You registered as Learner profile , you don't have permission to add activity request.     
                        </span>
                    </center>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none;">
            </div>
        </div>
    </div>
</div>
<script>
  function get_count(id){
    
    var chech_star = $('#empty_star_'+id).attr('class');

    if(chech_star == 'fa fa-star'){
        for(var i=1;i<6;i++){
           $('#empty_star_'+i)[0].className = ''; 
           $('#empty_star_'+i).addClass('fa fa-star-o');
        }
        for(var i=0;i<id;i++){
          var ids = i+1;
          $('#empty_star_'+ids)[0].className = '';
          $('#empty_star_'+ids).addClass('fa fa-star');
        }
    }else{
        for(var i=0;i<id;i++){
          var ids = i+1;
          $('#empty_star_'+ids)[0].className = '';
          $('#empty_star_'+ids).addClass('fa fa-star');
        }
      
    }
   $('#star_count').val(id); 

  }

function review_submit(){

  var user_id     = "<?php echo $user_id; ?>";
  var class_id    = "<?php echo $class_id; ?>";
  
  var rating_star = $('#star_count').val();
  var review      = $('#review').val();

   if(rating_star == ""){
      $('#err_star').html('Please Rate this class.');            
      $(".review_star").focus();    
          return false;
    }else{
        $('#err_star').html('&nbsp;');             
    }
     
  $.post("<?php echo Router::url( '/', true ).'Homes/submitreview/'; ?>", { user_id : user_id , class_id : class_id , review : review,rating_star : rating_star}, function(res){
      if(res){
         $("#thanks_review").html(res);      
      }            
  });   

}

</script>



