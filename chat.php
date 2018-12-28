<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat System</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>

<?php
session_start();
// $_SESSION["user"] = $_POST["user"];

if (isset($_POST["user"]))
    $_SESSION["user"] = $_POST["user"];
else
    $_SESSION["user"] = "Someone";
?>

<body>
	<div class="centeralised">
		<?php echo "Username: ".$_SESSION['user']; ?>
	<div class="chathistory" id="chathistory"></div>
	<div class="chatbox">
		<form action="" method="POST">
			<textarea class="txtarea" id="message" name="message" placeholder="Send a message"></textarea>
		</form>
	</div>
	</div>

	<script>

		$(document).ready(function(){
			loadChat();
		});
		$('#message').keyup(function(e){
			var message = $(this).val();
			if( e.which == 13 ){
				$.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){

					loadChat();
					$('#message').val('');

				});
			}
		});
		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat', function(response){

				$('.chathistory').html(response);
			});
		}
		setInterval(function(){
			loadChat();
		}, 2000);

	</script>
</body>
</html>
