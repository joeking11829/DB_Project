<html>
<head></head>
<body>
<?php include 'MySQL_Course.php';
$sql = new MySQL_Course();
$q="";

$fk = $_POST['fkey_name'];

while( list( $key, $value ) = each( $_POST )) {
   echo $key . " : " . $value . "<br>";
   /* XXX: Tricky solution, 
    * 1. keyword prefix with __field__ is field name
    * 2. Skip process foreign key @fk 
    */
   if (!strncmp($key, "__field__", 9)) {
       echo "COMPARE __field__$fk  AND $key <br>";
       echo "COMPARE " . strlen("__field__$fk") . "AND" . strlen($key) . " <br>\n";
       if (!strncmp("__field__$fk", $key, strlen($key))) {
	  echo "======= skip foreign key $fk <br>\n";
          continue;
         }
       $q = $q . str_replace("__field__", "", $key) . "=\"$value\",";
       echo "======= $q <br>\n";
   }
}
//$q = "INSERT INTO " . $_POST['table_name'] . " SET " . rtrim($q, ",")  . ";";
// UPDATE `Student` SET `sID` = '7', `sMail` = 'mike@fooww' WHERE `Student`.`sID` = 2;
$q = "UPDATE " . $_POST['table_name'] . " SET " . rtrim($q, ",") . 
" WHERE " . $_POST['table_name'] . "." . $_POST['pkey_name'] . "=\"" . $_POST['pkey_value'] . "\";";
echo ">>>> " . $q  . "<br>\n";
// INSERT INTO `Student` (`sID`, `sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
// Test ok
// INSERT INTO Student SET sID="0004", sName="ken" , sPhone="0911-123-000", sMail="ken@foo" , sbirthday="2021-06-12";
//$q = "INSERT INTO " . $_POST[$table_name] . "(" sID` ", "`sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
$sql->new_data($q);
?>
<button onclick="history.back()">上一頁</button>
</body>
</html>
