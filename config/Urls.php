<?php

Class Urls {

    static function get($url) {
        $urls = array(
	    "Geodesia" => "http://geobasig.com.ar/geoserver29/wms?",
            "Desarrollo" => "http://desarrollo.geobasig.com.ar/geoserver29/Geodesia/wms?",
            "IGN" => "http://wms.ign.gob.ar/geoserver/wms?",
            "ARBA" => "http://cartoservices.arba.gov.ar/geoserver/cartoservice/wms?",
            "UrbaSig" => "http://sig.gobierno.gba.gov.ar/geoserver/urbasig/wms?"
        );
        return $urls[$url];
    }

}

?>
