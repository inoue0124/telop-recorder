<?php
$path = "progress/".$_FILES["user_id"]["name"];
file_put_contents($path, $_FILES["task_prog"]["name"] ." ".$_FILES["task_name"]["name"]);
?>
