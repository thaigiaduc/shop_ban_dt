
function showFull(){
  var url = document.location.href;
  var temp = url.split("?");
  var s='';
  var productArray = JSON.parse(localStorage.getItem('product'));
  if(temp[1]=='' || temp[1]==undefined || temp[1].search('all')==0){
    if(temp[1]=='' || temp[1]==undefined){
      temp = 'all&0';
    }
    else{
      temp = temp[1];
    }
    var temp2 = temp.split("&");
    var vitri = temp2[1];
    var sotrang=0,dem=0;
    for(var i = vitri;i < productArray.length; i++){
    s =s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4 style="text-align: center">'+
    productArray[i].name+'</h4>'+'<p style="text-align: center; color: red;">'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet" style="text-align: center; color: black">'
    +"Chi tiết"+'</p></div>';
      dem++;
      if(dem==10)
        break;
    }
    sotrang=Math.ceil(productArray.length/10);
    var lienket='';
    for(var i = 1;i<=sotrang;i++){
      vitri=(i-1)*10;
      var a ='<a href="index.html?all&'+vitri+'">'+i+'</a>';
      lienket+='<div class="sotrang">'+a+'</div>';
    }
    document.getElementById('phantrang').innerHTML=lienket;
  }
  else{
    temp = temp[1]; 
    var temp2 = temp.split("&");
    var brand = temp2[0];
    var vitri = temp2[1];
    var sotrang=0,dem=0;
    var arrtempt=[];
    var title="";
    console.log(brand);
    for(var i=0; i<productArray.length;i++){
      if(brand==productArray[i].brand){
        arrtempt.push(productArray[i]);

    	}
    }

    title=title+'<h3>'+brand.toUpperCase();+'</h3>';
     
    for(var i = vitri;i < arrtempt.length; i++){
    s =s + '<div class="card"><img src="./Image/'+arrtempt[i].img+'" class="cardimg"> <h4>'+
    arrtempt[i].name+'</h4>'+'<p>'+currency(arrtempt[i].price)+'</p>'+
    '<p onclick="showdetail('+arrtempt[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
      dem++;
      if(dem==10)
        break;
    }
    sotrang=Math.ceil(arrtempt.length/10);
    var lienket='';
    for(var i = 1;i<=sotrang;i++){
      vitri=(i-1)*10;
      var a ='<a href="index.html?'+brand+'&'+vitri+'">'+i+'</a>';
      lienket+='<div class="sotrang">'+a+'</div>';
    }
    document.getElementById('phantrang').innerHTML=lienket;
    document.getElementById('title').innerHTML=title;
  }
  document.getElementById('sanpham').innerHTML=s;
  	
}
function nextPage(index){
  showFull(index);
}

//thông tin chi tiết
function showdetail(showproductid){
	var x= document.getElementById("khungtovcl-detail");
	var y= document.getElementById("detail-box");
	var productArray = JSON.parse(localStorage.getItem('product'));
	var s = "";
	x.style.display = "block";
    y.style.display = "block";
	for(var i = 0;i < productArray.length; i++){
		if(productArray[i].productId==showproductid){
			s=s+'<div id="product-title">'+productArray[i].name+'<img src="./Image/hinh/x.png" class="xbtn" onclick="offdetail()" style="margin-top:10px;"></div><div id="product-content"><div id="product-img"><img src="./Image/'+productArray[i].img+'" style="width: 100%; height: 100%;"></div><div id="product-detail"><h3 style="font-size: 30px; padding-top: 10px">'+productArray[i].name+'</h3><h2 id="detail-currency">'+currency(productArray[i].price)+'</h2><h6 id="detail-status">Tình trạng: <li style="color:green; list-style-type: none">'+productArray[i].status+'</li></h6><div id="product-cart"> <span><button style="width:20px; height:30px; z-index: 1; margin-left: 55px" onclick="tru()" > - </button></span> <span><input style="width: 60px; height: 30px; margin: 10px -7px; z-index: 2; text-align: center;" type="number" id="quatity" name="quatity" value="0"></span> <span><button style="width:20px; height:30px; z-index: 1" onclick="cong();">+</button></span> <span ><button style="margin-top: 10px; margin-bottom: -20px"type="submit" id="addtocart" onclick="addtocart('+productArray[i].productId+');">THÊM VÀO GIỎ HÀNG</button></span> </div><table><tr><th>'+productArray[i].title1+'</th><td>'+productArray[i].detail1+'</td></tr><th>'+productArray[i].title2+'</th><td>'+productArray[i].detail2+'</td><tr><th>'+productArray[i].title3+'</th><td>'+productArray[i].detail3+'</td></tr><tr><th>'+productArray[i].title4+'</th><td>'+productArray[i].detail4+'</td></tr><th>'+productArray[i].title5+'</th><td>'+productArray[i].detail5+'</td><tr><th>'+productArray[i].title6+'</th><td>'+productArray[i].detail6+'</td></tr></table></div></div>';
		}
	}
	y.innerHTML=s;
}

	// cong tru so luong hang hoa
	function cong(){
		var quatity=document.getElementById("quatity");
		if(quatity.value<9999&&quatity.value>=0){
			quatity.value++;
		}

	}
	function tru(){
		var quatity=document.getElementById("quatity");
		if(quatity.value<=9999&&quatity.value>0){
			quatity.value--;
		}
	}

// tai khoan
var accountArray =[];
function acccountAD(){
	if(localStorage.getItem('Account')===null){
		var accountArray=[
			{accountid:1,hovaten:'admin',tendangnhap:'admin',matkhau:'admin',email:null,sdt:null,piority:'admin',status:true},
		];
		localStorage.setItem('Account',JSON.stringify(accountArray));
	}
}

function checkAccount(){
	var loginname = document.querySelector("#login-name");
	var loginpass = document.querySelector("#login-pass");
	var logbtn = document.getElementById("log-btn");
	if(localStorage.getItem('Account')===null){
		return false;
	}
	var accountArray = JSON.parse(localStorage.getItem('Account'));
	for (var i = 0; i < accountArray.length; i++){
		if(loginname.value != accountArray[i].tendangnhap || loginpass.value != accountArray[i].matkhau){
			logbtn.setCustomValidity("Tên đăng nhập hoặc mật khẩu không hợp lệ");

		}else if(accountArray[i].status==false){
			logbtn.setCustomValidity("Tài khoản của bạn đã bị khóa");

		}else if(loginname.value == accountArray[i].tendangnhap || loginpass.value == accountArray[i].matkhau){
			logbtn.setCustomValidity(" ");
			logined(accountArray[i].accountid);
			window.location.reload();
			}
		}
	}

function inputaccount(){
		var regbtn =document.getElementById("regbtn");
		var accountArray= JSON.parse(localStorage.getItem('Account'));
		var account1=
		{accountid:accountArray.length+1,hovaten:document.getElementById("reghoten").value,tendangnhap:document.getElementById("reguser").value,matkhau:document.getElementById("regpass").value,email:document.getElementById("regemail").value,sdt:document.getElementById("regsdt").value,piority:'custumer',status:true};
		var checkpass=document.getElementById("checkpass");

		if(document.getElementById("regpass").value===null||document.getElementById("reghoten").value===null||document.getElementById("reguser").value===null||document.getElementById("regemail").value===null||document.getElementById("regsdt").value===null){
			regbtn.setCustomValidity("Cần nhập đầy đủ thông tin để đăng ký!");

		}else if(document.getElementById("regpass").value != document.getElementById("checkpass").value){
			checkpass.setCustomValidity("Không trùng khớp");
		}
		else if(document.getElementById("regpass").value == document.getElementById("checkpass").value){
			checkpass.setCustomValidity("");
			console.log(account1);
			console.log("Type account 1:");
			console.log(typeof(account1));
			accountArray.push(account1);
			localStorage.setItem('Account',JSON.stringify(accountArray));
		}
}
	
 function showallAccount(){
 	var a = "";
 	var accountArray= JSON.parse(localStorage.getItem('Account'));
 	for(var i=0; i<accountArray.length;i++){
		a =a + '<div id="accountlist"> <p style="float:left"> Account ID: '+accountArray[i].accountid+'| Họ Tên: '+
	 	accountArray[i].hovaten+ '| Username: '+accountArray[i].tendangnhap+ ' <br>  Phone: '+accountArray[i].sdt+ '| Email: '+accountArray[i].email+ '| Trạng thái: '+accountArray[i].status+'</p>'
		+'<div style="float:right; "> <button onclick="changeStatusAccount('+accountArray[i].accountid+')">Thay Đổi Trạng Thái</button> <button onclick="deleteAccount('+accountArray[i].accountid+')">Xóa</button></div></div>';
 	}
 	document.getElementById('adminscroll-account').innerHTML=a;
 }

 function deleteAccount(accountIDdelete){
	var accountArray = JSON.parse(localStorage.getItem('Account'));
	for(var i=0;i<accountArray.length;i++){
		if(accountArray[i].accountid == accountIDdelete){
			if(confirm('Bạn có muốn xóa tài khoản này?')){
				accountArray.splice(i, 1);
			}
		}
	}
	localStorage.setItem('Account',JSON.stringify(accountArray));
	showallAccount();
	alert("Xóa tài khoản thành công!");
}
function changeStatusAccount(accountIDchange){
	var accountArray = JSON.parse(localStorage.getItem('Account'));
	for(var i=0;i<accountArray.length;i++){
		if(accountArray[i].accountid == accountIDchange){
			if(accountArray[i].status==true){
				if(confirm('Bạn có muốn chuyển sang trạng thái khóa tài khoản?')){
					accountArray[i].status=false;
				}
			}else if(accountArray[i].status==false){
				if(confirm('Bạn có muốn chuyển sang trạng thái mở tài khoản?')){
					accountArray[i].status=true;
				}
			}
		}
	}
	localStorage.setItem('Account',JSON.stringify(accountArray));
	showallAccount();
	alert("Đã Lưu Thay Đổi");
}

//Đã Đăng nhập
function logined(LoginID){
	var accountArray = JSON.parse(localStorage.getItem('Account'));
	for(var i=0;i<accountArray.length;i++){
		if(LoginID==accountArray[i].accountid){
			var accountLogined=[accountArray[i]];
			localStorage.setItem('logined',JSON.stringify(accountLogined));
		}
	}
}
function checklogin(){
	var helloname= document.getElementById("hello-name");
	var showregbtn=document.getElementById("showregbtn");
	var logoutbtn=document.getElementById("logout-btn");
	if(localStorage.getItem('logined')===null){
		showregbtn.style.display='block';
		helloname.style.display='none';
		logoutbtn.style.display='none';
	}
	else{
		helloname.style.display='block';
		showregbtn.style.display='none';
		logoutbtn.style.display='block';
	}
}

function hello(){
	var accountLogined =JSON.parse(localStorage.getItem('logined'));
	var a = "";
	for(var i=0;i<accountLogined.length;i++){
		a=a+'<a href="./account-info.html" style="color: red; font-size: 13px;">'+accountLogined[i].hovaten+'</a>'
	}
	document.getElementById('hello-name').innerHTML=a;
}
function addtocart(productidcart){
	var cartArray=[];
	var productArray = JSON.parse(localStorage.getItem('product'));
	var cart= JSON.parse(localStorage.getItem('cart'));
	var soluong=document.getElementById("quatity").value;
	var s = 0;

	var productItem=[];
	for(var i=0;i<productArray.length;i++){
		if(productArray[i].productId==productidcart){
			productItem=productArray[i];
		}
	}
	var tongtien= parseInt(productItem.price*soluong);
	if(localStorage.getItem('cart')===null){
		productItem.soluong = Number(soluong);
		productItem.tongtien=tongtien;
		cartArray.push(productItem);
		localStorage.setItem('cart',JSON.stringify(cartArray));	
	}
	else{
		var cartArray = JSON.parse(localStorage.getItem('cart'));
		productItem.soluong= Number(soluong);
		productItem.tongtien=tongtien;
		var check=0;
		for(var i=0;i<cartArray.length;i++){
			if(cartArray[i].productId==productidcart){
				cartArray[i].soluong+= Number(soluong);
				cartArray[i].tongtien+= tongtien;
				cartArray.push(cartArray[i]);
				localStorage.setItem('cart',JSON.stringify(cartArray));
				for(var i=0; i<cartArray.length; i++){
					if(cartArray[i].productId==productidcart){
						cartArray.splice(i,1);
						break;
					}
				}
				localStorage.setItem('cart',JSON.stringify(cartArray));
				check++;
				break;
			}
		}
		if(check==0){
			productItem.soluong=Number(soluong);
			productItem.tongtien=tongtien;
			cartArray.push(productItem);
			localStorage.setItem('cart',JSON.stringify(cartArray));
		}
	}
	alert('đã thêm thành công');

}
function checkAD(){
	var accountLogined= JSON.parse(localStorage.getItem('logined'));
	var a = "";
	var x="'admin'";
	for(var i=0;i<accountLogined.length;i++){
		if(accountLogined[i].piority=='admin'){
			a=a+'<button class="tablinks" onclick="openTab(event,'+x+')">Quản Lý Quyền Admin</button>';
		}
	}
	document.getElementById('admintab').innerHTML=a;
}
function logout(){
	if(confirm('Bạn có muốn đăng xuất không?')){
		localStorage.removeItem('logined');
		window.location.reload();
	}
}

//them sua xoa sp

function kiemtrakytudacbiet(value){
	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
	if (format.test(value)){
		return true;
	}else {
		return false;
	}
	}

// document.getElementById('formthemsp').addEventListener('submit',addProduct);
function addProduct(x){
	x.preventDefault();
	var productArray= JSON.parse(localStorage.getItem('product'));
	var ten= document.getElementById("name-them").value;
	var loai=document.getElementById("loai-them").value;
	var gia=document.getElementById("price-them").value;
	var anh = document.getElementById("img-them").value;
	var fileAnh =anh.split("\\");
	var model=document.getElementById("model-them").value;
	var thuonghieu=document.getElementById("brand-them").value; 
	var title1=document.getElementById("title1-them").value;
	var title2=document.getElementById("title2-them").value;
	var title3=document.getElementById("title3-them").value;
	var title4=document.getElementById("title4-them").value;
	var title5=document.getElementById("title5-them").value;
	var title6=document.getElementById("title6-them").value;

	var detail1=document.getElementById("detail1-them").value;
	var detail2=document.getElementById("detail2-them").value;
	var detail3=document.getElementById("detail3-them").value;
	var detail4=document.getElementById("detail4-them").value;
	var detail5=document.getElementById("detail5-them").value;
	var detail6=document.getElementById("detail6-them").value;
	var flag=true;
	if(!ten){
		alert("vui lòng nhập tên");
		flag=false;
	}else {
		if (ten.length<10){
			alert('Tên sản phẩm phải trên 10 ký tự?');
			flag='false';
		} 
	}


       if (kiemtrakytudacbiet(ten)==true){
       	alert('Tên sản phẩm không chứa ký tự đặc biệt!');
       	flag=false;
       }

       if (!thuonghieu){
       	alert("vui lòng nhập thương hiệu")
       	flag=false;
       } else {
       	if (ten.length<10){
       		alert('Tên sản phẩm phải trên 10 ký tự!');
       		flag=false;
         	}
       }

       if(!gia){
       	alert("vui lòng nhập giá!")
       	flag=false;
       } else {
       	if(isNaN(Number(gia))){
       		alert('Giá không hợp lệ');
       		flag=false;
       	} else {
       		if(Number(gia)<1000000){
       			alert('Giá không được bé hơn 1 triệu');
       			flag=false;
       		}
       	}
       }

     if(!anh){
     	alert("không thể thiếu ảnh nha!")
     	flag=false;
     }
   if (flag==false){
   	return false;
   }


var product={productId:productArray[productArray.length-1].productId+1,brand:thuonghieu,loai:loai,img:fileAnh[2],name:ten,price:Number(gia),status:'còn hàng',title1:title1,title2:title2,title3:title3,title4:title4,title5:title5,title6:title6,detail1:detail1,detail2:detail2,detail3:detail3,detail4:detail4,detail5:detail5,detail6:detail6};
productArray.push(product);
localStorage.setItem('product',JSON.stringify(productArray));
showFullspAD(0);
window.location.reload(true);

}


function deleteProduct(id){
	var productArray=JSON.parse(localStorage.getItem('product'));
	for (var i=0; i<productArray.length;i++){
		if(productArray[i].productId==id)
			if (confirm('Bạn có muốn xóa sản phẩm này?'))
				productArray.splice(i,1);
	}
	localStorage.setItem('product',JSON.stringify(productArray));

	showFullspAD();
	alert("Xóa Thành Công!");
}
function repairProduct(id){
	document.getElementById('suasp-box').style.display='block';
	document.getElementById('khungtovcl-suasp').style.display='block';
	var productArray = JSON.parse(localStorage.getItem('product'));
	for(var i=0;i<productArray.length;i++){
		if(productArray[i].productId==id) {
			document.getElementById("name-sua").value = productArray[i].name;
			document.getElementById("brand-sua").value = productArray[i].brand;
			document.getElementById("price-sua").value = productArray[i].price;
			document.getElementById("loai-sua").value = productArray[i].loai;
			document.getElementById("model-sua").value=productArray[i].model;
			document.getElementById("title1-sua").value=productArray[i].title1;
			document.getElementById("title2-sua").value=productArray[i].title2;
			document.getElementById("title3-sua").value=productArray[i].title3;
			document.getElementById("title4-sua").value=productArray[i].title4;
			document.getElementById("title5-sua").value=productArray[i].title5;
			document.getElementById("title6-sua").value=productArray[i].title6;
			document.getElementById("detail1-sua").value=productArray[i].detail1;
			document.getElementById("detail2-sua").value=productArray[i].detail2;
			document.getElementById("detail3-sua").value=productArray[i].detail3;
			document.getElementById("detail4-sua").value=productArray[i].detail4;
			document.getElementById("detail5-sua").value=productArray[i].detail5;
			document.getElementById("detail6-sua").value=productArray[i].detail6;
			localStorage.setItem('editId',id);
			break;
		}
	}
}

function saveProduct(){
	var productArray=JSON.parse(localStorage.getItem('product'));
	var editId = localStorage.getItem("editId");
	var ten= document.getElementById("name-sua").value;
	var loai=document.getElementById("loai-sua").value;
	var gia=document.getElementById("price-sua").value;
	var anh = document.getElementById("img-sua").value;
	var fileAnh =anh.split("\\");
	var model=document.getElementById("model-sua").value;
	var thuonghieu=document.getElementById("brand-sua").value; 
	var title1=document.getElementById("title1-sua").value;
	var title2=document.getElementById("title2-sua").value;
	var title3=document.getElementById("title3-sua").value;
	var title4=document.getElementById("title4-sua").value;
	var title5=document.getElementById("title5-sua").value;
	var title6=document.getElementById("title6-sua").value;

	var detail1=document.getElementById("detail1-sua").value;
	var detail2=document.getElementById("detail2-sua").value;
	var detail3=document.getElementById("detail3-sua").value;
	var detail4=document.getElementById("detail4-sua").value;
	var detail5=document.getElementById("detail5-sua").value;
	var detail6=document.getElementById("detail6-sua").value;
	for (var i=0;i<productArray.length;i++){
		if(productArray[i].productId==editId){

			productArray[i].name=ten;
			productArray[i].loai=loai			
			productArray[i].brand=thuonghieu;
			productArray[i].price=gia;
			productArray[i].model=model;
			productArray[i].title1=title1;
			productArray[i].title1=title2;
			productArray[i].title1=title3;
			productArray[i].title1=title4;
			productArray[i].title1=title5;
			productArray[i].title1=title6;
			productArray[i].detail1=detail1;
			productArray[i].detail2=detail2;
			productArray[i].detail3=detail3;
			productArray[i].detail4=detail4;
			productArray[i].detail5=detail5;
			productArray[i].detail6=detail6;
			if(fileAnh[2]==null){
				productArray[i].img=productArray[i].img;
			}
			else{
				productArray[i].img=fileAnh[2];
			}
			break;
		}
	}
	localStorage.setItem('product',JSON.stringify(productArray));
	localStorage.setItem('editId',0);
	showFullspAD(0);
}

function showFullspAD(){
	if(localStorage.getItem('product')===null){
	return false;
	}
	var productArray = JSON.parse(localStorage.getItem('product'));
	var b = "";
	for(var i = 0;i < productArray.length; i++){
		b =b + '<div id="product-ad"><div style="float:left;"><img src="./Image/'+productArray[i].img+'" width="200px" height="200px;"></div><div style="float:left; margin-left: 20px;"><h3>'+productArray[i].name+'</h3><h2 style="color: red; margin-top:10px;">'+currency(productArray[i].price)+'</h2><h6 style="margin:10px;">tình trạng: <li id="statussp" style="color:red">'+productArray[i].status+'</li></h6><h4>ID:'+productArray[i].productId+'</h4><h5 style="margin-top:10px;">loại hàng: '+productArray[i].loai+'</h5><h5 style="margin-top:10px;">Thương Hiệu: '+productArray[i].brand+'</h5><h5>Model: '+productArray[i].model+'</h5></div><div style="float:right;"><button onclick="repairProduct('+productArray[i].productId+');">Sửa Thông tin</button><button onclick="deleteProduct('+productArray[i].productId+')">Xóa</button><button onclick="changestatussp('+productArray[i].productId+')">thay đổi trạng thái</button></div></div>';
	}
	document.getElementById('adminscroll-goods').innerHTML=b;
}

function changestatussp(id){
	var productArray=JSON.parse(localStorage.getItem('product'));
	for (var i=0; i<productArray.length;i++){
		if(productArray[i].productId==id){
			if(confirm('bạn có muốn thay đổi trạng thái hàng này?')){
				if(productArray[i].status=='còn hàng'){
					productArray[i].status='hết hàng';
				}
				else if(productArray[i].status=='hết hàng'){
					productArray[i].status='còn hàng';
				}
			}
		}
	}
	localStorage.setItem('product',JSON.stringify(productArray));
	showFullspAD();
}

//seraching

function quydoi(x){
	createProduct();
	showFullspAD(0);
}



	//cart
function inCart(id1){
	var cartArray=JSON.parse(localStorage.getItem('cart'));
	var soluong=document.getElementById('quatity').value;
	var item=[];
	for(var i=0;i<cartArray.length;i++){
		if(cartArray[i].productId==id1){
			cartArray[i].soluong=Number(soluong);
			item=cartArray[i];
		}
	}
	var tongtien=parseInt(item.price*soluong);
	if(localStorage.getItem('cart')===null){
		item.tongtien=tongtien;
	}
	else{
		item.tongtien=tongtien;
	}
	localStorage.setItem('cart',JSON.stringify(cartArray));
}

function showCartOrder(){

    if(localStorage.getItem('cart')==null || localStorage.getItem('cart')=='[]'){
        var a ='<div class="item">'+"Chưa có sản phẩm nào"+'</div>';
        document.getElementById('cart-item').innerHTML=a;
		document.getElementById('money').innerHTML=0;
    } else{
		var cartArray=JSON.parse(localStorage.getItem('cart'));
		var totalprice=0;
        var a="";
        for(i=0;i<cartArray.length;i++){
            a+='<div class="text-detail">'+
                    '<h5 class="css-quantity" id="upDateQuanSuatity">'+Number(cartArray[i].soluong)+'</h5>'+
                    '<h4 class="css-name">'+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+cartArray[i].name+'</h4>'+
					'<p class="css-price" id="Suatongtien">'+currency(cartArray[i].tongtien)+"&nbsp;"+'</p>'+
				'</div>'+
				'<div class="icon-pen-delete">'+
					'<a href="#">'+
						'<img src="delete.png" id="editcart-icon" onClick="deletecartitem('+cartArray[i].productId+')">'+
					'</a>'+
						'<img src="edit.png" id="editcart-icon" onclick="SuaSanPham('+cartArray[i].productId+');">'+
				'</div>'+
				'<hr>';
			totalprice+=(cartArray[i].tongtien);

        }
    }
	document.getElementById('cart-item').innerHTML=a;
	document.getElementById('money').innerHTML=currency(totalprice);
}


function deletecartitem(id){
	var cartArrays = JSON.parse(localStorage.getItem('cart'));
	for (var i = 0; i < cartArrays.length; i++) {
		if(cartArrays[i].productId==id){
			if(confirm("Bạn có muốn xóa đơn hàng không?"))
				cartArrays.splice(i,1) ;			
		}		
	}
	localStorage.setItem('cart',JSON.stringify(cartArrays));
	showCartOrder();
}
function xoatatcacart(){
	if(localStorage.getItem('cart')==null){
		alert("Giỏ hàng rỗng");
	}else{
		if(confirm("Bạn muốn xóa giỏ hàng?")){
		window.location.reload();
		localStorage.removeItem('cart');
		}
	}
}

function SuaSanPham(product1){
	var p1= document.getElementById('product-info').style.display='block';
	var p2= document.getElementById('info-detail').style.display='block';
	if(localStorage.getItem('cart')===null){
		return false;
	}
	var cartArray = JSON.parse(localStorage.getItem('cart'));
	var s = "";
	for(var i=0; i<cartArray.length;i++){
		if(cartArray[i].productId==product1){
			var sl=cartArray[i].soluong;
			s = s +'<div id="product-title">'+cartArray[i].name+'<img src="xbtn.png" class="xbtn" onclick="offbox()" style="margin-top:10px;"></div><div id="product-content"><div id="product-img"><img src="./Image/'+cartArray[i].img+'" style="width: 500px; height: 500px;"></div><div id="product-detail"><h3>'+cartArray[i].name+'</h3><h2 id="detail-currency">'+currency(cartArray[i].price)+'</h2><div id="product-cart"> <span><button style="width:20px; height:30px; z-index: 1" onclick="tru()" > - </button></span> <span><input style="width: 60px; height: 30px; margin: 10px -7px; z-index: 2; text-align: center;" type="number" id="quatity" value="'+sl+'"></span> <span><button style="width:20px; height:30px; z-index: 1" onclick="cong();">+</button></span> <span><button type="submit" id="addtocart" onclick="inCart('+cartArray[i].productId+');reloadpage();">XÁC NHẬN</button></span> </div></div></div>';
		}		
	}
	document.getElementById('info-detail').innerHTML=s;

}
function reloadpage(){
	window.location.reload();
}
// thanh toán
// document.getElementById('formthongtinkh').addEventListener('submit', Order);
function Order(){
		if(localStorage.getItem('logined')===null){
			alert('Bạn phải đăng nhập để mua sản phẩm');
			dnhap();
			return false;
		}
		var ghichu = document.getElementById('ghichu').value;
		var diachi = document.getElementById('diachi').value;
		var sdt = document.getElementById('sdt').value;
		var nguoinhan = document.getElementById('nguoinhan').value;
		var flag = true;
		if(!diachi ){
		document.getElementById('errordiachi').style.display = 'block';
		flag = false;
		}else{	
		if(diachi.length<20){
			document.getElementById('errordiachi').style.display = 'block';
			document.getElementById('errordiachi').innerHTML = 'Địa chỉ nhà phải trên 20 ký tự !';
			flag = false;
		}else {
				document.getElementById('errordiachi').style.display = 'none';
		}
		
		}
		if(!sdt){
			document.getElementById('errorsdt').style.display = 'block';
			flag = false;
		}else{
			if(isNaN(Number(sdt))){
				document.getElementById('errorsdt').style.display = 'block';
				document.getElementById('errorsdt').innerHTML = 'Số điện thoại không hợp lệ';
				flag = false;
			}else{
				if(Number(sdt)<100000000 || Number(sdt)>999999999){
					document.getElementById('errorsdt').style.display = 'block';
					document.getElementById('errorsdt').innerHTML = 'Số điện thoại không đúng';
					flag = false;
				}else{
					document.getElementById('errorsdt').style.display = 'none';
				}
			}
		}
		if(!nguoinhan){
			document.getElementById('errorten').style.display = 'block';
			flag = false;
		}else{
			document.getElementById('errorten').style.display = 'none';
		}
		var chinhanh1=document.getElementById('ChiNhanh').value;
		if(!chinhanh1){
			document.getElementById('errorchinhanh').style.display = 'block';
			flag = false;
		}else{
			document.getElementById('errorchinhanh').style.display = 'none';
		}

		if(flag==false){
			return false;
		}

		var pay = document.getElementsByName("pay");
		for (var i = 0; i < pay.length; i++){
			if (pay[i].checked === true){
				pay=pay[i].value;
			}
		}
		var chinhanh=document.getElementById('ChiNhanh');
		for(var i=0;i<chinhanh.length;i++){
			if(chinhanh[i].selected){
				chinhanh=chinhanh[i].value;
			}
		}
		var info = '';
		var totalprice = 0;
		var tien;
		var soluong;
		if(localStorage.getItem('cart')===null || localStorage.getItem('cart')=='[]'){
			return false;
		}
		var cartArray = JSON.parse(localStorage.getItem('cart'));
		var userlogin = JSON.parse(localStorage.getItem('logined'));
		for (var i = 0; i < cartArray.length; i++) {
				info+='+ Món thứ '+ (i+1) +' - '+ cartArray[i].soluong+' chiếc '+cartArray[i].name+'<br><br>';
				totalprice+=cartArray[i].soluong*cartArray[i].price;
				tien=cartArray[i].price;
				soluong=cartArray[i].soluong;
		}
		
		var date = new Date();
		var d = date.getDate()+'-'+(date.getMonth()+1)+'-'+date.getFullYear();
		if(localStorage.getItem('bill')===null){
			var billArray = [];
			var bill = {userId: userlogin[0].accountid, IDbill: (billArray.length+1), info: info, totalprice: totalprice, date: d, pay: pay,chinhanh: chinhanh,diachi: diachi,sdt: sdt,nguoinhan: nguoinhan,ghichu: ghichu,tien:tien,soluong: soluong, status: 'Chưa xử lý'};
			billArray.push(bill);
			localStorage.setItem('bill', JSON.stringify(billArray));
		}
		else{
			var billArray = JSON.parse(localStorage.getItem('bill'));
			var bill = {userId: userlogin[0].accountid, IDbill: (billArray.length+1), info: info, totalprice: totalprice, date: d,pay: pay,chinhanh: chinhanh ,diachi: diachi,sdt: sdt,nguoinhan: nguoinhan,ghichu: ghichu,tien: tien,soluong: soluong, status: 'Chưa xử lý'};
			billArray.push(bill);
			localStorage.setItem('bill', JSON.stringify(billArray));
		}	
		localStorage.removeItem('cart');
		window.location.reload();
		return true;
}

//thông tin khách hàng

function accountInfo(){
	var accountLogined =JSON.parse(localStorage.getItem('logined'));
	var a = "";
	for(var i=0;i<accountLogined.length;i++){
		a=a+'<br><label style="float:left">Họ và Tên: </label><p style="margin: 2px 15px; float: left;">'+accountLogined[i].hovaten+'</p><br><br><label style="float:left">Tên Đăng Nhập: </label><p style="margin: 2px 15px; float: left;">'+accountLogined[i].tendangnhap+'</p><br><br><label style="float:left">Email: </label><p style="margin: 2px 15px; float: left;">'+accountLogined[i].email+'</p><br><br><label style="float:left">Số Điện Thoại: </label><p style="margin: 2px 15px; float: left;">'+accountLogined[i].sdt+'</p><br><br>'	
	}
	document.getElementById('info').innerHTML=a;
}

function suahoten(){
	document.getElementById("suahoten-box").style.display="block";
	document.getElementById("khungtovcl-suahoten").style.display="block";
	document.getElementById("")
}

function suatenreg(){
	document.getElementById("suatenreg-box").style.display="block";
	document.getElementById("khungtovcl-suatenreg").style.display="block";
}

function suamail(){
	document.getElementById("suamail-box").style.display="block";
	document.getElementById("khungtovcl-suamail").style.display="block";
}

function suasdt(){
	document.getElementById("suasdt-box").style.display="block";
	document.getElementById("khungtovcl-suasdt").style.display="block";
}

function suamk(){
	document.getElementById("suamk-box").style.display="block";
	document.getElementById("khungtovcl-suamk").style.display="block";
}


/*tìm kiếm*/
/* tìm kiếm */
function closesearch(){
  var khungsearch = document.getElementById('khungsearch').style.display = 'none';
}
function mosearch(){
  var khungsearch = document.getElementById('khungsearch').style.display = 'block';
}


function search(){
  var productsearch = document.getElementById('timkiem').value.toLowerCase();
  var productArray = JSON.parse(localStorage.getItem('product'));
  var s='';
      for(var i = 0; i<productArray.length; i++){
        if ((productArray[i].name.toLowerCase().search(productsearch) != -1 || productArray[i].name.toLowerCase().search(productsearch) != -1) && productsearch != '') {
          s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
        }
      }
  var loaisearch = document.getElementById('loaisanpham').value;
  var priceform = document.getElementById('priceform').value;
  var priceto = document.getElementById('priceto').value; 
      if (loaisearch=='all') { 
        for(var i = 0; i<productArray.length; i++){       
          if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].price>=priceform && productArray[i].price<=priceto) {
            s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
        }
        }
      }

      else if(loaisearch =='RAM'){
        for(var i = 0; i<productArray.length; i++){
          if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='RAM' &&productArray[i].price>=priceform && productArray[i].price<=priceto) {
            s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
          }
        }

      }
      
      else if(loaisearch =='laptop'){
        for(var i = 0; i<productArray.length; i++){
          if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='laptop' &&productArray[i].price>=priceform && productArray[i].price<=priceto) {
            s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
          }
        }
      }
      else if(loaisearch =='CPU'){
        for(var i = 0; i<productArray.length; i++){
          if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='CPU' &&productArray[i].price>=priceform && productArray[i].price<=priceto) {
            s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
          }
        }
      }
      else if(loaisearch =='VGA'){
        for(var i = 0; i<productArray.length; i++){
          if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='VGA' &&productArray[i].price>=priceform && productArray[i].price<=priceto) {
            s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
          }
        }
      }
      else
        s = '';

      if(priceform == "" && priceto == ""){
        if(loaisearch =='RAM'){
          for(var i = 0; i<productArray.length; i++){
            if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='RAM') {
              s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
            }
          }
        }
        else if(loaisearch =='laptop'){
          for(var i = 0; i<productArray.length; i++){
            if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='laptop' ) {
              s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
            }
          }
        }
        else if(loaisearch =='CPU'){
          for(var i = 0; i<productArray.length; i++){
            if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='CPU' ) {
              s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
            }
          }
      }
        else if(loaisearch =='VGA'){
          for(var i = 0; i<productArray.length; i++){
            if (productArray[i].name.toLowerCase().search(productsearch) != -1 && productArray[i].loai=='VGA' ) {
              s = s + '<div class="card"><img src="./Image/'+productArray[i].img+'" class="cardimg"> <h4>'+
    productArray[i].name+'</h4>'+'<p>'+currency(productArray[i].price)+'</p>'+
    '<p onclick="showdetail('+productArray[i].productId+');" id="xem-chi-tiet">'
    +"Xem chi tiết"+'</p></div>';
            }
          }
      }
      


      }

  document.getElementById('searchresult').innerHTML = s;  
}

