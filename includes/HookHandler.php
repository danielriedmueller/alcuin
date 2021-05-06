<?php

namespace MediaWiki\Extension\Alcuin;

use MediaWiki\Hook\BeforePageDisplayHook;
use Title;
use WikiPage;
use MediaWiki\User\UserIdentity;
use MediaWiki\Revision\RevisionRecord;
use MediaWiki\Storage\EditResult;

class HookHandler implements BeforePageDisplayHook {

    public static function onExtensionLoad(): void {
        // Wird auch jedes mal bei einem API request ausgeführt
        //$alcuin = new Alcuin();
        //$alcuin->init();
    }

    /**
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
     * @param \OutputPage $out
     * @param \Skin $skin
     * @throws \MWException
     */
    public function onBeforePageDisplay( $out, $skin ): void
    {
        $out->addModules( 'ext.alcuin' );
    }

    public function onSkinBuildSidebar($skin, &$bar): void
    {
        Navigation::enrichSidebarNavigation($bar);
    }

    /**
     * Occurs after the save page request has been processed.
     *
     * Change page title to db id with prefix.
     *
     * Applies only if page does not exist yet and is in Alcuin namespace (3000).
     *
     * @return boolean
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/PageContentSaveComplete
     */
    public static function onPageSaveComplete(
        WikiPage $wikiPage,
        UserIdentity $user,
        string $summary,
        int $flags,
        RevisionRecord $revisionRecord,
        EditResult $editResult
    ): bool {
        //Temporarily deactivated
        return true;

        //$alcuinNs = 3000;
        $alcuinNs = 0;
        if ($wikiPage->getTitle()->getNamespace() !== $alcuinNs
            || !$editResult->isNew()) {

            return true;
        }

        ArticleSave::movePage($wikiPage, $user);

        // Necessary for redirect to moved page.
        return false;
    }

    public static function onEditFormPreloadText( &$text, Title $title): bool
    {
        //ArticleSave::prependDisplayTitleInForm($text, $title);

        return true;
    }

    public static function onPageForms__WritePageData($form, Title $title, &$content): void
    {
        if ($title->getArticleID() === 0) {
            //ArticleSave::prependDisplayTitleInForm($content, $title);
        }
    }
}