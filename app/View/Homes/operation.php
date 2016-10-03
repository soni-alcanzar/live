<?php

class Operation {

    public function validate($first_name, $last_name, $email, $contact, $social_media_id, $dob, $password) {

        $check = true;

        if ($first_name != '') {

            if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
                $nameErr = 'notmatch';
                $check = false;
                return $nameErr;
            }
        } else {
            $nameErr = 'blank';
            $check = false;
            return $nameErr;
        }
        if ($last_name != '') {

            if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
                $nameErr = 'notmatch';
                $check = false;
                return $nameErr;
            }
        } else {
            $nameErr = 'blank';
            $check = false;
            return $nameErr;
        }



        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'invalidmail';
            $check = false;
            return $emailErr;
        }

        if (strlen($contact) != 10 || !is_numeric($contact)) {
            $contactErr = 'invalidmobile';
            $check = false;
            return $contactErr;
        }

        $age = date_diff(date_create($dob), date_create('today'))->y;

        if ($age <= 13 || $age >= 100) {
            $ageErr = 'invalidage';
            $check = false;
            return $ageErr;
        }

        if ($password == '') {
            $passErr = 'blankPassword';
            $check = false;
            return $passErr;
        }

        if ($check) {
            return true;
        }
    }

    function sendMail($mailFor, $mail = NULL, $activationCode = NULL) {
        switch ($mailFor) {
            case 'signup' :
                $sendgrid = new SendGrid('skillgrok2014', '$ki11@Grok');
                $email = new SendGrid\Email();
                $email->addTo($mail)->addTo('')->setFrom('info@miimulu.com')->setSubject('miimulu | Registration Verification Mail')->setText('!')->setHtml('
            <html>
                <head><title></title></head>
                <body>
	                    
    background-repeat: no-repeat;
    height: 500px;
    margin-left: 20%;width: 100%;padding: 0px;">
	<div style="width: 143px;
    height: 69px;
    background-color: #F94246;
  
    position: relative;
    left: 50%;
  
    top: 44px;
    border-radius: 15px 0px 0px 16px;
   
    margin-right: 16px;"><p style="color: #fff;
    font-size: 30px;
    position: relative;
    top: 19%;
    left: 25%;
    font-weight: bold;">50$</p></div>
  	<img src="162.243.205.148/gifting_app/logo.png" style="margin-left: 23%;position: relative;
    top: -69px;">
    <div style="background-color:#F94246;
    height: 150px;
    width: 61%;
    opacity: 0.8;
    position: relative;
    bottom: 40px;">
    	<div style="position: relative;
    top: 8px;">
	    	<img src="162.243.205.148/gifting_app/line.png">
	    	<div style=" background-color: #fff;
    height: 90px;
    position: relative;"><p style="color: #D9444D;
	    text-align: center;
	    font-size: 34px;">Amazon Gift Card</p><p style="color: #616162;
    font-size: 22px;
    text-align: center;
    position: relative;
    top: -15px;">Card Value: 215</p></div>
	    	<img src="162.243.205.148/gifting_app/line.png">
	    </div>
    </div>       
                </body>
            </html>');
                $sendgrid->send($email);
                break;
            case 'send_gift' :
                $data = json_decode($activationCode, true);
                //print_r($data['img_path']);die;
                // print_r($data['name_to']);die;
                $sendgrid = new SendGrid('skillgrok2014', '$ki11@Grok');
                $email = new SendGrid\Email();

                $email->addTo($data['email_to'])->addTo('')->setFrom($data['email_from'])->setSubject('gifties | Send Gift To  ' . $data['name_to'])->setText('!')->setHtml('
           <html>
                <head><title></title>
                <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </head>
                <body>
		<div class="" style="width:100%!important;height:100%!important;background-color:white!important;">
		<center>	
			<div class="bdr" style=" background: url(162.243.205.148/gifting_app/background.jpg) no-repeat ; width: 80%; height:100%;">
				<div class="" style="width:80%;position:absolute">
					<center>
						<img src="162.243.205.148/gifting_app/logo.png" style="width:20%!important;">
					</center>
				</div>
				<div class="" style="width:20%; float:right; background-color:red;position:relative;border-radius: 10px 0 0 10px;margin-top: -210px;">
					<span>
						<center style="color: white; display: block!important; padding: 14%!important; font-size: 16px!important;">' . $data['card_value'] . ' $</center>
					</span>
				</div>
				<!--  <div style="margin-top: 35%; "> -->
				 <div style="margin-top: 15%; ">
					<div class="" style="">
						<span style=" ">
							<img src="162.243.205.148/gifting_app/gift_card.png" style="width: 100%!important;">
						</span>
					</div>
					<div class="" style="background:white">
						<span style="">
							<center style="color:red!important; font-size:24px!important;margin-top: -4px !important;">
								' . $data['card_name'] . ' Gift Card
							</center>
							<br/>
							<center style="color:gray!important; font-size:16px!important; padding-bottom: 10px!important;">
								Card Code :' . $data['card_code_to'] . '
							</center>
						</span>
					</div>

					<div class="" style="">
						<span style=" ">
							<img src="162.243.205.148/gifting_app/gift_card.png" style="width: 100%!important;">
						</span>
					</div>
				</div> 
			</div>
		</center>
		</div>
	</body>
            	</html>');
                $sendgrid->send($email);
                break;
            case 'forgot_password' :

                $sendgrid = new SendGrid('skillgrok2014', '$ki11@Grok');
                $email = new SendGrid\Email();
                $email->addTo($mail)->addTo('')->setFrom('info@gifties.com')->setSubject('gifties | Forgot Password Mail')->setText('!')->setHtml('
            <html>
                <head><title></title></head>
                <body>
                    <div style="border-radius: 6px;background-color: rgba(255,255,255,0.3);padding: 10px;width: 81%;margin-left:20px;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        <p>
                            <span style="font-size:20px;font-weight:bold;color:#6397cb;line-height:110%">Lost Password Request</span><br>
                            <span style="font-size:14px;color:#666666;font-style:italic"></span>
                        </p>
                        <p>We received a lost password request from for your account on gifties.</p>
                        <p>Your Password is  : </p>
                        <p>' . $activationCode . '</p>
                        <hr style="border:0;border-top:1px solid #d7d7d7;min-height:0">
                        <p>If you have any problems, or believe you have received this in error, please contact us.</p>
                        <p></p>
                        </div>        
                	</body>
            	</html>');
                $sendgrid->send($email);
        }
    }

    public function GenerateOTP($con) {

        $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 7);
        $sql = "SELECT * from accounts where otp='" . $otp . "'";
        $result = $con->query($sql);
//       echo $number_of_rows = $result->num_rows; exit;
        if ($result->num_rows > 0) {

            $this->GenerateOTP();
        } else {

            return $otp;
        }
    }

    public function addUser($first_name, $last_name, $email, $contact, $social_media_id, $dob, $password, $con) {

        if ($social_media_id != '') {

            $sql = "SELECT * from accounts where email='" . $email . "'";
            $result = $con->query($sql);
            $modify_date = time();
            if ($result->num_rows == 0) {
                //get otp
                $otp = $this->GenerateOTP($con);
                
                 //sms api code for otp
                            // Authorisation details.
                            // Authorisation details.
                            $username = "alcanzartesting@gmail.com";
                            $hash = "e2630b99fd7fd42c0b3e2cb48013dbde79b277c1";

                            // Config variables. Consult http://api.textlocal.in/docs for more info.
                            //test: Set this field to true to enable test mode, no messages will be sent and your credit balance will be unaffected. If not provided defaults to false
                            $test = "0";
                            // Data for text message. This is the text message data.
                            $sender = "TXTLCL"; // This is who the message appears to be from.
                            $numbers = "$contact"; // A single number or a comma-seperated list of numbers
                            $message = "$otp is your Giftis verification code";
                            // 612 chars or less
                            // A single number or a comma-seperated list of numbers
                            $message = urlencode($message);
                            $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
                            $ch = curl_init('http://api.textlocal.in/send/?');
                            curl_setopt($ch, CURLOPT_POST, true);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $response = curl_exec($ch); // This is the result from the API
                            curl_close($ch);
                            
                            
                            $msg_results = json_decode($response, true);

                            
                            $status = $msg_results['status'];
                
                if($status=='success'){
                
                $content_msg = $msg_results['message']['content'];
                $recipient = $msg_results['messages'][0]['recipient'];
                $status = $msg_results['status'];
                
                
                $query = "insert into accounts(first_name,last_name,email,mobile_number,date_of_birth,social_media_id,modify_date,otp) values('" . $first_name . "','" . $last_name . "','" . $email . "','" . $contact . "','" . $dob . "','" . $social_media_id . "','" . $modify_date . "','" . $otp . "')";
                $res = mysqli_query($con, $query)or die('' . mysqli_error());
                
                
                
                    
                   if ($res) {

                    $accessToken = md5(microtime() . rand());
                    $refreshToken = md5(microtime() . rand());

                    $id = mysqli_insert_id($con);

                    if ($id != '') {
                        $accessExpires = date('y/m/d h:i:s', strtotime('+2 days'));
                        $createAt = date('y/m/d h:i:s');

                        $query = "INSERT INTO accountdeveloper(account_id,access_token,refresh_token,access_expires,createAt)values(" . $id . ",'" . $accessToken . "','" . $refreshToken . "','" . $accessExpires . "','" . $createAt . "')";
                        $result = mysqli_query($con, $query)or die('' . mysqli_error());
                        if ($result) {
                            $query = "select * from accountdeveloper where account_id=" . $id . "";
                            $res = mysqli_query($con, $query)or die('' . mysqli_error());



                           


                            while ($row = mysqli_fetch_assoc($res)) {
                                $data = json_encode(
                                        array(
                                            'success' => 'true',
                                            'data' => array(
									'access_token'=>$row['access_token'],
									'refresh_token'=>$row['refresh_token'],
									'access_expires'=>$row['access_expires'],
                                                'warning_msg' => $content_msg,
                                                'errors_msg' => $recipient,
                                                'status' => $status,
                                                'res_msg' => 'You are registered with us.verification code sent Successfully on registerd mobile number.',
									'id'=>$id,
									'first_name'=>$first_name,
									'email'=>$email,
									'mobile_number'=>$contact,
                                            )
                                        )
                                );
                                echo $data;
                                break;
                            }
                        }
                    }
                } 
                    
                    
                }else{
                    
                            $warning_msg = $msg_results['warnings'][0]['message'];
                            $errors_msg = $msg_results['errors'][0]['message'];
                            $status = $msg_results['status'];
                
                    
                                $data = json_encode(
                                        array(
                                            'success' => 'false',
                                            'data' => array(
//									'access_token'=>$row['access_token'],
//									'refresh_token'=>$row['refresh_token'],
//									'access_expires'=>$row['access_expires'],
                                                'warning_msg' => $warning_msg,
                                                'errors_msg' => $errors_msg,
                                                'status' => $status,
                                                'res_msg' => 'You are not registered with us.verification code Not sent.'
//									'id'=>$id,
//									'first_name'=>$first_name,
//									'email'=>$email,
//									'mobile_number'=>$contact,
                                            )
                                        )
                                );
                                echo $data;
                                exit;
                          
                    
                    
                    
                }
                
                
            } else {

                $sql = "update accounts set social_media_id='" . $social_media_id . "' where email='" . $email . "'";

                $result = mysqli_query($con, $sql)or die('' . mysqli_error());

                if ($result) {
                    $qu1 = "select id from accounts where email='" . $email . "' and social_media_id='" . $social_media_id . "'";
                    $res = mysqli_query($con, $qu1)or die('' . mysqli_error());
                    $num = mysqli_num_rows($res);

                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                    }


                    $query = "select * from accountdeveloper where account_id=" . $id . "";
                    $res = mysqli_query($con, $query)or die('' . mysqli_error());
                    while ($row = mysqli_fetch_assoc($res)) {
                        $data = json_encode(
                                array(
                                    'success' => 'true',
                                    'data' => array(
                                        'access_token' => $row['access_token'],
                                        'refresh_token' => $row['refresh_token'],
                                        'access_expires' => $row['access_expires'],
                                        'res_msg' => 'Record Saved Successfully',
                                        'id' => $id,
                                        'first_name' => $first_name,
                                        'email' => $email,
                                        'mobile_number' => $contact,
                                    )
                                )
                        );
                        echo $data;
                        break;
                    }
                }
            }
        } else {


            $sql = "SELECT * from accounts where email='" . $email . "'";

            $result = $con->query($sql);
            if ($result->num_rows == 0) {
                $modify_date = time();
//            echo 'hjjhdfjklvvjk'; 
                //get otp
                $otp = $this->GenerateOTP($con);
                
                                            //sms api code for otp
                            // Authorisation details.
                            // Authorisation details.
                            $username = "alcanzartesting@gmail.com";
                            $hash = "e2630b99fd7fd42c0b3e2cb48013dbde79b277c1";

                            // Config variables. Consult http://api.textlocal.in/docs for more info.
                            //test: Set this field to true to enable test mode, no messages will be sent and your credit balance will be unaffected. If not provided defaults to false
                            $test = "0";
                            // Data for text message. This is the text message data.
                            $sender = "TXTLCL"; // This is who the message appears to be from.
                            $numbers = "$contact"; // A single number or a comma-seperated list of numbers
                            $message = "$otp is your Giftis verification code";
                            // 612 chars or less
                            // A single number or a comma-seperated list of numbers
                            $message = urlencode($message);
                            $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers;
                            $ch = curl_init('http://api.textlocal.in/send/?');
                            curl_setopt($ch, CURLOPT_POST, true);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $response = curl_exec($ch); // This is the result from the API
                            curl_close($ch);

                            
                            $msg_results = json_decode($response, true);
//                            print_r(json_decode($response,true)); exit;
                            
                            
                            $status = $msg_results['status'];
                            
                if($status=='success'){
                    
//                    echo 'hjsdcjhcdskjcsjkl';
                $content_msg = $msg_results['message']['content'];
                $recipient = $msg_results['messages'][0]['recipient'];
                $status = $msg_results['status'];
                
                $query = "insert into accounts(first_name,last_name,email,mobile_number,date_of_birth,social_media_id,password,modify_date,otp) values('" . $first_name . "','" . $last_name . "','" . $email . "','" . $contact . "','" . $dob . "','" . $social_media_id . "','" . md5($password) . "','" . $modify_date . "','" . $otp . "')";
                $res = mysqli_query($con, $query)or die('' . mysqli_error());
                
                    
                    if ($res) {

                    $accessToken = md5(microtime() . rand());
                    $refreshToken = md5(microtime() . rand());

                    $id = mysqli_insert_id($con);

                    if ($id != '') {
                        $accessExpires = date('y/m/d h:i:s', strtotime('+2 days'));
                        $createAt = date('y/m/d h:i:s');

                        $query = "INSERT INTO accountdeveloper(account_id,access_token,refresh_token,access_expires,createAt)values(" . $id . ",'" . $accessToken . "','" . $refreshToken . "','" . $accessExpires . "','" . $createAt . "')";
                        $result = mysqli_query($con, $query)or die('' . mysqli_error());
                        if ($result) {
                            $query = "select * from accountdeveloper where account_id=" . $id . "";
                            $res = mysqli_query($con, $query)or die('' . mysqli_error());



                            while ($row = mysqli_fetch_assoc($res)) {
                                $data = json_encode(
                                        array(
                                            'success' => 'true',
                                            'data' => array(
									'access_token'=>$row['access_token'],
									'refresh_token'=>$row['refresh_token'],
									'access_expires'=>$row['access_expires'],
                                                'warning_msg' => $content_msg,
                                                'errors_msg' => $recipient,
                                                'status' => $status,
                                                'res_msg' => 'You are  registered with us.verification code sent Successfully on registerd mobile number.',
									'id'=>$id,
									'first_name'=>$first_name,
									'email'=>$email,
									'mobile_number'=>$contact,
                                            )
                                        )
                                );
                                echo $data;
                                break;
                            }
                        }
                    }
                }
                    
                }else{
                                $warning_msg = $msg_results['warnings'][0]['message'];
                                $errors_msg = $msg_results['errors'][0]['message'];
                                $status = $msg_results['status'];
                    
                    
                                $data = json_encode(
                                        array(
                                            'success' => 'false',
                                            'data' => array(
//									'access_token'=>$row['access_token'],
//									'refresh_token'=>$row['refresh_token'],
//									'access_expires'=>$row['access_expires'],
                                                'warning_msg' => $warning_msg,
                                                'errors_msg' => $errors_msg,
                                                'status' => $status,
                                                'res_msg' => 'You are not registered with us.verification code Not sent',
//									'id'=>$id,
//									'first_name'=>$first_name,
//									'email'=>$email,
//									'mobile_number'=>$contact,
                                            )
                                        )
                                );
                                echo $data;
                               exit;
                           
                    
                    
                }
                
                
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $password = $row['password'];
                }

                $data = json_encode(
                        array(
                            'success' => 'false',
                            'data' => array(
                                'msg' => 'Email Already Exists'
                            )
                        )
                );
                echo $data;
            }
        }
    }

    public function verificationotp($otp,$con) {
        
        $sql = "SELECT otp,verification from accounts where otp='" . $otp . "'";
        $result = mysqli_query($con, $sql)or die('' . mysqli_error());
        $userdata =  mysqli_fetch_assoc($result);
//        print_r($userdata); exit;
        if($userdata['otp']==$otp){
            
            $sql = "update accounts set verification='1' where otp='" . $otp . "'";
            $result = mysqli_query($con, $sql)or die('' . mysqli_error());
            if ($result) {
                
                $dataArray['res_code'] = "1";
                $dataArray['res_msg'] = "Account verification successful. ";
                
            }else{
                
                $dataArray['res_code'] = "0";
                $dataArray['res_msg'] = "Wrong verification code. ";
                
            }
            
        }
        echo json_encode($dataArray);
        
    }

    public function facebookLogin($social, $con) {

        $query = "Select * from accounts where social_media_id='" . $social . "'";

        $res = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($res);

        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $verification = $row['verification'];
        }
        if ($verification == 2) {

            $data = json_encode(
                    array(
                        'success' => 'false',
                        'res_msg' => 'Please verify your account.',
                    )
            );
            echo $data;
            exit;
        } else {

            if ($num >= 1) {
                if ($id != '') {

                    $accessToken = md5(microtime() . rand());
                    $refreshToken = md5(microtime() . rand());

                    $check = $this->checkTokens($accessToken, $con);  // check token is valid or not

                    if ($check !== true) {
                        $accessExpires = date('y/m/d h:i:s', strtotime('+2 days'));
                        $createAt = date('y/m/d h:i:s');

                        $query = "insert into accountdeveloper(account_id,access_token,refresh_token,access_expires,createAt)values(" . $id . ",'" . $accessToken . "','" . $refreshToken . "','" . $accessExpires . "','" . $createAt . "')";
                        $result = mysqli_query($con, $query)or die('' . mysqli_error());
                        if ($result) {
                            return $id;
                        }
                    }
                }
            } else {

                $userErr = "notmatch";
                return $userErr;
            }
        }
    }

    public function userLogin($email, $password, $con) {

        $query = "Select * from accounts where email='" . $email . "' and password='" . md5($password) . "'";

        $res = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($res);

        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $verification = $row['verification'];
        }

        if ($verification == 2) {

            $data = json_encode(
                    array(
                        'success' => 'false',
                        'res_msg' => 'Please verify your account.',
                    )
            );
            echo $data;
            exit;
        } else {

            if ($num >= 1) {
                if ($id != '') {

                    $accessToken = md5(microtime() . rand());
                    $refreshToken = md5(microtime() . rand());

                    $check = $this->checkTokens($accessToken, $con);  // check token is valid or not

                    if ($check !== true) {
                        $accessExpires = date('y/m/d h:i:s', strtotime('+2 days'));
                        $createAt = date('y/m/d h:i:s');

                        $query = "insert into accountdeveloper(account_id,access_token,refresh_token,access_expires,createAt)values(" . $id . ",'" . $accessToken . "','" . $refreshToken . "','" . $accessExpires . "','" . $createAt . "')";
                        $result = mysqli_query($con, $query)or die('' . mysqli_error());
                        if ($result) {
                            return $id;
                        }
                    }
                }
            } else {

                $userErr = "notmatch";
                return $userErr;
            }
        }
    }

    // check header from request
    public function checkHeader($key, $con) {
        $query = "select * from developer where api_key='" . $key . "'";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function forgotPassword($email, $con) {
        $emailCheck = $this->validateEmail($email, $con);

        if ($emailCheck->num_rows >= 1) {

            $password = $this->generatePassword(8);

            $query = "update accounts set password='" . md5($password) . "' where email='" . $email . "'";
            $res = mysqli_query($con, $query) or die('' . mysqli_error());

            if ($res) {

                //$mail    = mail($email,$subject,$message);
                $mail = $this->sendMail($email, $password);
                if (!$mail) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    function generatePassword($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    protected function validateEmail($email, $con) {
        $query = "select * from accounts where email='" . $email . "'";

        $result = mysqli_query($con, $query) or die('' . mysqli_error());

        return $result;
    }

    public function changePassword($id, $oldPassword, $newPassword, $con) {

        $query = "select * from accounts where id=" . $id . " and password='" . md5($oldPassword) . "' ";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);

        if ($num === 1) {
            $query = "update accounts set password='" . md5($newPassword) . "' where id=" . $id . " ";
            $result = mysqli_query($con, $query)or die('' . mysqli_error());

            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {

            return false;
        }
    }

    public function updateProfile($first_name, $last_name, $contact, $email, $dob, $address, $id, $con) {

        $query = "update accounts set first_name='" . $first_name . "',last_name='" . $last_name . "', email='" . $email . "', mobile_number='" . $contact . "',date_of_birth='" . $dob . "',address='" . $address . "',modify_date='" . time() . "' where id=" . $id . " ";

        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function emailfinder($user_id, $con) {
        $query = "select email from accounts where id='" . $user_id . "'";

        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['email'];
            }
        }
        return $email;
    }

    public function UserIdfinder($email, $con) {

        $query = "select id from accounts where email='" . $email . "'";

        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
            }
        }

        return $id;
    }

    public function addPayment($txn_id, $amount, $email, $con) {

        $status = 0;
        $id = $this->UserIdfinder($email, $con);

        $qry = "insert into trunsactions(user_id,trunsaction_id,amount,status,add_date)values('" . $id . "','" . $txn_id . "','" . $amount . "','" . $status . "','" . strtotime(date('Y-m-d H:i:s')) . "')";

        $result = mysqli_query($con, $qry);
    }

    public function updateSucessPayment($txn_id, $con) {
        $status = 1;
        $qry = "update trunsactions set status=1 where trunsaction_id='" . $txn_id . "'";
        $result = mysqli_query($con, $qry);
        return $result;
    }

    public function updatefailPayment($txn_id, $con) {

        $qry = "update trunsactions set status=2 where trunsaction_id='" . $txn_id . "'";

        $result = mysqli_query($con, $qry);
        return $result;
    }

    public function getTrunsaction($id, $con) {
        $qry = "select * from trunsactions where user_id='" . $id . "'";
        $result = mysqli_query($con, $qry);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $dataArray['Transaction'] = array();
            $dataArray['response_msg'] = true;
            $k = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $dataArray['Transaction'][$k]['transaction_id'] = $row['trunsaction_id'];
                $dataArray['Transaction'][$k]['amount'] = $row['amount'];
                if ($row['status'] == '1') {
                    $dataArray['Transaction'][$k]['status'] = "Success";
                } else if ($row['status'] == '2')
                    $dataArray['Transaction'][$k]['status'] = "Failed";
                else {
                    $dataArray['Transaction'][$k]['status'] = "Pending";
                }
                $dataArray['Transaction'][$k]['Date'] = date('y-m-d h:i:s A', $row['add_date']);
                $k++;
            }
        } else {
            $dataArray['response_msg'] = false;
        }
        return json_encode($dataArray);
    }

    public function addCard($user_id, $gift_id, $item_value, $con) {

        $status = 1;
        $qry = "insert into add_cards(gift_id,user_id,price_per_item,status,add_date)values('" . $gift_id . "','" . $user_id . "','" . $item_value . "','" . $status . "','" . $dt . "')";
        $result = mysqli_query($con, $qry)or die('' . mysqli_error());
        $dataArray['res_code'] = "1";
        $dataArray['res_msg'] = "Record Added Card Successfully";
        return json_encode($dataArray);
    }

    /* $total_price=intval($item_value)*$quantity;

      $dt=strtotime(date('Y-m-d H:i:s'));
      $qry1="select quantity from add_cards where gift_id='".$gift_id."' and user_id='".$user_id."' and price_per_item='".$item_value."'";
      $result1 = mysqli_query($con,$qry1);
      $num1    = mysqli_num_rows($result1);

      if($num1 > 0)
      {
      while($row = mysqli_fetch_assoc($result1))
      {
      $qnt = $row['quantity'];
      }

      $qnt=$qnt+$quantity;

      $total_value=intval($item_value)*$qnt;
      $qry2="update add_cards set quantity = '".$qnt."',total_price='".$total_value."',price_per_item='".$item_value."' where gift_id='".$gift_id."' and user_id='".$user_id."'";

      $result1 = mysqli_query($con,$qry2)or die(''.mysqli_error());

      }
      else{ */

    public function sendGiftCard($gift_id, $user_id, $con) {

        $mail = $this->emailfinder($user_id, $con);

        $query = "select item_name,price from gift_items where id in (" . $gift_id . ")";

        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $name = '';
            $price = '';

            while ($row = mysqli_fetch_assoc($result)) {
                $name .= $row['item_name'];
                $price .= $row['price'];
            }

            $subject = "Your Gift Items";
            $message = $name . " " . $price;
            //print_r($message);die;
            $mail = $this->sendMail($mail, $message);
            if ($mail) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function removeCard($user_id, $gift_id, $con) {

        $qry = "update add_cards set status=2 where user_id='" . $user_id . "' and gift_id='" . $gift_id . "'";

        $result = mysqli_query($con, $qry);

        if ($result) {
            $dataArray['res_code'] = "1";
            $dataArray['res_msg'] = "Remove Data In Card";
            return json_encode($dataArray);
        } else {
            $dataArray['res_code'] = "0";
            return json_encode($dataArray);
        }
    }

    public function getAllCard($con) {
        $query = "select * from card_types where status=1";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);

        if ($num > 0) {

            $data['Gift'] = array();
            $i = 0;
            $data['response_msg'] = 'success';
            while ($row = mysqli_fetch_assoc($result)) {

                $data['Gift'][$i]['id'] = $row['id'];

                $data['Gift'][$i]['name'] = $row['name'];
                $data['Gift'][$i]['card_image'] = HTTP_ROOT . 'img_gifting/' . $row['card_image'];
                $data['Gift'][$i]['card_color'] = $row['card_color'];
                $i++;
            }
            return json_encode($data, true);
        }
    }

    public function getGiftItem($card_id, $con) {

        $query = "select * from gift_items where  card_id='" . $card_id . "' and status=1";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $data['Gift'] = array();
            $i = 0;
            $data['response_msg'] = 'true';
            while ($row = mysqli_fetch_assoc($result)) {

                $data['Gift'][$i]['gift_id'] = $row['id'];

                $data['Gift'][$i]['gift_value'] = $row['item_value'];

                $i++;
            }

            return json_encode($data, true);
        }
    }

    public function updateCard($user_id, $gift_id, $quantity, $con) {
        $objMessage = new Messages();
        $qry = "update add_cards set quantity='" . $quantity . "' where user_id='" . $user_id . "' and gift_id='" . $gift_id . "'";

        $result = mysqli_query($con, $qry);

        if ($result) {
            $data = json_encode(array('success' => 'true', 'data' => $objMessage->getStatusCodeMessage('557')));
            return $data;
        } else {
            $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('552')));
            return $data;
        }
    }

    public function getCard($user_id, $con) {

        $qry = "select * from add_cards,gift_items where add_cards.user_id='" . $user_id . "' and add_cards.gift_id=gift_items.id and add_cards.status=1";

        $result = mysqli_query($con, $qry)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $data['Card'] = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $data['Card'][$i]['response_msg'] = 'data';
                $data['Card'][$i]['gift_id'] = $row['gift_id'];
                $data['Card'][$i]['gift_name'] = $row['item_name'];
                $data['Card'][$i]['In_Stock'] = $row['in_stock'];
                $data['Card'][$i]['user_id'] = $row['user_id'];
                $data['Card'][$i]['quantity'] = $row['quantity'];
                $data['Card'][$i]['price_per_item'] = $row['price_per_item'];
                $data['Card'][$i]['total_price'] = $row['total_price'];
                $data['Card'][$i]['item_image'] = HTTP_ROOT . 'img_gifting/' . $row['item_image'];

                $data['Card'][$i]['add_date'] = $row['add_date'];

                $i++;
            }

            return json_encode($data, true);
        }
    }

    public function getsuggessioncard($event_id, $con) {

        $qry = "select suggested_gifft.card_id,card_types.* from suggested_gifft LEFT JOIN card_types ON suggested_gifft.card_id=card_types.id where suggested_gifft.event_id='" . $event_id . "' and suggested_gifft.status=1";

        $result = mysqli_query($con, $qry)or die('' . mysqli_error());
//        print_r(mysqli_fetch_assoc($result));
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $data['GiftingApp'] = array();
            $i = 0;
            $data['GiftingApp']['res_code'] = '1';
            $data['GiftingApp']['response_msg'] = 'Record Found!';
            while ($row = mysqli_fetch_assoc($result)) {
                $data['GiftingApp']['cards'][$i]['card_id'] = $row['card_id'];
                $data['GiftingApp']['cards'][$i]['name'] = $row['name'];
                $data['GiftingApp']['cards'][$i]['card_image'] = IMAGE_ROOT . $row['card_image'];
                $data['GiftingApp']['cards'][$i]['card_color'] = $row['card_color'];
                $data['GiftingApp']['cards'][$i]['card_status'] = $row['status'];
                $i++;
            }
//			print_r($data);
            return json_encode($data, true);
        }
    }

    public function getgiftitems($gift_id, $con) {

        $qry = "select * from gift_items  where id='" . $gift_id . "' and status=1";

        $result = mysqli_query($con, $qry)or die('' . mysqli_error());
//        print_r(mysqli_fetch_assoc($result));
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $data['GiftingApp'] = array();
            $i = 0;
            $data['GiftingApp']['res_code'] = '1';
            $data['GiftingApp']['response_msg'] = 'Record Found!';
            while ($row = mysqli_fetch_assoc($result)) {
                $data['GiftingApp']['gift_item'][$i]['id'] = $row['id'];
                $data['GiftingApp']['gift_item'][$i]['card_id'] = $row['card_id'];
                $data['GiftingApp']['gift_item'][$i]['item_name'] = $row['item_name'];
                $data['GiftingApp']['gift_item'][$i]['item_value'] = $row['item_value'];
                $data['GiftingApp']['gift_item'][$i]['card_code'] = $row['card_code'];
                $data['GiftingApp']['gift_item'][$i]['card_status'] = $row['status'];
                $i++;
            }
//			print_r($data);
            return json_encode($data, true);
        }
    }

    public function getAllGiftImage($con) {

        $query = "select * from gift_images where status=1";

        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $data['GiftImage'] = array();
            $data['success'] = true;
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {

                $data['GiftImage'][$i]['id'] = $row['id'];
                $data['GiftImage'][$i]['image_name'] = HTTP_ROOT . "img_gifting/gift_image/" . $row['img_name'];
                $i++;
            }

            return json_encode($data, true);
        }
    }

    public function getProfile($user_id, $con) {

        $query = "select * from accounts where id='" . $user_id . "'";

        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $data['Profile'] = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $data['Profile'][$i]['response_msg'] = 'data';
                $data['Profile'][$i]['id'] = $row['id'];
                $data['Profile'][$i]['first_name'] = $row['first_name'];
                $data['Profile'][$i]['last_name'] = $row['last_name'];
                $data['Profile'][$i]['email'] = $row['email'];
                $data['Profile'][$i]['mobile_number'] = $row['mobile_number'];
                $data['Profile'][$i]['address'] = $row['address'];
                $data['Profile'][$i]['profile_image'] = $row['profile_image'];
                $data['Profile'][$i]['dob'] = $row['date_of_birth'];

                $i++;
            }
            return json_encode($data, true);
        }
    }

    public function postReminder($id, $event_id, $image, $message, $date, $status, $con) {

        $createAt = date('y/m/d h:m:i');
        $query = "insert into reminders(event_id,image,message,reminder_date,createdAt,status,account_id)values('" . $event_id . "','" . $image . "','" . $message . "','" . $date . "','" . $createAt . "'," . $status . "," . $id . ")";

        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function sendGiftEmail($id, $name, $phone, $email, $img_id, $gift_id, $con) {

        $status = 0;

        $qry = "insert into sendmails(account_id,name,email_to,mobile_no,status,img_id,gift_id,add_date,modify_date) values('" . $id . "','" . $name . "','" . $email . "','" . $phone . "','" . $status . "','" . $img_id . "','" . $gift_id . "','" . strtotime(date('Y-m-d h:i:s')) . "','" . strtotime(date('Y-m-d h:i:s')) . "')";

        $result = mysqli_query($con, $qry)or die('' . mysqli_error());
        return $result;
    }

    public function getReminder($id, $last_sync, $con) {

        $query = "select * from reminders where reminder_date >= '" . $last_sync . "' and account_id=" . $id . " and status!=3 ";

        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);

        if ($num > 0) {

            $data['Reminder'] = array();
            $data['response_msg'] = true;
            //$gift['Reminder']  = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {

                $data['Reminder'][$i]['id'] = $row['id'];
                $data['Reminder'][$i]['msg'] = $row['message'];
                $data['Reminder'][$i]['event_id'] = $row['event_id'];
                $data['Reminder'][$i]['image'] = $row['image'];
                $data['Reminder'][$i]['date-of-reminder'] = $row['reminder_date'];
                $data['Reminder'][$i]['status'] = $row['status'];
                $data['Reminder'][$i]['sync'] = $last_sync;

                $i++;
            }
            return json_encode($data, true);
        }
        $data['response_msg'] = false;
        return json_encode($data, true);
    }

    public function editReminder($reminder_id, $id, $event_id, $image, $msg, $date, $con) {
        $objMessage = new Messages();
        //print_r($reminder_id);die;
        $query = "update reminders set event_id='" . $event_id . "', image='" . $image . "', message='" . $msg . "',reminder_date='" . $date . "',modifiedAt='" . date('Y-m-d') . "' where account_id='" . $id . "' and id='" . $reminder_id . "'";

        $result = mysqli_query($con, $query);

        if ($result) {
            $data = json_encode(array('success' => 'true', 'data' => $objMessage->getStatusCodeMessage('550')));
            return $data;
        } else {
            $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('552')));
            return $data;
        }
    }

    public function deleteReminder($reminder_id, $id, $status, $con) {

        if ($status == "3") {
            $objMessage = new Messages();
            $query = "update reminders set status='" . $status . "' where account_id='" . $id . "'and id='" . $reminder_id . "'";
            $result = mysqli_query($con, $query)or die('' . mysqli_error());

            if ($result) {
                $data = json_encode(array('success' => 'true', 'data' => $objMessage->getStatusCodeMessage('549')));
                return $data;
            } else {
                $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('551')));
                return $data;
            }
        }
    }

    public function getEvent($con, $id = null) {

//		$query  = "select * from events where account_id='".$id."'";
        $query = "select * from events ";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        $num = mysqli_num_rows($result);
//        echo '\jkcsdkljbvdljkvfdk;l';

        if ($num > 0) {

            $data['GiftingApp'] = array();
            $data['GiftingApp']['res_code'] = '1';
            $data['GiftingApp']['response_msg'] = 'Record Found!';
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {

                $data['GiftingApp']['Event'][$i]['id'] = $row['id'];
                $data['GiftingApp']['Event'][$i]['event_name'] = $row['event_name'];
                $data['GiftingApp']['Event'][$i]['event_image'] = $row['event_image'];
                $data['GiftingApp']['Event'][$i]['message'] = $row['message'];
                $data['GiftingApp']['Event'][$i]['createdAt'] = $row['createdAt'];



                $i++;
            }

            return json_encode($data, true);
        }
    }

    public function fileUpload($id, $path, $con) {
        $query = "update accounts set profile_image='" . $path . "' where id=" . $id . " ";
        $result = mysqli_query($con, $query)or die('' . mysqli_error());
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function MailfileUpload($user_id, $card_id, $image_name, $con) {
        $qry = "insert into user_mail_image(acount_id,card_id,image_name) values('" . $user_id . "','" . $card_id . "','" . $image_name . "')";
        $result = mysqli_query($con, $qry)or die('' . mysqli_error());

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getDateAndIp() {

        $result = array();
        $result['ip'] = $_SERVER['REMOTE_ADDR'];
        $result['datetime_in_sec'] = time();
        $result['datetime'] = date('Y-m-d h:i:s');
        return $result;
    }

    function getUserDetail($id, $con) {
        $query = "select  * from accounts where id='" . $id . "'";
        $res = mysqli_query($con, $query);
        $num = mysqli_num_rows($res);
        if ($num > 0) {
            $data['User'] = array();
            while ($row = mysqli_fetch_assoc($res)) {
                $data['User']['first_name'] = $row['first_name'];
                $data['User']['last_name'] = $row['last_name'];
                $data['User']['mobile_number'] = $row['mobile_number'];
                $data['User']['add_date'] = $row['add_date'];
                $data['User']['date_of_birth'] = $row['date_of_birth'];
                return $data;
            }
        } else {
            $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('556')));
            return $data;
        }
    }

    function getDeviceData($id, $con) {

        $qry = "select * from device_data where account_id='" . $id . "'";
        $result = mysqli_query($con, $qry);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $data['Device'] = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $data['Device']['device_id'] = $row['device_id'];
            }

            return $data;
        }
    }

    function sendPushNotification($id, $msg, $image, $event_id, $con) {

        $getUserDetail = $this->getUserDetail($id, $con);

        $viewDeviceID = $this->getDeviceData($id, $con);

        if (!empty($viewDeviceID)) {
            $i = 0;
            foreach ($viewDeviceID['Device'] as $deviceuid) {

                $deviceids.= $deviceuid . ",";

                $i++;
            }

            $alldeviceid = rtrim($deviceids, ",");
            $dataMessage = array();

            $dataMessage['message'] = $getUserDetails['User']['first_name'] . $msg;
            $dataMessage['image'] = $image;
            $dataMessage['event_id'] = $event_id;
            $dataMessage['regId'] = $alldeviceid;
            $dataMessage['apikey'] = "AIzaSyAkbXxi_cke5uiJ-NPDfcfbxzsRS4pexqw";

            var_dump($dataMessage);
            $sendMessage = json_encode($dataMessage, true);

            echo $res = $this->pushNotification($sendMessage);

            return $res;
        }
    }

    function pushNotification($postData) {

        $this->autoRender = false;
        //$postData       = $this->request->input();
        $requestJson = json_decode($postData, true);

        $regId = trim($requestJson['regId']);
        $registrationId = array(); // set variable as array
        // get all ids in while loop and insert it into $regIDS array
        $deviceIds = explode(",", $regId);

        foreach ($deviceIds as $devid) {
            array_push($registrationId, $devid);
        }

        $message = trim($requestJson['message']);
        $event_id = trim($requestJson['event_id']);
        $image = trim($requestJson['image']);
        $url = 'http://162.243.205.148/gifting_app/upload_img/' . $image;
//            $url ='http://162.243.205.148/gifting_app/upload_img/anniversary.png';

        $apikey = trim($requestJson['apikey']);

        $url = 'https://android.googleapis.com/gcm/send';


        $fields = array(
            'registration_ids' => $registrationId,
            'data' => array("message" => $message, "id" => $event_id, "url" => "http://162.243.205.148/gifting_app/upload_img/anniversary.png"),
        );


        $headers = array(
            'Authorization: key=' . $apikey,
            'Content-Type: application/json'
        );

        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $data = json_decode($result, true);

        return $data['success'];
    }

    function pushDeviceId($user_id, $mobile_no, $device_id, $device_type, $con) {
        $objMessage = new Messages();

        $query = "select  * from device_data where account_id='" . $user_id . "' order by id desc limit 1";
        $res = mysqli_query($con, $query);
        $num = mysqli_num_rows($res);

        if ($num == '0') {
            $qry = "insert into device_data(account_id,device_id,mobile_no,device_type,add_date,modify_date) values('" . $user_id . "','" . $device_id . "','" . $mobile_no . "','" . $device_type . "','" . strtotime(date('Y-m-d h:i:s')) . "','" . strtotime(date('Y-m-d h:i:s')) . "')";
            $result = mysqli_query($con, $qry)or die('' . mysqli_error());
            if ($result) {
                $data = json_encode(array('success' => 'true', 'data' => $objMessage->getStatusCodeMessage('558')));
                return $data;
            } else {
                $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('556')));
                return $data;
            }
        } else {
            $qry = "update device_data set device_id='" . $device_id . "' where account_id='" . $user_id . "'";
            $result = mysqli_query($con, $qry)or die('' . mysqli_error());

            if ($result) {
                $data = json_encode(array('success' => 'true', 'data' => $objMessage->getStatusCodeMessage('558')));
                return $data;
            } else {
                $data = json_encode(array('success' => 'false', 'data' => $objMessage->getStatusCodeMessage('556')));
                return $data;
            }
        }
    }

    function sendAllReminder($con) {
        $arr = array();
        $day1 = date('Y-m-d H:i', strtotime('+15 minutes'));


        echo $qry = "select * from reminders reminder_date LIKE '%" . $day1 . "%'";
//    echo $qry="select * from reminders ";

        $res = mysqli_query($con, $qry);

//    $a = mysqli_fetch_assoc($res);
//    print_r($a);

        $num = mysqli_num_rows($res);
        if ($num > 0) {

            while ($row = mysqli_fetch_assoc($res)) {

                $user_id = $row['account_id'];
                $message = $row['message'];
                $image = $row['image'];
                $event_id = $row['event_id'];

                $this->sendPushNotification($user_id, $message, $image, $event_id, $con);
            }
        }
    }

    function sendSuccessEmail($email_from, $txn_id, $con) {
        $dataArray = array();
        $id = $this->UserIdfinder($email_from, $con);

        $qry = "select * from sendmails where account_id='" . $id . "' and status=0";

        $res = mysqli_query($con, $qry);

        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            $email_to = $row['email_to'];
            $mobile_no = $row['mobile_no'];
            $img_id = $row['img_id'];
            $gift_id = $row['gift_id'];

            $qry1 = "select * from gift_images where id='" . $img_id . "' and status=1";

            $res1 = mysqli_query($con, $qry1);
            $row1 = mysqli_fetch_assoc($res1);
            $img_path = '162.243.205.148/gifting_app/img_gifting/gift_image/' . $row1['img_name'];

            $qry2 = "select * from gift_items where id='" . $gift_id . "' and status=1";
            $res2 = mysqli_query($con, $qry2);
            $row2 = mysqli_fetch_assoc($res2);
            $card_code = $row2['card_code'];
            $card_id = $row2['card_id'];
            $card_value = $row2['item_value'];
            $qry3 = "select * from card_types where id='" . $card_id . "' and status=1";

            $res3 = mysqli_query($con, $qry3);
            $row3 = mysqli_fetch_assoc($res3);
            $card_name = $row3['name'];
        }
        $dataArray['name_to'] = $name;
        $dataArray['email_to'] = $email_to;
        $dataArray['mobile_to'] = $mobile_no;
        $dataArray['img_path'] = $img_path;
        $dataArray['card_name'] = $card_name;
        $dataArray['card_code_to'] = $card_code;
        $dataArray['card_value'] = $card_value;
        $dataArray['email_from'] = $email_from;


        $dataArray = json_encode($dataArray);

        /* $mail=$this->sendMail('send_gift',$email_from, $dataArray);
          $qry1="update sendmails set status=1 where account_id='".$id."'";
          $result = mysqli_query($con,$qry1)or die(''.mysqli_error());
          $qry2="update gift_items set status=3 where id='".$gift_id."'";
          $result1 = mysqli_query($con,$qry2)or die(''.mysqli_error());
         */
        //print_r($dataArray);die;
        $msg = "Your Gift Send Sucessfully to " . $name;

        $this->sendPushNotification($id, $msg, $con);
        //-------------------------------------send Push Notification Transaction details//
        $msg = "Transaction successfully.you purchased " . $card_name . " Gifts $" . $card_value . "Transaction Id is " . $txn_id;
        $this->sendPushNotification($id, $msg, $con);
    }

    function checkTokens($accessToken, $con) {
//	echo 'csdjhcslkjcdjnvd';
        $query = "select DISTINCT * from accountdeveloper where access_token='" . $accessToken . "' order by id desc limit 1";
        $res = mysqli_query($con, $query);
        $num = mysqli_num_rows($res);

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $date1 = $row['access_expires'];
                $date2 = $row['createAt'];
                $id = $row['account_id'];
                break;
            }

            $date = date('Y-m-d h:i:s');
            $t1 = StrToTime($date1);
            $t2 = StrToTime($date);

            $diff = $t1 - $t2;

            $hours = $diff / ( 60 * 60 );

            if ($hours < 0) {
                return false;
            } else {

                return $id;
            }
        } else {
            return false;
        }
    }

}

?>
