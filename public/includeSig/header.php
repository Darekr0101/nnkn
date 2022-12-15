<?php
if(isset($_SESSION["user"])){
    header("location: ".URLDEFAULT."/Trangchu");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <base href="http://<?php echo $_SERVER['SERVER_NAME']; ?>:8888/MNM/">
  <title><?php if(isset($title) )echo  $title; else echo "Thực hành 4";?></title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="public/css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    function loadCaptcha(){
      var captcha = document.getElementById("imgCaptcha");
      captcha.src =  "public/captcha.php";
    }

</script>
</head>
<body>