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
		if ($size_file > 5242880) {
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
	}

	$iddm = $_REQUEST['iddanhmuc'];
	$tensp = $_REQUEST['tensp'];
	$motasp = $_REQUEST['motasp'];
	$giasp = $_REQUEST['giasp'];
	$soluong = $_REQUEST['soluongsp'];
	$hinhanh = basename($_FILES['hinhanhsp']['name']);
	$ngay = date("Y/m/d");
	include 'connect.php';
	$sql = "insert into sanpham(madanhmuc,tensp,mota,giatien,soluong,hinhanh,ngaythem,spmoi,spmuanhieu,linhkiencoban) values('$iddm','$tensp','$motasp','$giasp','$soluong', '$hinhanh', '$ngay',0,0,0)";
	mysqli_query($link,$sql);
	header("location: quantrisanpham.php?iddanhmuc=$iddm");
?>