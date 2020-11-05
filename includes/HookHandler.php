<?php

namespace MediaWiki\Extension\Alcuin;

use MediaWiki\Hook\BeforePageDisplayHook;

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
}