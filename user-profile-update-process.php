<?php
include 'config/functions.php';
include 'includes/header2.php';

 
if (isset($_POST['updateUser'])) { 

    
    $user_id = $_SESSION['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    // $email = $_POST['email'];
    $contact = $_POST['contact'];
    $birthdate = $_POST['birthdate'];

    $data = [
        'user_id' => $user_id,
        'first_name' => $first_name,
        'last_name' => $last_name,
        // 'email' => $email,
        'contact' => $contact,
        'birthdate' => $birthdate,
    ];
     $user->updateUser($data);
     $_SESSION['message'] = "Product updated succesfully!";
     $_SESSION['msg_type'] = "success";
    header("location: user-profile.php");
     
 }?>

