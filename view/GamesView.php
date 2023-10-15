<?php
    require_once "libs/smarty/libs/Smarty.class.php";
    class GamesView{

        function home ($games, $categories){

            $smarty = new Smarty();
            $smarty->assign('games',$games);
            $smarty->assign('categories',$categories);
            $smarty->display('templates/home.tpl');

        }

        function editGame ($id_game, $categories, $category, $game){
            $smarty = new Smarty();
            $smarty->assign('id_game',$id_game);
            $smarty->assign('categories',$categories);
            $smarty->assign('category',$category);
            $smarty->assign('game',$game);
            $smarty->display('templates/editarJuego.tpl');
        }

        function viewGame($category, $game){
            $smarty = new Smarty();
            $smarty->assign('category',$category);
            $smarty->assign('game',$game);
            $smarty->display('templates/verJuego.tpl');
        }
    }

?>