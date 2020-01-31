<html>

<head> <meta charset="utf-8" /> 
<title>Get Client Machine IP Address using JavaScript and JSON</title> 
<link rel="stylesheet" href="style.css" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script type="text/javascript"> 
        var getIPAddress = function() { 
            $.getJSON("https://jsonip.com?callback=?", function(data) { console.log(data.ip); }); 
            
        }; 
    </script>
</head> 
<body>
     <div>
          <h3> Get Client Machine IP Address using JavaScript and JSON </h3> 
          <a href="#" onload="getIPAddress()">Cleck to get IP Address</a> 
          <br/><br/><br/>
          For <a href="http://www.code-sample.com/">more ...</a> 
          </div> 
          </body> 
          </html>
          <script>
              $(document).ready(function() {
                 getIPAddress();
              });
          </script>