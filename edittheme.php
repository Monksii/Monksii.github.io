<?php  
	if ($_SERVER["REQUEST_METHOD"] === 'POST') {
		if (isset($_COOKIE['theme'])){
			$a = $_COOKIE['theme']['name'];
			$b = $_COOKIE['theme']['background'];
        	$c = $_COOKIE['theme']['heading1'];
        	$d = $_COOKIE['theme']['alignment'];
        	$e = $_COOKIE['theme']['paragraph'];
        	$f = $_COOKIE['theme']['fontsize'];
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Theme</title>
	</head>

	<body>
		<form method="POST" action="addtheme.php">
			<label>Name of your theme:</label>
			<input type="text" name="name" id="name" value="<?php echo $a; ?>"><br><br>

			<label>Color of Page Background:</label>
			<input type="color" name="background" value="<?php echo $b; ?>"><br><br>

			<label>Color of Heading 1:</label>
			<input type="color" name="heading1"  value="<?php echo $c; ?>"><br><br>

			<label>Alignment of Heading 1:</label>
			<select name="alignment" required>
				<option value="left" <?php echo ($d  == 'left') ? 'selected' : '';?>>Left</option>
				<option value="center" <?php echo ($d == 'center') ? 'selected' : '';?>>Center</option>
				<option value="right" <?php echo ($d  == 'right') ? 'selected' : '';?>>Right</option>
				<option value="justify" <?php echo ($d  == 'justify') ? 'selected' : '';?>>Justify</option>
			</select><br><br>

			<label>Color of Paragraph:</label>
			<input type="color" name="paragraph"  value="<?php echo $e; ?>"><br><br>

			<label>Font size of Paragraph:</label>
			<input type="number" name="fontsize" min="10" max="24"  value="<?php echo $f; ?>"><br><br>

			<button type="submit" name="save" value="save">Save</button>
		</form>
	</body>
</html>