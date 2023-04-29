<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Form</title>
    <link rel="shortcut icon" href="favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="signup-form">
        <h1>Sign-up Form</h1>
        <form action="Includes/signup.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Sign up</button>
            <?php
                    
                    if (isset($_GET['msg'])) {
                        echo "<p id='error' style='color:red; text-align:center;'>" 
                        . htmlspecialchars($_GET['msg']) . "</p>";
                        echo "<script>
                                setTimeout(function() {
                                    let error = document.getElementById('error');
                                    error.parentNode.removeChild(error);
                                }, 3000); // remove the element after 3 seconds
                            </script>";
                    }
                    ?>

        </form>
        <p>Already have an account? <a href="http://localhost/log%20in%20system/index.php">Login</a></p>

    </div>

</body>

</html>