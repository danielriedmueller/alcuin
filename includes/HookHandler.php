<?php

namespace MediaWiki\Extension\Alcuin;

use MediaWiki\Hook\BeforePageDisplayHook;

class HookHandler implements BeforePageDisplayHook {

    public static function onExtensionLoad(): void {
        global $wgNamespacesToBeSearchedDefault;
        global $wgHiddenPrefs;
        global $egChameleonLayoutFile;
        global $wgShowExceptionDetails;
        global $wgCacheDirectory;
        global $wgMainCacheType;
        global $wgEnableParserCache;
        global $wgCachePages;
        global $wgResourceLoaderMaxage;
        global $wgRestrictDisplayTitle;

        $wgNamespacesToBeSearchedDefault = [
            NS_BAR => true,
            NS_FOO => true
        ];

        $wgHiddenPrefs[] = 'skin';
        $egChameleonLayoutFile= dirname(__DIR__, 1) . '/layouts/standard.xml';
        $wgShowExceptionDetails = true;
        $wgCacheDirectory = false;
        $wgMainCacheType = CACHE_NONE;
        $wgEnableParserCache = false;
        $wgCachePages = false;
        $wgResourceLoaderMaxage = 0;
        $wgRestrictDisplayTitle = false;

        enableSemantics();
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