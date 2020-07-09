






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

        </div>
      </div>
    </div>
  </div>
  <hr/>
  <style>
    .width_140{
      width: 140px;
    }
    .width_50{
      width: 90px;
    }
    .width_60{
      width: 90px;
    }
    .width_70{
      width: 90px;
    }
    .width_80{
      width: 90px;
    }

  </style>


  <?php

  $jsList = array("validate");

  $err = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    $ids = $_POST['exam_id'];
    $obtainenmarks = $_POST['obtained_marks'];


    foreach ($ids  as $key => $value) {
      $crud->Insert("result",
        ['student_id'=> $student_id[$key],
        'obtained_marks'=>$obtainenmarks[$key],
         'subject_id'=>$subject_id[$key],
         'exam_id'=> $exam_id[$key]],
            $value );

        }


    }
?>








      <section  id="" class="">
        <div class="container classSeven" data-aos="zoom-in">
          <div class="row">
            <div class="col-md-12">
              <table class="table  table-hover table-responsive-md">
                <?php
                  if($_SERVER['REQUEST_METHOD'] == 'GET'){

                      $select = "exam.*, subjects.name subject_name";
                      $table = "exam, subjects";
                      $rel = [
                          "subjects.id"  => "exam.subject_id",
                           'exam.id' =>$_GET['id']
                      ];

                      $result = $crud->ReadData($select, $table, "" , "", $rel );
                      $data = $result->fetch_object();
                  }

                 ?>
                <tr class="bg-primary text-white">

                  <td><?php echo $data->subject_name ;?></td>
                  <td> <?php echo $data->exam_name ;?></td>
                </tr>
              </table>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 py-5 ">
              <table class="table  table-hover table-responsive-md">


                <thead class=" text-center   bg-primary">
                  <tr class="table-active  text-light">
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Marks</th>
                  </tr>
                </thead>
                <tbody class="text-center ">
                  <?php
                  if($_SERVER['REQUEST_METHOD'] == 'GET'){
                      $select = "exam.*,  admission.id student_id,admission.name student_name, admission.class_id admited_class, subjects.name subject_name";
                      $table = "exam, subjects, admission";

                      $rel = [
                        "exam.id"=>$_GET['id'],
                          "exam.class_id"  => "admission.class_id",
                          "subjects.id"  => "exam.subject_id"
                      ];
                      $result = $crud->ReadData($select, $table, "", "", $rel );


                        while ($studentdata = $result->fetch_object() ) {
                   ?>
                      <form method="post">
                        <tr class="table-primary">
                          <td scope="row">
                            <input type='text' readonly name='student_id[]' value='<?php echo $studentdata->student_id ?>' />
                            <input type='hidden'  name='id[]' value='<?php echo $studentdata->id ?>' />
                          </td>
                          <td scope="row">
                            <input type='text' readonly  value='<?php echo $studentdata->student_name ?>' />
                            <input type='hidden'  name='subject_id[]' value='<?php echo $studentdata->subject_id ?>' />
                          </td>

                          <td>
                            <input type="text" class="form-control width_60" name="obtained_marks[]" value="">
                            <input type='hidden'  name='exam_id[]' value='<?php echo $studentdata->id ?>' />
                          </td>
                        </tr>
                        <?php

                        }
                      }?>

                     <td>
                       <input type="submit" class="form-control btn btn-md btn-primary" value="publish">
                     </td>
                  </form>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>











<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>


<script>
  var marks           = $("input[name='obtained_marks']").val();
  var grad              = $("input[name='grade_id']").val();

  $("body").on('input', "input[name='obtained_marks']", function(event) {
    event.preventDefault();
    // var number   = $("input[name='obtained_marks']").val();
    // if(number> 33){
    //   $("input[name='grade_id']").val("Pass");
    // }






    $(this).keyup(function () {
      this.value = this.value.replace(/[^0-9\.]/g,'');
    });




  });


</script>




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
