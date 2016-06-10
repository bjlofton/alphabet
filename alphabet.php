<?php 
$first = strtolower($_POST['first']);
$second = strtolower($_POST['second']);
$alphabet = $_POST['letters'];
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>A-Z</title>
</head>

<body>


<form method="POST" action="<?php echo $PHP_SELF;?>">

	<?php $letters = "abcdefghijklmnopqrstuvwxyz";?>
    
    First letter: <input type="text" name="first" />
    Second letter: <input type="text" name="second" />
    
    <input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="letters" value="<?php echo $letters;?>" />
	<br />
</form>

<?php
if (!empty($_POST)) {
	$letter1 = strpos($alphabet,$first)-1;
	$letter2 = strpos($alphabet,$second)-1;
	
	if ($letter2 > $letter1) {
		$diff = $letter2 - $letter1;
	} else {
		$diff = ($letter2 - $letter1) * -1;
	}
	echo $diff;
}
	?>


</body>
</html>