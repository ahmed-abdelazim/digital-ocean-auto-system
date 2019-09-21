<?php
include "config.php";
$image = $digitalocean->image();
print_r(end($image->getAll())->name);
echo "<br>";
print_r(end($image->getAll())->id);

?>