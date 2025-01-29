<?php

namespace Passionweb\XlfUsageVariants\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;

class TranslationController extends AbstractController {

    public function __construct(protected PageRenderer $pageRenderer)
    {
    }

    public function xlfInFluidAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function xlfNonExtbaseAction(): ResponseInterface
    {
        $label = $this->getLanguageService()->sL('LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfNonExtbase');
        $this->view->assign('xlfNonExtbase', $label);
        return $this->htmlResponse();
    }

    private function getLanguageService(): LanguageService
    {
        return $GLOBALS['LANG'];
    }

    public function xlfExtbaseAction(): ResponseInterface
    {
        $label = LocalizationUtility::translate('LLL:EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf:xlfExtbase');
        $this->view->assign('xlfExtbase', $label);
        return $this->htmlResponse();
    }

    public function xlfInJavaScriptAction(): ResponseInterface
    {
        $this->pageRenderer->addInlineLanguageLabelFile('EXT:xlf_usage_variants/Resources/Private/Language/locallang.xlf');
        $this->pageRenderer->addJsFooterFile('EXT:xlf_usage_variants/Resources/Public/JavaScript/xlf.js');
        return $this->htmlResponse();
    }
}