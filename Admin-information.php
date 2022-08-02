<?php
session_start();
include("SQL_PHP/classfunction.php");
$p=new csdl();
if((isset($_SESSION['myuser']) && isset($_SESSION['mypass'])) && ($_SESSION['myuser']!='' && $_SESSION['mypass']!=''))
{
	$p->checkaccountlogin($_SESSION['myuser'],$_SESSION['mypass']);
}
else
{
	header("Location: trangchu.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ Admin</title>
	<link rel="shortcut icon" type="image/png" href="Image/favicon.png"/>
	<link rel="stylesheet" href="./Style.css">
	<link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
</head>
 <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height:1300px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
	margin-top: -10px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	<body>
		<div id="all">		
		<div id="content">
		<div class="head" style="text-align: center; padding-left:140px;">
			<div class="didongchinhhang" style="position: relative; margin-top: 5px; width: 220px; height: 40px;">
				<a href="trangchu.php"><img src="./Image/logo.png"></a>
			</div>
			<div id="cart-icon" style="display: inline-block; cursor: pointer;">
				<ul style="font-family: Arial, Helvetica, sans-serif;">
					<li style="list-style-type: none; font-family: Arial, Helvetica, sans-serif;">
						<a href="#">
							<i class="fas fa-map-marker-alt"style="font-size: 15px; color: white; width: 150px; margin-left: 160px;"> Cửa hàng gần đây</i>
						</a>
					</li>
				</ul>
			</div>
			<div id="cart-icon" style="padding-right: 790px; margin-top: -33px;cursor: pointer;">
				<ul>
					<li style="list-style-type: none; font-size: 15px;">
						<a href="#l">
							<i class="fas fa-phone" style="font-size: 15px; color: white; width: 150px;"> Hotline 18005661</i></a>
					</li>
				</ul>
			</div>
			<div id="cart-icon" style="padding-right: 640px; margin-top: -34px; cursor: pointer;">
				<ul>
					<li style="list-style-type: none; font-size: 15px;">
						<a href="#l">
							<i class="fab fa-paypal" style="font-size: 15px; color: white; width: 160px; font-weight: bold;"> Trả góp/ Điện nước</i></a>
					</li>
				</ul>
			</div>
			<div class="didongchinhhang" style="position: relative; margin-top: -33px; margin-left: 700px; width: 150px; height: 40px;">
				<a href="index.html">
				<img src="./Image/hinh/images/51.png" width="100%" height="100%"></a>
			</div>
			<div id="cart-icon" style="padding-right: 995px; margin-top: -44px;">
				<i class="fa fa-search" style="font-size: 15px; width: 50px;"></i>
			</div>
			<div id="cart-icon" style="padding-right: 1150px; margin-top: -47px;">
				<ul>
					<li>
						<input type="search" placeholder="Bạn tìm gì..." style="font-size: 15px;padding-left: 150px; color: gray;background-color: white;"class="opensearch" onclick="mosearch()" id="searchbtn">
					</li>
				</ul>
			</div>
		</div>		
		</div>			
		</div>
		<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3 style="margin-left: 15px">Admin</h3>
      <ul class="nav nav-pills nav-stacked">
		<li><a href="trangchu.php">Home</a></li>
        <li><a href="Admin-account.php">Quản lý User</a></li>
        <li><a href="Admin-ncc.php">Quản lý nhà cung cấp</a></li>
        <li><a href="Admin-goods.php">Quản lý sản phẩm</a></li>
        <li><a href="Admin-customer.php">Quản lý khách hàng</a></li>
		<li><a href="Admin-donhang.php">Quản lý hóa đơn</a></li>
		<li><a href="Admin-nhaphang.php">Quản lý kho</a></li>
      </ul><br>      
    </div>

    <div class="col-sm-9">           
      <h2>BÁO CÁO DOANH THU HÀNG THÁNG</h2>     
      <hr>
      <h5 style="float: left">Chọn tháng: </h5>
      <form id="form1" name="form1" method="post">     
	  <select style="float: left; margin-left: 20px;margin-top: 4px;width: 100px;height: 30px" name="thang">
	    <option value="01">Tháng 1</option>
		  <option value="02">Tháng 2</option>
		  <option value="03">Tháng 3</option>
		  <option value="04">Tháng 4</option>
		  <option value="05">Tháng 5</option>
		  <option value="06">Tháng 6</option>
		  <option value="07">Tháng 7</option>
		  <option value="08">Tháng 8</option>
		  <option value="09">Tháng 9</option>
		  <option value="10">Tháng 10</option>
		  <option value="11">Tháng 11</option>
		  <option value="12">Tháng 12</option>
	  </select>
	<input type="submit" value="Lọc" id="nut" name="nut" style="background-color: red; width: 50px;height: 30px; margin-top: 4px;margin-left: 5px;color: white">
	</form>
	<hr>
	<table>
  <tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Tháng</th>
	<th>Số lượng</th>
	<th>Doanh thu</th>
  </tr>
  	<?php
		switch($_POST['nut'])
		{ 
			case 'Lọc':
			{
				$thang = $_POST['thang'];
				$p->selectthongke("select * from user",$thang);
				$p->selecthoadon("select * from hoadon where Ngaynhap like '%-$thang-%'");
			}
		}
		
		?>
</table>      
      <div class="row" style="margin-left: 0px;">
        <h2>BÁO CÁO ĐƠN HÀNG</h2>
		<hr>
		 <h5 style="float: left">Chọn: </h5>
		 <form id="form2" name="form2" method="post">     
	  <select style="float: left; margin-left: 20px;margin-top: 4px;width: 100px;height: 30px" name="so">
	    <option value="1">Tất cả</option>
		  <option value="2">Đã xử lý</option>
		  <option value="3">Chưa xử lý</option>		  		  
	  </select>
	<input type="submit" value="Lọc đơn" id="nut" name="nut" style="background-color: red; width: 80px;height: 30px; margin-top: 4px;margin-left: 5px;color: white">
	</form>
		<hr>
		 <table>
		  <tr>
			<th>ID</th>
			<th>Ngày nhập</th>
			<th>ID khách hàng</th>
			<th>ID nhân viên</th>
			<th>Tình trạng</th>
			<th>Tổng tiền</th>
		  </tr> 
			<?php
		switch($_POST['nut'])
		{ 
			case 'Lọc đơn':
			{
				$so = $_POST['so'];
				if($so==1)
				{
					$p->locct("select * from hoadon");	
				}
				else if($so == 2)
				{
					$p->locct("select * from hoadon where Tinhtrang='1'");
				}
				else
				{
					$p->locct("select * from hoadon where Tinhtrang='0'");
				}			
			}			
		}
		
		?>
</table>
        <div class="col-sm-10">          
          <p style="width: 1300px;"></p>          
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
	
</body>
	<script>
	function suasanpham() 
	{
		document.getElementById("sua").style.display="block";
	}
	function themsanpham() {
		document.getElementById("addsp").style.display="block";
	}
	function thoat()
	{
		document.getElementById("addsp").style.display="none";
	}
	function xoasanpham() {
		document.getElementById("xoa").style.display="block";
	}
	function thoatxoa()
	{
		document.getElementById("xoa").style.display="none";
	}
</script>
<script src="./javascript.js"></script>
</html>