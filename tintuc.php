<?php
include("SQL_PHP/classfunction.php");
$p=new csdl();
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
					<a href="sim.html">&nbsp; SIM CARD </a>
				</li>
				<li id='menu'>
					<i class="fas fa-headphones" style="line-height: 35px;float: left; margin: 6px; margin-top: 15px; font-size: 20px;"></i>
					<a href="phukien.php">&nbsp;PHỤ KIỆN</a>
				</li>
			</ul>					  	
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




		<!doctype html>
		<html lang="vi">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://cdn.tgdd.vn/v2015/Scripts/desktop/detectie/html5shiv.js"></script>
		  <script src="https://cdn.tgdd.vn/v2015/Scripts/desktop/detectie/respond.min.js"></script>
		<![endif]-->
		<head>
			<meta content="INDEX,FOLLOW" name="robots" />
			
			<meta name="viewport" content="width=device-width" />
			<meta name="copyright" content="Công ty Cổ phần Thế Giới Di Động" />
			<meta name="author" content="Công ty Cổ phần Thế Giới Di Động" />
			<meta http-equiv="audience" content="General" />
			<meta name="resource-type" content="Document" />
			<meta name="distribution" content="Global" />
			<meta name="revisit-after" content="1 days" />
			<meta name="GENERATOR" content="Công ty Cổ phần Thế Giới Di Động" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
			<link href="/tin-tuc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
			<link rel="publisher" href="https://plus.google.com/+Thegioididongdotcom/posts" />
			<link rel="author" href="https://plus.google.com/+Thegioididongdotcom/posts" />
			<meta property="og:site_name" content="Thegioididong.com" />
			<meta property="og:type" content="website" />
			<meta property="og:locale" content="vi_VN" />
			<meta http-equiv="x-dns-prefetch-control" content="on">
			<link rel="dns-prefetch" href="https://cdn.tgdd.vn/">
		
			<title>Tin tức công nghệ cập nhật 24h - Thegioididong.com</title> 
			<meta name="keywords" content="Tin tức, tin công nghệ, tin điện thoại, đánh giá sản phẩm" />
			<meta name="description" content="Thông tin công nghệ về điện thoại di động, máy tính bảng, laptop mới nhất được cập nhật hằng giờ. Tin về sản phẩm mới mắt, đánh giá sản phẩm, mẹo hay sử dụng..." />
			<style rel="stylesheet">
		/* 10:33:57 20/04/2021 */@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local('RobotoCondensed-Regular'),url(https://cdn.tgdd.vn/fonts/roboto-condensed/Zd2E9abXLFGSr9G3YK2MsEYkBUapGhkWjcxWm3_vZWA.woff) format('woff')}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local('RobotoCondensed-Bold'),url(https://cdn.tgdd.vn/fonts/roboto-condensed/b9QBgL0iMZfDSpmcXcE8nAXW-UgdjZ3YrDta4-p32EE.woff) format('woff')}@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:400;src:local('Roboto Condensed Italic'),local('RobotoCondensed-Italic'),url(https://cdn.tgdd.vn/fonts/roboto-condensed/BP5K8ZAJv9qEbmuFp8RpJau6VQ0jQQbvSE8VA7z_fVA.woff) format('woff')}@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'),local('RobotoCondensed-BoldItalic'),url(https://cdn.tgdd.vn/fonts/roboto-condensed/mg0cGfGRUERshzBlvqxeAKyfWPSGaEIhFC6Y-MJ0oyw.woff) format('woff')}
		/* 10:33:56 20/04/2021 */*{margin:0;padding:0}body{min-width:1024px}img{border:0}a{text-decoration:none}ul,ol{list-style:none}.clr{clear:both}p{-webkit-margin-before:0;-webkit-margin-after:0;-webkit-margin-start:0;-webkit-margin-end:0;text-rendering:geometricPrecision}input[type=text],input[type=tel],textarea{-webkit-appearance:none}body,input,button,option,textarea,label,legend,h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{font:14px/18px Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;color:#333;outline:none;zoom:1}header{position:absolute;top:0;min-width:1024px;background:#fed700;width:100%;height:55px}section{max-width:1200px;width:100%;min-width:980px;margin:55px auto 0;position:relative}footer{width:100%;min-width:1024px;margin:0 auto;background:#fff;overflow:hidden;clear:both}.hide{display:none}.wrap-main{max-width:1200px;min-width:1024px;width:100%;height:55px;background:#000;margin:auto;position:relative;display:block}.logo{float:left;width:165px;display:block;padding:14px 0 11px 5px}.logo a{display:block;overflow:hidden}#search-site{float:left;width:230px;height:35px;margin:10px 10px 0 10px;background:#fff;position:relative;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px}.topinput{float:left;width:162px;margin-left:8px;padding-top:3px;border:0;position:relative;background:#fff;height:30px;text-indent:10px;font-size:13px}.btntop{float:right;width:40px;height:35px;border:0;background:none}nav{width:780px;background:#fed700;margin:0;padding:0;display:table;*display:block;*float:none}nav a{display:block;padding:10px 5px 0;color:#000;font-size:11px;position:relative}nav a:hover,nav a.actmenu{background-color:#f5f5f5}nav a.mobile{width:80px}nav a.tablet{width:80px}nav a.laptop{width:74px}nav a.phukien{width:70px}nav a.simcard{width:60px}nav a.ask{width:70px}nav a.maydoitra{width:80px}nav a.gameapp{width:80px;height:43px}nav a span{display:block;position:absolute;top:9px;width:23px;margin:auto;left:0;right:0;font-size:11px}nav a.cardsim,nav a.utility{text-transform:none;font-size:13px;padding:0;vertical-align:middle;line-height:19px;padding-top:6px}nav a.utility{width:100px}[class^="icontgdd-"],[class*="icontgdd-"],[class^="iconmobile-"],[class*="iconmobile-"]{background-image:url(/Content/desktop/images/V4/icondesktop2022@1x_edit.png?v=004);background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}@media all and (-webkit-min-device-pixel-ratio:1.5){[class^="icontgdd-"],[class*="icontgdd-"],[class^="iconmobile-"],[class*="iconmobile-"]{background-image:url(/Content/desktop/images/V4/icondesktop2022@2x_edit.png?v=2);background-size:500px 100px}}.icontgdd-logo{background-position:0 0;width:156px;height:30px;display:block;margin:auto}.icontgdd-topsearch{background-position:-160px 0;width:20px;height:20px;display:block;margin:1px auto 0}.icontgdd-mobile{background-position:-190px 0;width:15px;height:25px;display:block;margin:2px auto 3px}.icontgdd-tablet{background-position:-209px 0;display:block;margin:0 auto 5px;width:33px;height:22px}.icontgdd-laptop{background-position:-245px 0;display:block;margin:0 auto 5px;width:39px;height:21px}.icontgdd-phukien{background-position:-288px 0;display:block;margin:0 auto 5px;width:22px;height:22px}.icontgdd-maydoitra{background-position:-315px 0;display:block;margin:0 auto 4px;width:34px;height:26px}.icontgdd-simcard{background-position:-355px 0;display:block;margin:0 auto 5px;width:18px;height:23px}.icontgdd-news{display:block;margin:0 auto 2px;background-position:-428px -50px;width:28px;height:25px}.icontgdd-ask{background-position:-410px 0;display:block;margin:0 auto 3px;width:25px;height:25px}.icontgdd-gameapp{background-position:-462px -52px;display:block;margin:0 auto 5px;height:20px;width:32px}.icontgdd-promo{background-position:-475px 0;display:block;margin:0 auto 3px;width:22px;height:24px}.icontgdd-watch{background-position:-362px -50px;display:block;margin:0 auto 0;width:16px;height:27px}.rowfoot1{display:block;overflow:hidden;width:100%;min-width:1024px;max-width:1200px;margin:0 auto;padding:15px 0}.colfoot{float:left;width:28%;margin:0;position:relative}.collast{width:11%;float:right}.colfoot li{float:none;position:relative;font-size:13px;color:#444}.colfoot li a{display:block;color:#288ad6;font-size:14px;line-height:25px;padding-top:5px}.colfoot li a:hover{color:#666}.colfoot li a.bct,.colfoot li a.dmca-badge{display:inline-block}.colfoot li p{display:block;padding-top:5px;line-height:25px;font-size:14px;color:#666}.colfoot li p a{display:inline;font-weight:600;color:#333;padding:0 5px}.colfoot li.showmore{font-weight:bold}.colfoot li.showmore a:after{content:'';display:inline-block;width:0;height:0;border-top:5px solid #288ad6;border-left:5px solid transparent;border-right:5px solid transparent;margin:0 0 0 5px;position:relative;top:-2px}.colfoot li.showmore a:hover:after{border-top:5px solid #666}.colfoot li.hidden{display:none}.colfoot li a.linkfb{float:left;padding:0 10px 0 0;margin:9px 0 2px;border-right:1px solid #e9e9e9;font-size:12px;line-height:1;color:#288ad6}.colfoot li a.linkyt{float:left;padding:0 0 0 10px;margin:9px 0 2px;font-size:12px;color:#288ad6;line-height:1}.colfoot li a.dmx{display:block;overflow:hidden;clear:both;padding:5px 0}.rowfoot2{width:100%;min-width:980px;overflow:hidden;background:#f8f8f8;padding:10px 0}.rowfoot2 p{display:block;width:100%;margin:auto;font-size:10px;color:#999;text-align:center;font-size:10px !important}.rowfoot2 a{color:#999}.icontgdd-share1{background-position:0 -30px;width:13px;height:13px;margin-right:3px}.icontgdd-share3{background-position:-16px -30px;width:17px;height:13px;margin-right:3px}.icontgdd-dmx{background-position:-36px -30px;width:100px;height:19px}.icontgdd-bct{background-position:0 -50px;width:110px;height:38px}.iconlogo-ma{background-position:-313px 0;width:100px !important;height:19px !important}.stickcart{position:fixed;right:70px;bottom:42px;background:#fff;border-radius:40px;box-shadow:0 0 10px 0 rgba(0,0,0,.15);font-size:14px;color:#288ad6;padding:0 10px 0 0;width:130px;z-index:99}.stickcart div{float:left;width:38px;height:38px;border-radius:40px;background:#ffde31;margin:2px 5px 2px 2px}.stickcart span{display:block;padding:4px 0 0;white-space:nowrap}.stickcart strong{display:block;white-space:nowrap}.icontgdd-cartstick{background-position:-265px -30px;width:22px;height:18px;display:block;margin:11px 0 0 6px}[class^="iconlogo-"],[class*="iconlogo-"]{background-image:url(/Content/desktop/images/V4/logosprite@1x.png);background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}@media(-webkit-min-device-pixel-ratio:1.5){[class^="iconlogo-"],[class*="iconlogo-"]{background-image:url(/Content/desktop/images/V4/logosprite@2x.png);background-size:517px 20px}}.iconlogo-bhx{background-position:-220px 0;width:90px;height:19px}.iconlogo-dmx{background-position:-109px 0;width:111px;height:19px}.iconlogo-vv{background-position:-350px 0;width:74px;height:19px}.icontgdd-hg{background-position:-384px -49px;width:45px;height:38px}.group{display:block;overflow:hidden;clear:both}.group label{display:block;font-size:12px;color:#888;margin-top:10px}.group a{display:block;vertical-align:top;padding-top:0 !important}.breadcrumb{display:block;overflow:hidden;margin:0;background:#fff;line-height:32px;padding-top:5px}.breadcrumb li{display:inline-block;vertical-align:middle;overflow:hidden}.breadcrumb li a{display:inline-block;white-space:nowrap;font-size:14px;color:#288ad6;padding:0 10px 0 0}.breadcrumb span{display:inline-block;font-size:20px;color:#999;padding:2px 5px 0 0;line-height:1}.breadcrumb li h1,.breadcrumb li h2{display:inline-block;font-size:14px;color:#288ad6;font-weight:normal;line-height:32px}.breadcrumb li h1 a{color:#288ad6}.breadcrumb li h2 a{padding-left:2px;color:#288ad6}#back-top{display:none;z-index:99}#back-top span:before{cursor:pointer;background:#fdd504;width:40px;position:fixed;right:20px;bottom:45px;height:40px;text-align:center;line-height:40px;font-size:18px;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-o-transition:all .2s linear;-transition:all .2s linear;color:#000;content:"▲";opacity:.7;z-index:8;border-radius:5px}#back-top span:hover:before{opacity:1}#dlding,#imgtrack{display:none}.wrap-suggestion{display:block;border:1px solid #e2e2e2;background:#fff;position:absolute;left:0;width:345px;top:45px;z-index:9}.wrap-suggestion:after,.wrap-suggestion:before{bottom:100%;left:80px;border:solid transparent;content:" ";height:0;width:0;position:absolute}.wrap-suggestion:after{border-color:rgba(255,255,255,0);border-bottom-color:#fff;border-width:8px;margin-left:-8px}.wrap-suggestion:before{border-color:rgba(218,218,218,0);border-bottom-color:#dadada;border-width:9px;margin-left:-9px}.wrap-suggestion li{display:block;background:#fff;overflow:hidden;list-style:none;border-bottom:1px dotted #ccc}.wrap-suggestion li:last-child{border-bottom:0}.wrap-suggestion li:hover,.wrapp-producthome .wrap-suggestion li.selected,.wrap-main .wrap-suggestion li.selected{background:#f8f8f8}.wrap-suggestion li a{display:block;overflow:hidden;padding:6px;color:#999;font-size:12px}.wrap-suggestion li a img{float:left;width:50px;height:auto;margin:0 6px 0 0}.wrap-suggestion li a h3{display:block;width:auto;color:#333;font-size:14px;font-weight:700;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.wrap-suggestion li a h6{font-size:12px;color:#e67e22}.wrap-suggestion li a span{float:left;font-size:13px;color:#333}.wrap-suggestion li a span.price{font-size:12px;color:#c70100;float:none}.wrap-suggestion li a label{display:block;font-size:12px;color:#999;padding-left:56px}.wrap-suggestion li a label strong{font-size:12px;color:#d0021b}.wrap-suggestion li.samsung img{display:inline-block;vertical-align:middle;width:80px}.wrap-suggestion li.samsung b{display:inline-block;vertical-align:middle;color:#333}@media screen and (max-width:1220px){.wrap-main{width:1024px}.logo{width:35px}.icontgdd-logo{width:28px}#search-site{width:200px}.topinput{width:152px}nav{width:764px}nav a{font-size:11px}.colfoot li a{padding:0 0 0 5px;line-height:30px}.colfoot{width:26.5%}.collast{width:13%}.colfoot li a.bct{padding:0}.breadcrumb{margin:0 10px}}.mix-menu{position:absolute;right:0;display:none;width:100%;margin-top:3px}.mix-menu a{display:block;width:100%;height:44px;padding:6px 0 4px;color:#000;background:#fed700;font-size:13px;text-align:center;position:relative;border-top:1px solid rgba(0,0,0,.1);text-transform:none}.mix-menu a.cardsim{line-height:44px}.mix-menu a:hover{border-top:1px solid rgba(0,0,0,.1);background-color:#eee}#utility-cardsim{width:100px;height:36px;padding:15px 5px 4px;color:#000;background:#fed700;background-color:#fed700;font-size:13px;text-align:center;display:inline-block;border-left:1px solid rgba(0,0,0,.1);position:relative}#utility-cardsim:hover .mix-menu{display:block}#utility-cardsim:hover #utility-cardsim{background-color:#fed700}#utility-cardsim:hover{background-color:#f5f5f5}#dot{width:10px;height:10px;background-color:#f33;border-radius:100%;position:absolute;left:0;top:50%;margin-top:-5px;display:block}#dot .ping{border:1px solid #f33;width:10px;height:10px;opacity:1;background-color:rgba(238,46,36,.2);border-radius:100%;-webkit-animation-duration:1.25s;animation-duration:1.25s;-webkit-animation-name:sonar;animation-name:sonar;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear;display:block;margin:-1px 0 0 -1px}@-webkit-keyframes sonar{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(3);transform:scale(3);opacity:0}}@keyframes sonar{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(3);transform:scale(3);opacity:0}}
		/* 10:33:56 20/04/2021 */input[type=text],input[type=tel],textarea{-webkit-appearance:none}[class^="iconnews-"],[class*="iconnews-"]{background-image:url(https://cdn.tgdd.vn/tin-tuc/Content/desktop/images/newsdesktop-v6@2x.png);background-size:390px 224px;background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}section{max-width:1200px;width:100%;min-width:980px;margin:55px auto 0}.gameapp{background:#fed701 !important;font-weight:bold !important}.menu{float:left;overflow:visible;height:70px;clear:both;margin:auto;width:80%;max-width:1200px}.menu li{display:inline-block;margin:0 10px;font-family:Roboto Condensed,sans-serif;height:auto;margin:28px 0;position:relative}.menu li a{display:block;padding:3px 5px;font-size:15px;color:#333;text-transform:uppercase;font-weight:300;background:#fff;border-radius:2px}.menu li a.new{margin-right:25px}.menu li a:hover{color:#4a90e2}.menu li a.actmenu{background:#fed701}.menu li a.actmenu:hover{color:#333}.menu li.menucommunity{float:right;font-family:Arial,Helvetica,sans-serif}.menu li.menucommunity .logged{float:left}.menu li.menucommunity .logged .user{float:left;text-transform:none;color:#333;font-size:14px;font-weight:600;padding:0 10px}.menu li.menucommunity .logged .user img{float:left;width:25px;height:25px;border-radius:25px;margin:2px 5px 0 0}.menu li.menucommunity .logged .user strong{padding:0 15px 0 0;border-right:1px solid #d9d9d9;float:left;margin:5px 0}.menu li.menucommunity .logged .logout{color:#333;font-size:14px;text-transform:none;font-weight:300;padding:6px 10px;float:left;margin-right:15px}.menu li label.menulabel{position:absolute;right:5px;font-size:11px;padding:0 5px;background:#f00;color:#fff;border-radius:3px;line-height:1.6;text-transform:uppercase;top:-19px}.menu .messenger{text-transform:none;color:#288ad6;margin:0}.menu .messenger b{background-image:url(https://cdn.tgdd.vn/tin-tuc/Content/desktop/images/icon/icon-messenger.png);display:inline-block;width:16px;height:16px;vertical-align:middle;margin-right:2px}.menu .messenger div{font-size:16px;display:inline-block}.iconnews-commublue{background-position:-45px 0;width:20px;height:12px;display:block;margin:7px auto}.menu li.menucommunity .linkcommu{float:right;border:1px solid #d9d9d9;color:#288ad6;font-weight:600;padding:7px 10px 3px;background:#eee;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#eee),to(#fff));background:-webkit-linear-gradient(top,#fff,#eee);background:-moz-linear-gradient(top,#fff,#eee);background:-ms-linear-gradient(top,#fff,#eee);background:-o-linear-gradient(top,#fff,#eee);position:relative}.menu li.menucommunity .linkcommu span{float:left;height:30px;width:30px;border-right:1px solid #d9d9d9;margin:-7px 7px -7px -7px}.menu li.menucommunity .linkcommu label{position:absolute;top:-20px;font-size:11px;right:0;color:#f89406;font-weight:bold}.mnfoo{border-top:1px solid #eee}.menucommunity .login{color:#333;font-size:14px;text-transform:none;font-weight:300;padding:6px 10px;float:left;margin-right:15px;position:relative;cursor:pointer;height:30px}.menucommunity .login:hover .colcon{display:block}.colcon{display:none;overflow:visible;padding:10px;position:absolute;top:40px;z-index:15;width:280px;background:#fff;left:-116%;box-shadow:0 4px 12px 0 rgba(0,0,0,.3);border-radius:4px}.colcon:after,.colcon:before{bottom:100%;left:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.colcon:after{border-bottom-color:#fff;border-width:10px;margin-left:-10px}.colcon:before{border-bottom-color:#eee;border-width:12px;margin-left:-12px}.menucommunity .login .fblogin{text-transform:none;display:block;overflow:hidden;margin-bottom:10px;border-radius:4px;font-size:16px;color:#fff;padding:10px;background:#3b5998;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#3b5998),to(#3a66c3));background:-webkit-linear-gradient(top,#3a66c3,#3b5998);background:-moz-linear-gradient(top,#3a66c3,#3b5998);background:-ms-linear-gradient(top,#3a66c3,#3b5998);background:-o-linear-gradient(top,#3a66c3,#3b5998)}.iconnews-flog{background-position:-295px -45px;width:14px;height:27px;margin:0 20px 0 10px}.menucommunity .login .gglogin{text-transform:none;display:block;overflow:hidden;border-radius:4px;font-size:16px;color:#fff;padding:10px;background:#c32808;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#c32808),to(#e3411f));background:-webkit-linear-gradient(top,#e3411f,#c32808);background:-moz-linear-gradient(top,#e3411f,#c32808);background:-ms-linear-gradient(top,#e3411f,#c32808);background:-o-linear-gradient(top,#e3411f,#c32808)}.iconnews-glog{background-position:-275px -45px;width:16px;height:26px;margin:0 20px 0 10px}.colcon p{display:block;overflow:hidden;font-size:12px;color:#999;margin:10px 0 0}#dlding{background:#000;border-radius:5px 0 0 0;bottom:0;color:#fff;display:none;opacity:.7;padding:8px 15px;position:fixed;right:0;z-index:99999999}.hide{display:none !important}.home-menu .menu{margin:auto !important}.home-menu section{margin:55px auto 0}.iconnews-closegal{background-position:-146px 0;width:14px;height:14px;display:block}.hot-lst{position:relative;overflow:hidden}.hot-lst li a{overflow:visible;background:#0078d7;float:left;position:relative;color:#fff;font-size:11px;margin:2px 5px 7px 12px;padding:0 15px 0 12px;height:24px;line-height:24px;border-top-right-radius:4px;border-bottom-right-radius:4px}.hot-lst li a:before{content:"";float:left;position:absolute;top:0;left:-12px;width:0;height:0;border-color:transparent #0078d7 transparent transparent;border-style:solid;border-width:12px 12px 12px 0}.hot-lst li a:after{content:"";position:absolute;top:10px;left:0;float:left;width:4px;height:4px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;background:#fff;-moz-box-shadow:-1px -1px 2px #004977;-webkit-box-shadow:-1px -1px 2px #004977;box-shadow:-1px -1px 2px #004977}.newslist li .banner a img{height:auto}.sortNews{display:block;overflow:hidden;background:#fff}.sortNews label{float:left;margin-right:20px;cursor:pointer}.choose .icontgdd-opt,.choose .iconmobile-opt{background-position:-400px -30px}.icontgdd-opt,.iconmobile-opt{background-position:-380px -30px;width:16px;height:16px;vertical-align:sub}.sortbyNews{float:left;display:inline}.infopage label{margin-right:20px;cursor:pointer}.infopage label a{color:#333}.infopage label a:visited{color:#333}.infopage label.relateNews{margin-left:10px}.myshortDes p{margin:0 44px 5px}.myshortDes textarea{display:block;margin:0 auto;max-width:80%;width:80%;padding:11px 1%;border:1px solid #dfdfdf;border-radius:4px;color:#333;min-height:50px}.slidegameapp{display:block;overflow:hidden;background-repeat:no-repeat;position:relative;background-size:100% 100%;background-position:center;margin-bottom:20px;padding:0 10px;box-sizing:border-box}.slidegameapp .seeall{display:block;overflow:hidden;font-size:14px;color:#288ad6;padding:10px 0 15px 0}.slidegameapp h3{font-size:18px;text-transform:uppercase;line-height:130%;font-weight:bold;font-family:Roboto Condensed,sans-serif;color:#288ad6;float:left}.slidegameapp .seeall span{float:right;line-height:130%;padding-right:5px}.slidegameapp .seeall span:after{content:"";width:5px;height:5px;border-top:1px solid #288ad6;border-right:1px solid #288ad6;transform:rotate(45deg);display:inline-block;vertical-align:middle;margin:0 0 2px 5px}.slideHome{padding-bottom:20px}.slidegameapp .item{background-color:#f8f8f8;border-radius:12px;height:100%;box-sizing:border-box;height:414px}.slidegameapp .item.view-all{display:flex;justify-content:center;align-items:center}.slidegameapp .item.view-all a{color:#288ad6;text-align:center;font-size:18px;line-height:155%}.box-gameapp{display:block;overflow:hidden;position:relative}.box-gameapp .info-gameapp{display:block;overflow:hidden}.box-gameapp .info-gameapp .img-gameapp{display:block;overflow:hidden;width:100%;border-top-left-radius:12px;border-top-right-radius:12px;height:216px;margin-bottom:15px}.box-gameapp .info-gameapp .title-gameapp{display:block;overflow:hidden;padding:0 8px 2px 8px}.box-gameapp .info-gameapp .title-gameapp img{float:left;width:40px;margin-right:10px;border-radius:8px}.box-gameapp .info-gameapp .title-gameapp strong{display:block;overflow:hidden;color:#333;font-size:14px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;text-overflow:ellipsis}.box-gameapp .info-gameapp .title-gameapp span{display:block;overflow:hidden;color:#fff;font-size:13px;padding:5px 0 0}label.hasfee{color:#fff;background:#07a358;border-radius:4px;padding:2px 3px;font-size:12px}.slideHome label.hasfee{float:left;margin-right:10px}.box-gameapp .info-gameapp .title-gameapp span p{display:inline-block;vertical-align:middle;margin-left:5px;color:#808080}.slideHome .box-gameapp .info-gameapp .title-gameapp span p{display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;text-overflow:ellipsis;overflow:hidden;padding-top:3px}.slideHome.owl-carousel .owl-stage{display:flex !important}.box-gameapp .posts-gameapp{display:block;overflow:hidden;padding:0 10px 10px 10px;min-height:120px;box-sizing:border-box}.box-gameapp .posts-gameapp a{display:inline-block;vertical-align:middle;color:#288ad6;font-size:13px;padding:10px 0 0 0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;text-overflow:ellipsis;overflow:hidden;line-height:15px}.box-gameapp .posts-gameapp a:before{content:"•";display:inline-block;vertical-align:middle;margin:0 5px 10px 0}.slide-edit.owl-theme .owl-dots{padding:10px 0}.slide-edit.owl-theme .owl-dots .owl-dot span{background:#dfdfdf;width:6px;height:6px;margin:5px 3px}.slide-edit.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#288ad6}.slideHome.owl-theme .owl-buttons{position:absolute;top:21%;height:0;width:100%}.slideHome.owl-theme .owl-buttons div{font-size:46px !important;padding:0 !important;margin:0 !important;background:#0000008c !important;position:relative;opacity:1 !important}.slideHome.owl-theme .owl-buttons div:hover{background:#0000008c}.slideHome.owl-theme .owl-nav div.disabled{opacity:unset}.slideHome.owl-theme .owl-buttons .owl-prev{position:absolute;left:0;padding:12px 0 0;margin:0;border-radius:unset;-webkit-border-radius:unset;-moz-border-radius:unset;background:rgba(0,0,0,.3);width:26px;height:45px;text-align:center;font-size:46px;color:#fff;font-family:cursive;line-height:38px}.slideHome.owl-theme .owl-buttons div.owl-prev:after{content:"";position:absolute;left:0;top:0;bottom:0;right:0;background:url('https://cdn.tgdd.vn/tin-tuc/Content/desktop/images/newsdesktop-v6@2x.png') -315px 3px !important;background-size:391px 225px !important;width:37px;height:53px;zoom:.6;margin:15px 0 0 0}.slideHome.owl-theme .owl-buttons .owl-next{position:absolute;right:0;padding:12px 0 0;margin:0;border-radius:unset;-webkit-border-radius:unset;-moz-border-radius:5px;width:26px;height:45px;text-align:center;font-size:46px;color:#fff;font-family:cursive;line-height:38px}.slideHome.owl-theme .owl-buttons div.owl-next:after{content:"";position:absolute;left:0;top:0;bottom:0;right:0;background:url(/tin-tuc/Content/desktop/images/newsdesktop-v6@2x.png) no-repeat -346px 0;background-size:391px 225px;width:37px;height:53px;zoom:.6;margin:15px 0 0 0}.slideHome.owl-theme .owl-controls .owl-page span{width:6.5px;height:6.5px;border-radius:50px;margin:0 2px}.slideHome.owl-theme .owl-controls .owl-page.active span,.slideHome.owl-theme .owl-controls.clickable .owl-page:hover span{background:#288ad6}#social{display:none}.relate{position:relative;padding:20px 20px 30px;overflow:hidden}.user-login{float:right;overflow:visible;padding-left:10px;padding:20px 0 20px 12px;cursor:pointer;position:relative;max-width:220px}.user-login:before{content:"";position:absolute;border-left:1px solid #dfdfdf;left:0;height:27px;top:32%}.user-login span{float:left;color:#666;vertical-align:top;padding-top:7px;display:-webkit-box;max-width:80%;height:19px;min-width:72px;word-break:break-word;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;text-transform:capitalize}.user-login img{color:#666;border-radius:20px;background:#4da0b0;background:-webkit-linear-gradient(to left,#4da0b0,#d39d38);background:linear-gradient(to left,#4da0b0,#d39d38);margin-right:5px;object-fit:cover;float:left}.user-login .iconnews-ava-default{float:left;margin-right:10px}.user-login span.log-in{padding-top:4px}.user-login span.log-in:hover{color:#288ad6}.iconnews-ava-default{width:25px;height:25px;background-position:-325px -53px;margin-right:3px}.box-container{position:fixed;left:0;right:0;margin:0 auto;border-radius:4px;background:#fff;z-index:100000;width:50%;max-height:80vh;overflow:hidden;overflow-y:auto}.box-container .relate>p{font-size:13px;color:#666;display:block;margin:15px auto;text-align:center;width:60%}.box-container .relate>p b a{color:#666}.box-container h3{text-align:center;font-size:20px;font-weight:bold;color:#333;margin:10px}.box-container .close{position:absolute}.box-container.atProf{width:35%}.box-container.atProf h3{margin:10px 0 50px}.overlay{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:20000;background:rgba(0,0,0,.75)}.iconnews-loginicon{background-position:0 -87px;width:150px;height:130px}.iconnews-loginsuccess{background-position:-164px -87px;width:133px;height:130px}.iconnews-fb{background-position:-311px -88px;width:28px;height:27px}.iconnews-gg{background-position:-311px -125px;width:28px;height:27px}.social-login a{color:#333;width:40%;text-align:center;padding:10px;border-radius:4px;border:1px solid #dfdfdf;display:block;margin:10px auto}.social-login a.fb:hover{background:#5786dd;color:#fff;border:1px solid #5786dd}.social-login a:hover{background:#e13030;color:#fff;border:1px solid #e13030}.social-login i{margin-right:7px}.icon-title{position:relative}.icon-title i{display:block;margin:0 auto}.close-popup{position:absolute;right:10px;top:10px;border-radius:50%;border:1px solid #dfdfdf;padding:6px;cursor:pointer}.close-popup i{margin:0 auto}.iconnews-closegal{zoom:.8}.phone-confirm{width:82%;display:block;margin:2% auto;overflow:hidden}.profile{width:80%;margin:0 auto}.profile input{display:block;margin:0 auto;width:80%;padding:11px 1%;border:1px solid #dfdfdf;border-radius:4px;color:#333}.profile .phone-confirm input{width:57%;float:left}.profile .phone-confirm a{width:37%;float:right;margin-left:2%;border-radius:4px;border:1px solid #288ad6;color:#288ad6;text-align:center;padding:11px 0}.profile .phone-confirm a:hover{color:#fff;background:#288ad6}.err-txt{display:none;color:#d0021b;text-align:center;margin:10px 0}.err-txt label{color:#d0021b}.btn-submit{display:block;margin:10px auto 0;width:78%;text-align:center;padding:10px;border-radius:4px;background:#288ad6;color:#fff;border:1px solid #288ad6}.btn-submit.disable{background:#dfdfdf;border:1px solid #dfdfdf}.btn-submit.emp{background:#fff;color:#288ad6;border:1px solid #288ad6}.success .btn-submit.emp{width:45%}.invalid{border:1px solid #d0021b !important}.resend-otp{display:none;text-align:center;font-size:12px;margin:10px 0}.resend-otp a{color:#288ad6}.resend-otp p{color:#999}.loginwith{display:none;overflow:visible;position:absolute;top:60px;right:0;z-index:9;padding:10px;background:#fff;box-shadow:0 1px 10px 0 rgba(0,0,0,.2)}.loginwith a{display:block;color:#333;width:165px;height:auto}.loginwith a{padding-bottom:8px;border-bottom:1px solid #f1f1f1}.loginwith a:first-child{margin-bottom:8px}.loginwith a:last-child{padding-top:8px;border-bottom:none}.loginwith:before,.loginwith:after{bottom:100%;right:17%;content:"";height:0;width:0;position:absolute;border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:10px solid #ddd}.loginwith:after{border-width:9px;border-bottom-color:#fff;margin-right:1px}.loginwith a:hover{color:#288ad6}a.group{display:block;margin:0 auto 10px;width:92%;overflow:hidden;color:#333;cursor:unset}a.group>p{margin:0 26px 5px}a.group.button{width:90%;padding:10px 1%;border:1px solid #dfdfdf;border-radius:4px}.both{width:82%;margin:0 auto;overflow:hidden}.both a{width:44%;float:left;padding:10px 2%}.both a:last-child{margin-left:2%;float:right}.profile.aut>input{margin-bottom:10px}.input-nam{border-radius:3px;background:#fff;border:1px solid #ddd;display:block;width:calc(90% - 2px);margin:0 auto;text-align:center;height:34px;overflow:hidden;position:relative}.input-nam input{width:98% !important;text-align:left;margin-top:0;height:29%;border:1px solid #fff !important;padding-left:6px}.input-nam span{padding:1px 0;color:#ddd;float:left;margin-top:10px;width:15px;text-align:center}.input-nam input.nam{width:12% !important}.iconnews-lichv2{background-position:-87px -67px;width:16px;height:16px}.input-nam>i{position:absolute;top:6px;right:7px;cursor:pointer;zoom:1.2}.tutor{display:none;overflow:hidden;margin-bottom:10px}.tutor input{border:0;background:#e6f7ff;margin-bottom:10px}.tutor p>span{font-size:11px;color:#999}.tutor>p{width:82%;margin:0 auto}.tutor.show{display:block}.iconnews-doneicon{background-position:-161px -94px;width:130px;height:108px}.iconnews-post{background-position:-319px -207px;width:13px;height:13px;margin-right:10px}.iconnews-profile{background-position:-353px -92px;width:12px;height:13px;margin-right:10px}.iconnews-logout{background-position:-371px -92px;width:13px;height:13px;margin-right:10px}.avaUserUp{text-align:center;margin-bottom:10px}.avaUserUp a{overflow:hidden;position:relative}.avaUserUp img{width:80px;height:80px;color:#666;border-radius:45px;background:#4da0b0;background:-webkit-linear-gradient(to left,#4da0b0,#d39d38);background:linear-gradient(to left,#4da0b0,#d39d38);object-fit:cover}.avaUserUp .takepic,.avt .takepic{cursor:unset}.avaUserUp .btnImgUpload,.avt .btnImgUpload{cursor:pointer}.iconnews-cam{background-position:-225px 0;width:15px;height:12px;z-index:2;position:absolute;left:0;right:0;bottom:12px;margin:0 auto}span.camera{position:absolute;bottom:3px;left:0;right:0;margin:0 auto;background:#fff;opacity:.5;width:96%;height:30px}span.camera::after,span.camera::before{width:40px;background:#333;height:37px;position:absolute;content:'';left:-1px;bottom:0;z-index:1;border-bottom-left-radius:100%}span.camera::before{right:-1px;left:unset;border-bottom-right-radius:100%;border-bottom-left-radius:unset}.avaUserUp a:hover span.camera{opacity:.9}.iconnews-camera{background-position:-203px -61px;width:15px;height:13px;z-index:2;position:absolute;left:0;right:0;bottom:12px;margin:0 auto}.iconnews-cam{background-position:-225px 0;width:15px;height:12px;z-index:2;position:absolute;left:0;right:0;bottom:12px;margin:0 auto}.iconnews-fav{background-position:-317px -179px;width:16px;height:22px;margin-right:10px}.favorite.active{color:#ffc107 !important}.active .iconnews-fav{background-position:-317px -156px;width:16px;height:22px}.userdetail a.favorite{display:inline-block;color:#333}.userdetail a.un-pointer{cursor:default;color:#333}#social input:focus,#profileBox input:focus{border:1px solid #999}#social .lst-follow{height:200px;margin-bottom:26px;overflow:hidden;overflow-y:scroll}#social .lst-follow li{width:auto;display:inline-block;margin:10px 0 5px 1%}#social .lst-follow li a{color:#288ad6;background:#fff;border:1px solid #288ad6;padding:5px 10px;border-radius:4px;display:block}#social .lst-follow li a.active{color:#fff;background:#288ad6}#social .choose-topic{width:85%;margin:0 auto}#social .choose-topic .title-post{color:#666;padding:10px 6px}#ngay-cap{width:calc(44% - 2px);float:left;margin-left:5.2%}#txtNoiCap{float:left;width:41%;padding:8px 1%;margin-left:2%}@-webkit-keyframes flip-scale-down-ver{0%{-webkit-transform:scale(1) rotateY(0);transform:scale(1) rotateY(0)}50%{-webkit-transform:scale(.4) rotateY(-90deg);transform:scale(.4) rotateY(-90deg)}100%{-webkit-transform:scale(1) rotateY(-180deg);transform:scale(1) rotateY(-180deg)}}@keyframes flip-scale-down-ver{0%{-webkit-transform:scale(1) rotateY(0);transform:scale(1) rotateY(0)}50%{-webkit-transform:scale(.4) rotateY(-90deg);transform:scale(.4) rotateY(-90deg)}100%{-webkit-transform:scale(1) rotateY(-180deg);transform:scale(1) rotateY(-180deg)}}.rotating{-webkit-animation:flip-scale-down-ver 1s linear infinite both;animation:flip-scale-down-ver 1s linear infinite both}.active-first{position:absolute;background:#fff;height:40px;display:flex;align-items:center;justify-content:center;width:90%}.active-first p{text-align:left;width:100%;left:1%;position:relative;font-size:inherit;color:#666}#social .active-first{left:3px;height:32px}.iconnews-notify{background-position:-363px -58px;width:14px;height:17px;zoom:1.5;cursor:pointer}.notify-class{position:relative;overflow:visible;float:right;margin:23px 7px;cursor:pointer}.notify-class>a>span{position:absolute;top:-10px;left:14px;padding:2px;background:#f00;color:#fff;border-radius:3px}.fade-box{width:315px;background:#fff;position:absolute;top:36px;overflow:visible;padding:10px;right:-50px;z-index:10000;border-radius:5px;transition:.3s;-webkit-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;-webkit-box-shadow:0 0 40px rgba(82,85,90,.2);box-shadow:0 0 40px rgba(82,85,90,.2);display:none}.notify-class .fade-box::before{content:'';position:absolute;border-left:8px solid transparent;border-right:8px solid transparent;border-bottom:8px solid #fff;bottom:100%;-webkit-box-sizing:border-box;box-sizing:border-box;right:53px}.fade-box .lst-topic{display:block;width:100%}.fade-box .lst-topic li{margin-bottom:5px}.fade-box .lst-topic li a{display:block;overflow:hidden;padding:5px}.fade-box .lst-topic li a:hover{background:#f1f1f1;border-radius:3px}.fade-box .lst-topic li a>span{color:#000;float:left;width:70%}.fade-box .lst-topic li a>img{color:#000;width:25%;height:auto}@media screen and (max-width:1024px){.box-container{width:60%}.user-login{max-width:190px}}div.news-notify{height:45px;background:#eee;line-height:45px;padding-left:12px;padding-right:16px}div.news-notify p{float:left}div.news-notify a{float:right;color:#288ad6}.fade-box{padding:0}.fade-box .lst-topic li{border-bottom:1px solid #f0f0f0}.lst-notify{padding:10px}.notify-class .fade-box .lst-notify a.viewmore-notify{display:block;color:#288ad6;text-align:center;font-size:14px;margin-top:10px}.notify-class .fade-box .lst-notify a.viewmore-notify:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:-2px 0 0 3px}.fade-box .lst-topic li a>span{width:75%;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}.fade-box .lst-topic li a>span>b{color:#288ad6}.fade-box .lst-topic li a>span.timepostNotify{color:#666;font-size:12px}.fade-box .lst-topic li.no-notify{border:0;text-align:center}.fade-box.allnotify{display:block;position:relative;z-index:unset;top:0;right:0;width:600px;margin-left:auto;margin-right:auto;margin-bottom:10px}.fade-box.allnotify .lst-notify ul.lst-topic.lst-cmtnews span{font-size:16px;line-height:30px}.fade-box.allnotify .lst-notify ul.lst-topic.lst-cmtnews span.timepostNotify{font-size:13px;line-height:30px}.fade-box.allnotify .news-notify p{font-weight:bold}.fade-box.allnotify .lst-notify a.viewmore-notify{display:block;color:#288ad6;text-align:center;font-size:14px;margin-top:10px}.fade-box.allnotify .lst-notify a.viewmore-notify:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:-2px 0 0 3px}.fade-box.allnotify .lst-topic li a>span>b{color:#288ad6}.fade-box .lst-topic li.no-notify img.img-noneNotify{margin-left:auto;margin-right:auto;display:block}
		/*!
		 * Datepicker v1.0.8
		 * https://fengyuanchen.github.io/datepicker
		 *
		 * Copyright 2014-present Chen Fengyuan
		 * Released under the MIT license
		 *
		 * Date: 2019-06-23T08:07:37.208Z
		 */
		.datepicker-container{background-color:#fff;direction:ltr;font-size:12px;left:0;line-height:30px;position:fixed;-webkit-tap-highlight-color:transparent;top:0;-ms-touch-action:none;touch-action:none;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:210px;z-index:-1}.datepicker-container::before,.datepicker-container::after{border:5px solid transparent;content:" ";display:block;height:0;position:absolute;width:0}.datepicker-dropdown{border:1px solid #ccc;-webkit-box-shadow:0 3px 6px #ccc;box-shadow:0 3px 6px #ccc;-webkit-box-sizing:content-box;box-sizing:content-box;position:absolute;z-index:1}.datepicker-inline{position:static}.datepicker-top-left,.datepicker-top-right{border-top-color:#39f}.datepicker-top-left::before,.datepicker-top-left::after,.datepicker-top-right::before,.datepicker-top-right::after{border-top:0;left:10px;top:-5px}.datepicker-top-left::before,.datepicker-top-right::before{border-bottom-color:#39f}.datepicker-top-left::after,.datepicker-top-right::after{border-bottom-color:#fff;top:-4px}.datepicker-bottom-left,.datepicker-bottom-right{border-bottom-color:#39f}.datepicker-bottom-left::before,.datepicker-bottom-left::after,.datepicker-bottom-right::before,.datepicker-bottom-right::after{border-bottom:0;bottom:-5px;left:10px}.datepicker-bottom-left::before,.datepicker-bottom-right::before{border-top-color:#39f}.datepicker-bottom-left::after,.datepicker-bottom-right::after{border-top-color:#fff;bottom:-4px}.datepicker-top-right::before,.datepicker-top-right::after,.datepicker-bottom-right::before,.datepicker-bottom-right::after{left:auto;right:10px}.datepicker-panel>ul{margin:0;padding:0;width:102%}.datepicker-panel>ul::before,.datepicker-panel>ul::after{content:" ";display:table}.datepicker-panel>ul::after{clear:both}.datepicker-panel>ul>li{background-color:#fff;cursor:pointer;float:left;height:30px;list-style:none;margin:0;padding:0;text-align:center;width:30px}.datepicker-panel>ul>li:hover{background-color:#e5f2ff}.datepicker-panel>ul>li.muted,.datepicker-panel>ul>li.muted:hover{color:#999}.datepicker-panel>ul>li.highlighted{background-color:#e5f2ff}.datepicker-panel>ul>li.highlighted:hover{background-color:#cce5ff}.datepicker-panel>ul>li.picked,.datepicker-panel>ul>li.picked:hover{color:#39f}.datepicker-panel>ul>li.disabled,.datepicker-panel>ul>li.disabled:hover{background-color:#fff;color:#ccc;cursor:default}.datepicker-panel>ul>li.disabled.highlighted,.datepicker-panel>ul>li.disabled:hover.highlighted{background-color:#e5f2ff}.datepicker-panel>ul>li[data-view="years prev"],.datepicker-panel>ul>li[data-view="year prev"],.datepicker-panel>ul>li[data-view="month prev"],.datepicker-panel>ul>li[data-view="years next"],.datepicker-panel>ul>li[data-view="year next"],.datepicker-panel>ul>li[data-view="month next"],.datepicker-panel>ul>li[data-view="next"]{font-size:18px}.datepicker-panel>ul>li[data-view="years current"],.datepicker-panel>ul>li[data-view="year current"],.datepicker-panel>ul>li[data-view="month current"]{width:150px}.datepicker-panel>ul[data-view="years"]>li,.datepicker-panel>ul[data-view="months"]>li{height:52.5px;line-height:52.5px;width:52.5px}.datepicker-panel>ul[data-view="week"]>li,.datepicker-panel>ul[data-view="week"]>li:hover{background-color:#fff;cursor:default}.datepicker-hide{display:none}
		/* 10:33:56 20/04/2021 */.titlehome{display:block;overflow:hidden;line-height:26px;font-size:18px;color:#888;text-transform:uppercase;padding:10px 0 6px;font-family:'Roboto Condensed',sans-serif;font-weight:600}.titlecate{display:block;overflow:hidden;font-size:18px;color:#333;text-transform:uppercase;padding:10px 10px 0 10px;font-family:'Roboto Condensed',sans-serif;font-weight:600}.galleyYT{display:none;position:fixed;z-index:1;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:#000;background-color:rgba(0,0,0,.4)}.galleyYT .videoYT{background-color:#fefefe;margin:15% auto;padding:20px;border:1px solid #888;width:50%}.close{color:#aaa;float:right;font-size:28px;font-weight:bold}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer}.leftcate{float:left;overflow:hidden;width:65.834%}.leftcate .videoprod{position:relative;width:100%;margin-bottom:5px}.leftcate .videoprod iframe{width:100%;height:444px}.rightcate{float:right;overflow:visible;width:31.667%}.rightcate .rcm{overflow:hidden;margin-bottom:10px}.rightcate .rcm .trcm{clear:both;overflow:hidden}.rightcate .rcm .trcm h3{color:#888;display:block;float:left}.rightcate .rcm .trcm a{display:block;float:right;color:#288ad6;line-height:42px}.rightcate .rcm .trcm a span{font-size:17px}.rightcate .rcm ul{border-top:1px solid #eee;overflow:hidden}.rightcate .rcm ul li{border-bottom:1px solid #eee;overflow:hidden;padding:7px 0}.rightcate .rcm ul li:last-child{border:none}.rightcate .rcm li .l{float:left;color:#333;max-width:290px}.rightcate .rcm li .l::before{content:"•";color:#b7b7b7;display:inline-block;vertical-align:middle;font-size:15px;margin-right:6px;float:left;height:40px}.rightcate .rcm li .l .lct{color:#999}.rightcate .rcm li .r{float:right;color:#999}.rightcate .rcm li .r .tm{color:#333}.newslist{display:block;overflow:hidden}.newslist li{display:block;overflow:hidden;border-bottom:1px solid #eee;padding:15px 0;position:relative}.newslist li:last-child{border-bottom:0}.newslist li a{display:block;overflow:hidden;position:relative}.newslist li a.linkproduct{display:inline-block}.newslist li img{float:left;width:100%;height:200px}.newslist li h3{display:block;overflow:hidden;line-height:28px;font-size:22px;font-weight:600}.newslist li a:visited h3{color:#999}.newslist li:hover h3{color:#288ad6}.newslist li figure{display:block;overflow:hidden;font-size:14px;color:#333;line-height:22px;padding:10px 0}.newslist li.big h3{font-weight:bold;padding-top:10px}.newslist li .timepost{display:block;overflow:hidden;font-size:12px;color:#999}.newslist li .timepost .namecate:before{content:'•';display:inline-block;color:#999;padding:0 10px}.newslist li .timepost .evil{color:#288ad6}.newslist li .timepost .evil:before{content:'•';display:inline-block;color:#999;padding:0 10px}.newslist li label{display:inline;overflow:hidden;border-radius:2px;font-size:14px;text-transform:uppercase;color:#fff;padding:2px 6px 0;height:20px;vertical-align:middle;font-family:'Roboto Condensed',sans-serif}.newslist li label.hot{color:#a87500;background:#fbd020}.newslist li label.community{background:#0ca3ef;display:block;width:100px;text-align:center}.newslist li .morecom{display:inline-block;font-size:14px;color:#f89406;font-weight:300;white-space:nowrap;height:16px;line-height:1;position:relative;top:-1px}.newslist li .lesscom{display:inline-block;font-size:14px;color:#999;white-space:nowrap;font-weight:300;height:16px;line-height:1;position:relative;top:-1px}.newslist li .tempvideo{float:left;position:relative;width:250px;height:140px;margin-right:15px;margin-bottom:5px;overflow:hidden}.newslist li .tempvideo img{display:block;width:100%;height:100%}.newslist li .thumvideo{background:#222;padding:2px 5px;font-size:14px;color:#fff;position:absolute;left:0;bottom:0}.latest{display:block;overflow:hidden;border-bottom:1px solid #eee;padding-bottom:5px;margin-top:-10px}.latest li{overflow:hidden;float:left;width:32%;padding:0}.latest li .tempvideo{float:none;display:block;position:relative;width:100%;height:290px;margin-bottom:5px;overflow:hidden}.latest li img{float:none;display:block;width:100%;margin:0 auto 10px}.latest li h3{font-size:16px;line-height:1.3em;font-weight:300;margin-bottom:0}.latest li a{padding:10px 0}.latest li a:visited h3{color:#999}.latest li a:hover h3{color:#288ad6}.latest li:first-child{overflow:hidden;width:65.19%;margin-right:15px;border-bottom:0}.latest li:first-child img{display:block;width:100%;max-height:290px;height:auto;margin-bottom:10px}.latest li:first-child h3{font-size:24px;line-height:32px;font-weight:600}.latest li:nth-child(2) h3{font-size:20px;line-height:1.3em;font-weight:600}.latest li:nth-child(2) .tempvideo{height:140px}.latest li:last-child{border-bottom:0}.latest li .lesscom{top:2px;font-size:13px}.commuhot{display:block;overflow:visible;padding:10px;margin-bottom:10px;box-shadow:0 1px 3px 0 rgba(0,0,0,.11);border:1px solid #d9d9d9;border-radius:2px;position:relative}.commuhot:after,.commuhot:before{bottom:100%;left:90%;border:solid transparent;content:" ";height:0;width:0;position:absolute}.commuhot:after{border-bottom-color:#fff;border-width:10px;margin-left:-10px}.commuhot:before{border-bottom-color:#d9d9d9;border-width:11px;margin-left:-11px}.commuhot a{display:block;overflow:hidden}.commuhot .avatar{float:left;width:20px;height:20px;margin-top:6px}.commuhot div{display:block;overflow:hidden;font-size:14px;color:#333;line-height:20px}.commuhot div span{color:#999}.commuhot ul{display:block;overflow:hidden;margin:10px 0 10px 0}.commuhot li{float:left;width:46px;height:46px;border:2px solid #dfdfdf;background:#fff;padding:2px;margin-right:10px;position:relative}.commuhot li img{display:block;width:100%;height:100%}.commuhot li span{position:absolute;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,.59);font-size:15px;color:#fff;text-align:center;padding:15px 0}.commuhot .infoart{display:block;overflow:hidden;font-size:12px;color:#999}.commuhot .infoart span{padding-right:10px}.commuhot .infoart span i{margin-right:3px}.commuhot .infoart span:before{content:'•';display:inline-block;color:#999;padding:0 10px 0 0;vertical-align:bottom}.commuhot .infoart span:first-child:before{content:'';padding:0}.summarycomment{display:block;overflow:hidden;border-top:1px solid #eee;margin-bottom:10px}.summarycomment a{display:block;overflow:hidden;padding:6px 0}.summarycomment div{float:left;margin:4px 10px 0 0;padding:6px 10px;background:#f4f4f4;font-size:20px;color:#cbcbcb;font-weight:600}.summarycomment a h3{display:block;overflow:hidden;line-height:1.3em;font-size:14px;color:#333}.summarycomment a .morecom{display:inline-block;font-size:13px;color:#f89406;font-weight:300;white-space:nowrap;height:16px;line-height:1;position:relative;top:1px;margin-left:3px}.summaryevent{display:block;overflow:hidden;margin:-10px 0 10px}.summaryevent li{display:block;overflow:hidden;border-top:1px solid #eee}.summaryevent li a{display:block;overflow:hidden;padding:10px 0}.summaryevent li img{display:block;width:100%;max-height:315px;height:auto;margin-bottom:10px}.summaryevent li h3{display:block;overflow:hidden;font-size:15px;color:#333;line-height:18px;margin-bottom:5px}.summaryevent li:first-child{border-top:0}.summaryevent li:first-child h3{font-size:18px;font-weight:600;line-height:25px}.summaryevent li .ddevent{display:block;overflow:hidden;font-size:12px;color:#999}.summaryevent li:first-child .ddevent{font-size:14px;color:#666}.summaryevent li .calen{float:left;overflow:hidden;width:50px;margin:-2px 10px 0 0}.summaryevent li .calen strong{display:block;overflow:hidden;text-align:center;padding:10px 0 12px;border:1px solid #e6e6e6;border-top:0;border-radius:0 0 4px 4px;margin-top:-2px;color:#aaa;font-size:14px}.rates li h3{font-weight:600;padding-top:10px}.totaltips{display:block;overflow:hidden;margin:0 0 10px;border-top:1px solid #eee}.totaltips strong{display:block;overflow:hidden;font-size:16px;color:#777;text-transform:uppercase}.totaltips a{padding:15px 10px 0 0;font-size:15px;color:#288ad6;display:inline-block}.totaltips a.game{display:inline-block;position:relative;color:#000;padding:6px 16px;margin:15px 10px 0 0;font-size:16px;background:#f1f1f1;border:1px solid #f1f1f1;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px}.totaltips .icongame-android{background-position:-155px 0;width:15px;height:20px}.totaltips .icongame-ios{background-position:-175px 0;width:15px;height:20px}.totaltips .icongame-winphone{background-position:-195px 0;width:15px;height:17px}.iconnews-comorg{background-position:-100px -20px;width:11px;height:10px;margin:-4px 1px 0 0;margin-right:3px}.iconnews-comcya{background-position:-85px -20px;width:11px;height:10px;margin:-4px 1px 0 0;margin-right:3px}.iconnews-videosmall{background-position:-117px -20px;width:8px;height:9px;vertical-align:baseline;margin-right:3px}.iconnews-like{background-position:-35px -20px;width:10px;height:12px;vertical-align:text-top}.iconnews-comtip{background-position:-50px -20px;width:14px;height:12px}.iconnews-share{background-position:-70px -20px;width:12px;height:10px;vertical-align:initial}.iconnews-calendar{background-position:-65px -35px;width:50px;height:13px}.iconnews-dd{background-position:-130px -20px;width:8px;height:11px;margin-right:3px}.iconnews-searchcya{background-position:-125px 0;width:16px;height:16px;display:block;margin:12px auto}.iconnews-lich{background-position:-144px -60px;width:13px;height:15px;margin-right:5px}.iconnews-add{background-position:-124px -60px;width:12px;height:17px;margin-right:5px}.iconnews-larvideo{background-position:0 -35px;width:60px;height:40px;position:absolute;left:0;right:0;top:0;bottom:0;display:block;margin:auto;cursor:pointer}.iconnews-closegal{background-position:-146px 0;width:14px;height:14px;display:block;margin:13px auto}.linkproduct{display:block;overflow:hidden;line-height:26px;font-size:18px;color:#288ad6;text-transform:uppercase;padding:10px 0 6px;font-family:'Roboto Condensed',sans-serif;font-weight:600}.newsproduct{display:block;overflow:hidden;border-top:1px solid #eee}.newsproduct li{display:block;overflow:hidden;padding:10px 0}.newsproduct li a{display:block;overflow:hidden}.newsproduct li img{float:left;width:70px;height:70px;margin-right:10px}.newsproduct li h3{display:block;overflow:hidden;font-size:16px;color:#333}.newsproduct li p{display:block;overflow:hidden;color:#666;font-size:14px;line-height:32px}.newsproduct li span{display:block;overflow:hidden;color:#333;line-height:32px}.newsproduct li label{display:block;overflow:hidden;color:#288ad6;margin-bottom:10px}.newspromotion{display:block;overflow:hidden}.newspromotion li{float:left;display:block;overflow:hidden;width:48%;margin-bottom:2%}.newspromotion li a{display:block;overflow:hidden;padding:10px 0}.newspromotion li h3{display:block;overflow:hidden;line-height:1.3em;font-size:14px;color:#333}.newspromotion li img{display:block;width:100%;height:auto;max-height:125px;margin-bottom:10px}.newspromotion li:first-child{float:none;width:100%;border-bottom:1px solid #eee}.newspromotion li:first-child img{width:100%;height:auto;max-height:215px}.newspromotion li:first-child h3{font-size:18px;font-weight:600}.newspromotion li:nth-child(3),.newspromotion li:nth-child(5){float:right}.newspromotion li:nth-child(2),.newspromotion li:nth-child(4){clear:both}.searchmeo{display:block;border:1px solid #d9d9d9;border-radius:4px;height:40px;margin:15px 0 10px;position:relative}.searchmeo input{display:block;width:93%;border:0;padding:10px;height:20px;font-size:14px;border-radius:4px}.searchmeo button{position:absolute;top:0;right:0;background:#fff;border:0;width:40px;height:40px;border-radius:4px}.infopage{display:block;overflow:hidden;padding:10px 0;margin-bottom:20px;border-bottom:1px solid #eee}.infopage h1{display:inline-block;overflow:hidden;line-height:1.3em;font-size:18px;color:#333;font-family:Roboto Condensed,sans-serif;font-weight:600;text-transform:uppercase;vertical-align:middle;padding-right:10px}.infopage span{display:inline-block;font-size:14px;color:#999;vertical-align:middle;padding:0 10px;border-left:1px solid #ddd}.viewmore{display:block;overflow:hidden;padding:10px 0;margin:20px 0;font-size:14px;color:#288ad6;border:1px solid #eee;border-radius:4px;text-align:center}.viewmore b{display:inline-block;vertical-align:middle;content:'';width:0;height:0;border-top:5px solid #288ad6;border-left:5px solid transparent;border-right:5px solid transparent;position:relative;top:-1px}.all b{transform:rotate(-90deg);margin-left:3px}.productcell{float:left;overflow:hidden;width:49%;border-top:1px solid #eee;border-left:1px solid #eee;margin-bottom:20px}.productcell:nth-child(2){float:right}.productcell a{float:left;overflow:hidden;width:33.3%;margin-right:-1px;height:260px;border-bottom:1px solid #eee;border-right:1px solid #eee;font-family:'Roboto Condensed',sans-serif}.productcell a h3{display:block;overflow:hidden;font-size:18px;color:#333;padding:5px;text-align:center}.productcell a img{display:block;width:150px;height:150px;margin:15px auto}.productcell a span{display:block;overflow:hidden;padding:0 5px 5px;text-align:center;font-size:14px;color:#666}.productcell a label{display:block;overflow:hidden;padding:0 5px 5px;text-align:center;font-size:14px;color:#288ad6}.productcell a:hover h3{color:#4a90e2}.productcell div{display:block;overflow:hidden;background:#f5f5f5;border-right:1px solid #eee;border-bottom:1px solid #eee}.productcell div h2{display:inline-block;padding:7px 5px 2px;line-height:1.3em;font-family:'Roboto Condensed',sans-serif;font-size:18px;color:#333;font-weight:600;text-transform:uppercase}.productcell div a{float:right;padding:9px 10px 5px;font-size:14px;color:#288ad6;width:auto;height:auto;border:0}.productcell div a:hover{color:#333}.cellright{float:right}.prodlist{float:none;display:block;width:100%;max-width:1199px}.prodlist a{width:20%;margin-right:-1px}.viewmoreprod{display:block;overflow:hidden;padding:10px 0;text-align:center;font-size:14px;color:#288ad6;width:240px;border-radius:4px;border:1px solid #eee;display:block;margin:0 auto 20px}.viewmoreprod b{display:inline-block;content:'';width:0;height:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;position:relative;top:-2px;margin-left:3px}.viewmoreprod:hover{color:#333}.viewmoreprod:hover b{border-top-color:#999}.colinfoprod{display:block;overflow:hidden;border:1px solid #eee;padding:15px}.infoprod{display:block;overflow:hidden;border-bottom:1px solid #eee;padding-bottom:15px}.infoprod h3,.infoprod h2{display:block;overflow:hidden;line-height:1.3em;font-size:18px;font-family:'Roboto Condensed',sans-serif;color:#333;font-weight:600}.infoprod strong{display:block;overflow:hidden;padding:10px 0;font-size:18px;color:#d0021b;font-family:'Roboto Condensed',sans-serif;font-weight:300}.infoprod img{float:left;width:145px;height:145px;margin-right:10px}.infoprod span{display:block;overflow:hidden;font-size:14px;color:#333;line-height:24px}.infoprod a{display:block;overflow:hidden;font-size:14px;color:#288ad6;line-height:22px}.infoprod figure{font-size:13px;line-height:20px}.infoprod h6.textkm{font-size:12px;color:#d0021b;margin-bottom:10px}.picvideo{display:block;overflow:hidden}.picvideo h3{display:block;overflow:hidden;padding:15px 0;line-height:1.3em;font-size:18px;font-family:'Roboto Condensed',sans-serif;color:#333;font-weight:600}.picvideo ul{display:block;overflow:hidden}.picvideo li{float:left;overflow:hidden;width:106px;margin-right:15px;position:relative}.picvideo li img{display:block;max-width:100%;max-height:100%}.picvideo li:first-child{float:none;display:block;width:100%;height:auto;max-height:185px;margin-bottom:14px}.picvideo li:nth-child(4){float:right;margin-right:0}.picvideo li span{position:absolute;top:0;right:0;bottom:0;left:0;background:rgba(0,0,0,.45);padding:24px 0;height:16px;display:block;text-align:center;font-size:20px;color:#fff;font-family:'Roboto Condensed',sans-serif}.newsvideo{display:block;background-color:#000;padding:0 10px;height:430px}.newsvideo img{height:auto !important}.newsvideo:hover .galleyYT{display:block}.newsvideo a{color:#fff;overflow:hidden;line-height:26px;font-size:18px;text-transform:uppercase;padding:10px 0 6px;font-family:'Roboto Condensed',sans-serif;font-weight:600;display:inline-block}.newsvideo a.follow{background-color:#f00;display:inline-block;float:right;padding:0 5px;margin:10px 0 0;text-transform:none;border-radius:2px;font-size:11px}.newsvideo a.follow .btnYt{background:#fff;width:18px;height:12px;border-radius:2px;display:inline-block;vertical-align:middle;margin-right:5px;position:relative}.newsvideo a.follow .btnYt .icyt{width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #f00;display:block;position:absolute;top:1px;left:50%;margin-left:-3px}.newsvideo a.follow span{font-size:14px;vertical-align:middle}.newsvideo #galleryYT:hover .owl-buttons{display:block}.newsvideo .owl-wrapper-outer .item{margin:0 15px}.newsvideo .owl-wrapper-outer .item .iconyt{background:url('https://cdn.tgdd.vn/tin-tuc/Content/desktop/images/newsdesktop@1x.png') no-repeat 0 -35px;width:60px;height:40px;cursor:pointer;top:50%;left:50%;position:absolute;margin:-21px 0 0 -30px}.newsvideo .owl-wrapper-outer .item span{color:#fff;font-size:14px}.newsvideo .owl-buttons{position:absolute;top:38%;height:0;width:100%;display:none}.newsvideo .owl-buttons div{font-size:46px !important;padding:0 !important;margin:0 !important;background:none !important}.newsvideo .owl-buttons .owl-prev{position:absolute;left:-25px;padding:12px 0 0;margin:0;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;background:rgba(0,0,0,.3);width:48px;height:40px;text-align:center;font-size:46px;color:#fff;font-family:-webkit-body}.newsvideo .owl-buttons .owl-next{position:absolute;right:-25px;padding:12px 0 0;margin:0;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;background:rgba(0,0,0,.3);width:48px;height:40px;text-align:center;font-size:46px;color:#fff;font-family:-webkit-body}.newsvideo .owl-wrapper-outer:hover .newsvideo .owl-buttons{display:block}.newsvideo iframe{width:100%;height:200px;padding:10px 0 6px}.newsvideo .fotorama img{width:100%;height:auto}.newsvideo li img{height:auto}@media screen and (max-width:1024px){.latest li:first-child{width:64.19%}.latest li h3{font-size:14px}.latest li:first-child h3{font-size:20px;line-height:26px;margin-bottom:5px}.latest li:nth-child(2) h3{font-size:18px;line-height:22px;height:44px}.latest li .tempvideo{height:238px}.latest li a{padding:6px 0}.latest li a:link{color:#f00}.latest li a:visited{color:#999}.commuhot li{width:39px;height:39px;margin-right:5px}.newslist li figure{height:42px}.newslist li h3{max-height:56px}.prodlist a{margin-right:-1.3px}.infoprod span,.infoprod a{font-size:13px}.picvideo li{width:90px;height:90px;margin-right:7px}}.iconyt-play{background-position:-459px -224px;width:18px;height:12px}[class^="iconyt-"],[class*="iconyt-"]{background-image:url(/tin-tuc/Content/mobile/images/icon/icon-youtube.png);background-size:856px 313px;background-repeat:no-repeat;display:inline-block;vertical-align:middle}[class^="icongame-"],[class*="icongame-"]{background-image:url(https://s.tgdd.vn/game-ung-dung/Content/desktop/images/bg_gameapp1x.png);background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}.titlehome .viewall-topics{float:right;text-transform:none;font-size:13px;color:#288ad6}.titlehome .viewall-topics::after{float:right;content:"›";font-size:15px;color:#288ad6;margin-left:4px}.newslist li h3.titlecom{display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;text-overflow:ellipsis;overflow:hidden}.newslist li .timepost.margin{margin-top:5px}.newslist li .timepost .user-info{float:left;width:auto;margin-right:10px}.newslist li .timepost .user-info .user-avt{float:left;width:20px;height:20px;border-radius:20px;margin-right:5px}
		/* 10:33:56 20/04/2021 */.owl-carousel .owl-wrapper:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel{display:none;position:relative;width:100%;-ms-touch-action:pan-y}.owl-carousel .owl-wrapper{display:none;position:relative;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-wrapper-outer{overflow:hidden;position:relative;width:100%}.owl-carousel .owl-wrapper-outer.autoHeight{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}.owl-carousel .owl-item{float:left}.owl-controls .owl-page,.owl-controls .owl-buttons div{cursor:pointer}.owl-controls{-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}.owl-carousel .owl-wrapper,.owl-carousel .owl-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-theme .owl-controls{margin-top:0;text-align:center}.owl-theme .owl-controls .owl-buttons div{color:#fff;display:inline-block;zoom:1;*display:inline;margin:5px;padding:3px 10px;font-size:12px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;background:#869791;filter:Alpha(Opacity=50);opacity:.5}.owl-theme .owl-controls.clickable .owl-buttons div:hover{filter:Alpha(Opacity=100);opacity:1;text-decoration:none}.owl-theme .owl-controls .owl-page{display:inline-block;zoom:1;*display:inline}.owl-theme .owl-controls .owl-page span{display:block;width:4px;height:4px;margin:0 5px;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;background:#d8d8d8}.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span{background:#ef8a32}.owl-theme .owl-controls .owl-page span.owl-numbers{height:auto;width:auto;color:#fff;padding:2px 10px;font-size:12px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}
		</style>
		</head>
		<body>
			<section>		
		<div class="home-menu">
			<section>
					<div id="social">
						
		<div class="box-container login">
			<div class="relate">
				<div class="icon-title">
					<i class="iconnews-loginicon"></i>
				</div>
				<h3>ĐĂNG NHẬP</h3>
				<p>
					Hãy đăng nhập để comment, theo dõi các hồ sơ cá nhân và sử dụng dịch vụ nâng cao khác trên trang Tin Công Nghệ của<br /><b> Thế Giới Di Động</b>
				</p>
				<div class="social-login">
					<a href="javascript:OpenLoginWindowCampaign(1)" class="btn fb">
						<i class="iconnews-fb"></i>
						<span>Đăng nhập với Facebook</span>
					</a> 
					<a href="javascript:OpenLoginWindowCampaign(2)" class="btn gg">
						<i class="iconnews-gg"></i>
						<span>Đăng nhập với Google</span> 
					</a>
				</div>
				<p>Tất cả thông tin người dùng được bảo mật theo quy định của pháp luật Việt Nam. Khi bạn đăng nhập, bạn đồng ý với<b><a href="https://www.thegioididong.com/tos" target="_blank"> Các điều khoản sử dụng</a> </b>và<b> <a href="https://www.thegioididong.com/thoa-thuan-su-dung-trang-mxh">Thoả thuận về cung cấp và sử dụng Mạng Xã Hội</a></b>.</p>
				<span class="close-popup" onclick="showHidePopupLogin(-1)"><i class="iconnews-closegal"></i></span>
			</div>
		</div>
		<div class="overlay"></div>
					</div>
		
			</section>
			<div class="clr"></div>
		</div>
		<div id="dlding">Bạn vui lòng chờ trong giây lát...</div>
		<aside class="leftcate">
				<ul class="newslist latest">
				<li rel="left-one">
					<a href="/tin-tuc/mua-dong-ho-orient-tang-luon-airpods-1343747">
						<div class="tempvideo">
							<img width="100" height="70" src="https://cdn.tgdd.vn/Files/2021/04/15/1343747/orientstar_thumb_800x450-600x400.jpg" />
						</div>
						<h3 class="titlecom">
							Tưởng đ&#249;a nhưng thật: Mua đồng hồ Orient nhận ngay qu&#224; tặng tai nghe AirPods trị đến 6.99 triệu đồng qu&#225; xịn s&#242;
						</h3>
						<figure> 
							 Vừa sắm được đồng hồ sang, vừa ẵm thêm về Airpods xịn xò. Đó là những điều tuyệt vời mà bạn sẽ có được khi mua 1 trong những sản phẩm thuộc bộ đồng hồ cao cấp Orient Star trong thời điểm này. Nếu bạn vẫn chưa tin, thì hãy cùng mình tham khảo ngay bên dưới.
						</figure>
						<div class="timepost margin">
							<span>4 giờ trước</span>
						</div>
					</a>
				</li>
				<li rel="right-one">
					<a href="/tin-tuc/oppo-a74-xac-nhan-ra-mat-tai-viet-nam-kem-hotsale-sieu-hap-dan-1343225">
						<div class="tempvideo">
							<img width="100" height="70" src="https://cdn.tgdd.vn/Files/2021/04/14/1343225/oppoa74xanh-15_800x450-300x200.jpg" />
						</div>
						<h3 class="titlecom">
							Tin sốt dẻo cho O-Fans: Ch&#237;nh thức mở b&#225;n độc quyền OPPO A74 k&#232;m hotsale si&#234;u hấp dẫn, thế n&#224;y khi sắm th&#236; chờ khi n&#224;o
						</h3>
						<div class="timepost margin">
							<span>11 giờ trước</span>
						</div>
					</a>
				</li>
					<li rel="top3-list">
						<a href="/tin-tuc/xiaomi-mi-11-lite-chinh-thuc-mo-dat-truoc-1343186" class="linkimg">
							<h3 class="titlecom">
								Chỉ c&#242;n h&#244;m nay: Đặt trước Xiaomi Mi 11 Lite với ưu đ&#227;i giảm gi&#225; 1 triệu đồng, độc quyền chỉ c&#243; tại Thế Giới Di Động
										<span class="lesscom"><i class="iconnews-comcya"></i>14</span>
							</h3>
						</a>
					</li>
					<li rel="top3-list">
						<a href="/tin-tuc/tong-hop-ro-ri-iphone-se-plus-1307794" class="linkimg">
							<h3 class="titlecom">
								Nghe Đồn L&#224;: iPhone SE Plus 2021 được ph&#243;ng to từ iPhone SE 2020 nhưng gi&#225; th&#236; kh&#244;ng đổi, ra mắt v&#224;o cuối năm 2021 (Li&#234;n tục cập nhật)
										<span class="lesscom"><i class="iconnews-comcya"></i>9</span>
							</h3>
						</a>
					</li>
					<li rel="top3-list">
						<a href="/tin-tuc/3-smartphone-vsmart-doc-quyen-giam-gia-hap-dan-sam-la-dang-tien-1345267" class="linkimg">
							<h3 class="titlecom">
								Tin vui cuối tuần: Sắm l&#224; đ&#225;ng tiền, 3 smartphone Vsmart độc quyền giảm gi&#225; hấp dẫn, dung lượng pin lớn, c&#243; sạc nhanh
							</h3>
						</a>
					</li>
			</ul>
		
			<ul class="newslist" id="mainlist">
		
		<li data-id="1342110">
			<a href="/tin-tuc/trai-nghiem-dung-thu-instagram-reels-1342110">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/09/1342110/digivizer1_800x450-300x200.png" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 T&#236;m hiểu v&#224; d&#249;ng thử Instagram Reels: T&#237;nh năng mới tr&#234;n mạng x&#227; hội Instagram, tưởng lạ m&#224; quen tưởng quen m&#224; lạ!
		
				</h3>
				
				<div class="timepost margin">
					<span>45 ph&#250;t trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345927">
			<a href="/tin-tuc/apple-watch-uu-dai-giam-soc-mung-dai-le-1345927">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345927/applewatch_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Chỉ từ hơn 4 triệu đ&#227; c&#243; thể sở hữu Apple Watch xịn s&#242;, mức giảm sốc đ&#225;ng nể mừng đại lễ, kh&#244;ng sắm dịp n&#224;y th&#236; chờ khi n&#224;o
		
				</h3>
				
				<div class="timepost margin">
					<span>50 ph&#250;t trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345877">
			<a href="/tin-tuc/tat-tan-tat-xiaomi-redmi-note-10-va-redmi-note-10-pro-1345877">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345877/t_1280x720-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Tất Tần Tật: Những g&#236; cần biết về Xiaomi Redmi Note 10 v&#224; Redmi Note 10 Pro - Bộ đ&#244;i smartphone tầm trung cực kỳ đ&#225;ng gi&#225;
		
				</h3>
				
				<div class="timepost margin">
					<span>1 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1307794">
			<a href="/tin-tuc/tong-hop-ro-ri-iphone-se-plus-1307794">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2020/11/19/1307794/iphone-se-plus-thumb-2_800x450-300x200.png" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					<label class="hot">Hot</label> Nghe Đồn L&#224;: iPhone SE Plus 2021 được ph&#243;ng to từ iPhone SE 2020 nhưng gi&#225; th&#236; kh&#244;ng đổi, ra mắt v&#224;o cuối năm 2021 (Li&#234;n tục cập nhật)
							<span class="lesscom">
									<i class="iconnews-comcya"></i>9                    </span>
		
				</h3>
				
				<div class="timepost margin">
					<span>2 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345986">
			<a href="/tin-tuc/dat-iphone-11-va-iphone-12-mau-tim-canh-nhau-1345986">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345986/iphone-11-iphone-12-tim-5_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Đặt iPhone 11 v&#224; iPhone 12 m&#224;u t&#237;m cạnh nhau, bạn th&#237;ch m&#224;u tr&#234;n thế hệ iPhone n&#224;o hơn?
							<span class="lesscom">
									<i class="iconnews-comcya"></i>1                    </span>
		
				</h3>
				
				<div class="timepost margin">
						<div class="user-info">
								<img class="user-avt" alt="Minh Vũ" src="https://graph.facebook.com/1456497354672508/picture" />
													<span>Minh Vũ</span>
						</div>
					<span>2 giờ trước</span>
		
				</div>
			</a>
		</li>
						<li>
			<div class="newsvideo">
				<a href="https://www.youtube.com/subscription_center?add_user=TGDDVideoReviews" target="_blank" class="linkproduct">video</a>
				<a href="https://www.youtube.com/subscription_center?add_user=TGDDVideoReviews" target="_blank" class="follow"><div class="btnYt"><b class="icyt"></b></div>Theo dõi <span>Youtube</span></a>
				<div id="galleryYT">
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=IZbZrjf4hD4" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/IZbZrjf4hD4/hqdefault.jpg" alt="[LIVE] Apple đ&#227; biết lỗ hổng nguy hiểm của Airdrop nhưng kh&#244;ng chịu sửa | Hinews" class="lazyOwl" />
						   </a>
						   <span>[LIVE] Apple đ&#227; biết lỗ hổng nguy hiểm của Airdrop nhưng kh&#244;ng chịu sửa | Hinews</span>
					   </div>
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=fx70swP9KPA" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/fx70swP9KPA/hqdefault.jpg" alt="Oppo A74 !! Sạc nhanh đ&#225;ng kinh ngạc !!! Sử dụng li&#234;n tục 21 tiếng !" class="lazyOwl" />
						   </a>
						   <span>Oppo A74 !! Sạc nhanh đ&#225;ng kinh ngạc !!! Sử dụng li&#234;n tục 21 tiếng !</span>
					   </div>
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=URzKkBvikno" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/URzKkBvikno/hqdefault.jpg" alt="ĐẬP VIVO Y72 5G: GI&#193; LẠI “K&#202;U” C&#211; 5G, CHIP LẠ HOẮC !?" class="lazyOwl" />
						   </a>
						   <span>ĐẬP VIVO Y72 5G: GI&#193; LẠI “K&#202;U” C&#211; 5G, CHIP LẠ HOẮC !?</span>
					   </div>
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=8t7NgIVEM-8" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/8t7NgIVEM-8/hqdefault.jpg" alt="Chi tiết Mi 11 lite : CHIẾC ĐIỆN THOẠI CHIẾN GAME NGON NHẤT !!" class="lazyOwl" />
						   </a>
						   <span>Chi tiết Mi 11 lite : CHIẾC ĐIỆN THOẠI CHIẾN GAME NGON NHẤT !!</span>
					   </div>
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=3Et0Q1-ZINM" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/3Et0Q1-ZINM/hqdefault.jpg" alt="Kiểm tra chi tiết t&#236;nh trạng pin tr&#234;n iPhone | Thế giới di động #Shorts" class="lazyOwl" />
						   </a>
						   <span>Kiểm tra chi tiết t&#236;nh trạng pin tr&#234;n iPhone | Thế giới di động #Shorts</span>
					   </div>
					   <div class="item">
						   <a href="https://www.youtube.com/watch?v=JbBgp_Asgh4" target="_blank">
							   <i class="iconyt"></i>
							   <img data-src="https://i.ytimg.com/vi/JbBgp_Asgh4/hqdefault.jpg" alt="Apple sắp tung iPhone d&#249;ng chip M1, AirTag vừa ra mắt đ&#227; c&#243; đối thủ | Hinews" class="lazyOwl" />
						   </a>
						   <span>Apple sắp tung iPhone d&#249;ng chip M1, AirTag vừa ra mắt đ&#227; c&#243; đối thủ | Hinews</span>
					   </div>
				</div>
			</div>
		
						</li>
		
		<li data-id="1345975">
			<a href="/tin-tuc/vivo-v21-5g-va-vivo-v21e-duoc-an-dinh-ngay-ra-mat-1345975">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345975/vivo-v21-5g-teaser_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Vivo V21 5G v&#224; Vivo V21e được ấn định ng&#224;y ra mắt: D&#249;ng chip Dimensity 800U, camera selfie 44MP c&#243; OIS, sạc nhanh 33W
		
				</h3>
				
				<div class="timepost margin">
						<div class="user-info">
								<img class="user-avt" alt="Dương L&#234;" src="https://cdn.tgdd.vn/UserUpload/Social2019/IMG_1697_2NDE3F.jpg" />
													<span>Dương Lê</span>
						</div>
					<span>2 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345525">
			<a href="/tin-tuc/pin-sac-du-phong-ava-dong-giam-soc-1345525">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/22/1345525/pinava_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Cơ hội cho bạn đ&#226;y, pin sạc dự ph&#242;ng AVA giảm sập s&#224;n đến 42% qu&#225; l&#224; hời, chỉ từ 175k đ&#227; c&#243; m&#243;n phụ kiện xịn cho &#39;dế iu&#39;
		
				</h3>
				
				<div class="timepost margin">
					<span>2 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345980">
			<a href="/tin-tuc/dieu-tao-nen-suc-hut-cua-chiec-vivo-y72-5g-1345980">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345980/vivoy725g-8_800x450_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Những điều đ&#227; tạo n&#234;n sức h&#250;t của chiếc Vivo Y72 5G, từ thiết kế đẹp mắt, cấu h&#236;nh ổn &#225;p đến camera chất lượng, c&#242;n nữa...
		
				</h3>
				
				<div class="timepost margin">
					<span>3 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345839">
			<a href="/tin-tuc/uu-dai-ngat-ngay-cho-loat-laptop-acer-hieu-suat-cao-dung-nen-bo-lo-1345839">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/23/1345839/laptopacer2_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 H&#226;m n&#243;ng th&#225;ng 4 với deal cực ngon, ưu đ&#227;i ngất ng&#226;y cho loạt laptop Acer hiệu năng mạnh mẽ, nhất định đừng n&#234;n bỏ lỡ
		
				</h3>
				
				<div class="timepost margin">
					<span>3 giờ trước</span>
		
				</div>
			</a>
		</li>
		
		<li data-id="1345942">
			<a href="/tin-tuc/tai-sao-ban-nen-doi-cccd-gan-chip-truoc-1-7-1345942">
				<div class="tempvideo">
					<img width="100" height="70" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345942/cccdd1_800x450-300x200.jpg" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" />
				</div>
				<h3 class="titlecom">
					 Tại sao bạn n&#234;n đổi CCCD gắn ch&#237;p trước 1/7? Đ&#226;y l&#224; &#39;tất tần tật&#39; những quyền lợi bạn được hưởng nếu đổi thẻ sớm
		
				</h3>
				
				<div class="timepost margin">
					<span>3 giờ trước</span>
		
				</div>
			</a>
		</li>
						<li class="bn pos-9">
									<div class="banner">
		<a aria-label='slide' data-cate="0" data-place="1340" href="https://www.facebook.com/thegioididong.tv2019/posts/4176202042424841" onclick="jQuery.ajax({ url: 'https://www.thegioididong.com/bannertracking?bid=42424&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" class='lazy' data-original="https://cdn.tgdd.vn/2021/04/banner/1desktop-790x140.gif" alt="Bắt nét rạng ngời cùng OPPO Reno5" width="790" height="140"></a>
				</div>
		
		
		
		
						</li>
		</ul>
		<a href="javascript:;" onclick="More(this)" class="viewmore">Xem thêm <b></b></a>
		</aside>
		<aside class="rightcate">
			
					<div class="banner">
		<a aria-label='slide' data-cate="0" data-place="414" href="https://www.thegioididong.com/flashsale" onclick="jQuery.ajax({ url: 'https://www.thegioididong.com/bannertracking?bid=42436&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" class='lazy' data-original="https://cdn.tgdd.vn/2021/04/banner/380x215-380x215.gif" alt="Hotsale cuối tuần" width="380" height="215"></a>
				</div>
		
		
		
		
			
				<h3 class="titlehome">
					Chủ đề hot
					<a class="viewall-topics" href="/tin-tuc/chu-de" title="Xem tất cả chủ đề">Xem tất cả chủ đề</a>
				</h3>
			<ul class="hot-lst">
					<li>
						<a href="https://www.thegioididong.com/tin-tuc/chu-de/meo-khong-phai-ai-cung-biet-187" target="_blank">
							Mẹo kh&#244;ng phải ai cũng biết
						</a>
					</li>
					<li>
						<a href="https://www.thegioididong.com/tin-tuc/chu-de/the-gioi-phu-kien-191" target="_blank">
							Thế giới phụ kiện
						</a>
					</li>
					<li>
						<a href="https://www.thegioididong.com/tin-tuc/chu-de/cach-lam-giay-to-online-200" target="_blank">
							C&#225;ch l&#224;m giấy tờ online cực nhanh
						</a>
					</li>
					<li>
						<a href="https://www.thegioididong.com/tin-tuc/chu-de/android-12-198" target="_blank">
							Android 12
						</a>
					</li>
					<li>
						<a href="https://www.thegioididong.com/tin-tuc/chu-de/the-gioi-dong-ho-156" target="_blank">
							Thế giới đồng hồ
						</a>
					</li>
				
			</ul>
		
		
			
			<h3 class="titlehome">Thảo luận nhiều</h3>
			<div class="summarycomment">
						<a href="/tin-tuc/nap--rut-tien-momo-the-gioi-di-dong-va-dien-may-xanh-1344180">
							<div>1</div>
							<h3>Nạp - R&#250;t tiền Momo đơn giản lắm, đến ngay si&#234;u thị Thế Giới Di Động v&#224; Điện M&#225;y XANH bất kỳ chỉ 2 ph&#250;t tiền về t&#224;i khoản<span class="morecom"><i class="iconnews-comorg"></i>35</span></h3>
						</a>
						<a href="/tin-tuc/danh-gia-xiaomi-redmi-note-10-pro-miui-1342102">
							<div>2</div>
							<h3>Đ&#225;nh gi&#225; MIUI tr&#234;n Xiaomi Redmi Note 10 Pro: C&#243; thể &#39;custom&#39; theo &#253; m&#236;nh th&#237;ch, l&#224;m điều m&#236;nh muốn v&#224; kiểm so&#225;t c&#244;ng việc rất khoa học<span class="morecom"><i class="iconnews-comorg"></i>25</span></h3>
						</a>
						<a href="/tin-tuc/kinh-nghiem-de-ban-lam-the-can-cuoc-cong-dan-cccd-duoc-nhanh-hon-1343748">
							<div>3</div>
							<h3>Kinh nghiệm để bạn l&#224;m thẻ Căn cước c&#244;ng d&#226;n (CCCD) được nhanh hơn, tiết kiệm thời gian v&#224; c&#244;ng sức đi lại<span class="morecom"><i class="iconnews-comorg"></i>21</span></h3>
						</a>
						<a href="/tin-tuc/doi-cccd-gan-chip-co-can-doi-thong-tin-tai-khoan-ngan-hang-khong-1344775">
							<div>4</div>
							<h3>Đổi CCCD gắn chip c&#243; cần đổi th&#244;ng tin t&#224;i khoản ng&#226;n h&#224;ng kh&#244;ng? Bạn cần nắm th&#244;ng tin để tr&#225;nh c&#225;c sự cố ngo&#224;i &#253; muốn<span class="morecom"><i class="iconnews-comorg"></i>19</span></h3>
						</a>
			</div>
		
		
				<div class="rcm">
				<div class="trcm">
					<h3 class="linkproduct">TUYỂN DỤNG TẠI MWG</h3>
					<a href="https://vieclam.thegioididong.com">Xem thêm <span>›</span></a>
				</div>
				<ul class="">
						<li>
							<a href="https://vieclam.thegioididong.com/tuyen-dung/tong-dai-giai-quyet-khieu-nai.html">
								<span class="l">Tổng Đ&#224;i Giải Quyết Khiếu Nại<br />
									<span class="lct">Hồ Ch&#237; Minh</span>
								</span>
								<span class="r">Hạn nộp<br />
									<span class="tm">12/05/2021</span>
								</span>
							</a>
						</li>
						<li>
							<a href="https://vieclam.thegioididong.com/tuyen-dung/chuyen-mon/dien-may-xanh">
								<span class="l">Nh&#226;n vi&#234;n si&#234;u thị TGDĐ/ĐMX<br />
									<span class="lct">TP. Hồ Ch&#237; Minh</span>
								</span>
								<span class="r">Hạn nộp<br />
									<span class="tm">24/05/2021</span>
								</span>
							</a>
						</li>
						<li>
							<a href="https://vieclam.thegioididong.com/tuyen-dung/chuyen-mon/cong-nghe-thong-tin">
								<span class="l">IT/C&#244;ng nghệ th&#244;ng tin<br />
									<span class="lct">TP. Hồ Ch&#237; Minh</span>
								</span>
								<span class="r">Hạn nộp<br />
									<span class="tm">24/05/2021</span>
								</span>
							</a>
						</li>
						<li>
							<a href="https://vieclam.thegioididong.com/tuyen-dung/chuyen-mon/nganh-hang">
								<span class="l">Mua h&#224;ng/ Ng&#224;nh h&#224;ng<br />
									<span class="lct">TP. Hồ Ch&#237; Minh</span>
								</span>
								<span class="r">Hạn nộp<br />
									<span class="tm">24/05/2021</span>
								</span>
							</a>
						</li>
						<li>
							<a href="https://vieclam.thegioididong.com/tuyen-dung/chuyen-mon/thuong-mai-dien-tu">
								<span class="l">Thương mại điện tử<br />
									<span class="lct">TP. Hồ Ch&#237; Minh</span>
								</span>
								<span class="r">Hạn nộp<br />
									<span class="tm">24/05/2021</span>
								</span>
							</a>
						</li>
				</ul>
			</div>
		
			
			<a href="/tin-tuc/san-pham" class="linkproduct">Bài viết sản phẩm mới </a>
		<ul class="newsproduct">
				<li>
					<a href="/tin-tuc/san-pham/vivo-v21-236440">
						<img width="100" height="70" data-original="https://cdn.tgdd.vn/Products/Images/42/236440/vivo-v21-600x600-400x400.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Vivo V21</h3>
						<p>Tin đồn</p>
							<label>4 bài viết</label>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/san-pham/vivo-v21e-237600">
						<img width="100" height="70" data-original="https://cdn.tgdd.vn/Products/Images/42/237600/vivo-v21e-400x400.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Vivo V21e</h3>
						<p>Tin đồn</p>
							<label>1 bài viết</label>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/san-pham/oppo-a74-5g-236559">
						<img width="100" height="70" data-original="https://cdn.tgdd.vn/Products/Images/42/236559/oppo-a74-5g-silver-001-600x600.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>OPPO A74 5G</h3>
						<p>Đ&#227; ra mắt</p>
							<label>6 bài viết</label>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/san-pham/oppo-a74-235653">
						<img width="100" height="70" data-original="https://cdn.tgdd.vn/Products/Images/42/235653/oppo-a74-black-8-600x600.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>OPPO A74</h3>
						<p>6.390.000₫</p>
							<label>18 bài viết</label>
					</a>
				</li>
		</ul>
		
			
		<a href="/tin-tuc/tin-khuyen-mai/31" class="linkproduct">Khuyến mãi</a>
		<ul class="newspromotion">
				<li>
					<a href="/tin-tuc/apple-watch-uu-dai-giam-soc-mung-dai-le-1345927">
						<img width="380" height="215" data-original="https://cdn.tgdd.vn/Files/2021/04/24/1345927/applewatch_800x450-600x400.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Chỉ từ hơn 4 triệu đ&#227; c&#243; thể sở hữu Apple Watch xịn s&#242;, mức giảm sốc đ&#225;ng nể mừng đại lễ, kh&#244;ng sắm dịp n&#224;y th&#236; chờ khi n&#224;o</h3>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/pin-sac-du-phong-ava-dong-giam-soc-1345525">
						<img width="380" height="215" data-original="https://cdn.tgdd.vn/Files/2021/04/22/1345525/pinava_800x450-300x200.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Cơ hội cho bạn đ&#226;y, pin sạc dự ph&#242;ng AVA giảm sập s&#224;n đến 42% qu&#225; l&#224; hời, chỉ từ 175k đ&#227; c&#243; m&#243;n phụ kiện xịn cho &#39;dế iu&#39;</h3>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/uu-dai-ngat-ngay-cho-loat-laptop-acer-hieu-suat-cao-dung-nen-bo-lo-1345839">
						<img width="380" height="215" data-original="https://cdn.tgdd.vn/Files/2021/04/23/1345839/laptopacer2_800x450-300x200.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>H&#226;m n&#243;ng th&#225;ng 4 với deal cực ngon, ưu đ&#227;i ngất ng&#226;y cho loạt laptop Acer hiệu năng mạnh mẽ, nhất định đừng n&#234;n bỏ lỡ</h3>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/con-loc-sale-soc-cuoi-tuan-tro-lai-voi-realme-7i-1342163">
						<img width="380" height="215" data-original="https://cdn.tgdd.vn/Files/2021/04/09/1342163/realme7i-38_800x450-300x200.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Cơn lốc sale sốc cuối tuần trở lại với Realme 7i, m&#225;y c&#243; camera 64MP, pin tr&#226;u tận 2 ng&#224;y m&#224; gi&#225; tốt thế n&#224;y sao c&#243; thể bỏ qua</h3>
					</a>
				</li>
				<li>
					<a href="/tin-tuc/day-la-nhung-smartphone-samsung-doc-quyen-dang-sale-soc-1345735">
						<img width="380" height="215" data-original="https://cdn.tgdd.vn/Files/2021/04/23/1345735/samsung-galaxy-note-20-ultra-5g-trang-094920-014920_800x450-300x200.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="lazy"/>
						<h3>Giảm b&#249;ng nổ cho loạt smartphone Samsung độc quyền dịp cuối tuần, tiết kiệm tiền triệu chẳng đ&#249;a đ&#226;u</h3>
					</a>
				</li>
		</ul>
		
			<h3 class="titlehome">Sự kiện</h3>
		<ul class="summaryevent">
		<li>
			<a href="/tin-tuc/su-kien/ra-mat-tv-bravia-xr-tai-viet-nam-561">
				<div class="calen">
					<i class="iconnews-calendar"></i>
					<strong>27/04</strong>
				</div>
					<h3>Ra mắt TV Bravia XR tại Việt Nam</h3>
				<span class="ddevent"><i class="iconnews-dd"></i>Gem Center, Quận 1, TP.HCM</span>
			</a>
		</li><li>
			<a href="/tin-tuc/su-kien/ra-mat-redmi-k40-game-enhanced-edition-556">
				<div class="calen">
					<i class="iconnews-calendar"></i>
					<strong>27/04</strong>
				</div>
					<h3>Ra mắt Redmi K40 Game Enhanced Edition</h3>
				<span class="ddevent"><i class="iconnews-dd"></i>Trung Quốc </span>
			</a>
		</li><li>
			<a href="/tin-tuc/su-kien/ra-mat-samsung-galaxy-m42-5g-553">
				<div class="calen">
					<i class="iconnews-calendar"></i>
					<strong>28/04</strong>
				</div>
					<h3>Ra mắt Samsung Galaxy M42 5G</h3>
				<span class="ddevent"><i class="iconnews-dd"></i>Ấn Độ</span>
			</a>
		</li></ul>
		
			
		
			<div class="slidegameapp">
				<a href="https://www.thegioididong.com/game-app" class="seeall">
					<h3>Game - ứng dụng nổi bật</h3>
					<span>Xem tất cả</span>
				</a>
				<div class="slideHome owl-carousel owl-theme slide-edit">
						<div class="item" data-id="221941">
							<div class="box-gameapp">
								<div class="bg-gameapp">
								</div>
								<a href="https://www.thegioididong.com/game-app/lien-minh-huyen-thoai-game-moba-pho-bien-nhat-the-gioi-221941" class="info-gameapp">
									
									<img data-original="https://cdn.tgdd.vn/2020/05/content/lien-minh-huyen-thoai-game-moba-pho-bien-nhat-the-gioi-thumb640-640x360.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="img-gameapp lazy" alt="Li&#234;n Minh Huyền Thoại - Game MOBA phổ biến nhất thế giới">
									
									<div class="title-gameapp">
										
											<img src="https://cdn.tgdd.vn/2020/05/GameApp/customLogo-200x200.png" alt="Li&#234;n Minh Huyền Thoại - Game MOBA phổ biến nhất thế giới" class="lazy">
										
										<div style="display: block;overflow: hidden;">
											<strong>Li&#234;n Minh Huyền Thoại - Game MOBA phổ biến nhất thế giới</strong>
											<span>
												<label class="hasfee ">Miễn ph&#237;</label>
												<p>Chiến thuật, Li&#234;n Minh Huyền Thoại</p>
											</span>
										</div>
									</div>
								</a>
									<div class="posts-gameapp">
											<a href="https://www.thegioididong.com/game-app/chi-tiet-phien-ban-cap-nhat-lmht-11-1-1313559"><span>Chi tiết cập nhật LMHT 11.9: Sửa đổi Hecarim, Ra mắt trang phục DAMWON</span></a>
											<a href="https://www.thegioididong.com/game-app/cach-tai-lmht-pbe-ve-may-tinh-tung-buoc-don-gian-1286792"><span>C&#225;ch tạo t&#224;i khoản v&#224; tải LOL PBE, DTCL PBE chi tiết từng bước đơn giản nhất</span></a>
									</div>
							</div>
						</div>
						<div class="item" data-id="228059">
							<div class="box-gameapp">
								<div class="bg-gameapp">
								</div>
								<a href="https://www.thegioididong.com/game-app/google-meet-app-hop-truc-tuyen-hoc-online-khong-gioi-228059" class="info-gameapp">
									
									<img data-original="https://cdn.tgdd.vn/2021/02/content/meetfeat-600x360.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="img-gameapp lazy" alt="Google Meet: App họp trực tuyến, học online kh&#244;ng giới hạn người tham gia">
									
									<div class="title-gameapp">
										
											<img src="https://cdn.tgdd.vn/GameApp/3/228059/Screentshots/google-meet-app-hop-truc-tuyen-hoc-online-khong-gioi-228059-logo-01-09-2020.png" alt="Google Meet: App họp trực tuyến, học online kh&#244;ng giới hạn người tham gia" class="lazy">
										
										<div style="display: block;overflow: hidden;">
											<strong>Google Meet: App họp trực tuyến, học online kh&#244;ng giới hạn người tham gia</strong>
											<span>
												<label class="hasfee ">Miễn ph&#237;</label>
												<p>C&#244;ng cụ</p>
											</span>
										</div>
									</div>
								</a>
									<div class="posts-gameapp">
									</div>
							</div>
						</div>
						<div class="item" data-id="220141">
							<div class="box-gameapp">
								<div class="bg-gameapp">
								</div>
								<a href="https://www.thegioididong.com/game-app/mini-world-block-art-vung-dat-ma-thuat-220141" class="info-gameapp">
									
									<img data-original="https://cdn.tgdd.vn/2020/05/content/mini-world-block-art-vung-dat-ma-thuatthumb-600x360.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="img-gameapp lazy" alt="Mini World Block Art - V&#249;ng đất ma thuật">
									
									<div class="title-gameapp">
										
											<img src="https://cdn.tgdd.vn/2020/03/GameApp/image(6)-200x200.png" alt="Mini World Block Art - V&#249;ng đất ma thuật" class="lazy">
										
										<div style="display: block;overflow: hidden;">
											<strong>Mini World Block Art - V&#249;ng đất ma thuật</strong>
											<span>
												<label class="hasfee ">Miễn ph&#237;</label>
												<p>Phi&#234;u lưu</p>
											</span>
										</div>
									</div>
								</a>
									<div class="posts-gameapp">
											<a href="https://www.thegioididong.com/game-app/cach-chuyen-ngon-ngu-sang-tieng-viet-cho-game-mini-world-block-art-1253388"><span>C&#225;ch chuyển ng&#244;n ngữ sang tiếng Việt cho game Mini World: Block Art</span></a>
											<a href="https://www.thegioididong.com/game-app/top-14-game-giong-minecraft-tren-dien-thoai-pc-hay-1332650"><span>Top 14 game giống Minecraft tr&#234;n điện thoại, PC hay kh&#244;ng thể bỏ lỡ</span></a>
									</div>
							</div>
						</div>
						<div class="item" data-id="219921">
							<div class="box-gameapp">
								<div class="bg-gameapp">
								</div>
								<a href="https://www.thegioididong.com/game-app/zalo-ung-dung-mang-xa-hoi-pho-bien-viet-nam-219921" class="info-gameapp">
									
									<img data-original="https://cdn.tgdd.vn/2020/03/content/thum-600x360-5.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" class="img-gameapp lazy" alt="Zalo - Ứng dụng mạng x&#227; hội phổ biến Việt Nam">
									
									<div class="title-gameapp">
										
											<img src="https://cdn.tgdd.vn/2020/05/GameApp/zalo-ung-dung-mang-xa-hoi-pho-bien-viet-nam-219921-logo-05-05-2020-180x180.png" alt="Zalo - Ứng dụng mạng x&#227; hội phổ biến Việt Nam" class="lazy">
										
										<div style="display: block;overflow: hidden;">
											<strong>Zalo - Ứng dụng mạng x&#227; hội phổ biến Việt Nam</strong>
											<span>
												<label class="hasfee ">Miễn ph&#237;</label>
												<p>Gọi điện nhắn tin, Mạng x&#227; hội</p>
											</span>
										</div>
									</div>
								</a>
									<div class="posts-gameapp">
											<a href="https://www.thegioididong.com/game-app/tong-hop-80-meme-cho-cam-sung-khoc-hai-huoc-bua-dang-yeu-tuc-1339613"><span>Tổng hợp 80+ meme Ch&#243; cầm s&#250;ng, kh&#243;c, h&#224;i hước, bựa, đ&#225;ng y&#234;u, tức giận</span></a>
											<a href="https://www.thegioididong.com/game-app/tong-hop-140-meme-nhom-nhac-bts-hai-huoc-dang-yeu-cute-tuc-1342893"><span>Tổng hợp 140+ meme nh&#243;m nhạc BTS h&#224;i hước, đ&#225;ng y&#234;u, cute, tức giận</span></a>
									</div>
							</div>
						</div>
					<div class="item view-all" data-id="0">
						<div class="bg-gameapp">
						</div>
						<a href="https://www.thegioididong.com/game-app">Xem tất cả <br /> Game - App</a>
					</div>
				</div>
			</div>
		
		
			<div class="clr"></div>
		</aside>
			</section>
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
			<p id="back-top">
				<a href="#top" title="Về Đầu Trang"><span></span></a>
			</p>
		
			<script>
				var query = {
					ID: 1169,
					Size: 10,
					Index: 0
				};
			</script>
				<script defer="defer" async="async" src="https://cdn.tgdd.vn/tin-tuc/Scripts/desktop/home.min.v202104201040.js"></script>
			<script type="text/javascript">
				setTimeout(function () {
					setTimeout(function () {
						var a = document.createElement("script");
						var b = document.getElementsByTagName("script")[0];
						a.src = document.location.protocol + "//script.crazyegg.com/pages/scripts/0017/3880.js?" + Math.floor(new Date().getTime() / 3600000);
						a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
					}, 1);
				}, 10000);
			</script>
		
			<script>
				var rootUrl = '/tin-tuc';
				var rooturl = '.thegioididong.com';
			</script>
			<!--#region GA-->
			<script type="text/javascript">
				(function (i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date(); a = s.createElement(o),
						m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-918185-25', 'auto');
			</script>
		
			<script type="text/javascript">
				window.onload = function () {
					ga('send', 'pageview');
					//<!-- #regionGoogle Tag Manager -->
					setTimeout(
						function () {
							(function (w, d, s, l, i) {
								w[l] = w[l] || []; w[l].push({
									'gtm.start':
										new Date().getTime(), event: 'gtm.js'
								}); var f = d.getElementsByTagName(s)[0],
									j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
										'//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
							})(window, document, 'script', 'dataLayer', 'GTM-WKQZL8');
						}
						, 3000);
					//<!--#endregion -->
				};
			</script>
			<script src="./javascript.js"></script>
			<!--#endregion-->
			
		
			<!--#region CrazyEgg -->
			
			<!--#endregion -->
		</body>
		</html>
		