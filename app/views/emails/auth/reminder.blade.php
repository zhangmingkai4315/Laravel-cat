<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>喵，如下是您的密码重置邮件：</h2>

		<div>
			请点击以下链接进行密码的重置操作: {{ URL::to('password/reset', array($token)) }}.<br/>
			链接将会在{{ Config::get('auth.reminder.expire', 60) }} 分钟后到期.
		</div>
	</body>
</html>
