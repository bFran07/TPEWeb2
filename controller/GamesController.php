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

            $games = $this->model->getGames();
            $categories = $this->model->getCategories();
            session_start();
            if(isset($_SESSION['usuario'])){
                $this->view->home($games, $categories,$is_logged=$_SESSION['logged'],$is_admin=$_SESSION['isAdmin']);
            }else{
                 $_SESSION['logged']=false;
                 $_SESSION['isAdmin']=false;
                 $_SESSION['usuario'] = '';
                 $_SESSION['id_usuario'] = '';
                 $this->view->home($games, $categories,$is_logged=$_SESSION['logged'],$id_admin=$_SESSION['isAdmin']);
            }
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
            session_start();
            if(isset($_SESSION['usuario'])){
                $this->view->viewGame($category,$game, $is_admin=$_SESSION['isAdmin'],$is_logged=$_SESSION['logged']);
            }
            else{
                $this->view->viewGame($category,$game, $is_admin=$_SESSION['isAdmin'],$is_logged=$_SESSION['logged']);
            }
        }

    }
?>