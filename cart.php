<?php
session_start();
include("SQL_PHP/classfunction.php");
$p=new csdl();
$id = $_GET['id'];
//session_destroy();
$link = $p->connect();
$sql = "select * from sanpham where ID='$id'";
$ketqua = mysql_query($sql,$link);
if($ketqua)
{
	$product =  mysql_fetch_assoc($ketqua);
}

$item = array(
	'id' =>$product['ID'],
	'name'=>$product['TenSP'],
	'brand'=>$product['Nhanhieu'],
	'price'=>$product['Gia'],
	'quantily'=>1,
	'img'=>$product['img']
);
if(isset($_SESSION['cart'][$id]))
{
	$_SESSION['cart'][$id]['quantily'] +=1;
}
else
{
	$_SESSION['cart'][$id] = $item;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Giỏ hàng - DI ĐỘNG CHÍNH HÃNG</title>
<link rel="stylesheet" href="./Style.css">
<link rel="shortcut icon" type="image/png" href="Image/favicon.png"/>
<link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
</head>
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
		
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
		<div class="nav">
		  <ul id="nav-box" style="height: 65px;text-align: center;">
				<li id="menu">
					<i class="fas fa-bars" style="line-height: 35px;float: left; margin: 6px; margin-top: 15px;font-size: 20px;"></i><a href="trangchu.php">SẢN PHẨM</a>
					<ul id="sub-nav">
					</ul>
				</li>
				<li id='menu'>
					<i class="far fa-newspaper" style="line-height: 35px;float: left; margin: 6px; margin-top: 15px; font-size: 20px;"></i>
				  <a href="tintuc.php">TIN TỨC</a>
				</li>
				<li id='menu'>
					<i class="fas fa-tools" style="line-height: 35px;float: left; margin: 6px; margin-top: 15px; font-size: 20px;"></i>
				  <a href="baohanh.php">&nbsp;BẢO HÀNH</a>
				</li>
				<li id='menu'>
					<i class="far fa-address-book" style="line-height: 35px;float: left; margin: 6px; margin-top: 13px; font-size: 20px;"></i>
				  <a href="lienhe.php">LIÊN HỆ</a>
				</li>
				<li id='menu'>
					<i class="fa fa-undo" style="line-height: 35px;float: left; margin: 6px; margin-top: 13px; font-size: 20px;"></i>
					<a>MÁY CŨ</a>
				</li>
				<li id="menu">
					<i class="fas fa-sim-card"style="line-height: 35px;float: left; margin: 6px; margin-top: 13px; font-size: 20px;"></i>
					<a href="sim.php">SIM CARD </a>
				</li>
				<li id='menu'>
					<i class="fas fa-headphones" style="line-height: 35px;float: left; margin: 6px; margin-top: 15px; font-size: 20px;"></i>
					<a href="phukien.php">&nbsp;PHỤ KIỆN</a>
				</li>
			</ul>			
	  	  <div style="position:relative; top:0px;">
					<button id="showregbtn" onclick="showreg()" style="">Đăng nhập | Đăng ký</button>
		  </div>
			<form id="form1" name="form1" method="post">
				<input type="submit" id="nutdangxuat" name="nut" value="Đăng xuất" style="float: left; margin-top:-57px; margin-left: 1290px;width: 70px; height: 50px; background-color: #FF6B00; color: white; cursor: pointer; display: none;">
			</form>
			<div id="khungten" style="float: left; background-color: #043700; width: auto; height: 50px; margin-top: -57px; margin-left:1140px; display: none ">
				<p id="tenkhach" style="padding-top: 15px;padding-left: 15px; padding-right: 15px;color: white"></p>
			</div>
			<?php
			switch($_POST['nut'])
			{
				case 'Đăng xuất':
				{
					echo '<script>alert("Bạn có chắc sẽ đăng xuất?")</script>';
					$p->checkaccount("","");
					$_SESSION['myuser'] = "";
					$_SESSION['mypass'] = "";
					echo '<script>document.location="cart.php"</script>';
				}
			}
			?>
		  <div style="margin-top: -30px;margin-left: 1400px;">
			<a href="cart.php"><i class="fas fa-shopping-cart" style="font-size: 15px; color: black;cursor: pointer;"> Giỏ hàng</i></a>
		  </div>
		 <div style="margin-top: -40px;margin-left: 1400px;">
			<a href="lichsugiaodich.php"><i class="fas fa-history" style="font-size: 15px; color: black;cursor: pointer;"> Lịch sử giao dịch</i></a>
		  </div>
		  <div class="dropdown" style="float: left; margin-top:-57px;margin-left: 1180px; display: none" id="admin">
			 <a href="Admin-information.php"><button class="dropbtn" style="width: 100px; height: 50px">Admin</button></a> 
</div>			
			<div style="float: left;width: 1223px;height: auto; margin-left: 140px;">			 
<div style="float: left; margin-bottom: 10px;margin-top: 10px; width: 1223px; height: 40px">
	    <p style="float: left;padding-top: 10px;padding-left: 50px"><strong>Sản phẩm</strong></p>
					<p style="float: left;padding-top: 10px;padding-left: 120px"><strong>Tên sản phẩm</strong></p>
				<p style="float: left;padding-top: 10px;padding-left: 400px"><strong>Giá</strong></p>				
				<p style="float: left;padding-top: 10px;padding-left: 120px"><strong>Số lượng</strong></p>
			</div>
<?php			
			$tongtien=0;
			foreach($_SESSION['cart'] as $key => $value)
			{
				if($value['id']!='')
				{
					echo '
					<form id="form1" name="form1" method="post" action="cart.php?view=cart&id='.$value['id'].'">
			<hr>
			<div style="float: left;width: 1223px; height: 170px; margin-top: 5px;">
				<div style="float: left;width: 150px; height: 150px; padding-top: 10px; padding-left: 10px;">
					<img src="'.$value['img'].'" width="150px" height="150px">
				</div>
				<div style="float: left;width: 500px; height: 150px; margin-top: 10px; margin-left: 30px;font-size: 25px;padding-top:10px;">
					<strong>'.$value['name'].'</strong>
					<div style="padding-top: 10px;padding-left: 5px; font-size: 15px;color: gray">
						'.$value['brand'].'
					</div>
				</div>
				<div style="float: left; margin-top: 10px;margin-left:10px;padding-left: 10px;padding-top: 10px; width: 150px; height: 150px; ">
					'.$value['price'].'0.000 VND
				</div>				
				<div style="float: left; margin-top: 10px;margin-left:20px;padding-left: 10px;padding-top: 10px; width: 100px; height: 150px;">
					<input type="number" name="soluong" id="textfield" value="'.$value['quantily'].'" style="width: 70px; height: 40px; padding-left: 10px;">
				</div>
				<div style="float: left; margin-top: 10px;margin-left:10px;padding-left: 10px;padding-top: 10px; width: 100px; height: 150px;">
					<input type="submit" name="nut" id="nut" value="Xóa" style="width:50px; height: 35px; background: red; color: white; cursor:pointer;">
				</div>
				<div style="float: left; margin-top: 10px;margin-left:0px;padding-left: 10px;padding-top: 10px; width: 100px; height: 150px;">
					<input type="submit" name="nut" id="nut" value="Cập nhập" style="width:100px; height: 35px; background: red; color: white; cursor:pointer;">
				</div>
			</div>
			</form>';
				$tongtien = $tongtien + $value['price']*$value['quantily'];
				}								
			}
			switch($_POST['nut'])
			{
				case 'Xóa':
				{
					$p->selecthuycart("select * from ctnhaphang where IDSP='$id'",$_SESSION['cart'][$id]['quantily'],$id);
					unset($_SESSION['cart'][$id]);
					echo '<script>document.location="cart.php"</script>';
					break;
				}
				case 'Cập nhập':
				{
					$id=$_GET['id'];
					$sl = $_POST['soluong'];
					$_SESSION['cart'][$id]['quantily'] = $sl;
					$_SESSION['sol'] = 1;					
					$p->selectslkho("select * from ctnhaphang where IDSP='$id'");
					$p->selectslton("select * from ctnhaphang where IDSP='$id'",$sl,$id);					
					echo '<script>document.location="cart.php"</script>';
				}
			}
		?>
		<hr>
		<div style="float: left;width: 1223px;height: 50px; margin-top: 10px">	
			<p style="float: left; padding-top: 15px;padding-left: 620px"><strong>Tổng tiền: <?php echo $tongtien ?>0.000 VNĐ </strong></p>	
		  <input type="button" name="nut" id="nut" value="Lập hóa đơn sản phẩm" class="submit-btn" onClick="dathang()">
		  <form id="form2" name="form2" method="post">	     
		  <input id="nut" name="nut" value="Làm mới"style="margin-right: 20px; margin-top: 0px;width:100px; padding-right: 90px " type="submit" class="submit-btn">
			 <?php
				switch($_POST['nut'])
				{
					case 'Làm mới':
					{
						unset($_SESSION['cart']);
						echo '<script>document.location="cart.php"</script>';
						break;
					}
				}
			  ?>	
		</form>
		</div>		
		</div>
		</div>
		</div>
		
		<div id="khungtovcl-dathang" style="margin-top: -40px;">
			
			<div style="width: 1100px;height: 700px; margin: 0 auto;">
			<form method="post" action="cart.php">
				<div id="dathang-box">
					<div style="background-color: black; height: 50px; color: white;">
						<img src="./Image/hinh/x.png" class="xbtn" onclick="offdathang()" style="margin-top: 10px;">
						<h1 style="margin-left: 30px; line-height: 50px; text-align: center; color: white;">NHẬP THÔNG TIN KHÁCH HÀNG</h1>
					</div>
					<div class="information-left">
                <div>
                    <div class="check-information-meeting">
                        <h2>1. Xác nhận thông tin và điểm hẹn</h2>
                    </div>
                    <div class="information-customer">                        
                        <select name="ChiNhanh" class="input-field" id="ChiNhanh">
                            <option value="">Chọn chi nhánh </option>
                            <option value="Didongchinhhang - 629 Cách mạng tháng tám, phường 15, quận 10, TP.HCM">Didongchinhhang - 629 Cách mạng tháng tám, phường 15, quận 10, TP.HCM</option>
                            <option value="Didongchinhhang - 160 Lê Thánh Tôn, phường Phú Hòa, thị xã Thủ Dầu Một, Bình Dương">Didongchinhhang - 160 Lê Thánh Tôn, phường Phú Hòa, thị xã Thủ Dầu Một, Bình Dương</option>
                            <option value="Didongchinhhang - 137 Nguyễn Văn Cừ, phường 2, quận 5, TP.HCM">Didongchinhhang - 137 Nguyễn Văn Cừ, phường 2, quận 5, TP.HCM</option>
                            <option value="Didongchinhhang - 22 Võ Thị Sáu, quận Hoàn Kiếm, Hà Nội">Didongchinhhang - 22 Võ Thị Sáu, quận Hoàn Kiếm, Hà Nội</option>
                            <option value="Didongchinhhang - 428 Trần Hưng Đạo, quận Hải Châu, Đà Nẵng">Didongchinhhang - 428 Trần Hưng Đạo, quận Hải Châu, Đà Nẵng</option>
                            <option value="Didongchinhhang - 85 Lý Thái Tổ, quận Ninh Kiều, Cần Thơ">Didongchinhhang - 85 Lý Thái Tổ, quận Ninh Kiều, Cần Thơ</option>
                            <option value="Didongchinhhang - 35 Đặng Văn Bi, phường Bình Thọ, Thủ Đức">Didongchinhhang - 35 Đặng Văn Bi, phường Bình Thọ, Thủ Đức</option>
                        </select>
                        <div id="errorchinhanh" class="error">Bạn chưa chọn chi nhánh</div>
                        <div>
                            <input id="nguoinhan" class="input-field" type="text" name="tenkhach" value="" placeholder="Tên khách hàng">                            
                            <input id="diachi" class="input-field" type="text" value="" name="diachi" placeholder="Địa chỉ khách hàng">                           
                        </div>						
                        <div>
                            <input id="sdt" class="input-field" type="text" value="" name="sdt" placeholder="Số điện thoại">
                            <div id="errorsdt" class="error">Bạn chưa nhập số điện thoại</div>
                        </div>
                        <div>
                            <input id="ghichu" class="input-field" type="text" value="" placeholder="Ghi chú(nếu có)">
                        </div>
                        <div class="pay">
                            <div class="pay-text" style="margin-top: 0px">
                                <h2>2. Hình thức thanh toán</h2>
                            </div>
                            <div class="pay-click">
                                <div class="pay-left" id="payment" style="margin-top: -10px;">
                                    <div>
                                        <input type="radio" name="pay" class="check-box" value="Thanh toán khi giao hàng" id="id-express" checked>
                                        <img src="Image/cash.png" style="margin: auto"> Thanh toán khi nhận hàng
                                    </div>
                                    <div>
                                        <input type="radio" name="pay" class="check-box" value="ATM-VietTinBank" id="ATM">
                                        <img src="Image/atm.png" style="margin: auto"> Thẻ ATM

                                    </div>
                                    <div>
                                        <input type="radio" name="pay" class="check-box" value="ZaloPay" id="zalo">
                                        <img src="Image/zalo.png" style="margin: auto"> Ví Zalopay

                                    </div>
                                </div>
                                <div class="pay-right">
                                    <div>
                                        <input type="radio" name="pay" class="check-box" value="Visa/Master/JCB" id="visa">
                                        <img src="Image/visa.png" style="margin: auto"> Visa/Master/JCB

                                    </div>
                                    <div>
                                        <input type="radio" name="pay" class="check-box" value="MoMo" id="momo">
                                        <img src="Image/momo.png" style="margin: auto"> Ví Momo

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
                <input id="nut" name="nut" value="Lập hóa đơn"style="margin-right: 20px; margin-top: 0px;" type="submit" class="submit-btn">
				</form>
				<?php					
					switch($_POST['nut'])
					{
						case 'Lập hóa đơn':
						{						
							if($_SESSION['myuser']!='' && $_SESSION['mypass']!='')
							{
								$_SESSION['idhoadon'] = time()+time();
								$_SESSION['tenkhach'] = $_POST['tenkhach'];
								$_SESSION['diachikhach'] = $_POST['diachi'];								
								$_SESSION['stdkhach'] = $_POST['sdt'];
								$_SESSION['chinhanh'] = $_POST['ChiNhanh'];							
								$ten = $_POST['tenkhach'];
								$diachi = $_POST['diachi'];
								$idnv = $_SESSION['myid'];
								$sdt = $_POST['sdt'];
								$chinhanh = $_POST['ChiNhanh'];
								if($ten!='' && $diachi!='' && $sdt!='' && $chinhanh!='' && $idnv!='')
								{
									$p->addkhachhang($ten,$diachi,$sdt,$idnv,$_SESSION['idhoadon']);
									echo '<script>window.location="inhoadon.php"</script>';
								}
								else
								{
									echo '<script>
											alert("Bạn điền đầy đủ thông tin")
										</script>'; 
								}							
							}							
							else
							{
								echo '<script>alert("Bạn cần đăng nhập")</script>'; 
							}
							break;
						}						
					}
				?>
					
            </div>
    			</div>
			</div>
		</div>
			<div id="khungtovcl-form">
	  <div class="form-box">
	  	<div class="xbtn" onclick="offreg()">x
		</div>
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="loginmotion()">Đăng nhập</button>
			<button type="button" class="toggle-btn" onclick="registermotion()">Đăng ký</button>
		</div>

			<div style="position: relative;">			 
			    <form id="login" class="input-group" method="post">
			      	<input type="text" class="input-field" id="login-name" name="user" placeholder="Tên đăng nhập" required>
				  	<input type="password" class="input-field" id="login-pass" name="pass" placeholder="Nhập mật khẩu" required>
				  	<input type="submit" id="nut" name="nut" value="Đăng nhập" style="width: 50%; margin-right: 70px;"type="submit" class="submit-btn" id="log-btn">
			    </form>
			  	<?php
					switch($_POST['nut'])
					{
						case 'Đăng nhập':
						{
							$user = $_POST['user'];
							$pass = $_POST['pass'];
							if($user!='' && $pass!='')
							{
								if($p->checkaccount($user,$pass)==1)
								{
									echo '<script>alert("Đăng nhập thành công")</script>';
								}
								else
								{
									echo '<script>alert("Đăng nhập không thành công")</script>';
								}
							}
							break;
						}
					}
				if(isset($_SESSION['myuser']) && isset($_SESSION['mypass']))
				{		
					$p->checkaccount($_SESSION['myuser'],$_SESSION['mypass']);
				}
				?>
			    <form id="register" class="input-group" method="post">
					<input type="text" class="input-field" id="regsdt" placeholder="Số điện thoại" required>
			      	<input type="text" class="input-field" id="reghoten" placeholder="Họ và tên" required>
					<input type="text" class="input-field" id="reguser" placeholder="Tên đăng nhập" required>
					<input type="password" class="input-field" id="regpass" placeholder="Nhập mật khẩu" required>
				  	<input type="password" class="input-field" id="checkpass" placeholder="Nhập lai mật khẩu" required>
					<input type="text" class="input-field" id="regemail" placeholder="Địa chỉ Email" required>
				  	<input type="checkbox" class="check-box" id="checkaccept"><span style="font-size: 12px; color:grey">Tôi đồng ý với điều khoản và dịch vụ</span>
				  	<input type="submit" name="nut" id="nut" value="Đăng ký" style="width: 50%; margin-right: 70px" type="submit" class="submit-btn" id="regbtn">
			    </form>
			</div>
		</div>
	</div>
	<footer>

		<div class="zone-bhx"> </div>
		<div class="rowfoot1">
			<ul class="colfoot">
				<li><a href="#" title="Lịch sử mua hàng">Lịch sử mua hàng</a></li>
				<li><a href="#" title="Đăng ký làm đại lý cho TGDĐ">Đăng ký làm đại lý cho Didongchinhhang</a></li>
				<li><a href="#" title="Hướng dẫn mua trả góp">Tìm hiểu về mua trả góp</a></li>
				<li><a href="#" title="Tìm trung tâm bảo hành">Chính sách bảo hành</a></li>
				<li><a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
				
				<li class="showmore"><a href="j#" title="Xem thêm">Xem thêm</a></li>
				<li class="hidden"><a href="#" title="Giao hàng & Thanh toán">Giao hàng & Thanh toán</a></li>
				<li class="hidden"><a href="#" title="Hướng dẫn mua online">Hướng dẫn mua online</a></li>
				<li class="hidden"><a href="#" title="Mua hàng doanh nghiệp">Bán hàng doanh nghiệp</a></li>
				<li class="hidden"><a href="#" title="Phiếu mua hàng">Phiếu mua hàng</a></li>
				<li class="hidden"><a href="#" target="_blank" title="In hóa đơn điện tử" rel="nofollow noopener">In hóa đơn điện tử</a></li>
				<li class="hidden"><a href="#" title="Quy chế hoạt động">Quy chế hoạt động</a></li>
				<li class="hidden"><a href="#" title="Nội quy cửa hàng">Nội quy cửa hàng</a></li>
				<li class="hidden"><a href="#" title="Chất lượng phục vụ">Chất lượng phục vụ</a></li>
				<li class="hidden"><a href="#" title="Cảnh báo giả mạo">Cảnh báo giả mạo</a></li>
				<li class="hidden"><a href="#" title="Thông tin trao thưởng">Thông tin trao thưởng</a></li>
				<li class="hidden"><a href="/#" title="Chính sách khui hộp sản phẩm Apple">Chính sách khui hộp sản phẩm Apple</a></li>
			</ul>
			<ul class="colfoot">
				<li><a href="#" target="_blank" title="Giới thiệu công ty (mwg.vn)" rel="noopener">Giới thiệu công ty <span>(mwg.vn)</span></a></li>
				<li><a href="#" target="_blank" title="Tuyển dụng" rel="noopener">Tuyển dụng</a></li>
				<li><a href="#" title="Gửi góp ý, khiếu nại">Gửi góp ý, khiếu nại</a></li>
				<li><a href="#" title="Tìm siêu thị (2.559 shop)">Tìm siêu thị <span>(2.559 shop)</span></a></li>
				<li>
					<a class="viewmb" href="#" rel="nofollow" title="Xem bản mobile">Xem bản mobile</a>
				</li>
			</ul>
			<ul class="colfoot">
				<li>
					<p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
					<p>Gọi khiếu nại &nbsp; <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
					<p>Gọi bảo hành &nbsp; <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
					<p>Kỹ thuật &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:18001763">1800.1763</a> (7:30 - 22:00)</p>
					<a target="_blank" rel="nofollow noopener" class="bct" href="#" aria-label="bộ công thương mwg"><i class="icontgdd-bct"></i></a>
					<a rel="nofollow noopener" class="bct" href="#" aria-label="bộ công thương chống hàng giả"><i class="icontgdd-hg"></i></a>
					<a href="#" title="DMCA.com Protection Status" class="dmca-badge"> <img style="opacity:0.6;margin: 0px auto -8px;display: block;" src="//images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d" alt="DMCA.com Protection Status"></a>
				</li>
			</ul>
			<ul class="colfoot collast">
				<li>
					<a target="_blank" href="#" class="linkfb" rel="noopener">
						<i class="icontgdd-share1"></i>3.5tr
					</a>
					<a target="_blank" href="#" class="linkyt" rel="noopener">
						<i class="icontgdd-share3"></i>787k
					</a>
					<div class="group">
						<label>Website cùng tập đoàn:</label>
						<a href="#" target="_blank" rel="noopener" class="ma" aria-label="www.maiamtgdd.vn"><i class="iconlogo-ma"></i></a>
						<a href="#" target="_blank" rel="noopener" class="dm" aria-label="www.dienmayxanh.com"><i class="iconlogo-dmx"></i></a>
						<a href="#" target="_blank" rel="noopener" class="bhx" aria-label="www.bachhoaxanh.com"><i class="iconlogo-bhx"></i></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="rowfoot2">
			<p>© 2018. Công ty cổ phần Di động chính hãng. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020. Địa chỉ: 273 An Dương Vương, P.3, Q.5, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com.<br />Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. <a href="/thoa-thuan-su-dung-trang-mxh">Xem chính sách sử dụng</a></p>
		</div>
	</footer>
</body>
<script>
/*khung dk dn*/
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

	function dathang()
	{
			document.getElementById("khungtovcl-dathang").style.display="block";
			document.getElementById("dathang-box").style.display="block";	
	}

/*nút reg/sign*/
	function offbox(){
		var x=document.getElementById("product-info");
		var y=document.getElementById("info-detail");
		x.style.display="none";
		y.style.display="none";
	}

	function offdathang(){
		var x=document.getElementById("khungtovcl-dathang");
		var y=document.getElementById("dathang-box");
		x.style.display="none";
		y.style.display="none";
	}
	window.onload = function () {
		if(localStorage.getItem('cart')!=null){
			showCartOrder();
		}
		showMenu();
		checklogin();
		hello();
	}
</script>
<script src="javascript.js"></script>
</html>