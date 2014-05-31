<!DOCTYPE html>
<html>
<head>
<body>
    <form action="1.php">
            <input type="submit" name="Display" value="Display"  style="height:50px; width:100px">
        </form>
        <form action="newhtml1.html">
            <input type="submit" name="Insert" value="Insert"  style="height:50px; width:100px">
        </form>
        <form action="newhtml2.html">
            <input type="submit" name="Search" value="Search"  style="height:50px; width:100px">
        </form>

</body>
</head>
</html>
<?php
$con=mysql_connect("localhost","root","localhost") or die(mysql_errno());
                                $db=  mysql_select_db("tracking") or die(mysql_errno());
                                $sql1="select * from location_values";
                                $res1=mysql_query($sql1);
                                echo "<table>";

                                while($row = mysql_fetch_array($res1))
                                    {
                                     echo "<tr><td>";
                                     echo $row['latitude'];
                                    
                           
                                     echo "</td><td>";
                                     echo $row['longitude'];
                                     echo "</td><td>";
                                     echo $row['location_name'];
                                     echo "</td></tr>";
                                      }
                                      echo "</table>"
?>