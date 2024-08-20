<?php
    $raw = '22. 01. 1974';
    $start = DateTime::createFromFormat('d. m. Y', $raw);

    echo "Data de inicio: " .$start->format('Y-m-d'). "\n";
?>