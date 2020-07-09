<?php
$jsList = array("load_subject");

  if($_SERVER['REQUEST_METHOD']== 'POST'){
    extract($_POST);

    $ext = $crud->file("pic");
    $teacher_img = $crud->file;

    $arr =[
      'name'              => $name,
      'designation'       => $designation,
      'qualification'     => $qualification,
      'subject_id'        => $subject_id,
      'class_id'          => $class_id,
      'email'             => $email,
      'address'           => $present_address,
      'password'          => md5($password),
      'phone'             => $phone,
      'NID'               => $nid,
      'PID'               => $passport_id,
      'father_name'       => $fathername,
      'mother_name'       => $mothername,
      'nationality'       => $nationality,
      'blood_group'       => $blood,
      'joining_date'      => $join,
      'salary_account'    => $salary_ac,
      'salery'            => $salery,
      'remarks'           => $remarks,
      'gender'            => $gender,
      'teacher_pic'       => $teacher_img,
      'type'            => "3"

    ];


    $result = 	$crud->Insert('teachers', $arr);
    if($result){
    	echo "Data Inserted Successfully";
    	move_uploaded_file($_FILES["pic"]['tmp_name'],"././files/teacher/".$crud->id.".".$ext) ;
            echo "<script>window.location.assign('index.php?s=teacherregistration')</script>";
            echo "<div class='col-sm-5 offset-sm-4 alert    alert-success' role='alert'>Data Inserted Successfully</div>";
    }else{
       echo "not inserted";

 	}
}
 ?>

<hr>
<div class="container pb-4">
  <form action="" method="post" enctype="multipart/form-data">
    <h4 class="text-primary">Teacher Registration</h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="session">Designation</label>
        <input type="text" name="designation" class="form-control" id="studentId" placeholder="Admission Session">
      </div>
      <div class="form-group col-md-4">
        <label for="session">Qualification</label>
        <input type="text" name="qualification" class="form-control" id="studentId" placeholder="Qualification">
      </div>

      <div class="form-group col-md-4">
        <label for="joiningdate">Joining Date</label>
        <input type="date" name="join" class="form-control" id="joiningdate">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputClass">Class</label>
        <select id="inputClass" name="class_id" class="form-control">
          <option value="0" disabled>choose class</option>
          <?php
            $cls= $crud->ReadData("*", "class_info");
            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputsujbect">Subject</label>
        <select id="inputsujbect" name="subject_id" class="form-control">
          <option value="0" disabled>chose subject</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="studentName">Teacher Name</label>
        <input type="text" name="name" class="form-control" id="studentName" placeholder="Student Name">
      </div>
      <div class="form-group col-md-6">
        <label for="studentEmail">Email</label>
        <input type="email" name="email" class="form-control" id="studentEmail" placeholder="Teacher Email">
      </div>

      <div class="form-group col-md-4">
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
        <label for="parentName">Salary Account</label>
        <input type="text" name="salary_ac" class="form-control" id="parentName" placeholder="Enter Salary Account">
      </div>
      <div class="form-group col-md-6">
        <label for="remarks">Remarks</label>
        <input type="text" name="remarks" class="form-control" id="remarks" placeholder="">
      </div>
    </div>



    <hr/>
    <div class="form-row">
      <h4 class="text-primary">File Attachment</h4>
      <div class="custom-file form-group col-md-12 m-1">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="pic">
        <label class="custom-file-label" for="validatedCustomFile">Upload Student Photo</label>
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
