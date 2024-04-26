<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>James Theme Website</title>
	</head>

	<body>

		<!-- Add / Choose / Edit Theme -->
		<form method="POST" action="index.php">
			<label>Theme :</label>
			<select name="choosetheme" required>
				<option value="" name="" selected>-- Choose the Alignment --</option>

				<?php  	
				if (isset($_COOKIE['theme'])) {
					foreach ($_COOKIE['theme'] as $key=> $value){
						if ($key === 'name'){
						    $selected = ($_POST['choosetheme'] ?? '') === $value ? 'selected' : '';
						    echo "<option name='$value' $selected>$value</option>";
						}
					}
				}
				?>

			</select>

			<a href="addtheme.php" style="margin-left: 5px;">Add New Theme</a><br><br>

		    <button type="submit" name="choose" value="choose">Choose the Theme</button>
		    <button type="submit" formaction="edittheme.php" name="edit" value="edit">Edit the Theme</button>
		</form>

		<br>
		<hr> 


		<!-- Content -->
		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    if (isset($_POST['choose']) && isset($_POST['choosetheme'])) {
		        if (isset($_COOKIE['theme'])) {
		            $b = $_COOKIE['theme']['background'];
	            	$c = $_COOKIE['theme']['heading1'];
	            	$d = $_COOKIE['theme']['alignment'];
	            	$e = $_COOKIE['theme']['paragraph'];
	            	$f = $_COOKIE['theme']['fontsize'];
		            echo "<style> 
		                body {
		                    background-color: {$b};
		                }
		                h1 {
		                    color: {$c};
		                    text-align: {$d};
		                }
		                p {
		                    color: {$e};
		                    font-size: {$f}px;
		                }
		                </style>";

		        } 
		        else {
		            echo "<p>Theme is not found!</p>";
		        }
		    }	
		}
		?>

		<h1>Heading 1</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</body>
</html>