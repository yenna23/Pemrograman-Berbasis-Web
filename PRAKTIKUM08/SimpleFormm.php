<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Form</title>
</head>
<body>

<h2>Student Union Form</h2>
<form method="post" action="Proses.php">
	Name: <input type="text" name="name">
	<br><br>
	E-mail: <input type="text" name="email">
	<br><br>
	Website: <input type="text" name="website">
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea> 
	<br><br>
	Gender:
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="other">Other
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>