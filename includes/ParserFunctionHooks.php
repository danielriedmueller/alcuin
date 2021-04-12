<?php

namespace MediaWiki\Extension\Alcuin;

use Parser;
use RequestContext;

class ParserFunctionHooks
{
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setFunctionHook( 'hideForAnonymous', [ self::class, 'hideForAnonymous' ] );
    }

    public static function hideForAnonymous( Parser $parser, $param1 = '', $param2 = '' ) {
        $user = RequestContext::getMain()->getUser();
        if (!$user->isLoggedIn()) {
            return empty($param2) ? "" : $param2;
        }

        return $param1;
    }
}