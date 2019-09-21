<?php
$files = scandir('reports', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
echo nl2br(file_get_contents("reports/".$newest_file));

?>