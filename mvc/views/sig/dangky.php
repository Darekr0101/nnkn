

<?php
$title  = "Đăng ký tài khoản";
include_once("public/includeSig/header.php");
?>
<!-- partial:index.partial.html -->

<div class="container h-100">
        <div class="login_name_wrapper">
            <div class="d-flex justify-content-center">Đăng ký tài khoản
                
            </div>
            
        </div>
    <div class="d-flex justify-content-center h-50" >
    <?php
            if(isset($data["result"])){
                echo' <div  style="position: absolute; left:56%;border-bottom: 2px;border-radius: 40px 40px 40px 0px;top: 15%;outline: 2px solid #1C6EA4;outline-offset: 0px;" class="alert alert-danger " role="alert">
                '.$data["result"].'
            </div>';
            }
        ?>
        <div class="user_card_reg">
       
            <div class="d-flex justify-content-center">
                <div class="login_logo_container"> <img src="public/image/logo.png" class="login_logo" alt="Logo"> </div>
            
            </div>
            
            <div class="d-flex justify-content-center form_container">
                <form  method="POST" action="Taikhoan/dangky" style="width: 320px" >
                    <div class="input-group mb-3">
                        <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-user"></i></span> </div>
                        <input <?php if(isset($data["username"])) echo 'value = "'.$data["username"].'"'; ?> id="usernameTxt" type="text" name="usernameTxt" class="form-control input_user" placeholder="Tài khoản"  autocomplete="off" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-key"></i></span> </div>
                        <input id="passwordTxt" type="password" value="" name="passwordTxt" class="form-control input_pass" placeholder="Mật khẩu"  autocomplete="off" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-key"></i></span> </div>
                        <input id="usernameTxt" value ="" type="password" name="repasswordTxt" class="form-control input_pass" placeholder="Nhập lại mật khẩu" autocomplete="off"  required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-envelope"></i></span> </div>
                        <input   <?php if(isset($data["email"])) echo 'value = "'.$data["email"].'"'; ?> id="usernameTxt" type="email"  name="emailTxt" class="form-control input_email" placeholder="Email" autocomplete="off"  required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append"> <span class="input-group-text"><i class="fas fa-user"></i></span> </div>
                        <input <?php if(isset($data["name"])) echo 'value = "'.$data["name"].'"'; ?> id="usernameTxt" type="text"  name="nameTxt" class="form-control input_user" placeholder="Tên hiển thị" autocomplete="off"  required>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input  type="submit"  name="btnReg" id="btnReg" class="btn login_btn" value="Đăng ký">
                    </div>
                </form>
            </div>
          
            <div class="mt-4">
                <div class="d-flex justify-content-center links"><a href="<?php echo URLDEFAULT.'/Taikhoan/Dangnhap';?>">Bạn đã có tài khoản?</a> </div>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links"><a href="<?php echo URLDEFAULT.'/Taikhoan/Quenmatkhau';?>">Quên mật khẩu?</a> </div>
            </div>
        </div>
        
    </div>
    <?php
                        if(isset($data["result"])){
                            echo '
                            <script>
                            window.setTimeout(function() {
                                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                    $(this).remove(); 
                                });
                            }, 2000);
                            </script>
                           ';
                        }
                    ?>
</div>


<?php

include_once("public/includeSig/footer.php");
?>