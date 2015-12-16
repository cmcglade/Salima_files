<!doctype html>
<html>
<head> <?php $var = "php tutorial"; ?>
<title> Basic html  <?php echo $var; ?></title>
</head>
<body>
	<h1> This is php <?php echo $var; ?> </h1>
	<p> really? we are doing PHP now? Coooooooooooool!! 

		some text about php as a programming language. 
		for more info, check out <a href ="http://php.net"> 
		<?php echo $var;?> </a> on this website
	     </p>
<?php //commenting on one line
echo"Hello this is the php echo command <br>";  ?>

<?php echo "hello"."Class";?> 
<br>

<?php 
$var_a= 1;
$var_b= 2;
$var_c= $var_a + $var_b;

echo $var_c;
?>
<br>
<br>
<br>
<?php $figuringOut = "What are we doing? <br>";
      echo $figuringOut;

      $greeting = "Hello"; 
      $username = "Magic";
      $sentence = $beginning . " " . $end; //for and u shd put " ".
      echo $sentence;
      ?>
      <?php echo "$greeting is $username<br>";
      ?>

      <?php
      echo "let's" ." ". "try";
      ?>
      <?php $leavingSite= "goodbye";
        echo $sentence;
        ?>
       <?php $exitGreeting = $leavingSite." ". $username;
       echo $exitGreeting;
       ?>
<?php $exercise = "We're learning \"scary\" code today!";
echo $exercise;
?>
<br>
<?php 
  $lastName = "VASTANI <br>";
  $newName =strtolower($lastName);
  echo ucfirst($newName);

  $postalCode="m3c 3n4 <br>";
  echo strtoupper($postalCode);
 
  $wholeName = "salima vastani <br>";
  echo ucwords($wholeName);
  $uppercasefirst = "toronto is big <br>";
  echo ucfirst($uppercasefirst);
  $sentence = "There is a tweet on this page"; 
  $found = strstr($sentence, "Tweet");
  echo $found;
  $sentence = "There is a tweet on this page";
  echo str_replace(tweet, post, $sentence);
  ?>
  <?php $sentence = "Greetings username, we'e happy to see you";
  echo $sentence;
  echo str_replace("username")
 ?>

 









</body>
</html>