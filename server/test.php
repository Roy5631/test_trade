<?php
    $fullPath = "/usr/bin/python3.6 ./cgi-bin/call_from_php.py abcd";
    exec( $fullPath, $output);
    var_dump($output[0]);
?>
