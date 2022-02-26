<?php
include 'config/functions.php';
 
if (isset($_POST['updateProduct'])) { 
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
     // $image = $_POST['image'];

     $data = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'category_id' => $category_id,
        'price' => $price,
        'quantity' => $quantity,
        'description' => $description,
        // 'image' => $image,
    ];

     $product->updateProduct($data);
    //  $_SESSION['message'] = "Product updated succesfully!";
    //  $_SESSION['msg_type'] = "success";
     header("location: admin-show-product.php");
 }?>
