<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $nationality=$_POST["nationality"];
    $email=$_POST["email"];
    $address=$_POST["address"];

    if(empty($fname) || strlen($fname)<=3){
        echo "<h2>Please enter your first name correctly. Name cannot be empty and must contain at least 3 characters.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }
    echo "Your firstname is ".$fname."<br>" ;

    if(empty($lname) || strlen($lname)<=3){
        echo "<h2>Please enter your last name correctly. Name cannot be empty and must contain at least 3 characters.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }

    echo "Your lastname is ".$lname."<br>" ;

    if(empty($dob)){
        echo "<h2>You need to enter a date of birth in order to proceed.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }

    echo "Your date of birth is ".$dob."<br>" ;

    if(empty($gender)){
        echo "<h2>Please enter your last name correctly. Name cannot be empty and must contain at least 3 characters.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }

    echo "Gender: ".$gender."<br>" ;

    if(empty($nationality)){
        echo "<h2>Please enter your last name correctly. Name cannot be empty and must contain at least 3 characters.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }

    echo "Nationality: ".$nationality."<br>" ;


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Dear user, enter a valid e-mail address.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;    
      }

      echo "E-mail: ".$email."<br>" ;

      if(empty($address) || strlen($address)<=12){
        echo "<h2>Please enter an address at least 12 characters long.
        <br>You will be redirected to the registration page within 5 seconds.</h2>";
        header( "Refresh:4; url=../form.php", true, 303);
        exit;
    }

    echo "Your address is: ".$address ;



}
?>
