<?php

Class Categories {

    static function get($categ) {
        $categories = array(
            "Geodesia" => "FISC.PARCELARIA",
            "Carto" => "CARTOGRÁFICO",
            "Topo" => "TOPOGRÁFICO",
            "Dais" => "CUB.HIDRÍCA SUPERFICIAL",
            "IGN" => "IGN",
            "Foto" => "FOTOGRAMÉTRICO"
        );
                
        return $categories[$categ];
    }

}

?>
