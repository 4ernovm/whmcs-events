<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Cron
 * @package Chernoff\Events\Hooks
 */
class Cron
{
    const
        AfterCronJob = "AfterCronJob",
        DailyCronJob = "DailyCronJob",
        DailyCronJobPreEmail = "DailyCronJobPreEmail",
        PreCronJob = "PreCronJob"
    ;
}
