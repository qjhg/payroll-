<?php
include("connection.php");

?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['category_name'];
    $type=$_POST['category_type'];
    $description=$_POST['category_description'];
         $insert="INSERT INTO `category` (`category_name`,`category_type`,`category_description`) VALUES ('$name',' $type','$description')";
         $query=mysqli_query($connection,$insert);
         if($query){
          echo "Data inserted successfully";
       }else{
          echo "Data failed to insert";
       
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
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 ">
                            <h5 class="card-title mb-0">View Category</h5>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
      Add Category
    </button>
    <div class="live-preview">
   
   <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalgridLabel">Grid Modals</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
               <div class="card-body ">
                                   <div class="live-preview">
                                       <form class="row g-3 needs-validation" novalidate method="POST">
                                           <div class="col-md-12">
                                               <label for="validationCustom01" class="form-label"><strong>Category Name </strong></label>
                                               <input type="text" class="form-control" id="validationCustom01"
                                                   value="" name="category_name" required >
                                               
                                           </div>
                                           <div class="col-md-12">
                                               <label for="validationCustom02" class="form-label"><strong>Category type</strong></label>
                                               <input type="text" class="form-control" id="validationCustom02"
                                                   value="" name="category_type" required>
                                             
                                           </div>
                                           <div class="col-md-12">
                                               <label for="validationCustomUsername"
                                                   class="form-label"><strong>Category Description</strong></label>
                                               <div class="input-group has-validation">
                                                   <input type="text" class="form-control"
                                                       id="validationCustomUsername"
                                                       aria-describedby="inputGroupPrepend" name="category_description" required>
                                               </div>
                                           </div>
                                           <div class="col-12">
                                               <button class="btn btn-primary" type="submit" name="submit">Submit</button>
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
                        </div>
                     
                     
                    </div>
                   
                    <div class="card-body">
                        <table id="example"
                            class="table table-bordered dt-responsive nowrap table-striped align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                   
                                    
                                    <th>ID</th>
                                    <th>category_name</th>
                                    <th>category_type</th>
                                    <th>category_description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$select="SELECT * FROM `category` ";
$result=mysqli_query($connection,$select);
while($fetch=mysqli_fetch_assoc($result)){
   ?>
   <tr>
                                    <td><?php echo $fetch['id']?></td>
                                    <td><?php echo $fetch['category_name']?></td>
                                    <td><?php echo $fetch['category_type']?></td>
                                    <td><?php echo $fetch['category_description']?></td>
                                    <td>
                                    <a class="btn btn-danger" href="Delete.php?delete=<?php echo $fetch['id']?>">Delete</a>
                                        <a href="update.php? update=<?php echo $fetch['id']?>" class="btn btn-primary" > Update</a>

                                    </td>

                                </tr>
   <?php
}

?>

                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end col-->
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