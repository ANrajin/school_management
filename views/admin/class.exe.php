<section>
  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      extract($_POST);
      if($cls_add == ""){
        echo "Input field cannot be empty";
      }else{
        $arr = array(
          'name' => $cls_add
        );

        if($crud->Insert("class_info", $arr)){
          echo "Data Inserted Successfully";
        }else{
          echo "unsuccessfull";
        }
      }
    }
   ?>
  <form action="" method="post" style="margin:auto;">
    <div class="form-group row justify-content-end">
      <label for="class_info" class="col-sm-2 col-form-label">Add Class</label>
      <div class="col-sm-4">
        <input type="text" name="cls_add" class="form-control" id="staticEmail" placeholder="Add Class">
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
      </div>
    </div>
  </form>
  <hr>
  <table border = "1" cellpadding="10" width="80%" class="m-auto text-center">
    <thead>
      <th>Serial</th>
      <th>Class</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
        $cls = $crud->ReadData("*", "class_info", "", array('id' => "asc"));

        while ($classes = $cls->fetch_object()) {
          echo "<tr>";
            echo "<td>{$classes->id}</td>";
            echo "<td>{$classes->name}</td>";
            echo "<td><a href=''>Delete</td>";
          echo "</tr>";
        }
       ?>
    </tbody>
  </table>
</section>
