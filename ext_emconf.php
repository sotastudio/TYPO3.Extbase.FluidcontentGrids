<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Content: Grid elements',
	'description' => 'A collection of grid elements written for EXT:fluidcontent using ViewHelpers from EXT:vhs',
	'category' => 'misc',
	'version' => '1.0.1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Andy Hausmann',
	'author_email' => 'ah@sota-studio.de',
	'author_company' => 'SOTA Studio',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.1.0-6.2.99',
			'cms' => '',
			'fluidcontent' => '',
			'flux' => '',
			'vhs' => '',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);