
<?php
    include 'includes/header2.php';
    include 'config/functions.php';
?>

<body>
    <div class="register-card" style="margin: 200px;">
        <h2>SIGNUP PAGE</h2><br>
        <form action="register.php" method="POST">

            <label for="first_name">First Name</label>
            <input type="text" name="first_name"><br><br>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name"><br><br>

            <label for="username">Username</label>
            <input type="text" name="username"><br><br>

            <label for="password">Password</label>
            <input type="password" name="password"><br><br>

            <label for="email">Email</label>
            <input type="email" name="email"><br><br>

            <p>Selct your gender</p>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="M">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="F"><br><br>

            <label for="birthdate">Birthdate</label>
            <input type="date" name="birthdate"><br><br>


            <button type="submit" name="register">Sign up</button>      
        </form>
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