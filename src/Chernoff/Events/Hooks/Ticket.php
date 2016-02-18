<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Ticket
 * @package Chernoff\Events\Hooks
 */
class Ticket extends Hook
{
    const
        AdminAreaViewTicketPage = "AdminAreaViewTicketPage",
        SubmitTicketAnswerSuggestions = "SubmitTicketAnswerSuggestions",
        TicketAddNote = "TicketAddNote",
        TicketAdminReply = "TicketAdminReply",
        TicketClose = "TicketClose",
        TicketOpen = "TicketOpen",
        TicketPiping = "TicketPiping",
        TicketStatusChange = "TicketStatusChange",
        TicketUserReply = "TicketUserReply",
        TransliterateTicketText = "TransliterateTicketText"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AdminAreaViewTicketPage => "string|null",
        self::SubmitTicketAnswerSuggestions => "array|null",
        self::TicketAddNote => null,
        self::TicketAdminReply => null,
        self::TicketClose => null,
        self::TicketOpen => null,
        self::TicketPiping => null,
        self::TicketStatusChange => null,
        self::TicketUserReply => null,
        self::TransliterateTicketText => null,
    ];
}
