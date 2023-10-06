<?php
    define('APP_ROOT',dirname(__FILE__,2));
    $idTG = $_GET['id'];
    require_once APP_ROOT.'/controllers/TacGiaController.php';
    $SachController = new SachController;
    $SachController->get1Sach($idTG);
    
    ?>