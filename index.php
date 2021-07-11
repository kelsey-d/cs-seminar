<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT budget FROM taxinfo");


$row = pg_fetch_array($result, $_POST["id"]-1);
echo $row["budget"];

pg_close($conn);

?>
