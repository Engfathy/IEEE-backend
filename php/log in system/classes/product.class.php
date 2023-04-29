<?php

class Product extends Dbh {


    protected function checkProduct($user_name,$name){
        $sql="SELECT * FROM products WHERE user_name= ? AND product_name = ?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$user_name,$name]);
        $resultOfCkeck;
        if ($stmt->rowCount() > 0){
            $stmt= null;
            $error_msg = "product already exist";
            header("Location: http://localhost/log%20in%20system/createProduct.php?error=" . 
            urlencode($error_msg)
            );
            $resultOfCkeck=true;
    }else {
        $resultOfCkeck=false;
    }

    return $resultOfCkeck;
}
protected function setProduct($name,$price,$user_name){
    $sql="INSERT INTO products (product_name, price, user_name)
    VALUES (? ,?, ?)";
    $stmt=$this->connect()->prepare($sql);
    if ($stmt->execute([$name,$price,$user_name])){
        $stmt= null;
        $msg = "product Added successfuly";
        header("Location: http://localhost/log%20in%20system/createProduct.php?error=" . 
        urlencode($msg)
        );
        exit();
    }
}

protected function deleteProduct($name,$user_name){
    $sql="DELETE  FROM products WHERE product_name = ? AND user_name = ?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$name,$user_name]);
    if ($stmt->rowCount() > 0){
        $stmt= null;
        $msg = "product deleted successfuly";
        header("Location: http://localhost/log%20in%20system/deleteProduct.php?error=" . 
        urlencode($msg)
        );
        exit();
    }else{
        $error_msg = "There is no product with this name";
        header("Location: http://localhost/log%20in%20system/deleteProduct.php?error=" . 
        urlencode($error_msg)
        );
        exit();
    }
}
protected function getProduct($name,$user_name){
    $sql="SELECT * FROM products WHERE product_name = ? AND user_name = ?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$name,$user_name]);
    if ($stmt->rowCount() == 0){
        $stmt= null;
        $msg = "No product found";
        header("Location: http://localhost/log%20in%20system/getProduct.php?error=" . 
        urlencode($msg)
        );
        exit();
    } else {
        $rows= $stmt->fetchAll();
            $product = $rows[0]["product_name"];
            $price = $rows[0]["price"] ;

                header("Location: http://localhost/log%20in%20system/getProduct.php?name=" . 
                urlencode($product) ."&price=".urlencode($price)
                );
                
                exit();
            }
}
protected function updateProduct($name,$user_name,$price){
    $sql="SELECT * FROM products WHERE product_name = ? AND user_name = ?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$name,$user_name]);
    if ($stmt->rowCount() == 0){
        $stmt= null;
        $msg = "No product found";
        header("Location: http://localhost/log%20in%20system/updateProduct.php?error=" . 
        urlencode($msg)
        );
        exit();
    } else {
        $updateSql="UPDATE products SET price = ? WHERE product_name = ? AND user_name = ?;";
        $updatestmt=$this->connect()->prepare($updateSql);
        if($updatestmt->execute([$price,$name,$user_name])){
            $msg = "Product updated successfully";
            header("Location: http://localhost/log%20in%20system/updateProduct.php?msg=" . 
            urlencode($msg)
            );
            exit();
        }
        
}

}
}