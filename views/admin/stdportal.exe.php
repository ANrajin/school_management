<?php
$jsList = array(  "validate"  );
$err = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);

    $arr =[
      'admission_id'      => $admission_id,
      'studentId'         => $stdid,
      'email'             => $email,
      'password'          => md5($password),
      'class_id'          => $class_id,
      'type'              => "2"
    ];


    if($crud->insert('student', $arr)){
      echo "<div class='col-sm-5 offset-sm-4 alert alert-success text-center' role='alert'>Data Inserted Successfully</div>";
    }else{
      echo "<div class='col-sm-5 offset-sm-4 alert alert-danger text-center' role='alert'>Data Insert Failed</div>";
    }

    }
?>
<hr>
<h3 class="font-weight-bold text-center text-primary">Open Student Portal</h3>
<div class="container pb-4">
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputClass">Class</label>
        <select id="inputClass" name="class_id" class="form-control">
          <option value="0" disabled>Chose class</option>
          <?php

            $cls= $crud->ReadData("*", "class_info");

            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="admission_id">Admission ID</label>
        <select id="admission_id" name="admission_id" class="form-control">
          <option value="0">Choose class first</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="stdid">Student ID</label>
        <input type="text" name="stdid" class="form-control" id="stdid" placeholder="YY-Class-Admission ID">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="stdpass">Password</label>
        <input type="text" name="password" class="form-control" id="stdpass" placeholder="password">
      </div>

      <div class="form-group col-md-6">
        <label for="studentEmail">Email</label>
        <input type="email" name="email" class="form-control" id="studentEmail" placeholder="Student/Parent Email" autocomplete="off">
        <span class="email-status"></span>
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>
 var email = $("input[name='email']").val();
 var msg = "";

 function formValidation(){
    if (email == "")  {
      msg +="Enter your email\n";
    }
    else if(!checkEmail.test(email)) {
      msg += "Invlid Email\n";
    }
    if(msg){
     alert(msg);
    }
 }
</script>
