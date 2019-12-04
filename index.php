<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP partie4exo6</title>
</head>
<body>
  <p>
    <?php
    for($i = 1; $i <= 100; $i++){
      if($i % 15 == 0){
        echo 'fizzbuzz' . "<br />";
      } elseif($i % 3 == 0){
        echo 'buzz' . "<br />";
      } elseif($i % 5 == 0){
        echo 'fizz' . "<br />";
      } else{
        echo $i . "<br />";
      }
    };
    ?>
  </p>
</body>
</html>
