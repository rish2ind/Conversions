<?php
	function convert_to_gram($value, $from_unit){
		switch ($from_unit) {
			case 'tonne':
				return $value * 1000000;
				break;
			case 'kilogram':
				return $value * 1000;
				break;
			case 'gram':
				return $value ;
				break;
			case 'miligram':
				return $value / 1000;
				break;
			case 'microgram':
				return $value / 1000000;
				break;
			case 'pound':
				return $value * 453.592;
				break;
			case 'ounce':
				return $value * 28.3495;
				break;					
			default:
				return "Unsupported Unit.";
				break;
		}
}
function convert_from_gram($value, $to_unit){
		switch ($to_unit) {
			case 'tonne':
				return $value / 1000000;
				break;
			case 'kilogram':
				return $value / 1000;
				break;
			case 'gram':
				return $value ;
				break;
			case 'miligram':
				return $value * 1000;
				break;
			case 'microgram':
				return $value * 1000000;
				break;
			case 'pound':
				return $value / 453.592;
				break;
			case 'ounce':
				return $value / 28.3495;
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

	$weight_value = convert_to_gram($from_value, $from_unit);
	$to_value = convert_from_gram($weight_value, $to_unit);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Convert Weight</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="text/css" href="Icons/weight.jpg">
</head>
<body style="background-image: url(Icons/weightback.jpg); background-size: 700px 700px;">
	<div class="select">
	<h1 style="text-align: center; color: #5ef164;">Converting Weight</h1>

	<form action="" method="POST">
		<div class="entry">
		<label>From:</label> &nbsp;
		<input type="text" name="from_value" value="<?php echo $from_value; ?>" required="" > &nbsp; 
		<select name="from_unit">
			<option value="tonne" <?php if($from_unit == 'tonne') { echo " selected"; } ?>>Tonne</option>
			<option value="kilogram" <?php if($from_unit == 'kilogram') { echo " selected"; } ?>>Kilogram</option>
			<option value="gram" <?php if($from_unit == 'gram') { echo " selected"; } ?>>Gram</option>
			<option value="miligram" <?php if($from_unit == 'miligram') { echo " selected"; } ?>>Miligram</option>
			<option value="microgram" <?php if($from_unit == 'microgram') { echo " selected"; } ?>>Microgram</option>
			<option value="pound" <?php if($from_unit == 'pound') { echo " selected"; } ?>>Pound</option>
			<option value="ounce" <?php if($from_unit == 'ounce') { echo " selected"; } ?>>Ounce</option>
		</select>
	</div>

		<div class="entry">
		<lable>To:</label> &nbsp;
		<input type="text" name="to_value" value="<?php echo $to_value; ?>"> &nbsp;
		<select name="to_unit">
			
			<option value="tonne" <?php if($to_unit == 'tonne') { echo " selected"; } ?>>Tonne</option>
			<option value="kilogram" <?php if($to_unit == 'kilogram') { echo " selected"; } ?>>Kilogram</option>
			<option value="gram" <?php if($to_unit == 'gram') { echo " selected"; } ?>>Gram</option>
			<option value="miligram" <?php if($to_unit == 'miligram') { echo " selected"; } ?>>Miligram</option>
			<option value="microgram" <?php if($to_unit == 'microgram') { echo " selected"; } ?>>Microgram</option>
			<option value="pound" <?php if($to_unit == 'pound') { echo " selected"; } ?>>Pound</option>
			<option value="ounce" <?php if($to_unit == 'ounce') { echo " selected"; } ?>>Ounce</option>
		</select>
	</div>
	<input type="submit" name="submit" value="Submit">
	</form>
	<br><span id="link">
	<a href="index.php">Return to main menu</a>
	</span>
	</div>
</body>
</html>