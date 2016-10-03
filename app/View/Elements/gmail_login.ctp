<meta name="google-signin-client_id" content="575882101854-0ufa7rfmem6vp0n0q72cj2k240phc7tk.apps.googleusercontent.com">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<script>

    function onSuccess(googleUser) {
            var first='<?php echo $this->params->pass[0];?>';
            var secound='<?php echo $this->params->pass[1];?>';
            var third='<?php echo $this->params->pass[2];?>';
            var url='<?php echo HTTP_ROOT;?>/Homes/gmailSave';
           var profile = googleUser.getBasicProfile();
        gapi.client.load('plus', 'v1', function () {
            var request = gapi.client.plus.people.get({
                'userId': 'me'
            });
           
            request.execute(function (resp) {
                 
                var g_name         = resp.name.givenName;
                var g_id           = resp.id;
                var g_gender       = resp.gender;
                var g_email        = resp.emails[0].value;
                var g_profile_img  = resp.image.url;
                var user_id=0;
                var vendor_id=0;
                var status=1;
                 if(document.getElementById("checkbox").checked == false){
                  $('#error5').html('Please check the Term And Condition.');
                  $('#error5').css('color','red');
                  $('#error1').html('&nbsp;');
                  $('#error5').show();
                 return false;
                  }
                  else{

                 $('.loader').show();
                   
                            $.ajax({  
                                type: "POST",  
                                url: url,  
                                data: 'social_network_id='+g_id +'&first_name='+g_name+'&email='+g_email+'&username='+g_email+'&gender='+g_gender+'&profile_image='+g_profile_img+'&user_type_id='+user_id+'&vendor_type_id='+vendor_id+'&vendor_type_id='+vendor_id,  
                                success: function(gmail_repons){
                                      //alert(gmail_repons);
                                      data=gmail_repons.trim();
                                      
                                      signOut();
                                    if(data==1){
                        
                        if(third=='quote'){
                         
                        window.location.href = "<?php echo HTTP_ROOT;?>/Homes/CatalougeClassDetail/"+first+"/"+secound+"/"+third;
                        }
                        else{
                      
                        window.location.href = "<?php echo HTTP_ROOT;?>/Homes/dashboard";
                    }
                    }else if(data ==2){
                        
                       
                       
                        $('#response_msg').html('<div class="alert alert-danger">Your account has been Blocked yet. Please Contact Braingroom Admin.</div>');
                    }
                                    
                                  
                                } 
   
                            });
                      }
                        
                   
            });
        });
    }

 
    function onFailure(error) {
        alert(error);
    }



    function renderButton() {
        gapi.signin2.render('gSignIn', {
            'scope': 'profile email',
            'width': 171,
            'height': 37,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSuccess,
            'onfailure': onFailure
        });
   
}
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            $('.userContent').html('');
            $('#gSignIn').slideDown('slow');
        });
    }
</script>
