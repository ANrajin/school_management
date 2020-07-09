
<hr/>
<?php
$jsList = array("validate");

$err = "";



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $crud->file("admin");
    extract($_POST);
    $std_img = $crud->img;

    $arr =[

      'name'              => $name,
      'user_name'              => $user_name,
      'password'          => $password,
      'email'             => $email,
      'phone'             => $phone,
      'type'             => $type,
      'picture'           => $std_img
    ];


    if($crud->insert('admin', $arr)){
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

    <h4 class="text-primary">Addmin Info</h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="studentName">Name</label>
        <input type="text" name="name" class="form-control" id="studentName" placeholder="Student Name">
      </div>

      <div class="form-group col-md-6">
        <label for="studentEmail">Email</label>
        <input type="email" name="email" class="form-control" id="studentEmail" placeholder="Student/Parent Email" autocomplete="off">
        <span class="email-status"></span>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="studentEmail">Password</label>
        <input type="password" name="password" class="form-control" id="studentEmail" placeholder="Student/Parent Email" autocomplete="off">

      </div>
      <div class="form-group col-md-6">
        <label for="studentPhone">Phone number</label>
        <input type="text" name="phone" class="form-control" id="studentPhone" placeholder="Phone number">
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="exampleFormControlSelect1">Addmin Type</label>
        <select name="type" class="form-control" id="exampleFormControlSelect1">
          <?php
            $type = $crud->ReadData("*", "users");
            while($t = $type->fetch_object()){
              echo "<option value='{$t->id}'>$t->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="user_name">User Name</label>
        <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User Name">
      </div>



    </div>
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
