<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<form class='form-inline d-flex justify-content-center border mx-auto mt-3 bg-light' style='height: 200px; width:600px'>
    			<div class='form-group my-auto'>
    				<input class='rounded-pill form-control m-1' type='text' name='str' placeholder='Text to encode'>
    			</div>
    			<div class='form-group my-auto'>
    				<input class='rounded-pill form-control m-1' type='number' name='deg' placeholder='Steps'>
    				<input class='btn btn-primary rounded-pill m-1' type='submit' value='Encode'>
    			</div>
			</form>
		</div>
		
		<div class='col-12'>
			<div id='info' class='alert alert-success my-3 mx-auto' style='width:600px'>
				Notifications area
			</div>
		</div>
		
		<div id='table' class='col-12' style="display: none">
			<div class='d-flex justify-content-center border mx-auto bg-light p-3' style='width:600px'>
				<p></p>
			</div>
		</div>
	</div>
</div>

<script>

//verilmish data ile cedveli doldurur
function create_page(user){
	$("#profile_image").attr("src", user.profile_image);
	$(".userdata").each(function( index ) {
		  $(this).html(user.info[index]);
		});
}

//form submit olanda task.php-e post request gonderib 
//melumati alir ve cedveli doldurur
$("form").submit(function( event ) {
	$('#info').html('Your data is loading...');
	$('#info').removeClass('alert-danger');
	$('#info').addClass('alert-success');
	$.post( "task.php", $( "form" ).serialize())
		.done(function( data ) {
			try{
				$('p').html(data);
				$('#table').css('display', 'block');
				$('#info').html("DONE!");
			}catch(error){
				$('#info').removeClass('alert-success');
				$('#info').addClass('alert-danger');
				$('#info').html('Something went wrong');
			}
			
		})
		.fail(function(){
				$('#info').removeClass('alert-success');
				$('#info').addClass('alert-danger');
				$('#info').html('Something went wrong');
			});
	event.preventDefault();
	});

</script>
</body>
</html>
