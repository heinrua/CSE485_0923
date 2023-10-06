<?php
    define('APP_ROOT',dirname(__FILE__,2));
    $idSach = $_GET['id'];
    require_once APP_ROOT.'/controllers/SachController.php';
    $SachController = new SachController;
    $SachController->get1Sach($idSach);
    
    ?>