<?php
	function convert_to_meters($value, $from_unit){
		switch ($from_unit) {
			case 'square_Feet':
				return $value * pow(0.3048, 2);
				break;
			case 'square_Meters':
				return $value;
				break;
			case 'square_Inches':
				return $value * pow(0.0254, 2);
				break;
			case 'square_Kilometers':
				return $value * pow(1000, 2);
				break;
			case 'square_Miles':
				return $value * pow(1609.34, 2);
				break;				
			case 'acres':
				return $value * 4046.86;
				break;
			case 'hectares':
				return $value * 10000;
				break;		
			default:
				return "Unsupported Unit.";
				break;
		}
}
	function convert_from_meters($value, $to_unit){
		switch ($to_unit) {
			case 'square_Feet':
				return $value / pow(0.3048, 2);
				break;
			case 'square_Meters':
				return $value;
				break;
			case 'square_Inches':
				return $value / pow(0.0254, 2);
				break;
			case 'square_Kilometers':
				return $value / pow(1000, 2);
				break;
			case 'square_Miles':
				return $value / pow(1606.34, 2);
				break;				
			case 'acres':
				return $value / 4046.86;
				break;
			case 'hectares':
				return $value / 10000;
				break;		
			default:
				return "Unsupported Unit.";
				break;
		}
}
$from_value = '';
$from_unit = '';
$to_unit = '';
$meter_value = '';

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
	<title>Convert Area</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="text/css" href="Icons/area.png">
</head>
<body style="background-color: white;">
	<div class="select">
	<h1 style="text-align: center; color: black;">Converting Area</h1>

	<form action="" method="POST">
		<div class="entry">
		<label>From:</label> &nbsp;
		<input type="text" name="from_value" value="<?php echo $from_value; ?>" required="" > &nbsp; 
		<select name="from_unit">
			<option value="square_Feet" <?php if($from_unit == 'square_Feet') { echo " selected"; } ?>>Square Feet</option>
			<option value="square_Meters" <?php if($from_unit == 'square_Meters') { echo " selected"; } ?>>Square Meters</option>
			<option value="square_Inches" <?php if($from_unit == 'square_Inches') { echo " selected"; } ?>>Square Inches</option>
			<option value="square_Kilometers" <?php if($from_unit == 'square_Kilometers') { echo " selected"; } ?>>Square Kilometers</option>
			<option value="square_Miles" <?php if($from_unit == 'square_Miles') { echo " selected"; } ?>>Square Miles</option>
			<option value="acres" <?php if($from_unit == 'acres') { echo " selected"; } ?>>Acres</option>
			<option value="hectares" <?php if($from_unit == 'hectares') { echo " selected"; } ?>>Hectares</option>
		</select>
	</div>

		<div class="entry">
		<lable>To:</label> &nbsp;
		<input type="text" name="to_value" value="<?php echo $meter_value; ?>"> &nbsp;
		<select name="to_unit">
			
			<option value="square_Feet" <?php if($to_unit == 'square_Feet') { echo " selected"; } ?>>Square Feet</option>
			<option value="square_Meters" <?php if($to_unit == 'square_Meters') { echo " selected"; } ?>>Square Meters</option>
			<option value="square_Inches" <?php if($to_unit == 'square_Inches') { echo " selected"; } ?>>Square Inches</option>
			<option value="square_Kilometers" <?php if($to_unit == 'square_Kilometers') { echo " selected"; } ?>>Square Kilometers</option>
			<option value="square_Miles" <?php if($to_unit == 'square_Miles') { echo " selected"; } ?>>Square Miles</option>
			<option value="acres" <?php if($from_unit == 'acres') { echo " selected"; } ?>>Acres</option>
			<option value="hectares" <?php if($from_unit == 'hectares') { echo " selected"; } ?>>Hectares</option>
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