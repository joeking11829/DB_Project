<html>
<head></head>
<body>
<?php include 'mysql.php';
$q="";
while( list( $key, $value ) = each( $_POST )) {
   echo $key . " : " . $value . "<br>";
   if (!strncmp($key, "__field__", 9)) {
       echo "This is $key";
       echo "Replaced to: " . str_replace("__field__", "", $key);
       $q = $q . str_replace("__field__", "", $key) . "=\"$value\",";
       echo "======= $q <br>\n";
   }
}
//echo ">>>> " . $q=rtrim($q, ",") . "<br>\n";
$q = "INSERT INTO " . $_POST['table_name'] . " SET " . rtrim($q, ",")  . ";";
echo ">>>> " . $q  . "<br>\n";
// INSERT INTO `Student` (`sID`, `sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
// Test ok
// INSERT INTO Student SET sID="0004", sName="ken" , sPhone="0911-123-000", sMail="ken@foo" , sbirthday="2021-06-12";
//$q = "INSERT INTO " . $_POST[$table_name] . "(" sID` ", "`sName`, `sPhone`, `sMail`, `sbirthday`) VALUES ('2', 'mike', '0911-123-454', 'pete@foos', '2021-06-15');
new_data($sql, $q);
?>
</body>
</html>
