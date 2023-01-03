<?php

$response = array('Success' => false, 'Message' => 'Invalid Request');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && !empty($_GET['action'])) {
  require_once('dbconnection.php');
  $request = $_POST;
  switch ($_GET['action']) {
    case 'ConactFormSave':
      $sql = "INSERT INTO `contacts`(`Name`, `Email`,`Phone`, `Message`, `Service`, `IP`, `URL`) VALUES ('" . mysqli_real_escape_string($conn, $request['name']) . "', '" . mysqli_real_escape_string($conn, $request['email']) . "', '" . mysqli_real_escape_string($conn, $request['contact_no'])  . "', '" . mysqli_real_escape_string($conn, $request['message'])  . "', '" . mysqli_real_escape_string($conn, $request['service'])  . "', '" . mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR']) . "', '" . mysqli_real_escape_string($conn, $_SERVER['HTTP_REFERER']) . "')";


      if ($conn->query($sql) === TRUE) {

        // Contact Information to Client
        sendEmail('noreply@gurucomputers.ca', "Contact Information", userInformationHtml($request));
        // Thank you email to User
        $message = customerEmailData(ucwords($request['name']));
        sendEmail($request['email'], 'Thank you for Contact', $message);
        $response = array('Success' => true, 'Message' => 'Thank you for contacting Guru Computers. Our team will get back to you shortly with the next steps. ');
      } else {
        $response = array('Success' => false, 'Message' => 'Error while submitting information.');
      }
      break;
  }
}

function userInformationHtml($request)
{
  $html = '<p style="font-size:13px;color:#000 !important;"><strong>Name</strong> : ' . ucwords($request['name']) . '</p>';
  $html .= '<p style="font-size:13px;color:#000 !important;"><strong>Email</strong> : ' . $request['email'] . '</p>';
  $html .= '<p style="font-size:13px;color:#000 !important;"><strong>Service</strong> : ' . $request['service'] . '</p>';
  $html .= '<p style="font-size:13px;color:#000 !important;"><strong>Phone</strong> : ' . $request['contact_no'] . '</p>';
  $html .= '<p style="font-size:13px;color:#000 !important;"><strong>Message</strong>: ' . $request['message'] . '</p>';

  return $html;
}


function customerEmailData($Name)
{
  $email_content = '<!doctype html>
   <html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body data-new-gr-c-s-check-loaded="14.993.0" data-gr-ext-installed="">
    <table cellpadding="0" cellspacing="0" align="center" border="0"
        style="max-width:610px;width:100%;margin:auto;padding:0;background-color:#ffffff;color:#000 !important;overflow:hidden;border:1px solid #f2f2f2;font-family: Poppins, sans-serif;">
        <tbody>
            <tr>
                <td style="padding: 10px 15px;background-color: #f2f2f2;color: #fff;text-align: center;">
                    <img src="https://www.gurucomputers.ca/assets/images/logo.png"
                        style="max-width: 200px;">
                </td>
            </tr>
            <tr>
                <td style="padding: 15px;position: relative;">
                    <h3 style="font-size: 18px;margin: 0 0 5px;color:#000 !important;">Hi '.$Name.',</h3>
                    <p style="font-size: 13px;margin: 0 0 30px;color:#000 !important;">Thank you for contacting Guru Computers. <br>Our team
                        will get back to you shortly with the next steps. </p>
                    <p style="font-size:13px;font-weight: 500;color:#000 !important;"> Regards<br>Guru Computers team </p>
                </td>
            </tr>

            <tr style="box-sizing:border-box;background-color:#fff;height:22px">
                <td style="text-align:center;border-left:1px solid #eee;border-right:1px solid #eee">&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <table align="center" valign="center" cellpadding="0" cellspacing="0" border="0"
                        style="max-width:610px;width:100%;overflow:hidden;background-color:#f15a24;padding:30px 20px 5px;box-sizing:border-box">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="text-align:center;height:30px;overflow:hidden;margin:0">
                                        <a href="https://www.facebook.com/GuruComputersDelta"
                                            style="text-decoration:none;display:inline-block;margin:0 5px"
                                            target="_blank">

                                            <img src="https://www.gurucomputers.ca/email-template-images/facebook.png" height="20" width="20">
                                                
                                        </a>
                                        <a href="https://www.instagram.com/gurucomputersdelta/"
                                            style="text-decoration:none;padding:0;display:inline-block;margin:0 5px"
                                            target="_blank">
											<img src="https://www.gurucomputers.ca/email-template-images/instagram.png" height="20" width="20">
                                        </a>
                                        <a href="https://twitter.com/gurusystems_ca"
                                            style="text-decoration:none;padding:0;display:inline-block;margin:0 5px"
                                            target="_blank">
											 <img src="https://www.gurucomputers.ca/email-template-images/twitter.png" height="20" width="20">
                                        </a>

                                    </p>
                                    <p
                                        style="color:#fff;font-family:Lato,sans-serif;font-size:15px;line-height:15px;margin-top:15px;margin-bottom:0px;padding:0;font-weight:normal;text-align:center">
                                        <a href="tel:+1 (604) 256-2193" style="color:#fff;text-decoration:none;"
                                            target="_blank">+1 (604) 256-2193</a>, <a
                                            href="mailto:gururepairlab@gmail.com"
                                            style="color:#fff;text-decoration:none;"
                                            target="_blank">gururepairlab@gmail.com</a>
                                    </p>
                                    <p
                                        style="color:#fff;font-family:Lato,sans-serif;font-size:15px;line-height:15px;margin-top:5px;margin-bottom:0px;padding:0;font-weight:normal;text-align:center">
                                        <a href="https://www.gurucomputers.ca/" style="color:#fff;text-decoration:none;"
                                            target="_blank">https://www.gurucomputers.ca/</a>
                                    </p>
                                    <p
                                        style="color:#fff;font-size:13px;line-height:15px;margin:0;padding:8px 0 4px;font-weight:normal;text-align:center;">
                                        Guru Computers,
                                        8609-8611, 120th street,
                                        Scott Rd, Delta, BC V4C 6R4,
                                        Canada</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>';
  return $email_content;
}

function sendEmail($to_email, $subject, $message)
{
  try {
    $from_email = 'info@gurucomputers.ca';
    $mailheader = "From: " . $from_email . "\r\n";
    $mailheader .= "Reply-To: " . $from_email . "\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";


    mail($to_email, $subject, $message, $mailheader) or die('error');
  } catch (Exception $ex) {
    echo '<pre>';
    print_r($ex);
    die;
  }
}

header('Content-Type: application/json');
echo json_encode($response);
die;
