
// ------------------------------------------------------- //
// Student Iformation
// ------------------------------------------------------ //
// $('.portfolio-item').isotope({
//      itemSelector: '.item',
//     mode        :'fitRows'
// });
jQuery('.portfolio-item').isotope({
  filter: ".classSix"

});

jQuery('.portfolio-menu ul li').click(function () {

    jQuery('.portfolio-menu ul li').removeClass('active');
    jQuery(this).addClass('active');
    var selector= jQuery(this).attr('data-filter');
    jQuery('.portfolio-item').isotope({
        filter: selector
    });
 });



// ------------------------------------------------------- //
// load district
// ------------------------------------------------------ //

jQuery("body").on('input',"select[name='division']", function(event) {
	var division_id = $(this).val();
	division_id=parseInt(division_id);
	if(division_id){
		$.ajax({
		type: 'POST',
		data: {
			'division_id': division_id
		},
		url: $("meta[name='url']").attr('content') + 'api/ajax-load-district.php',
		success: function(data){
			html="";
			for (var index in data){
				html += "<option value='"+data[index]['id']+"'>'"+data[index]['district_name']+"'</option>";
			}
			 $("select[name='district']").html(html);


		}
	});
	}else{
		$("select[name='district']").html("<option value='0'>chose your district</option>");

	}




});


// ------------------------------------------------------- //
// load upozilla
// ------------------------------------------------------ //


jQuery("body").on('input',"select[name='district']", function(event) {
	var district_id = $(this).val();
	district_id=parseInt(district_id);
	if(district_id){
		console.log(district_id)
		$.ajax({
		type: 'POST',
		data: {
			'district_id': district_id
		},
		url: $("meta[name='url']").attr('content') + 'api/ajax-load-upozilla.php',
		success: function(data){
			html="";
			for (var index in data){
				html += "<option value='"+data[index]['id']+"'>'"+data[index]['upozilla_name']+"'</option>";
			}
			 $("select[name='upozilla']").html(html);


		}
	});
	}else{
		$("select[name='upozilla']").html("<option value='0'>chose your upozilla</option>");

	}
});



$(document).ready(function(){
  $("#inputFee").on("change", function(){
    var $fee = $(this).val();
    $fee = parseInt($fee);

    if($fee){
      $.ajax({
        type: 'POST',
        data: {
          'fee_id': $fee
        },
        url:$("meta[name='url']").attr('content') +'api/ajax-load-fee-amount.php',
        success:function(data){
          for(var index in data){
            $('#amount').val(data[index]['fee_amount']);
          }
        }
      });
    }else{
      $('#amount').val('');
    }
  });
});

$(document).ready(function(){
  $("#inputClass").on("change", function(){
    var $class = $(this).val();
    $class = parseInt($class);
    if($class){
      $.ajax({
        type: 'POST',
        data: {
          'class_id': $class
        },
        url:$("meta[name='url']").attr('content') +'api/ajax-load-student-id.php',
        success:function(data){
          var html = "";
          for(var index in data){
            html += "<option value='"+data[index]['admission_id']+"'>"+data[index]['studentId']+"</option>";
          }
          $('#input_std').html(html);
        }
      });
    }else{
      $('#input_std').html('<option value="0">Select Student Class</option>');
    }
  });
});

$(document).ready(function () {
  $("#input_std").on("change", function () {
    var $std = $(this).val();
    $std = parseInt($std);
    if ($std) {
      $.ajax({
        type: 'POST',
        data: {
          'std_id': $std
        },
        url:$("meta[name='url']").attr('content') +'api/ajax-load-student-name.php',
        success: function (data) {
          for (var index in data) {
            console.log(data);
            $('#std_name').val(data[index]['name']);
          }
        }
      });
    } else {
      $('#std_name').val('');
    }
  });

  $(document).ready(function () {
    $("#inputClass").on("change", function () {
      var $aid = $(this).val();
      $aid = parseInt($aid);
      if ($aid) {
        $.ajax({
          type: 'POST',
          data: {
            'aid': $aid
          },
          url:$("meta[name='url']").attr('content') +'api/ajax-load-admission-id.php',
          success: function (data) {
            for (var index in data) {
              console.log(data);
              var html = "";
              for(var index in data){
                html += "<option value='"+data[index]['id']+"'>"+data[index]['id']+"</option>";
              }
              $('#admission_id').html(html);
            }
          }
        });
      } else {
        $('#admission_id').html('<option value="0">Choose class first</option>');
      }
    });
  });
});
