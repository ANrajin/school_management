<div class="col-md-12 text-center pt-4">
    <div class="portfolio-menu">
        <ul class="">

            <li class=" px-4 py-2 active" data-filter=".classSix">class 6th </li>
            <li class=" px-4 py-2 " data-filter=".classSeven">class 7th </li>
            <li class=" px-4 py-2 " data-filter=".classEight">class 8th </li>
            <li class=" px-4 py-2 " data-filter=".classNine">class 9th </li>
            <li class=" px-4 py-2 " data-filter=".classTen">class 10th </li>
        </ul>
    </div>
</div>
<!-- portfolio-item -->
<section>
  <div class="container classSix" data-aos="zoom-in">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class=" text-center  bg-primary">
              <tr class="table-active  text-light">
                <th scope="col">Admission ID</th>
                <th scope="col">Name</th>
                <th scope="col">Student Id</th>
                <th scope="col">Email</th>
                <th scope="col">Class</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
                      $crud = new Crud();
                      $id= "";
                      $select = "student.*, class_info.name class, admission.name std_name";
                      $table = "student, admission, class_info";
                      $rel = [
                          "admission.id" => "student.admission_id",
                          "class_info.id" => "student.class_id"
                      ];
                      $result = $crud->ReadData($select , $table, "", "", $rel);
                      while($data = $result->fetch_object()){ ?>
                          <tr>
                             <th scope="row"><?php echo $data->admission_id; ?></th>
                             <td><?php echo $data->std_name ;?></td>
                             <td><?php echo $data->studentId;?></td>
                             <td><?php echo $data->email; ?></td>
                             <td><?php echo $data->class; ?></td>
                             <td>
                              <img src="././images/students/<?php echo $data->picture; ?>" alt="">
                              </td>
                              <td>
                                  <a href="<?php echo "index.php?s=edit&id={$data->admission_id}" ?>">Info</a> | 
                                  <a href="<?php echo "index.php?s=studentinfo&id={$data->id}" ?>" onclick="return confirm('Are you sure')">Delete</a>
                              </td>
                          </tr>
                  <?php }

                  if(isset($_GET['id'])){
                       $crud->Delete("admission", $_GET['id']);
                     }
               ?>
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
