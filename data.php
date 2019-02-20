<html>
<head>
	<title></title>
</head>
<body>
Welcome <?php echo $_POST["first_name"]; ?>&nbsp;<?php echo $_POST["last_name"]; ?><br>
You are: <?php echo $_POST["gender"]; ?><br>
You are currently studying in: <?php echo $_POST["year"]; ?> &nbsp;year<br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your date of birth is: <?php echo $_POST["dob"]; ?><br>
Your telephone number is: <?php echo $_POST["tel"]; ?><br>
You are interested in: <?php foreach($_POST['web'] as $selected){echo $selected."&nbsp;&nbsp;&nbsp;";} ?><br>
About You: <?php echo $_POST["comments"]; ?><br>
Your Personal Website is: <?php echo $_POST["url"]; ?><br>
Your favourite colour: <?php echo $_POST["favcolor"]; ?><br>
</body>
</html>