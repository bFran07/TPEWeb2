<?php
    // listar categorias
    function listarCategorias($db) {
        $query = $db->prepare('SELECT id, nombre FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // agregar una categoría
    function agregarCategoria($db, $nombre) {
        $query = $db->prepare('INSERT INTO categorias (nombre) VALUES (?)');
        $query->execute([$nombre]);
    }

    //  eliminar  categoría
    function eliminarCategoria($db, $id) {
        $query = $db->prepare('DELETE FROM categorias WHERE id = ?');
        $query->execute([$id]);
    }

    // editar categoría
    function editarCategoria($db, $id, $nuevoNombre) {
        $query = $db->prepare('UPDATE categorias SET nombre = ? WHERE id = ?');
        $query->execute([$nuevoNombre, $id]);
    }

    //  determinar qué acción realizar
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listar') {
            $categorias = listarCategorias($db);
            $smarty->assign('categorias', $categorias);
            $smarty->display('listar_categorias.tpl');
        } elseif ($_GET['action'] == 'agregar') {
            if (isset($_POST['nombre'])) {
                agregarCategoria($db, $_POST['nombre']);
                header('Location: categorias.php?action=listar');
            } else {
                $smarty->display('agregar_categoria.tpl');
            }
        } elseif ($_GET['action'] == 'eliminar') {
            if (isset($_GET['id'])) {
                eliminarCategoria($db, $_GET['id']);
                header('Location: categorias.php?action=listar');
            }
        } elseif ($_GET['action'] == 'editar') {
            if (isset($_GET['id'])) {
                if (isset($_POST['nombre'])) {
                    editarCategoria($db, $_GET['id'], $_POST['nombre']);
                    header('Location: categorias.php?action=listar');
                } else {
                    $categoria = listarCategorias($db);
                    $smarty->assign('categoria', $categoria);
                    $smarty->display('editar_categoria.tpl');
                }
            }
        }
    }

?>