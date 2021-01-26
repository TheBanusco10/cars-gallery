<?php

class Client {

    private static $namespace = 'http://localhost/practiceSoap/';

    public function __construct() {
        $params = array('location' => 'http://dwes.infinityfreeapp.com/soap-automoviles/service-automoviles-auth.php',
            'uri' => 'http://dwes.infinityfreeapp.com/soap-automoviles/',
            'trace' => 1);
        $this->instance = new SoapClient(null, $params);

        // set the header
        // https://www.php.net/manual/en/reserved.classes.php
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        // https://www.php.net/manual/en/soapheader.soapheader
        // https://www.php.net/manual/en/soapvar.soapvar.php

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader(self::$namespace, 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));

    }
}
