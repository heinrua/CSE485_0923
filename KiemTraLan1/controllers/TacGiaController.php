<?php
    require_once APP_ROOT.'/services/TacGiaService.php';
    class TacGiaController{
        public function index(){
            //gọi dữ liệu từ TacGiaService 
            $TacGiaService = new TacGiaService();
            $TacGias = $TacGiaService->getAllTacGia();
            //render dữ liệu lấy đc ra HomePage
            include APP_ROOT.'/Views/quanLyTacGia.php';
        }
        public function Get1TacGia($idTG){
            //gọi dữ liệu từ TacGiaService 
            $SachService = new TacGiaService();
            $TacGia = $SachService->get1TacGia($idTG);
            //render dữ liệu lấy đc ra HomePage
            include APP_ROOT.'/Views/EditTacGia.php';
            
        }
        public function addTacGia($tenTacGia) {
            
        }
    }
?>