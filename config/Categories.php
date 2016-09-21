<?php

Class Categories {

    static function get($categ) {
        $categories = array(
            "Geodesia" => "GEODESIA E IMG.SATELITALES",
            "Carto" => "CARTOGRÁFICO",
            "Topo" => "TOPOGRÁFICO",
            "Dais" => "CUB. HIDRÍCA SUPERFICIAL",
            "IGN" => "IGN",
            "Foto" => "FOTOGRAMÉTRICO"
        );
                
        return $categories[$categ];
    }

}

?>
