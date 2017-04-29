<?php
include '../../../cartodbProxy.php';
$q = "update " .$_POST['table'] . " set flag = true where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
