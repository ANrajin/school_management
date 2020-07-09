  <div class="container pt-3">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4">
            <a href="index.php?s=viewteacher" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">View Teacher</span>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <hr/>
<hr/>
<?php

  if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    extract($_POST);
    $arr =[
      'name'              => $name,
      'designation'       => $designation,
      'qualification'     => $qualification,
      'subject_id'        => $subject_id,
      'email'             => $email,
      'address'           => $present_address,
      'password'          => $password,
      'phone'             => $phone,
      'NID'               => $nid,
      'PID'               => $passport_id,
      'father_name'       => $fathername,
      'mother_name'       => $mothername,
      'nationality'       => $nationality,
      'blood_group'       => $blood,
      'joining_date'      => $join,
      'salary_id'         => $salary,
      'salary_account'    => $salary_ac,
      'remarks'           => $remarks,
      'gender'            => $gender,
      'type'            => "3"
     
    ];


    $result = 	$crud->Insert('teachers', $arr);
    if($result){
    	echo "Data Inserted Successfully";
    	// echo "<script>window.location.assign('index.php?s=teacherregistration')</script>";
    	
    }else{
       echo "not inserted";
    
 	}
}
 ?>
    

<div class="container pb-4">
  <form action="" method="post" enctype="multipart/form-data">
    <h4 class="text-primary">Teacher Registration</h4>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="session">Designation</label>
        <input type="text" name="designation" class="form-control" id="studentId" placeholder="Admission Session">
      </div>
      <div class="form-group col-md-3">
        <label for="session">Qualification</label>
        <input type="text" name="qualification" class="form-control" id="studentId" placeholder="Qualification">
      </div>
     
      <div class="form-group col-md-3">
        <label for="joiningdate">Joining Date</label>
        <input type="date" name="join" class="form-control" id="joiningdate">
      </div>
      <div class="form-group col-md-3">
        <label for="subjectid">Class Teacher Of Subject</label>
        <select id="inputClass" name="subject_id" class="form-control">
		     <?php
		       $subject= $crud->ReadData("*", "subjects");
		       while($sub= $subject->fetch_object()){
		         echo "<option value='{$sub->id}'>$sub->name</option>";

		       }
		     ?>
       </select>
      </div>
    </div>

    
    
    <hr/>
    <h4 class="text-primary">Teacher Registration</h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="studentName">Teacher Name</label>
        <input type="text" name="name" class="form-control" id="studentName" placeholder="Student Name">
      </div>
      <div class="form-group col-md-6">
        <label for="studentEmail">Email</label>
        <input type="email" name="email" class="form-control" id="studentEmail" placeholder="Teacher Email">
      </div>
     
      <div class="form-group col-md-6">
        <label for="studentEmail">Password</label>
        <input type="password" name="password" class="form-control" id="teacherPassword" >
      </div>
      <div class="form-group col-md-4">
        <label for="studentPassword">Phone number</label>
        <input type="text" name="phone" class="form-control" id="studentPassword" placeholder="Phone number">
      </div>
     
       <div class="form-group col-md-4">
          <label for="inputState">Gender</label>
          <select id="inputState" class="form-control" name="gender">
            <option selected="selected" value="0">Choose...</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
        </div>
      <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" id="studentName" placeholder="Nationality">
      </div>
      <div class="form-group col-md-6">
        <label for="blood-group">Blood Group</label>
        <input type="text" name="blood" class="form-control" id="studentName" placeholder="Blood Group">
      </div>
    </div>
    <hr/>
 


    <h4 class="text-primary">Parents Information</h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="parentName">Father Name</label>
        <input type="text" name="fathername" class="form-control" id="parentName" placeholder="Father Name">
      </div>
      <div class="form-group col-md-6">
        <label for="parentName">Mother Name</label>
        <input type="text" name="mothername" class="form-control" id="parentName" placeholder="Mother Name">
      </div>
     
    </div>
    <hr/>
    <h4 class="text-primary">Address</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputAddress">Address</label>
        <input type="text" name="present_address" class="form-control" id="inputAddress" placeholder="Present Address">
      </div>
     
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="parentName">NID</label>
        <input type="text" name="nid" class="form-control" id="parentName" placeholder="Enter NID number">
      </div>
      <div class="form-group col-md-6">
        <label for="parentName">Passport ID</label>
        <input type="text" name="passport_id" class="form-control" id="parentName" placeholder="Enter NID number">
      </div>
    </div>
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="salary">Salary</label>
        <input type="text" name="salary" class="form-control" id="salary" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="parentName">Salary Account</label>
        <input type="text" name="salary_ac" class="form-control" id="parentName" placeholder="Enter Salary Account">
      </div>
      <div class="form-group col-md-6">
        <label for="remarks">Remarks</label>
        <input type="text" name="remarks" class="form-control" id="remarks" placeholder="">
      </div>
    </div>
     


    <hr/>
    <h4 class="text-primary">File Attachment</h4>
    <div class="form-row">
      <div class="custom-file form-group col-md-12 m-1">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="pic">
        <label class="custom-file-label" for="validatedCustomFile">Upload Student Photo</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
     
    </div>
    <br>
    
  </form>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
