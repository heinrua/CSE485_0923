<?php
    define('APP_ROOT',dirname(__FILE__,2));

    require_once APP_ROOT.'/controllers/SachController.php';
    $SachController = new SachController;
    $SachController->index();
    
    ?>