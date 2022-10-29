<?php
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$id = $_POST['id'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$nid = $_POST['nid'];


		if ($name == "" || $id == "" || $address == "" || $phone == "" || $nid == "") {
			echo "Fill all the information";
		}else{

			$file = fopen("../models/manager.txt", "a");
			


			fwrite($file, $name."    ");
			fwrite($file, $id."    ");
			fwrite($file, $address."    ");
			fwrite($file, $phone."    ");
			fwrite($file, $nid."\n");
			fclose($file);

			echo "Added successfully";

			header('location: ../view/add_delete_update_manager.php');

		}


	}
 ?>