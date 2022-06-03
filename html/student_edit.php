<html>
<head></head>
<body>
<?php include 'mysql.php';
//dump_table($sql, "Student");
$fieldinfo = query_table($sql, "SELECT * FROM Student", "Student");

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

?>
</table>
<br>
   <input type="hidden" name="table_name" value="Student" />
   <input type="submit" name="submit" value="Submit" class="button"/>
</form>
</center>
</body>
</html>
