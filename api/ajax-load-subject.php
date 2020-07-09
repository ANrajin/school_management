<?php 
	require "../library/adminlibrary/model.php";
	$crud = new Crud();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$where = array(

			 'class_id' => $_POST['class_id']
		);
		
		$arr = array();
		$status = $crud->ReadData("*", 'subjects' ,  $where);
		
			if($status->num_rows > 0){
				while($subject = $status->fetch_object()){
				$arr[] = $subject;
			}
		}

		
		header('Content-Type: application/json');
		echo json_encode($arr);
		
	};

	die();

