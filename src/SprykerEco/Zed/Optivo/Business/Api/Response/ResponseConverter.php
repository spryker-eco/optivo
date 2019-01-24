<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */
namespace SprykerEco\Zed\Optivo\Business\Api\Response;

use Generated\Shared\Transfer\OptivoResponseTransfer;
use Psr\Http\Message\ResponseInterface;

class ResponseConverter implements ResponseConverterInterface
{
    public const STATUS_OK = 200;

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return \Generated\Shared\Transfer\OptivoResponseTransfer
     */
    public function convertResponse(ResponseInterface $response): OptivoResponseTransfer
    {
        $responseTransfer = new OptivoResponseTransfer();
        $responseTransfer
            ->setStatus($response->getStatusCode())
            ->setIsSuccessful($response->getStatusCode() === static::STATUS_OK);

        return $responseTransfer;
    }
}
