<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ElmarHinz.' . $extKey,
            'Faq',
            [
                'FAQ' => 'list'
            ],
            // non-cacheable actions
            [
                'FAQ' => ''
            ]
        );

    },
    $_EXTKEY
);
