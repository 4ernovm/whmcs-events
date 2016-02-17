<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Addon
 * @package Chernoff\Events\Hooks
 */
class Addon
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
}
