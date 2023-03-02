<?php

$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'listepays.txt';

$tab = file($fichier);
print_r($tab);

foreach ($var as $key => $value) {
    $result = explode(':',$value);
   
 
   echo '<option value= "'.strtolower($result[0]).'">'.$result[1].'</option></br>';
}



?>
