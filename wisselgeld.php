<?php
$getal = ValidateInput($argv[1]);
$wisselgeld = array(500, 200, 100, 50, 20, 10 , 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01);
foreach ($wisselgeld as $value)
{
  $rest  = FloorNumber($getal / $value);
  if ($rest >= 1)
  {
    $getal = $getal - ($value * $rest);
    if ($value >= 1)
    {
      echo "$rest x $value euro\n";
    }
    else
    {
      echo "$rest x $value cent\n";
    }
  }
}
function FloorNumber($number)
{
  return floor($number);
}
function ValidateInput($value)
{
  if (!is_numeric($value))
  {
    echo "geen getal";
    exit();
  }
  else
  {
    return $value;
  }
}
 ?>
