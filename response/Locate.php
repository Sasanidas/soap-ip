<?php

include_once 'GeoIP.php';

class Locate {

    //put your code here
    function getIP($form_fields) {
        $ajax = ajax();
        $ip = $form_fields['ip'];
        $geoIp = new GetGeoIP();
        $locat = new GeooIP();
        $geoIp->IPAddress = $ip;
        $result = $locat->GetGeoIP($geoIp);
        $dato = $result->GetGeoIPResult;
        if (is_null($dato->CountryName)) {
            $ajax->fail();
        } else {
            $ajax->editar($dato->IP, $dato->CountryName, $dato->CountryCode);
        }
    }

}
