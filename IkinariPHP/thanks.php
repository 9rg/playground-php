<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

print $nickname;
print '様、ありがとナス！<br>';
print '『';
print $goiken;
print '』なんて貴重なご意見、嬉しすぎて死ぬんご！<br>';
print $email;
print 'に返信を送っといたんで、よろしくぅ！<br>';

 ?>
</body>
</html>
