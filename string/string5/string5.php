<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>文字列の中で変数展開する</title>
</head>
<body>

  <p>
   <?php 
      $name = "高橋";
      echo "私の名前は{$name}です。<br>";
      echo '私の名前は{$name}です。';
    ?>
  </p>

</body>