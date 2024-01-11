<?php
session_start();
if(!isset($_SESSION['password'])){
  header("Location:../login.php");
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">
<head>
    <meta charset="utf-8" />
    <title>Ibex SMS | Manage and  broadcasting...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="layout-wrapper">
          <!-----------======header  ========-->
       
          <?php
          include("./componenets/header.php");
         

          
          ?>
          <!-----------======header  ========-->

 <!-----------======sidebar ==== ========-->
       
        <?php
          include("./componenets/sidebar.php");
         

          
          ?>
          <!-----------======sidebar=====  ========-->

        <!-- ========== App Menu ========== -->
        
        <div class="vertical-overlay"></div>
        <!-- <div class="main-content"> -->
           


        <!-----------======main content ==== ========-->
       
<?php
        //   include("./componenets/content.php");
         

          
          ?>
          <!-----------======footer=====  ========-->





            <!-- End Page-content -->
<!-----------======footer ==== ========-->
       
<?php
          include("./componenets/footer.php");
         

          
          ?>
          <!-----------======footer=====  ========-->
          