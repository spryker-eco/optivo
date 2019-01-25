<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Shared\Optivo;

/**
 * Declares global environment configuration keys. Do not use it for other class constants.
 */
class OptivoConstants
{
    public const CONFIGURATION_DEFAULT_MAILING_ID_LIST = 'OPTIVO:CONFIGURATION_DEFAULT_MAILING_ID_LIST';
    public const REQUEST_BASE_URL = 'OPTIVO:REQUEST_BASE_URL';
    public const REQUEST_TIMEOUT = 'OPTIVO:REQUEST_TIMEOUT';
    public const ORDER_LIST_AUTHORIZATION_CODE = 'OPTIVO:ORDER_LIST_AUTHORIZATION_CODE';
    public const CUSTOMER_LIST_AUTHORIZATION_CODE = 'OPTIVO:CUSTOMER_LIST_AUTHORIZATION_CODE';
    public const ORDER_NEW_MAILING_ID = 'OPTIVO:EVENT_ORDER_NEW';
    public const ORDER_SHIPPING_CONFIRMATION_MAILING_ID = 'OPTIVO:EVENT_ORDER_SHIPPING_CONFIRMATION';
    public const ORDER_CANCELLED_MAILING_ID = 'OPTIVO:EVENT_ORDER_CANCELLED';
    public const ORDER_PAYMENT_IS_NOT_RECEIVED_MAILING_ID = 'OPTIVO:EVENT_ORDER_PAYMENT_IS_NOT_RECEIVED';
    public const CUSTOMER_NEWSLETTER_AUTHORIZATION_CODE = 'OPTIVO:CUSTOMER_NEWSLETTER_AUTHORIZATION_CODE';
}
