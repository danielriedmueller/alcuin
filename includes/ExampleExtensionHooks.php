<?php

namespace MediaWiki\Extension\Alcuin;

use Parser;

class ExampleExtensionHooks
{
    // Registrieren Sie alle Render-Callbacks mit dem Parser
    public static function onParserFirstCallInit( Parser $parser ) {

        // Erstellen Sie einen Funktions-Hook, der das Zauberwort "example" mit renderExample() verknüpft.
        $parser->setFunctionHook( 'example', [ self::class, 'renderExample' ] );
    }

    // Darstellung der Ausgabe von {{#example:}}.
    public static function renderExample( Parser $parser, $param1 = '', $param2 = '', $param3 = '' ) {

        // Die Eingabeparameter sind Wikitext erweitert mit Vorlagen.
        // Die Ausgabe sollte ebenfalls Wikitext sein.
        $output = "param1 is $param1 and param2 is $param2 and param3 is $param3";

        return $output;
    }
}