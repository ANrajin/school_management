<?php
  	require "../library/adminlibrary/model.php";

  	if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $crud = new Crud();

  		$where = array(
  			 'class_id' => $_POST['class_id']
  		);
  		// $arr = array();
  		$status = $crud->ReadData("*", 'student' ,  $where);
  			if($status->num_rows > 0){
          while ($data = $status->fetch_object()){
            $arr[] = $data;
          }
  		}
      // print_r($arr);
      header('Content-Type: application/json');
  		echo json_encode($arr);
  	};
  	die();

 ?>
