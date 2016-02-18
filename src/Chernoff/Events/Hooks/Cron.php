<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Cron
 * @package Chernoff\Events\Hooks
 */
class Cron extends Hook
{
    const
        AfterCronJob = "AfterCronJob",
        DailyCronJob = "DailyCronJob",
        DailyCronJobPreEmail = "DailyCronJobPreEmail",
        PreCronJob = "PreCronJob"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AfterCronJob => "bool|null",
        self::DailyCronJob => null,
        self::DailyCronJobPreEmail => "bool|null",
        self::PreCronJob => "bool|null",
    ];
}
