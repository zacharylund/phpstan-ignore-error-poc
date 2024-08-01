<?php

return [
	'parameters' => [
		'ignoreErrors' => [
			[
				'message' => '#^Variable \$foo might not be defined\.$#',
				'paths' => [
					'src/foo.php',
				],
			],
		],
	],
];
