<?php
include_once("public/include/header.php");
?>
<section class="filter-promotel">
    <div class="search-box">
        <div class="container">
            <div class="row">
                <input type="hidden" id="uni_id" value="">
                <input type="hidden" id="distri_id" value="">
                                    <div class="col-md-12">
                        <div class="row">
                               
                            <div class="col-md-3 col-sm-3 col-xs-12 item-wrapper">
                                <div class="breadcrumb-menu">
                                    <nav itemscope="" itemtype="https://schema.org/Breadcrumb">    <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">            <a itemprop="item" href="https://bandon.vn/">                <span itemprop="name">Trang chủ</span>            </a>            <meta itemprop="position" content="1">        </li>        <li class="active">                <span>Thuê phòng trọ</span>        </li>    </ol></nav>                                </div>
                                   </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-12 item-wrapper fl-wrap-3">
                                    <div class="search-area" style="text-align: center">
                                        <span class="flaticon-search-2 form-control-feedback"></span>
                                        <input autocomplete="false" class="" type="text" tabindex="1" value="" placeholder="Nhập địa chỉ" name="diachi" id="diachi">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 item-wrapper  ">
                                        <div class="search-area" style="text-align: center">
                                            <span class="flaticon-search-2 form-control-feedback"></span>
                                            <input autocomplete="false" class="" type="text" tabindex="1" value="" placeholder="Nhập tiện nghi" name="tiennghi" id="tiennghi">
                                        </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12 item-wrapper fl-wrap-2">
                                    <div class="search-area" style="text-align: center">
                                        <div class="btn-group">
                                            <button type="button" id="btn-show-price" class="btn btn-dropdown-search btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Giá thuê phòng
                                            </button>
                                            <div class="dropdown-menu dropdown-price">
                                                <div style="margin-bottom: 10px;display: flow-root;">
                                                    <p style="width: calc(100% - 0px);float: left; font-size: 16px"><b>Giá thuê phòng 1 tháng</b></p>
                                                </div>
                                                <div class="dropdown-area-search" style="display: flow-root;">
                                                    <div>
                                                        <label class="container-checkbox"> Dưới 2 triệu
                                                            <input type="radio" name="price_check" value="0,2 triệu">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox"> Từ 2-3 triệu
                                                            <input type="radio" name="price_check" value="2000000,3 triệu">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox"> Từ 3-4 triệu
                                                            <input type="radio" name="price_check" value="3000000,4 triệu">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox"> Trên 4 triệu
                                                            <input type="radio" name="price_check" value="4000000,>4 triệu">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                       
                                                    </div>
                                                    <hr style="margin: 10px 0px">
                                                    <div id="inputRange">
                                                        <p style="font-size: 14px; color: #222"><b>Hoặc</b></p>
                                                        <p style="font-size: 12px; display: flow-root">
                                                            <span style="float: left;">MIN</span>
                                                            <span style="float: right">MAX</span>
                                                        </p>
                                                        <input value="" type="text" step="100000" min="0" max="5000000" id="minPrice" style="float: left">
                                                        <input value="" type="text" step="100000" min="5000000" max="15000000" id="maxPrice" style="float: right">
                                                    </div>
                                                </div>
                                                <hr style="margin: 10px 0px">
                                                <button style="width: 48%; float: right" class="btn btn-danger" id="btn-remove-price">
                                                    Xóa
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-12 item-wrapper fl-wrap-1">
                                    <div class="area-remove-search">
                                        <button type="button" onclick="hrefset()" id="btn-confirm-search" class="btn btn-grad--danger0">
                                            <b style="text-transform: initial">Tìm kiếm</b>
                                        </button>
                                    </div>
                                </div>
                                
                                                    </div>
                                                    
                                    </div>
            </div>
        </div>
