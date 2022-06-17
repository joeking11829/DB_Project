<html>
<head>
<meta charset="utf-8">
<title>首頁</title></head>
<body><center>
學生選課系統

<hr>
已選課程<br>
<iframe src="admin_main.php?q=with CID as (select aId,cId from Attend where sId=<?php echo $_POST['sId']?>) select  CID.aId,CID.cId, Course.tId,cName,cDesc,dateTime,unit,max from Course JOIN CID where CID.cId=Course.cId;&t=Attend&k=cId&f=tName&o=Delete" height=300 width=1400>
</iframe>
<!-- c colume -->

<hr>
加選<br>
<!---
<iframe src="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Attend&k=cId&f=tName&o=Attend&s=<?php echo $_POST['sId']?>" height=300 width=1400> -->

<iframe src="admin_main.php?q=SELECT Course.*,Teacher.tName, COUNT(Attend.sId) as attendCount FROM Course JOIN Teacher ON Teacher.tId = Course.tId JOIN Attend ON Attend.cId = Course.cId GROUP BY Course.cId&t=Attend&k=cId&f=tName&o=Attend&s=<?php echo $_POST['sId']?>" height=300 width=1400>
</iframe>
</center>
</body>
</html>
