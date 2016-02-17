<?php

namespace Chernoff\Events\Hooks;

/**
 * Class ShoppingCart
 * @package Chernoff\Events\Hooks
 */
class ShoppingCart
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
}
