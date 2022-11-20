<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Responsive Table</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/table-responsive.css" rel="stylesheet" />
    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


  </head>

  <body>
  <?php
    error_reporting(0);
    $mod=sanitize($_GET['mod']);
    if(strlen($mod>15)){
        die('Module name is too long.');
    }
    if ($mod == "") {
        $mod = MODULE_PATH . 'home/home';
    } else {
        if (preg_match('/_/i', $mod)) {
            $modname = explode('_', $mod);
            $mod = MODULE_PATH . $modname[0] . '/' . $mod;
        } else {

            $mod = MODULE_PATH . $mod . '/' . $mod;
        }
    }
    ?>
  