<!Doctype HTML>

<html>
<head>
 <?php $var = "php tutorial"; ?>
<title> Nov 11 Exercises <?php echo $var; ?> </title> 
	
</head>

<body> 
	<?php

$capitals = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
	"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>
	"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
	"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
	 "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>
	 "Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", 
	 "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
/*for each ($array_name) as$country_name=>city_name); for each name value pair o this array 
=>this means key and  value in an associated array it Asorts by the value because that is 
what users will enter the VALUE Ksort does it by key value hence Ksort*/ 
ksort($capitals);
/*asort($capitals); an assignment is $name="salime"; a function call is echo "$name <br>"; 
print_r(...); asort(); ksort();
a loop e.g. foreach*/


?>



<?php foreach($capitals as $country_name=>$city_name)
{
echo "The capital of $country_name is $city_name <br>";
}

?>

<h2>array funcitions </h2>

<?php $numbers=array(8, 23, 56, 9, 15,12);
print_r($numbers);
$names=array("salima", "Antonio", "Krystal");
/*max value following the alphabetical order*/
?>

<p>maxi value:<?php echo max($numbers); ?><br>
	count: <?php echo count($numbers); ?><br>
	min value:<?php echo min($numbers); ?><br>
    max value following the alphabetical order
</p>

<p>maxi value:<?php echo max($names); ?><br> 
	count: <?php echo count($names); ?><br>
	min value:<?php echo min($names); ?><br>
</p>
</body>
</html>


