<?php

/**
 * @param $charge
 * This is the charge object which will be handed to Stripe_Charge::create().
 * You can modify it according to the docs here: https://stripe.com/docs/api/php#charges
 *
 * @param $transaction
 * This is the transaction created by commerce_payment_transaction_new which will be saved by commerce_payment_transaction_save
 *
 */
function hook_commerce_stripe_transaction_alter($charge, $transaction) {
// No example.
}