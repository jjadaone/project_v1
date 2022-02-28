<?php
include 'config/functions.php';

                    if (isset($_POST['addCategory'])) {

                        $target_dir = "assets/categories/";
                        $target_file = $target_dir.basename($_FILES["category_image"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                        if (move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file)) {
                            // echo "The file".basename( $_FILES["image"]["name"]). " has been uploaded.   ";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                        $image_name = basename($_FILES["category_image"]["name"],".jpg" . ".jpg"); // used to store the filename in a variable
                       
                        
                        $category_name = $_POST['category_name'];
                        $category_description= $_POST['category_description'];
                        $category_image = $_FILES['category_image']['name'];//'$image_name';

                        $data = [
                            'category_name' => $category_name,
                            'category_description' => $category_description,
                            'category_image' => $category_image,
                        ];
                        $category->addCategories($data);
                        $_SESSION['message'] = "Category added succesfully!";
                        $_SESSION['msg_type'] = "success";
                        header("location: admin-new-category.php");
                    }
?>