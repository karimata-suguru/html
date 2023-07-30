<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-2</title>
</head>
<body>
  <?php
  $message = '<p>現在、消費税は10%です。</p><p>鉛筆が100円で税込み110円です。</p><p>消しゴムが200円で税込み220円です。</p>';
  define('TITLE','<p>現在、消費税は10%です。</p><p>鉛筆が100円で税込み110円です。</p><p>消しゴムが200円で税込み220円です。</p>' )
  ?>
  
  <?= $message; ?>
  <?= TITLE; ?>
</body>
</html>