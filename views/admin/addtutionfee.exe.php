<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);

    $arr =[
      'student_id'  => $std_id,
      'class_id'    => $class_id,
      'fee_type_id' => $inputFee,
      'invoice'     => $invoice,
      'amount'      => $amount,
      'date'        => $fee_date,
      'status'      => $status
    ];

      if($crud->insert('tution_fee', $arr)){
        echo "<div class='col-sm-5 offset-sm-4 alert    alert-success' role='alert'>Data Inserted Successfully</div>";
      }else{
        echo "<div class='col-sm-5 offset-sm-4 alert    alert-danger' role='alert'>Unsuccessfull</div>";
      }

    }

 ?>
<hr>
<h2 class="text-center">Add Tution Fee</h2>
<br>
<div class="container pb-4">
  <form action="" method="post">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputClass">Class</label>
        <select id="inputClass" name="class_id" class="form-control">
          <option value="0">Select Class</option>
          <?php

            $cls= $crud->ReadData("*", "class_info");

            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">

        <label for="studentId">Student ID</label>
        <select id="input_std" name="std_id" class="form-control">
          <option value="0">Select Student's Class</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="std_name">Student Name</label>
        <input type="text" name="std_name" class="form-control" id="std_name" placeholder="Select Student ID" readonly>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputFee">Tution Fee</label>
        <select id="inputFee" name="inputFee" class="form-control">
          <option value="0">Select Fee Type</option>
          <?php

            $cls= $crud->ReadData("*", "fee_type");

            while($c = $cls->fetch_object()){
              echo "<option value='{$c->id}'>$c->name</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="invoice">Invoice</label>
        <input type="text" name="invoice" class="form-control" id="invoice" placeholder="Invoice Number">
      </div>
      <div class="form-group col-md-4">
        <label for="amount">Amount</label>
        <input type="text" name="amount" class="form-control" id="amount" placeholder="fee Amount" readonly>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="DOA">Date</label>
        <input type="date" name="fee_date" class="form-control" id="DOA">
      </div>
      <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
          <option value="0">Payment Status</option>
          <option value="1">Paid</option>
          <option value="2">Unpaid</option>
        </select>
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
