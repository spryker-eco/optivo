<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */
namespace SprykerEco\Zed\Optivo\Business\Api\Request;

use Generated\Shared\Transfer\OptivoRequestTransfer;
use SprykerEco\Zed\Optivo\OptivoConfig;

abstract class AbstractRequestUrlBuilder implements RequestUrlBuilderInterface
{
    /**
     * @var \SprykerEco\Zed\Optivo\OptivoConfig
     */
    protected $config;

    /**
     * @param \SprykerEco\Zed\Optivo\OptivoConfig $config
     */
    public function __construct(OptivoConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param \Generated\Shared\Transfer\OptivoRequestTransfer $optivoRequestTransfer
     *
     * @return string
     */
    abstract public function buildUrl(OptivoRequestTransfer $optivoRequestTransfer): string;
}
