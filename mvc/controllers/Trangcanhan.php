<?php


class Trangcanhan extends Controller{
    public $infoUser;
    public $taikhoanModel;
    function __construct(){
        $this->taikhoanModel = $this->model("TaiKhoanModel");
    }
    // Must have SayHi()
    function product(){
      
      $this->view('trangcanhan');
    }

}
?>