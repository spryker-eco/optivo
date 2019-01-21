<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Optivo\Business\Mapper\Order;

use Generated\Shared\Transfer\OptivoRequestTransfer;
use Generated\Shared\Transfer\OrderTransfer;

interface OrderMapperInterface
{
    public const KEY_EMAIL = 'bmRecipientId';
    public const KEY_MAILING_ID = 'bmMailingId';
    public const KEY_SALUTATION = 'salutation';
    public const KEY_FIRSTNAME = 'firstname';
    public const KEY_LASTNAME = 'lastname';
    public const KEY_SPRYKER_ID = 'spryker_id';
    public const KEY_CUSTOMER_SHOP_LOCALE = 'customer_shop_locale';
    public const KEY_CUSTOMER_SHOP_URL = 'customer_shop_url';
    public const KEY_CUSTOMER_LOGIN_URL = 'customer_login_url';
    public const KEY_CUSTOMER_RESET_LINK = 'customer_reset_link';
    public const KEY_LANGUAGE = 'language';
    public const KEY_ORDER_NUMBER = 'order_number';
    public const KEY_ORDER_COMMENT = 'order_comment';
    public const KEY_ORDER_ORDERDATE = 'order_orderdate';
    public const KEY_ORDER_SUBTOTAL = 'order_subtotal';
    public const KEY_ORDER_DISCOUNT = 'order_discount';
    public const KEY_ORDER_TAX = 'order_tax';
    public const KEY_ORDER_GRAND_TOTAL = 'order_grand_total';
    public const KEY_ORDER_TOTAL_DELIVERY_COSTS = 'order_total_delivery_costs';
    public const KEY_ORDER_TOTAL_PAYMENT_COSTS = 'order_total_delivery_costs';
    public const URL_LOGIN = '/login';

    /**
     * @param \Generated\Shared\Transfer\OrderTransfer $transfer
     *
     * @return \Generated\Shared\Transfer\OptivoRequestTransfer
     */
    public function map(OrderTransfer $transfer): OptivoRequestTransfer;
}
