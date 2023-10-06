<?php
    class TacGia{
        private $idTG;
        private $tenTacGia;
    
        public function __construct($idTG, $tenTacGia){
            $this->idTG = $idTG;
            $this->tenTacGia= $tenTacGia;
        }

        public function getIdTG(){
            return $this->idTG;
        }
        public function setIdTG($idTG){
            $this->idTG = $idTG;
        }

        public function getTenTacGia(){
            return $this->tenTacGia;
        }
        public function setTenLop($tenTacGia){
            $this->tenTacGia= $tenTacGia;
        }
    }
?>