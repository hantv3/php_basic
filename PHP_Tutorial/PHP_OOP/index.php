<?php
include "./namespaces.php";

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
    <?php
    $table->message();
    ?>
    <?php
    $row->message();
    ?>
</html>