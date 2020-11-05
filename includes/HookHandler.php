<?php

namespace MediaWiki\Extension\Alcuin;

use MediaWiki\Hook\BeforePageDisplayHook;
use MediaWiki\MediaWikiServices;
use Title;
use WikiPage;

class HookHandler implements BeforePageDisplayHook {

    public static function onExtensionLoad(): void {
      $alcuin = new Alcuin();
      $alcuin->init();
    }

    /**
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
     * @param \OutputPage $out
     * @param \Skin $skin
     */
    public function onBeforePageDisplay( $out, $skin ): void {
        if ($out->getPageTitle() === "Main Page") {
            $out->addWikiTextAsInterface(
                '{{#forminput:form=|size=|default value=|button text=|query string=|autocomplete on category=|autocomplete on namespace=|placeholder=|namespace}}'
            );
        }
        $out->addModules( 'ext.alcuin' );
    }

    public function onSkinBuildSidebar($skin, &$bar): void {
        Navigation::enrichSidebarNavigation($bar);
    }

    /**
     * Occurs after the save page request has been processed.
     *
     * @param WikiPage $wikiPage
     * @param User $user
     * @param Content $content
     * @param string $summary
     * @param bool $isMinor
     * @param null $isWatch Unused
     * @param null $section Unused
     * @param int $flags
     * @param Revision|null $revision
     * @param Status $status
     * @param int|false $originalRevId
     * @param int $undidRevId
     *
     * @return boolean
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/PageContentSaveComplete
     */
    public static function onPageContentSaveComplete(WikiPage $wikiPage, $user, $content, $summary, $isMinor, $isWatch, $section, $flags, $revision, $status, $originalRevId, $undidRevId)
    {
        $title = $wikiPage->getTitle();
        $id = $wikiPage->getId();
        $movePageFactory = MediaWikiServices::getInstance()->getMovePageFactory();
        $newPage = Title::makeTitle($title->getNamespace(), "Q" . $id);
        $movePage = $movePageFactory->newMovePage( $title, $newPage );
        $movePage->move($user);

        return true;
    }
}