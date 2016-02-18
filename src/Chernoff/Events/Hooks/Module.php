<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Module
 * @package Chernoff\Events\Hooks
 */
class Module extends Hook
{
    const
        AfterModuleChangePackage = "AfterModuleChangePackage",
        AfterModuleChangePassword = "AfterModuleChangePassword",
        AfterModuleCreate = "AfterModuleCreate",
        AfterModuleSuspend = "AfterModuleSuspend",
        AfterModuleTerminate = "AfterModuleTerminate",
        AfterModuleUnsuspend = "AfterModuleUnsuspend",
        OverrideModuleUsernameGeneration = "OverrideModuleUsernameGeneration",
        PreModuleChangePackage = "PreModuleChangePackage",
        PreModuleChangePassword = "PreModuleChangePassword",
        PreModuleCreate = "PreModuleCreate",
        PreModuleSuspend = "PreModuleSuspend",
        PreModuleTerminate = "PreModuleTerminate",
        PreModuleUnsuspend = "PreModuleUnsuspend"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AfterModuleChangePackage => null,
        self::AfterModuleChangePassword => null,
        self::AfterModuleCreate => null,
        self::AfterModuleSuspend => null,
        self::AfterModuleTerminate => null,
        self::AfterModuleUnsuspend => null,
        self::OverrideModuleUsernameGeneration => "string|null",
        self::PreModuleChangePackage => "array|null",
        self::PreModuleChangePassword => "array|null",
        self::PreModuleCreate => "array|null",
        self::PreModuleSuspend => "array|null",
        self::PreModuleTerminate => "array|null",
        self::PreModuleUnsuspend => "array|null",
    ];
}
