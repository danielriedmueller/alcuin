<?php

namespace MediaWiki\Extension\Alcuin;

use MediaWiki\MediaWikiServices;
use MediaWiki\User\UserIdentity;
use Title;
use WikiPage;

class ArticleSave
{
    /**
     * Add display title attribute to standard edit form.
     */
    public static function prependDisplayTitleInForm(&$formContent, Title $title): void {
        $formContent = sprintf('{{DISPLAYTITLE:%s}}', $title->getText()) . $formContent;
    }

    /**
     * Moves created page with id as title.
     * Redirects to new page.
     */
    public static function movePage(WikiPage $wikiPage, UserIdentity $user): void {
        $title = $wikiPage->getTitle();

        $id = $wikiPage->getId();
        $movePageFactory = MediaWikiServices::getInstance()->getMovePageFactory();
        $newTitle = Title::makeTitle($title->getNamespace(), $title . "_AL" . $id);

        $movePage = $movePageFactory->newMovePage($title, $newTitle);
        $movePage->move($user->getInstanceForUpdate(), null, false);

        self::redirectToPage($newTitle);
    }

    private static function redirectToPage(Title $title): void
    {
        global $wgOut;
        $wgOut->redirect($title->getFullURL());
    }
}