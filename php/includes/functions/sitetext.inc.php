<?php

function getkey ($key) {
    $OPENSHIFT_DATA_DIR = getenv ("OPENSHIFT_DATA_DIR");
    $OPENSHIFT_DATA_DIR = $OPENSHIFT_DATA_DIR ? $OPENSHIFT_DATA_DIR : SITE_ROOT."templatestrings/";
    $filename = $OPENSHIFT_DATA_DIR . "/keyvals/" . $key;
    if (! file_exists ($filename)) {
        return $key;
    }
    $value = file_get_contents ($filename);
    return $value;
}


