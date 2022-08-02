<?php
session_start();
include("SQL_PHP/classfunction.php");
$p=new csdl();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tohoma";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    overflow:hidden;
    min-height:297mm;
    padding: 2.5cm;
    margin-left:auto;
    margin-right:auto;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 237mm;
    outline: 2cm #FFEAEA solid;
}
 @page {
 size: A4;
 margin: 0;
}
button {
    width:100px;
    height: 24px;
}
.header {
    overflow:hidden;
}
.logo {
    background-color:#FFFFFF;
    text-align:left;
    float:left;
}
.company {
    padding-top:24px;
    text-transform:uppercase;
    background-color:#FFFFFF;
    text-align:right;
    float:right;
    font-size:16px;
}
.title {
    text-align:center;
    position:relative;
    color:#0000FF;
    font-size: 24px;
    top:1px;
}
.footer-left {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    float:left;
    font-size: 12px;
    bottom:1px;
}
.footer-right {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    font-size: 12px;
    float:right;
    bottom:1px;
}
.TableData {
    background:#ffffff;
    font: 11px;
    width:100%;
    border-collapse:collapse;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:12px;
    border:thin solid #d3d3d3;
}
.TableData TH {
    background: rgba(0,0,255,0.1);
    text-align: center;
    font-weight: bold;
    color: #000;
    border: solid 1px #ccc;
    height: 24px;
}
.TableData TR {
    height: 24px;
    border:thin solid #d3d3d3;
}
.TableData TR TD {
    padding-right: 2px;
    padding-left: 2px;
    border:thin solid #d3d3d3;
}
.TableData TR:hover {
    background: rgba(0,0,0,0.05);
}
.TableData .cotSTT {
    text-align:center;
    width: 10%;
}
.TableData .cotTenSanPham {
    text-align:left;
    width: 40%;
}
@media print {
 @page {
 margin: 0;
 border: initial;
 border-radius: initial;
 width: initial;
 min-height: initial;
 box-shadow: initial;
 background: initial;
 page-break-after: always;
}
}	
</style>
<body onLoad="window.print();">
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="Image/hinh/images/51.png"/></div>
        <div class="company">
			<strong>DI ĐỘNG CHÍNH HÃNG</strong>
			<p>0393.251.538</p>
			<p>Ngày: <?php echo date('d-m-Y'); ?></p>
			<p>Địa chỉ: TP HCM</p>
		</div>		
    </div>
  <br/>
  <div class="title">
        Báo cáo nhập hàng
        <br/>
        -------oOo-------
  </div>
  <br/>
  <div style="width: 100%; height: auto">  	
	<div>		
  		<p>Mã người báo: <?php echo $_SESSION['myid']?></p>
		<p>Tên người báo: <?php echo $_SESSION['myten']?></p>
	</div>
  </div>
  <table class="TableData">
    <tr>
      <th>STT</th>
	  <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>		      
    </tr>
    <?php
    	$p->inbaocao();
	?>    
  </table> 
  <div class="footer-right">
	Người báo 
	  </br>
	<?php echo $_SESSION['myten']?>
</div>
</div>
</body>
</html>