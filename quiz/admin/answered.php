

   <html>
       <head>
           <title>Question Submission</title>
       </head>
       <body>
            <div style="text-align: center;">
                <h3>Insert Question: </h3><br>    
                <form action="" method="post">
                    <input type="text" name="questions" placeholder="Enter Question Here" required>
                    <input type="text" name="optionA" placeholder="Option A" required>
                    <input type="text" name="optionB" placeholder="Option B" required>
                    <input type="text" name="optionC" placeholder="Option C" required>
                    <input type="text" name="optionD" placeholder="Option D" required>
                    <input type="text" name="correctAnswer" placeholder="Enter Answer like 1,2,3,4" required>
                    <input type="submit" name="submit" value="Insert Question">
                </form>
            </div>
       </body>
   </html>
<?php

$con = mysqli_connect("localhost", "dhaka18_worldcup", "dhaka18_worldcup", "dhaka18_worldcup");
mysqli_set_charset($con,"utf8"); 
// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit']))  // if form was submitted (if you came here with form data)
{
    $questions = $_POST['questions'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $correctAnswer = $_POST['correctAnswer'];
    
    $query = "INSERT INTO questions(questions, optionA, optionB, optionC, optionD, correctAnswer) VALUES('$questions','$optionA','$optionB','$optionC','$optionD','$correctAnswer')";
    $result = mysqli_query($con,$query);
    
    
}
// echo $questions. $optionA. $optionB. $optionC. $optionD. $correctAnswer; exit();

// // echo "Done"; 


// // $sql = "SELECT * FROM answeredBy WHERE questionid = (SELECT MAX(questionid) FROM answeredBy)";

// $query_total = mysqli_query($con, $sql);
// // $row = mysqli_fetch_row($query_total);
// return $query_total;
?>

