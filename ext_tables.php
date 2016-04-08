<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ElmarHinz.' . $extKey,
            'Faq',
            'FAQ'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Simple FAQ');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ehfaq_domain_model_faq', 'EXT:ehfaq/Resources/Private/Language/locallang_csh_tx_ehfaq_domain_model_faq.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ehfaq_domain_model_faq');

    },
    $_EXTKEY
);
