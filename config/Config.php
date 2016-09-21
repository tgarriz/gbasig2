<?php

Class Config {

    static function get($role) {
        $params = array(
            'consulta' => array(
                'dbname' => "geobasig",
                'host' => "192.168.0.11",
                'user' => "consulta",
                'pass' => "consulta",
                'port' => "5432"
            )
        );
        return $params[$role];
    }

}

?>
