<?php
    include_once 'config/config.php';
    include_once './classes/Crud.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $Crud = new Crud($db);
        $Crud->delete($id);

        header('Location: index.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
?>
