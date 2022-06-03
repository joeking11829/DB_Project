<html>
<head></head>
<body>
<?php include 'mysql.php';
//dump_table($sql, "Student");
$fieldinfo = query_table($sql, "SELECT * FROM Teacher", "Teacher");

?>
<center>
</br>
</br>
<form name="form" action="new.php" method="post" >
<table name=new border=1>
<caption>新增</caption>
<?php
    foreach ($fieldinfo as $val) {
        printf("<th>%s</th>\n", $val -> name);
    }
    echo "<tr>\n";
    foreach ($fieldinfo as $val) {
        printf("<td> <input type=\"text\" name=__field__%s value=test_%s /></td>\n", $val -> name, $val -> name);
    }
    echo "<tr>\n";
   // INSERT INTO `Teacher` (`tId`, `tName`, `tPhone`) VALUES ('3', 'Vivi', '02-1123-4412');
?>
</table>
<br>
   <input type="hidden" name="table_name" value="Student" />
   <input type="submit" name="submit" value="Submit" class="button"/>
</form>
</center>
</body>
</html>
