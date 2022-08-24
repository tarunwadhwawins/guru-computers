
<?php
require_once(dirname(__DIR__).'/core/dbconnection.php');
?>
<?php include_once(dirname(__DIR__).'/common/metatags.php'); ?>
<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$current_page = str_replace($url, "", $current_url); 
if($current_page == ""){
  $current_page = "/";
}
?>
<!--  -->
<!-- Fav-icon -->
<link rel="icon" href="<?php echo $url; ?>assets/images/favicon.png" type="image/x-icon">
<link rel="canonical" href="<?php echo $url, $current_page; ?>" />
<!--  -->
<!-- Link -->
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/common.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/header.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/footer.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/fonts.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.theme.default.min.css">
<!--  -->