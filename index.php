<html>
<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
body {
    background: rgba(120, 120, 120)
}
.form-control::-webkit-input-placeholder {
  color: white;
}

#input {
    width: 250px;
    height: 40px;
    margin-left: 25px;
    /* margin-top: 25px; */
	font-family: 'Roboto', sans-serif;
    font-size: 16px;
    padding-left: 10px;
    border-radius: 20px;
    background: rgba(54, 141, 213);
    color: white;
    border-color: white;
}

#submit {
    width: 250px;
    height: 40px;
    margin-left: 25px;
    /* margin-top: 10px; */
	font-family: 'Roboto', sans-serif;
    font-size: 20px;
    font-weight: 600;
    border-radius: 20px;
    background: rgba(255, 255, 255);
    color: rgba(54, 141, 213);
    cursor: pointer;
}

.userbox {
    border-radius: 5px;
    padding-top: 20px;
    margin: auto;
    width: 300px;
    height: 150px;
    background: rgba(54, 141, 213);
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
</style>

<?php

session_start();
?>
<script>
function validateForm() {
  var x = document.forms["form1"]["user"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
}
</script>
<body>
    <div class="userbox">
        <form action="chat.php" method="POST" name="form1" onsubmit="return validateForm()">
            <input class="form-control text-white" id="input" type="text" name="user" placeholder="Username"/><br>
            <input class="form-control" id="submit" type="submit" name="enter" value="SUBMIT"/>
        </form>
    </div>
</body>
</html>
