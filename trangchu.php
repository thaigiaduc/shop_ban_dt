<?php
session_start();
include("SQL_PHP/classfunction.php");
$p=new csdl();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
#nutct
		{
			cursor: pointer;
		}		
</style>
	<title>DI ĐỘNG CHÍNH HÃNG - Chuyên bán lẻ điện thoại di động chính hãng</title>
	<link rel="shortcut icon" type="image/png" href="Image/favicon.png"/>
	<link rel="stylesheet" href="./Style.css">
	<link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
					<a href="phukien.php">PHỤ KIỆN</a>
				</li>
			</ul>			
		  	<div style="position:relative; top:0px;">
					<button id="showregbtn" onclick="showreg()" style="">Đăng nhập | Đăng ký</button>
				</div>
			<form id="form1" name="form1" method="post">
				<input type="submit" id="nutdangxuat" name="nut" value="Đăng xuất" style="float: left; margin-top:-57px; margin-left: 1290px;width: 70px; height: 50px; background-color: #FF6B00; color: white; cursor: pointer; display: none;">
				<?php
			switch($_POST['nut'])
			{
				case 'Đăng xuất':
				{
					echo '<script>alert("Bạn có chắc sẽ đăng xuất?")</script>';
					$p->checkaccount("","");
					$_SESSION['myuser'] = "";
					$_SESSION['mypass'] = "";
					echo '<script>document.location="trangchu.php"</script>';
				}
			}
			?>
			</form>
			<div id="khungten" style="float: left; background-color: #043700; width: auto; height: 50px; margin-top: -57px; margin-left:1140px; display: none ">
				<p id="tenkhach" style="padding-top: 15px;padding-left: 15px; padding-right: 15px;color: white"></p>
			</div>
			
		  <div style="margin-top: -40px;margin-left: 1420px;">
			<a href="cart.php"><i class="fas fa-shopping-cart" style="font-size: 15px; color: black;cursor: pointer;">Giỏ hàng</i></a>
			</div>
		  <div class="dropdown" style="float: left; margin-top:-57px;margin-left: 1180px; display: none" id="admin">
			 <a href="Admin-information.php"><button class="dropbtn" style="width: 100px; height: 50px">Admin</button></a> 
		</div>		
		</div>
		</div>
		<div style="position: relative; max-width: 1500px; margin:0 auto; margin-top: 30px">

			<div style="z-index: 2;">
			<div class="slideshow-container">
				<a href="#img1" style="cursor: pointer;">
					<div class="mySlides fade" style="margin-left: 7%;">
					  <img src="./Image/hinh/ss.png" width="100%", height="100%">
					  <div class="text"> </div>
					</div>
				</a>
				<a href="#img2" style="cursor: pointer;">
					<div class="mySlides fade" style="margin-left: 7%">
					  <img src="./Image/hinh/rm.png" width=100%, height="100%">
					  <div class="text"> </div>
					</div>
				</a>
				<a href="#img3" style="cursor: pointer;">
					<div class="mySlides fade" style="margin-left: 7%;">
					  <img src="./Image/hinh/op.png" width=100%, height="100%">
					  <div class="text"> </div>
					</div>
				</a>
				<div class="tragop" style="cursor: pointer;">
					<img src="./Image/hinh/gop.png" width="100%"; height="100%">
					<img src="./Image/hinh/iphone.png" width="100%"; height="100%">
					<img src="./Image/hinh/xiao.jfif" width="100%" height="100%">
				</div>
				<div class="xakho" style="cursor: pointer;">
					<img src="./Image/hinh/xahang.png" width="100%", height="100%">
				</div>
			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 			
			</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div style="background: #FFD412; width: 80.5%; height: 40px; margin-left: 140px;">
			<strong><p style="padding-top: 10px;padding-left: 10px;">Danh sách sản phẩm nổi bật</p></strong>
		</div>
		<br>
		<div style="width: 400px; margin-left: 140px;margin-bottom: 5px;">
		<form id="form2" name="form2" method="post">		 
			<select style="width: 150px; height: 30px;" name="locsp">
	  			<option value="sanpham">Lọc sản phẩm</option>
				<optgroup label="Lọc theo tình trạng">
					<option value="tinhtrangconhang">Sản phẩm còn hàng</option>
					<option value="tinhtranghethang">Sản phẩm hết hàng</option>
				</optgroup>
				<optgroup label="Lọc theo nhãn hiệu">
					<option value="apple">Apple</option>
					<option value="nokia">Nokia</option>
				</optgroup>
			</select>
			<input type="submit" id="nut1" name="nut" value="Lọc" style="width: 50px; height: 30px;background-color: red;color: white">
			<input type="submit" id="nut1" name="nut" value="In báo cáo" style="width: 100px; height: 30px;background-color: red;color: white">
		</form>
		</div>
		<div id="import1" style="display: block;text-align: center;height:330px; width: 1223px; margin-left: 140px;">
			<?php
				$p->import("select * from sanpham");
			?>
		</div>	
	  <div id="import" style="display: block">
			<?php
			switch($_POST['nut'])					
			{
				case 'Lọc':
				{
					$loc = $_POST['locsp'];
					if($loc == 'tinhtrangconhang')
					{
						$p->import("select * from sanpham where Tinhtrang='1'");
						echo '<script>document.getElementById("import1").style.display="none"</script>';
					}
					else if($loc == 'tinhtranghethang')
					{
						$p->import("select * from sanpham where Tinhtrang='0'");
						echo '<script>document.getElementById("import1").style.display="none"</script>';
					}
					else if($loc == 'apple')
					{
						$p->import("select * from sanpham where Nhanhieu='Apple'");
						echo '<script>document.getElementById("import1").style.display="none"</script>';
					}
					else if($loc == 'nokia')
					{
						$p->import("select * from sanpham where Nhanhieu='Nokia'");
						echo '<script>document.getElementById("import1").style.display="none"</script>';
					}					
					break;
				}
			}
		  	switch($_POST['nut'])
			{
				case 'In báo cáo':
				{
					if(isset($_SESSION['myuser']) && isset($_SESSION['mypass']))
					{
						echo '<script>window.location="inbaocaonhap.php"</script>';
						echo '<script>alert("In báo cáo nhập hàng thành công")</script>';
					}
					else
					{
						echo '<script>alert("Bạn hãy đăng nhập")</script>';	
					}
					break;
				}
			}		  	
			?>
		  
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
					<input type="text" class="input-field" id="reghoten" name="tendem" placeholder="Tên đệm" required>
			      	<input type="text" class="input-field" id="reghoten" name="ten" placeholder="Tên" required>
					<input type="text" class="input-field" name="username" id="reguser" placeholder="Tên đăng nhập" required>
					<input type="password" class="input-field" name="password"id="regpass" placeholder="Nhập mật khẩu" required>				  	
					<input type="text" class="input-field" id="regemail" placeholder="Địa chỉ Email" required>
				  	<input type="checkbox" class="check-box" id="checkaccept"><span style="font-size: 12px; color:grey">Tôi đồng ý với điều khoản và dịch vụ</span>
				  	<input type="submit" name="nut" id="nut" value="Đăng ký" style="width: 50%; margin-right: 70px" type="submit" class="submit-btn" id="regbtn">
				<?php
					switch($_POST['nut'])
					{
						case 'Đăng ký':
							{
								$id = time();
								$tendem = $_POST['tendem'];
								$ten = $_POST['ten'];
								$user = $_POST['username'];
								$pass = $_POST['password'];
								if($p->adduser($id,$user,$pass,$tendem,$ten,1))
								{
									echo '<script>alert("Đăng ký thành công")</script>';
								}
								break;
							}
					}
				?>
			    </form>				
			</div>
		</div>
	</div>
	<div id="khungtovcl-detail">
		<div style="width: 1100px; margin: 0 auto;">
			<div id="detail-box">
				
			</div>
		</div>
	</div>
	<div id="khungsearch">
		<div id="thanhsearch">
			<from method="post">
			<input type="text"  id="timkiem" name="timkiem" onkeyup="search()" style="margin-left: 200px;">
				<input type="submit" id="nut" name="nut" value="Tìm kiếm" style="cursor: pointer;">
				<?php
			switch($_POST['nut'])
			{
				case 'Tìm kiếm':
					{
						$tim = $_POST['timkiem'];
						$p->importtimkiem("select * from sanpham where TenSP like '%$tim%' or ID like '%$tim%'");
						break;
					}
			}
			?>
			</from>
		</div>
		<div id="closesearch" onclick="closesearch();" style="margin-top: 20px; margin-left: -50px">X</div>							
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
		function openNav() {
  			document.getElementById("myNav").style.width = "1223px";
		}
		function closeNav() {			
  			document.getElementById("myNav").style.width = "0";
		}
var slideIndex = 0;
showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 3500); // Change image every 3.5 seconds
	    for (i = 0; i < dots.length; i++) {
      		dots[i].className = dots[i].className.replace(" active", "");
  		}
  		slides[slideIndex-1].style.display = "block";  
  		dots[slideIndex-1].className += " active";
	}


//onload
	window.onload = function() {
		acccountAD();	
		showMenu();
		checklogin();
		hello();		
	}
//off detail
	function offdetail(){
		var x = document.getElementById("khungtovcl-detail");
		var y= document.getElementsByClassName("detail-box");
  		
    		x.style.display = "none";
    		y[0].style.display = "none";
	}
</script>
<script src="./javascript.js"></script>
</html>