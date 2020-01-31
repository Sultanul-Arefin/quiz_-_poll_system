<?php
include('questions.php');
?>


<?php while($row = mysqli_fetch_array($query_total)){ ?>
<h3><?= $row['questions']; ?></h3>
<form method="post" action="<?php echo get_template_directory_uri(); ?>/iccworldcup2019/quiz/answeredby.php">
    <input type="hidden" name="questionid" value="<?php echo $row['id'] ?>">
    <input type="radio" name="answer" value="1"><?= $row['optionA'] ?><br>
    <input type="radio" name="answer" value="2"><?= $row['optionB'] ?><br>
    <input type="radio" name="answer" value="3"><?= $row['optionC'] ?><br>
    <input type="radio" name="answer" value="4"><?= $row['optionD'] ?><br>
    <input type="text" name="name" placeholder="নাম" required><br>
    <input type="email" name="email" placeholder="ইমেইল"><br>
    <input type="text" name="phone" placeholder="মোবাইল" required><br>
    <!--<input type="submit" name="submit" value="উত্তর পাঠান">-->
    <button type="submit" name="submit" onClick="return confirm('After completing the answer we will contact with the winner') ">উত্তর পাঠান</button>
</form>
<?php } ?>


<!--onClick=\"return confirm('Are you sure you want to delete this?')\"-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<script>-->
<!--    $(function() {-->
<!--        $('#world').on('submit', function(e) {-->
<!--        e.preventDefault();-->
<!--        $.ajax({-->
<!--            type: 'post',-->
<!--            url: 'answeredby.php',-->
<!--            data: $('#world').serialize(),-->
<!--            success: function(data) {-->
<!--                alert('Answered, we will notify you if you win');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--});-->
<!--</script>-->


