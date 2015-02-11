<?php

	return Affinity\Config::create([
		'connections' => [
			'default' => [
				'adapter'    => NULL,
				'dsn'        => NULL,
				'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
				'user'       => $app->getEnvironment('DEFAULT_DB_USER', NULL),
				'password'   => $app->getEnvironment('DEFAULT_DB_PASS', NULL),
				'attributes' => [],
			]
		]
	]);
