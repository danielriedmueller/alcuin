<?php

namespace MediaWiki\Extension\Alcuin;

class Alcuin
{
    public function init()
    {
        global $wgNamespacesToBeSearchedDefault;
        $wgNamespacesToBeSearchedDefault = [NS_ALC => true];
        $smwgNamespacesWithSemanticLinks[NS_ALC] = true;
    }
}