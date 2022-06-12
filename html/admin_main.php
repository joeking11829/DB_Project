<html>
<?php include 'MySQL_Course.php';
//dump_table($sql, "Student");

$sql = new MySQL_Course();
//$sql->query_table("SELECT * FROM Student", "Student");
$sql->query_table($_GET['q'], $_GET['t']);
?>
<SCRIPT>
/* https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp */
function on_edit_show(n_row, js_row) {
  var x = document.getElementById("Edit");
  x.style.display = "block";

  document.getElementById("Edit_table").caption.innerHTML = "修改";
  document.getElementById("Submit").value = "修改";
  //document.getElementById("Edit_form").action = "update.php";
  //document.getElementById("Edit_form").action = "post.php";
  document.getElementById("action_emu").value = "update";
  update_edit_table(n_row, js_row);
}

function on_delete_show(n_row, js_row) {
  var x = document.getElementById("Edit");
  x.style.display = "block";

  document.getElementById("Edit_table").caption.innerHTML = "刪除";
  document.getElementById("Submit").value = "刪除";
  //document.getElementById("Edit_form").action = "del.php";
  document.getElementById("action_emu").value = "delete";
  update_edit_table(n_row, js_row);
}

function update_edit_table(n_row, js_row)
{
  /* https://www.w3schools.com/jsref/coll_table_cells.asp */
  //alert(document.getElementById("Edit_table").rows[0].cells.length);
  var pk = "<?php echo $_GET['k'] ?>";
  var fk = "<?php echo isset($_GET['f']) ? $_GET['f']:''; ?>"; //  @f migh be NULL.
  for (var k in js_row) {
    //alert(js_row[k]);
    document.getElementById(k).value = js_row[k];
    if (pk == k)
      document.getElementById("pkey_value").value = js_row[k];
  }
  document.getElementById("table_name").value = "<?php echo $_GET['t']; ?>";
  document.getElementById("pkey_name").value = pk;
  document.getElementById("fkey_name").value = fk; // foreign key might null
}

</SCRIPT>
<head></head>
<body>
<center>
</br>
</br>
<?php
  // debug here...
  //echo "GET: ===" . $_GET['q'] . "===<br>";
  //echo "GET: ===" . $_GET['t'] . "===<br>";
  //echo "GET: ===" . $_GET['k'] . "===<br>";
?>
<div id="Edit">
<form name="form" id="Edit_form" action="post.php" method="post" >
<table name=new border=1 id="Edit_table">
<caption>新增</caption>
<?php
    /* https://www.php.net/manual/en/class.mysqli-result.php */

    /* FIXME:  Bug of if table is empty (no data) */
    $sql->query_result->data_seek(0);
    //$sql->__dump_row_as_table($sql->query_result->fetch_assoc());
    $row = $sql->query_result->fetch_assoc();
    foreach ($sql->fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<tr>\n";

    foreach ($sql->fieldinfo as $val) {
        //echo "name: " . $val -> name . "<br>";
        //echo "value: " . $row[$val -> name] . "<br>";
        printf("<td> <input type=\"text\" name=__field__%s id=%s value=%s /></td>\n", $val -> name, $val -> name, $row[$val -> name]);
    }
    echo "<tr>\n";
?>
</table>
<br>
   <!-- update when user click to post form , default is new row -->
   <input type="hidden" name="table_name" id="table_name" value="<?php echo $_GET['t'] ?>" />
   <input type="hidden" name="pkey_name" id="pkey_name"  value="" />
   <input type="hidden" name="pkey_value"id="pkey_value"  value="" />
   <input type="hidden" name="fkey_name" id="fkey_name"  value="" />
   <input type="hidden" name="action_emu" id="action_emu"  value="new" />
   <input type="submit" name="submit" id="Submit" value="新增" class="button"/>
</form>
</div>

</center>
</body>
</html>
