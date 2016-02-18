<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Output
 * @package Chernoff\Events\Hooks
 */
class Output extends Hook
{
    const
        AdminAreaFooterOutput = "AdminAreaFooterOutput",
        AdminAreaHeadOutput = "AdminAreaHeadOutput",
        AdminAreaHeaderOutput = "AdminAreaHeaderOutput",
        AdminInvoicesControlsOutput = "AdminInvoicesControlsOutput",
        ClientAreaDomainDetailsOutput = "ClientAreaDomainDetailsOutput",
        ClientAreaFooterOutput = "ClientAreaFooterOutput",
        ClientAreaHeadOutput = "ClientAreaHeadOutput",
        ClientAreaHeaderOutput = "ClientAreaHeaderOutput",
        ClientAreaProductDetailsOutput = "ClientAreaProductDetailsOutput",
        AdminAreaPage = "AdminAreaPage",
        AdminHomepage = "AdminHomepage"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminAreaFooterOutput => "string|null",
        self::AdminAreaHeadOutput => "string|null",
        self::AdminAreaHeaderOutput => "string|null",
        self::AdminInvoicesControlsOutput => "string|null",
        self::ClientAreaDomainDetailsOutput => null,
        self::ClientAreaFooterOutput => "string|null",
        self::ClientAreaHeadOutput => "string|null",
        self::ClientAreaHeaderOutput => "string|null",
        self::ClientAreaProductDetailsOutput => "string|null",
        self::AdminAreaPage => "string|null",
        self::AdminHomepage => "string|null",
    ];
}
