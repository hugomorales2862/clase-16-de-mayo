<?php
function dividir (int $numero1, int $numero2): void{
    echo $numero1/$numero2;
}
// function dividir (int $numero1, int $numero2): float{
//     echo $numero1/$numero2;
// }
try {
    dividir (10,0);
} catch (Exception $excepcion) {
    echo $excepcion->getMessage(); 
}

echo "<br>";
echo "todo funciono correctamente";

?>