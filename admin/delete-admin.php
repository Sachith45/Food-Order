<?php

    //include constant.php here
    include("../config/constant.php");

    // get the id of the admin to be deleted
    $id = $_GET['id'];
    //create query
    $sql = "DELETE FROM tbl_admin   WHERE id=$id";

    //redirect to manage admin page with message
    $res = mysqli_query($conn, $sql);

    //check whether query successfully or not

    if($res == true){
        //delete successfully
       $_SESSION['delete'] = "<div class='success'>Admin deleted successfully</div>";
       header('location:'.SITEURL."admin/manage-admin.php");
    }else{
        //fales to delete
        echo "admin delete failed";
        $_SESSION['delete'] = "<div class='error'>Failed to delete,Try again later</div>";
        header('location:'.SITEURL."admin/manage-admin.php");
    }
?>