<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>文字列を連結する</title>
</head>
<body>

  <p>
    <?php
    $pref = "大田区";
    echo "東京都".$pref."<br>";
    echo "東京都{$pref}";
    ?>
  </p>

</body>