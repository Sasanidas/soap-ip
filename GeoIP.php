<?php

class GetGeoIP {

    var $IPAddress; //string

}

class GetGeoIPResponse {

    var $GetGeoIPResult; //GeoIP

}

class GeoIP {

    var $ReturnCode; //int
    var $IP; //string
    var $ReturnCodeDetails; //string
    var $CountryName; //string
    var $CountryCode; //string

}

class GetGeoIPContext {
    
}

class GetGeoIPContextResponse {

    var $GetGeoIPContextResult; //GeoIP

}

class GeooIP {

    var $soapClient;
    private static $classmap = array('GetGeoIP' => 'GetGeoIP'
        , 'GetGeoIPResponse' => 'GetGeoIPResponse'
        , 'GeoIP' => 'GeoIP'
        , 'GetGeoIPContext' => 'GetGeoIPContext'
        , 'GetGeoIPContextResponse' => 'GetGeoIPContextResponse'
    );

    function __construct($url = 'http://www.webservicex.net/geoipservice.asmx?WSDL') {
        $this->soapClient = new SoapClient($url, array("classmap" => self::$classmap, "trace" => true, "exceptions" => true));
    }

    function GetGeoIP(GetGeoIP $GetGeoIP) {

        $GetGeoIPResponse = $this->soapClient->GetGeoIP($GetGeoIP);
        return $GetGeoIPResponse;
    }

    function GetGeoIPContext(GetGeoIPContext $GetGeoIPContext) {

        $GetGeoIPContextResponse = $this->soapClient->GetGeoIPContext($GetGeoIPContext);
        return $GetGeoIPContextResponse;
    }

}
?>                                
