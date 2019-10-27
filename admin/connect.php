<?php 
	$link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL");
    mysqli_set_charset($link, "UTF8");
    mysqli_select_db($link,"thuctapcongnhan");
 ?>