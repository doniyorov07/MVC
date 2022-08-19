<?php

namespace mvc;

class App
{

	public static $app;

	public function __contruct()
	{
		$query = trim($_SERVER['QUERY_STRING'], '/');
		session_start();
		self::$app = Registry::instance();
		$this->getParams();

	}


	protected function getParams()
	{
		$params = include CONF.'/params.php';

		if (!empty($params)) {
			foreach ($params as $key => $val) {
				self::$app->setProperty($key, $val);

			}
		}
	}
}


?>