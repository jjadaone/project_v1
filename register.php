
<?php
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/login-register.css">
<body>
<main class="register_container">
    <div class="register_card">
        <h1>WELCOME!</h1>
        <form action="register.php" method="POST">
            <div class="reg-input">
            <input type="text" name="first_name" placeholder="FIRST NAME" required>

            <input type="text" name="last_name" placeholder="LAST NAME"required>

            <input type="text" name="username" placeholder="USERNAME"required>

            <input type="password" name="password" placeholder="PASSWORD"required>

            <input type="email" name="email" placeholder="EMAIL ADDRESS"required>
            <input type="date" name="birthdate" placeholder="DATE OF BIRTH"required>
            </div>
            
            <div class="gender-radio">
            <!--<p>Select your gender</p>-->
            <label for="male">MALE</label>
            <input type="radio" name="gender" value="M" id="male"required>
            <label for="female">FEMALE</label>
            <input type="radio" name="gender" value="F" id="female"required>
            </div>
            


            <button type="submit" name="register">REGISTER</button>      
        </form>
        <p>ALREADY A MEMBER? <a href="login.php">SIGN IN</a></p>
    </div>
</main>
</body>

<?php

    if (isset($_POST['register'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = empty($_POST['gender']) ? '' : $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        if (!empty($first_name) && !empty($last_name) && !empty($username)
        && !empty($password) && !empty($email) && !empty($gender) && !empty($birthdate)) {
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
        } else {
            echo 'Please fill all the fields';
        }


    }




?>
<?php include 'includes/footer.php'; ?>