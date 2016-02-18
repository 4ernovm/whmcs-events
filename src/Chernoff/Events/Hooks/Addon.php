<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Addon
 * @package Chernoff\Events\Hooks
 */
class Addon extends Hook
{
    const
        AddonActivated = "AddonActivated",
        AddonActivation = "AddonActivation",
        AddonAdd = "AddonAdd",
        AddonCancelled = "AddonCancelled",
        AddonConfig = "AddonConfig",
        AddonConfigSave = "AddonConfigSave",
        AddonDeleted = "AddonDeleted",
        AddonEdit = "AddonEdit",
        AddonSuspended = "AddonSuspended",
        AddonTerminated = "AddonTerminated",
        AddonUnsuspended = "AddonUnsuspended",
        LicensingAddonReissue = "LicensingAddonReissue",
        LicensingAddonVerify = "LicensingAddonVerify"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AddonActivated => null,
        self::AddonActivation => null,
        self::AddonAdd => null,
        self::AddonCancelled => null,
        self::AddonConfig => "array|null",
        self::AddonConfigSave => null,
        self::AddonDeleted => null,
        self::AddonEdit => null,
        self::AddonSuspended => null,
        self::AddonTerminated => null,
        self::AddonUnsuspended => null,
        self::LicensingAddonReissue => null,
        self::LicensingAddonVerify => "array|null",
    ];
}
