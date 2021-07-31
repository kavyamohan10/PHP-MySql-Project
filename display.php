<html>
    <head>
        <title>Display Details</title>
        <link rel="stylesheet"  type="text/css" href="style.css">
    </head>
    <body align="center" style="background-color:#E6E6FA">
       
       <table border="2" align="center" cellspacing="8">
           <h1>Patient Details</h1>
       <tr>
      
       <th>mrnumber</th>
       <th>Name</th>
       <th>Department</th>
       <th>Address</th>
       <th colspan="2" align="center">Operations</th>
       </tr>

        <?php
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $database   = "exam";
            $table      = "examtable";

            $conn = mysqli_connect($servername, $username, $password, $database);
            if($conn){
               // echo"connection OK<br>";
            }else{
                echo"connection Failed";
            }

            $query = "select * from  examtable order by mrnumber";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
           

            if($total!=0){
                while($result=mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                    <td>".$result['mrnumber']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['department']."</td>
                    <td>".$result['address']."</td>
                    <td><a href='update.php?mr=$result[mrnumber] & nm=$result[name] & d=$result[department]  &a=$result[address]'><input type='submit' value='Update' id='updatebtn'></a></td>
                    <td><a href='delete.php?mr=$result[mrnumber]'><input type='submit' value='Delete' id='deletebtn'></td>
                    </tr>";
                }
            }else{
                echo"No Records";
            }
        ?>
        </table>
        <br><br><br>
        <a href="index.php"><input type='submit' value='GO TO HOME PAGE'></a>
    </body>
</html>