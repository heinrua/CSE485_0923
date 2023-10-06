<?php
    require_once APP_ROOT.'/services/SachService.php';
    class SachController{
        public function index(){
            //gọi dữ liệu từ SachService 
            $SachService = new SachService();
            $Sachs = $SachService->getAllSach();
            //render dữ liệu lấy đc ra HomePage
            include APP_ROOT.'/Views/quanLySach.php';
            
        }
        public function Get1Sach($idSach){
            //gọi dữ liệu từ SachService 
            $SachService = new SachService();
            $sach = $SachService->get1Sach($idSach);
            //render dữ liệu lấy đc ra HomePage
            include APP_ROOT.'/Views/EditSach.php';
            
        }
        public function addSach($tenSach, $namXuatBan, $idTG) {
            $SachService = new SachService();
            $Sachs = $SachService ->addSach($tenSach,$namXuatBan,$idTG);
            include APP_ROOT.'/Views/AddSach.php';
        }
    }
?>