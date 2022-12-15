<?php
class SanPhamModel  extends DB{
   public function getData($sql){
         $SQL = $sql;
         return mysqli_query($this->conn,$SQL); 
   }
   
}
?>