<?php

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/vendor/autoload.php';

$transaction = new Transaction(25, 'Transaction 1');

$db = DB::getInstance([]);
