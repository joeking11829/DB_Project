<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "Course";
// Create connection
$sql = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($sql->connect_error) {
  die("Connection failed: " . $sql->connect_error);
}

function dump_table($conn, $tname)
{
    $sql_select = "SELECT * FROM $tname";
    $result = $conn->query($sql_select);

    echo "<table border=1 align=center>\n";
    echo "<caption>$tname</caption>";
    $fieldinfo = $result->fetch_fields();

    // Each Field name
    foreach ($fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<th>Delete</th><tr>\n";

    // Each value of row
    if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	    while (list($var, $val) = each($row)) {
                print "<td>$val</td>";
	    }
	    echo "<td> <input type=\"button\" value=\"Delete\"> </td>";
	    echo "<tr>";

	}
    } else {
	echo "0 结果";
    }
    echo "</table>";
}

function query_table($conn, $q, $caption="Foo")
{
       
    $result = $conn->query($q);

    echo "<table border=1 align=center>\n";
    echo "<caption>$caption</caption>";
    $fieldinfo = $result->fetch_fields();

    // Each Field name
    foreach ($fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<th>Delete</th><tr>\n";

    // Each value of row
    if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	    while (list($var, $val) = each($row)) {
                print "<td>$val</td>";
	    }
	    echo "<td> <input type=\"button\" value=\"Delete\"> </td>";
	    echo "<tr>";

	}
    } else {
	echo "0 结果";
    }
    echo "</table>";
    return $fieldinfo;
}

function new_data($conn, $q)
{
    if (!$conn -> query($q)) {
 	 echo("Error description: " . $conn -> error . "<br>\n");
    } else
	echo "Success!<br>\n";
}
//dump_table($sql, "Student");
?>
