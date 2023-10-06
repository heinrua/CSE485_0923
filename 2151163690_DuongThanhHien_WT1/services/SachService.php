
<?php
     require_once (APP_ROOT.'/models/sach.php');
     class SachService {
         public function getAllSach(){
             try{
                 $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien","root","");
                 $sql = "SELECT * FROM sach,tacgia WHERE sach.idTG = tacgia.idTG";
                 $stmt= $conn->query($sql);
                 $Sachs = [];
                 while ($row = $stmt->fetch()){
                     $sach = new SinhVien($row['idSach'],$row['tenSach'],$row['namXuatBan'],$row['tenTacGia']);
                     $Sachs[]= $sach;
                 }
                 return $Sachs;
             }
             catch(PDOException $e){
                 return $Sachs=[];
                 //echo $e->getMessage();
             }
         }
         public function get1Sach($idSach){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien","root","");
                $sql = "SELECT * FROM sach,tacgia WHERE sach.idSach= $idSach and sach.idTG= tacgia.idTG";
                $stmt= $conn->query($sql);
                $row = $stmt->fetch();
                $sach = new SinhVien($row['idSach'],$row['tenSach'],$row['namXuatBan'],$row['tenTacGia']);
                return $sach;
            }
            catch(PDOException $e){
                //echo $e->getMessage();
            }
        }

         public function addSach($tenSach,$namXuatBan,$tenTacGia){
            
            try{
                $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien","root","");
                $sql = "INSERT INTO sach(tenSach, namXuatBan,tenTacGia) VALUES ($tenSach,$namXuatBan,$tenTacGia)";
                $stmt= $conn->query($sql);
                
            }
            catch(PDOException $e){

            }
         }
         
         public function editSach(){

         }

         public function deleSach(){

         }
     }

 
?>