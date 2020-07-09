<h2 class="text-center font-weight-bold">Tution Fee Information</h2>
<hr>
<br>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-primary text-light">
                    <tr>
                      <th>Particulars</th>
                      <th>Invoice</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $m = new Crud();
                      $rel = array(
                        'fee_type.id' => 'tution_fee.fee_type_id',
                        'admission_id' => $_SESSION['admission_id']
                      );
                      $select = "tution_fee.*, fee_type.name feeName";
                      $table = "tution_fee, fee_type";
                      if($data = $m->ReadData($select, $table,"", "", $rel)){
                        while($status = $data -> fetch_object()){
                          echo "<tr>";
                            echo "<td>{$status->feeName}</td>";
                            echo "<td>{$status->invoice}</td>";
                            echo "<td>{$status->date}</td>";
                            echo "<td>{$status->amount}</td>";
                            if($status->status == 1){
                              echo "<td>Paid</td>";
                            }elseif ($status->status == 2) {
                              echo "<td>Unpaid</td>";
                            }
                          echo "</tr>";
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
