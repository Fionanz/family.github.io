<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="Fiona" content="My Family">
    <title>Happy Family</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i|Tangerine" rel="stylesheet">
</head>

<body>
	<?php
	if($_POST[name] == ""){
		echo "用户名不能为空";
	}
	else if ($_POST[pwd1] == "" || $_POST[pwd2] == "")
	{
		echo "密码不能为空";
	}
	else if($_POST[pwd1] != $_POST[pwd2]){
		echo "密码设置不一致";
	}
	else{
		echo "<font color=red>成功!</font>";
		echo "<br/>";
		echo "您的用户名为：";
		echo $_POST[name];
		echo "<br/>";
		echo "请在心中默念3遍，记住您的密码。";
	}
		

	?>
</body>
</html>