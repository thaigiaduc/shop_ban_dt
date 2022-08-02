<?php
	class csdl
	{
		function connect()
		{
			$con = mysqli_connect("localhost","root","");
			if(!$con)
			{
				echo 'Khong ket noi duoc voi csdl';
				exit();
			}
			else
			{
				mysqli_select_db("doan_ql_dt");
				mysqli_query("SET NAMES UTF8");
				return $con;
			}
		}
		function import($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					$nhanhieu = $row['Nhanhieu'];
					$gia = $row['Gia'];
					$img = $row['img'];
					$tinhtrang = $row['Tinhtrang'];
					$sqlhang = "select * from ctnhaphang where IDSP='$id'";
					$kq = mysqli_query($sqlhang,$link);
					$j = mysqli_num_rows($kq);
					if($j>0)
					{
						
						while($rowh=mysqli_fetch_array($kq))
						{
							$idct = $rowh['ID'];
							$sl = $rowh['SL'];
							$idsp = $rowh['IDSP'];
							if($sl<=0)
							{
								$capnhap = "update sanpham set Tinhtrang='0' where ID='$idsp'";
								mysqli_query($capnhap,$link);
							}
							else
							{
								$capnhap = "update sanpham set Tinhtrang='1' where ID='$idsp'";
								mysqli_query($capnhap,$link);
							}
						}
					}
					if($tinhtrang==1)
					{
						echo '<div id="importsp" style="text-align: center;height:330px">
								<form method="post" action="ctsanpham.php?view=ctsanpham&id='.$id.'" enctype="multipart/form-data" name="form1" id="form1">			
									<img src="'.$img.'" width="220" height="220"/>
									<a href="#" style="margin-left: 2px;">'.$ten.'</a>
									<p>Nhãn hiệu: '.$nhanhieu.'</p>
									<p>'.$loai.'</p>
									<p>Giá: '.$gia.'0.000 VNĐ</p>
									<p>Tình trạng: <span style="color:green">Còn hàng</span></p>
									<input type="submit" id="nutct" name="nut" value="Chi tiết" style="background-color: #FF0004;color:white; width:70px; height:30px">						
								</form>
						</div>';
					}
					else if($tinhtrang==0)
					{
						echo '<div id="importsp" style="text-align: center;height:330px">
								<form method="post" action="ctsanpham.php?view=ctsanpham&id='.$id.'" enctype="multipart/form-data" name="form1" id="form1">			
									<img src="'.$img.'" width="220" height="220"/>
									<a href="#" style="margin-left: 2px;">'.$ten.'</a>
									<p>Nhãn hiệu: '.$nhanhieu.'</p>
									<p>'.$loai.'</p>
									<p>Giá: '.$gia.'0.000 VNĐ</p>
									<p>Tình trạng: <span style="color:red">Hết hàng</span></p>
									<input type="submit" id="nutct" name="nut" value="Chi tiết" style="background-color: #FF0004;color:white; width:70px; height:30px">						
								</form>
						</div>';
					}
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function importtimkiem($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					$nhanhieu = $row['Nhanhieu'];
					$gia = $row['Gia'];
					$img = $row['img'];					
					if($tinhtrang==1)
					{
						echo '<div id="importsp" style="text-align: center;height:330px">
								<form method="post" action="ctsanpham.php?view=ctsanpham&id='.$id.'" enctype="multipart/form-data" name="form1" id="form1">			
									<img src="'.$img.'" width="220" height="220"/>
									<a href="#" style="margin-left: 2px;">'.$ten.'</a>
									<p>Nhãn hiệu: '.$nhanhieu.'</p>
									<p>'.$loai.'</p>
									<p>Giá: '.$gia.'0.000 VNĐ</p>
									<p>Tình trạng: <span style="color:green">Còn hàng</span></p>
									<input type="submit" id="nutct" name="nut" value="Chi tiết" style="background-color: #FF0004;color:white; width:70px; height:30px">						
								</form>
						</div>';
					}
					else
					{
						echo '<div id="importsp" style="text-align: center;height:330px">
								<form method="post" action="ctsanpham.php?view=ctsanpham&id='.$id.'" enctype="multipart/form-data" name="form1" id="form1">			
									<img src="'.$img.'" width="220" height="220"/>
									<a href="#" style="margin-left: 2px;">'.$ten.'</a>
									<p>Nhãn hiệu: '.$nhanhieu.'</p>
									<p>'.$loai.'</p>
									<p>Giá: '.$gia.'0.000 VNĐ</p>
									<p>Tình trạng: <span style="color:red">Hết hàng</span></p>
									<input type="submit" id="nutct" name="nut" value="Chi tiết" style="background-color: #FF0004;color:white; width:70px; height:30px">						
								</form>
						</div>';
					}
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function import1($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					$nhanhieu = $row['Nhanhieu'];
					$gia = $row['Gia'];
					$img = $row['img'];
					$tinhtrang = $row['Tinhtrang'];
				if($tinhtrang==0)
				{
					echo '<div id="myNav" style="height: 500px;
				width: 1223px;												
				margin-left: 140px;
				background-color: white;
				overflow-x: hidden;
				transition: 0.5s;" class="cthoadon">
			<form id="form1" name="form1" method="post" action="cart.php?view=cart&id='.$id.'">
			<img src="'.$img.'" width="350" height="350" style="float: left;margin-right: 20px; padding-left: 10px; padding-top: 10px;">
			<strong><p style="float: left; font-size: 25px; padding-top: 20px; color: #454343">'.$ten.'</p></strong>
			<br>
			<br>
			<br>
			<div class="rating" style="color: #FF7E00">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
			</div>
			<span style="font-size:10px;">999 reviews</span>
			<br>
			<br>
			<span style="font-size:12px;">Giá cũ: </span><strike>19.110.000VNĐ</strike>
			<br>
			<br>
			<p style="float: left; font-size: 25px; padding-top: 10px; color: #454343">Giá hiện tại: '.$gia.'0.000 VNĐ</p>
			<br>
			<br>
			<br>
			<p>100% hàng <strong>CHẤT LƯỢNG</strong>, đảm bảo <strong>UY TÍN</strong>!</p>
			<br>		  
			<p>Tình trạng: <span style="color:red">Hết hàng</span></p>
			<br>
			<br>
			<br>		  	
			</form>
			<br><br><br>
			<hr>
			<br>
			<strong><p style="font-size: 25px; padding-left: 20px;color: #4B4B4B;">Thông tin chi tiết SẢN PHẨM</p></strong>
			<p style="font-size: 12px; padding-left: 24px;color: #4B4B4B;padding-top: 10px;">Điện thoại nhãn hiệu '.$row['Nhanhieu'].' có phiên bảng '.$row['Phienbang'].' và hệ điều hành '.$row['HDH'].'.</p>
			<p style="font-size: 12px; padding-left: 24px;color: #4B4B4B;padding-top: 10px;">Đặt biệt có màn hình '.$row['Manhinh'].', camera trước '.$row['Cameratruoc'].', camera sau '.$row['Camerasau'].' và bộ nhớ trong '.$row['Bonhotrong'].'.</p>
		</div>';
				}
				else if($tinhtrang==1)
				{
					echo '<div id="myNav" style="height: 500px;
				width: 1223px;												
				margin-left: 140px;
				background-color: white;
				overflow-x: hidden;
				transition: 0.5s;" class="cthoadon">
			<form id="form1" name="form1" method="post" action="cart.php?view=cart&id='.$id.'">
			<img src="'.$img.'" width="350" height="350" style="float: left;margin-right: 20px; padding-left: 10px; padding-top: 10px;">
			<strong><p style="float: left; font-size: 25px; padding-top: 20px; color: #454343">'.$ten.'</p></strong>
			<br>
			<br>
			<br>
			<div class="rating" style="color: #FF7E00">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
			</div>
			<span style="font-size:10px;">999 reviews</span>
			<br>
			<br>
			<span style="font-size:12px;">Giá cũ: </span><strike>19.110.000VNĐ</strike>
			<br>
			<br>
			<p style="float: left; font-size: 25px; padding-top: 10px; color: #454343">Giá hiện tại: '.$gia.'0.000 VNĐ</p>
			<br>
			<br>
			<br>
			<p>100% hàng <strong>CHẤT LƯỢNG</strong>, đảm bảo <strong>UY TÍN</strong>!</p>
			<br>		  
			<p>Tình trạng: <span style="color:green">Còn hàng</span></p>
			<br>
			<br>
		  <p>
			<input type="submit" name="nut" id="nutthemgio" value="Thêm vào giỏ hàng" style="width:150px; height: 35px;background: #FFA400; color: white;">			
		  </p>
			</form>
			<br>
			<br>
			<hr>
			<br>
			<strong><p style="font-size: 25px; padding-left: 20px;color: #4B4B4B;">Thông tin chi tiết SẢN PHẨM</p></strong>
			<p style="font-size: 12px; padding-left: 24px;color: #4B4B4B;padding-top: 10px;">Điện thoại nhãn hiệu '.$row['Nhanhieu'].' có phiên bảng '.$row['Phienbang'].' và hệ điều hành '.$row['HDH'].'.</p>
			<p style="font-size: 12px; padding-left: 24px;color: #4B4B4B;padding-top: 10px;">Đặt biệt có màn hình '.$row['Manhinh'].', camera trước '.$row['Cameratruoc'].', camera sau '.$row['Camerasau'].' và bộ nhớ trong '.$row['Bonhotrong'].'.</p>
		</div>';
				}
				}
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function editsp($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];										
					$nhanhieu = $row['Nhanhieu'];
					$phienban = $row['Phienbang'];					
					$gia = $row['Gia'];
					$hdh = $row['HDH'];
					$manhinh = $row['Manhinh'];
					$camerasau = $row['Camerasau'];
					$cameratrc = $row['Cameratruoc'];
					$bnho = $row['Bonhotrong'];
					$img = $row['img'];
					echo '<div class="row" style="width: 700px;height: auto; margin-left: -100px;margin-top:-180px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN SẢN PHẨM</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="ID sản phẩm" value="'.$id.'">
            <label for="name">Tên sản phẩm</label>
            <input type="text" id="name" name="name" placeholder="Tên sản phẩm" value="'.$ten.'">
            <label for="brand">Nhãn hiệu</label>
            <input type="text" id="brand" name="brand" placeholder="Nhãn hiệu" value="'.$nhanhieu.'">
            <label for="phienbang">Phiên bảng</label>
            <input type="text" id="phienbang" name="phienbang" placeholder="Phiên bảng" value="'.$phienban.'">
			<label for="bonhotrong">Bộ nhớ trong</label>
            <input type="text" id="bonhotrong" name="bonhotrong" placeholder="Bộ nhớ trong" value="'.$bnho.'">
			<label for="img">Hình ảnh</label>
            <input type="text" id="img" name="img" placeholder="Link hình ảnh" value="'.$img.'">
          </div>

          <div class="col-50">
			<br><br>					
            <label for="price">Giá</label>
            <input type="text" id="price" name="price" placeholder="Giá" value="'.$gia.'0.000">
            <label for="hdh">Hệ điều hành</label>
            <input type="text" id="hdh" name="hdh" placeholder="Hệ điều hành" value="'.$hdh.'">
            <label for="manhinh">Màn hình</label>
            <input type="text" id="screen" name="screen" placeholder="Màn hình" value="'.$manhinh.'">
            <label for="cameratruoc">Camera trước</label>
            <input type="text" id="cameratruoc" name="cameratruoc" placeholder="Camera trước" value="'.$cameratrc.'">
			<label for="camerasau">Camera sau</label>
            <input type="text" id="camerasau" name="camerasau" placeholder="Camera sau" value="'.$camerasau.'">
			<label for="sl">Số lượng</label>
            <input type="text" id="sl" name="sl" placeholder="Số lượng">
          </div>
          
        </div>        
        <input type="submit" name="nut" value="Sửa sản phẩm" class="btn">
		<input type="submit" value="Thoát" class="btn">				  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function edituser($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$user = $row['Username'];										
					$pass = $row['Password'];
					$hodem = $row['hodem'];
					$ten = $row['ten'];
					$quyen = $row['Phanquyen'];										
					echo '<div class="row" style="width: 700px;height: auto; margin-left: -40px;margin-top:-200px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN ACCOUNT</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="'.$id.'">
            <label for="name">Username</label>
            <input type="text" id="name" name="username" value="'.$user.'">
            <label for="brand">Password</label>
            <input type="text" id="brand" name="password" value="'.$pass.'">
			<label for="brand">Họ đệm</label>
            <input type="text" id="brand" name="hodem" value="'.$hodem.'">
			<label for="brand">Tên</label>
            <input type="text" id="brand" name="ten" value="'.$ten.'">
            <label for="phienbang">Phân quyền</label>
            <input type="text" id="phienbang" name="phanquyen" placeholder="Quyền 1 (Nhân viên) - Quyền 2 (Admin)" value="'.$quyen.'">			
          </div>          
          
        </div>        
        <input type="submit" name="nut" value="Sửa user" class="btn">
		<input type="submit" value="Thoát" class="btn">			  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function editsuancc($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$user = $row['TenNCC'];										
					$pass = $row['Diachi'];
					$quyen = $row['SDT'];										
					echo '<div class="row" style="width: 700px;height: auto; margin-left: 400px;margin-top:-50px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN NHÀ CUNG CẤP</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="'.$id.'">
            <label for="name">Tên nhà cung cấp</label>
            <input type="text" id="name" name="name" placeholder="Tên nhà cung cấp" value="'.$user.'">
            <label for="brand">Địa chỉ</label>
            <input type="text" id="brand" name="diachi" placeholder="Địa chỉ" value="'.$pass.'">
            <label for="phienbang">SĐT</label>
            <input type="text" id="phienbang" name="sdt" placeholder="Số điện thoại" value="'.$quyen.'">			
			</div>                    
        </div>        
        <input type="submit" name="nut" value="Sửa NCC" class="btn">
		<input type="submit" value="Thoát" class="btn">		  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function editsuakh($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['IDKH'];
					$user = $row['TenKH'];										
					$pass = $row['Diachi'];
					$quyen = $row['SDT'];										
					echo '<div class="row" style="width: 700px;height: auto; margin-left: 400px;margin-top:-60px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN KHÁCH HÀNG</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="ID khách hàng" value="'.$id.'">
            <label for="name">Tên khách hàng</label>
            <input type="text" id="name" name="name" placeholder="Tên khách hàng" value="'.$user.'">
            <label for="diachi">Địa chỉ</label>
            <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ" value="'.$pass.'">
            <label for="sdt">Số điện thoại</label>
            <input type="text" id="sdt" name="sdt" placeholder="Số điện thoại" value="'.$quyen.'">
          </div>         
          
        </div>        
        <input type="submit" name="nut" value="Sửa KH" class="btn">
		<input type="submit" value="Thoát" class="btn">			  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function btnedituser($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$user = $row['Username'];										
					$pass = $row['Password'];
					$quyen = $row['Phanquyen'];										
					echo '<div class="row" style="width: 700px;height: auto; margin:auto; margin-left:400px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN ACCOUNT</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="'.$id.'">
            <label for="name">Username</label>
            <input type="text" id="name" name="username" value="'.$user.'">
            <label for="brand">Password</label>
            <input type="text" id="brand" name="password" value="'.$pass.'">
            <label for="phienbang">Phân quyền</label>
            <input type="text" id="phienbang" name="phanquyen" placeholder="Quyền 1 (Nhân viên) - Quyền 2 (Admin)" value="'.$quyen.'">			
          </div>          
          
        </div>        
        <input type="submit" name="nut" value="Sửa user" class="btn">
		<input type="submit" value="Thoát" class="btn">			  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function btneditncc($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$user = $row['TenNCC'];										
					$pass = $row['Diachi'];
					$quyen = $row['SDT'];
					echo '<div class="row" style="width: 700px;height: auto; margin-left: -100px;margin-top:-160px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN NHÀ CUNG CẤP</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="'.$id.'">
            <label for="name">Tên nhà cung cấp</label>
            <input type="text" id="name" name="name" placeholder="Tên nhà cung cấp" value="'.$user.'">
            <label for="brand">Địa chỉ</label>
            <input type="text" id="brand" name="diachi" placeholder="Địa chỉ" value="'.$pass.'">
            <label for="phienbang">SĐT</label>
            <input type="text" id="phienbang" name="sdt" placeholder="Số điện thoại" value="'.$quyen.'">			
			</div>                    
        </div>        
        <input type="submit" name="nut" value="Sửa NCC" class="btn">
		<input type="submit" value="Thoát" class="btn">				  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function btneditkh($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['IDKH'];
					$user = $row['TenKH'];										
					$pass = $row['Diachi'];
					$quyen = $row['SDT'];
					echo '<div class="row" style="width: 700px;height: auto; margin-left:-40px;margin-top:-160px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN KHÁCH HÀNG</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="ID khách hàng" value="'.$id.'">
            <label for="name">Tên khách hàng</label>
            <input type="text" id="name" name="name" placeholder="Tên khách hàng" value="'.$user.'">
            <label for="diachi">Địa chỉ</label>
            <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ" value="'.$pass.'">
            <label for="sdt">Số điện thoại</label>
            <input type="text" id="sdt" name="sdt" placeholder="Số điện thoại" value="'.$quyen.'">
          </div>         
          
        </div>        
        <input type="submit" name="nut" value="Sửa KH" class="btn">
		<input type="submit" value="Thoát" class="btn" onClick="thoat()">				  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function editsua($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];										
					$nhanhieu = $row['Nhanhieu'];
					$phienban = $row['Phienbang'];					
					$gia = $row['Gia'];
					$hdh = $row['HDH'];
					$manhinh = $row['Manhinh'];
					$camerasau = $row['Camerasau'];
					$cameratrc = $row['Cameratruoc'];
					$bnho = $row['Bonhotrong'];
					$img = $row['img'];
					echo '<div class="row" style="width: 700px;height: auto; margin-left: 400px;margin-top:-120px; z-index: 3;position: fixed;" id="addsp">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
			<strong>THÔNG TIN SẢN PHẨM</strong>			
			<br><br>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="ID sản phẩm" value="'.$id.'">
            <label for="name">Tên sản phẩm</label>
            <input type="text" id="name" name="name" placeholder="Tên sản phẩm" value="'.$ten.'">
            <label for="brand">Nhãn hiệu</label>
            <input type="text" id="brand" name="brand" placeholder="Nhãn hiệu" value="'.$nhanhieu.'">
            <label for="phienbang">Phiên bảng</label>
            <input type="text" id="phienbang" name="phienbang" placeholder="Phiên bảng" value="'.$phienban.'">
			<label for="bonhotrong">Bộ nhớ trong</label>
            <input type="text" id="bonhotrong" name="bonhotrong" placeholder="Bộ nhớ trong" value="'.$bnho.'">
			<label for="img">Hình ảnh</label>
            <input type="text" id="img" name="img" placeholder="Link hình ảnh" value="'.$img.'">
          </div>

          <div class="col-50">
			<br><br>					
            <label for="price">Giá</label>
            <input type="text" id="price" name="price" placeholder="Giá" value="'.$gia.'0.000">
            <label for="hdh">Hệ điều hành</label>
            <input type="text" id="hdh" name="hdh" placeholder="Hệ điều hành" value="'.$hdh.'">
            <label for="manhinh">Màn hình</label>
            <input type="text" id="screen" name="screen" placeholder="Màn hình" value="'.$manhinh.'">
            <label for="cameratruoc">Camera trước</label>
            <input type="text" id="cameratruoc" name="cameratruoc" placeholder="Camera trước" value="'.$cameratrc.'">
			<label for="camerasau">Camera sau</label>
            <input type="text" id="camerasau" name="camerasau" placeholder="Camera sau" value="'.$camerasau.'">
			<label for="sl">Số lượng</label>
            <input type="text" id="sl" name="sl" placeholder="Số lượng">
          </div>
          
        </div>        
        <input type="submit" name="nut" value="Sửa sản phẩm" class="btn">
		<input type="submit" value="Thoát" class="btn">				  
      </form>
    </div>
  </div> 
</div>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function tableuser($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$user = $row['Username'];					
					$pass = $row['Password'];
					$hodem = $row['hodem'];
					$ten = $row['ten'];
					$phanquyen = $row['Phanquyen'];					
					echo '<form id="form1" name="form1" method="post" action="Admin-account.php?view=Admin-account&id='.$id.'">
						<tr>
						  <td>'.$id.'</td>
						  <td>'.$user.'</td>
						  <td>'.$pass.'</td>
						  <td>'.$hodem.'</td>
						  <td>'.$ten.'</td>
						  <td>'.$phanquyen.'</td>						  
						  <td>						  	
							<input type="submit" id="nut" name="nut" value="Xóa">							
						  </td>
						</tr>
						</form>';
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablenhaphang($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ngaynhap = $row['Ngaynhap'];					
					$idncc = $row['IDNCC'];
					$idsp = $row['IDSP'];
					$sl = $row['SL'];
					echo '<form id="form1" name="form1" method="post" action="Admin-nhaphang.php?view=Admin-nhaphang&id='.$id.'">
						<tr>
						  <td>'.$id.'</td>
						  <td>'.$ngaynhap.'</td>
						  <td>'.$idncc.'</td>						  
						  <td>
						  	<input type="button" id="nut" name="nut" value="Nhập" onClick="nhapctnhap()">
							<input type="submit" id="nut" name="nut" value="Xóa">
							<input type="submit" id="nut" name="nut" value="Sửa">
							<input type="submit" id="nut" name="nut" value="Xem">
						  </td>
						</tr>
						</form>';
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablekhachhang($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['IDKH'];
					$ten = $row['TenKH'];					
					$diachi = $row['Diachi'];
					$sdt = $row['SDT'];					
					echo '<form id="form1" name="form1" method="post" action="Admin-customer.php?view=Admin-customer&id='.$id.'">
						<tr>
						  <td>'.$id.'</td>
						  <td>'.$ten.'</td>
						  <td>'.$diachi.'</td>
						  <td>'.$sdt.'</td>						  
						  <td>						  	
							<input type="submit" id="nut" name="nut" value="Xóa">
							<input type="submit" id="nut" name="nut" value="Edit">
						  </td>
						</tr>
						</form>';
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablencc($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenNCC'];					
					$diachi = $row['Diachi'];
					$sdt = $row['SDT'];					
					echo '<form id="form1" name="form1" method="post" action="Admin-ncc.php?view=Admin-ncc&id='.$id.'">
						<tr>
						  <td>'.$id.'</td>
						  <td>'.$ten.'</td>
						  <td>'.$diachi.'</td>
						  <td>'.$sdt.'</td>						  
						  <td>						  	
							<input type="submit" id="nut" name="nut" value="Xóa">
							<input type="submit" id="nut" name="nut" value="Edit">
						  </td>
						</tr>
						</form>';
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablehoadon($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ngaylap = $row['Ngaynhap'];
					$idnv = $row['IDNV'];
					$idkh = $row['IDKH'];
					$tinhtrang = $row['Tinhtrang'];
					$tongtien = $row['Tongtien'];
					if($tinhtrang==0)
					{
						echo '<form id="form1" name="form1" method="post" action="Admin-donhang.php?view=Admin-donhang&id='.$id.'">
							<tr>
							  <td>'.$id.'</td>
							  <td>'.$ngaylap.'</td>
							  <td>'.$idnv.'</td>
							  <td>'.$idkh.'</td>
							  <td>Chưa xử lý</td>
							  <td>'.$tongtien.'0.000VNĐ</td>						  
							  <td>						  	
								<input type="submit" id="nut" name="nut" value="Xử lý">							
								<input type="submit" id="nut" name="nut" value="Xóa">							
								<input type="submit" id="nut" name="nut" value="Xem">
							  </td>
							</tr>
							</form>';
					}
					else
					{
						echo '<form id="form1" name="form1" method="post" action="Admin-donhang.php?view=Admin-donhang&id='.$id.'">
							<tr>
							  <td>'.$id.'</td>
							  <td>'.$ngaylap.'</td>
							  <td>'.$idnv.'</td>
							  <td>'.$idkh.'</td>
							  <td>Đã xử lý</td>
							  <td>'.$tongtien.'0.000VNĐ</td>						  
							  <td>						  	
								<input type="submit" id="nut" name="nut" value="Xử lý">							
								<input type="submit" id="nut" name="nut" value="Xóa">							
								<input type="submit" id="nut" name="nut" value="Xem">
							  </td>
							</tr>
							</form>';
					}
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablehoadonnv($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ngaylap = $row['Ngaylap'];
					$idnv = $row['IDNV'];
					$idkh = $row['IDKH'];
					$tinhtrang = $row['Tinhtrang'];
					$tongtien = $row['Tongtien'];
					if($tinhtrang==0)
					{
						echo '<form id="form1" name="form1" method="post" action="Nhanvien-hoadon.php?view=Nhanvien-hoadon&id='.$id.'">
							<tr>
							  <td>'.$id.'</td>
							  <td>'.$ngaylap.'</td>
							  <td>'.$idnv.'</td>
							  <td>'.$idkh.'</td>
							  <td>Chưa xử lý</td>
							  <td>'.$tongtien.'0.000VNĐ</td>						  
							  <td>						  	
								<input type="submit" id="nut" name="nut" value="Xử lý">							
								<input type="submit" id="nut" name="nut" value="Xóa">							
								<input type="submit" id="nut" name="nut" value="Xem">
							  </td>
							</tr>
							</form>';
					}
					else
					{
						echo '<form id="form1" name="form1" method="post" action="Nhanvien-hoadon.php?view=Nhanvien-hoadon&id='.$id.'">
							<tr>
							  <td>'.$id.'</td>
							  <td>'.$ngaylap.'</td>
							  <td>'.$idnv.'</td>
							  <td>'.$idkh.'</td>
							  <td>Đã xử lý</td>
							  <td>'.$tongtien.'0.000VNĐ</td>						  
							  <td>						  	
								<input type="submit" id="nut" name="nut" value="Xử lý">							
								<input type="submit" id="nut" name="nut" value="Xóa">							
								<input type="submit" id="nut" name="nut" value="Xem">
							  </td>
							</tr>
							</form>';
					}
				}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function tablesanpham($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					$nhanhieu = $row['Nhanhieu'];
					$phienbang = $row['Phienbang'];
					$gia = $row['Gia'];
					$hdh = $row['HDH'];
					$manhinh = $row['Manhinh'];
					$camerasau = $row['Camerasau'];
					$cameratruoc = $row['Cameratruoc'];
					$bonhotrong = $row['Bonhotrong'];
					$img = $row['img'];					
					echo '
						<form id="form1" name="form1" method="post" action="Admin-goods.php?view=Admin-goods&id='.$id.'">
						<tr>
						  <td>'.$id.'</td>
						  <td>'.$ten.'</td>
						  <td>'.$nhanhieu.'</td>
						  <td>'.$phienbang.'</td>
						  <td>'.$gia.'0.000VNĐ</td>
						  <td>'.$hdh.'</td>
						  <td>'.$manhinh.'</td>
						  <td>'.$camerasau.'</td>
						  <td>'.$cameratruoc.'</td>
						  <td>'.$bonhotrong.'</td>
						  <td><img src="'.$img.'" width="100px" height="100px"></td>						  
						  <td>						  	
							<input type="submit" id="nut" name="nut" value="Xóa">
							<input type="submit" id="nut" name="nut" value="Edit">
						  </td>
						</tr>
						</form>
					  ';
					}								
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}			
		}
		function selectlichsugiaodich($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{	
				$dem=1;
				while($row=mysqli_fetch_array($ketqua))
				{
					echo '<tr>';
					$id = $row['ID'];
					$ngay = $row['Ngaynhap'];					
					$idkh = $row['IDKH'];
					$idnv = $row['IDNV'];
					$tinhtrang = $row['Tinhtrang'];
					$tongtien = $row['Tongtien'];
					if($tinhtrang == 0)
					{
						echo '
							<td>'.$dem++.'</td>
							<td>'.$ngay.'</td>
							<td>'.$id.'</td>
							<td>'.$idnv.'</td>';
						echo '<td>';
							$sqlkh="select * from khachhang where IDKH='$idkh'";
							$kq = mysqli_query($sqlkh,$link);
							$j = mysqli_num_rows($kq); 
							if($j>0)
							{
								while($rowkh=mysqli_fetch_array($kq))
								{
									$ten=$rowkh['TenKH'];
									$diachi=$rowkh['Diachi'];							
									$sdt=$rowkh['SDT'];
									echo 'Khách hàng: '.$ten.'<br>
										 Địa chỉ: '.$diachi.'<br>
										 SĐT: '.$sdt.'
									';
								}
							}
						echo '</td>';
						echo '<td>';
							$sqlsp="select * from cthoadon where IDHD='$id'";
							$kqsp = mysqli_query($sqlsp,$link);
							$z = mysqli_num_rows($kq); 
							if($z>0)
							{
								while($rowsp=mysqli_fetch_array($kqsp))
								{
									$idsp=$rowsp['IDSP'];
									$sl = $rowsp['SL'];
									$sqls="select * from sanpham where ID='$idsp'";
									$kqs = mysqli_query($sqls,$link);
									$k = mysqli_num_rows($kq); 
									if($k>0)
									{
										while($rows=mysqli_fetch_array($kqs))
										{											
											$ten = $rows['TenSP'];
											echo '<p>';
											echo $ten; 
											echo ' - Số lượng: ';
											echo $sl;
											echo '</p>';
										}
									}									
								}
							}
						echo '</td>';
						echo '<td>'.$tongtien.'0.000VNĐ</td>
								<td>Chưa xử lý</td>';
					}
					else if($tinhtrang == 1)
					{
						echo '
							<td>'.$dem++.'</td>
							<td>'.$ngay.'</td>
							<td>'.$id.'</td>
							<td>'.$idnv.'</td>';
						echo '<td>';
							$sqlkh="select * from khachhang where IDKH='$idkh'";
							$kq = mysqli_query($sqlkh,$link);
							$j = mysqli_num_rows($kq); 
							if($j>0)
							{
								while($rowkh=mysqli_fetch_array($kq))
								{
									$ten=$rowkh['TenKH'];
									$diachi=$rowkh['Diachi'];							
									$sdt=$rowkh['SDT'];
									echo 'Khách hàng: '.$ten.'<br>
										 Địa chỉ: '.$diachi.'<br>
										 SĐT: '.$sdt.'
									';
								}
							}
						echo '</td>';
						echo '<td>';
							$sqlsp="select * from cthoadon where IDHD='$id'";
							$kqsp = mysqli_query($sqlsp,$link);
							$z = mysqli_num_rows($kq); 
							if($z>0)
							{
								while($rowsp=mysqli_fetch_array($kqsp))
								{
									$idsp=$rowsp['IDSP'];
									$sl = $rowsp['SL'];
									$sqls="select * from sanpham where ID='$idsp'";
									$kqs = mysqli_query($sqls,$link);
									$k = mysqli_num_rows($kq); 
									if($k>0)
									{
										while($rows=mysqli_fetch_array($kqs))
										{											
											$ten = $rows['TenSP'];
											echo '<p>';
											echo $ten; 
											echo ' - Số lượng: ';
											echo $sl;
											echo '</p>';
										}
									}									
								}
							}
						echo '</td>';
						echo '<td>'.$tongtien.'0.000VNĐ</td>
								<td>Đã xử lý</td>';
					}
				echo '</tr>';
				}						
			}
		}
		function select($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					echo '<option value="'.$id.'">'.$id.' - '.$ten.'</option>';
					}								
			}						
		}
		function selectthongke($sql,$thang) {			
			$link = $this->connect();
			if($thang<10)
			{
				$ketqua = mysqli_query($sql,$link);
				$i = mysqli_num_rows($ketqua);
				if($i>0)
				{					
					while($row=mysqli_fetch_array($ketqua))
					{
						echo '<tr>';
						$idnv=$row['ID'];
						$ten =$row['ten'];
						$hodem=$row['hodem'];
						echo '<td>'.$idnv.'</td>';
						echo '<td>'.$hodem.' '.$ten.'</td>';
						echo '<td>Tháng '.$thang.'</td>';
						$sqlhd = "select * from hoadon where IDNV='$idnv' and Ngaynhap like '%-$thang-%'";
						$kq = mysqli_query($sqlhd,$link);
						$j = mysqli_num_rows($kq);
						if($j>0)
						{
							$dem=0;
							$demsl=0;
							while($rowhd=mysqli_fetch_array($kq))
							{
								$idhd=$rowhd['ID'];
								$tongtien = $rowhd['Tongtien'];
								$dem = $dem + $tongtien;								
								$sqlct = "select * from cthoadon where IDHD='$idhd'";
								$kqua = mysqli_query($sqlct,$link);
								$z = mysqli_num_rows($kqua);
								if($z>0)
								{								
									while($rowz=mysqli_fetch_array($kqua))
									{
										$sl = $rowz['SL'];
										$demsl= $demsl + $sl;								
									}								
								}							
							}
							echo '<td>'.$demsl.'</td>';
							echo '<td>'.$dem.'0.000VNĐ</td>';						
							echo '</tr>';
						}												
						else
						{
							$dem=0;
							$demsl=0;
							while($rowhd=mysqli_fetch_array($kq))
							{
								$idhd=$rowhd['ID'];
								$tongtien = $rowhd['Tongtien'];
								$dem = $dem + $tongtien;
								$sqlct = "select * from cthoadon where IDHD='$idhd'";
								$kqua = mysqli_query($sqlct,$link);
								$z = mysqli_num_rows($kqua);
								if($z>0)
								{								
									while($rowz=mysqli_fetch_array($kqua))
									{
										$sl = $rowz['SL'];
										$demsl= $demsl + $sl;								
									}								
								}							
							}						
							echo '<td style="text-align:center">-</td>';
							echo '<td style="text-align:center">-</td>';							
							echo '</tr>';
						}
					}
					
				}				
			}
			else if($thang>=10)
			{
				$ketqua = mysqli_query($sql,$link);
				$i = mysqli_num_rows($ketqua);
				if($i>0)
				{				
					while($row=mysqli_fetch_array($ketqua))
					{
						echo '<tr>';
						$idnv=$row['ID'];
						$ten =$row['ten'];
						$hodem=$row['hodem'];
						echo '<td>'.$idnv.'</td>';
						echo '<td>'.$hodem.' '.$ten.'</td>';
						echo '<td>Tháng '.$thang.'</td>';
						$sqlhd = "select * from hoadon where IDNV='$idnv' and Ngaynhap like '%-$thang-%'";
						$kq = mysqli_query($sqlhd,$link);
						$j = mysqli_num_rows($kq);
						if($j>0)
						{
							$dem=0;
							$demsl=0;
							while($rowhd=mysqli_fetch_array($kq))
							{
								$idhd=$rowhd['ID'];
								$tongtien = $rowhd['Tongtien'];
								$dem = $dem + $tongtien;
								$sqlct = "select * from cthoadon where IDHD='$idhd'";
								$kqua = mysqli_query($sqlct,$link);
								$z = mysqli_num_rows($kqua);
								if($z>0)
								{								
									while($rowz=mysqli_fetch_array($kqua))
									{
										$sl = $rowz['SL'];
										$demsl= $demsl + $sl;								
									}								
								}							
							}													
							echo '<td>'.$demsl.'</td>';
							echo '<td>'.number_format($dem, 0, ',', '.').'.000.000VNĐ</td>';
							echo '</tr>';
						}
						else
						{
							$dem=0;
							$demsl=0;
							while($rowhd=mysqli_fetch_array($kq))
							{
								$idhd=$rowhd['ID'];
								$tongtien = $rowhd['Tongtien'];
								$dem = $dem + $tongtien;
								$sqlct = "select * from cthoadon where IDHD='$idhd'";
								$kqua = mysqli_query($sqlct,$link);
								$z = mysqli_num_rows($kqua);
								if($z>0)
								{								
									while($rowz=mysqli_fetch_array($kqua))
									{
										$sl = $rowz['SL'];
										$demsl= $demsl + $sl;								
									}								
								}							
							}						
							echo '<td style="text-align:center">-</td>';
							echo '<td style="text-align:center">-</td>';
							echo '</tr>';
						}
						
					}

				}
			}
		}
		function selecttinhtrang($sql,$id) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{					
					$sl = $row['SL'];
					if($sl>0)
					{
						$sqlupdate="update sanpham set Tinhtrang='1' where ID='$id'";
						mysqli_query($sqlupdate,$link);
					}				
				}			
			}
			else
			{
				$sqlupdate="update sanpham set Tinhtrang='0' where ID='$id'";
				mysqli_query($sqlupdate,$link);
			}
		}
		function selectslkho($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{										
					$_SESSION['slkho'] = $row['SL'];
				}				
			}						
		}
		function selecthoadon($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{		
				$dem=0;
				while($row=mysqli_fetch_array($ketqua))
				{										
					$tong = $row['Tongtien'];
					$dem = $dem + $tong;
				}
				echo '<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Tổng doanh thu: </td>
							<td>'.number_format($dem, 0, ',', '.').'.000.000VNĐ</td>
						</tr>';
			}						
		}		
		function selectslton($sql,$soluong,$id) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{	
					if($soluong<=$_SESSION['slkho']+1)
					{
						if($soluong > $_SESSION['sol'])
						{
							$sl = $row['SL']+$_SESSION['slbd']-$soluong;					
							$sqlupdate="update ctnhaphang set SL='$sl' where IDSP='$id'";
							mysqli_query($sqlupdate,$link);
							$_SESSION['slbd'] = $soluong;
						}
						else if($soluong == 1)
						{
							$sl = $_SESSION['slkho']-1;					
							$sqlupdate="update ctnhaphang set SL='$sl' where IDSP='$id'";
							mysqli_query($sqlupdate,$link);
							$_SESSION['slbd'] = $soluong;
						}
						else
						{
							$sl = $_SESSION['slkho'] - $soluong;
							$sqlupdate="update ctnhaphang set SL='$sl' where IDSP='$id'";
							mysqli_query($sqlupdate,$link);
						}
					}
					else
					{
						$slkho = $_SESSION['slkho']+1;
						echo '<script>alert("Số lượng tồn chỉ còn '.$slkho.'")</script>';
					}
				}				
			}						
		}
		function selecthuycart($sql,$soluong,$id) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{					
					$sl = $row['SL']+$soluong-1;					
					$sqlupdate="update ctnhaphang set SL='$sl' where IDSP='$id'";
					mysqli_query($sqlupdate,$link);					
				}				
			}						
		}
		function selectnh($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];										
					echo '<option value="'.$id.'">'.$id.'</option>';
					}								
			}						
		}
		function selectncc($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenNCC'];
					echo '<option value="'.$id.'">'.$id.' - '.$ten.'</option>';
					}								
			}						
		}
		function ctnhaphang($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$idct = $row['IDCT'];
					$id = $row['ID'];	
					$idsp = $row['IDSP'];
					$sl = $row['SL'];
					$tongtien = $row['Tongtien'];
					echo '<form id="form1" name="form1" method="post" action="Admin-nhaphang.php?view=Admin-nhaphang&id='.$idct.'">
						<tr>
							<td>'.$idct.'</td>
						  <td>'.$id.'</td>
						  <td>'.$idsp.'</td>
						  <td>'.$sl.'</td>
						  <td>'.$tongtien.'0.000VNĐ</td>
						  <td><input type="submit" id="nut" name="nut" value="Xóa"></td>
						</tr>
						
						</form>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function cthoadon($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['IDHD'];	
					$idsp = $row['IDSP'];
					$sl = $row['SL'];					
					echo '<form id="form1" name="form1" method="post" action="Admin-donhang.php?view=Admin-donhang&id='.$id.'">
						<tr>							
						  <td>'.$id.'</td>
						  <td>'.$idsp.'</td>
						  <td>'.$sl.'</td>						  						  
						</tr>
						
						</form>';
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function locct($sql) {			
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];	
					$ngay = $row['Ngaynhap'];	
					$idkh = $row['IDKH'];	
					$idnv = $row['IDNV'];	
					$tinhtrang = $row['Tinhtrang'];					
					$tongtien = $row['Tongtien'];	
					if($tinhtrang == 1)
					{
						echo '<tr>
							<td>'.$id.'</td>
							<td>'.$ngay.'</td>
							<td>'.$idkh.'</td>
							<td>'.$idnv.'</td>
							<td>Đã xử lý</td>
							<td>'.$tongtien.'0.000VNĐ</td>
								</tr>';
					}
					else
					{
						echo '<tr>
							<td>'.$id.'</td>
							<td>'.$ngay.'</td>
							<td>'.$idkh.'</td>
							<td>'.$idnv.'</td>
							<td>Chưa xử lý</td>
							<td>'.$tongtien.'0.000VNĐ</td>
							</tr>';
					}
				}								
			}
			else
			{
				//echo 'Dang cap nhat du lieu';
			}			
		}
		function themvaogiohang($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];					
					$nhanhieu = $row['Nhanhieu'];
					$gia = $row['Gia'];
					$img = $row['img'];
					$cart = array(
						'ten' => $ten,
						'sl' => 1,
						'nhanhieu' => $nhanhieu,
						'gia' => $gia,
						'img' => $img
					);
				}
			}
			else
			{
				echo 'Dang cap nhat du lieu';
			}
		}		
		function addsp($id,$ten,$nhanhieu,$gia,$hdh,$manhinh,$camsau,$camtrc,$bnho,$img) 
		{
			$link = $this->connect();
			$sql = "insert into sanpham (ID,TenSP,Nhanhieu,Phienbang,Gia,HDH,Manhinh,Camerasau,Cameratruoc,Bonhotrong,img) 
					values ('$id',
							'$ten',
							'$nhanhieu',
							'$nhanhieu',
							'$gia',
							'$hdh',
							'$manhinh',
							'$camsau',
							'$camtrc',
							'$bnho',
							'$img')";
			mysqli_query($sql,$link);
		}
		function addphieunhap($id,$ngaynhap,$idncc) 
		{
			$link = $this->connect();
			$sql = "insert into nhaphang (ID,Ngaynhap,IDNCC) 
					values ('$id',
							'$ngaynhap',
							'$idncc')";
			mysqli_query($sql,$link);
		}
		function adduser($id,$user,$pass,$hodem,$ten,$quyen) 
		{
			$link = $this->connect();
			$sql = "insert into user (ID,Username,Password,hodem,ten,Phanquyen) 
					values ('$id',
							'$user',
							'$pass',
							'$hodem',
							'$ten',
							'$quyen')";
			mysqli_query($sql,$link);
		}
		function addctnhap($idct,$id,$idsp,$sl,$tongtien) 
		{
			$link = $this->connect();
			$sql = "insert into ctnhaphang (IDCT,ID,IDSP,SL,Tongtien) 
					values ('$idct',
							'$id',
							'$idsp',
							'$sl',
							'$tongtien')";
			mysqli_query($sql,$link);
		}
		function addncc($id,$ten,$diachi,$sdt) 
		{
			$link = $this->connect();
			$sql = "insert into ncc (ID,TenNCC,Diachi,SDT) 
					values ('$id',
							'$ten',
							'$diachi',
							'$sdt')";
			mysqli_query($sql,$link);
		}
		function addkh($id,$ten,$diachi,$sdt) 
		{
			$link = $this->connect();
			$sql = "insert into khachhang (IDKH,TenKH,Diachi,SDT) 
					values ('$id',
							'$ten',
							'$diachi',
							'$sdt')";
			mysqli_query($sql,$link);
		}
		function addkhachhang($ten,$diachi,$sdt,$idnv,$idhd) 
		{	
			$id = time();
			$_SESSION['idkhach'] = $id;			
			$date = date("Y-m-d");
			$link = $this->connect();
			$sql = "insert into khachhang (IDKH,TenKH,Diachi,SDT) 
					values ('$id',
							'$ten',
							'$diachi',
							'$sdt')";
			if(mysqli_query($sql,$link))
			{
				$tongtien=0;
				foreach($_SESSION['cart'] as $key => $value)
				{
					$tongtien = $tongtien + $value['price']*$value['quantily'];
				};
				$sqlhoadon = "insert into hoadon (ID,Ngaynhap,IDKH,IDNV,Tinhtrang,Tongtien) 
					values ('$idhd',
							'$date',
							'$id',
							'$idnv',
							'0',
							'$tongtien')";
					mysqli_query($sqlhoadon,$link);
				foreach($_SESSION['cart'] as $key => $value)
				{	if($value['id']!='')
					{
						$idsp = $value['id'];
						$sl = $value['quantily'];				
						$sqlcthoadon = "insert into cthoadon (IDHD,IDSP,SL) 
						values ('$idhd',
								'$idsp',
								'$sl')";
						mysqli_query($sqlcthoadon,$link);
					}
				}				
				echo '<script>alert("Đặt hàng thành công")</script>'; 			
			}
			else
			{
				echo '<script>alert("Không thành công")</script>'; 
			}
			
		}		
		function delete($id)
		{
			$link = $this->connect();
			$sql = "delete from sanpham where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deletenh($id)
		{
			$link = $this->connect();
			$sql = "delete from nhaphang where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deleteacc($id)
		{
			$link = $this->connect();
			$sql = "delete from user where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deletekh($id)
		{
			$link = $this->connect();
			$sql = "delete from khachhang where IDKH='$id'";
			mysqli_query($sql,$link);		
		}
		function deletencc($id)
		{
			$link = $this->connect();
			$sql = "delete from ncc where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deletecthd($id)
		{
			$link = $this->connect();
			$sql = "delete from cthoadon where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deletehd($id)
		{
			$link = $this->connect();
			$sql = "delete from hoadon where ID='$id'";
			mysqli_query($sql,$link);		
		}
		function deletectnh($id)
		{
			$link = $this->connect();
			$sql = "delete from ctnhaphang where IDCT='$id'";
			mysqli_query($sql,$link);		
		}
		function edit($id,$ten,$nhanhieu,$phienbang,$gia,$hdh,$manhinh,$camerasau,$cameratruoc,$bonho,$img)
		{
			$link = $this->connect();
			$sql = "update sanpham set 
						TenSP='$ten', 			
						Nhanhieu='$nhanhieu', 
						Phienbang='$phienbang',						
						Gia='$gia', 
						HDH='$hdh',
						Manhinh='$manhinh',
						Camerasau='$camerasau',
						Cameratruoc='$cameratruoc',
						Bonhotrong='$bonho',						
						img='$img'  
					where ID='$id'";
			mysqli_query($sql,$link);
		}		
		function editacc($id,$ten,$nhanhieu,$hodem,$tennv,$phienbang)
		{
			$link = $this->connect();
			$sql = "update user set 
						Username='$ten',
						Password='$nhanhieu',
						hodem='$hodem',
						ten='$tennv',
						Phanquyen='$phienbang'
					where ID='$id'";
			mysqli_query($sql,$link);
		}
		function xuly($id)
		{
			$link = $this->connect();
			$sql = "update hoadon set 
						Tinhtrang='1'
					where ID='$id'";
			mysqli_query($sql,$link);
		}
		function editncc($id,$ten,$nhanhieu,$phienbang)
		{
			$link = $this->connect();
			$sql = "update ncc set 
						TenNCC='$ten',
						Diachi='$nhanhieu',
						SDT='$phienbang'
					where ID='$id'";
			mysqli_query($sql,$link);
		}
		function editkh($id,$ten,$nhanhieu,$phienbang)
		{
			$link = $this->connect();
			$sql = "update khachhang set 
						TenKH='$ten',
						Diachi='$nhanhieu',
						SDT='$phienbang'
					where IDKH='$id'";
			mysqli_query($sql,$link);
		}
		function checkaccount($user,$pass) {			
			$link = $this->connect();
			$sql="select * from user";
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$username = $row['Username'];
					$password = $row['Password'];
					$quyen = $row['Phanquyen'];
					$ten = $row['ten'];			
					if($user == $username && $pass == $password)
					{
						session_start();
						$_SESSION['myuser'] = $user;
						$_SESSION['mypass'] = $pass;
						$_SESSION['myid'] = $id;
						$_SESSION['myten'] = $ten;
						echo '<script>
									document.getElementById("showregbtn").style.display="none";
									document.getElementById("nutdangxuat").style.display="block";
							</script>';
						if($quyen==2)
						{
							echo '<script>document.getElementById("admin").style.display="block";</script>';
							return 1;
						}
						else if($quyen==1)
						{	
							echo '<script>
									document.getElementById("khungten").style.display="block";
									document.getElementById("tenkhach").innerHTML = "Chào '.$user.'";
								</script>';
							return 1;
						}						
					}					
				}
				if($user == "0" && $pass == "0")
				{
					echo '<script>document.getElementById("showregbtn").style.display="block";</script>';
					echo '<script>document.getElementById("nutdangxuat").style.display="none";</script>';
				}
			}					
		}
		function checkaccountlogin($user,$pass) {			
			$link = $this->connect();
			$sql="select * from user";
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$username = $row['Username'];
					$password = $row['Password'];
					$quyen = $row['Phanquyen'];
					if($user == $username && $pass == $password)
					{												
						if($quyen!=2)
						{
							header("Location: trangchu.php");			
						}						
					}
				}
			}					
		}
		function checkaccountloginnv($user,$pass) {			
			$link = $this->connect();
			$sql="select * from user";
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$username = $row['Username'];
					$password = $row['Password'];
					$quyen = $row['Phanquyen'];
					if($user == $username && $pass == $password)
					{												
						if($quyen!=1)
						{
							header("Location: trangchu.php");			
						}						
					}
				}
			}					
		}
		function confirmlogin($user,$pass) {			
			$link = $this->connect();
			$sql="select * from user";
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{			
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$username = $row['Username'];
					$password = $row['Password'];
					$quyen = $row['Phanquyen'];
					if($user == $username && $pass == $password)
					{
						
					}
				}
				if($user == "0" && $pass == "0")
				{					
				}
			}					
		}		
		function inbaocao()
		{
			$link = $this->connect();
			$sql="select * from sanpham where Tinhtrang='0'";
			$ketqua = mysqli_query($sql,$link);
			$i = mysqli_num_rows($ketqua);
			if($i>0)
			{	$pos=1;		
				while($row=mysqli_fetch_array($ketqua))
				{
					$id = $row['ID'];
					$ten = $row['TenSP'];
						echo "<tr>";
						echo "<td class=\"cotSTT\">".$pos++."</td>";
						echo "<td class=\"cotTenSanPham\">".$id."</td>";
						echo "<td class=\"cotTenSanPham\">".$ten."</td>";
						echo "</tr>";
				}
			}
		}
	}
?>