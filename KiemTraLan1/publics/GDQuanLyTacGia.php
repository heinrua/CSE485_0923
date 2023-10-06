<?php
    define('APP_ROOT',dirname(__FILE__,2));

    require_once APP_ROOT.'/controllers/TacGiaController.php';
    $TacGiaController = new TacGiaController;
    $TacGiaController->index();
    
    ?>