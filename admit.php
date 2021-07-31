<!DOCTYPE html>
<html>
    <head>
        <title>Hospital Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body align="center">
        <h1>Hospital Management System</h1>
        
        <form name="hospitalform"  method="POST" action="insert.php" class="box">
        <h2>Enter the Details of the patient</h2>
              <label for="mrnumber">MR number:&nbsp;&nbsp;&nbsp; </label>
               <input type="number" id="mrnumber" name="mrnumber"><br><br><br>

            <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <input type="text" id="name" name="name"><br><br><br>


            <label for="department">Department:&nbsp;&nbsp;</label>
               <input type="text" id="department" name="department"><br><br><br>

            <label for="address">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                <textarea id="address" name="address"></textarea><br><br><br>
       
        
            <input type="reset" value="Reset">

            <input type="submit" value="Submit">
        </form>
        
    </body>
</html>