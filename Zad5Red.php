<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Пощенска банка</title>
  </head>
  <body>
  <h3>Пощенска банка</h3>
<?php 
$nsum=$_POST["nsum"];
$broi=$_POST["broi"];

if($nsum < 100){
  echo "Началната сума трябва да е >= 100";
}else if($broi != "3" && $broi != "6"){
  echo "Периодът трябва да е 3 или 6 месеца";
}else{
  switch ($broi) {
    case '3':
      if ($nsum <= 1000) {
        $per = 1.53;
      }
      else if($nsum <= 3000){
        $per = 2.22;
      }
      else{
        $per = 3.15;
      }
      break;
      case '6':
        if ($nsum <= 1000) {
          $per = 2.54;
        }
        else if($nsum <= 3000){
          $per = 3.33;
        }
        else{
          $per = 4.35;
        }
        break;

  }
  $w = $nsum * $broi * $per / 1200;
$w = round($w, 2);
echo "<p> Лихвата при начална сума " . $nsum . " лева ";
echo "<p> и период от " . $broi . " месеца е ". $w . " лева ";


}

?>

</body>
</html>
