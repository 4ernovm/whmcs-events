<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Service
 * @package Chernoff\Events\Hooks
 */
class Service extends Hook
{
    const
        AdminClientServicesTabFields = "AdminClientServicesTabFields",
        AdminClientServicesTabFieldsSave = "AdminClientServicesTabFieldsSave",
        AdminServiceEdit = "AdminServiceEdit",
        CancellationRequest = "CancellationRequest",
        PreAdminServiceEdit = "PreAdminServiceEdit",
        PreServiceEdit = "PreServiceEdit",
        ServiceDelete = "ServiceDelete",
        ServiceEdit = "ServiceEdit",
        ServiceRecurringCompleted = "ServiceRecurringCompleted"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminClientServicesTabFields => "array|null",
        self::AdminClientServicesTabFieldsSave => null,
        self::AdminServiceEdit => null,
        self::CancellationRequest => null,
        self::PreAdminServiceEdit => null,
        self::PreServiceEdit => null,
        self::ServiceDelete => null,
        self::ServiceEdit => null,
        self::ServiceRecurringCompleted => null,
    ];
}
