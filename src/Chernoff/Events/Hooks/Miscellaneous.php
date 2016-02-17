<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Miscellaneous
 * @package Chernoff\Events\Hooks
 */
class Miscellaneous
{
    const
        AffiliateActivation = "AffiliateActivation",
        AfterConfigOptionsUpgrade = "AfterConfigOptionsUpgrade",
        CCUpdate = "CCUpdate",
        CalcAffiliateCommission = "CalcAffiliateCommission",
        CustomFieldLoad = "CustomFieldLoad",
        CustomFieldSave = "CustomFieldSave",
        EmailPreSend = "EmailPreSend",
        EmailTplMergeFields = "EmailTplMergeFields",
        LinkTracker = "LinkTracker",
        LogActivity = "LogActivity"
    ;
}
