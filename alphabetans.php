<?php 
$first = strtolower($_POST['first']);
$second = strtolower($_POST['second']);
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Alphabet</title>
</head>

<body>

<form method="POST" action="<?php echo $PHP_SELF;?>">

	<?php $letters = array_combine(range('a','z'), range(1,26));?>
    
    First letter: <input type="text" name="first" />
    Second letter: <input type="text" name="second" />
    
    <input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="letters" value="<?php echo $letters;?>" />
	<br />
</form>

<?php if (!empty($_POST)) {
	if ($second > $first) {
		echo $letters[$second] - $letters[$first];
	}else {
		echo ($letters[$second] - $letters[$first]) *-1;
		}
}?>
    
</body>
</html>
