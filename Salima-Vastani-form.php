<!Doctype html>
<html lang="EN">

<head> <meta http-equiv="Content-type" content="text/html <meta charset=utf-8">
	   <title> Form </title>

</head>
<body>

	<form action="" method="POST">
		<h3> Your details </h3>
		<label>First Name:</label>
		<input type="text" name="first-name" value=""> <br><br>

		<label>Last Name:</label>
		<input type="text" name="last-name" value=""><br><br>
		<label>Postal Code</label>
		<input type="text" name="postal-code" value=""><br><br>
		<label>Mother's Maiden Name</label>
		<input type="text" name="maiden-name" value=""><br><br>
		<label>Favourite Colour</label>
		<input type="text" name="favourite-colour" value""><br><br>
		<input type="Submit" value="Submit">
	</form>

	<?php
		$firstname= ucwords($_POST["first-name"]);
		$lastname=ucwords ($_POST["last-name"]);
		$maidenname=ucwords($_POST["maiden-name"]);
        $postalcode=ucwords($_POST["postal-code"]);
        $favcolour=$_POST["favourite-colour"];

        echo "<p> Hello $firstname! I find it interesting to think about how 
        our identity might change if we have our mother's name. If your name 
        wasn't $firstname $lastname, but instead it was $firstname $maidenname, 
        would your favourite colour still be $favcolour? Would you still live in $postalcode? </p>";

    ?>

</body>
</html>




