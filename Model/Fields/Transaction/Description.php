<?php

namespace tpaySDK\Model\Fields\Transaction;

use tpaySDK\Model\Fields\Field;

class Description extends Field
{
    protected $name = __CLASS__;
    protected $type = self::STRING;
    protected $maxLength = 128;
}
