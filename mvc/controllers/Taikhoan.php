<?php


class Taikhoan extends Controller{
    public $taikhoanModel;
    public $noti;
    function __construct(){
        $this->taikhoanModel = $this->model("TaiKhoanModel");
    }

    //show mian
    function product(){
        $this->view("sig/dangnhap",[]);
    }

    //regiter
    function dangky(){
        $noti = false;
        if(isset($_POST['btnReg'])){
            $username = $_POST["usernameTxt"];
            $password = $_POST["passwordTxt"];
            $repassword = $_POST["repasswordTxt"];
            $email = $_POST["emailTxt"];
            $name = $_POST["nameTxt"];


            if(empty($username) || empty($password)|| empty($repassword)|| empty($email)|| empty($name)){
                $this->view('sig/dangky',dataSend("Nhập đầy đủ thông tin để đăng ký!",$email,$name,$username));
            }else{


                //kiểm tra đầu vào
                $msg = "";
                if($password != $repassword){
                    $msg = "Hai mật khẩu không trùng nhau!";
                }elseif($this->taikhoanModel->existUsername($username)){
                    $msg = "Tài khoản đã tồn tại!";
                }elseif($this->taikhoanModel->existEmail($email)){
                    $msg = "Email đã tồn tại!";
                }

                // xử lý đầu ra
                if($msg != ""){
                    $this->view('sig/dangky',dataSend($msg,$email,$name,$username));
                }else{
                    $dataInsert = ["username"=>$username,
                    "password"=>$password,
                    "email"=>$email,
                    "name"=>$name,
                    ];
                    if($this->taikhoanModel->insertUser($dataInsert)){
                        $_SESSION["user"]=$username;
                        header("location: ".URLDEFAULT."/Trangchu");

                    }else{
                        $this->view('sig/dangky',dataSend($this->taikhoanModel->insertUser($dataInsert),$email,$name,$username));
    
                    }
                }
            }
          
        }else{
            $this->view('sig/dangky',[]); 
        }
    }

    //login
    function dangnhap(){
        $noti = false;
        if(isset($_POST['btnLogin'])){
            $username = $_POST["usernameTxt"];
            $password = $_POST["passwordTxt"];
            $captcha = $_POST["captchaTxt"];
            if(empty($username) || empty($password) || empty($captcha)){
                $this->view('sig/dangnhap',["result"=>"Nhập đầy đủ thông tin để đăng nhập!"]);
            }
            if($captcha == $_SESSION["captcha"]){
                $result = $this->taikhoanModel->info($username);
                if(mysqli_num_rows($result)){
                    while($row = mysqli_fetch_array($result)){
                        $id = $row["id"];
                        $username_sql = $row["Username"];
                        $password_sql = $row["Password"];
                    }
                    if(password_verify($password,$password_sql)) {
                        $_SESSION["user"] = $username_sql;
                        $_SESSION["captcha"] = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
                        header("location: ".URLDEFAULT."/Trangchu");
                    }else{
                        $this->view('sig/dangnhap',["result"=>"Mật khẩu không chính xác!","username"=>$username]); 
                    }
                }else{
                    $this->view('sig/dangnhap',["result"=>"Tài khoản không tồn tại!","username"=>$username]); 
                }
            }else{
                $this->view('sig/dangnhap',["result"=>"Mã xác nhận không hợp lệ!","username"=>$username]); 
         }
                      
        }else{
            $this->view('sig/dangnhap',[]); 
        }
    }

    //dangxuat
    function dangxuat(){
        unset($_SESSION["id"]);
        session_destroy();
        $this->view('sig/dangnhap',[]);
    }
}


function dataSend($msg,$email,$name,$username){
    $data  = ["result"=>$msg,
        "email"=>$email,
        "name"=>$name,
        "username"=>$username
    ];
    return $data;
}
?>