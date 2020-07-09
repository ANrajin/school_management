<?php 
	require "../library/adminlibrary/model.php";
	
	$crud = new Crud();
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$where = array(
			 'division_id' => $_POST['division_id']
		);
		$arr = array();
		$status = $crud->ReadData("*", 'district' ,  $where);
		
			if($status->num_rows > 0){
				while($division_id = $status->fetch_object()){
				$arr[] = $division_id; 
				 
			}
		}
		header('Content-Type: application/json');
		echo json_encode($arr);
		
	};
	die();

