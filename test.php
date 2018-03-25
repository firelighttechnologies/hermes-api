<?php
die();
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/vendor/autoload.php';
require "key.php";

use Twilio\Rest\Client;


$client = new Client($account_sid, $auth_token);

$fnum = "+twilioNumber";
$tnum = "DestNumber";
$msg = "an Olympian god in Greek religion and mythology, the son of Zeus and the Pleiad Maia, and the second youngest of the Olympian gods (Dionysus being the youngest). Hermes was the emissary and messenger of the gods.";

$messages = $client->messages->create($tnum, array(
        'From' => $fnum,
        'Body' => $msg,
  ));
