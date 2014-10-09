var $ =  jQuery.noConflict();

$(document).ready(function() {

	$('#txtPhone, #txtPostcode').keypress(function (e){

		/* disable texts and special chars */
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}

	});

	/* form validation */
	/*$('').validate({
		rules: {
				pd_fname: {
					required: true
				},
				pd_lname: {
					required: true,
				},
				pd_phone: {
					required: true,
					number: true
				},
				pDcontactEmail: {
					required: true,
					email: true
				},
				pd_postcode: {
					required: true,
					number: true,
				}
			},
			messages: {
				pd_fname:{
						required: "This field is required"
					},
				pd_lname:{
						required: "This field is required"
					},
				pd_phone:{
						required: "This field is required",
						number: "Only number is allowed"
					},
				pDcontactEmail:{
						required: "This field is required",
						email: "Please enter a valid email"
					},
				pd_postcode: {
						required: "This field is required",
						number: "Only number is allowed"
					}
			},
			submitHandler: function(form) {

				var form = $(''),
					form_url 	= form.attr('action'),
					form_type 	= form.attr('type'),
					form_data 	= {};

					form.find('[name]').each(function(index, value){
						var form_field 					= $(this),
							form_field_name 			= form_field.attr('name'),
							form_field_value 			= form_field.val();
							form_data[form_field_name] 	= form_field_value;
					});

				var script = "<script type='text/javascript'> piAId = '46182'; piCId = '14566'; (function() { function async_load(){ var s = document.createElement('script'); s.type = 'text/javascript';s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);}if(window.attachEvent) { window.attachEvent('onload', async_load); }else { window.addEventListener('load', async_load, false); }})();</script>";
				$.ajax({
					url: form_url,
					type: form_type,
					data: form_data,
					contentType: "application/json; charset=utf-8",
					dataType: "jsonp",
					crossDomain: true,
					
					beforeSend: function(){
						$("title").html("Thank you");
						$('#frm-form').hide();
						$('.div-message').fadeIn(function(){
							$('body').append(script)
						});
						$.post(form, function(data) {
							
						});
					},
					statusCode: {
						
					},
					success: function(response){
						console.log(response);

					},
					error:function(jqXHR, textStatus, error){
				      	console.log(error);
				    }
				});
			}
	});*/
});