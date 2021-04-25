<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=NeptunesBoyos");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT * FROM taxinfo WHERE states='$_POST[state]'");


$row = pg_fetch_array($result);
echo "
<ul>
	<li class=\"stat-category\">Budget(m): $${row["budget"]}M </li>
	<li class=\"stat-category\">Pension(m): $${row["pension"]}M </li>
	<li class=\"stat-category\">Healthcare(m): $${row["healthcare"]}M </li>
	<li class=\"stat-category\">Defense(m): $${row["defense"]}M </li>
	<li class=\"stat-category\">Education(m): $${row["education"]}M </li>
	<li class=\"stat-category\">Transport(m): $${row["transport"]}M </li>
	<li class=\"stat-category\">Welfare(m): $${row["welfare"]}M </li>
</ul>";


pg_close($conn);

?>