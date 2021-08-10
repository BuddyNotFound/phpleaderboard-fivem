
<!DOCTYPE html>
<html>
<head>
<title>лат зи фак ман</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Име</th>
<th>Убииства</th>
<th>Умирания</th>
<th>Ранк</th>
</tr>
<?php
$conn = mysqli_connect("host", "username", "password", "database");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nickname, kills, deaths, ranks FROM users ORDER BY kills DESC";
$result = $conn->query($sql);
$kill = "kills";

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["nickname"]. "</td><td>" . $row["kills"] . "</td><td>" . $row["deaths"] . "</td><td>"
. $row["ranks"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>