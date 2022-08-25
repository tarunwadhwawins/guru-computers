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
        sendEmail('tarunwadhwawins@gmail.com', "Contact Information", userInformationHtml($request));

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

function userInformationHtml($request)
{
  $html = '<p><strong>Name</strong> : ' . $request['name'] . '</p>';
  $html .= '<p><strong>Email</strong> : ' . $request['email'] . '</p>';
  $html .= '<p><strong>Service</strong> : ' . $request['service'] . '</p>';
  $html .= '<p><strong>Phone</strong> : ' . $request['contact_no'] . '</p>';
  $html .= '<p><strong>Message</strong>: ' . $request['message'] . '</p>';

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
                   <img src="https://ditstekdemo.com/ClientApps/gurucomputer/assets/images/logo.png"
                      style="max-width: 200px;">
                </td>
             </tr>
             <tr>
                <td style="padding: 15px;position: relative;">
                   <h3 style="font-size: 18px;margin: 0 0 5px;">Hi User</h3>
                   <p style="font-size: 13px;margin: 0 0 30px;">Thank you for contacting Guru Computers. <br>Our team
                      will get back to you shortly with the next steps. 
                   </p>
                   <p style="font-size:13px;font-weight: 500;"> Regards<br>Guru Computers team </p>
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
                                     <svg width="20" height="20" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.1667 25V44.5H20.5V25V24.5H20H13.8333V18.8333H20H20.5V18.3333V14.7533C20.5 11.4381 21.3075 9.14582 22.7155 7.68132C24.12 6.22033 26.2025 5.5 28.935 5.5C31.1229 5.5 32.46 5.63264 33.235 5.72989V11.1667H29.8933C28.6127 11.1667 27.6304 11.5071 26.9926 12.3048C26.3764 13.0756 26.1667 14.1736 26.1667 15.485V18.3333V18.8333H26.6667H33.0986L32.2897 24.5H26.6667H26.1667V25Z" fill="white" stroke="white"/>
                                     </svg>
                                  </a>
                                  <a href="https://www.instagram.com/gurucomputersdelta/"
                                     style="text-decoration:none;padding:0;display:inline-block;margin:0 5px"
                                     target="_blank">
                                     <svg width="20" height="20" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_8)">
                                           <path d="M25.0041 0C18.2129 0 17.3584 0.0284831 14.6932 0.150553C12.6197 0.192698 10.5683 0.586189 8.6263 1.31429C6.95721 1.93832 5.4458 2.92184 4.19922 4.19515C2.92706 5.44428 1.94134 6.95478 1.31022 8.62223C0.581837 10.5654 0.189675 12.6184 0.150553 14.6932C0.0325521 17.3584 0 18.2088 0 25C0 31.7912 0.0284831 32.6375 0.150553 35.3068C0.192698 37.3803 0.586189 39.4317 1.31429 41.3737C1.94139 43.0412 2.92451 44.552 4.19515 45.8008C5.4432 47.0743 6.95401 48.0602 8.62223 48.6898C10.5659 49.4163 12.6186 49.8084 14.6932 49.8494C17.3584 49.9715 18.2088 50 25 50C31.7912 50 32.6375 49.9715 35.3068 49.8494C37.3814 49.8084 39.4341 49.4163 41.3778 48.6898C43.0405 48.0449 44.5505 47.0605 45.8116 45.7994C47.0727 44.5383 48.0571 43.0283 48.702 41.3656C49.4262 39.4225 49.8196 37.3718 49.8657 35.2987C49.9837 32.6335 50.0163 31.783 50.0163 24.9919C50.0163 18.2007 49.9837 17.3503 49.8657 14.6851C49.8195 12.6106 49.4262 10.5586 48.702 8.6141C48.0739 6.94606 47.0894 5.43521 45.8171 4.18701C44.5712 2.91277 43.0596 1.9291 41.39 1.30615C39.441 0.579025 37.3826 0.188267 35.3027 0.150553C32.6335 0.0284831 31.7871 0 24.9959 0H25.0041ZM22.758 4.50439H25.0041C31.6772 4.50439 32.4666 4.52881 35.1034 4.65088C36.6887 4.66892 38.2591 4.95934 39.7461 5.50944C40.8317 5.91048 41.8134 6.55012 42.6188 7.38119C43.4482 8.188 44.0876 9.1693 44.4906 10.2539C45.0407 11.7409 45.3311 13.3113 45.3491 14.8966C45.4712 17.5293 45.4956 18.3228 45.4956 24.9959C45.4956 31.6691 45.4712 32.4585 45.3491 35.0952C45.3315 36.6793 45.0411 38.2485 44.4906 39.7339C44.0741 40.8112 43.4368 41.7895 42.6197 42.6059C41.8027 43.4223 40.8238 44.0587 39.7461 44.4743C38.2602 45.0286 36.6892 45.3205 35.1034 45.3369C32.4707 45.459 31.6772 45.4834 25.0041 45.4834C18.3309 45.4834 17.5374 45.459 14.9007 45.3369C13.3151 45.3176 11.7447 45.0258 10.258 44.4743C9.1713 44.075 8.18818 43.4367 7.38119 42.6066C6.55159 41.8008 5.91336 40.8191 5.51351 39.7339C4.96202 38.2472 4.67023 36.6767 4.65088 35.0911C4.53288 32.4544 4.50846 31.665 4.50846 24.9878C4.50846 18.3105 4.53288 17.5252 4.65088 14.8885C4.66778 13.3027 4.95965 11.7318 5.51351 10.2458C5.91336 9.16055 6.55159 8.17887 7.38119 7.37305C8.18882 6.54276 9.17167 5.90329 10.258 5.5013C11.7452 4.95152 13.3153 4.65978 14.9007 4.63867C17.2078 4.53695 18.099 4.50439 22.758 4.50033V4.50439ZM38.3464 8.65479C37.7523 8.65479 37.1715 8.83101 36.6776 9.16115C36.1837 9.4913 35.7988 9.96054 35.5716 10.5095C35.3445 11.0584 35.2852 11.6624 35.4014 12.2451C35.5176 12.8277 35.804 13.3627 36.2244 13.7825C36.6448 14.2024 37.1802 14.488 37.763 14.6034C38.3458 14.7188 38.9497 14.6588 39.4983 14.4309C40.047 14.203 40.5157 13.8175 40.8452 13.3231C41.1747 12.8287 41.3501 12.2477 41.3493 11.6536C41.3493 11.2595 41.2716 10.8692 41.1206 10.5051C40.9697 10.141 40.7484 9.81022 40.4695 9.53169C40.1906 9.25317 39.8595 9.03236 39.4952 8.88189C39.1309 8.73142 38.7405 8.65425 38.3464 8.65479ZM25.0041 12.1623C22.465 12.1623 19.983 12.9152 17.8718 14.3258C15.7607 15.7364 14.1152 17.7414 13.1436 20.0872C12.1719 22.433 11.9177 25.0142 12.413 27.5045C12.9084 29.9948 14.131 32.2823 15.9264 34.0776C17.7218 35.873 20.0093 37.0957 22.4996 37.5911C24.9898 38.0864 27.5711 37.8322 29.9169 36.8605C32.2626 35.8889 34.2676 34.2434 35.6783 32.1323C37.0889 30.0211 37.8418 27.5391 37.8418 25C37.8407 21.5956 36.4878 18.3309 34.0805 15.9235C31.6732 13.5162 28.4085 12.1634 25.0041 12.1623V12.1623ZM25.0041 16.6667C26.6528 16.6643 28.2651 17.1509 29.6371 18.0651C31.0092 18.9794 32.0792 20.28 32.7118 21.8025C33.3444 23.325 33.5111 25.0009 33.191 26.6183C32.8708 28.2356 32.0781 29.7216 30.9132 30.8882C29.7482 32.0549 28.2634 32.8498 26.6465 33.1723C25.0297 33.4948 23.3535 33.3305 21.8301 32.7002C20.3066 32.0698 19.0044 31.0017 18.0882 29.631C17.172 28.2603 16.6829 26.6487 16.6829 25C16.6872 22.7948 17.5654 20.6812 19.1251 19.1223C20.6848 17.5633 22.7989 16.6862 25.0041 16.6829V16.6667Z" fill="white"/>
                                        </g>
                                        <defs>
                                           <clipPath id="clip0_1_8">
                                              <rect width="50" height="50" fill="white"/>
                                           </clipPath>
                                        </defs>
                                     </svg>
                                  </a>
                                  <a href="https://twitter.com/gurusystems_ca"
                                     style="text-decoration:none;padding:0;display:inline-block;margin:0 5px"
                                     target="_blank">
                                     <svg width="20" height="20" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_11)">
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M49.9999 5.9112C48.1619 6.92331 46.1817 7.59574 44.114 7.89561C46.2325 6.33378 47.8527 3.8586 48.626 0.912093C46.6458 2.35352 44.4452 3.41112 42.1135 3.9767C40.2386 1.52432 37.5756 0 34.6257 0C28.9612 0 24.3753 5.64875 24.3753 12.6175C24.3753 13.6012 24.4638 14.5633 24.6374 15.4914C16.1142 14.9597 8.5582 9.93676 3.49987 2.29447C2.59064 4.22254 2.11186 6.41238 2.11211 8.6418C2.11211 13.0173 3.91688 16.8874 6.6703 19.1444C4.99005 19.0831 3.40948 18.506 2.02164 17.5712V17.7291C2.02164 23.8482 5.55471 28.9541 10.2495 30.1081C9.38949 30.3955 8.48156 30.5545 7.54597 30.5545C6.88349 30.5545 6.24492 30.4705 5.6101 30.3285C6.92123 35.3401 10.7062 38.9931 15.1888 39.0999C11.6742 42.4895 7.25996 44.5079 2.44788 44.5079C1.61744 44.5079 0.808251 44.4454 0 44.3261C4.54897 47.919 9.9376 50 15.7268 50C34.587 50 44.9094 30.759 44.9094 14.076C44.9094 13.5217 44.8993 12.9844 44.8808 12.4415C46.884 10.6774 48.6205 8.451 49.9954 5.91678L50 5.9111L49.9999 5.9112Z" fill="white"/>
                                        </g>
                                        <defs>
                                           <clipPath id="clip0_1_11">
                                              <rect width="50" height="50" fill="white"/>
                                           </clipPath>
                                        </defs>
                                     </svg>
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
                                  Canada
                               </p>
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
