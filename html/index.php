<html>
<head><title>首頁</title></head>
<body><center>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID" title="學生維護頁面">學生維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Course&t=Course&k=cId" title="課表">開課課表</a><br>
<a href="class_edit.php"  title="title 課程維護頁面">教室(還沒完成)</a><br><br>
<a href="admin_main.php?q=SELECT * FROM Teacher&t=Teacher&k=tId" title="老師維護頁面">老師維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID" title="管理">維護頁面</a><br>
<a href="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Course&k=cId&f=tName"
title="join foreign key test">join foreign key test</a><br>
<a href="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Course&k=cId&f=tName"
title="join foreign key test">join foreign key test</a><br>
</center>
</body>
</html>
