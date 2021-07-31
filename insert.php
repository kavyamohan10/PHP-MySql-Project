<html>
    <head>
        <title>Inserted values</title>
    </head>   
  <body align="center" style="background-color:bisque;">
      <?php
         $servername = "localhost";
         $username   = "root";
         $password   = "";
         $database   = "exam";
         $table      = "examtable";

         $conn = mysqli_connect($servername , $username , $password, $database);
         if ($conn){
             echo "Connection OK<br><br><br><br>";
         }else{
             echo"Connection failed<br>";
         }
         
         $mrnumber = $_POST["mrnumber"];
         $name =$_POST["name"];
         $department =$_POST["department"];
         $address = $_POST["address"];
         


         echo"Details Inserted<br><br><br>";
         
         echo "Mr Number: $mrnumber<br>";
         echo "Name    : $name<br>";
         echo" Department :$department<br>";
         echo "Address  : $address<br><br><br><br>";

            $query ="INSERT INTO examtable VALUES('$mrnumber','$name','$department','$address')";
            $data = mysqli_query($conn,$query);
            if($data){
               echo"<script>alert('Data Inserted Successfully')</script>";
            }else{
                echo"<script>alert('Data Entry Failed:Same Data Exits')</script><br>";
            }
        ?>
        <br>
        <p style="color:steelblue;">Click the button to</p>
        <a href="display.php"> <input type='submit' value=' Display Details'></a>
    </body>
</html>
