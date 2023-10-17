<?php
    class UsersView{


        function showAdminPanel($users, $isAdmin, $isLogged){
            $smarty = new Smarty();
            $smarty->assign('isAdmin',$isAdmin);
            $smarty->assign('isLogged',$isLogged);
            $smarty->assign('users',$users);
            $smarty->display('templates/adminPanel.tpl');
        }
        
        function goSignUp(){
            $smarty = new Smarty();
            $smarty->display('templates/registrarse.tpl');
        }
    }
?>