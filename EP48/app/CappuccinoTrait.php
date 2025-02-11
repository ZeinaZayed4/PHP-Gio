<?php

namespace App;

trait CappuccinoTrait
{
	public function makeCappuccino(): void
	{
		echo static::class . ' is making cappuccino. <br />';
	}
	
	public function makeLatte(): void
	{
		echo static::class . ' is making latte (cappuccino trait). <br />';
	}
}