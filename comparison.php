<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=NeptunesBoyos");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT * FROM taxinfo WHERE states='$_POST[state]'");


$row = pg_fetch_array($result);
echo $row["budget"];
echo $row["pension"];
echo $row["healthcare"];
echo $row["defense"];
echo $row["education"];
echo $row["transport"];
echo $row["welfare"];

pg_close($conn);

?>