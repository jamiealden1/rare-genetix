$(document).ready(function(){

// Reveal Form
	$('#update').click(function() {
		$('#ajaxform').slideDown('300');
		$('#update').hide();
		$('#contact').hide();
	});

	$("#ajaxform").submit(function(e){
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url: formURL,
			type: "POST",
			data: postData,
			success:function(data, textStatus, jqHXR){
				$('#ajaxform').hide();
				$('#confirm').show();
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('Please enter a valid name and email address');
			}
		});
		e.preventDefault();
	});

	$("#ajaxform").submit();
});