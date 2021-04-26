<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UFOに誘拐された！？「誘拐レポート」を！</title>
</head>
<body>
  <h2>UFOに誘拐された？「誘拐レポート」を！</h2>

  <?php
  //接続
  $mysqli = new mysqli( 'localhost', 'kuragane', 'VVmmjcU6TYTKJLQJ', 'kuragane');

  if( $mysqli->connect_errno ) {
  	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
  }


  $last_name = $_POST['lastname'];
  $first_name = $_POST['firstname'];
  $when_it_happend = $_POST['whenithappend'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  $dbc = mysqli_connect( 'localhost', 'kuragane', 'VVmmjcU6TYTKJLQJ', 'kuragane')
  or die( 'エラー：MySQLサーバとの接続に失敗しました。');

  //データベース処理
  $query = "INSERT INTO aliens_abduction (last_name, first_name, when_it_happend, how_long, how_many, alien_descliption, what_they_did,  fang_spotted, other, email) VALUES ('$last_name', '$first_name', '$when_it_happend', '$how_long', '$how_many',  '$alien_description',  '$what_they_did', '$fang_spotted', '$other', '$email')";//ここの書き方独特！注意！

  $result = mysqli_query($dbc, $query)
  or die( 'エラー：データベースとの問い合わせに失敗しました。');
  $mysqli->close();

  echo '情報提供ありがとうございます。<br>';
  echo '誘拐されたのは'.$when_it_happend;
  echo 'で、時間は'.$how_long.'です。<br>';
  echo '奴らは：'.$alien_description.'<br>';
  echo 'ファングはいましたか？'.$fang_spotted.'<br>';
  echo 'メールアドレスは'.$email;
   ?>

</body>
</html>
