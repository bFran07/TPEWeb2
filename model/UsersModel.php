
<?php
    class UsersModel{

        private $db;
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_steamcito;charset=utf8', 'root', '');
        }

        function getUser($user){
            $query = $this->db->prepare("select * from user where email=? limit 1");
            $query->execute(array($user));
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        function getUsers(){
            $query = $this->db->prepare("SELECT * FROM user");
            $query->execute();
            $users = $query->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        }

        function getUserId($email){
            $query = $this->db->prepare("SELECT * FROM user WHERE email=?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }

        function updateUser($admin, $id_user){

            $query = $this->db->prepare(
                "UPDATE user SET admin='$admin' WHERE id_user=?"
            );
            $query->execute(array($id_user));
        }

        function deleteUserDB($id_user){
            $sentencia = $this->db->prepare(
                "DELETE FROM user WHERE id_user=?"
            );
            $sentencia->execute(array($id_user));

        }

        function signupUser($email, $password){
            $query = $this->db->prepare('INSERT INTO user(email, password) VALUES(?,?)');
            $query->execute(array($email,$password));
        }

    }
?>