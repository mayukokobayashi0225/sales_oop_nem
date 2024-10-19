<?php

require "Database.php";

class Product extends Database{

    public function product_store($request){
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products(product_name,price,quantity)VALUES('$product_name','$price','$quantity')";

        if($this->conn->query($sql)){
            header(('location: ../views/dashboard.php'));
            exit;
        }else{
            die('Error creating the user:'.$this->conn->error);
        }
    }

    public function getProduct($id){
        // session_start();
        $sql = "SELECT id,product_name,price,quantity FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error retrieving all Product:" .$this->conn->error);
        }
    }

    public function displayProducts(){
        $sql = "SELECT * FROM products";

        if($result = $this->conn->query($sql)){
            $items = [];
            //if there are some product, All of them are displayed
            //this is meant to handle emptyproducts table to avoid errors
            while($item = $result->fetch_assoc()){
                $items[] = $item;
            }
            return $items;
        }else{
            die("Error in retrieving: ".$this->conn->error);
        }
    }

    public function updateProduct($request,$id){
        //特定のidのデータを取得したので$idでどのデータが指定されているのかを特定している　form actions/edit-product.php

        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price = '$price',quantity = '$quantity'WHERE id = $id";

        if($this->conn->query($sql)){
            #if there is an uploaded photo, save it to the db and save the file to images folder.
            header ('location: ../views/dashboard.php');
        } else {
            die('Error updating your account: ' . $this->conn->error);
        }
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            header ('location: ../views/dashboard.php');
            //we don't need to get datas from sql .so I don't use $result inthis case.
        }else{
            die("Error delete product:" .$this->conn->error);
        }
    }

    public function buyProduct($id, $quantity) {
        $product = $this->getProduct($id);
        return $product['price'] * $quantity;
    }   

    public function updateQuantity($id,$original_quantity,$buy_quantity){

        $new_quantity = $original_quantity - $buy_quantity;
        $sql = "UPDATE products SET quantity = '$new_quantity' WHERE id = $id";

        if($result = $this->conn->query($sql)){
            header ('location: ../views/dashboard.php');
        }else{
            die("Error in retrieving: ".$this->conn->error);
        }
    }
}

?>