<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
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
      width: 200px;height: 200px;
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
      <a class="navbar-brand" href="serverside_trangchu.html"><span class="glyphicon glyphicon-tower"></span>  TowerShop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="serverside_trangchu.html">Trang chủ</a></li>
        <li><a href="hoidap.html">Hỏi và đáp</a></li>
        <li><a href="aboutus.html">Về chúng tôi</a></li>
        <li><a href="lienhe.html">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
    $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Không thể kết nối database");
    $sql = "SELECT `mshh`, `tenhh`, `gia`, `soluonghang`, `maloaihang`, `ghichu` FROM `hanghoa` ORDER by soluonghang ASC";
    $result = mysqli_query($conn,$sql) or die("Không thể truy vấn hàng hóa");
    echo '<div class="container">';
    echo '<h3 class="text-center">DANH SÁCH HÀNG HÓA</h3><br>';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Mã số HH</th>';
    echo '<th>Tên HH</th>';
    echo '<th>Giá</th>';
    echo '<th>Số lượng tồn kho</th>';
    echo '<th>Mã loại hàng</th>';
    echo '<th>Ghi chú</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row=mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>' . $row['mshh'] . '</td>';
        echo '<td>' . $row['tenhh'] . '</td>';
        echo '<td>' . $row['gia'] . '</td>';
        echo '<td>' . $row['soluonghang'] . '</td>';
        echo '<td>' . $row['maloaihang'] . '</td>';
        echo '<td>' . $row['ghichu'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
?>

<?php
  $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi database");
  $sql = "select distinct maloaihang from hanghoa";
  $result = mysqli_query($conn, $sql) or die("Truy van that bai");
  echo '<div class="container-fluid text-center">';
  echo '<h3>TRUY VẤN DANH SÁCH HÀNG HÓA THEO LOẠI HÀNG</h3><br><br>';
  echo '<form action="hh_yc.php" method="POST" class="form-horizontal">';
  echo '<div class="row form-group">';
  echo '<label for="mahh" class="control-label col-sm-4">Chọn mã loại hàng cần tìm:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" list="mahhs" name="mahh" id="mahh"></input>';
  echo '</div>';
  echo '<datalist id="mahhs">';
  while($row=mysqli_fetch_array($result)){
    echo '<option value="' .$row['maloaihang']. '">';
  }
  echo '</datalist>';
  echo '</div><br>';
  echo '<button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button>';
  echo '</form>';
  echo '</div><br><br>';

  echo '<div class="container-fluid text-center">';
  echo '<h3>THÊM HÀNG HÓA</h3><br>';
  echo '<form action="hh_them.php" method="POST" class="form-horizontal">';
  echo '<div class="row form-group">';
  echo '<label for="tenhh" class="control-label col-sm-4">Tên hàng hóa:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" type="text" name="tenhh" id="tenhh" placeholder="Nhập tên hàng hóa"></input>';
  echo '</div>';
  echo '</div>';
  echo '<div class="row form-group">';
  echo '<label for="gia" class="control-label col-sm-4">Giá hàng hóa:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" type="text" name="gia" id="gia" placeholder="Nhập giá hàng hóa"></input>';
  echo '</div>';
  echo '</div>';
  echo '<div class="row form-group">';
  echo '<label for="soluonghang" class="control-label col-sm-4">Số lượng hàng hóa:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" type="text" name="soluonghang" id="soluonghang" placeholder="Nhập số lượng hàng"></input>';
  echo '</div>';
  echo '</div>';
  $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi database");
  $sql1 = "select distinct maloaihang from loaihanghoa";
  $result1 = mysqli_query($conn, $sql1) or die("Truy van that bai");
  echo '<div class="row form-group">';
  echo '<label for="maloai" class="control-label col-sm-4">Chọn mã loại hàng:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" list="maloais" name="maloai" id="maloai"></input>';
  echo '</div>';
  echo '<datalist id="maloais">';
  while($row=mysqli_fetch_array($result1)){
    echo '<option value="' .$row['maloaihang']. '">';
  }
  echo '</datalist>';
  echo '</div>';
  echo '<div class="row form-group">';
  echo '<label for="ghichu" class="control-label col-sm-4">Ghi chú:</label>';
  echo '<div class="col-sm-5">';
  echo '<input class="form-control" type="text" name="ghichu" id="ghichu" placeholder="Nhập ghi chú"></input>';
  echo '</div>';
  echo '</div><br>';
  echo '<button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-plus"></span>Thêm hàng hóa</button>';
  echo '</form>';
  echo '</div><br><br>';
?>

<?php
    $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi database");
    $sql2 = "select mshh from hanghoa";
    $result2 = mysqli_query($conn, $sql2) or die("Truy van that bai");
    echo '<div class="container-fluid text-center">';
    echo '<h3>CẬP NHẬT SỐ LƯỢNG TỒN CỦA HÀNG HÓA</h3><br>';
    echo '<form action="hh_sua.php" method="POST" class="form-horizontal">';
    echo '<div class="row form-group">';
    echo '<label for="ma" class="control-label col-sm-4">Chọn mã số hàng hóa:</label>';
    echo '<div class="col-sm-5">';
    echo '<input class="form-control" list="mas" name="ma" id="ma"></input>';
    echo '</div>';
    echo '<datalist id="mas">';
    while($row=mysqli_fetch_array($result2)){
    echo '<option value="' .$row['mshh']. '">';
    }
    echo '</datalist>';
    echo '</div>';
    echo '<div class="row form-group">';
    echo '<label for="soluong" class="control-label col-sm-4">Số lượng tồn kho:</label>';
    echo '<div class="col-sm-5">';
    echo '<input class="form-control" type="text" name="soluong" id="soluong" placeholder="Nhập số lượng hàng hóa tồn kho"></input>';
    echo '</div>';
    echo '</div><br>';
    echo '<button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-refresh"></span>Cập nhật</button>';
    echo '</form>';
    echo '</div><br><br>';
?>

<?php
    $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi database");
    $sql2 = "select mshh from hanghoa";
    $result2 = mysqli_query($conn, $sql2) or die("Truy van that bai");
    echo '<div class="container-fluid text-center">';
    echo '<h3>XÓA HÀNG HÓA</h3><br>';
    echo '<form action="hh_xoa.php" method="POST" class="form-horizontal">';
    echo '<div class="row form-group">';
    echo '<label for="mail" class="control-label col-sm-4">Chọn mã số hàng hóa cần xóa:</label>';
    echo '<div class="col-sm-5">';
    echo '<input class="form-control" list="masos" name="maso" id="maso"></input>';
    echo '</div>';
    echo '<datalist id="masos">';
    while($row=mysqli_fetch_array($result2)){
    echo '<option value="' .$row['mshh']. '">';
    }
    echo '</datalist>';
    echo '</div><br>';
    echo '<button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-remove"></span>Xóa hàng hóa</button>';
    echo '</form>';
    echo '</div><br><br>';
?>

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
