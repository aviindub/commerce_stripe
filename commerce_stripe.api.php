<?php
/**
 *
 * @param $charge
 * This is the charge object which will be handed to Stripe_Charge::create().
 * You can modify it according to the docs here: https://stripe.com/docs/api/php#charges
 * @param $context is an array of variables, the context of the charge, including:
 *  $context['dest'] will be handed as the second paramenter to Stripe_Charge::create()
 *  $context['transaction'] is the transation object being created, for reference.
 *  $context['payment_method'] is the enabled payment method, included for reference.
 *
 */
function hook_commerce_stripe_charge_alter(&$charge, &$transaction) {
// No example.
}

/**
 *
 * Modify the transaction before it's passed to commerce_payment_transaction_save.
 * @param $transaction The transaction object to be modified.
 * @param $response The response object from Stripe, for reference.
 */
function hook_commerce_stripe_transaction_alter(&$transaction, $response) {
// No example.
}