function showsearchnangcao(){
  if(document.getElementById('loaisanpham').style.display=="inline-block"&&document.getElementById('priceform').style.display=="inline-block"&&document.getElementById('priceto').style.display=="inline-block"&&document.getElementById('khoangcachsearch').style.display=="inline-block"&&document.getElementById('searchnangcao').style.display=="block"){
    document.getElementById('loaisanpham').style.display="none";
    document.getElementById('priceform').style.display="none";
    document.getElementById('priceto').style.display="none";
    document.getElementById('khoangcachsearch').style.display="none";
    document.getElementById('searchnangcao').style.display="none";
    // document.getElementById('timkiem1').style.display="none";
    document.getElementById('timkiem').style.display="block";
    document.getElementById('timkiem').value = "";
    document.getElementById('searchresult').innerHTML = "";
    document.getElementById('timkiem').disabled = false;  
  }
  else{
    document.getElementById('timkiem').value = "";
    document.getElementById('searchresult').innerHTML = "";
    document.getElementById('timkiem').disabled = false; 
    document.getElementById('loaisanpham').value = "all";
    document.getElementById('priceform').value = "";
    document.getElementById('priceto').value = "";
    // document.getElementById('timkiem').style.display="none";
    // document.getElementById('timkiem1').style.display="inline-block";
    document.getElementById('loaisanpham').style.display="inline-block";
    document.getElementById('priceform').style.display="inline-block";
    document.getElementById('priceto').style.display="inline-block";
    document.getElementById('khoangcachsearch').style.display="inline-block";
    document.getElementById('searchnangcao').style.display="block"; 
  }
}

