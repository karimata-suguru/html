<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題4-2-2</title>
</head>
<body>
<?php
  $month = mt_rand(1,12);
  if ($month >= 3 && $month<= 5) {
  $season = '春';
  }elseif($month >= 6 && $month<= 8){
   $season = '夏';
  }elseif($month >= 9 && $month<= 11){
   $season = '秋';
  }else{
   $season = '冬';
  }
?>
<h1>
  <?php echo $month;?>月は<?php echo $season;?>の季節です。
</h1>
</body>
</html>