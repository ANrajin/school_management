<section>
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    if($fee_name == "" && $fee_amnt == ""){
      echo " <div class='col-sm-5 offset-sm-4 alert    alert-danger' role='alert'>Input failed cannot be empty</div>";
    }else{
      $arr = array(
        'name'       => $fee_name,
        'fee_amount' => $fee_amnt
      );
      if($crud->Insert('fee_type', $arr)){
        echo "<div class='col-sm-5 offset-sm-4 alert    alert-success' role='alert'>Data Inserted Successfully</div>";
      }else{
        echo "<div class='col-sm-5 offset-sm-4 alert    alert-danger' role='alert'>{$err}</div>";
      }
    }
  }
  ?>

<div class="container pb-4">
  <form action="" method="post" enctype="multipart/form-data" >
    <h4 class="text-primary">Fee Information</h4>
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="DOA">Fee Name</label>
        <input type="text"  class="form-control" name="fee_name" id="name">
      </div>
      <div class="form-group col-md-4">
        <label for="studentName">Fee Amount</label>
        <input type="text" class="form-control" id="fee" name="fee_amnt">
      </div>
      	<div class=" form-group col-sm-2">
      		<label for="studentName" ></label>
         <button type="submit" class="form-control btn btn-primary mt-2">Submit</button>
        </div>
      
    </div>
    
</form>
</div>
  
  <section>
  	<div class="container py-5">
  		<div class="row">
  			<div class="col-sm-12">
  				<table class="table  table-hover table-responsive-md">

  				    <!--table head-->
  				    <thead class=" text-center   bg-primary">
  				    <tr class="table-active  text-light">
  				        <th scope="col">SRL</th>
  				        <th scope="col">Fee  Name</th>
  				        <th scope="col">Fee Amount</th>
  				        <th scope="col">Options</th>
  				    </tr>
  				    </thead>

  				    <!--table body-->
  				    <tbody class="text-center ">

  				    	<?php
  				    		$feetype = $crud->ReadData("*", "fee_type");

  				    		while ($fee = $feetype->fetch_object()) { ?>

  								<tr class="table-primary">
  				    			<th scope="row"><?php echo $fee->id ?></th>
  				    			<td><?php echo $fee->name ?></td>
  				    			<td><?php echo $fee->fee_amount ?></td>
  				    			<td>
  				    				<a href="#">Edit</a>
  				    				<span> | </span>
  				    				<a href="#">Delete</a>
  				    			</td>
  				    			
  				    		<?php }
  				    	 ?>
  				   
  				    </tbody>
  				</table>
  			</div>
  		</div>
  	</div>
  </section>
  

</section>