<?php

namespace MediaWiki\Extension\Alcuin;

class Navigation
{
    public static function enrichSidebarNavigation(&$bar) {
        $bar['navigation'] = [[
            'text'   => 'Alle Seiten',
            'href'   => '/index.php/Spezial:Alle_Seiten',
            'id'     => 'n-pages',
            'active' => ''
        ], [
            'text'   => 'Alle Kategorien',
            'href'   => '/index.php/Spezial:Kategorien',
            'id'     => 'n-categories',
            'active' => ''
        ], [
            'text'   => 'Alle Attribute',
            'href'   => '/index.php/Spezial:Attribute',
            'id'     => 'n-attributes',
            'active' => ''
        ], [
            'text'   => 'Alle Vorlagen',
            'href'   => '/index.php/Spezial:Vorlagen',
            'id'     => 'n-templates',
            'active' => ''
        ], [
            'text'   => 'Alle Formulare',
            'href'   => '/index.php/Spezial:Formulare',
            'id'     => 'n-forms',
            'active' => ''
        ]];
        $bar['create'] = [[
            'text'   => 'Vorlage',
            'href'   => '/index.php/Spezial:Vorlage_erstellen',
            'id'     => 'n-create-template',
            'active' => ''
        ], [
            'text'   => 'Formular',
            'href'   => '/index.php/Spezial:Formular_erstellen',
            'id'     => 'n-create-form',
            'active' => ''
        ], [
            'text'   => 'Attribut',
            'href'   => '/index.php/Spezial:Attribut_erstellen',
            'id'     => 'n-create-attribute',
            'active' => ''
        ]];
    }
}