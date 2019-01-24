<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */
namespace SprykerEco\Zed\Optivo\Business\Mapper\Customer;

use Generated\Shared\Transfer\MailTransfer;
use Generated\Shared\Transfer\OptivoRequestTransfer;

class CustomerMapper extends AbstractCustomerMapper
{
    /**
     * @param \Generated\Shared\Transfer\MailTransfer $mailTransfer
     *
     * @return \Generated\Shared\Transfer\OptivoRequestTransfer
     */
    public function map(MailTransfer $mailTransfer): OptivoRequestTransfer
    {
        $requestTransfer = new OptivoRequestTransfer();

        $requestTransfer->setAuthorizationCode($this->config->getCustomerListAuthCode());
        $requestTransfer->setOperationType($this->config->getOperationTypeSendTransactionEmail());
        $requestTransfer->setPayload($this->getPayload($mailTransfer));

        return $requestTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\MailTransfer $mailTransfer
     *
     * @return array
     */
    protected function getPayload(MailTransfer $mailTransfer): array
    {
        $customerTransfer = $mailTransfer->getCustomer();

        $payload = [
            static::KEY_CUSTOMER_SHOP_LOCALE => $this->getLocale($customerTransfer),
            static::KEY_CUSTOMER_SHOP_URL => $this->config->getHostYves(),
            static::KEY_CUSTOMER_LOGIN_URL => $this->config->getHostYves() . static::URL_LOGIN,
        ];

        if ($customerTransfer !== null) {
            $payload[static::KEY_EMAIL] = $customerTransfer->getEmail();
            $payload[static::KEY_SALUTATION] = $customerTransfer->getSalutation();
            $payload[static::KEY_FIRST_NAME] = $customerTransfer->getFirstName();
            $payload[static::KEY_LAST_NAME] = $customerTransfer->getLastName();
            $payload[static::KEY_SPRYKER_ID] = $customerTransfer->getIdCustomer();
            $payload[static::KEY_CUSTOMER_RESET_LINK] = $customerTransfer->getRestorePasswordLink();
        }

        if ($mailTransfer->getType() !== null) {
            $payload[static::KEY_MAILING_ID] = $this->getMailingId($mailTransfer->getType());
        }

        return $payload;
    }
}
