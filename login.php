
<?php
include("connection.php");
session_start();
?>
<?php

if(isset($_SESSION['password'])){
    header("Location:./velzon/index.php");
    exit;
}
?>
<?php
            if(isset($_POST["submit"])) {
                         $email=$_POST['email'];
                         $password=$_POST['password'];
                         $select="SELECT * FROM `register` WHERE `email`='$email' ";
$query=mysqli_query($connection,$select);
$fetch=mysqli_fetch_assoc($query);
    if($password==$fetch['password']){
        $_SESSION['password']=$password;
       header("Location:./velzon/index.php");
    }else{
        echo"not registered  ";
    }
}
                         

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Basic Elements | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="./velzon/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="./velzon/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="./velzon/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="./velzon/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="./velzon/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

        <!-- ============================================================== -->

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">     
                        <div class="col-md-4 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form class="" method="POST">
                                            <h1 class="text-center text-primary">Log In</h1>
                                           
                                            <div class="col-md-12">
                                                <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                                                <input type="email" class="form-control" id="validationCustom02"
                                                    name="email" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationCustomUsername"
                                                    class="form-label"><strong>Password</strong></label>
                                                <div class="input-group has-validation">
                                                
                                                    <input type="password" class="form-control"
                                                        id="validationCustomUsername"
                                                        aria-describedby="inputGroupPrepend" name="password" required>
                                                </div>
                                            </div>
                                           <br>
                                    <div class="row">
                                 
                                            <div class="col-12  d-flex justify-content-end">
                                                <button class="btn btn-primary " type="submit" name="submit">Login </button>
                                            </div>
</div>
                                          
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
           
        </div>

    <script src="./velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./velzon/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./velzon/assets/libs/node-waves/waves.min.js"></script>
    <script src="./velzon/assets/libs/feather-icons/feather.min.js"></script>
    <script src="./velzon/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./velzon/assets/js/plugins.js"></script>
    <script src="./velzon/assets/libs/prismjs/prism.js"></script>
    <script src="./velzon/assets/js/pages/form-validation.init.js"></script>
    <script src="./velzon/assets/js/app.js"></script>
</body>
</html>