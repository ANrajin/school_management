

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <a href="index.php?t=attendence" type="button" class="btn btn-primary" >Take Attendence</a>

        </div>
      </div>
    </div>
  </section>
 <section>
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-12">
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              extract($_POST);

              $ids = $_POST['id'];


              foreach ($ids  as $key => $value) {
                $crud->Insert("student_attendence",
                  ['class_id'=> $class_id[$key],
                  'status'=>$status[$key],
                   'student_id'=>$student_id[$key],
                   'date'=> $date[$key]],
                      $value );

                  }


              }
         ?>
       <form action="" method="post">
           <table class="table  table-hover table-responsive-md">

               <!--table head-->
               <thead class=" text-center   bg-primary">
               <tr class="table-active  text-light">
                   <th scope="col">Class</th>
                   <th scope="col">Student Name</th>
                   <th scope="col">Status</th>
                   <th scope="col">Date</th>
               </tr>
               </thead>

               <!--table body-->

               <!--table body-->
               <tbody class="text-center ">
                   <?php 
                       $data = $crud->ReadData("*" ,"teachers");
                       $teacherData = $data->fetch_object();
                       $where = [
                           "class_id" => $teacherData->class_id
                       ];
                       
                         $result = $crud->ReadData("*", "admission", $where );
                           while ($studentdata = $result->fetch_object() ) {
                    ?>
               
               <tr class="table-primary">
                   <th scope="row"><?php echo $studentdata->class_id; ?></th>
                   <td><?php echo $studentdata->name; ?></td>
                   <td>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="status[]"  value="0">
                         <label class="form-check-label" >P</label>
                       </div>
                       <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="status[]" value="1">
                         <label class="form-check-label" >A</label>
                       </div>
                   </td>
                   <td>
                    <?php echo date("Y-m-d")?>
                       <input type="hidden" name="class_id[]" value="<?php echo $studentdata->class_id; ?>" >
                       <input type="hidden" name="student_id[]" value="<?php echo $studentdata->id; ?>" >
                       <input type="hidden" name="date[]" value="<?php echo date("Y-m-d")?>" >
                       <input type="hidden" name="id[]"  value="<?php echo $teacherData->id?>" >
                   </td>
               </tr>

               <?php 
               } ?>
               </tbody>
           </table>
             <input type="submit" value="ADD" class="form-control btn btn-primary">
               
       </form>
        <!--table-->
      </div>
    </div>
  </div>
</section>
            
        