<?php

namespace Webdeveloperguy\DhlExpressShippingExportPlugin\Api;

interface SoapClientInterface
{
    public function createShipment(array $requestData, $wsdl);
}