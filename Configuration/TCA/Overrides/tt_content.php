<?php

defined('TYPO3') or die;

call_user_func(
	static function()
	{

		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
			'SvbSvwtabelle',
			'Viewtabelle',
			'viewtabelle'
		);

		$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['svbsvwtabelle_viewtabelle'] = 'pi_flexform';
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('svbsvwtabelle_viewtabelle', 'FILE:EXT:svb_svwtabelle/Configuration/FlexForm/flexform_svwtabelle.xml');
	},
);






?>
