<?php
if(!isset($_COOKIE["user_id"])){
  header("Location: http://localhost/log%20in%20system/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo/lets-shopping-logo-design.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.app.css">
    <title>MY app</title>
</head>

<body>
    <nav>
        <img src="logo/lets-shopping-logo-design.jpg" alt="Loading">
        <div class="container">
                <?php
                    if(isset($_COOKIE["user_id"])){
                        echo " <span class='user'>Hello ".$_COOKIE["user_id"] ."</span>";
                }
                ?>
            <a href="logout.php"><button>Sign Out</button></a>

        </div>
    </nav>
    <form action="includes/get.inc.php" method="post" class="get-form ">
        <label for="product-name">Product name</label>
        <input type="text" name="productName" id="product-name">
        <input type="text" hidden name="user_id" value='<?php echo $_COOKIE["user_id"]; ?>'>
        <button type="submit">Get</button>
        <a href="http://localhost/log%20in%20system/app.php">Back to main</a>
    </form>
    <?php
        if (isset($_GET['error'])) {
            echo "<p id='error' style='color:red; text-align:center;'>"
             . htmlspecialchars($_GET['error']) . "</p>";
            echo "<script>
                    setTimeout(function() {
                        let error = document.getElementById('error');
                        error.parentNode.removeChild(error);
                    }, 6000); // remove the element after 3 seconds
                </script>";
        }
         if (isset($_GET['name']) && isset($_GET['price'])) {
            echo "<p id='error' style='color:red; text-align:center;'>You select " 
            . htmlspecialchars($_GET['name']) .
            " and its price ". htmlspecialchars($_GET['price']) ."</p>";
           
        }
        ?>

</body>

</html>