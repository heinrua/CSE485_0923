<?php
    class SinhVien{
        //properties
        private $idSach;
        private $tenSach;
        private $namXuatBan;
        private $idTG;

        //methods
        public function __construct($idSach, $tenSach,$namXuatBan,$idTG)
        {
            $this ->idSach = $idSach;
            $this->tenSach = $tenSach;
            $this->namXuatBan = $namXuatBan;
            $this->idTG = $idTG;
        } 
        //get, set
        public function getIdSach(){
            return $this->idSach;
        }
        public function setId($idSach){
            $this->idSach= $idSach;
        }

        public function getTenSach(){
            return $this->tenSach;
        }
        public function setTenSach($tenSach){
            $this->tenSach= $tenSach;
        }
        public function getNamXuatBan(){
            return $this->namXuatBan;
        }
        public function setNamXuatBan($namXuatBan){
            $this->namXuatBan = $namXuatBan;
        }
        
        public function getIdTG(){
            return $this->idTG;
        }
        public function setIdLop($idTG){
            $this->idTG = $idTG;
        }
     


    }
