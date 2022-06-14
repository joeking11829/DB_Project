<html>
<head></head>
<body>
<?php include 'MySQL_Course.php';
$sql = new MySQL_Course();
/*
 * POST:
 *
 * @action_emu - [new|update|delete|attend]
 * @fkey_name  - bypass foreign keyname if @action_emu is update or new
 * @table_name - Manipulated table
 *
 **/
$act = $_POST['action_emu'];
//$fk  = $_POST['fkey_name'];
$fk  = $sql->_POST_explode('fkey_name', ',');

/*
 * Case in @action_emu = delete, did not need fields, just want primary_key number.
 */

$q="";

if ($act == "new" || $act == "update") {
  while( list( $key, $value ) = each( $_POST )) {
    //echo $key . " : " . $value . "<br>";
    /* XXX: Tricky solution, 
     * 1. keyword prefix with "__field__" is field name
     * 2. Skip process foreign key @fk 
     */
    if (strncmp($key, "__field__", 9))
      continue;   /* by pass POST metadata nothing about SQL */

    //echo "COMPARE __field__$fk  AND $key <br>";
    //echo "COMPARE " . strlen("__field__$fk") . "AND" . strlen($key) . " <br>\n";

    $key = str_replace("__field__", "", $key);

    /*
     * But skip foreign key;
     */
    if (in_array($key, $fk))
       continue;
/*
    if (!strncmp("__field__$fk", $key, strlen($key))) {
      echo "======= skip foreign key $fk <br>\n";
      continue;
    }
*/
    //$q = $q . str_replace("__field__", "", $key) . "=\"$value\",";
    $q = $q . $key . "=\"$value\",";
    echo "======= $q <br>\n";
  }
}

//$q = "INSERT INTO " . $_POST['table_name'] . " SET " . rtrim($q, ",")  . ";";
// UPDATE `Student` SET `sID` = '7', `sMail` = 'mike@fooww' WHERE `Student`.`sID` = 2;
if ($act == "update")
{

  $q = "UPDATE " . $_POST['table_name'] . " SET " . rtrim($q, ",") . 
  " WHERE " . $_POST['table_name'] . "." . $_POST['pkey_name'] . "=\"" . $_POST['pkey_value'] . "\";";

}
else if ($act == "new")
{
  $q = "INSERT INTO " . $_POST['table_name'] . " SET " . rtrim($q, ",")  . ";";

}
else if ($act == "delete")
{

  $q = "DELETE FROM " . $_POST['table_name'] .  
  " WHERE " . $_POST['table_name'] . "." . $_POST['pkey_name'] . "=\"" . $_POST['pkey_value'] . "\";";

}
else if ($act == "attend")
{
  $q = "INSERT INTO Attend SET sId=" . $_POST['student_id'] .  ",cId=" . $_POST['__field__cId'] . ";";
}
echo ">>>> " . $q  . "<br>\n";

echo "Query >>>> " . $q  . "<br>\n";
$sql->new_data($q);


// INSERT INTO `Student` (`sID`, `sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
// Test ok
// INSERT INTO Student SET sID="0004", sName="ken" , sPhone="0911-123-000", sMail="ken@foo" , sbirthday="2021-06-12";
//$q = "INSERT INTO " . $_POST[$table_name] . "(" sID` ", "`sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
?>
<button onclick="history.back()">上一頁</button>
</body>
</html>
