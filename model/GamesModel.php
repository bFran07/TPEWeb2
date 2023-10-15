<?php
    class GamesModel{

        private $db;

        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_steamcito;charset=utf8', 'root', '');
        }

        function getGames(){
            $query = $this->db->prepare("SELECT * FROM game");
            $query->execute();
            $games = $query->fetchAll(PDO::FETCH_ASSOC);
            return $games;
        }

        function getCategories(){
            $query = $this->db->prepare("SELECT * FROM category");
            $query->execute();
            $categories = $query->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }

        function getCategory($id){
            $query = $this->db->prepare("SELECT * FROM category WHERE id_category=?");
            $query->execute(array($id));
            $category = $query->fetch(PDO::FETCH_ASSOC);
            return $category;
        }

        function getCategoryName($id)
        {
            $query = $this->db->prepare("SELECT category FROM category WHERE id_category=?");
            $query->execute(array($id));
            $category = $query->fetch(PDO::FETCH_ASSOC);
            return $category['category'];
        }

        function getGameId($id){
            $query = $this->db->prepare("SELECT id_category FROM category WHERE category=?");
            $query->execute(array($id));
            $category = $query->fetch(PDO::FETCH_ASSOC);
            return $category['id_category'];
        }

        function insertGame($name,$price,$desc,$img,$id_category){
            $query = $this->db->prepare(
                "INSERT INTO game(name,price,description,image,id_category) VALUES(?, ?, ?, ?, ?)");
            $query->execute(array($name, $price, $desc, $img, $id_category));
        }

        function deleteGameDB($id){
            $query = $this->db->prepare("DELETE FROM game WHERE id_game=?");
            $query->execute(array($id));
        }

        function updateGame($name, $price, $desc, $image, $category, $id){
            $query = $this->db->prepare(
                "UPDATE game SET id_game='$id', name='$name', price='$price', description='$desc',image='$image', id_category='$category' WHERE id_game=?");
            $query->execute(array($id));
        }

        function getGame($id){
            $query = $this->db->prepare("SELECT * FROM game WHERE id_game=?");
            $query->execute(array($id));
            $game = $query->fetch(PDO::FETCH_ASSOC);
            return $game;
        }
    }


?>