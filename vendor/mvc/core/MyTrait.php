<?php



namespace mvc;

trait MyTrait
{

	private static $inctance;

	public static function instance()
	{
		if (self::$instance === null) {
				self::$instance = new self;
		}

		return self::$instance;
	}
}













?>