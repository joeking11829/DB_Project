<html>
<head>
<meta charset="utf-8">
<title>首頁</title></head>
<body><center>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID&o=New,Edit,Delete" title="學生維護頁面">學生維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Course&t=Course&k=cId&o=New,Edit,Delete" title="課表">開課課表</a><br>
<a href="admin_main.php?q=SELECT * FROM Room&t=Room&k=rId&o=New,Edit,Delete"  title="上課教室">上課教室</a><br><br>
<a href="admin_main.php?q=SELECT * FROM Teacher&t=Teacher&k=tId&o=New,Edit,Delete" title="老師維護頁面">老師維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Department&t=Department&k=dId&o=New,Edit,Delete" title="系所維護頁面">系所維護頁面</a><br>
<a href="admin_main.php?q=SELECT * FROM Student&t=Student&k=sID&o=New,Edit,Delete" title="管理">維護頁面</a><br>

<hr>
學生選課 <br>

<form name="form" action="attend.php" method="post">
輸入學號: <input type=text name=sId id=sId> <input type=submit value=查尋><br>
<form>
<!--
<a href="admin_main.php?q=SELECT Course.*,Teacher.tName FROM Course JOIN Teacher ON Teacher.tId = Course.tId&t=Attend&k=cId&f=tName&o=Attend" height=300 width=1400>

加選測試</a><br>
-->
<br>
</center>
</body>
</html>
