<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','wordsworth_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM registry WHERE supid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Service URL</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['supname'] . "</td>";
    echo "<td>" . $row['wsdlurl'] . "</td>";

    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
