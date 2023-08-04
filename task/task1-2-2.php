<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-2</title>
</head>
<body>
<?php
define('TAX_RATE', 10);

$taxRate = 10;
$penPrice = 100;
$eraserPrice = 200;

function calculateTaxIncludedPrice($price) {
    global $TAX_RATE;
    return $price + ($price * $TAX_RATE / 100);
}
$penPriceTaxIncluded = calculateTaxIncludedPrice($penPrice);
$eraserPriceTaxIncluded = calculateTaxIncludedPrice($eraserPrice);

echo "<p>現在の消費税は {$taxRate} %です。</p><p>鉛筆が {$penPrice} 円で税込 {$penPriceTaxIncluded} 円です。</p>
<p>消しゴムが {$eraserPrice} 円で税込{$eraserPriceTaxIncluded} 円です。</p>";
?>
</body>
</html>
