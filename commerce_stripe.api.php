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
function hook_commerce_stripe_transaction_alter(&$charge, &$transaction) {
// No example.
}