<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Contact
 * @package Chernoff\Events\Hooks
 */
class Contact extends Hook
{
    const
        ContactAdd = "ContactAdd",
        ContactChangePassword = "ContactChangePassword",
        ContactEdit = "ContactEdit"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::ContactAdd => null,
        self::ContactChangePassword => null,
        self::ContactEdit => null,
    ];
}
