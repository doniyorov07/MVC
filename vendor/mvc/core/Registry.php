<?php



namespace mvc;

class Registry
{
	use MyTrait;

	public static $properties;

	public function setProperty($name, $val)
	{
		self::$properties[$name] = $val;	
	}

	public function getProperty($name)
	{
		if (isset(self::$properties[$name])) {
			return self::$properties[$name];
		}

		return null;
	}

	public function getProperties()
	{
		return self::$properties;
	}
}


?>