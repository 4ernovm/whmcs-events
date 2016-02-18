<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Domain
 * @package Chernoff\Events\Hooks
 */
class Domain extends Hook
{
    const
        AdminClientDomainsTabFields = "AdminClientDomainsTabFields",
        AdminClientDomainsTabFieldsSave = "AdminClientDomainsTabFieldsSave",
        ClientAreaDomainDetails = "ClientAreaDomainDetails",
        DomainDelete = "DomainDelete",
        DomainEdit = "DomainEdit",
        DomainValidation = "DomainValidation",
        PreDomainRegister = "PreDomainRegister"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminClientDomainsTabFields => "array|null",
        self::AdminClientDomainsTabFieldsSave => null,
        self::ClientAreaDomainDetails => null,
        self::DomainDelete => null,
        self::DomainEdit => null,
        self::DomainValidation => null,
        self::PreDomainRegister => null,
    ];
}
