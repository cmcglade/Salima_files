<!Doctype HTML>

<html>
<head>
 <?php $var = "php tutorial"; ?>
<title> Nov 11 Exercises <?php echo $var; ?> </title> 
	
</head>

<body> 

   <h1>absolute value</h1>
   <?php 
   $var=20;
   echo abs($var);
   ?>

<h1>integers and strings</h1>

<?php
$vara = 1+3;
echo $vara;
?>

<h1>rounding up or down</h1>

<?php 
$varA = 12.123;

echo round($varA, 2);
/*echo ceil($varb);
echo floor($varb);*/
?>
<h1>this is arrays</h1>

<?php
$fruit=array("apples", "oranges", "cherries", "bananas");
echo $fruit[4];
$fruit[4];
$fruit[4]="strawberries";
echo $fruit[4];
$various=array("turnip", 12, "potato");
?>
<?php
echo $various[1];
$various[2]="aubergine";
echo $various[2];
print_r("$various");
?>

<p> associative arrays: name value pairs</p>

<?php 
$various = array("first name" => "Donald", "last name" => "Duck");

?>

<?php 
$color=array("white", "green", "red", "blue", "black"); ?>

<p>"The memory of that scene for me is like a frame of film forever frozen at 
	that moment: the <?php echo $color[2]; ?> carpet, the <?php echo $color[1]; ?> lawn, 
	the <?php echo $color[0]; ?> house, the leaden sky. The new president and his first 
	lady. - Richard M. Nixon" </p>

OR

echo "\<p>"The memory of that scene for me is like a frame of film forever frozen at 
	that moment: the $color[2] carpet, the $color[1] lawn, 
	the $color[0] house, the leaden sky. The new president and his first 
	lady. - Richard M. Nixon"</p>\";

<?php $color=array("white", "green", "red", array("yellow", "pink")); 

print_r ($color[3]);
print_r ($color);
echo $color[1];
echo $color[3][0];
?>


<br><br><br><br><br>

<?php $color =array("white", "green", "red");?>

<ul> <li> <?php echo $color[1]; ?></li>
<li> <?php echo $color[2]; ?></li>
<li> <?php echo $color[0]; ?></li>
</ul>








</body>


</html>

