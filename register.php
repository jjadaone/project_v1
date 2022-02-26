
<?php
    include 'includes/header.php';
    include 'config/functions.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/login-register.css">
<body>
<main class="register_container">
    <div class="register_card">
        <h1>WELCOME!</h1>
        <form action="register.php" method="POST">
            <div class="reg-input">
            <input type="text" name="first_name" placeholder="FIRST NAME">

            <input type="text" name="last_name" placeholder="LAST NAME">

            <input type="text" name="username" placeholder="USERNAME">

            <input type="password" name="password" placeholder="PASSWORD">

            <input type="email" name="email" placeholder="EMAIL ADDRESS">
            <input type="date" name="birthdate" placeholder="DATE OF BIRTH">
            </div>
            
            <div class="gender-radio">
            <!--<p>Select your gender</p>-->
            <label for="male">MALE</label>
            <input type="radio" name="gender" value="M" id="male">
            <label for="female">FEMALE</label>
            <input type="radio" name="gender" value="F" id="female">
            </div>
            


            <button type="submit" name="register">REGISTER</button>      
        </form>
        <p>ALREADY A MEMBER? <a href="/">SIGN IN</a></p>
    </div>
</div>
</body>

<?php

    if (isset($_POST['register'])) {


        $first_name = $_POST['first_name'];
        $last_name = $_pOST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'gender' => $gender,
            'birthdate' => $birthdate
        ];

        $user->register($data);
        header("Location: login.php");
    }




?>