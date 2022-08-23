<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$current_page = str_replace($url, "", $current_url); 
if($current_page == ""){
  $current_page = "/";
}
?>


<title><?php echo $title ?></title>
<meta charset="UTF-8">
<meta http-equiv="pragma" content="no-cache" />
<meta name="description" content="<?php echo $description ?>">
<meta name="keywords" content="<?php echo $keyword ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="canonical" href="<?php echo $url, $current_page; ?>" />