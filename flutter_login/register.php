<?php

	require "connect.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data = array();

		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];

		$cek = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
		$cekData = mysqli_fetch_array($cek);

		if(isset($cekData)){
			$data['status'] = 1;
			$data['msg'] = "Data already exists!";
			echo json_encode($data);
		}else{
			$query = mysqli_query($con, "INSERT INTO login VALUE(null, '$username', '$password', '$level')");
		
			if(isset($query)){
				$data['status'] = 2;
				$data['msg'] = "Input was successful";
				echo json_encode($data);
			}else{
				$data['status'] = 3;
				$data['msg'] = "Cannot Add Your Data!";
				echo json_encode($data);
			}
		}
	}

	

	