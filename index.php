<!DOCTYPE html>
<html lang="zh">

<head>
	<meta charset="UTF-8" />
	<title>渗透测试集成平台</title>
	<style>
		#title {
			text-align: center;
			color: #FF6AC1;
		}

		.submit {
			text-align: center;
		}
	</style>
</head>

<body class="text">
	<div id="title">
		<ul>
			这是个人搭建的渗透测试平台
		</ul>
		<ul>
			用于学习web漏洞的集成平台
		</ul>
		<ul>
			目前个人实力有限暂时只做简陋页面以后会进行完善
		</ul>
		<ul>
			本平台只做教学目的,方便更好的学习和认识web漏洞
		</ul>
		<ul>
			使用者做出的一切违法事务与本站作者无关,我国有一套完整的宪法,呼吁学习使用者遵纪守法
		</ul>
	</div>
	<div class="submit">
		<form method="GET">
			<p>dvwa</p>
			<input type="submit" value="启动" name="dvwa" />
			<p>sqli-labs</p>
			<input type="submit" value="启动" name="sqli-labs" />
			<p>upload-labs</p>
			<input type="submit" value="启动" name="upload-labs" />
		</form>
	</div>
</body>

</html>
<?php
$data = $_GET;
$dataKey = key($data);
if (isset($dataKey)) {
	header("location:$dataKey");
}
?>
