<?php
$new_msg = "";
$database_fname = "Md.";
$database_lname = "Mahdi";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];

	$new_msg   = $message;
    $new_msg   = str_replace(array("#FIRST_NAME#","#firstname#"),$database_fname,$new_msg); //replace if find "#FIRST_NAME#","#firstname#" to database first name
    $new_msg   = str_replace(array("#LAST_NAME#","#lastname#"),$database_lname,$new_msg); //replace if find "#LAST_NAME#","#lastname#" to database last name

	//echo $new_msg;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sms template</title>
	<style type="text/css">
		.form-style-6{
			font: 95% Arial, Helvetica, sans-serif;
			max-width: 400px;
			margin: 10px auto;
			padding: 16px;
			background: #F7F7F7;
		}
		.form-style-6 h1{
			background: #43D1AF;
			padding: 20px 0;
			font-size: 140%;
			font-weight: 300;
			text-align: center;
			color: #fff;
			margin: -16px -16px 16px -16px;
		}
		.form-style-6 input[type="text"],
		.form-style-6 input[type="date"],
		.form-style-6 input[type="datetime"],
		.form-style-6 input[type="email"],
		.form-style-6 input[type="number"],
		.form-style-6 input[type="search"],
		.form-style-6 input[type="time"],
		.form-style-6 input[type="url"],
		.form-style-6 textarea,
		.form-style-6 select 
		{
			-webkit-transition: all 0.30s ease-in-out;
			-moz-transition: all 0.30s ease-in-out;
			-ms-transition: all 0.30s ease-in-out;
			-o-transition: all 0.30s ease-in-out;
			outline: none;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			width: 100%;
			background: #fff;
			margin-bottom: 4%;
			border: 1px solid #ccc;
			padding: 3%;
			color: #555;
			font: 95% Arial, Helvetica, sans-serif;
		}
		.form-style-6 input[type="text"]:focus,
		.form-style-6 input[type="date"]:focus,
		.form-style-6 input[type="datetime"]:focus,
		.form-style-6 input[type="email"]:focus,
		.form-style-6 input[type="number"]:focus,
		.form-style-6 input[type="search"]:focus,
		.form-style-6 input[type="time"]:focus,
		.form-style-6 input[type="url"]:focus,
		.form-style-6 textarea:focus,
		.form-style-6 select:focus
		{
			box-shadow: 0 0 5px #43D1AF;
			padding: 3%;
			border: 1px solid #43D1AF;
		}

		.form-style-6 input[type="submit"],
		.form-style-6 input[type="button"]{
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			width: 100%;
			padding: 3%;
			background: #43D1AF;
			border-bottom: 2px solid #30C29E;
			border-top-style: none;
			border-right-style: none;
			border-left-style: none;	
			color: #fff;
		}
		.form-style-6 input[type="submit"]:hover,
		.form-style-6 input[type="button"]:hover{
			background: #2EBC99;
		}
		.variable-button{
			cursor: pointer;
		}
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>

<div class="form-style-6">
<h1>Message</h1>
<h4 style="background: #ccc; text-align: center;">
	<?php
	echo $new_msg;
	?>
</h4>
<form method="post">
<input type="text" name="name" placeholder="Your Name" />
<a class="variable-button" id="first_name">First Name</a>
|
<a class="variable-button" id="last_name">Last Name</a>
<textarea name="message" placeholder="Type your Message" id="message"></textarea>
<input type="submit" name="submit" value="Send" />
</form>
</div>

<script type="text/javascript">
	$(document.body).on('click','#first_name',function(){ 
        var $txt = $("#message"); //message box
        var caretPos = $txt[0].selectionStart; //select text
        var textAreaTxt = $txt.val(); //message fild value
        var txtToAdd = " #FIRST_NAME# "; //add variable
        $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    });
    $(document.body).on('click','#last_name',function(){ 
        var $txt = $("#message");
        var caretPos = $txt[0].selectionStart;
        var textAreaTxt = $txt.val();
        var txtToAdd = " #LAST_NAME# ";
        $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    });
</script>
</body>
</html>