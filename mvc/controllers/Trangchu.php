<?php


class Trangchu extends Controller{
    function __construct(){
      $this->sanPhamModel = $this->model("SanPhamModel");
      $this->taiKhoan = $this->model("TaiKhoanModel");
    }
    // Must have SayHi()
    function product(){
          $gets = (explode("page=", filter_var(trim($_SERVER['REQUEST_URI'], "page="))));
          $page = 1;
          if (count($gets) > 1) {
              //var_dump($gets);
              $page = explode("&",$gets[1])[0];
          }

          $gets = (explode("page=", filter_var(trim($_SERVER['REQUEST_URI'], "page="))));
          $page = 1;
          if (count($gets) > 1) {
              //var_dump($gets);
              $page = explode("&",$gets[1])[0];
          }

          $num_per_page = 6;
          $start = ($page - 1) * $num_per_page;
        if(isset($_POST['tn-confirm-search'])){
          if($_POST['price_check']=='0,2 triệu')
          {
            $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price < 2000000 LIMIT $start,$num_per_page";
            $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price < 2000000";
          }
          elseif($_POST['price_check']=='2000000,3 triệu')
          {
            $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price BETWEEN 2000000 AND 3000000 LIMIT $start,$num_per_page";
            $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price BETWEEN 2000000 AND 3000000";
          }
          elseif($_POST['price_check']=='3000000,4 triệu')
          {
            $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price BETWEEN 3000000 AND 4000000 LIMIT $start,$num_per_page";
            $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price BETWEEN 3000000 AND 4000000";
          }
          else
          {
            $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price > 4000000 LIMIT $start,$num_per_page";
            $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Price > 4000000";
          }
      }
      elseif(isset($_POST['search'])){
          $search_add = $_POST['searchadd'];
          $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Address like '%$search_add%' LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Address like '%$search_add%'";
        }
      elseif(isset($_POST['search2'])){
          $search_uti = $_POST['searchuti'];
          $sql = "SELECT motel.ID,Title,Area,Images,Address,Utilities,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Utilities like '%$search_uti%' LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Utilities,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.Utilities like '%$search_uti%'";
        }
      else{
          $sql = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID LIMIT $start,$num_per_page";
          $sql1 = "SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID";
      }
        $PTMN = $this->sanPhamModel->getData("SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID ORDER BY motel.ID DESC LIMIT 1");
        $PTNLX = $this->sanPhamModel->getData("SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Count_view,user.Name FROM  motel,user WHERE motel.User_id = user.ID ORDER BY motel.Count_view DESC LIMIT 1");
        if(isset($_SESSION["user"])){
          $this->view('trangchu',["data1"=>$this->sanPhamModel->getData($sql),"data2"=>$this->sanPhamModel->getData($sql1),"PTMN"=>$PTMN,"PTNLX"=>$PTNLX,"number_page"=>$num_per_page,"page"=>$page,"userActive" =>$this->taiKhoan->info($_SESSION["user"])]);
        }else{
          $this->view('trangchu',["data1"=>$this->sanPhamModel->getData($sql),"data2"=>$this->sanPhamModel->getData($sql1),"PTMN"=>$PTMN,"PTNLX"=>$PTNLX,"number_page"=>$num_per_page,"page"=>$page]);
        }
       
    }
    function detail_product(){
      $gets = (explode("?ID=", filter_var(trim($_SERVER['REQUEST_URI'], "?ID="))));
      if (count($gets) > 1) {
          //var_dump($gets);
          $sp = explode("&",$gets[1])[0];
          $this->view('thongtinsanpham',["sp"=>$this->sanPhamModel->getData("SELECT motel.ID,Title,Area,Images,Address,Price,Created_at,Description,Utilities,user.Phone,user.Name FROM  motel,user WHERE motel.User_id = user.ID and motel.ID='$sp'")]);
          $this->sanPhamModel->getData("UPDATE motel SET Count_view = Count_view+1 WHERE  motel.ID='$sp'");
      }

      
      
    }

}
?>