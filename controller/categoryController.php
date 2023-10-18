<?php
require_once "model/CategoryModel.php";
require_once "view/CategoryView.php";

class CategoryController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function showCategories() {
        $categories = $this->model->getCategories();
        session_start();
        if (isset($_SESSION['usuario'])) {
            $this->view->showCategories($categories, $is_logged = $_SESSION['logged'], $is_admin = $_SESSION['isAdmin']);
        } else {
            $_SESSION['logged'] = false;
            $_SESSION['isAdmin'] = false;
            $_SESSION['usuario'] = '';
            $_SESSION['id_usuario'] = '';
            $this->view->showCategories($categories, $is_logged = $_SESSION['logged'], $id_admin = $_SESSION['isAdmin']);
        }
    }

    function addCategory() {
        $name = $_POST['name'];
        $this->model->addCategory($name);
        header('Location: router.php?action=showCategories');
    }

    function deleteCategory($id) {
        $this->model->deleteCategory($id);
        header('Location: router.php?action=showCategories');
    }

    function editCategory($id) {
        $category = $this->model->getCategory($id);
        $this->view->editCategory($id, $category);
    }

    function updateCategory() {
        $name = $_POST['name'];
        $id = $_POST['id_category'];
        $this->model->editCategory($id, $name);
        header('Location: router.php?action=showCategories');
    }
}
?>
