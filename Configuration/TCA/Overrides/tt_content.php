<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::registerPlugin(
    'XlfUsageVariants',
    'XlfInFluid',
    'LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfInFluid',
);

ExtensionUtility::registerPlugin(
    'XlfUsageVariants',
    'XlfNonExtbase',
    'LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfNonExtbase',
);

ExtensionUtility::registerPlugin(
    'XlfUsageVariants',
    'XlfExtbase',
    'LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfExtbase',
);

ExtensionUtility::registerPlugin(
    'XlfUsageVariants',
    'XlfInJavaScript',
    'LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfInJavaScript',
);
