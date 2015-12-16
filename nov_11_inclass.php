<!doctype html=en>
<html>
<head>
	<!--declaration of the variable-->
	<?php $var = "PHP Tutorial"; ?>
	<!--pop echo variable anywhere you want php to go in the page-->
	<title><?php echo $var; ?></title>
	
</head>
<body>

	<h1><?php echo $var;?></h1>

	<p>some text about PHP</p>

	<p>for more information about PHP check out the <a href="http://php.net"><?php echo $var; ?></a> on this web site.</p>
	<!--different fns you can perform on strings - look up on php.net-->
	<!--making a substring = taking a series of characters out of a word, find a word in a sentence-->

	<!-- Order of Operations * / first, + - second ( ) first first -->
	<!-- % Modulo = remainder after division i.e. 7/3 = 2 with remainder 1 = 7%3 = 1 - use for time (60 sec increments), or to verify if something is true or false (number is even or odd)-->
	<!--another way to calc Modulo = fmod(7,3); = 1-->
	<!--use modulo for "time elapsed", generate a random number for captcha, lottery, etc.-->
		
	<h2>This is an example of absolute value</h2>
	<?php $var=-20;
	echo abs($var);?>
	
	<!--exp and sqrt fns used mostly in game development-->
	
	<!-- adding in place: IF $vara=1 and $varc=10 and you want to increase $varc by 1, write $varc+=$vara instead of $varc=$varc+$vara -->
	
	<!--difference between 1 and "1" some programming languages may recognize "1" as a word. BUT this is not the case in PHP-->
	<h3>This is an example of integers and strings</h3>
	<?php
		$vara= 1 + 3;
		echo $vara;
		?>
	
	<!-- PHP assumes you mean a number by a number, even if its in quotes. Can get confusing for addresses -->
	<?php 
		$varb= 1 + "3 houses";
		echo $varb;
	?>

	<!--Floats = exponent with a decimal i.e. "20.356". You want to round numbers i.e. in a shopping cart with tax/shipping. -->
	<!--Rounding tax($float, 2). Rounding up = ceil($float), Rounding down = floor($float)-->

	<h4>This is an example of rounding up or down</h4>
	<?php
		$varc= 12.134;
		echo ceil($varc);
		echo floor($varc);
	?>

	<!--Arrays = indexed collection of objects. (A specific thing listed in brackets) i.e. $fruit= array("apples", "oranges", "bananas", "cherries"); each "fruit" has a number assigned to it by PHP-->
	<!--To print the entire array use print_r($fruit); use while writing your code to see what you're doing, similar to putting borders around your divs-->
	
	<h5>This is an example of an array - DON'T FORGET computers start indexing arrays at zero, not one!</h5>
	<?php
		$fruit= array("apples", "oranges", "bananas", "cherries");
		echo $fruit[1];
		$fruit[4]= "strawberries";
		echo $fruit[4];
		print_r($fruit);
		
	?>
	<!--when you make an array, the first index "apples" = 0. -->
	
	<?php
		$various= array("turnips", 12, "Drake", array("apples", "oranges", "bananas", "cherries"));
		/*echo $various[1];
		echo $various[2];*/
		echo $various[3];
	?>
	
	<!--Replacing items in arrays-->
		
	<?php
		$various= array("turnips", 12, "Drake", array("apples", "oranges", "bananas", "cherries"));
		$various[0] = "Trudeau";
		echo $various[0];
		print_r($various);
	?>
	
	<!--arrays will always stay in their original order unless you resort them-->
	
	<h6>Shorter form version of arrays (after PHP 5.4)</h6>
	<!--newer method for arrays $various["a","b","c"]; -->
	
	<?php
		$various=["Hot","Line","Bling"];
		echo $various[2];
		print_r($various);
	?>
	
	<!--Associate array = not sorted in any order. You define the index (first_name=0) and value (Donald) i.e. collection of usernames and passwords = "key value pairs"-->
	
	<?php
		$various= array("first_name" => "Donald", "last_name" => "Duck");
	?>
	
	<!-- $_POST= array("first_name" => " ", "postal_code" => "M4V2Y7");-->
	
</body>
</html>
