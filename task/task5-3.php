<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task5-3</title>
</head>
<body>
  <?php
  $products = array(
    array('商品' => '鉛筆', '価格' => '100円'),
    array('商品' => '消しゴム', '価格' => '200円'),
    array('商品' => '定規', '価格' => '300円')
  );
  define('TAX', 10);
  $header = array('商品', '価格', '税込み価格');
  ?>
  <table border="1px">
    <tr>
      <?php foreach ($header as $column) : ?>
        <th>
          <?php echo $column; ?>
        </th>
      <?php endforeach; ?>
    </tr>
    <?php foreach ($products as $product) : ?>
    <tr>
      <?php foreach ($product as $key => $value) : ?>
        <td>
          <?php echo $value; ?>
        </td>
      <?php endforeach; ?>
        <td>
          <?php echo $product['価格'] * (TAX + 100) / 100; ?>円
        </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>