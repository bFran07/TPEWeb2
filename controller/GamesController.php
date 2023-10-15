<?php
    require_once "./Model/GamesModel.php";
    //require_once "./Model/LoginModel.php";
    require_once "./View/GamesView.php";
    //require_once "./View/LoginView.php";
    //require_once "./Controller/LoginController.php";
        
    class GamesContoller {

        private $model;
        private $view;
        private $login;

        function __construct()
        {
            $this->model = new GamesModel;
            $this->view = new GamesView;
            //$this->login = new LoginController;
            //$this->loginModel = new LoginModel;
        }

        function showHome(){

            $products = $this->model->getGames();
            $categories = $this->model->getCategories();
            $this->view->home($products, $categories);
            

        }

        function addGame(){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $desc = $_POST['description'];
            $img = $_POST['image'];
            $id_category=$this->model->getGameId($_POST['category']);
            $this->model->insertGame($name,$price,$desc,$img,$id_category);
            header(home);
        }

        function deleteGame($id){
            $this->model->deleteGameDB($id);
            header(home);
        }

        function editGame($id){
            $categories = $this->model->getCategories();
            $game = $this->model->getGame($id);
            $category = $this->model->getCategory($game['id_category']);
            $this->view->editGame($id,$categories,$category, $game);
        }

        function updateGame(){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $desc=$_POST['description'];
            $img=$_POST['image'];
            $id_category=$this->model->getGameId($_POST['category']);
            $id_game = $_POST['id_game'];
            $this->model->updateGame($name, $price, $desc, $img, $id_category, $id_game);
            header(home);
        }

        function viewGameController($id){
            $game = $this->model->getGame($id);
            $category = $this->model->getCategory($game['id_category']);
            $this->view->viewGame($category,$game);
        }

    }
?>