<?php
    error_reporting(0);   
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "exam";
    $table      = "examtable";

        

    $conn = mysqli_connect($servername , $username , $password, $database);
         if ($conn){
            // echo "Connection OK<br><br><br><br>";
         }else{
             echo"Connection failed<br>";
         }
         

    echo"Previous Entry:<br>";
    echo"mrnumber:";
    echo $mr = $_GET["mr"];
    echo"<br>";
    echo"Name:";
    echo $nn = $_GET["nm"];
    echo"<br>";
    echo"Department:";
    echo $d = $_GET["d"];
    echo"<br>";
    echo"Address:";
    echo $a= $_GET["a"];

        
?>

<html>
    <head>
        <title> Update Record</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    <head>
<body style="background-color:#FFEBCD">

        <form  name="hospitalform" method="GET" class="box">
        <h1> <u>Update Patient Details</u></h1>
    
        <label for="mrnumber">Mr Number:&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" id="mrnumber" name="mrnumber" value="<?php echo"$mr"?>"><br><br>

        <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" id="name" value="<?php echo"$nn"?>" name="name" ><br><br>

        <label for="department">Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" id="department" value="<?php echo"$d"?>" name="department"><br><br><br>

        <label for="address">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" id="address" value="<?php echo"$a"?>" name="address"><br><br><br>


        <input type="submit" name="submit" value="submit">
       
    </form>
    <a href="display.php"><br><br><br<br><br><br><br><br><br><br><br><input type='submit' value='DISPLAY UPDATED DETAILS'></a>
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
        if(isset($_GET['submit'])){
          $mrnumber=$_GET['mrnumber'];
          $name= $_GET['name'];
          $department=$_GET['department'];
          $address= $_GET['address'];
          
          $query ="UPDATE examtable SET name='$name' ,mrnumber ='$mrnumber', department='$department', address='$address' where mrnumber='$mrnumber' ";

          $data = mysqli_query($conn,$query);
          if($data){
              echo"<script>alert('Record Updated')</script>";
          }else{
              echo"<script>alert('Failed to  Update')</script>";
          }
      }
    ?>
    </body>
</html>
