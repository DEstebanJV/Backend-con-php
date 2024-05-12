<?php 
/* Uso de break y continue */

$tiendaDeCafes = [
    "Americano" => 20,
    "recalentado" => 5,
    "late" => 30, 
    "mocca" => 15, 
];

//break

foreach ($tiendaDeCafes as $nombres => $precios) {  
    echo "Cafe seleccionado $nombres cuesta \$$precios <br>";
    if ($nombres == "late"){
        echo "Deseo seleccionar  late";
        break;
    }
}
echo "<br> <br>";

//continue

foreach ($tiendaDeCafes as $nombres => $precios) {  
    if ($nombres == "recalentado"):
        echo "El cafe $nombres  no lo deseo comprar  <br>";
        continue;
    endif;
    echo "Cafe seleccionado $nombres cuesta \$$precios Deseo comprarlo <br>";
    
}

?>