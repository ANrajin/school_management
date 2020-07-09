<hr/>
<?php
$jsList = array(  "validate"  );

$err = "Failed";

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    extract($_POST);
    $ext = $crud->file("pic");
    $std_img = $crud->file;

    $arr =[
      'session'           => $session,
      'admission_date'    => $admission_date,
      'class_id'          => $class_id,
      'name'              => $name,
      'phone'             => $phone,
      'dob'               => $dob,
      'gender'            => $gender,
      'nationality'       => $nationality,
      'blood'             => $blood,
      'father'            => $father,
      'mother'            => $mother,
      'parent_income'     => $parent_income,
      'present_address'   => $present_address,
      'parmanent_address' => $parmanent_address,
      'division'          => $division,
      'district'          => $district,
      'upozilla'          => $upozilla,
      'picture'           => $std_img
    ];


    if($crud->insert('admission', $arr)){

      move_uploaded_file($_FILES["pic"]['tmp_name'],"././files/student_images/students/".$crud->id.".".$ext) ;
            echo "<script>window.location.assign('index.php?s=admission')</script>";
            echo "<div class='col-sm-5 offset-sm-4 alert alert-success' role='alert'>Data Inserted Successfully</div>";
    }else{
      echo "<div class='col-sm-5 offset-sm-4 alert    alert-danger' role='alert'>{$err}</div>";
    }

    }



 ?>

<style>

  .email-status{color:red;}
  .success{color:green;}
</style>


<div class="container pb-4">
  <form action="" method="post" enctype="multipart/form-data" onsubmit="">
    <h4 class="text-primary">Admission Information</h4>
    <div class="form-row">
      <div class="form-group col-md-4">

        <label for="session">Session</label>
        <input type="text" name="session" class="form-control" id="studentId" placeholder="Admission Session">
      </div>
      <div class="form-group col-md-4">
        <label for="inputClass">Class</label>
        <select id="inputClass" name="class_id" class="form-control">
          <option value="0">Chose class</option>
          <?php

            $cls= $crud->ReadData("*", "class_info");

            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="DOA">Date of Admission</label>
        <input type="date" name="admission_date" class="form-control" id="DOA">
      </div>
    </div>
    <hr/>
    <h4 class="text-primary">Student Information</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="studentName">Student Name</label>
        <input type="text" name="name" class="form-control" id="studentName" placeholder="Student Name">
      </div>
      <div class="form-group col-md-4">
        <label for="studentPhone">Phone number</label>
        <input type="text" name="phone" class="form-control" id="studentPhone" placeholder="Phone number">
      </div>

      <div class="form-group col-md-4">
        <label for="birthDay">Date of Birth</label>
        <input type="date" name="dob" class="form-control" id="birthDay">
      </div>
        <div class="form-group col-md-4">
          <label for="inputGender">Gender</label>
          <select id="inputGender" class="form-control" name="gender">
            <option selected>Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      <div class="form-group col-md-6">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality">
      </div>
      <div class="form-group col-md-6">
        <label for="bloodGroup">Blood Group</label>
        <input type="text" name="blood" class="form-control" id="bloodGroup" placeholder="Blood Group">
      </div>
    </div>
    <hr/>
    <h4 class="text-primary">Parents Information</h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="parentName">Father Name</label>
        <input type="text" name="father" class="form-control" id="parentName" placeholder="Parent Name">
      </div>
      <div class="form-group col-md-6">
        <label for="motherName">Mother Name</label>
        <input type="text" name="mother" class="form-control" id="motherName" placeholder="Parent Name">
      </div>
      <div class="form-group col-md-6">
        <label for="parent_income">Parent's Monthly Income</label>
        <input type="text" name="parent_income" class="form-control" id="parent_income" placeholder="Parent's Monthly Income">
      </div>
    </div>
    <hr/>
    <h4 class="text-primary">Address</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputAddress">Present Address</label>
        <input type="text" name="present_address" class="form-control" id="inputAddress" placeholder="Present Address">
      </div>
      <div class="form-group col-md-12">
        <label for="inputAddress2">Parmanent Address</label>
        <input type="text" name="parmanent_address" class="form-control" id="inputAddress2" placeholder="Parmanent Address">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDivission">Divission</label>
        <select id="inputDivission" name="division" class="form-control">
          <option value="0">Chose you division</option>
           <?php
            $result= $crud->ReadData("*", "division");

            while($division = $result->fetch_object()){
              echo "<option value='{$division->id}'>$division->division_name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputDistrict">District</label>
        <select id="inputDistrict" name="district" class="form-control" >
          <option selected value="0">Chose you District</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputUozilla">Uozilla</label>
        <select id="inputUozilla" name="upozilla" class="form-control">
          <option selected value="0">Chose you Upozilla</option>
        </select>
      </div>
    </div>
    <hr/>
     <h4 class="text-primary">File Attachment</h4>
    <div class="form-row">

      <div class=" form-group col-md-12 m-1">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>


 var session           = $("input[name='session']").val();
 var name              = $("input[name='name']").val();
 var email             = $("input[name='email']").val();
 var adminssion_class  = $("input[name='adminssion_class']").val();
 var admission_date    = $("input[name='admission_date']").val();
 var phone             = $("input[name='phone']").val();
 var dob               = $("input[name='dob']").val();
 var gender            = $("input[name='gender']").val();
 var blood             = $("input[name='blood']").val();
 var father            = $("input[name='father']").val();
 var mother            = $("input[name='mother']").val();
 var parent_income     = $("input[name='parent_income']").val();
 var division       = $("input[name='division']").val();
 // var district          = $("input[name='district']").val();
 // var upozilla          = $("input[name='upozilla']").val();
 var present_address   = $("input[name='present_address']").val();
 var parmanent_address = $("input[name='parmanent_address']").val();


 var msg = "";
 if(phone = ""){
   msg += "Please enter phone number\n";
 }else{
   $("input[name='phone']").keyup(function () {
     this.value = this.value.replace(/[^0-9\.]/g,'');
   });
 }


 function formValidation(){

  if (session == "") {
   msg += "Please enter session\n";
  }
  else if(session.match(/[@,#,$,!,~,`,^,&,%,a-z,A-Z]/)) {
   msg += "Session can't contain any Character.\n";
  }

  if(adminssion_class ==""){
    msg += "Enter Class\n";
  }
  if(admission_date ==""){
    msg += "Enter addminssion date\n";
  }

  if (name == "") {
    msg += "Please enter Name\n";
  }
  else if(name.match(/[@,#,$,!,~,`,^,&,%,0-9]/)) {
    msg += "Name can't be conatain any number or sepecial digit.\n";
  }


  if (email == "")  {
    msg +="Enter your email\n";
  }
  else if(!checkEmail.test(email)) {
    msg += "Invlid Email\n";
  }



  if(dob ==""){
    msg += "Enter date of birth\n";
  }

  if(gender ==""){
    msg += "Enter gender\n";
  }


  if(blood ==""){
    msg += "Enter blood group\n";
  }

  if(father ==""){
    msg += "Enter father name\n";
  }

  if(mother ==""){
    msg += "Enter mother name\n";
  }

  if(parent_income == ""){
    msg += "Enter parent income\n";
  }
  if(present_address ==""){
    msg += "Enter present_address\n";
  }
  if(parmanent_address ==""){
    msg += "Enter parmanent_address\n";
  }

  if(msg){
   alert(msg);
  }



 }





</script>
