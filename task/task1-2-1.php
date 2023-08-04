<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-1</title>
</head>
<body>
  <?php
  $x = '100円';
  $y = '110円';
  $z = '200円';
  define('TITLE','10%' )
  ?>
  現在、消費税は<?= TITLE; ?>鉛筆が<?= $x; ?>で税込み<?= $y; ?>です。消しゴムが<?= $z; ?>で税込み220円です。
  
  
</body>
</html>