</div></section>
            



    <section class="main-content promotel-grid">
    <div class="container">
        <div class="container-promotel-grid">
            <div class="row row--pd ">
                <div class="col-md-12">
                    <h1 style="text-transform: uppercase">PHÒNG TRỌ HIỆN CÓ</h1>
                    <hr style="margin: 4px 0px 12px">
                </div>
                <div class="promotel__wrapper">        


                <?php
           
           $result = $data["data1"];
           if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
           ?>



    <div class="col-xs-6 col-md-3 col-sm-4">
            <div class="card-product-grid">
                <div class="card-product-grid--item">
                    <div class="promotel-image">
                        <div class="promotel-image-wrap">
                            <a href="trangchu/detail_product?ID=<?php echo $row['ID']; ?>">
                                <img style=" height:100px
    width:auto;/*maintain aspect ratio*/
    max-width:200px;" class="loaded" src="public/image/<?php echo $row['Images']; ?>" alt="Số 45, ngõ 204 Trần Duy Hưng" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                    <div class="promotel-content">
                        <div class="promotel-content-wrap">
                            <div class="promotel__type bold" style="-webkit-box-orient: vertical;">
                                PHÒNG TRỌ
                            </div>
                            <a href="public/image/<?php echo $row['Images']; ?>">
                                <div class="promotel-title">
                                <?php echo $row['Address']; ?>
                            </div>
                            </a>
                            <div class="">
                                <div style="padding: 0px; width: 82px;" id="rateyo_55" class="rateyo ratyo-handle jq-ry-container" data-rating-avg="4.3"><div class="jq-ry-group-wrapper"><div class="jq-ry-normal-group jq-ry-group"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div><div class="jq-ry-rated-group jq-ry-group" style="width: 88.0488%;"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div></div></div>
                            </div>
                            <div class="promotel-room dragscroll"> 
                                Diện tích : <?php echo $row['Area']; ?>m
                            </div>
                            <div class="promotel-price">
                                <b><?php echo product_price($row['Price']);?> </b>
                            </div>
                            <div class="promotel-address">
                            <b><?php echo $row['Address'];?>                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <script>
            ratingInit('55',4.3);
        </script>

           <?php }
           }
           ?>
           <div class="blog-pagination promotel-pagination clearboth">
               <?php
           
           $result = $data["data2"];
           $total = mysqli_num_rows($result);
           $page = $data["page"];
           $total_page = ceil($total / $data["number_page"]);

           echo " <ul class='flat-pagination clearfix'><li class='active'>";
           if ($page > 1) {
           }
           for ($i = 1; $i < $total_page; $i++) {
               if ($page == $i) {
                   echo "<a href='product?page=" . $i . "'> $i </a></li>";
               } else {
                   echo " <a href='product?page=" . $i . "'> $i </a>";
               }
           }
           if ($i > $page) {
               echo "<a href='product?page=" . ($page + 1) . "'> >> </a>";
           }
           echo "</ul>";
           ?>
           
 <!-- <ul class='flat-pagination clearfix'> <li class="active"><a href="javascript:void(0);">1</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">2</a></li> <li><a onclick="loadMotelAjax(3, true, 16, 0, 0)">3</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">»</a></li></ul>    </div>/.blog-pagination -->
</div>
</div>
            </div>
        </div>

</section>



<section class="main-content promotel-grid">
    <div class="container">
        <div class="container-promotel-grid">
            <div class="row row--pd ">
                <div class="col-md-12">
                    <h1 style="text-transform: uppercase">PHÒNG MỚI ĐĂNG</h1>
                    <hr style="margin: 4px 0px 12px">
                </div>
                <div class="promotel__wrapper">        


                <?php
           
           $result = $data["PTMN"];
           if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
           ?>



    <div class="col-xs-6 col-md-3 col-sm-4">
            <div class="card-product-grid">
                <div class="card-product-grid--item">
                    <div class="promotel-image">
                        <div class="promotel-image-wrap">
                            <a href="trangchu/detail_product?ID=<?php echo $row['ID']; ?>">
                                <img style=" height:100px
    width:auto;/*maintain aspect ratio*/
    max-width:200px;" class="loaded" src="public/image/<?php echo $row['Images']; ?>" alt="Số 45, ngõ 204 Trần Duy Hưng" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                    <div class="promotel-content">
                        <div class="promotel-content-wrap">
                            <div class="promotel__type bold" style="-webkit-box-orient: vertical;">
                                PHÒNG TRỌ
                            </div>
                            <a href="public/image/<?php echo $row['Images']; ?>">
                                <div class="promotel-title">
                                <?php echo $row['Address']; ?>
                            </div>
                            </a>
                            <div class="">
                                <div style="padding: 0px; width: 82px;" id="rateyo_55" class="rateyo ratyo-handle jq-ry-container" data-rating-avg="4.3"><div class="jq-ry-group-wrapper"><div class="jq-ry-normal-group jq-ry-group"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div><div class="jq-ry-rated-group jq-ry-group" style="width: 88.0488%;"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div></div></div>
                            </div>
                            <div class="promotel-room dragscroll"> 
                                Diện tích : <?php echo $row['Area']; ?>m
                            </div>
                            <div class="promotel-price">
                                <b><?php echo product_price($row['Price']);?> </b>
                            </div>
                            <div class="promotel-address">
                            <b><?php echo $row['Address'];?>                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <script>
            ratingInit('55',4.3);
        </script>



           <?php }
           }
           ?>
         
           
 <!-- <ul class='flat-pagination clearfix'> <li class="active"><a href="javascript:void(0);">1</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">2</a></li> <li><a onclick="loadMotelAjax(3, true, 16, 0, 0)">3</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">»</a></li></ul>    </div>/.blog-pagination -->
