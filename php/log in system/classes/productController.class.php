<?php

class ProductController extends Product {

    private $user_name;
    private $name;
    private $price;
    

    public function __construct($user_name,$name,$price){
        $this->user_name=$user_name;
        $this->name=$name;
        $this->price=$price;
        
    }
    
    public function CreateProduct() {

        $check=$this->checkProduct($this->user_name,$this->name);
        if($check === false){
            $this->setProduct($this->name,$this->price,$this->user_name);
            exit();
        }

}
    public function delProduct() {
        $this->deleteProduct($this->name,$this->user_name);
        
}

    public function displayProduct() {
            $this->getProduct($this->name,$this->user_name);
        
        }

    public function changePrice() {
            $this->updateProduct($this->name,$this->user_name,$this->price);
        
        }


}