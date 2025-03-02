<?php

declare(strict_types=1);

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);
