<!DOCTYPE html>
<html lang="en">
<head>
  <title>Xác nhận đặt hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
  <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background: rgba(0, 0, 0, 0.93);
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }   

    .navbar-nav li:hover{
      animation-name: bigger;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
    }

    @keyframes bigger {
      0%{
        transform: scale(1);
      }
      100%{
        transform: scale(1.1);
      }
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  .item{
      width: 100%;height: auto;
  }

  .card-img-top{
      width: 250px;height: 250px;
      margin: 15px 0; 
  }
  
  .card-img-top:hover{
      animation-name: bigger;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
  }

  .card-text{
      font-weight: bold;
  }

  .card-product a{
    text-decoration: none;
    color: black;
  }

  .btn-default:hover{
    animation-name: clickbtn;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
  }
  @keyframes clickbtn {
    0%{
      background: white;
      color: black;
    }
    100%{
      background: black;
      color: white;
    }
  }
  
  footer{
    background: rgba(0, 0, 0, 0.93);
    color: gainsboro;
  }

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="trangchu.html"><span class="glyphicon glyphicon-tower"></span>  TowerShop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="trangchu.html">Trang chủ</a></li>
        <li><a href="hoidap.html">Hỏi và đáp</a></li>
        <li><a href="aboutus.html">Về chúng tôi</a></li>
        <li><a href="lienhe.html">Liên hệ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="muahang.html"><span class="glyphicon glyphicon-check"></span> Mua hàng</a></li>
      </ul>
    </div>
  </div>
</nav>
  

<?php

  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $ngaydat = date_create(date("Y/m/d"));
  $ngaygiao = date_create(date("Y/m/d"));
  date_modify($ngaygiao, "+7 days");

  
  $pro_num = array($_POST['item1_num'],$_POST['item2_num'],$_POST['item3_num'],
  $_POST['item4_num'],$_POST['item5_num'],$_POST['item6_num'],$_POST['item7_num'],$_POST['item8_num']);
  $pro_price = array(320000,200000,280000,525000,360000,420000,414000,360000);

  echo '<div class="container">';
  echo '<h3 class="text-center">ĐẶT HÀNG THÀNH CÔNG</h3><br>';
  echo '<table class="table">';
  echo '<tr>';
  echo '<th colspan="2" style="font-size: 20px;">Thông tin khách hàng</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Mã số KH</td>';
  echo '<td>KH' . mt_rand(10000,99999) .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Họ tên</td>';
  echo '<td>' . $_POST['hotenkh'] .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Địa chỉ email</td>';
  echo '<td>' . $_POST['email'] .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Số điện thoại</td>';
  echo '<td>' . $_POST['sodienthoai'] .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Nghề nghiệp</td>';
  echo '<td>' . $_POST['nghenghiep'] .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Địa chỉ</td>';
  echo '<td>' . $_POST['diachi'] .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Ngày đặt hàng</td>';
  echo '<td>' . date_format($ngaydat,"d/m/Y") .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Ngày giao hàng</td>';
  echo '<td>' . date_format($ngaygiao,"d/m/Y") .'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<th colspan="2" style="font-size: 20px;">Thông tin sản phẩm</th>';
  echo '</tr>';
  for($i=0; $i< count($pro_num); $i++){
      $j = $i + 1;
      if($pro_num[$i] != 0 && isset($_POST['item'.$j])){
          echo '<tr>';
          echo '<td>Sản phẩm ' . $_POST['item'.$j] . '</td>';
          echo '<td>Số lượng: ' . $pro_num[$i] . '</td>';
          echo '</tr>';
      }
  }
  echo '</table>';
  echo '</div>';



  $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi den database");
  $maso_kh = mt_rand(10000,99999);
  $maso_dc = mt_rand(10000,99999);
  $maso_dh = mt_rand(10000,99999);
 
  $sql_email = "select mskh, email from khachhang where email='" . $_POST['email'] . "';";
  $result_email = mysqli_query($conn, $sql_email) or die("Truy van mskh, email that bai.");
  $email = mysqli_fetch_array($result_email);
  $mskh = $email['mskh'];
  if($_POST['email'] != $email['email']){
    $sql_kh = "INSERT INTO `khachhang` VALUES ('KH" . $maso_kh
    . "','" . $_POST['hotenkh'] 
    . "','" . $_POST['nghenghiep'] 
    . "','" . $_POST['sodienthoai']
    . "','" . $_POST['email'] ."');";
    $result_kh = mysqli_query($conn, $sql_kh) or die("Them du lieu vao bang khachhang that bai.");

    $sql_dh = "INSERT INTO `dathhang`(`sodondh`, `mskh`, `msnv`, `ngaydh`, `ngaygh`) VALUES('DH" . $maso_dh
    . "','KH" . $maso_kh . "','NV002','" . date_format($ngaydat,"Y/m/d") . "','" . date_format($ngaygiao,"Y/m/d") . "');";
    $result_dh = mysqli_query($conn, $sql_dh) or die("Them du lieu vao bang dathang that bai");
  }
  else{
    $sql_dh = "INSERT INTO `dathhang`(`sodondh`, `mskh`, `msnv`, `ngaydh`, `ngaygh`) VALUES('DH" . $maso_dh
    . "','" . $mskh . "','NV002','" . date_format($ngaydat,"Y/m/d") . "','" . date_format($ngaygiao,"Y/m/d") . "');";
    $result_dh = mysqli_query($conn, $sql_dh) or die("Them du lieu vao bang dathang that bai");
  }
  
  $sql_diachi = "select diachi from diachikh where diachi='" . $_POST['diachi'] . "';";
  $result_diachi = mysqli_query($conn, $sql_diachi) or die("Truy van dia chi that bai");
  $diachi = mysqli_fetch_array($result_diachi);
  if($_POST['diachi'] != $diachi['diachi']){
    $sql_dc = "insert into diachikh values('DC" .$maso_dc ."','" . $_POST['diachi'] . "','KH" . $maso_kh ."');";
    $result_dc = mysqli_query($conn, $sql_dc) or die("Them du lieu vao bang diachikh that bai");
  }


  for($i=0; $i< count($pro_num); $i++){
    $j = $i + 1;
    if($pro_num[$i] != 0 && isset($_POST['item'.$j])){
        $sql_hh = "select mshh from hanghoa where tenhh='" . $_POST['item'.$j] ."';";
        $result_hh = mysqli_query($conn,$sql_hh) or die("Khong the truy xuat ma so hang hoa");
        $mshh = mysqli_fetch_array($result_hh);

        $sql_ctdh = "INSERT INTO `chitietdathang`(`sodondh`, `mshh`, `soluong`, `giadathang`, `giamgia`) VALUES('DH"
        . $maso_dh . "','"
        . $mshh['mshh'] ."',"
        . (int)$pro_num[$i] .","
        . ((int)$pro_num[$i]*$pro_price[$i]) .",0);";
        $result_ctdh = mysqli_query($conn,$sql_ctdh) or die("Khong the them du lieu vao bang chitietdathang");
    }
  }

?>

<br><br>
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-md-4 col-12">
      <h4>100% HÀNG CHÍNH HÃNG</h4>
      <p>CAM KẾT CHÍNH HIỆU</p>
    </div>
    <div class="col-md-4 col-12">
      <h4>100+ MẪU MÃ THỜI TRANG</h4>
      <p>TẠI TOWERSHOP</p>
    </div>
    <div class="col-md-4 col-12">
      <h4>TIN TỨC THỜI TRANG</h4>
      <p>CẬP NHẬT MỖI NGÀY</p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12 col-12">
      <p>Copyright 2021 © CÔNG TY TNHH TOWER</p>
    </div>
  </div>
</footer>
</body>
</html>
