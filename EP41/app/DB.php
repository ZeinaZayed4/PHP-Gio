<?php

namespace App;

class DB
{
	public static ?DB $instance = null;
	
	private function __construct(public array $config)
	{
		echo 'Instance created. <br />';
	}
	
	public static function getInstance(array $config): self
	{
		if (self::$instance === null) {
			self::$instance = new DB($config);
		}
		
		return self::$instance;
	}
}