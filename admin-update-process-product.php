<?php
include 'config/functions.php';
 
if (isset($_POST['updateProduct'])) { 
    $target_dir = "assets/uploads/";
                        $target_file = $target_dir.basename($_FILES["image"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file".basename( $_FILES["image"]["name"]). " has been uploaded.   ";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                        $image_name = basename($_FILES["image"]["name"],".jpg" . ".jpg"); // used to store the filename in a variable

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];//'$image_name';

     $data = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'category_id' => $category_id,
        'price' => $price,
        'quantity' => $quantity,
        'description' => $description,
        'image' => $image,
    ];

     $product->updateProduct($data);
    //  $_SESSION['message'] = "Product updated succesfully!";
    //  $_SESSION['msg_type'] = "success";
     header("location: admin-show-product.php");
 }?>
