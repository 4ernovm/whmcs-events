<?php

namespace Chernoff\Events\Hooks;

/**
 * Class RegistrarModule
 * @package Chernoff\Events\Hooks
 */
class RegistrarModule extends Hook
{
    const
        AfterRegistrarGetContactDetails = "AfterRegistrarGetContactDetails",
        AfterRegistrarGetDNS = "AfterRegistrarGetDNS",
        AfterRegistrarGetEPPCode = "AfterRegistrarGetEPPCode",
        AfterRegistrarGetNameservers = "AfterRegistrarGetNameservers",
        AfterRegistrarRegisterDomain = "AfterRegistrarRegisterDomain",
        AfterRegistrarRegistration = "AfterRegistrarRegistration",
        AfterRegistrarRegistrationFailed = "AfterRegistrarRegistrationFailed",
        AfterRegistrarRenewDomain = "AfterRegistrarRenewDomain",
        AfterRegistrarRenewal = "AfterRegistrarRenewal",
        AfterRegistrarRenewalFailed = "AfterRegistrarRenewalFailed",
        AfterRegistrarRequestDelete = "AfterRegistrarRequestDelete",
        AfterRegistrarSaveContactDetails = "AfterRegistrarSaveContactDetails",
        AfterRegistrarSaveDNS = "AfterRegistrarSaveDNS",
        AfterRegistrarSaveNameservers = "AfterRegistrarSaveNameservers",
        AfterRegistrarTransfer = "AfterRegistrarTransfer",
        AfterRegistrarTransferDomain = "AfterRegistrarTransferDomain",
        AfterRegistrarTransferFailed = "AfterRegistrarTransferFailed",
        PreRegistrarGetContactDetails = "PreRegistrarGetContactDetails",
        PreRegistrarGetDNS = "PreRegistrarGetDNS",
        PreRegistrarGetEPPCode = "PreRegistrarGetEPPCode",
        PreRegistrarGetNameservers = "PreRegistrarGetNameservers",
        PreRegistrarRegisterDomain = "PreRegistrarRegisterDomain",
        PreRegistrarRenewDomain = "PreRegistrarRenewDomain",
        PreRegistrarRequestDelete = "PreRegistrarRequestDelete",
        PreRegistrarSaveContactDetails = "PreRegistrarSaveContactDetails",
        PreRegistrarSaveDNS = "PreRegistrarSaveDNS",
        PreRegistrarSaveNameservers = "PreRegistrarSaveNameservers",
        PreRegistrarTransferDomain = "PreRegistrarTransferDomain"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AfterRegistrarGetContactDetails => null,
        self::AfterRegistrarGetDNS => null,
        self::AfterRegistrarGetEPPCode => null,
        self::AfterRegistrarGetNameservers => null,
        self::AfterRegistrarRegisterDomain => null,
        self::AfterRegistrarRegistration => null,
        self::AfterRegistrarRegistrationFailed => null,
        self::AfterRegistrarRenewDomain => null,
        self::AfterRegistrarRenewal => null,
        self::AfterRegistrarRenewalFailed => null,
        self::AfterRegistrarRequestDelete => null,
        self::AfterRegistrarSaveContactDetails => null,
        self::AfterRegistrarSaveDNS => null,
        self::AfterRegistrarSaveNameservers => null,
        self::AfterRegistrarTransfer => null,
        self::AfterRegistrarTransferDomain => null,
        self::AfterRegistrarTransferFailed => null,
        self::PreRegistrarGetContactDetails => "array|null",
        self::PreRegistrarGetDNS => "array|null",
        self::PreRegistrarGetEPPCode => "array|null",
        self::PreRegistrarGetNameservers => "array|null",
        self::PreRegistrarRegisterDomain => "array|null",
        self::PreRegistrarRenewDomain => "array|null",
        self::PreRegistrarRequestDelete => "array|null",
        self::PreRegistrarSaveContactDetails => "array|null",
        self::PreRegistrarSaveDNS => "array|null",
        self::PreRegistrarSaveNameservers => "array|null",
        self::PreRegistrarTransferDomain => "array|null",
    ];
}
