<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Invoice
 * @package Chernoff\Events\Hooks
 */
class Invoice extends Hook
{
    const
        AddInvoiceLateFee = "AddInvoiceLateFee",
        AddInvoicePayment = "AddInvoicePayment",
        AddTransaction = "AddTransaction",
        AdminAreaViewQuotePage = "AdminAreaViewQuotePage",
        AfterInvoicingGenerateInvoiceItems = "AfterInvoicingGenerateInvoiceItems",
        InvoiceCancelled = "InvoiceCancelled",
        InvoiceChangeGateway = "InvoiceChangeGateway",
        InvoiceCreated = "InvoiceCreated",
        InvoiceCreation = "InvoiceCreation",
        InvoiceCreationAdminArea = "InvoiceCreationAdminArea",
        InvoiceCreationPreEmail = "InvoiceCreationPreEmail",
        InvoicePaid = "InvoicePaid",
        InvoicePaidPreEmail = "InvoicePaidPreEmail",
        InvoicePaymentReminder = "InvoicePaymentReminder",
        InvoiceRefunded = "InvoiceRefunded",
        InvoiceSplit = "InvoiceSplit",
        InvoiceUnpaid = "InvoiceUnpaid",
        LogTransaction = "LogTransaction",
        ManualRefund = "ManualRefund",
        PreInvoicingGenerateInvoiceItems = "PreInvoicingGenerateInvoiceItems",
        QuoteCreated = "QuoteCreated",
        QuoteStatusChange = "QuoteStatusChange",
        UpdateInvoiceTotal = "UpdateInvoiceTotal",
        ViewInvoiceDetailsPage = "ViewInvoiceDetailsPage",
        acceptQuote = "acceptQuote"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AddInvoiceLateFee => null,
        self::AddInvoicePayment => null,
        self::AddTransaction => null,
        self::AdminAreaViewQuotePage => "string|null",
        self::AfterInvoicingGenerateInvoiceItems => null,
        self::InvoiceCancelled => null,
        self::InvoiceChangeGateway => null,
        self::InvoiceCreated => null,
        self::InvoiceCreation => null,
        self::InvoiceCreationAdminArea => null,
        self::InvoiceCreationPreEmail => null,
        self::InvoicePaid => null,
        self::InvoicePaidPreEmail => null,
        self::InvoicePaymentReminder => null,
        self::InvoiceRefunded => null,
        self::InvoiceSplit => null,
        self::InvoiceUnpaid => null,
        self::LogTransaction => null,
        self::ManualRefund => null,
        self::PreInvoicingGenerateInvoiceItems => null,
        self::QuoteCreated => null,
        self::QuoteStatusChange => null,
        self::UpdateInvoiceTotal => null,
        self::ViewInvoiceDetailsPage => null,
        self::acceptQuote => null,
    ];
}
