<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Love Peace Tee</title>
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

  .card-img-content{
      width: 100%;height: auto;
  }

  .card-img-top{
    width: 250px; height: 250px;
    margin: 15px 0;
  }

  .card-img-top:hover{
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

  .card-text{
      font-weight: bold;
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
  #content h4{
    font-weight: bold;
  }

  #chitiet{
      padding-left: 30px;
      margin-bottom: 30px;
  }
  #mota{
      background: rgba(53, 47, 47, 0.616);
      color: white;
      padding: 10px 30px;
      margin-bottom: 30px;
      border-radius: 5px;
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
        <li><a href="#"><span class="glyphicon glyphicon-check"></span> Mua hàng</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container text-center">
    <div class="row">
        <div class="col-md-7 col-sm-6 col-12">
            <div class="card card-product">
                <img class="card-img-content" src="ms1.jpg" alt="love peace tee 1">
                <img class="card-img-content" src="ms2.jpg" alt="love peace tee 2">
                <img class="card-img-content" src="ms3.jpg" alt="love peace tee 3">
                <img class="card-img-content" src="ms4.jpg" alt="love peace tee 4">
                <img class="card-img-content" src="ms5.jpg" alt="love peace tee 5">
            </div>
        </div>
        <div class="col-md-5 col-sm-6 col-12" style="text-align: left;">
            <br><br>
            <div id="chitiet">
                <h5>TEE - THE CLOTHING LINE <span class="glyphicon glyphicon-euro"></span></h4>
                <h1>TEE - the clothing line 'Music Love Peace' tee</h1>
                <h2>200,000₫</h5>
            </div>
            <div id="mota">
                <h4>Mô tả sản phẩm:</h4>
                <ul type="disc">
                    <li>Kiểu dáng: Unisex</li>
                    <li>Chất liệu: Cotton</li>
                    <li>Nơi sản xuất: Việt Nam</li>
                    <li>Xuất xứ thương hiệu: Việt Nam</li>
                    <li>Lưu ý khi giặt ủi: Không giặt nước 
                        quá 30 độ - ủi mặt trái áo - Không phơi trực tiếp ngoài nắng</li>
                </ul>
            </div>
            <?php
              $conn = mysqli_connect("localhost","qduy","123","quanlidathang") or die("Khong the ket noi database");
              $sql = "select soluonghang from hanghoa where tenhh='Music Love Peace TEE'";
              $result = mysqli_query($conn, $sql) or die("Khong the truy van so luong");
              $row=mysqli_fetch_array($result);
              if($row['soluonghang']==0){
                echo '<a href="#" class="btn btn-default btn-lg disabled" style="display: block;margin: auto;">Hết hàng</a>';
              }
              else{
                echo '<a href="#" class="btn btn-default btn-lg" style="display: block;margin: auto;">Còn '. $row['soluonghang'] .' cái</a>';
              }
            ?>
        </div>
    </div>
    <br><br>
    <h3>CÁC SẢN PHẨM ÁO KHÁC</h3><br><br>
    <div class="row">
      <form action="cheesetee.php" method="post">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="cheese1.jpg" alt="big cheese tee">
            <div class="card-body">
              <h5 class="card-title">BIG "CHEESE" 8</h5>
              <p class="card-text">320,000₫</p>
              <button type="submit" class="btn btn-default">Xem sản phẩm</button>
            </div>
          </div>
        </div>
      </form>
      <form action="longtee.php" method="post">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="s1.jpg" alt="ULTRAMANIA Longsleeve Tee">
            <div class="card-body">
              <h5 class="card-title">ULTRAMANIA Longsleeve Tee</h5>
              <p class="card-text">280,000₫</p>
              <button type="submit" class="btn btn-default">Xem sản phẩm</button>
            </div>
          </div>
        </div>
      </form>
      <form action="wiretee.php" method="post">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="b1.jpg" alt="MYO Barbeb Wire">
            <div class="card-body">
              <h5 class="card-title">MYO Barbeb Wire TEE</h5>
              <p class="card-text">525,000₫</p>
              <button type="submit" class="btn btn-default">Xem sản phẩm</button>
            </div>
          </div>
        </div>
      </form>						
    </div>
</div><br><br>

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
