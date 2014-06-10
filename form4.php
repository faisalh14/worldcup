<?php
	$nama = $_POST["nama"];
	$dob = $_POST["dob"];
	$jantina = $_POST["jantina"];
	if (isset($_POST['membaca'])) $membaca = $_POST['membaca']; else $membaca = "off";
	if (isset($_POST['memancing'])) $memancing = $_POST['memancing']; else $memancing = "off";
	if (isset($_POST['tido'])) $tido = $_POST['tido']; else $tido = "off";
	/*
	$membaca = $_POST["membaca"];
	$memancing = $_POST["memancing"];
	$tido = $_POST["tido"];*/
	$jenis_pekerjaan = $_POST["select-custom-1"];
	$komen = $_POST["komen"];
	
	echo "Nama :$nama </br>
	Tarikh Lahir :$dob </br>
	Jantina :$jantina <br/>
	Membaca :$membaca <br/>
	Memancing :$memancing <br/>
	Tido :$tido <br/>
	Jenis Pekerjaan : $jenis_pekerjaan <br/>
	Komen : $komen";
?>
	
	