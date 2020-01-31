<?php

$con = mysqli_connect("localhost", "dhaka18_worldcup", "dhaka18_worldcup", "dhaka18_worldcup");
// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_POST['questionid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$answer = $_POST['answer'];
// $answer = "wrong";


$sqli = "SELECT id, correctAnswer FROM questions WHERE id = (SELECT MAX(id) FROM questions)";
$resulti = mysqli_query($con,$sqli);
$row = mysqli_fetch_array($resulti);
$total = $row['correctAnswer'];
$num = $row['phone'];
// print_r($total); exit();

// echo "from: ".$answer."<br>"; 
// echo "correctanswer: ".$total; exit();

if($answer === $total){
    $answervalue = "right";
} else{
    $answervalue = "wrong";
}
// echo $answervalue; exit();

// echo $id."<br>"; 
// echo $name."<br>";
// echo $email."<br>";
// echo $phone."<br>";
// echo $answer; exit();

$query = "INSERT INTO answeredBy(questionid, name, email, phone, answer) VALUES('$id','$name','$email','$phone','$answervalue')";
$result = mysqli_query($con,$query);
// echo "Done"; 

header("Location: http://www.dhaka18.com/icc-world-cup-2019/");

exit();
if($result){
    if($answer == $total){
        echo "Right Answer & Data Saved";
    } else{
        echo "Wrong Answer & Data Saved";
    }
} else{
    echo "Not Inserted";
}

// echo $id."<br>"; 
// echo $name."<br>";
// echo $email."<br>";
// echo $phone."<br>";
// echo $answer;