<?php
$servername = "localhost"; 
$username = "root";  
$password = ""; 
$database = "tour"; 


$conn = new mysqli($servername, $username, $password, $database);


$sql= "select * from travel";
$res= mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    ?>
<table border="1" cellspacing="10" cellpadding="10">
    <tr><th>Email</th>
    <th>Password</th>
    <?php
    while($row=mysqli_fetch_assoc($res))
    {
        echo "<tr><td>".$row['email']."</td>";
        echo "<td>".$row['psw']."</td> </tr>";
    }?>

</table>
<?php
}

$conn->close();
?>
