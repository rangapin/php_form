<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<p>Please fill in the form below:</p>

<form action="action_page.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="dob">Date of birth:</label><br>
  <input type="date" id="dob" name="dob" value=""><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>