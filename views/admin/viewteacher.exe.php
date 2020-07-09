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
                            <th scope="col">Designation</th>
                            <th scope="col">Qualification</th>
                            <th scope="col">Joining Data</th>
                            <th scope="col">Class Teacher Of Subject</th>
                            <th scope="col">Teacher Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Blood Group</th>
                            <th scope="col">Phone Number</th>
                           <!--  <th scope="col">Gender</th> -->
                            <th scope="col">Address</th>
                            <th scope="col">NID</th>
                            <th scope="col">Passport ID</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Salary Account</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $crud = new Crud();
                        $id= "";
                        $where = [
                            "adminssion_class" => "3"
                        ];
                        $result = $crud->ReadData("*" , "teachers"  );
                        while($data = $result->fetch_object()){ ?>
                            <tr>
                                <!-- <th scope="row"><?php echo $data->id; ?></th> -->
                               <td><?php echo $data->designation ;?></td>
                               <td><?php echo $data->qualification; ?></td>
                               <td><?php echo $data->joining_date; ?></td>
                               <td><?php echo $data->subject_id; ?></td>
                               <td><?php echo $data->name; ?></td>
                               <td><?php echo $data->email; ?></td>
                               <td><?php echo $data->password; ?></td>
                               <td><?php echo $data->gender; ?></td>
                               <td><?php echo $data->nationality; ?></td>
                               <td><?php echo $data->blood_group; ?></td>
                               <td><?php echo $data->phone; ?></td>
                               <td><?php echo $data->address; ?></td>
                               <td><?php echo $data->NID; ?></td>
                               <td><?php echo $data->PID; ?></td> 
                               <td><?php echo $data->salary_id; ?></td> 
                               <td><?php echo $data->salary_account; ?></td> 
                               <td><?php echo $data->remarks; ?></td> 
                               <td>
                                <img src="././images/students/<?php echo $data->picture; ?>" alt="">
                                
                                </td> 
                                <td>
                                    <a href="<?php echo "index.php?s=edit&id={$data->id}" ?>">Edit</a>
                                    <a href="<?php echo "index.php?s=studentinfo&id={$data->id}" ?>" onclick="return confirm('Are you sure')">Delete</a> 
                                </td>
                            </tr>
                    <?php }

                    if(isset($_GET)){
                        if($_SERVER['REQUEST_METHOD'] == 'GET'){
                         $crud->Delete("admission", $_GET['id']);
                     }
                 }
                 ?>

             </tbody>
         </table>
         <!--table-->
     </div>
 </div>
</div>
</section>