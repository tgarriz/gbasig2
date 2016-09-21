<?php

function _isset($arr, $path, $default = NULL) {
    if (!is_array($arr))
        return $default;

    $cursor = $arr;
    $keys = explode('.', $path);

    foreach ($keys as $key) {
        if (isset($cursor[$key])) {
            $cursor = $cursor[$key];
        } else {
            return $default;
        }
    }
    return $cursor;
}

?>
