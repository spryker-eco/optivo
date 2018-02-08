<?php

namespace SprykerEco\Zed\Optivo\Business\Api\Adapter\Http;

abstract class AbstractHttpAdapter implements HttpAdapterInterface
{
    /**
     * @param string $gatewayUrl
     * @param string $data
     *
     * @return string
     */
    public function sendGetRequest($gatewayUrl, $data)
    {
        $request = $this->buildRequest($gatewayUrl, $data);

        return $this->send($request);
    }

    /**
     * @param string $gatewayUrl
     * @param string $data
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    abstract protected function buildRequest($gatewayUrl, $data);

    /**
     * @param object $request
     *
     * @throws \SprykerEco\Zed\Optivo\Business\Exception\ApiHttpRequestException
     *
     * @return string
     */
    abstract protected function send($request);
}