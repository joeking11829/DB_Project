<html>
<head></head>
<body>
<?php include 'MySQL_Course.php';
$sql = new MySQL_Course();
$q="";

//DELETE FROM `Student` WHERE `Student`.`sID` = 11
while( list( $key, $value ) = each( $_POST )) {
   echo $key . " : " . $value . "<br>";
   if (!strncmp($key, "__field__", 9)) {
//       echo "This is $key";
//       echo "Replaced to: " . str_replace("__field__", "", $key);
       $q = $q . str_replace("__field__", "", $key) . "=\"$value\",";
       echo "======= $q <br>\n";
   }
}
//$q = "INSERT INTO " . $_POST['table_name'] . " SET " . rtrim($q, ",")  . ";";
// UPDATE `Student` SET `sID` = '7', `sMail` = 'mike@fooww' WHERE `Student`.`sID` = 2;
$q = "DELETE FROM " . $_POST['table_name'] .  
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
