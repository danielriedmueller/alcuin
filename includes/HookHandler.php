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
}