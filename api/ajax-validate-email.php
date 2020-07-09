<?php
	require "../library/adminlibrary/model.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$crud = new Crud();
		$where = array(
			 'email' =>$_POST['input_email']
		);

		$status = $crud->ReadData("*", 'student' ,  $where);
		if( $status->num_rows > 0){
			echo 0;
		}else{
			echo 1;
		}

	}

 ?>
