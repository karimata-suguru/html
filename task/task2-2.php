<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎2-2</title>
  
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
  $a = array('商品','価格','税込み価格','鉛筆','消しゴム','定規','100円','200円','300円');
  define('TAX', 10);
  ?>

<table border=1px>
    <tr>
        <th><?php echo $a[0];?></th>
        <th><?php echo $a[1];?></th>
        <th><?php echo $a[2];?></th>
    </tr>
    <tr>
        <td><?php echo $a[3];?></td>
        <td><?php echo $a[6];?></td>
        <td><?php echo $a[6]*(TAX+100)/100;?>円</td>
    </tr>
    <tr>
        <td><?php echo $a[4];?></td>
        <td><?php echo $a[7];?></td>
        <td><?php echo $a[7]*(TAX+100)/100;?>円</td>
    </tr>
    <tr>
        <td><?php echo $a[5];?></td>
        <td><?php echo $a[8];?></td>
        <td><?php echo $a[8]*(TAX+100)/100;?>円</td>
    </tr>
</table>
</body>
</html>