<?php

namespace Chernoff\Events\Hooks;

/**
 * Class ShoppingCart
 * @package Chernoff\Events\Hooks
 */
class ShoppingCart extends Hook
{
    const
        AcceptOrder = "AcceptOrder",
        AddonFraud = "AddonFraud",
        AfterFraudCheck = "AfterFraudCheck",
        AfterShoppingCartCheckout = "AfterShoppingCartCheckout",
        CancelOrder = "CancelOrder",
        CartTotalAdjustment = "CartTotalAdjustment",
        DeleteOrder = "DeleteOrder",
        FraudOrder = "FraudOrder",
        OrderAddonPricingOverride = "OrderAddonPricingOverride",
        OrderDomainPricingOverride = "OrderDomainPricingOverride",
        OrderProductPricingOverride = "OrderProductPricingOverride",
        OverrideOrderNumberGeneration = "OverrideOrderNumberGeneration",
        PendingOrder = "PendingOrder",
        PreCalculateCartTotals = "PreCalculateCartTotals",
        PreShoppingCartCheckout = "PreShoppingCartCheckout",
        RunFraudCheck = "RunFraudCheck",
        ShoppingCartCheckoutCompletePage = "ShoppingCartCheckoutCompletePage",
        ShoppingCartValidateDomain = "ShoppingCartValidateDomain",
        ShoppingCartValidateDomainsConfig = "ShoppingCartValidateDomainsConfig",
        ViewOrderDetailsPage = "ViewOrderDetailsPage"
    ;

    /** @var array */
    protected static $expectedReturn = [
        self::AcceptOrder => null,
        self::AddonFraud => null,
        self::AfterFraudCheck => null,
        self::AfterShoppingCartCheckout => null,
        self::CancelOrder => null,
        self::CartTotalAdjustment => "array|null",
        self::DeleteOrder => null,
        self::FraudOrder => null,
        self::OrderAddonPricingOverride => "array|null",
        self::OrderDomainPricingOverride => "array|null",
        self::OrderProductPricingOverride => "array|null",
        self::OverrideOrderNumberGeneration => "array|null",
        self::PendingOrder => null,
        self::PreCalculateCartTotals => null,
        self::PreShoppingCartCheckout => null,
        self::RunFraudCheck => "bool|null",
        self::ShoppingCartCheckoutCompletePage => "string|null",
        self::ShoppingCartValidateDomain => "array|null",
        self::ShoppingCartValidateDomainsConfig => "array|null",
        self::ViewOrderDetailsPage => null,
    ];
}
