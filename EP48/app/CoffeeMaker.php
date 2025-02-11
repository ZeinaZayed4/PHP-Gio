<?php

namespace App;

class CoffeeMaker
{
	public function makeCoffee(): void
	{
		echo static::class . ' is making coffee. <br/>';
	}
}