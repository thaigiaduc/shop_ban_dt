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
		<meta charset="utf-8">
	</head>
		<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #00FB03;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #FF004D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
	<div id="#content">
		<div style="text-align: center; color: red; background-color: #F9FF00;">
			<h2 style="color: black; height: 50px;"> 
			<a href="Admin-information.php"><i style="color: black;"class="fas fa-home"></i></a>
				<br>
			Quản Lý Sản phẩm
		</h2>
		</div>		
	</div>
<div style="margin-left: 650px; margin-top: 5px; margin-bottom: 5px;">  
	  <input id="nut" name="nut" type="button" value="Thêm" onClick="themsanpham()" style="margin-left: 20px">
	  <input id="nut" name="nut" type="button" value="Xóa" onClick="xoasanpham()" style="margin-left: 10px">
	  <input id="nut" name="nutsua" type="button" value="Sửa" style="margin-left: 10px" onClick="suasanpham()">  
</div>	
<div class="row" style="width: 700px;height: auto; margin-left: 400px;margin-top:-100px; z-index: 3;position: fixed;display: none;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN SẢN PHẨM</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="ID sản phẩm">
            <label for="name">Tên sản phẩm</label>
            <input type="text" id="name" name="name" placeholder="Tên sản phẩm">
            <label for="brand">Nhãn hiệu</label>
            <input type="text" id="brand" name="brand" placeholder="Nhãn hiệu">
            <label for="phienbang">Phiên bảng</label>
            <input type="text" id="phienbang" name="phienbang" placeholder="Phiên bảng">
			<label for="bonhotrong">Bộ nhớ trong</label>
            <input type="text" id="bonhotrong" name="bonhotrong" placeholder="Bộ nhớ trong">
			<label for="img">Hình ảnh</label>
            <input type="text" id="img" name="img" placeholder="Link hình ảnh">
          </div>

          <div class="col-50">
			<br><br>					
            <label for="price">Giá</label>
            <input type="text" id="price" name="price" placeholder="Giá">
            <label for="hdh">Hệ điều hành</label>
            <input type="text" id="hdh" name="hdh" placeholder="Hệ điều hành">
            <label for="manhinh">Màn hình</label>
            <input type="text" id="screen" name="screen" placeholder="Màn hình">
            <label for="cameratruoc">Camera trước</label>
            <input type="text" id="cameratruoc" name="cameratruoc" placeholder="Camera trước">
			<label for="camerasau">Camera sau</label>
            <input type="text" id="camerasau" name="camerasau" placeholder="Camera sau">			
          </div>
          
        </div>        
        <input type="submit" name="nut" value="Nhập sản phẩm" class="btn">
		<input type="button" value="Thoát" class="btn" onClick="thoat()">
		<?php
		  switch($_POST['nut'])
		  {
			  case 'Nhập sản phẩm':
				{
					$id=$_POST['id'];
					$ten=$_POST['name'];
					$nhanhieu=$_POST['brand'];
					$phienbang=$_POST['phienbang'];
					$bonho=$_POST['bonhotrong'];
					$img =$_POST['img'];
					$gia=$_POST['price'];
					$hdh=$_POST['hdh'];
					$manhinh=$_POST['screen'];
					$cameratrc=$_POST['cameratruoc'];
					$camerasau=$_POST['camerasau'];
					if($id!='' && $ten!='' && $nhanhieu!='' && $phienbang!='' && $bonho!='' && $img!='' && $gia!='' && $hdh!='' && $manhinh!='' && $cameratrc!='' && $camerasau!='')
					{
						$p->addsp($id,$ten,$nhanhieu,$gia,$hdh,$manhinh,$camerasau,$cameratrc,$bonho,$img);
					}
					else
					{
						echo '<script>alert("Bạn hãy nhập đầy đủ thông tin")</script>';
					}
					break;
				}
		  }
		?>		  
      </form>
    </div>
  </div> 
