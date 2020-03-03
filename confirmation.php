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
 <div class="inquiry__content">
   <h2>お問い合わせ内容</h2>
   <form action="mailto.php" method="post">
     <table>
       <tr>
         <th></th><th>入力内容</th>
       </tr>
       <tr>
         <td>名前</td><td><?php echo $_POST["name"]; ?></td>
       </tr>
       <tr>
         <td>メールアドレス</td><td><?php echo $_POST["mail"]; ?></td>
       </tr>
       <tr>
         <td>問い合わせ内容</td><td><?php echo $_POST["inquiry"]; ?></td>
       </tr>

     </table>
     <input type="submit" value="送信" class="submit">
   </form>
 </div> 
 

<script src="ityped.js"></script>
<script src="script.js"></script>
</body>
</html>
