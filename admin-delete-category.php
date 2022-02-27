<?php
    include 'config/functions.php';

    if (isset($_GET['id'])) {
        echo $_GET['id'];        
        $category->deleteCategories($_GET['id']);
        $_SESSION['message'] = "Product deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: admin-show-category.php");
    } else {
        echo 'failed';
    }
?>