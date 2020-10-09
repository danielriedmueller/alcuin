<?php

namespace MediaWiki\Extension\Alcuin;

class HookHandler implements \MediaWiki\Hook\BeforePageDisplayHook {

    /**
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
     * @param \OutputPage $out
     * @param \Skin $skin
     */
    public function onBeforePageDisplay( $out, $skin ) : void {
        $config = $out->getConfig();
        if ( $config->get( 'AlcuinVandalizeEachPage' ) ) {
            $out->addHTML( '<p>Alcuin was here</p>' );
            $out->addModules( 'oojs-ui-core' );
            $out->addModules( 'ext.alcuin' );
        }
    }
}