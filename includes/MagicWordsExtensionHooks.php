<?php

namespace MediaWiki\Extension\Alcuin;

use Parser;

class MagicWordsExtensionHooks
{
    public static function onGetMagicVariableIDs( &$variableIDs ) {
        $variableIDs[] = 'sparqlpagename';
    }

    public static function onParserGetVariableValueSwitch( $parser, &$variableCache, $magicWordId, &$ret, $frame ) {
        if ( $magicWordId === 'sparqlpagename' ) {
            $ret = str_replace('-', '-2D', $parser->getTitle()->getBaseTitle());
        }
        // We must return true for two separate reasons:
        // 1. To permit further callbacks to run for this hook.
        //    They might override our value but that's life.
        //    Returning false would prevent these future callbacks from running.
        // 2. At the same time, "true" indicates we found a value.
        //    Returning false would set variable value to null.
        //
        // In other words, true means "we found a value AND other
        // callbacks will run," and false means "we didn't find a value
        // AND abort future callbacks." It's a shame these two meanings
        // are mixed in the same return value.  So as a rule, return
        // true whether we found a value or not.
        return true;
    }
}