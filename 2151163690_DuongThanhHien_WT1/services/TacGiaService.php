
<?php
     require_once (APP_ROOT.'/models/tacgia.php');
     class TacGiaService {
         public function getAllTacGia(){
             try{
                 $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien","root","");
                 $sql = "SELECT * FROM tacgia ";
                 $stmt= $conn->query($sql);
                 $TacGias = [];
                 while ($row = $stmt->fetch()){
                     $TacGia = new TacGia($row['idTG'],$row['tenTacGia']);
                     $TacGias[]= $TacGia;
                 }
                 return $TacGias;
             }
             catch(PDOException $e){
                 return $TacGias=[];
                 //echo $e->getMessage();
             }
         }
         public function get1Sach($idTG){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=quanlythuvien","root","");
                $sql = "SELECT * FROM tacgia WHERE tacgia.idTG= $idTG and sach.idTG= tacgia.idTG";
                $stmt= $conn->query($sql);
                $row = $stmt->fetch();
                $TacGia = new TacGia($row['idTG'],$row['tenTacGia']);
                return $TacGia;
            }
            catch(PDOException $e){
                //echo $e->getMessage();
            }
        }
         public function addTacGia(){

         }
         
         public function editTacGia(){

         }

         public function deleTacGia(){

         }
     }

 
?>