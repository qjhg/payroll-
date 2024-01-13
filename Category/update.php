<?php
include("connection.php");
?>
<?php
$update_id=$_GET['update'];
?>

<?php
include("connection.php");

?>
<?php
$select="SELECT * FROM `category` WHERE `id`=$update_id";
$result=mysqli_query($connection,$select);
$fetch=mysqli_fetch_assoc($result);

?>



 <?php
 $update_id=$_GET['update'];
if(isset($_POST['submit'])){
    $name = $_POST['category_name'];
    $type=$_POST['category_type'];
    $description=$_POST['category_description'];
      $update="UPDATE `category` SET `category_name`='$name',`category_type`='$type',`category_description`='$description' WHERE `id`=$update_id";
         $query=mysqli_query($connection,$update);
         if($query){
          header("Location:View.php");
       }else{
          echo "Data failed to update";
       
       }}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Basic Elements | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script src="../velzon/assets/js/layout.js"></script>
    <link href="../velzon/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../velzon/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../velzon/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="../velzon/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    include("../velzon/componenets/header.php");
    ?>
        <div class="main-content">
            <div class="page-content">
                        <div class="col-lg-6 offset-2 mt-4">
                            <div class="card">
                              <div class="card-header">
                                <h1 class=" text-primary" style="font-size: 20px;
">Edit Category</h1>
                              </div>
                            
                                <div class="card-body ">
                                    <div class="live-preview">
                                        <form class="row g-3 needs-validation" novalidate method="POST">
                                            <div class="col-md-12">
                                                <label for="validationCustom01" class="form-label"><strong>Category Name </strong></label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    value="<?php echo $fetch['category_name']?>" name="category_name" required >
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationCustom02" class="form-label"><strong>Category type</strong></label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    value="<?php echo $fetch['category_type']?>" name="category_type" required>
                                              
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationCustomUsername"
                                                    class="form-label"><strong>Category Description</strong></label>
                                                <div class="input-group has-validation">
                                                    <input type="text" class="form-control"
                                                        id="validationCustomUsername" value="<?php echo $fetch['category_description']?>"
                                                        aria-describedby="inputGroupPrepend" name="category_description" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit" name="submit">Update</button>
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

   <?php
       include("../velzon/componenets/sidebar.php");
   ?>

   
    <script src="../velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../velzon/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../velzon/assets/libs/node-waves/waves.min.js"></script>
    <script src="../velzon/assets/libs/feather-icons/feather.min.js"></script>
    <script src="../velzon/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../velzon/assets/js/plugins.js"></script>
    <script src="../velzon/assets/libs/prismjs/prism.js"></script>
    <script src="../velzon/assets/js/pages/form-validation.init.js"></script>
    <script src="../velzon/assets/js/app.js"></script>
    <?php
       include("../velzon/componenets/footer.php");
   ?>

</body>
</html>
</body>
</html>