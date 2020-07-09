


<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		extract($_POST);
		if($sub_name == "" && $sub_code == ""){
			echo "Input field cannot be empty";
		}else{
			$arr = array(
				'name' => $sub_name,
				'subject_code' => $sub_code,
				'class_id' => $class_id,
				'teacher_id' => $teacher_id
			);

			if($crud->Insert("subjects", $arr)){
				echo "<div class='col-sm-5 offset-sm-4 alert    alert-success' role='alert'>Data Inserted Successfully</div>";
			}else{
				echo "<div class='col-sm-5 offset-sm-4 alert    alert-danger' role='alert'>{$err}</div>";
			}
		}
	}
 ?>



<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Subject</button>

			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
					<div class="col-sm-6">
						<form action="search.html" class="">
							<div class="row">
								<div class="col-sm ">
									<div class="uk-margin my-1 my-sm-2">
								       <div class="uk-form-controls"  uk-form-custom="target: > * > span:first-child">
								       	
								           <select  name="Seeking a" class="uk-select  " id="form-horizontal-select">
								           	<option value="0">Choose Class</option>
								             <?php
								               $type = $crud->ReadData("*", "class_info");
								               while($t = $type->fetch_object()){
								                 echo "<option value='{$t->id}'>$t->name</option>";
								               }
								             ?>
								           </select>
								           <button class="uk-button uk-button-default px-0 mx-0 " type="button" tabindex="-1">
								               <span></span>
								               <span class="pl-3" uk-icon="icon: chevron-down"></span>
								           </button>
								       </div>
								  </div>
								</div>
								<div class="col-sm ">
									<div class="uk-margin my-1 my-sm-2">
								       <div class="uk-form-controls"  uk-form-custom="target: > * > span:first-child">
								       	
								       	<select  name="Seeking a" class="uk-select" id="form-horizontal-select">
								       		<option value="0">Choose Teacher</option>
								             <?php
								               $type = $crud->ReadData("*", "teachers");
								               while($t = $type->fetch_object()){
								                 echo "<option value='{$t->id}'>$t->name</option>";
								               }
								             ?>
								         </select>
								           <button class="uk-button uk-button-default px-0 mx-0 " type="button" tabindex="-1">
								               <span></span>
								               <span class="pl-3" uk-icon="icon: chevron-down"></span>
								           </button>
								       </div>
								  </div>
								</div>
								
								<div class="col-sm px-1 pt-2">
								    <button type="submit" class="btn search-btn"><span class="uk-search-icon-flip" uk-search-icon></span></button>
								</div>
							</div>
						</form>
					</div>
		</div>
	</div>
</section>





<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-12">
				<table class="table  table-hover table-responsive-md">

				    <!--table head-->
				    <thead class=" text-center   bg-primary">
				    <tr class="table-active  text-light">
				        <th scope="col">SRL</th>
				        <th scope="col">Sub. Name</th>
				        <th scope="col">Teacher Name</th>
				        <th scope="col">Class Name</th>
				        <th scope="col">Subject Code</th>
				        <th scope="col">Options</th>
				    </tr>
				    </thead>

				    <!--table body-->
				    <tbody class="text-center ">

				    	<?php
				    	$select = "subjects.*, teachers.name teacher_name, class_info.name class_name";
				    	$table = "subjects, teachers, class_info";
				    	$rel = [
				    		"teachers.id"  => "subjects.teacher_id", 
				    		"class_info.id"  => "subjects.class_id" 
				    	];


				    		$sub = $crud->ReadData($select, $table, "", "", $rel);


				    		while ($subjects = $sub->fetch_object()) { ?>

								<tr class="table-primary">
				    			<th scope="row"><?php echo $subjects->id ?></th>
				    			<td><?php echo $subjects->name ?></td>
				    			<td><?php echo $subjects->teacher_name ?></td>
				    			<td><?php echo $subjects->class_name ?></td>
				    			<td><?php echo $subjects->subject_code ?></td> 
				    			<td>
				    				<a href="#">Edit</a>
				    				<span> | </span>
				    				<a href="#">Delete</a>
				    			</td>
				    			
				    	 <?php
				    	}
				    	 ?> 
				   
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</section>





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="staticEmail">Name</label>
            <input type="text" name="sub_name" class="form-control" id="staticEmail" placeholder="Subject Name">
          </div>
          <div class="form-group">
            <label for="staticEmail">Subject Code</label>
            <input type="text" name="sub_code" class="form-control" id="staticEmail" placeholder="EXP101">
          </div>
          <div class="uk-margin my-1 my-sm-2">
	       	<div class="uk-form-controls"  uk-form-custom="target: > * > span:first-child">
	           <select  name="class_id" class="uk-select  " id="form-horizontal-select">
	           	<option value="0">Choose Class</option>
	             <?php
	               $type = $crud->ReadData("*", "class_info");
	               while($t = $type->fetch_object()){
	                 echo "<option value='{$t->id}'>$t->name</option>";
	               }
	             ?>
	           </select>
	           <button class="uk-button uk-button-default px-0 mx-0 " type="button" tabindex="-1">
	               <span></span>
		               <span class="pl-3" uk-icon="icon: chevron-down"></span>
		           </button>
		       </div>
		  </div>
                    <div class="uk-margin my-1 my-sm-2">
          	       	<div class="uk-form-controls"  uk-form-custom="target: > * > span:first-child">
          	           <select  name="teacher_id" class="uk-select" id="form-horizontal-select">
			       		<option value="0">Choose Teacher</option>
			             <?php
			               $type = $crud->ReadData("*", "teachers");
			               while($t = $type->fetch_object()){
			                 echo "<option value='{$t->id}'>$t->name</option>";
			               }
			             ?>
			         </select>
          	           <button class="uk-button uk-button-default px-0 mx-0 " type="button" tabindex="-1">
          	               <span></span>
          		               <span class="pl-3" uk-icon="icon: chevron-down"></span>
          		           </button>
          		       </div>
          		  </div>
                    
          
          <div class="form-group">
            <input type="submit" class="form-control btn-success btn-block" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>