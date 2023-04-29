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
    <form class="app-form" method="post" action="">
        <button type="submit" name="create" value="http://localhost/log%20in%20system/createProduct.php">Create
            Product</button>
        <button type="submit" class="delete" name="delete"
            value="http://localhost/log%20in%20system/deleteProduct.php">Delete Product</button>
        <button type="submit" name="get" value="http://localhost/log%20in%20system/getProduct.php">Get Product</button>
        <button type="submit" name="update" value="http://localhost/log%20in%20system/updateProduct.php">Update
            Product</button>
    </form>

    <?php
            
            if (isset($_POST['create'])) {
              // Redirect to create Page 
              header("Location:".$_POST['create']);
              exit();
            }
            elseif (isset($_POST['delete'])) {
              // Redirect to delete Page 
              header("Location:".$_POST['delete']);
              exit();
            }
            elseif (isset($_POST['get'])) {
              // Redirect to get Page 
              header("Location:".$_POST['get']);
              exit();
            }
            elseif (isset($_POST['update'])) {
              // Redirect to update Page 
              header("Location:".$_POST['update']);
              exit();
            }
          ?>

</body>

</html>