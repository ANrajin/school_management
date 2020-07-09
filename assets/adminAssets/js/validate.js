
// ------------------------------------------------------- //
// vaildate email
// ------------------------------------------------------ //


jQuery(document).ready(function($) {
	jQuery("body").on('input',"input[name='email']", function(event) {
		var email = $(this).val();
		email = email.toLowerCase();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		$(".email-status").removeClass('success');
		if(re.test(String(email))){

			$.ajax({
				type: 'POST',
				data: {
					'input_email': email
				},
				url: $("meta[name='url']").attr('content') + 'api/ajax-validate-email.php',
				success: function(data){
					console.log(data)
					data = parseInt(data);

					if(data){
						$(".email-status").addClass('success');
						$(".email-status").text("Available");
					}else{
						$(".email-status").text(" email already used");
					}
					
				}
			});
			
		}else if (email.length == 0) {

			$(".email-status").text("");
		}
		else{
			$(".email-status").addClass('email-status');
			$(".email-status").text("Invalid Email");
		}
		
		
	});
	

	




	  });




