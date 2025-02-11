<?php

namespace App;

trait LatteTrait
{
	public function makeLatte(): void
	{
		echo static::class . ' is making latte. <br />';
	}
}