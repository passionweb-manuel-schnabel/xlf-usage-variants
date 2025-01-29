<?php

use Passionweb\XlfUsageVariants\Controller\TranslationController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;


ExtensionUtility::configurePlugin(
    'XlfUsageVariants',
    'XlfInFluid',
    [
        TranslationController::class => 'xlfInFluid'
    ],
    [
        // Non-cached actions
        TranslationController::class => 'xlfInFluid'
    ],
);

ExtensionUtility::configurePlugin(
    'XlfUsageVariants',
    'XlfNonExtbase',
    [
        TranslationController::class => 'xlfNonExtbase'
    ],
    [
        // Non-cached actions
        TranslationController::class => 'xlfNonExtbase'
    ],
);

ExtensionUtility::configurePlugin(
    'XlfUsageVariants',
    'XlfExtbase',
    [
        TranslationController::class => 'xlfExtbase'
    ],
    [
        // Non-cached actions
        TranslationController::class => 'xlfExtbase'
    ],
);

ExtensionUtility::configurePlugin(
    'XlfUsageVariants',
    'XlfInJavaScript',
    [
        TranslationController::class => 'xlfInJavaScript'
    ],
    [
        // Non-cached actions
        TranslationController::class => 'xlfInJavaScript'
    ],
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'xlf_usage_variants',
    'setup',
    '@import "EXT:xlf_usage_variants/Configuration/TypoScript/setup.typoscript"'
);