<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP partie4exo6</title>
</head>
<body>
  <?php
    for($i = 1; $i <= 100; $i++){
      if($i % 15 == 0){
  ?>
      <p>fizzbuzz</p>
  <?php } elseif($i % 3 == 0){ ?>
      <p>buzz</p>
  <?php } elseif($i % 5 == 0){ ?>
      <p>fizz</p>
  <?php } else{ ?>
      <p><?php  echo $i; }}; ?></p>
</body>
</html>
