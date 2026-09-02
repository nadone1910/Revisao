<?php
function areaRetangulo($base, $altura) {
if ($base < 0 || $altura < 0) {
   return "Valores inválidos";
} 

return $base * $altura;


}
$resultado1 = areaRetangulo(-20, 40);
$resultado2 = areaRetangulo(10, 5);
$resultado3 = areaRetangulo(5, 15);

echo $resultado1;
echo "\n";
echo $resultado2;
echo "\n";
echo $resultado3;

