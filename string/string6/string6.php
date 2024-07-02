<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ヒアドキュメントを使った文字列リテラルの作成</title>
</head>
<body>

<pre>
  <?php 
  echo  <<<LABEL
  こんにちは。
  私の名前は本田です。
  また会いましょう。
  LABEL;
  ?>
</pre>

</body>