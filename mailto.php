<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="stylesheet" href="styles.css">
  <link rel="canonical" href="">
  <link rel="icon" href="" sizes="16*16" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://unpkg.com/ityped@1.0.3"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <title></title>
</head>
<body>
<?php 

md_language("japanese");
md_internal_encoding("UTF-8");

$name = $_POST['name'];
$mail = $_POST['mail'];
$inquiry = $_POST['inquiry'];

?>
<div class="complete">
  <?php if(md_send_mail($name, $mail, $inquiry)): ?>
    <p><?php echo "メールを送信しました" ?></p>
  <?php else: ?>
    <p><?php echo "メールの送信に失敗しました" ?></p>
  <?php endif ?>
</div>
 

<script src="ityped.js"></script>
<script src="script.js"></script>
</body>
</html>
