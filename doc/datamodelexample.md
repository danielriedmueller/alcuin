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
Beispiel Person
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