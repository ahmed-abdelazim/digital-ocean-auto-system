<?php
include "config.php";
$id = $droplets[1]->id;
$destroyed = $droplet->delete($id);
print_r($destroyed);
$created = $droplet->create('Python', 'fra1', 's-1vcpu-1gb', $imgid);
if (!empty($created)){
    echo "Server being created";
}
else {
    echo "error";
}
print_r($created);
?>