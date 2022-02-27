<?php
include 'config/functions.php';

                    if (isset($_POST['addCategory'])) {
    
                        $category_name = $_POST['category_name'];
                        $category_description= $_POST['category_description'];

                        $data = [
                            'category_name' => $category_name,
                            'category_description' => $category_description,
                        ];

                        $category->addCategories($data);
                        $_SESSION['message'] = "Category added succesfully!";
                        $_SESSION['msg_type'] = "success";
                        header("location: admin-new-category.php");
                    }
?>