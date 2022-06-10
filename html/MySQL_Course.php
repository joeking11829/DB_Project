<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "Course";

class MySQL_Course extends mysqli {
  public $fieldinfo;
  public $query_result;

  public function __construct($servername = "127.0.0.1", $username = "root", $password = "123456", $dbname = "Course")
  {
    $this->connect_me($servername, $username, $password, $dbname);
  }

  public function connect_me($server,  $user, $pass, $db)
  {
    //$this->sql = new mysqli($server, $user, $pass, $db);
    parent::connect($server, $user, $pass, $db);
    if ($this->connect_error)
      die("Connection failed: " . parent::connect_error);
  }

  public function query_table($q, $caption="Foo")
  {

    $result = parent::query($q);
    $this->query_result = $result;

    echo "<table border=1 align=center>\n";
    echo "<caption>$caption</caption>";
    $this -> fieldinfo = $result->fetch_fields();
    // Each Field name
    foreach ($this -> fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<th>Edit</th>\n";
    echo "<th>Delete</th><tr>\n";

    // Each value of row
    if ($result->num_rows > 0) {
        $n = 0;
	while($row = $result->fetch_assoc()) {
	    while (list($var, $val) = each($row)) {
                print "<td>$val</td>";
	    }
	    //echo "<td> <input type=\"button\" value=\"Edit\" onclick=on_edit_show(" . $n++ . ")> </td>";

	    /* 
             * Process Edit button onclick
             * FIXME: this is tricky solution, set js_X to json object then pass to click event
             *
             *  Look like as
             * ... <script> var js1={"sID":"2","sName":"mike","sPhone":"0911-123-454","sMail":"pete@foos","sbirthday":"2021-06-15"}</script>
             * <td> <input type="button" value="Edit" onclick="on_edit_show(1, js1)"> </td> ...
             */
	    $v = json_encode($row);
            echo "<script> var js" . $n . "=" . $v . "</script>";
	    echo "<td> <input type=\"button\" value=\"Edit\" onclick=\"on_edit_show(" . $n . ", js". $n . ")\"> </td>\n";

	    /* 
             * Process Delte button
             */
	    //echo "<td> <input type=\"button\" value=\"Delete\"> </td>\n";
	    echo "<td> <input type=\"button\" value=\"Delete\" onclick=\"on_delete_show(" . $n . ", js". $n++ . ")\"> </td>\n";
	    echo "<tr>";
	}
    } else {
	echo "0 结果";
    }
    echo "</table>";
    return $this -> fieldinfo;
  }
  public function __dump_row_as_table($row)
  {
    echo "<br><table>\n";
    while (list($var, $val) = each($row)) {
      print "<td>$val</td>";
    }
    echo "<tr></table><br>";
  }
  /*
   * $q is query string eg.
   * $q = INSERT INTO Student SET sID="0004", sName="ken" , sPhone="0911-123-000", sMail="ken@foo" , sbirthday="2021-06-12";
   */
  public function new_data($q)
  {
    if (! ($this->query_result = parent::query($q))) {
       echo("Error description: " . $conn -> error . "<br>\n");
    } else
      echo "Success!<br>\n";
  }
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
