<?php    
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_SESSION['check1']="positive";    
    $formdata;
    if($_POST['pagename']=='1'){
        $formdata=array(
            'pagename'=>$_POST["pagename"],
            'fname'=>$_POST["fname"],
            'lname'=>$_POST["lname"],
            'gender'=>$_POST["gender"],
            'code'=>$_POST["code"],
            'phonenumber'=>$_POST["phonenumber"],
            'address'=>$_POST["address"],
            'email'=>$_POST["email"],
            'pass'=>$_POST["pass"]
        );
    }
    else
    {
        $formdata=array(
            'pagename'=>$_POST["pagename"],
            'hsc'=>$_POST["hsc"],
            'ssc'=>$_POST["ssc"],
            'program'=>$_POST["program"],
            'year'=>$_POST["year"],
            'semester'=>$_POST["semester"],
            'confirmation'=>$_POST["confirmation"]
        );
    }

    $existingdata=file_get_contents('data.json');
    $tempJSONdata=json_decode($existingdata);
    $tempJSONdata[]=$formdata;

    $jsondata=json_encode($tempJSONdata,JSON_PRETTY_PRINT);
    if(file_put_contents("data.json",$jsondata)){
        echo "";
    }
    else
        echo "Data was not saved!";

$data=file_get_contents("data.json");
$mydata=json_decode($data);

$count1= count($mydata);
$count2=$count1-2;
$count3=$count1-1;

if($_POST['pagename']=='1')
{
    header("Location: http://localhost/Lab%20Exam/view/page2.php");
exit;
}

echo "<h1>You Entered following information</h1><br>Firstname: ".$mydata[$count2]->fname."<br>";
echo "Lastname: ".$mydata[$count2]->lname."<br>";
echo "Gender: ".$mydata[$count2]->gender."<br>";
echo "Phone: ".$mydata[$count2]->code.$mydata[$count2]->phonenumber."<br>";
echo "Address: ".$mydata[$count2]->address."<br>";
echo "Email: ".$mydata[$count2]->email."<br>";
echo "HSC: ".$mydata[$count3]->hsc."<br>";
echo "SSC: ".$mydata[$count3]->ssc."<br>";
echo "Program Interested: ".$mydata[$count3]->program."<br>";
echo "Year: ".$mydata[$count3]->year."<br>";
echo "Semester: ".$mydata[$count3]->semester."<br>";
echo "Do you agree with terms and conditions: ".$mydata[$count3]->confirmation."<br>";
exit;
}
?>
