<?php
class TaiKhoanModel  extends DB{

   // get infor using username
   public function info($username){

    $username = $this->conn->real_escape_string($username);
       $SQL = "SELECT * FROM `USER` WHERE `Username` = '{$username}'";
       return mysqli_query($this->conn,$SQL); 
   }


   // check exist username
   public function existUsername($username){
      $username = $this->conn->real_escape_string($username);
      $SQL = "SELECT * FROM `USER` WHERE `Username` = '{$username}'";
      if(mysqli_num_rows(mysqli_query($this->conn,$SQL))) return true;
      return false;
   }

   // check exist mail
  public function existEmail($email){
       $username = $this->conn->real_escape_string($email);
       $SQL = "SELECT * FROM `USER` WHERE `Email` = '{$email}'";
       if(mysqli_num_rows(mysqli_query($this->conn,$SQL))) return true;
       return false;
   }  

   //register
   public function insertUser($data){
     $username =$data["username"];
     $email = $data["email"];
     $password = password_hash($data["password"],PASSWORD_DEFAULT);
     $name = $data["name"];
     if(empty($username) || empty($email) || empty($password) || empty($name)){
        return false;
     }
     $SQL  = "INSERT INTO `USER` (`Username`,`Email`,`Password`,`Name`) VALUES ('{$username}','{$email}','{$password}','{$name}')";
    
     if(mysqli_query($this->conn,$SQL)){
        return true;
     }else{
        return false
        ;
     }
      
   } 
   
}
?>