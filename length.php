<?php
	function convert_to_meters($value, $from_unit){
		switch ($from_unit) {
			case 'Feet':
				return $value * 0.3048;
				break;
			case 'Meters':
				return $value;
				break;
			case 'Inches':
				return $value * 0.0254;
				break;
			case 'Kilometers':
				return $value * 1000;
				break;
			case 'Miles':
				return $value * 1609.34;
				break;				
			default:
				return "Unsupported Unit.";
				break;
		}
}
	function convert_from_meters($value, $to_unit){
		switch ($to_unit) {
			case 'Feet':
				return $value / 0.3048;
				break;
			case 'Meters':
				return $value;
				break;
			case 'Inches':
				return $value / 0.0254;
				break;
			case 'Kilometers':
				return $value / 1000;
				break;
			case 'Miles':
				return $value / 1609.34;
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

	$meter_value = convert_to_meters($from_value, $from_unit);
	$to_value = convert_from_meters($meter_value, $to_unit);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Convert Lengths</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="text/css" href="Icons/length.jpg">
</head>
<body style="background-image: url(Icons/lengthback.jpg); background-size: cover;">
	<div class="select">
	<h1 style="text-align: center;">Converting Lengths</h1>

	<form action="" method="POST">
		<div class="entry">
		<label>From:</label> &nbsp;
		<input type="text" name="from_value" value="<?php echo $from_value; ?>" required="" > &nbsp;
		<select name="from_unit">
			<option value="Feet" <?php if($from_unit == 'Feet') { echo " selected"; } ?>>Feet</option>
			<option value="Meters" <?php if($from_unit == 'Meters') { echo " selected"; } ?>>Meters</option>
			<option value="Inches" <?php if($from_unit == 'Inches') { echo " selected"; } ?>>Inches</option>
			<option value="Kilometers" <?php if($from_unit == 'Kilometers') { echo " selected"; } ?>>Kilometers</option>
			<option value="Miles" <?php if($from_unit == 'Miles') { echo " selected"; } ?>>Miles</option>
		</select>
	</div>

		<div class="entry">
		<lable>To:</label> &nbsp;
		<input type="text" name="to_value" value="<?php echo $to_value; ?>"> &nbsp;
		<select name="to_unit">
			
			<option value="Feet" <?php if($to_unit == 'Feet') { echo " selected"; } ?>>Feet</option>
			<option value="Meters" <?php if($to_unit == 'Meters') { echo " selected"; } ?>>Meters</option>
			<option value="Inches" <?php if($to_unit == 'Inches') { echo " selected"; } ?>>Inches</option>
			<option value="Kilometers" <?php if($to_unit == 'Kilometers') { echo " selected"; } ?>>Kilometers</option>
			<option value="Miles" <?php if($to_unit == 'Miles') { echo " selected"; } ?>>Miles</option>
		</select>
	</div>
	<input type="submit" name="submit" value="Submit">
	</form>
	<br>
	<span id="link">
	<a href="index.php">Return to main menu</a>
	</span>
	</div>
</body>
</html>