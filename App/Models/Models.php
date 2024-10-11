<?php

namespace App\Models;

use App\Database\Database;
use PDO;
use PDOException;

class Models extends Database{

    private static $table_authors = 'authors';
    private static $table_books = 'books';
    private static $table_genres = 'genres';

    public static function get_authories(){
        $sql = 'SELECT * FROM ' . self::$table_authors;
        $query = self::getConnection()->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public static function  get_genres(){
        $sql = 'SELECT * FROM  ' . self::$table_genres;
        $query = self::getConnection()->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function get_books(){
        $sql = 'SELECT * FROM ' . self::$table_books;
        $query = self::getConnection()->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function create_authory($name){
        $sql = 'INSERT INTO ' . self::$table_authors . ' (name) VALUES(:name)';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':name', $name);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
    }
    }
    public static function create_genre($name){
        $sql = 'INSERT INTO ' . self::$table_genres .  ' (name) VALUES(:name)';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':name' , $name);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }

    public static function create_book($title,$descriptin,$text,$img,$author_id,$genre_id){
        $sql = 'INSERT INTO ' . self::$table_books . ' (title,description,text,img,author_id,genre_id) VALUES(:title,:description,:text,:img,:author_id,:genre_id)';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':titele' , $title);
        $query->bindParam(':description' , $descriptin);
        $query->bindParam(':text' , $text);
        $query->bindParam(':img' , $img);
        $query->bindParam(':author_id' , $author_id);
        $query->bindParam(':genre_id' , $genre_id);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }
    
}