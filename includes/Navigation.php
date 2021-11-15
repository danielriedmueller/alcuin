<?php

namespace MediaWiki\Extension\Alcuin;

class Navigation
{
    public static function enrichSidebarNavigation(&$bar)
    {
        $bar['navigation'] = [
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
        ];

        //Create Form links
        $forms = [
            'Author' => 'Autor',
            'Book' => 'Buch',
            'Collection' => 'Sammelband',
            'Edition' => 'Edierter Text',
            'Editor' => 'Editor',
            'InCollection' => 'Sammbelbandbeitrag',
            'Incunable' => 'Inkunabel',
            'Journal' => 'Zeitschrift',
            'JournalArticle' => 'Zeitschriftenaufsatz',
            'Library' => 'Bibliothek',
            'LiteratureReference' => 'Literaturverweis',
            'Manuscript' => 'Manuskript',
            'ManuscriptReference' => 'Manuskriptverweis',
            'OperaOmnia' => 'Opera Omnia',
            'Order' => 'Orden',
            'Print' => 'Druck',
            'Printer' => 'Drucker',
            'Publisher' => 'Herausgeber',
            'Series' => 'Reihe',
            'Subseries' => 'Unterreihe',
            'Work' => 'Werk',
            'WorkPart' => 'Werkteil',
        ];

        foreach ($forms as $form => $name) {
            $bar['Formulare'][] = [
                'text' => $name,
                'href' => '/index.php/Spezial:Mit_Formular_bearbeiten/' . $form,
                'target' => 'blank',
                'active' => '',
            ];
        }
    }
}
