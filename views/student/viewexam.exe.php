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
            <a href="index.php?s=result" class="btn btn-primary btn-icon-split">
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
                            <th scope="col">ID</th>
                            <th scope="col">Exam Name</th>
                             <th scope="col">Class </th>
                            <th scope="col">Subjcet</th>
                            <th scope="col">Exam Date</th>
                            <th scope="col">Action</th>



                        </tr>
                    </thead>
                    <!-- table body -->
                    <tbody class="text-center">
                        <?php 
                        $crud = new Crud();
                        $id= "";
                       
                        $result = $crud->ReadData("*" , "exam"  );
                        while($data = $result->fetch_object()){ ?>
                            <tr>
                               <th scope="row"><?php echo $data->id; ?></th>

                               <td><?php echo $data->exam_name ;?></td>
                               <td><?php echo $data->class_name ;?></td>
                               <td><?php echo $data->subject_name; ?></td>
                               <td><?php echo $data->date; ?></td>
                               
                              
                               
                                <td>
                                    <a href="<?php echo "index.php?s=result&id={$data->id}" ?>">Create Result</a>
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


<section  id="datails" class="portfolio-item">
    <div class="container classSeven" data-aos="zoom-in">
        <div class="row">
            <div class="col-md-12 py-5 ">
                <table class="table  table-hover table-responsive-md">

                    <!--table head-->
                    <thead class=" text-center   bg-primary">
                        <tr class="table-active  text-light">
                            <th scope="col">SRL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Fathers Name</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">GPA/Result</th>
                        </tr>
                    </thead>

                    <!--table body-->
                    <tbody class="text-center ">
                        <tr class="table-primary">
                            <th scope="row">1</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">2</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>

                        <tr class="table-primary">
                            <th scope="row">4</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">5</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">6</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">7</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-secondary">
                            <th scope="row">8</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">9</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">11</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">12</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">13</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                    </tbody>
                </table>
                <!--table-->
            </div>
        </div>
    </div>
</section>

<section  id="datails" class="portfolio-item">
    <div class="container classEight" data-aos="zoom-in">
        <div class="row">
            <div class="col-md-12 py-5 ">
                <table class="table  table-hover table-responsive-md">

                    <!--table head-->
                    <thead class=" text-center   bg-primary">
                        <tr class="table-active  text-light">
                            <th scope="col">SRL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Fathers Name</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">GPA/Result</th>
                        </tr>
                    </thead>

                    <!--table body-->
                    <tbody class="text-center ">
                        <tr class="table-primary">
                            <th scope="row">1</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">2</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>

                        <tr class="table-primary">
                            <th scope="row">4</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">5</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">6</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">7</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-secondary">
                            <th scope="row">8</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">9</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">11</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">12</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">13</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                    </tbody>
                </table>
                <!--table-->
            </div>
        </div>
    </div>
</section>
<section  id="datails" class="portfolio-item">
    <div class="container classNine" data-aos="zoom-in">
        <div class="row">
            <div class="col-md-12 py-5 ">
                <table class="table  table-hover table-responsive-md">

                    <!--table head-->
                    <thead class=" text-center   bg-primary">
                        <tr class="table-active  text-light">
                            <th scope="col">SRL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Fathers Name</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">GPA/Result</th>
                        </tr>
                    </thead>

                    <!--table body-->
                    <tbody class="text-center ">
                        <tr class="table-primary">
                            <th scope="row">1</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">2</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">3</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>

                        <tr class="table-primary">
                            <th scope="row">4</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">5</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">6</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">7</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-secondary">
                            <th scope="row">8</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">9</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr><tr class="table-primary">
                            <th scope="row">10</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">11</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">12</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">13</th>
                            <td>Hasan</td>
                            <td>Rahim</td>
                            <td>34343</td>
                            <td>132423534</td>
                            <td>5.00</td>
                        </tr>
                    </tbody>
                </table>
                <!--table-->
            </div>
        </div>
    </div>
</section>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

