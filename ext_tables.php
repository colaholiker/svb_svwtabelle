<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    static function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SchachvereinBalingen.SvbSvwtabelle',
            'Viewtabelle',
            'viewtabelle'
        );

    },
);
