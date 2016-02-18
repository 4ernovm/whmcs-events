<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Authentication
 * @package Chernoff\Events\Hooks
 */
class Authentication extends Hook
{
    const
        AdminLogout = "AdminLogout",
        ClientLogin = "ClientLogin",
        ClientLoginShare = "ClientLoginShare",
        ClientLogout = "ClientLogout"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminLogout => null,
        self::ClientLogin => null,
        self::ClientLoginShare => "bool|array",
        self::ClientLogout => null,
    ];
}
