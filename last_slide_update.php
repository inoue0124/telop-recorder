<?php
$path = "progress/".$_FILES["user_id"]["name"]."_last_slide";
file_put_contents($path, $_FILES["last_slide"]["name"]);
?>
