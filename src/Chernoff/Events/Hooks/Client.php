<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Client
 * @package Chernoff\Events\Hooks
 */
class Client extends Hook
{
    const
        AdminAreaClientSummaryActionLinks = "AdminAreaClientSummaryActionLinks",
        AdminAreaClientSummaryPage = "AdminAreaClientSummaryPage",
        AdminClientFileUpload = "AdminClientFileUpload",
        AdminClientProfileTabFields = "AdminClientProfileTabFields",
        AdminClientProfileTabFieldsSave = "AdminClientProfileTabFieldsSave",
        AfterClientMerge = "AfterClientMerge",
        ClientAlert = "ClientAlert",
        ClientAreaHomepage = "ClientAreaHomepage",
        ClientAreaHomepagePanels = "ClientAreaHomepagePanels",
        ClientAreaNavbars = "ClientAreaNavbars",
        ClientAreaPrimaryNavbar = "ClientAreaPrimaryNavbar",
        ClientAreaPrimarySidebar = "ClientAreaPrimarySidebar",
        ClientAreaProductDetails = "ClientAreaProductDetails",
        ClientAreaRegister = "ClientAreaRegister",
        ClientAreaSecondaryNavbar = "ClientAreaSecondaryNavbar",
        ClientAreaSecondarySidebar = "ClientAreaSecondarySidebar",
        ClientAreaSidebars = "ClientAreaSidebars",
        ClientChangePassword = "ClientChangePassword",
        ClientClose = "ClientClose",
        ClientDelete = "ClientDelete",
        ClientEdit = "ClientEdit",
        PreDeleteClient = "PreDeleteClient"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminAreaClientSummaryActionLinks => "array|null",
        self::AdminAreaClientSummaryPage => "string|null",
        self::AdminClientFileUpload => null,
        self::AdminClientProfileTabFields => "array|null",
        self::AdminClientProfileTabFieldsSave => null,
        self::AfterClientMerge => null,
        self::ClientAlert => "WHMCS\\User\\Alert|null",
        self::ClientAreaHomepage => "string|null",
        self::ClientAreaHomepagePanels => null,
        self::ClientAreaNavbars => null,
        self::ClientAreaPrimaryNavbar => null,
        self::ClientAreaPrimarySidebar => null,
        self::ClientAreaProductDetails => null,
        self::ClientAreaRegister => null,
        self::ClientAreaSecondaryNavbar => null,
        self::ClientAreaSecondarySidebar => null,
        self::ClientAreaSidebars => null,
        self::ClientChangePassword => null,
        self::ClientClose => null,
        self::ClientDelete => null,
        self::ClientEdit => null,
        self::PreDeleteClient => null,
    ];
}
