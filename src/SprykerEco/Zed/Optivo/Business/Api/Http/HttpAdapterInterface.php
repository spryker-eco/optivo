<?php

namespace SprykerEco\Zed\Optivo\Business\Api\Http;

interface HttpAdapterInterface
{
    /**
     * @param string $gatewayUrl
     * @param string $data
     *
     * @return string
     */
    public function sendGetRequest($gatewayUrl, $data);
}
