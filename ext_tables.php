<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content Elements: Grids');

Tx_Flux_Core::registerProviderExtensionKey($_EXTKEY, 'Content');