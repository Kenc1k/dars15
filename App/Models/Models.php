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

    public static function create_book($title,$description,$text,$img,$author_id,$genre_id){
        $sql = 'INSERT INTO ' . self::$table_books . ' (title,description,text,img,author_id,genre_id) VALUES(:title,:description,:text,:img,:author_id,:genre_id)';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':title' , $title);
        $query->bindParam(':description' , $description);
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

    public static function delete_author($id){
        $sql = 'DELETE FROM ' . self::$table_authors . ' WHERE id = :id';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':id' , $id);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }
    public static function delete_genre($id){
        $sql = 'DELETE FROM ' . self::$table_genres . ' WHERE id = :
        id';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':id' , $id);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }

    public static function delete_book($id){
        $sql = 'DELETE FROM ' . self::$table_books . ' WHERE id = :id';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':id' , $id);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }

    public static function update_author($name){
        $sql = 'UPDATE ' . self::$table_authors . ' SET name = :name';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':name' , $name);
        try{
            $query->execute();
            return true;
            }catch(PDOException $e){
                return false;
                }
    }

    public static function update_genre($name){
        $sql = 'UPDATE ' . self::$table_genres . ' SET name = :name';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':name' , $name);
        try{
            $query->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public static function update_book($title,$description,$text,$image,$author_id,$genre_id){
        $sql = 'UPDATE ' . self::$table_books . ' SET title = :title,description = :description,text = :text,image = :image,author_id = :author_id,genre_id = :genre_id';
        $query = self::getConnection()->prepare($sql);
        $query->bindParam(':title' , $title);
        $query->bindParam(':description' , $description);
        $query->bindParam(':text' , $text);
        $query->bindParam(':image' , $image);
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