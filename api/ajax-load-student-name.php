<?php
  	require "../library/adminlibrary/model.php";

  	if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $crud = new Crud();

  		$where = array(
  			 'id' => $_POST['std_id']
          );
        $arr = array();
  		$status = $crud->ReadData("*", 'admission' ,  $where);
  			if($status->num_rows > 0){
          while ($data = $status->fetch_object()){
            $arr[] = $data;
          }
  		}
        header('Content-Type: application/json');
        echo json_encode($arr);
  	};
  	die();

 ?>