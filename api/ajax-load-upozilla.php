<?php 
	require "../library/adminlibrary/model.php";
	
	$crud = new Crud();
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$where = array(
			 'district_id' => $_POST['district_id']
		);
		$arr = array();
		$status = $crud->ReadData("*", 'upozilla' ,  $where);
		
			if($status->num_rows > 0){
				while($district_id = $status->fetch_object()){
				$arr[] = $district_id; 
				 
			}
		}
		header('Content-Type: application/json');
		echo json_encode($arr);
		
	};
	die();

