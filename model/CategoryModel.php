<?php
class CategoryModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_steamcito;charset=utf8', 'root', '');
    }

    function getCategories() {
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    function addCategory($name) {
        $query = $this->db->prepare("INSERT INTO category (category) VALUES (?)");
        $query->execute(array($name));
    }

    function deleteCategory($id) {
        $query = $this->db->prepare("DELETE FROM category WHERE id_category = ?");
        $query->execute(array($id));
    }

    function editCategory($id, $name) {
        $query = $this->db->prepare("UPDATE category SET category = ? WHERE id_category = ?");
        $query->execute(array($name, $id));
    }

    function getCategory($id) {
        $query = $this->db->prepare("SELECT * FROM category WHERE id_category = ?");
        $query->execute(array($id));
        $category = $query->fetch(PDO::FETCH_ASSOC);
        return $category;
    }
}


?>



    

