<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $address=$row["address"];
      $dob=$row["dob"];
      $profession=$row["profession"];
      $password=$row["password"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
Firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >

Email : <input type='text' name='email' value="<?php echo $email; ?>" >
Address : <input type='text' name='address' value="<?php echo $address; ?>" ><br>
Date of Birth : <input type='date' name='dob' value="<?php echo $dob; ?>" ><br>
Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
Profession : <input type='text' name='profession' value="<?php echo $profession; ?>" ><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" ><br>     

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>