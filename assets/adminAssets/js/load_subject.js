
// ------------------------------------------------------- //
// load subject
// ------------------------------------------------------ //


jQuery("body").on('input',"select[name='class_id']", function(event) {
	var class_id = $(this).val();
	class_id=parseInt(class_id);
	if(class_id){
		$.ajax({
		type: 'POST',
		data: {
			'class_id': class_id
		},
		url: $("meta[name='url']").attr('content') + 'api/ajax-load-subject.php',
		success: function(data){
			html="";
			for (var index in data){
				html += "<option value='"+data[index]['id']+"'>'"+data[index]['name']+"'</option>";
			}
			 $("select[name='subject_id']").html(html);


		}
	});
	}else{
		$("select[name='subject_id']").html("<option value='0'>chose subject</option>");
		
	}
});
