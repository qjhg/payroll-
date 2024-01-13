<?php
include("connection.php");
?>
<?php
 $id=$_GET['delete'];
 $select="DELETE FROM `category` WHERE `id`= '$id' ";
 $result=mysqli_query($connection,$select);
 if($result){
    header("Location:View.php");
 }else{
    echo "Error in deleting the category. Please try again later.";
 }

?>