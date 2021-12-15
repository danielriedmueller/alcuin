<?php

namespace MediaWiki\Extension\Alcuin;

class Navigation
{
    public static function enrichSidebarNavigation(&$bar)
    {
        $forms = [
            'Author' => 'Autor',
            'Library' => 'Bibliothek',
            'Dissertation' => 'Dissertation',
            'Printer' => 'Drucker',
            'EditedText' => 'Edierter Text',
            'Editor' => 'Editor',
            'Incunable' => 'Inkunabel',
            'Encyclopedia' => 'Lexikon',
            'Manuscript' => 'Manuskript',
            'Monograph' => 'Monografie',
            'Order' => 'Orden',
            'OperaOmnia' => 'Opera Omnia',
            'Series' => 'Reihe',
            'Collection' => 'Sammelband',
            'InCollection' => 'Sammbelbandbeitrag',
            'Subseries' => 'Unterreihe',
            'Publisher' => 'Verlag',
            'Work' => 'Werk',
            'WorkPart' => 'Werkteil',
            'Journal' => 'Zeitschrift',
            'JournalArticle' => 'Zeitschriftenaufsatz',
        ];

        foreach ($forms as $form => $name) {
            $bar['Formulare'][] = [
                'text' => $name,
                'href' => '/index.php/Spezial:Mit_Formular_bearbeiten/' . $form,
                'target' => '_blank',
                'active' => '',
            ];
        }

        $bar['Durchsuchen'] = [
            [
                'text' => 'Alle Seiten',
                'href' => '/index.php/Special:AllPages',
                'id' => 'n-pages',
                'active' => '',
            ],
            [
                'text' => 'Alle Kategorien',
                'href' => '/index.php/Special:Categories',
                'id' => 'n-categories',
                'active' => '',
            ],
            [
                'text' => 'Alle Attribute',
                'href' => '/index.php/Special:Properties',
                'id' => 'n-attributes',
                'active' => '',
            ],
            [
                'text' => 'Alle Vorlagen',
                'href' => '/index.php/Special:Templates',
                'id' => 'n-templates',
                'active' => '',
            ],
            [
                'text' => 'Alle Formulare',
                'href' => '/index.php/Special:Forms',
                'id' => 'n-templates',
                'active' => '',
            ],
        ];
    }
}
