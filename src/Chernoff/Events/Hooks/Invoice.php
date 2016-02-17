<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Invoice
 * @package Chernoff\Events\Hooks
 */
class Invoice
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
}
