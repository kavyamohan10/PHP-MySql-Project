<html>
    <head>
        <title>Search Patient Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    <head>
    <body align="center" class="searchbody">
    <h1>Enter the mrnumber to search for a patient</h1>
    <form action="" method="POST">
        <input type="text" name="mrnumber">
        <input type="submit" name="search" value="Search" >
    </form>
     <table border="1" align="center">
         <br><br>
           <h2>Patient Details</h2>
       <tr>
       <th>mrnumber</th>
       <th>Name</th>
       <th>Department</th>
       <th>Address</th>
       </tr>
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
            if(isset($_POST['search'])){
                $mrnumber = $_POST['mrnumber'];
                $query = "SELECT * FROM examtable where mrnumber ='$mrnumber'"; 
                $data = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($data)){
                  ?><br><br>
                    <tr>
                      <td><?php echo $row['mrnumber'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['department'];?></td>
                      <td><?php echo $row['department'];?></td>
                    </tr>
                    <?php
                }
            }
            ?>
    </body>
    </html>