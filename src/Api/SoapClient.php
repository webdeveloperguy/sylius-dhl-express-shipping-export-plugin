<?php

namespace Webdeveloperguy\DhlExpressShippingExportPlugin\Api;

final class SoapClient implements SoapClientInterface
{
    public function createShipment(array $requestData, $wsdl)
    {
        /** @var object $soapClient */
        $soapClient = new \SoapClient($wsdl);

        return $soapClient->createShipment($requestData);
    }
}
