<?php 
/**
 * User: Crypta Electrica <crypta@crypta.tech>
 * Date: 05/08/2020
 */

return [
	'text' => [
		'name' => 'SeAT Text',
		'icon' => 'fas fa-pencil-alt',
		'route_segment' => 'text',
		'permission' => 'text.edit',
		'entries' => [
			[
				'name' => 'Configure',
				'icon' => 'fas fa-cogs',
				'route' => 'cryptatext::text.list',
				'permission' => 'text.edit',
			],
			[
                'name' => 'Instructions',
                'icon' => 'fas fa-book-open',
                'route' => 'cryptatext::text.instructions',
                'permission' => 'text.edit',
			],
			[
                'name' => 'About',
                'icon' => 'fas fa-info',
                'route' => 'cryptatext::text.about',
                'permission' => 'text.edit',
            ],
		],
	],
];