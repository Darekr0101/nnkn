<?php
    if(!isset($_SESSION["user"])){
        header("location: ".URLDEFAULT."/Taikhoan");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Chi tiết phòng trọ</title>
    <style>
        body {
            background-color: #edf1f5;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 30px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php
                $result = $data["sp"];
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <h3 class="card-title"><?php echo $row['Title']; ?></h3>
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-6">
                                <div class="white-box text-center"><img src="../public/image/<?php echo $row['Images']; ?>" width="600" height="600"></div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6">
                                <h4 class="box-title mt-5">Thông tin người đăng</h4>
                                <button class="btn btn-warning btn-rounded btn-block"><i class="fa fa-user-circle"></i><?php echo $row['Name']; ?></button>
                                <button class="btn btn-warning btn-rounded btn-block"><i class="fa fa-phone-square"></i><?php echo $row['Phone']; ?></button>
                                <hr>

                                <p><i class="fa fa-map-marker "></i><b> Địa chỉ: </b><?php echo $row['Address']; ?></p>
                                <p><i class="fa fa-money "></i><b> Giá phòng: </b><?php echo $row['Price']; ?></p>
                                <p><i class="fa fa-stop-circle "></i><b> Diện tích:</b> <?php echo $row['Area']; ?>m<sup>2</sup></p>
                                <p><i class="fa fa-check"></i><b> Tiện ích phòng trọ: </b>
                                    <?php echo $row['Utilities']; ?>
                                </p>
                                <button class="btn btn-primary btn-rounded">Gửi báo cáo</button>
                                <button class="btn btn-primary btn-rounded">Sửa bài đăng</button>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 white-box">
                                <h4>Mô tả: </h4><?php echo $row['Description']; ?>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <?php
           
            // $result = $conn->query($sql);
            // $value = $result->fetch_assoc();
            // $view = $value['Count_view'];
            // $view = $view + 1;
            // $sqlup = "UPDATE motel SET Count_view = '$view' WHERE  motel.ID='$id'";
            // $result = $conn->query($sqlup);
            ?>
        </div>
    </div>

</body>

</html>