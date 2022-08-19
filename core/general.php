<?php

$response = array('Success' => false, 'Message' => 'Invalid Request');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && !empty($_GET['action'])) {
    require_once('dbconnection.php');
    $request = $_POST;
    switch($_GET['action']) {
        case 'ConactFormSave':
        $sql = "INSERT INTO `contacts`(`Name`, `Email`,`Phone`, `Message`, `Service`, `IP`, `URL`) VALUES ('" .mysqli_real_escape_string($conn,$request['name']) . "', '" .mysqli_real_escape_string($conn,$request['email']) . "', '". mysqli_real_escape_string($conn,$request['phone'])  . "', '". mysqli_real_escape_string($conn,$request['message'])  ."', '". mysqli_real_escape_string($conn,$request['service'])  ."', '". mysqli_real_escape_string($conn,$_SERVER['REMOTE_ADDR']) ."', '". mysqli_real_escape_string($conn,$_SERVER['HTTP_REFERER']) ."')";


        if ($conn->query($sql) === TRUE) {
            
            // Contact Information to Client
           sendEmail('noreply@gurucomputers.ca', "Contact Information", userInformationHtml($request));
            
           // Thank you email to User
            $message = customerEmailData($request['name']);
            sendEmail($request['email'], 'Thank you for Contact', $message);
            $response = array('Success' => true, 'Message' => 'Thank you for contacting Guru Computers. Our team will get back to you shortly with the next steps. ');
        } else {
            $response = array('Success' => false, 'Message' => 'Error while submitting information.');
        }
        break;
    }
}

function userInformationHtml($request) {
    $html = '<p><strong>Name</strong> : '. $request['name'].'</p>';
    $html .= '<p><strong>Email</strong> : '. $request['email'].'</p>';
    $html .= '<p><strong>Service</strong> : '. $request['service'].'</p>';
    $html .= '<p><strong>Phone</strong> : '. $request['phone'].'</p>';
    $html .= '<p><strong>Message</strong>: '. $request['message'].'</p>';
    
    return $html;
}


function customerEmailData($Name) {
    $email_content = '<!doctype html>
                        <html>
                        <head>
                        <meta charset="utf-8">
                        <title>Guru Computers</title>
                        <link rel="icon" type="image/x-icon" href="images/favicon.png">
                        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
                        </head>
                        <body style="width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;font-family: Lato, sans-serif;">
                        <table cellpadding="0" cellspacing="0" align="center" border="0" style="max-width:610px;width:100%;margin:auto;padding:0;background-color:#ffffff;color:#222222;overflow:hidden;border-left:1px solid #eee;border-right:1px solid #eee">
                          <tbody>
                            <tr>
                              <td><table align="center" valign="middle" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;margin:0;padding:0;text-align:center">
                                  <tbody>
                                    <tr>
                                      <td><img style="width:50%" src="https://tethr.health/assets/images/logo.png?v1" alt="image" class="CToWUd a6T" tabindex="0">
                                        <div class="a6S" dir="ltr" style="opacity: 0.01; left: 846px; top: 119px;">
                                          <div id=":18l" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download">
                                            <div class="aSK J-J5-Ji aYr"></div>
                                          </div>
                                        </div></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr style="max-width:610px;width:100%;box-sizing:border-box">
                              <td><table align="center" valign="middle" cellpadding="0" cellspacing="0" border="0" style="overflow:hidden;max-width:610px;width:100%;box-sizing:border-box;margin:0;padding:30px 15px 10px">
                                  <tbody>
                                    <tr>
                                      <td style="text-align:left"><p style="color:#575f62;font-family:Lato,sans-serif;font-size:18px;line-height:20px;margin-top:0;margin-bottom:20px;padding:0;text-align:left;"> Hi, '.$Name.' </p>
                                        <p style="color:#575f62;font-family:Lato,sans-serif;font-size:15px;line-height:19px;margin-top:0;margin-bottom:20px;padding:0;font-weight:normal;text-align:left;">Thank you for contacting Guru Computers. <br>
                                          Our team will get back to you shortly with the next steps. </p>
                                        <p style="color:#575f62;font-family:Lato,sans-serif;font-size:15px;line-height:19px;margin-top:0;margin-bottom:20px;padding:0;"> Regards<br>
                                          Guru Computers team </p></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr>
                              <td><table align="center" valign="center" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;background-color:#8092FF;padding:30px 20px 5px;box-sizing:border-box">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <p style="color:#fff;font-family:Lato,sans-serif;font-size:15px;line-height:15px;margin-top:15px;margin-bottom:0px;padding:0;font-weight:normal;text-align:center"> 
                                          <a href="tel:+91-623-942-1395" style="color:#fff;text-decoration:none;font-family:Lato,sans-serif" target="_blank">+1 (866) 861-2772</a>, 
                                          <a href="mailto:info@edifyingvoyages.com" style="color:#fff;text-decoration:none;font-family:Lato,sans-serif" target="_blank">info@tethr.health</a> 
                                        </p>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr>
                              <td><table align="center" valign="center" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;background-color:#8092FF;padding:10px;box-sizing:border-box">
                                  <tbody>
                                    <tr>
                                      <td><p style="color:#fff;font-size:13px;line-height:15px;margin:0;padding:0;font-weight:normal;text-align:center;font-family:Lato,sans-serif">10890 Thornmint Road San Diego, CA 92127</p></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table>
                        </body>
                        </html>';
    return $email_content;
}

function sendEmail($to_email, $subject, $message) {
  try {
      $from_email = 'info@gurucomputers.ca';
      $mailheader = "From: ".$from_email."\r\n"; 
      $mailheader .= "Reply-To: ".$from_email."\r\n"; 
      $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 


      mail($to_email, $subject, $message, $mailheader) or die('error'); 
  } catch(Exception $ex) {
      echo '<pre>';print_r($ex);die;
  }
}

header('Content-Type: application/json');
echo json_encode($response);die;
?>