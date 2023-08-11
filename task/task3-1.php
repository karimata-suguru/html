<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPの基礎3-1</title>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
  <?php
  $a = ['商品'=>'鉛筆','価格'=>100];
  $b = ['商品'=>'消しゴム','価格'=>200];
  define('TAX',10);
  ?>
  <table border=1px>
    <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込み価格</th>
        <th>1Dzの価格</th>
    </tr>
    <tr>
        <td><?= $a['商品'];?></td>
        <td><?= $a['価格'];?>円</td>
        <td><?= $a['価格']*(TAX+100)/100;?>円</td>
        <td><?= $a['価格']*(TAX+100)/100*12;?>円</td>
    </tr>
    <tr>
        <td><?= $b['商品'];?></td>
        <td><?= $b['価格'];?>円</td>
        <td><?= $b['価格']*(TAX+100)/100;?>円</td>
        <td><?= $b['価格']*(TAX+100)/100*12;?>円</td>
    </tr>
  </table>
  <?php echo "<p>現在の消費税は".TAX."%です。</p>"?>
  
</body>
</html>