<html>
    <head>
        <title>Deleted Patient Details</title>
    <head>
<body>
    <?php
         
         $servername = "localhost";
         $username   = "root";
         $password   = "";
         $database   = "exam";
         $table      = "examtable";

        

         $conn = mysqli_connect($servername , $username , $password, $database);
         if ($conn){
             //echo "Connection OK<br><br><br><br>";
         }else{
             echo"Connection failed<br>";
         }
         
         $mrnumber = $_GET["mr"];

         $query = "DELETE FROM examtable where mrnumber ='$mrnumber'"; 
         $data = mysqli_query($conn, $query);
          
         if($data){
             echo"<script>alert('Details Deleted')</script>";
         }else{
             echo"<script>alert('Failed to delete')</script>";
         }

    ?>
    <a href="display.php">GO TO Display Page</a>
    </body>
    </html>