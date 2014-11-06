<?php
    $file=fopen("../contents/guestbook.txt", "a");
    fwrite($file, $_REQUEST["eintrag"]);
    fclose($file);
?>
