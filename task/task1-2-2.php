<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-2</title>
</head>
<body>
<?php
define('TAX', 10);

$penPrice = 100;
$eraserPrice = 200;
$penTax = $penPrice*(TAX+100)/100;
$eraserPriceTax = $eraserPrice*(TAX+100)/100;
$pen = '鉛筆';
$eraser = '消しゴム';

echo "<p>現在の消費税は".TAX."%です。</p><p>{$pen}が{$penPrice}円で税込{$penTax}円です。</p>
<p>{$eraser}が{$eraserPrice}円で税込{$eraserPriceTax}円です。</p>";
?>
</body>
</html>
