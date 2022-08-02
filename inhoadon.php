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
.TableData .cotHangSanXuat {
    text-align:left;
    width: 20%;
}
.TableData .cotGia {
    text-align:right;
    width: 120px;
}
.TableData .cotSoLuong {
    text-align: center;
    width: 50px;
}
.TableData .cotSo {
    text-align: right;
    width: 120px;
}
.TableData .tong {
    text-align: right;
    font-weight:bold;
    text-transform:uppercase;
    padding-right: 4px;
}
.TableData .cotSoLuong input {
    text-align: center;
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
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <div style="width: 100%; height: auto">
  	<div style="float: left;">		
  		<p>Khách hàng: <?php echo $_SESSION['tenkhach'] ?></p>
		<p>Địa chỉ: <?php echo $_SESSION['diachikhach'] ?></p>
  		<p>Điện thoại: <?php  echo $_SESSION['stdkhach']?></p>	
  	</div>
	<div style="float: left; margin-left: 200px;">
		<p>Mã hóa đơn: <?php echo $_SESSION['idhoadon'] ?></p>
  		<p>Mã nhân viên: <?php echo $_SESSION['myid']?></p>  		
	</div>
	<div style="float: left; margin-left: 0px;">
	<p>Thánh toán tại: <?php echo $_SESSION['chinhanh']?></p>
	</div>
  </div>
  <table class="TableData">
    <tr>
      <th>STT</th>
      <th>Tên sản phẩm</th>		
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Thành tiền</th>
    </tr>
    <?php
session_start();
$tongsotien = 0;
if(isset($_SESSION['cart'])){
    $pos = 1;
    $tongsotien = 0;
    foreach($_SESSION['cart'] as $i => $row)
    {
		if($row['id']!='')
		{
			$tongsotien += $row['quantily']*$row['price'];
			echo "<tr>";
			echo "<td class=\"cotSTT\">".$pos++."</td>";
			echo "<td class=\"cotTenSanPham\">".$row['name']."</td>";
			echo "<td class=\"cotGia\"><div id='giasp".$row['id']."' name='giasp".$row['id']."' value='".$row['price']."'>".$row['price']."0.000</div></td>";
			echo "<td class=\"cotSoLuong\" align='center'>".$row['quantily']."</td>";
			echo "<td class=\"cotSo\">".$row['price']*$row['quantily']."0.000</td>";
			echo "</tr>";
		}
    }       
}
?>
    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo $tongsotien ?>0.000</td>
    </tr>
  </table>
  <div class="footer-left">
    Khách hàng <br>
	<?php echo $_SESSION['tenkhach'] ?>
	</div>
  <div class="footer-right">
	Người bán hàng 
	  </br>
	<?php echo $_SESSION['myten']?>
</div>
</div>
</body>
</html>