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

  if($nickname==''){
    print 'ニックネーム入ってないンゴ<br>';
  }
  else{
    print 'ようこそ、';
    print $nickname;
    print '様。<br>';
  }

  if($email==''){
    print 'メアド書け<br>';
  }
  else{
    print 'メールアドレス:';
    print $email;
    print '<br>';
  }

  if($goiken==''){
    print '一言ぐらい書けや<br>';
  }
  else{
    print 'ご意見：';
    print $goiken;
    print '<br>';
  }



  if($nickname=='' || $email=='' || $goiken==''){
    print '<input type="button" onclick="history.back()" value="戻る"> ';
  }
  else{
    print '<form method="post" action="thanks.php">';
    print'<input name="nickname" type="hidden" value="'.$nickname.'">';
    print'<input name="email" type="hidden" value="'.$email.'">';
    print'<input name="goiken" type="hidden" value="'.$goiken.'">';
    print '<input type="button" onclick="history.back()" value="戻る"> ';
    print '<input type="submit" value="OK">';
  }
  print '</form>';
  ?>

</body>
</html>
