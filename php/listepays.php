<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'listepays.txt';
echo file_get_contents($fichier);

$fichier = fopen("listepays.php", "r");
$lines = array();

while(!feof($fichier)) {
    $line = fgets($fichier);
    $lines[] = $line;
}

echo "<ul>";
foreach($lines as $line) {
    echo "<li>" . htmlspecialchars($line) . "<li>";
}
echo "</ul>";

?>

