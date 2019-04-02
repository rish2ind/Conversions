<?php
	function convert_to_meter($value, $from_unit){
		switch ($from_unit) {
			case 'miles':
				return $value / 2.237;
				break;
			case 'meter':
				return $value;
				break;
			case 'foot':
				return $value / 3.281;
				break;
			case 'kilometer':
				return $value / 3.6;
				break;
			case 'knot':
				return $value / 1.944;
				break;
			default:
				return "Unsupported Unit.";
				break;
		}
}
	function convert_from_meter($value, $to_unit){
		switch ($to_unit) {
			case 'miles':
				return $value * 2.237;
				break;
			case 'meter':
				return $value;
				break;
			case 'foot':
				return $value * 3.281;
				break;
			case 'kilometer':
				return $value * 3.6;
				break;
			case 'knot':
				return $value * 1.944;
				break;
			default:
				return "Unsupported Unit.";
				break;
		}
}
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

	if(isset($_POST['submit'])){
	$from_value = $_POST['from_value'];
	$from_unit = $_POST['from_unit'];
	$to_unit = $_POST['to_unit'];

	$meter_value = convert_to_meter($from_value, $from_unit);
	$to_value = convert_from_meter($meter_value, $to_unit);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Convert Speed</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="text/css" href="Icons/Speed.jpg">
</head>
<body style="background-image: url(Icons/speedback.jpg); background-size: cover;">
	<div class="select">
	<h1 style="text-align: center;">Converting Speed</h1>

	<form action="" method="POST">
		<div class="entry">
		<label>From:</label> &nbsp;
		<input type="text" name="from_value" value="<?php echo $from_value; ?>" required="" > &nbsp; 
		<select name="from_unit">
			<option value="miles" <?php if($from_unit == 'miles') { echo " selected"; } ?>>Miles per hour</option>
			<option value="foot" <?php if($from_unit == 'foot') { echo " selected"; } ?>>Foot per second</option>
			<option value="meter" <?php if($from_unit == 'meter') { echo " selected"; } ?>>Meter per second</option>
			<option value="kilometer" <?php if($from_unit == 'kilometer') { echo " selected"; } ?>>Kilometer per hour</option>
			<option value="knot" <?php if($from_unit == 'knot') { echo " selected"; } ?>>Knot</option>
		</select>
	</div>

		<div class="entry">
		<lable>To:</label> &nbsp;
		<input type="text" name="to_value" value="<?php echo $to_value; ?>"> &nbsp;
		<select name="to_unit">
			
			<option value="miles" <?php if($to_unit == 'miles') { echo " selected"; } ?>>Miles per hour</option>
			<option value="foot" <?php if($to_unit == 'foot') { echo " selected"; } ?>>Foot per second</option>
			<option value="meter" <?php if($to_unit == 'meter') { echo " selected"; } ?>>Meter per second</option>
			<option value="kilometer" <?php if($to_unit == 'kilometer') { echo " selected"; } ?>>Kilometer per hour</option>
			<option value="knot" <?php if($to_unit == 'knot') { echo " selected"; } ?>>Knot</option>
		</select>
	</div>
	<input type="submit" name="submit" value="Submit">
	</form>
	<br>
	<span id="link" style="color: black;">
	<a href="index.php">Return to main menu</a>
	</span>
	</div>
</body>
</html>