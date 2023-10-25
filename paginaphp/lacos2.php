<?php
// Sequência de números pares de 0 a 500
echo "Números pares de 0 a 500: ";
echo "<br>";
for ($i = 0; $i <= 500; $i += 2) {
    echo $i . " ";
}
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php
// Sequência de números ímpares de 500 a 0
echo "Números ímpares de 500 a 0: ";
echo "<br>";
for ($i = 500; $i >= 0; $i--) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