</div>
<div id="xoa" style="width: 500px; margin-left: 500px; display: none;">
  <form id="form1" name="form1" method="post">
	  <input type="text" name="xoa" placeholder="Nhập mã sản phẩm cần xóa">
	  <input type="submit" name="nut" id="nut" value="Xóa" style="margin-left: 205px;">
	  <input type="button" name="nut" id="nut" value="Thoát" onClick="thoatxoa()" style="margin-left: 5px;">
	  <?php
	  	switch($_POST['nut'])
		{
			case 'Xóa':
			{
				$id = $_POST['xoa'];
				$p->delete($id);
				echo '<script>window.location="Admin-goods.php"</script>';
				break;
			}
		}
	  ?>
  </form>
</div>
<div id="sua" style="width: 500px; margin-left: 500px; display: none;">
  <form id="form1" name="form1" method="post">
	  <input type="text" name="sua" placeholder="Nhập mã sản phẩm cần sửa">
	  <input type="submit" name="nut" id="nut" value="Sửa" style="margin-left: 205px;">
	  <input type="button" name="nut" id="nut" value="Thoát" onClick="thoatsua()" style="margin-left: 5px;">
	  <?php
	  	switch($_POST['nut'])
		{
			case 'Sửa':
			{
				$id = $_POST['sua'];
				if($id!='')
				{
					$p->editsp("select * from sanpham where ID='$id'");
				}
				else
				{
					echo '<script>alert("Bạn chưa nhập ID")</script>';
				}
								
				break;
			}			
		}
	  	switch($_POST['nut'])
		{
			case 'Thoát':
			{
				header("Location: Admin-goods.php");
				break;
			}			
		}
	  switch($_POST['nut'])
		{
			case 'Sửa sản phẩm':
			{
				$id=$_POST['id'];
				$ten=$_POST['name'];
				$nhanhieu=$_POST['brand'];
				$phienbang=$_POST['phienbang'];
				$bonho=$_POST['bonhotrong'];
				$img =$_POST['img'];
				$gia=$_POST['price'];
				$hdh=$_POST['hdh'];
				$manhinh=$_POST['screen'];
				$cameratrc=$_POST['cameratruoc'];
				$camerasau=$_POST['camerasau'];
				$sl=$_POST['sl'];
					if($id!='' && $ten!='' && $nhanhieu!='' && $phienbang!='' && $bonho!='' && $img!='' && $gia!='' && $hdh!='' && $manhinh!='' && $cameratrc!='' && $camerasau!='' && $sl!='')
					{
						$p->edit($id,$ten,$nhanhieu,$phienbang,$gia,$hdh,$manhinh,$camerasau,$cameratrc,$bonho,$img);
					}
					else
					{
						echo '<script>alert("Bạn hãy nhập đầy đủ thông tin")</script>';
					}
					break;
				break;
			}			
		}
	  ?>
  </form>
</div>
<div style="margin-top: -50px;">
		<table id="customers">
		  <tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Nhãn hiệu</th>
			<th>Phiên bảng</th>
			<th>Giá</th>
			<th>Hệ điều hành</th>
			<th>Màn hình</th>  
			<th>Camera sau</th>
			<th>Camera trước</th>
			<th>Bộ nhớ trong</th>
			<th>Hình ảnh</th>			
			<th></th>
		  </tr>
			<?php				
				$p->tablesanpham("select * from sanpham");
				switch($_POST['nut'])
				{
					case 'Xóa':
					{	
						$id=$_GET['id'];
						$p->delete($id);
						echo '<script>window.location="Admin-goods.php"</script>';
						break;
					}
				}
				switch($_POST['nut'])
				{
					case 'Edit':
					{	
						$id=$_GET['id'];
						$p->editsua("select * from sanpham where ID='$id'");
						break;
					}
				}
			?>	  
</table>
</form>
</div>
</body>
<script>
	function thoatsua()
	{
		document.getElementById("sua").style.display="none";
	}
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
</html>