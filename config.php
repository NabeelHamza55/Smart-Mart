<?php 

require 'vendor/autoload.php';

$public_sKey = 'pk_test_51Ka40mAjcEw0DwAAl722EWBmScAUk7JDfCFizSi0RtsUZyrF4PC8vVpNIoY0v0E263IKqNMPcLHibHgPXuUa63w000cfDgAhNB';
$secret_sKey = 'sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72';


$stripe = new \Stripe\StripeClient('sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72');

$intent = $stripe->paymentIntents->create(
  [
    'amount' => 1099,
    'currency' => 'eur',
    'automatic_payment_methods' => ['enabled' => true],
  ]
);
echo json_encode(array('client_secret' => $intent->client_secret));
