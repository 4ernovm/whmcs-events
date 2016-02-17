<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Module
 * @package Chernoff\Events\Hooks
 */
class Module
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
}
