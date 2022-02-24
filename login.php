<?php
    include 'includes/header2.php';
    include 'config/functions.php';
?>

<body>
    <div class="login-card" style="margin: 200px;">
        <h2>LOGIN PAGE</h2><br>
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username"><br><br>
            <label for="password">Password</label>
            <input type="password" name="password"><br><br>
            <button type="submit" name="login">Login In</button>      
        </form>
    </div>
</body>


<?php
    if (isset($_POST['login'])) {
        $user = $user->login($_POST['username'], $_POST['password']);
        if (is_array($user)) {
            $_SESSION['id'] = $user[0]['user_id'];
            $_SESSION['username'] = $user[0]['username'];
            header("Location:index.php");
        } else {
            echo 'wrong username and password';
        }
    }
    
?>