function ondathang(){
	var x=document.getElementById("khungtovcl-dathang");
	var y=document.getElementById("dathang-box");	
	x.style.display="block";
	y.style.display="block";
}
/*khung dk dn*/

	
	function registermotion() {
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	function loginmotion() {
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0px";
	}
/*nút reg/sign*/
	function showreg(){
		var x = document.getElementById("khungtovcl-form");
		var y= document.getElementsByClassName("form-box");
  		
    		x.style.display = "block";
    		y[0].style.display = "block";


	}
	function offreg(){
		var x = document.getElementById("khungtovcl-form");
		var y= document.getElementsByClassName("form-box");
  		
    		x.style.display = "none";
    		y[0].style.display = "none";
	}

function showBill(){
	var billArray = JSON.parse(localStorage.getItem('bill'));
	var cartArray = JSON.parse(localStorage.getItem('cart'));
	var userloginArray = JSON.parse(localStorage.getItem('logined'));
	var x="";

	if(localStorage.getItem('bill')===null && localStorage.getItem('logined')!==null){
		var x1 ="";
		x1= '<div style="text-align: center;font-size:20px;font-weight:bold;margin-top:50%;">'
		+"Hiện tại không có sản phẩm nào"+'</div>';	
		document.getElementById('detail-bill').innerHTML=x1;
	}

	if(cartArray  === '[]' && userloginArray !==null){
		var x2 ="";
		x2= '<div style="text-align: center;font-size:20px;font-weight:bold;margin-top:50%;">'
		+"Hiện tại không có sản phẩm nào"+'</div>';	
		document.getElementById('detail-bill').innerHTML=x2;
	}

	if(billArray  === '[]' && userloginArray !==null){
		var x3 ="";
		x3= '</div>'+'<div style="text-align: center;font-size:20px;font-weight:bold;margin-top:50%;">'
		+"Hiện tại không có sản phẩm nào"+'</div>';	
		document.getElementById('detail-bill').innerHTML=x3;
	}
	if(userloginArray != null){
			for(var i=0;i<billArray.length;i++){
				if(billArray[i].userId == userloginArray.accountid){
					if(billArray[i].status == "Chưa xử lý"){
							x= 	x + '<div id="bill-box">'+
									'<div id="dauX1" onClick="deletebillitem('+billArray[i].IDbill+')">'+'<img src="xbtn.png" class="xbtn">'+'</div>'+
									'<hr>'+
								'</div>'+
								'<div class="bill-time">'+
									'<p class="id-bill">'+"Mã Hóa Đơn: "+ (billArray[i].IDbill) +'</p>'+
									'<p class="date-bill">'+"Ngày đặt hàng: "+billArray[i].date +'</p>'+
								'</div>'+
								'<div class="bill-item">'+
									'<h3 class="bill-item-text">'+"- Sản phẩm:"+'</h3>'+
									'<p class="bill-quantity">'+billArray[i].info+'</p>'+
									'<h3 class="bill-money">- Tổng tiền: '+currency(billArray[i].totalprice)+'</h3>'+
									'<h3>'+"- Hình thức thanh toán: "+billArray[i].pay+'</h3>'+
									'<h3>'+"- Tên người nhận: "+billArray[i].nguoinhan +'</h3>'+
									'<h3>'+"- Số điện thoại: "+billArray[i].sdt+'</h3>'+
									'<h3>'+"- Ghi chú: "+billArray[i].ghichu+'</h3>'+
									'<h3>'+"- Chi nhánh: "+billArray[i].chinhanh+'</h3>'+
									'<div class="tinhtrang">'+
										'<h3 class="text-history">'+"- Tình trạng: "+'</h3>'+
										'<h3 class="status-bill">'+billArray[i].status+'</h3>'+
									'</div>'+
								'</div>';
						}
					
				}
				
		}
		

	document.getElementById('detail-bill').innerHTML=x;
	}
}
function deletebillitem(id){
	var billArray = JSON.parse(localStorage.getItem('bill'));
	for (var i = 0; i < billArray.length; i++) {
		if(billArray[i].IDbill==id){
			if(confirm("Bạn có muốn xóa đơn hàng thứ "+id+" này không?"))
				billArray.splice(i,1);
		}
	}
	localStorage.setItem('bill',JSON.stringify(billArray));
	showBill();
}	
function deletebillitemadmin(id){
	var billArray = JSON.parse(localStorage.getItem('bill'));
	for (var i = 0; i < billArray.length; i++) {
		if(billArray[i].IDbill==id){
			if(confirm("Bạn có muốn xóa đơn hàng thứ "+id+" này không?"))
				billArray.splice(i,1);
		}
	}
	localStorage.setItem('bill',JSON.stringify(billArray));
	showThongtinHoaDon();
}

function showHistory(){
	var billArray = JSON.parse(localStorage.getItem('bill'));
	var userloginArray = JSON.parse(localStorage.getItem('logined'));
	var h="";	
	if(localStorage.getItem('logined')===null){
		alert("Bạn chưa đăng nhập, vui lòng đăng nhập để xem giỏ hàng!");
		return false;
	}
	if(localStorage.getItem('bill')===null && localStorage.getItem('logined')!==null){
		var h1 ="";
		h1= '<div id="dauX3" onclick="closeHistory();">'+"Đóng lịch sử giao dịch"+'</div>'+'<div style="text-align: center;font-size:20px;font-weight:bold;margin-top:50%;">'
		+"Hiện tại bạn chưa có giao dịch nào !!"+'</div>';	
		document.getElementById('history-detail').innerHTML=h1;
	}
	if(billArray  === '[]' && userloginArray !==null){
		var h2 ="";
		h2= '<div id="dauX2" onclick="closeHistory();">'+"Đóng hóa đơn"+'</div>'+'<div style="text-align: center;font-size:20px;font-weight:bold;margin-top:50%;">'
		+"Hiện tại bạn chưa có giao dịch nào !!"+'</div>';	
		document.getElementById('history-detail').innerHTML=h1;
	}
	if(userloginArray != null){
		for(var i=0;i<billArray.length;i++){
			if(billArray[i].userId == userloginArray.accountid){
				if(billArray[i].status == "Đã xử lý"){
					h+=
							'<hr>'+
						'</div>'+
						'<div class="history-time">'+
							'<p class="id-bill">'+"Mã Hóa Đơn: "+ (billArray[i].IDbill) +'</p>'+
							'<p class="date-bill">'+"Ngày đặt hàng: "+billArray[i].date +'</p>'+
						'</div>'+
						'<div class="history-item">'+
							'<h3 class="bill-item-text">'+"Sản phẩm:"+'</h3>'+
							'<p class="bill-quantity">'+billArray[i].info+'</p>'+
							'<h3 class="bill-money">Tổng tiền: '+currency(billArray[i].totalprice)+'</h3>'+
							'<h3>'+"Hình thức thanh toán: "+billArray[i].pay+'</h3>'+
						'</div>'+
						'<div class="tinhtrang">'+
							'<h3 class="text-history">'+"Tình trạng: "+'</h3>'+
							'<h3 class="status-history">'+billArray[i].status+'</h3>'
						;
				}
			}
		}
		document.getElementById('history-detail').innerHTML=h;
	}
}


function closeHistory(){
	document.getElementById('history-cart').style.display='none';
}

function showThongtinHoaDon(){
	if(localStorage.getItem('bill')===null){
		return false;
	}
	var billArray = JSON.parse(localStorage.getItem('bill'));
	var bill = "";
	var khachhang = "";
	var ngaydathang = "";
	var tongtien = "";
	var tinhtrang = "";
	var chitiet = "";


	for(var i = 0; i<billArray.length;i++){
		bill = bill + '<div><h6>'+billArray[i].IDbill+'</h6></div>';
		khachhang= khachhang + '<div><h6>'+billArray[i].userId+'</h6></div>';
		ngaydathang = ngaydathang + '<div><h5>'+billArray[i].date+'</h5></div>';
		tongtien = tongtien + '<div><h5>'+currency(billArray[i].totalprice)+'</h5></div>';
		if(billArray[i].status=='Chưa xử lý')
			tinhtrang = tinhtrang + '<div><h6 style="color: red">'+"Chưa xử lý"+'</h6></div>';
		else
			tinhtrang = tinhtrang + '<div><h6 style="color: green">'+"Đã xử lý"+'</h6></div>';
		chitiet = chitiet + '<div class="chucnangbill"><button onclick="changestatusbill('+billArray[i].IDbill+')">'+"Thay đổi trạng thái"+'</button><button onclick="deletebillitemadmin('+billArray[i].IDbill+')">'+"Xóa"+'</button></div>';
	}
	document.getElementById('idbill').innerHTML=bill;
	document.getElementById('idkhachhang').innerHTML=khachhang;
	document.getElementById('ngaydathang').innerHTML=ngaydathang;
	document.getElementById('tongtien').innerHTML=tongtien;
	document.getElementById('tinhtrangbill').innerHTML=tinhtrang;
	document.getElementById('chitietbill').innerHTML=chitiet;
}
function changestatusbill(billID){
	var billArray = JSON.parse(localStorage.getItem('bill'));
	for(var i = 0; i<billArray.length;i++){
		if(billID==billArray[i].IDbill){
			if(billArray[i].status=='Chưa xử lý'){
				if(confirm("bạn có chắc muốn đổi trạng thái?")){
					billArray[i].status='Đã xử lý'
				}
			}else{
				if(confirm("bạn có chắc muốn đổi trạng thái?")){
					billArray[i].status='Chưa xử lý';
				}
			}
		}
	}
	localStorage.setItem('bill',JSON.stringify(billArray));
	showThongtinHoaDon();
}