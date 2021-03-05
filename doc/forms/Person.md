<pre>
<code>
<noinclude>{{#forminput:form=Person}}</noinclude>
<includeonly>
<div id="wikiPreview" style="display: none; padding-bottom: 25px; margin-bottom: 25px; border-bottom: 1px solid #AAAAAA;"></div>
{{{for template|Person}}}
{| class="formtable"
! Source: 
| {{{field|Source}}}
|-
! SameAs: 
| {{{field|SameAs}}}
|-
! Identifier: 
| {{{field|Identifier}}}
|-
! IsReferencedBy: 
| {{{field|IsReferencedBy}}}
|-
! Lebensereignis: 
| {{{field|Events|holds template}}}
|-
! VariantName: 
| {{{field|VariantName}}}
|-
! Name: 
| {{{field|Name}}}
|-
! Provenance: 
| {{{field|Provenance}}}
|-
! Olb: 
| {{{field|Olb}}}
|-
! EditorOf: 
| {{{field|EditorOf}}}
|-
! Equivalent_URI: 
| {{{field|Equivalent_URI}}}
|-
! Description: 
| {{{field|Description}}}
|-
! Retm2Identifier: 
| {{{field|Retm2Identifier}}}
|-
! Kurzkommentar des Autors: 
| {{{field|AuthorShortComment|input type=textarea}}}
! Kurzkommentar des Autors: 
| {{{field|WorkShortComment|input type=textarea}}}
! Kurzkommentar des Autors: 
| {{{field|EditionShortComment|input type=textarea}}}
|}
{{{end template}}}

{{{for template|BioEvent|multiple|add button text=Lebensereignis hinzufügen|embed in field=Person[Events]}}}
Datenherkunft: {{{field|Provenance|property=Provenance}}}
Datenquelle: {{{field|Source|property=Source}}}
Ort: {{{field|Place|property=Place}}}
Datum: {{{field|Date|property=Date}}}
Typ: {{{field|Type|property=Type}}}
{{{end template}}}

'''Free text:'''

{{{standard input|free text|rows=10}}}


{{{standard input|summary}}}

{{{standard input|minor edit}}} {{{standard input|watch}}}

{{{standard input|save}}} {{{standard input|preview}}} {{{standard input|changes}}} {{{standard input|cancel}}}
</includeonly>
</code>
</pre>