<?php
// $id=$_GET['id'];
// $ip = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
// echo $ip; exit();
//$id1=$_SESSION['id']; COMMENTED THIS AS I AM NOT IN SESSION. HARDCODED IT IN THE FORM AS VALUE 5
?>
<html>
    <head>
        <title>Polling System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                           <button id="question">Question</button>
                        </div>
                        <div class="col-md-3">
                            <button id="answer">Answer</button>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-6">
                           <form method="post" class="msgfrm" id="msgfrm">
                               
                                <h4>Who will win today?</h4>
                
                                <input type="hidden" value="<?php echo $ip; ?>" name="ip" id="ip">
                            
                                <input type="radio" name="team" value="bd" id="team1"> Bangladesh<br>
                                
                                <input type="radio" name="team" value="in" id="team2"> India<br>
                            
                                <input type="submit"  value="Vote" >
                        
                            </form>
                            <h3 id="messageDisplay">
                                
                            </h3>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
              $("#question").click(function(){
                $("#msgfrm").show();
                $("#messageDisplay").hide();
              });
              $("#answer").click(function(){
                 $("#messageDisplay").show();
                 $("#msgfrm").hide();
              });
            });
        </script>
        <script>
            $("#msgfrm").on("submit", function(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "database_connection.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        alert("Done");
                    },
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $('#answer').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        type:"POST",
                        url: "database_connect.php",
                        data: $(this).serialize(),
                        dataType: "html",
                        success: function(data){
                            $('#messageDisplay').html(data);
                        }
                    });
                })
            });
        </script>
        <!--<script>-->
        <!--    $("#click").click(function() {-->
        <!--        $.ajax({-->
        <!--            url: "database_connect.php",-->
        <!--            type: "POST",-->
        <!--            dataType: "json",-->
        <!--            success: function(data) {-->
        <!--                $('#output').html("<b>id:</b>"+id+"<b>team:</b>"+team+"<b>ip_address:</b>"+ip_address);-->
        <!--            },-->
        <!--        });-->
        <!--    });-->
        <!--</script>-->
        
    </body>  
</html>