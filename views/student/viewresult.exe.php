<section  id="datails" class="portfolio-item">
    <div class="container  classSix" data-aos="zoom-in">
        <div class="row ">
            <div class="col-md-12 py-5 classSix_responsive ">
                <style>
                    .classSix_responsive{
                        overflow-x: scroll;
                    }
                </style>

                <table class="table  table-hover table-responsive-sm classSix_responsive" >

                    <thead class=" text-center  bg-primary">

                        <tr class="table-active  text-light">
                            <th scope="col">Student Id</th>
                            <th scope="col">Exam Name</th>
                            <th scope="col">Subject Name </th>
                            <th scope="col">Marks</th>
                            <th scope="col">Grade</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $crud = new Crud();
                        $id= "";
                       



                        $select = "result.*,  subjects.name subject_name, exam.exam_name";
                        $table = "result, subjects, exam";
                        $rel = [
                            "student_id" => $_SESSION['id'],
                            "subjects.id"  => "result.subject_id", 
                            "exam.id"  => "result.exam_id" 
                        ];
                        $result = $crud->ReadData($select, $table, "", "", $rel );
                        while($data = $result->fetch_object()){ ?>
                            <tr>
                               <th scope="row"><?php echo $data->student_id; ?></th>
                               <td><?php echo $data->exam_name ;?></td>
                               <td><?php echo $data->subject_name; ?></td>
                               <td><?php echo $data->obtained_marks; ?></td>
                               <td><?php 

                               if($data->obtained_marks > 80 &&  $data->obtained_marks < 100){
                                echo "A+";
                               }else if ($data->obtained_marks > 70) {
                                   echo "A";
                               }else if ($data->obtained_marks > 60) {
                                   echo "A-";
                               }else if ($data->obtained_marks > 50) {
                                   echo "B";
                               }else if ($data->obtained_marks > 40) {
                                   echo "C";
                               }else if ($data->obtained_marks > 33) {
                                   echo "D";
                               }elseif($data->obtained_marks > 1 &&  $data->obtained_marks < 33){
                                   echo "F";
                               }
                               ?></td>
                               
                            </tr>

                    <?php 
                    $arr[] = $data->obtained_marks;

                }

                $totalNumber = array_sum($arr);
                $totalSubject =  count($arr);
                $average = $totalNumber / $totalSubject;
                echo $average;

                 ?>
                 <tr class="tatol_result">
                     <td colspan="">Average</td>
                     <td colspan="2"><?php echo $average; ?></td>
                     <td >Total GPA</td>
                     <td >
                        <?php 
                            if($average > 80 &&  $average < 100){
                             echo "A+";
                            }else if ($average > 70) {
                                echo "A";
                            }else if ($average > 60) {
                                echo "A-";
                            }else if ($average > 50) {
                                echo "B";
                            }else if ($average > 40) {
                                echo "C";
                            }else if ($average > 33) {
                                echo "D";
                            }elseif($average > 1 &&  $average < 33){
                                echo "F";
                            }
                         ?>
                         
                     </td>
                 </tr>

             </tbody>
         </table>
         <!--table-->
     </div>
 </div>
</div>
</section>