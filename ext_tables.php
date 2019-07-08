<?php
defined('TYPO3_MODE') or die();

(function () {
    if (TYPO3_MODE === 'BE') {
        /**
         * Registers a Backend Module
         */
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Pixelant.pxa_social_feed',
            'tools',     // Make module a submodule of 'tools'
            'pxasocialfeed',    // Submodule key
            '',                        // Position
            [
                'Administration' => 'index, editToken, updateToken, deleteToken, editConfiguration, updateConfiguration, deleteConfiguration, addFacebookAccessToken'
            ],
            [
                'access' => 'user,group',
                'icon' => 'EXT:pxa_social_feed/Resources/Public/Icons/BE/feed.svg',
                'labels' => 'LLL:EXT:pxa_social_feed/Resources/Private/Language/locallang_be.xlf'
            ]
        );
    }

    foreach (['feed', 'token', 'configuration'] as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
            'tx_pxasocialfeed_domain_model_' . $table
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_pxasocialfeed_domain_model_' . $table,
            sprintf(
                'EXT:%s/Resources/Private/Language/locallang_csh_tx_pxasocialfeed_domain_model_%s.xlf',
                'pxa_social_feed',
                $table
            )
        );
    }
})();
