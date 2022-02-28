<?php
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/login-register.css">

<body>
    <main class="container">
    <div class="login-card">
        <h1>HELLO!</h1><br>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="USERNAME" required>
            <input type="password" name="password" placeholder="PASSWORD"required>
            <button type="submit" name="login">Log In</button>      
        </form>
        <p>NOT A MEMBER? <a href='register.php'>JOIN US<a></p>
    </div>
    </main>
</body>


<?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = $user->login($_POST['username'], $_POST['password']);

        if($user != '')
        {
            if($username = ['username'])
            {        
                if (is_array($user)) {
                $_SESSION['id'] = $user[0]['user_id'];
                $_SESSION['username'] = $user[0]['username'];
                header("Location:index.php");
            } 

            }
    
            else {
                echo 'wrong username and password';
            }

        }
        
    }
    
?>