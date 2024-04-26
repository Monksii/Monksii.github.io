<?php  
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		if (isset($_POST['save'])){
			setcookie('theme[name]', $_POST['name'], time() + (86400 * 30));
			setcookie('theme[background]', $_POST['background'], time() + (86400 * 30));
			setcookie('theme[heading1]', $_POST['heading1'], time() + (86400 * 30));
			setcookie('theme[alignment]', $_POST['alignment'], time() + (86400 * 30));
			setcookie('theme[paragraph]', $_POST['paragraph'], time() + (86400 * 30));
			setcookie('theme[fontsize]', $_POST['fontsize'], time() + (86400 * 30));
			
			header('location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Theme</title>
	</head>

	<body>
		<form method="POST" action="addtheme.php">
			<label>Name of your theme:</label>
			<input type="text" name="name" id="name" required><br><br>

			<label>Color of Page Background:</label>
			<input type="color" name="background" required><br><br>

			<label>Color of Heading 1:</label>
			<input type="color" name="heading1" required><br><br>

			<label>Alignment of Heading 1:</label>
			<select name="alignment" required>
				<option value="">-- Choose the Alignment --</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
				<option value="justify">Justify</option>
			</select><br><br>

			<label>Color of Paragraph:</label>
			<input type="color" name="paragraph" required><br><br>

			<label>Font size of Paragraph:</label>
			<input type="number" name="fontsize" min="10" max="24" required><br><br>

			<button type="submit" name="save" value="save">Save</button>
		</form>
	</body>
</html>