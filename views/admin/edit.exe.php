
<?php
  $result = ""; $data="";
  if($_SERVER['REQUEST_METHOD']== 'GET'){
    $crud =new Crud();
    extract($_GET);
    $where = [
        "id"                => $_GET['id']
    ];
    $result = $crud->ReadData("*",'admission', $where );
    $data = mysqli_fetch_assoc($result);
    // $data = $result->fetch_object();
    ?>

    <div class="container pb-4">
      <form action="" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="studentName">Student Name</label>
            <input type="text" name="name" value="<?php echo "{$data['name']}"; ?>" class="form-control" id="studentName" placeholder="Student Name">
          </div>
          <div class="form-group col-md-6">
            <label for="parentName">Father Name</label>
            <input type="text" name="father" value="<?php echo "{$data['father']}"; ?>" class="form-control" id="parentName" placeholder="Parent Name">
          </div>
          <div class="form-group col-md-6">
            <label for="parentName">Mother Name</label>
            <input type="text" name="mother" value="<?php echo "{$data['mother']}"; ?>" class="form-control" id="parentName" placeholder="Parent Name">
          </div>
          <div class="form-group col-md-6">
            <label for="studentPassword">Phone number</label>
            <input type="text" value="<?php echo "{$data['phone']}"; ?>" name="phone" class="form-control" id="studentPassword" placeholder="Password">
          </div>
        </div>
        <hr/>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputSession">Session</label>
            <select id="inputSession" name="session" class="form-control">
              <option value="5"><?php echo "{$data['session']}"; ?></option>
              <option value="1">Choose .........</option>
              <option value="2">2019-2020</option>
              <option value="3">2019-2020</option>
              <option value="5">2019-2020</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="studentId">Addmission Class</label>
            <input type="text" value="<?php echo "{$data['class_id']}"; ?>" name="adminssion_class" class="form-control" id="studentId" placeholder="ID No">
          </div>
          <div class="form-group col-md-3">
            <label for="birthDay">Birth Day</label>
            <input type="date" value="<?php echo "{$data['dob']}"; ?>" name="dob" class="form-control" id="birthDay" placeholder="Birth Day">
          </div>

          <div class="form-group col-md-4">
            <div>
              <label for="">Gender</label>
            </div>
            <div class="form-check form-check-inline">


              <input class="form-check-input" type="radio" name="gender" id="male" value="0"
              <?php  if($data['gender'] == "male"){ echo "checked";}?>>
              <label class="form-check-label pr-2" for="male">Male</label>
              <input class="form-check-input" type="radio" name="gender" id="female" value="1"
              <?php  if($data['gender'] == "female"){ echo "checked";}?>>
              <label class="form-check-label pr-2" for="female">Female</label>
              <input class="form-check-input" type="radio" name="gender" id="commom" value="2"
              <?php  if($data['gender'] == "common"){ echo "checked";}?> >
              <label class="form-check-label" for="commom">Common</label>

            </div>
          </div>
        </div>
        <hr/>
        <!-- present address -->
        <div class="form-group">
          <label for="inputAddress">Present Address</label>
          <input type="text" value="<?php echo "{$data['present_address']}"; ?>" name="present_address" class="form-control" id="inputAddress" placeholder="Present Address">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Parmanent Address</label>
          <input type="text" value="<?php echo "{$data['parmanent_address']}"; ?>" name="parmanent_address" class="form-control" id="inputAddress2" placeholder="Parmanent Address">
        </div>
        <hr/>
        <div class="form-row">


          <div class="form-group col-md-4">
            <label for="inputState">Divission</label>
            <select id="inputDivission" name="division" class="form-control">
              <option selected><?php echo "{$data['division']}"; ?></option>
               <?php
                $result= $crud->ReadData("*", "division");

                while($division = $result->fetch_object()){
                  echo "<option value='{$division->id}'>$division->division_name</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">District</label>
            <select id="inputDistrict" name="district" class="form-control" >
              <option selected><?php echo "{$data['district']}"; ?></option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Uozilla</label>
            <select id="inputUozilla" name="upozilla" class="form-control">
              <option selected><?php echo "{$data['upozilla']}"; ?></option>

            </select>
          </div>
        </div>



         <h4 class="text-primary">File Attachment</h4>
        <div class="form-row">

          <div class="custom-file form-group col-md-6">

            <input type="file" class="custom-file-input" id="validatedCustomFile" name="pic">
            <label class="custom-file-label" for="validatedCustomFile">Upload Student Photo</label>
          </div>
          <div class="custom-file form-group col-md-6  pl-5">

            <img src="././images/students/<?php echo "{$data['picture']}"; ?>" height="120" width="120" alt="">
          </div>
          <div class="custom-file form-group col-md-12 ">

           <div class="form-group pt-4">
             <div class="form-check form-chect-inling">
               <input class="form-check-input" type="checkbox" id="gridCheck">
               <label class="form-check-label pr-5" for="gridCheck">
                 Above all information is true.
               </label>

               <input class="form-check-input" type="checkbox" id="gridCheck">
               <label class="form-check-label" for="gridCheck">
                 I accept all schools rules and regulation.
               </label>
             </div>
           </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>



      </div>
      </form>
    </div>





 <?php  }else{

    if($_SERVER['REQUEST_METHOD']== 'POST'){
      $crud =new Crud();
      $crud->file("admission");
      extract($_POST);
      $std_img = $crud->img;

      $arr =[
        'name'              =>$_POST['name'] ,
        'session'           =>$_POST['session'] ,
        'admission_date'    => $_POST['admission_date'],
        'adminssion_class'  =>$_POST['adminssion_class'],
        'phone'             =>$_POST['phone'] ,
        'dob'               =>$_POST['dob'],
        'gender'            =>$_POST['gender'] ,
        'nationality'       =>$_POST['nationality'] ,
        'blood'             =>$_POST['blood'],
        'father'            =>$_POST['father'] ,
        'mother'            =>$_POST['mother'] ,
        'parent_income'     =>$_POST['parent_income'] ,
        'present_address'   =>$_POST['present_address'] ,
        'parmanent_address' =>$_POST['parmanent_address'] ,
        'division'          =>$_POST['division'] ,
        'district'          =>$_POST['district'] ,
        'upozilla'          =>$_POST['upozilla'] ,
        'picture'           =>$std_img
      ];
      $where = [
        "id"=>$_GET['id']
     ];
      $result = $crud->Update('admission', $arr, $where );
      if($result){
        echo  "data inserted.";
      }
      else{
       echo "data not inserted.";
      }
    }


  ?>


  <div class="container pb-4">
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="studentName">Student Name</label>
          <input type="text" name="name" value="<?php echo $_POST['name']; ?>" class="form-control" id="studentName" placeholder="Student Name">
        </div>
        <div class="form-group col-md-4">
          <label for="parentName">Father Name</label>
          <input type="text" name="father" value="<?php echo $_POST['father']; ?>" class="form-control" id="parentName" placeholder="Parent Name">
        </div>
        <div class="form-group col-md-4">
          <label for="parentName">Mother Name</label>
          <input type="text" name="mother" value="<?php echo $_POST['mother']; ?>" class="form-control" id="parentName" placeholder="Parent Name">
        </div>
        <div class="form-group col-md-4">
          <label for="parentIncome">Parent Income</label>
          <input type="number" name="parent_income" value="<?php echo $_POST['parent_income']; ?>" class="form-control" id="parentIncome" placeholder="Parent Name">
        </div>
        <div class="form-group col-md-3">
          <label for="nationality">Nationality</label>
          <input type="text" name="nationality" value="<?php echo $_POST['nationality']; ?>" class="form-control" id="nationality" placeholder="Nationality">
        </div>
        <div class="form-group col-md-3">
          <label for="blood-group">Blood Group</label>
          <input type="number" name="blood" value="<?php echo $_POST['blood']; ?>" class="form-control" id="studentName" placeholder="Blood Group">
        </div>
      </div>
      <hr/>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="studentPhone">Phone number</label>
          <input type="number" name="phone" value="<?php echo $_POST['phone']; ?>"  class="form-control" id="studentPhone" placeholder="Password">
        </div>
        <div class="form-group col-md-4">
          <label for="admissiondate">Addminssion Date</label>
          <input type="date" value="<?php echo $_POST['admission_date']; ?>" name="admission_date" class="form-control" id="admissiondate" placeholder="Password">
        </div>
      </div>
      <hr/>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputSession">Session</label>
          <select id="inputSession" name="session" class="form-control">
            <option value="5"><?php echo $_POST['session']; ?></option>
            <option value="1">Choose .........</option>
            <option value="2">2019-2020</option>
            <option value="3">2019-2020</option>
            <option value="5">2019-2020</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="studentId">Addmission Class</label>
          <input type="number" value="<?php echo $_POST['adminssion_class']; ?>" name="adminssion_class" class="form-control" id="studentId" placeholder="ID No">
        </div>
        <div class="form-group col-md-3">
          <label for="birthDay">Birth Day</label>
          <input type="date" value="<?php echo $_POST['dob']; ?>" name="dob" class="form-control" id="birthDay" placeholder="Birth Day">
        </div>

        <div class="form-group col-md-4">
          <div>
            <label for="">Gender</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="0"
            <?php if($_POST['gender']=="male"){echo "checked";} ?>>
            <label class="form-check-label pr-2" for="male">Male</label>
            <input class="form-check-input" type="radio" name="gender" id="female" value="1"
            <?php if($_POST['gender']=="female"){echo "checked";} ?>>
            <label class="form-check-label pr-2" for="female">Female</label>
            <input class="form-check-input" type="radio" name="gender" id="commom" value="2"
            <?php if($_POST['gender']=="commom"){echo "checked";} ?>>>
            <label class="form-check-label" for="commom">Common</label>
          </div>
        </div>
      </div>
      <hr/>
      <!-- present address -->
      <div class="form-group">
        <label for="inputAddress">Present Address</label>
        <input type="text" value="<?php echo $_POST['present_address'];  ?>" name="present_address" class="form-control" id="inputAddress" placeholder="Present Address">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Parmanent Address</label>
        <input type="text" value="<?php echo  $_POST['parmanent_address'];?>" name="parmanent_address" class="form-control" id="inputAddress2" placeholder="Parmanent Address">
      </div>
      <hr/>
      <div class="form-row">


        <div class="form-group col-md-4">
          <label for="inputState">Divission</label>
          <select id="inputDivission" name="division" class="form-control">
            <option selected><?php echo $_POST['division']; ?></option>
             <?php
              $result= $crud->ReadData("*", "division");

              while($division = $result->fetch_object()){
                echo "<option value='{$division->id}'>$division->division_name</option>";
              }
            ?>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">District</label>
          <select id="inputDistrict" name="district" class="form-control" >
            <option selected><?php echo $_POST['district']; ?></option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Uozilla</label>
          <select id="inputUozilla" name="upozilla" class="form-control">
            <option selected><?php echo $_POST['upozilla']; ?></option>

          </select>
        </div>
      </div>



       <h4 class="text-primary">File Attachment</h4>
      <div class="form-row">

        <div class="custom-file form-group col-md-6">

          <input type="file" class="custom-file-input" id="validatedCustomFile" name="pic">
          <label class="custom-file-label" for="validatedCustomFile">Upload Student Photo</label>
        </div>
        <div class="custom-file form-group col-md-6  pl-5">

          <img src="././images/students/<?php echo "{$_POST['pic']}"; ?>" height="120" width="120" alt="">
        </div>
        <div class="custom-file form-group col-md-12 ">

         <div class="form-group pt-4">
           <div class="form-check form-chect-inling">
             <input class="form-check-input" type="checkbox" id="gridCheck">
             <label class="form-check-label pr-5" for="gridCheck">
               Above all information is true.
             </label>

             <input class="form-check-input" type="checkbox" id="gridCheck">
             <label class="form-check-label" for="gridCheck">
               I accept all schools rules and regulation.
             </label>
           </div>
         </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>



    </div>
    </form>
  </div>



 <?php  }
 ?>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
