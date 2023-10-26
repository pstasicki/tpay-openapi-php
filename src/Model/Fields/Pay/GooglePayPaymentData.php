<?php

namespace Tpay\OpenApi\Model\Fields\Pay;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class GooglePayPaymentData extends Field
{
    protected $name = __CLASS__;
    protected $type = self::STRING;
}
