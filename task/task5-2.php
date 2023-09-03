<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task5-2</title>
</head>
<body>
  <?php
  $Weeks = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];

  // $i = 0;
  // echo "<ul>";
  // $j = count($Weeks);
  // while ($i < $j) {
  //   echo "<li>". $Weeks[$i] . "</li>";
  //   $i++;
  // }
  foreach($Weeks as $k){
    echo "<li>".$k."</li>";
  }
  echo "</ul>";

  ?>
</body>
</html>