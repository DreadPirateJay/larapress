<?php

return [

	'default' => 'sqlite',

	'connections' => [

		'sqlite' => [
			'driver'    => 'sqlite',
			'database'  => __DIR__.'/../../databasae/local.sqlite',
			'prefix'    => '',
		],
		
	],

];