</div>
</div>
            </div>
        </div>

</section>

        

<section class="main-content promotel-grid">
    <div class="container">
        <div class="container-promotel-grid">
            <div class="row row--pd ">
                <div class="col-md-12">
                    <h1 style="text-transform: uppercase">PHÒNG TRỌ NHIỀU LƯỢT XEM</h1>
                    <hr style="margin: 4px 0px 12px">
                </div>
                <div class="promotel__wrapper">        


                <?php
           
           $result = $data["PTNLX"];
           if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
           ?>



    <div class="col-xs-6 col-md-3 col-sm-4">
            <div class="card-product-grid">
                <div class="card-product-grid--item">
                    <div class="promotel-image">
                        <div class="promotel-image-wrap">
                            <a href="trangchu/detail_product?ID=<?php echo $row['ID']; ?>">
                                <img style=" height:100px
    width:auto;/*maintain aspect ratio*/
    max-width:200px;" class="loaded" src="public/image/<?php echo $row['Images']; ?>" alt="Số 45, ngõ 204 Trần Duy Hưng" data-was-processed="true">
                            </a>
                        </div>
                    </div>
                    <div class="promotel-content">
                        <div class="promotel-content-wrap">
                            <div class="promotel__type bold" style="-webkit-box-orient: vertical;">
                                PHÒNG TRỌ
                            </div>
                            <a href="public/image/<?php echo $row['Images']; ?>">
                                <div class="promotel-title">
                                <?php echo $row['Address']; ?>
                            </div>
                            </a>
                            <div class="">
                                <div style="padding: 0px; width: 82px;" id="rateyo_55" class="rateyo ratyo-handle jq-ry-container" data-rating-avg="4.3"><div class="jq-ry-group-wrapper"><div class="jq-ry-normal-group jq-ry-group"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="gray" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div><div class="jq-ry-rated-group jq-ry-group" style="width: 88.0488%;"><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg><!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" width="14px" height="14px" fill="#f39c12" style="margin-left: 3px;"><polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 "></polygon></svg></div></div></div>
                            </div>
                            <div class="promotel-room dragscroll"> 
                                Diện tích : <?php echo $row['Area']; ?>m
                            </div>
                            <div class="promotel-price">
                                <b><?php echo product_price($row['Price']);?> </b>
                            </div>
                            <div class="promotel-address">
                            <b><?php echo $row['Address'];?>                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <script>
            ratingInit('55',4.3);
        </script>



           <?php }
           }
           ?>
         
           
 <!-- <ul class='flat-pagination clearfix'> <li class="active"><a href="javascript:void(0);">1</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">2</a></li> <li><a onclick="loadMotelAjax(3, true, 16, 0, 0)">3</a></li> <li><a onclick="loadMotelAjax(2, true, 16, 0, 0)">»</a></li></ul>    </div>/.blog-pagination -->
</div>
</div>
            </div>
        </div>

</section>

    <script>

        function hrefset(){
            var a =   document.getElementById("diachi").value();
            var b= document.getElementById("tiennghi").value();
            var c = document.getElementById("price_check").value();
            window.location.href = "?search="+a+"|"+b+"|"+c;
        }
    var thuephongtro = 'https://bandon.vn/thue-phong-tro';
    var current_page = '1';
</script>          <div class="btn-call-bandon btn-call-alo-phone btn-call-alo-green">
        <div class="btn-call-bandon-circle"></div>
        <div class="btn-call-alo-ph-img-circle"><a href="tel:0838993838" class="btn-link-hotline">.</a></div>
    </div>
<!-- Footer -->
<?php


function product_price($priceFloat) {
$symbol = 'đ/Tháng';
$symbol_thousand = '.';
$decimal_place = 0;
$price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
return $price.$symbol;
}
include_once("public/include/footer.php");
?>
