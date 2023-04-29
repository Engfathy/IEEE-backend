<?php
if(isset($_COOKIE["user_id"])){
  header("Location: http://localhost/log%20in%20system/app.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="shortcut icon" href="favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login-form">

        <h1>Login Form</h1>
        <form action="includes/login.inc.php" method="post">
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
            <?php
                if (isset($_GET['error'])) {
                    echo "<p id='error' style='color:red; text-align:center;'>" . htmlspecialchars($_GET['error']) . "</p>";
                    echo "<script>
                            setTimeout(function() {
                                let error = document.getElementById('error');
                                error.parentNode.removeChild(error);
                            }, 3000); // remove the element after 3 seconds
                        </script>";
                }
                ?>
            <p>Don't have an account? <a href="http://localhost/log%20in%20system/signup.php">Sign up</a></p>
        </form>
    </div>
</body>

</html>