  <div class="container pt-3">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4">
            <a href="index.php?s=exam" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Add Exam</span>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="index.php?s=viewexam" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-folder-open"></i>
              </span>
              <span class="text">View Exam</span>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-folder-open"></i>
              </span>
              <span class="text">Create Result</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr/>



<?php




$jsList = array("load_subject");

$err = "";



if($_SERVER['REQUEST_METHOD'] == 'POST'){
		 extract($_POST);
    $ext = $crud->file("question");
    $exam_file = $crud->file;

    $arr =[

      'exam_name'         => $exam_name,
      'class_id'        => $class_id,
      'subject_id'      => $subject_id,
      'date'              => $date,
      'question'           => $exam_file

    ];


    if($crud->insert('exam', $arr)){
    	move_uploaded_file($_FILES["question"]['tmp_name'],"././files/questions/".$crud->id.".".$ext) ;
      echo "<script>window.location.assign('index.php?s=exam')</script>";
      echo "<div class='col-sm-5 offset-sm-4 alert    alert-success' role='alert'>Data Inserted Successfully</div>";
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
  <form action="" method="post" enctype="multipart/form-data" >

    <h4 class="text-primary">Exam Info</h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="studentName">Exam Name</label>
        <input type="text" name="exam_name" class="form-control" id="studentName" placeholder="Student Name">
      </div>

      <div class="form-group col-md-4">
        <label for="inputClass">Class</label>
        <select id="inputClass" name="class_id" class="form-control">
          <option value="0">chose class</option>
          <?php
            $cls= $crud->ReadData("*", "class_info");
            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputsujbect">Subject</label>
        <select id="inputsujbect" name="subject_id" class="form-control">
          <option value="0">chose subject</option>
        </select>
      </div>
    </div>
    <div class="form-row">
	    <div class="form-group col-md-6">
	        <label for="studentEmail">Exam Date</label>
	        <input type="date" name="date" class="form-control" id="studentEmail" >
	    </div>


    </div>

     <h4 class="text-primary">File Attachment</h4>
    <div class="form-row">
      <div class=" form-group col-md-12 m-1">
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="question">
           <label class="custom-file-label" for="validatedCustomFile">Upload Exam Question</label>
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
