<html>
<head><title>首頁</title></head>
<body><center>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID&o=New,Edit,Delete" title="學生維護頁面">學生維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Course&t=Course&k=cId&o=New,Edit,Delete" title="課表">開課課表</a><br>
<a href="class_edit.php"  title="title 課程維護頁面">教室(還沒完成)</a><br><br>
<a href="admin_main.php?q=SELECT * FROM Teacher&t=Teacher&k=tId&o=New,Edit,Delete" title="老師維護頁面">老師維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID&o=New,Edit,Delete" title="管理">維護頁面</a><br>

<hr>
<a href="attend.html" title="學生選課">學生選課</a><br>
<br>
<a href="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Course&k=cId&f=tName&o=Edit,Delete"
title="join foreign key test">join foreign key test</a><br>
<a href="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Course&k=cId&f=tName&o=Edit,Delete"
title="join foreign key test">join foreign key test</a><br>
<a href="admin_main.php?q=with CID as (select cId from Attend where sId=1) select  CID.cId, Course.tId,cName,cDesc,dateTime,unit,max from Course JOIN CID where CID.cId=Course.cId;&t=Attend&k=cId&f=tName&o=Delete,New" title="test">Debug</a>
</center>
</body>
</html>
