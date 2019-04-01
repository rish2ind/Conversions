<?php
	function convert_to_celsius($value, $from_unit){
		switch ($from_unit) {
			case 'kelvin':
				return $value - 273.15;
				break;
			case 'celsius':
				return $value;
				break;
			case 'fahrenheit':
				return ($value - 32) * 5/9;
				break;
			default:
				return "Unsupported Unit.";
				break;
		}
}
	function convert_from_celsius($value, $to_unit){
		switch ($to_unit) {
			case 'kelvin':
				return $value + 273.15;
				break;
			case 'celsius':
				return $value;
				break;
			case 'fahrenheit':
				return ($value * 9/5) + 32;
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

	$temp_value = convert_to_celsius($from_value, $from_unit);
	$to_value = convert_from_celsius($temp_value, $to_unit);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Convert Temperature</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="select">
	<h1 style="text-align: center;">Converting Temperature</h1>

	<form action="" method="POST">
		<div class="entry">
		<label>From:</label> &nbsp;
		<input type="text" name="from_value" value="<?php echo $from_value; ?>" required="" > &nbsp; 
		<select name="from_unit">
			<option value="celsius" <?php if($from_unit == 'celsius') { echo " selected"; } ?>>Celsius</option>
			<option value="kelvin" <?php if($from_unit == 'kelvin') { echo " selected"; } ?>>Kelvin</option>
			<option value="fahrenheit" <?php if($from_unit == 'fahrenheit') { echo " selected"; } ?>>Fahrenheit</option>
		</select>
	</div>

		<div class="entry">
		<lable>To:</label> &nbsp;
		<input type="text" name="to_value" value="<?php echo $to_value; ?>"> &nbsp;
		<select name="to_unit">
			
			<option value="celsius" <?php if($to_unit == 'celsius') { echo " selected"; } ?>>Celsius</option>
			<option value="kelvin" <?php if($to_unit == 'kelvin') { echo " selected"; } ?>>Kelvin</option>
			<option value="fahrenheit" <?php if($to_unit == 'fahrenheit') { echo " selected"; } ?>>Fahrenheit</option>
		</select>
	</div>
	<input type="submit" name="submit" value="Submit">
	</form>
	<br>
	<a href="index.php">Return to main menu</a>
	</div>
</body>
</html>