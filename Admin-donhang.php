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
	<title>DI ĐỘNG CHÍNH HÃNG - Chuyên bán lẻ điện thoại di động chính hãng</title>
	<link rel="shortcut icon" type="image/png" href="Image/favicon.png"/>
	<link rel="stylesheet" href="./Style.css">
	<link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
</head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #51B000;
  color: white;
}
			#nut {
				float: left;
				width: 50px;
				height: 30px;
				background-color: red;
				color:white;
				margin-bottom: 2px;
				cursor: pointer;
			}
			#nut:hover {
				background-color: aliceblue;
				color: black;
			}
</style>
<body>
	<div id="all" >
	<div class="thongbaoicon">
	   		<img src="alarm.png" class="icon" >
	   		<div class="icontext">0393.251.538</div>
	</div>
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
	<div class="thongbaoicon">
		<img src="plus.png" width="64px" height="64px" onclick="openthemsanpham()">
	</div>
	<div id="#content">
		<div style="text-align: center; color: red; background-color: #F9FF00;">
			<h2 style="color: black; height: 50px;"> 
			<a href="Admin-information.php"><i style="color: black;"class="fas fa-home"></i></a>
				<br>
			Quản Lý Hóa Đơn
		</h2>
		</div>        
	</div>


<div style="margin-top: -50px;">
		<table id="customers" style="width: 1000px;">
		  <tr>
			<th>ID</th>
			<th>Ngày lập</th>
			<th>ID nhân viên</th>  
			<th>ID khách hàng</th>
			<th>Tình trạng</th>
			<th>Tổng tiền</th>			
			<th></th>
		  </tr>
			<?php
				$p->tablehoadon("select * from hoadon");
				switch($_POST['nut'])
				{
					case 'Xóa':
				 	{
					 $id = $_GET['id'];
					 $p->deletehd($id);
					 break;
				 	}
					case 'Xử lý':
					{
						$id = $_GET['id'];
						$p->xuly($id);
						break;
					}
				}
			?>	  
</table>
</form>
</div>
	<div id="#content" style="margin-top: -30px;">
		<div style="text-align: center; color: red; background-color: #F9FF00;">
			<h2 style="color: black; height: 50px;"> 
			<a href="Admin-information.php"><i style="color: black;"class="fas fa-home"></i></a>
				<br>
			Chi Tiết Hóa Đơn
		</h2>
		</div>        
	</div>
<div style="margin-top: -49px;">
		<table id="customers" style="width: 1000px;">
		  <tr>			
			<th>ID hóa đơn</th>
			<th>ID sản phẩm</th>
			<th>Số lượng</th>			
		  </tr>
		<?php
		 switch($_POST['nut'])	
		 {
			 case 'Xem':
				{
					$id = $_GET['id'];
					$p->cthoadon("select * from cthoadon where IDHD='$id'");
					break;
				}
			 case 'Xóa':
				 {
					 $id = $_GET['id'];
					 $p->deletecthd($id);
					 break;
				 }
		 }
		?>
</table>
</div>
</div>
	
</body>
<script src="./javascript.js"></script>
</html>