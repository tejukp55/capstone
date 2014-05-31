
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
        $l3=$_GET["t3"];
        $con=mysql_connect("localhost","root","localhost") or die(mysql_errno());
        $db=  mysql_select_db("tracking") or die(mysql_errno());


            $sql="(insert into location_values(latitude,longitude,location_name)  values('$l1','$l2','$l3'));";
            $res=mysql_query($sql);

?>
