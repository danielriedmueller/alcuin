<?php

namespace MediaWiki\Extension\Alcuin;

class Navigation
{
    public static function enrichSidebarNavigation(&$bar) {
        $bar['navigation'] = [[
            'text'   => 'Alle Seiten',
            'href'   => '/index.php/Special:AllPages',
            'id'     => 'n-pages',
            'active' => ''
        ], [
            'text'   => 'Alle Kategorien',
            'href'   => '/index.php/Special:Categories',
            'id'     => 'n-categories',
            'active' => ''
        ], [
            'text'   => 'Alle Attribute',
            'href'   => '/index.php/Special:Properties',
            'id'     => 'n-attributes',
            'active' => ''
        ], [
            'text'   => 'Alle Vorlagen',
            'href'   => '/index.php/Special:Templates',
            'id'     => 'n-templates',
            'active' => ''
        ], [
            'text'   => 'Alle Formulare',
            'href'   => '/index.php/Special:Forms',
            'id'     => 'n-forms',
            'active' => ''
        ], [
            'text'   => 'Visualisierung / Pagegraph',
            'href'   => '/index.php/Network',
            'id'     => 'n-network',
            'active' => ''
        ]];
        $bar['erstellen'] = [[
            'text'   => 'Vorlage',
            'href'   => '/index.php/Special:CreateTemplate',
            'id'     => 'n-create-template',
            'active' => ''
        ], [
            'text'   => 'Formular',
            'href'   => '/index.php/Special:CreateForm',
            'id'     => 'n-create-form',
            'active' => ''
        ], [
            'text'   => 'Klasse',
            'href'   => '/index.php/Special:CreateClass',
            'id'     => 'n-create-class',
            'active' => ''
        ], [
            'text'   => 'Attribut',
            'href'   => '/index.php/Special:CreateProperty',
            'id'     => 'n-create-attribute',
            'active' => ''
        ]];
    }
}