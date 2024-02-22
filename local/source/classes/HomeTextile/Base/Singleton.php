<?php

namespace HomeTextile\Base;

abstract class Singleton
{
	private static array $instances = [];

	protected function __construct() {}

	public static function getInstance(): self
	{
		$className = static::class;
		if (!isset(self::$instances[$className]))
		{
			self::$instances[$className] = new static();
		}
		return self::$instances[$className];
	}

	public function __clone() {}

	public function __wakeup() {}
}