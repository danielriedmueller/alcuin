<pre>
<code>
<noinclude>{{#forminput:form=Work}}</noinclude>
<includeonly>
<div id="wikiPreview" style="display: none; padding-bottom: 25px; margin-bottom: 25px; border-bottom: 1px solid #AAAAAA;"></div>
{{{for template|Work}}}
{| class="formtable"
! Autoren:
| {{{field|Autoren|holds template}}}
|-
! Categories: 
| {{{field|HasWorkPart}}}
|-
! Note: 
| {{{field|Note}}}
|-
! HasEdition: 
| {{{field|HasEdition}}}
|-
! Source: 
| {{{field|Source}}}
|-
! Equivalent_URI: 
| {{{field|Equivalent_URI}}}
|-
! Retm2Identifier: 
| {{{field|Retm2Identifier}}}
|-
! Provenance: 
| {{{field|Provenance}}}
|-
! SameAs: 
| {{{field|SameAs}}}
|-
! Title: 
| {{{field|Title}}}
|-
! Categories: 
| {{{field|Categories}}}
|}
{{{end template}}}

{{{for template|WorkCreatorReference|multiple|add button text=Autor hinzufügen|embed in field=Work[Autoren]}}}
Autor: {{{field|WorkCreator|input type=textarea with autocomplete|existing values only|create new=Person|values from category=Person}}}
Zuschreibung: {{{field|WorkAuthorshipAttribution|input type=dropdown|values=echt,unecht,zweifelhaft}}}
Beweis: {{{field|WorkAuthorshipAttributionEvidence|input type=text with autocomplete|existing values only|create new=WorkAuthorshipAttributionEvidence|property=WorkAuthorshipAttributionEvidence}}}
Zitat: {{{field|Citation|input type=dropdown|values from property=Citation key}}}
{{{end template}}}


'''Free text:'''

{{{standard input|free text|rows=10}}}


{{{standard input|summary}}}

{{{standard input|minor edit}}} {{{standard input|watch}}}

{{{standard input|save}}} {{{standard input|preview}}} {{{standard input|changes}}} {{{standard input|cancel}}}
</includeonly>

</code>
</pre>