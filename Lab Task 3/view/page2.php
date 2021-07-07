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
    <fieldset style="width:390px">
<form action="" method="POST">
<h1>Educational Details</h1><br><br>
<input type="text" name="pagename" value="2" hidden>
HSC Results: <input type="text" name="hsc"><br><br>
SSC Results: <input type="text" name="ssc"><br><br>

Choose a program you want to enroll:
<select name="program">
<option value="BSc. in CSE">BSc. in CSE</option>
<option value="BSc. in EEE">BSc. in EEE</option>
<option value="BSc. in Architecture">BSc. in Architecture</<option>
</select><br><br>

Choose year:
<select name="year">
<option value="2021">2021</option>
<option value="2022">2022</option>
</select><br><br>

Choose semester:
<select name="semester">
<option value="Sping">Spring</option>
<option value="Summer">Summer</option>
<option value="Fall">Fall</option>
</select>
<br><br>

Do you agree with our terms and conditions:
<br>
<input type="radio" name="confirmation" value="Yes">Yes 
<input type="radio" name="confirmation" value="No">No<br><br>

<input type="submit" value="Next">
</form>
<a href="../control/Back.php">Log Out</a>
    
</body>
</html>