<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Product
 * @package Chernoff\Events\Hooks
 */
class Product extends Hook
{
    const
        AdminProductConfigFields = "AdminProductConfigFields",
        AdminProductConfigFieldsSave = "AdminProductConfigFieldsSave",
        AfterProductUpgrade = "AfterProductUpgrade",
        ProductDelete = "ProductDelete",
        ProductEdit = "ProductEdit",
        ServerAdd = "ServerAdd",
        ServerDelete = "ServerDelete",
        ServerEdit = "ServerEdit"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminProductConfigFields => "array|null",
        self::AdminProductConfigFieldsSave => null,
        self::AfterProductUpgrade => null,
        self::ProductDelete => null,
        self::ProductEdit => null,
        self::ServerAdd => null,
        self::ServerDelete => null,
        self::ServerEdit => null,
    ];
}
