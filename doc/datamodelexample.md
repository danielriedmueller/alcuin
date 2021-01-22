# 4 Hauptinstanzen
- Orginalwerk
- Orginalautor (mehrere) 
- Edition (mehrere)
- Editor (mehrere)

# Datentyp: Verbund
Beispiel Event
<pre>
<code>
[[Has type::Record]]
[[Has fields::Event:description;Event:date;Event:order]]
</code>
</pre>

# Vorlage
### Beispiel Person
<pre>
<code>
<noinclude>
This is the "Person" template.
It should be called in the following format:
<pre>
{{Person
|identifier=
|event=
|name=
}}
</pre>
Edit the page to see the template text.
</noinclude><includeonly>{| class="wikitable"
! Identifizierung
| {{{identifier|}}}
|-
! Event
| [[Event::{{{event|}}}]]
|-
! Name
| [[Foaf:name::{{{name|}}}]]
|}
</includeonly>
</code>
</pre>

### WorkListQuery
<code>
{{#ask:
 [[Maker::{{{1}}}]] | ?AlternateTitle | ?Date | ?Status | ?Availability | ?PartOf
}}
</code>

### TranscludedPageView
<code>
{{:{{{1}}}}}
</code>

### TranscludedWorkView
<code>
<ul>
{{#if:{{{Title}}}|<li>Titel: [[{{{Title}}}]]</li>|}} {{#if:{{{Date}}}|<li>Datum: {{{Date}}}</li>|}}
    {{#if:{{{Created}}}|<li>Erstellt am: {{{Created}}}</li>|}} {{#if:{{{Status}}}|<li>Status: {{{Status}}}</li>|}}
    {{#if:{{{Description}}}|<li>Beschreibung: {{{Description}}}</li>|}} {{#if:{{{Type}}}|<li>Typ: {{{Type}}}</li>|foo}}
    {{#if:{{{Availability}}}|<li>Verfügbarkeit: {{{Availability}}}</li>|}}
    {{#if:{{{IsReferencedBy}}}|<li>Referenziert durch: {{{IsReferencedBy}}}</li>|}}
    {{#if:{{{PartOf}}}|<li>Teil von: {{{PartOf}}}</li>|}}
    {{#if:{{{Incipit}}}|<li>Incipit: {{{Incipit}}}</li>|}}
</ul>

</code>


# Formular
Beispiel Person
<pre>
<code>
<noinclude>
This is the "Person" form.
To create a page with this form, enter the page name below;
if a page with that name already exists, you will be sent to a form to edit that page.

{{#forminput:form=Person}}

</noinclude><includeonly>
<div id="wikiPreview" style="display: none; padding-bottom: 25px; margin-bottom: 25px; border-bottom: 1px solid #AAAAAA;"></div>
{{{for template|Person}}}
{| class="formtable"
! Identifier: 
| {{{field|identifier}}}
|-
! Event: 
| {{{field|event}}}
|-
! Name: 
| {{{field|name}}}
|}
{{{end template}}}

'''Free text:'''

{{{standard input|free text|rows=10}}}


{{{standard input|summary}}}

{{{standard input|minor edit}}} {{{standard input|watch}}}

{{{standard input|save}}} {{{standard input|preview}}} {{{standard input|changes}}} {{{standard input|cancel}}}
</includeonly>

</code>
</pre>