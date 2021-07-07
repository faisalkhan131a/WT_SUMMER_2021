<?php
include "../control/process.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width:270px">
<form action="" method="POST">
<h1>Student Details</h1><br><br>
<input type="text" name="pagename" value="1" hidden>
Firstname: <input type="text" name="fname"><br><br>
Lastname: <input type="text" name="lname"><br><br>
Gender:
<input checked type="radio" name="gender" value="Male">Male 
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other<br><br>
Phone:
<select name="code">
<option value="0088">+880</option>
<option value="0091">+91</option>
<option value="0094">+94</option>
</select>
<input type="text" name="phonenumber"><br><br>
Address:<br>
<textarea cols="50" rows="10" name="address"></textarea><br><br>
E-mail: <input type="text" name="email"><br><br>
Password: <input type="password" name="pass"><br><br>
<a href="page2.php">
<input type="submit" value="Submit">
</form>
</fieldset>
    
</body>
</html>