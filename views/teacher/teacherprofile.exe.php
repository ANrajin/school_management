<?php
	// echo $_SESSION['id'];
	// session_start();
                        $crud = new Crud();
                        $result = $crud->ReadData("*" , "teachers", ['id'=>$_SESSION['id']] );
                        // echo print_r($_SESSION['id']);
                     $data = $result->fetch_object() ?>

<section>
	<div class="row">
		<div class="col-sm-3">
			<div class="card text-center">
			  <img src="././files/teacher/<?php echo  $_SESSION['id'].'.'.$data->teacher_pic?>" alt="">
			  <h5 ><?php echo $data->name?></h5>
			  <h6><?php echo $data->designation?></h6>
			</div>
			
		</div>
		<div class="col-sm-5">
	
    </tr>
			<table class="table table-dark">
			  <tbody>
			  

			    <tr>
			      <td>Name</td>
			      <td>
			      	 <?php echo $data->name?>
			      </td>
			    </tr>
			    <tr>
			      <td>Designation</td>
			     <td>
			      	 <?php echo $data->designation?>
			      </td>
			    </tr>
			    <tr>
			      <td>Qualifications</td>
			      <td>
			      	 <?php echo $data->qualification?>
			      </td>
			    </tr>
			    <tr>
			      <td>Address</td>
			      <td>
			      	 <?php echo $data->address?>
			      </td>
			    </tr>
			    <tr>
			      <td>Email</td>
			      <td>
			      	 <?php echo $data->email?>
			      </td>
			    </tr>
			    <tr>
			      <td>Phone Number</td>
			      <td>
			      	 <?php echo $data->phone?>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
<div class="col-sm-4">
	
			<table class="table table-dark">
			  <tbody>
			    <tr>
			      <td>Gender</td>
			      <td>
			      	 <?php 
			      	 if($data->gender==1){
			      	 	echo "Male";
			      	 }else if ($data->gender==2) {
			      	 	echo "Female";
			      	 }else{
			      	 	echo "Others";
			      	 }

			      	 ?>
			      </td>
			    </tr>
			    <tr>
			      <td>Father Name</td>
			     <td>
			      	 <?php echo $data->father_name?>
			      </td>
			    </tr>
			    <tr>
			      <td>Mother Name</td>
			     <td>
			      	 <?php echo $data->mother_name?>
			      </td>
			    </tr>
			    <tr>
			      <td>Blood Group</td>
			     <td>
			      	 <?php echo $data->blood_group?>
			      </td>
			    </tr>
			    <tr>
			      <td>Joining Date</td>
			     <td>
			      	 <?php echo $data->joining_date?>
			      </td>
			    </tr>
			    <tr>
			      <td>Salary</td>
			      <td>
			      	 <?php echo $data->salary_account?>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</section>