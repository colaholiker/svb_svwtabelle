<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SvbSvwtabelle',
            'Viewtabelle',
            [
                \SchachvereinBalingen\SvbSvwtabelle\Controller\viewtabelleController::class => 'view'
            ],
            // non-cacheable actions
            [
                
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					viewtabelle {
						icon = &#039; . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . &#039;Resources/Public/Icons/user_plugin_viewtabelle.svg
						title = LLL:EXT:svb_svwtabelle/Resources/Private/Language/locallang_db.xlf:tx_svb_svwtabelle_domain_model_viewtabelle
						description = LLL:EXT:svb_svwtabelle/Resources/Private/Language/locallang_db.xlf:tx_svb_svwtabelle_domain_model_viewtabelle.description
						tt_content_defValues {
							CType = list
							list_type = svbsvwtabelle_viewtabelle
						}
					}
				}
				show = *
			}
	   }'
	);
    },
   'svb_svwtabelle' 
);
