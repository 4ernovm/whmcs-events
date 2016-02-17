<?php

namespace Chernoff\Events\Hooks;

/**
 * Class RegistrarModule
 * @package Chernoff\Events\Hooks
 */
class RegistrarModule
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
}
