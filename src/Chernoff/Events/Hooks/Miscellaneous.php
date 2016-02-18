<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Miscellaneous
 * @package Chernoff\Events\Hooks
 */
class Miscellaneous extends Hook
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

    /** @var array */
    protected static $expectedReturn = [
        self::AffiliateActivation => null,
        self::AfterConfigOptionsUpgrade => null,
        self::CCUpdate => null,
        self::CalcAffiliateCommission => null,
        self::CustomFieldLoad => "array|null",
        self::CustomFieldSave => "array|null",
        self::EmailPreSend => "array|null",
        self::EmailTplMergeFields => "array|null",
        self::LinkTracker => null,
        self::LogActivity => null,
    ];
}
