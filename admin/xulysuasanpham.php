<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//Bước 1: Tạo thư mục lưu file
	$error = array();
	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES['hinhanhsp']['name']);
	// Kiểm tra kiểu file hợp lệ
	$type_file = pathinfo($_FILES['hinhanhsp']['name'], PATHINFO_EXTENSION);
	$type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
	if (!in_array(strtolower($type_file), $type_fileAllow)) {
		$error['hinhanhsp'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
	}
	//Kiểm tra kích thước file
	$size_file = $_FILES['hinhanhsp']['size'];
	if ($size_file > 15242880) {
		$error['hinhanhsp'] = "File bạn chọn không được quá 5MB";
	}
// Kiểm tra file đã tồn tại trê hệ thống
	if (file_exists($target_file)) {
		$error['hinhanhsp'] = "File bạn chọn đã tồn tại trên hệ thống";
	}
//
	if (empty($error)) {
		if (move_uploaded_file($_FILES["hinhanhsp"]["tmp_name"], $target_file)) {
			echo "Bạn đã upload file thành công";
			$flag = true;
		} else {
			echo "File bạn vừa upload gặp sự cố";
		}
	}

	include 'connect.php';

	$idsanpham = $_REQUEST['masp'];
	$iddanhmuc = $_REQUEST['iddanhmuc'];
	$tensp = $_REQUEST['tensp'];
	$mota = $_REQUEST['motasp'];
	$gia = $_REQUEST['giasp'];
	$soluong = $_REQUEST['soluongsp'];	
	$spmuanhieu =$_REQUEST['spmuanhieu'];
	$linhkiencb = $_REQUEST['linhkien'];
	$ngaythem = date("Y/m/d");
//

	if($_FILES['hinhanhsp']['name'] == ""){
		$sql1 = "select *from sanpham where masp =".$idsanpham."";
        $result = mysqli_query($link, $sql1);
        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
        $hinhanh = $row['hinhanh'];
        echo $hinhanh;
		
	}	
	else{
		$hinhanh =$_FILES['hinhanhsp']['name'];
	}

	$sql= "update sanpham set tensp='$tensp', mota ='$mota', giatien ='$gia', soluong ='$soluong', hinhanh = '$hinhanh', spmuanhieu = '$spmuanhieu', linhkiencoban ='$linhkiencb', ngaythem='$ngaythem' where masp ='$idsanpham'";
	mysqli_query($link,$sql);
	header("location: quantrisanpham.php?iddanhmuc=$iddanhmuc");
}
	

 ?>