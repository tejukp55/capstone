
<!DOCTYPE html>
<html>
<head>
<body>
    <form action="1.php">
            <input type="submit" name="Display" value="Display">
        </form>
        <form action="newhtml1.html">
            <input type="submit" name="Insert" value="Insert">
        </form>
        <form action="newhtml2.html">
            <input type="submit" name="Search" value="Search">

        </form>


</body>
</head>
</html>
<?php

$l1=$_GET["t1"];
        $l2=$_GET["t2"];

        $con=mysql_connect("localhost","root","localhost") or die(mysql_errno());
        $db=  mysql_select_db("tracking") or die(mysql_errno());


            $sql="(select * from location_values where latitude='$l1' AND longitude='$l2');";
           $res1=mysql_query($sql);
           
                                                                while($row = mysql_fetch_array($res1))
                                    {
                                    
                                    echo $row['location_name'];
                                   
                                }
?>
