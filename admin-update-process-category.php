<?php
include 'config/functions.php';
 
if (isset($_POST['updateCategory'])) { 
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $category_description= $_POST['category_description'];

    $data = [
        'category_id' => $category_id,
        'category_name' => $category_name,
        'category_description' => $category_description,
    ];
     $category->updateCategories($data);
    //  $_SESSION['message'] = "Product updated succesfully!";
    //  $_SESSION['msg_type'] = "success";
    header("location: admin-show-category.php");
     
 }?>

