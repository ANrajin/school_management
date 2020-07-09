// $(document).ready(function(){
//   $("#inputFee").on("change", function(){
//     var $fee = $(this).val();
//     $fee = parseInt($fee);
//
//     if($fee){
//       $.ajax({
//         type: 'POST',
//         data: {
//           'fee_id': $fee
//         },
//         url:'http://localhost/WDPF-42/07-01-2020/Project/school_management_system/api/ajax-load-fee-amount.php',
//         success:function(data){
//           for(var index in data){
//             $('#amount').val(data[index]['fee_amount']);
//           }
//         }
//       });
//     }else{
//       $('#amount').val('');
//     }
//   });
// });
//
// $(document).ready(function(){
//   $("#inputClass").on("change", function(){
//     var $class = $(this).val();
//     $class = parseInt($class);
//     if($class){
//       $.ajax({
//         type: 'POST',
//         data: {
//           'class_id': $class
//         },
//         url:'http://localhost/WDPF-42/07-01-2020/Project/school_management_system/api/ajax-load-student-id.php',
//         success:function(data){
//           var html = "";
//           for(var index in data){
//             html += "<option value='"+data[index]['id']+"'>"+data[index]['studentId']+"</option>";
//           }
//           $('#input_std').html(html);
//         }
//       });
//     }else{
//       $('#input_std').html('<option value="0">Select Student Class</option>');
//     }
//   });
// });
//
// $(document).ready(function () {
//   $("#input_std").on("change", function () {
//     var $std = $(this).val();
//     $std = parseInt($std);
//     if ($std) {
//       $.ajax({
//         type: 'POST',
//         data: {
//           'std_id': $std
//         },
//         url: 'http://localhost/WDPF-42/07-01-2020/Project/school_management_system/api/ajax-load-student-name.php',
//         success: function (data) {
//           for (var index in data) {
//             $('#std_name').val(data[index]['name']);
//           }
//         }
//       });
//     } else {
//       $('#std_name').val('');
//     }
//   });
// });
