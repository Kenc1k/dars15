<?php

include "../Database/Database.php"; 

class Models extends Database{

    private static $table = 'products';

    public static function add_product(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
    }

    public static function get_all(){
        $sql = "SELECT * FROM " . self::$table;
        $stmt = self::getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function delete($id){
        $sql = "DELETE FROM " . self::$table  . " WHERE id = :id";
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':id' , $id);
        $query->execute();
        return  $query->rowCount();
    }

    public static function update($id,$name,$price,$quantity){
        $sql = "UPDATE " . self::$table . " SET name = :name , price  = :price , quantity = :quantity WHERE id = :id";
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':id' , $id);
        $query->bindParam(':name' , $name);
        $query->bindParam(':price' , $price);
        $query->bindParam(':quantity' , $quantity);
        $query->execute();
        return  $query->rowCount();
    }
    function upload_image($file) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if ($file["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        $allowedFormats = ["jpg", "png", "jpeg", "gif"];
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo "The file " . basename($file["name"]) . " has been uploaded.";
                return $target_file; // Return the path of the uploaded file
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


}