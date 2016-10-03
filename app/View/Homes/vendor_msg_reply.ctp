<?php $user_id        = $user_view['UserMaster']['id'];
  
  $msg_id             = base64_decode($this->params['pass'][0]); 

 $msg_queots_id  = $msd_date['ChatMessage']['quote_id'];?>
<div class="col-md-10 col-sm-9 col-xs-12 ruth6542 ruth654786 padd_l_r connt_flex_middle_bdr">
    <div class="col-md-12 col-sm-12 col-xs-12 sr_pv_padding_lr " style="background:#fff;">
        <div class="col-md-12 col-sm-12 col-xs-12 fle_page_haedre ruth1">
            <div class="col-md-3 col-sm-3 col-xs-4 bar321 bar786">
                <div>
                  <img src="<?php echo HTTP_ROOT;?>/img/profile_img/user.png" class="user432">
                  <span class="dashbrd12 prf543">Reply</span>
                </div>
            </div>
            <?php echo $this->Element('mainpage_top_right_ber'); ?>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 padd_l_r">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
        </div>    
        <div class="box box-primary flex_page_tb" style="padding:20px;">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                <div class="container" id="thanks_review">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <fieldset class="form-group">
                      <span style="" class="connt_flex_middle_bdr12">
                        <strong>
                         Vendor Reply :
                        </strong>
                      </span>
                      <textarea rows="6" cols="50" type="text" id="review" class="form-control input_login" 
                            placeholder="Reply to admin..." style="border: 2px solid #2bcdc1 !important;"></textarea>
                      </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <fieldset class="form-group">
                      <span style="" class="connt_flex_middle_bdr12">
                        <strong>
                         Quotes Amount :
                        </strong>
                      </span>  
                      <input type="text" id="quotes_amt" class="form-control input_login" placeholder="Quotes amount"
                         style="border: 2px solid #2bcdc1 !important;">
                      <span class="err" id="err_star">&nbsp;</span>   
                      </fieldset>
                      <button class="btn br_cnch" onclick="reply_submit()" type="submit">Send</button>
                      <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">&nbsp;</div>
                  </div>
                </div>  
            </div>   
          </div>       
        </div>   
    </div>
</div>
<script>

function reply_submit(){
  $('.loader').show();
  var user_id           = "<?php echo $user_id; ?>";
  var msg_queots_id     = "<?php echo $msg_queots_id; ?>";
  var quotes_amt        = $('#quotes_amt').val();
  var message           = $('#review').val();
  var msg_id            = "<?php echo $msg_id; ?>"  

    if(quotes_amt == ""){
        $('#err_star').html('Please fill amount.');            
        $("#quotes_amt").focus();
            return false;
        }else if(quotes_amt != ""){  
          if(isNaN(quotes_amt)){           
            $('#err_star').html('Please enter Quotes amount in digits.');   
            $("#quotes_amt").val('');        
              $("#quotes_amt").focus();
              return false;
          }else{
              $('#err_star').html('&nbsp;');             
          }
       }
        else{
            $('#err_star').html('&nbsp;');             
        }

  $.post("<?php echo Router::url( '/', true ).'Homes/submitReply/'; ?>", {msg_id : msg_id, user_id : user_id , msg_queots_id : msg_queots_id , quotes_amt : quotes_amt, message : message}, function(res){
      if(res){
          $("#thanks_review").html(res);  
          $('.loader').hide();    
      }            
  });   

}
</script>