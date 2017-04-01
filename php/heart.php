<?php
include '../rimap/php/cartodbProxy.php';
$q = "update " .$_POST['table'] . " set loved = loved " .$_POST['op'] . " where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
