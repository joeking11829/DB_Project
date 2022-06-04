<html>
<?php include 'MySQL_Course.php';
//dump_table($sql, "Student");

$sql = new MySQL_Course();
//$sql->query_table("SELECT * FROM Student", "Student");
$sql->query_table("SELECT * FROM Student", "Student");
?>
<SCRIPT>
/* https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp */
function on_edit_show(n_row, js_row) {
  var x = document.getElementById("Edit");
  //alert(n_row);
  //alert(jx['sPhone']);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  update_edit_table(n_row, js_row);
}

function update_edit_table(n_row, js_row)
{
  /* https://www.w3schools.com/jsref/coll_table_cells.asp */
  //alert(document.getElementById("Edit_table").rows[0].cells.length);
  var pk = "<?php echo $_GET['k'] ?>";
  for(var k in js_row) {
    //alert(js_row[k]);
    document.getElementById(k).value = js_row[k];
    if (pk == k)
      document.getElementById("pkey_value").value = js_row[k];
  }
  document.getElementById("table_name").value = "<?php echo $_GET['t']; ?>";
  document.getElementById("pkey_name").value = pk;

}

</SCRIPT>
<head></head>
<body>
<center>
</br>
</br>
<?php
  // debug here...
  echo "GET: ===" . $_GET['q'] . "===<br>";
  echo "GET: ===" . $_GET['t'] . "===<br>";
  echo "GET: ===" . $_GET['k'] . "===<br>";
?>
<form name="form" action="new.php" method="post" >
<table name=new border=1>
<caption>新增</caption>
<?php
    foreach ($sql->fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<tr>\n";
    foreach ($sql->fieldinfo as $val) {
        printf("<td> <input type=\"text\" name=__field__%s value=test_%s /></td>\n", $val -> name, $val -> name);
    }
    echo "<tr>\n";

?>
</table>
<br>
   <input type="hidden" name="table_name" value="Student" />
   <input type="submit" name="submit" value="Submit" class="button"/>
</form>
<button onclick="on_edit_show(2, 4)">Try it</button>
<div id="Edit">
<form name="form" action="update.php" method="post" >
<table name=new border=1 id="Edit_table">
<caption>Edit</caption>
<?php
    /* https://www.php.net/manual/en/class.mysqli-result.php */
    $sql->query_result->data_seek(1);
    //$sql->__dump_row_as_table($sql->query_result->fetch_assoc());
    $row = $sql->query_result->fetch_assoc();
    foreach ($sql->fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<tr>\n";
    //UPDATE `Student` SET `sID` = '7', `sMail` = 'mike@fooww' WHERE `Student`.`sID` = 2;
    foreach ($sql->fieldinfo as $val) {
        printf("<td> <input type=\"text\" name=__field__%s id=%s value=%s /></td>\n", $val -> name, $val -> name, $row[$val -> name]);
    }
    echo "<tr>\n";
?>
</table>
<br>
   <input type="hidden" name="table_name" id="table_name" value="Student" />
   <input type="hidden" name="pkey_name" id="pkey_name"  value="sID" />
   <input type="hidden" name="pkey_value"id="pkey_value"  value="03" />
   <input type="submit" name="submit" value="Submit" class="button"/>
</form>
</div>

</center>
</body>
</html>
