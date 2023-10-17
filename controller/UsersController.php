<?php
    require_once "./Model/UsersModel.php";
    require_once "./View/UsersView.php";
    class UsersController {
        private $model;
        private $view;

        function __construct(){
            $this->model = new UsersModel;
            $this->view = new UsersView;
        }

        function AdminPanel(){
            session_start();
            if (isset($_SESSION['isAdmin'])){
                $users = $this->model->getUsers();
                $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin'],$isLogged=$_SESSION['logged']);
            }
        }

        function viewSignUp(){
            $this->view->goSignUp();
        }

        function createUser(){

            if ((isset($_POST['email']))&&(isset($_POST['password']))){
                $email = $_POST['email'];
                $emailDB = $this->model->getUserId($email);
                if (!$emailDB){
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $this->model->signupUser($email, $password);
                    $id_usuario=$this->model->getUserId($email);
                    if ((!empty($_POST['email'])) && (!empty($_POST['password']))){

                        session_start();
                        $_SESSION['isAdmin'] = false;
                        $_SESSION['logged'] = true;
                        $_SESSION['usuario'] = $email;
                        $_SESSION['id_usuario'] = $id_usuario[0]['id_usuario'];
                        header(home);
                    }
                }else{
                    echo '<h3 class="text-danger text-center">Ese Email ya esta registrado</h3>';
                }
            }

        }

        function verifyLogin(){
            if ((!empty($_POST['email']))&&(!empty($_POST['password']))){
                $usuario = $_POST['email'];
                $contraseña = $_POST['password'];
                $dbUsuario = $this->model->getUser($usuario); //Obtiene el email y usuario de la db 
                $id_usuario=$this->model->getUserId($usuario);
                if ($dbUsuario && password_verify($contraseña, ($dbUsuario[0]["password"]))){
                    
                    
                    if ($dbUsuario[0]['admin']==true){
                        session_start();
                        $_SESSION['isAdmin'] = true;
                        $_SESSION['logged'] = true;
                        $_SESSION['user'] = $usuario;
                        $_SESSION['id_user'] = $id_usuario[0]['id_user'];
                        header(home);
                    }else{
                        session_start();
                        $_SESSION['isAdmin'] = false;
                        $_SESSION['logged'] = true;
                        $_SESSION['user'] = $usuario;
                        $_SESSION['id_user'] = $id_usuario[0]['id_user'];

                        header(home);
                    }                   
                    
                }else{
                    echo '<h3 class="text-danger text-center">Email o password erroneos, verifique sus datos y vuelva a intentar.</h3>';
                }


            }
        }

        function promoteUser($id_usuario){
            session_start();
            $admin = 1;
            $this->model->updateUser($admin,$id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin'],$isLogged=$_SESSION['logged']);
        }

        function demoteUser($id_usuario){

            session_start();
            $admin = 0;
            $users = $this->model->getUsers();
            $this->model->updateUser($admin,$id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin'],$isLogged=$_SESSION['logged']);
        }

        function deleteUser($id_usuario){
            session_start();
            $this->model->deleteUserDB($id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin'],$isLogged=$_SESSION['logged']);
        }

        function logout(){
            session_start();
            session_destroy();
            header(home);
        }
    }
?>