<?php 
header("Content-Type: text/html");

$n = $_GET["n"];

echo "<ul>";
for($i=0; $i<15; $i++) {
    echo "<li>", $i*$n, "</li>";
}
echo "</ul>";
?>
