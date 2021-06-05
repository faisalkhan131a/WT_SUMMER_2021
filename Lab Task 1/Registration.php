<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form>
<h1>Registration Form</h1>
<hr>

<table>
<tr>
<td>Full Name:</td>
<td><input type="text" name="fn" id="fn"></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="email" name="em" id="em"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="pass" id="pass"></td>
</tr>

<tr>
<td>Comment:</td>
<td><textarea cols="40" rows="5"></textarea></td>
</tr>

<tr>
<td>Gender:</td>
<td><input checked type="radio" name="gender" id="gender" value="male">Male
<input type="radio" name="gender" id="gender" value="female">Female
<input type="radio" name="gender" id="gender" value="other">Other</td>
</tr>

<tr>
<td>Please choose a hobby</td>
<td><input type="checkbox" name="s" id="s" value="s">Singing
<input type="checkbox" name="d" id="d" value="d">Dancing
<input type="checkbox" name="r" id="r" value="r">Reading</td>
</tr>

<tr>
<td>Please choose a file</td>
<td><input type="file" name="file" id="file"></td>
</tr>

</table>

<br><input type="submit" value="Submit"> <input type="reset" value="Reset"> <br>
</table>


</form>
</body>
</html>