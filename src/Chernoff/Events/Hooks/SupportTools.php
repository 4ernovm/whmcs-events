<?php

namespace Chernoff\Events\Hooks;

/**
 * Class SupportTools
 * @package Chernoff\Events\Hooks
 */
class SupportTools extends Hook
{
    const
        AnnouncementAdd = "AnnouncementAdd",
        AnnouncementEdit = "AnnouncementEdit",
        FileDownload = "FileDownload",
        NetworkIssueAdd = "NetworkIssueAdd",
        NetworkIssueClose = "NetworkIssueClose",
        NetworkIssueDelete = "NetworkIssueDelete",
        NetworkIssueEdit = "NetworkIssueEdit",
        NetworkIssueReopen = "NetworkIssueReopen"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AnnouncementAdd => null,
        self::AnnouncementEdit => null,
        self::FileDownload => null,
        self::NetworkIssueAdd => null,
        self::NetworkIssueClose => null,
        self::NetworkIssueDelete => null,
        self::NetworkIssueEdit => null,
        self::NetworkIssueReopen => null,
    ];
}
