### Template:Person
<pre>
<table class="wikitable smw">
    <tr>
        <th>Werk</th>
        <th>Editionen</th>
        <th>Datenherkunft</th>
    </tr>
    {{#ask:[[Creator::{{PAGENAME}}]]
    |?=#
    |?Provenance
    |format=template
    |template=WorkQueryOutput
    |link=none
    }}
</table>
</pre>

{{#network:
{{#ask:
[[Creator::{{PAGENAME}}]]
|?=#
|?HasEdition=#
|format=array
|link=none
}}
}}

### Template:WorkQueryOutput
<pre>
<td>[[{{{1}}}]]</td>
<td>
<table class="wikitable smw">
<tr>
<th>Titel</th>
<th>Übersetzer</th>
<th>Editoren</th>
<th>Manuskripte</th>
<th>Drucke</th>
<th>RePrints</th>
</tr>
{{#ask:[[IsEditionOf::{{{1}}}]]
|?=#
|?Translator
|?Editor
|?HadManuscriptSource
|?HasPrint
|?HasPrint.HasReprint
|format=template
|template=EditionQueryOutput
|link=none
}}
</table>
</td>
<td>{{{2}}}</td>
</tr>
</pre>

### Template:EditionQueryOutput
<pre>
<tr>
<td>[[{{{1}}}]]</td>
<td>{{#if:{{{2}}}|{{#arraymap:{{{2}}}|,|x|[[x]]|<br>}}}}</td>
<td>{{#if:{{{3}}}|{{#arraymap:{{{3}}}|,|x|[[x]]|<br>}}}}</td>
<td>{{#if:{{{4}}}|{{#arraymap:{{{4}}}|,|x|{{#ask:[[x]]|?=#|?BibliographicCitation|format=template|template=PrintQueryOutput}}|<br> }} }}</td>
<td>{{#if:{{{5}}}|{{#arraymap:{{{5}}}|,|x|{{#ask:[[x]]|?=#|?BibliographicCitation|format=template|template=PrintQueryOutput}}|<br> }} }}</td>
<td>{{#if:{{{6}}}|{{#arraymap:{{{6}}}|,|x|{{#ask:[[x]]|?=#|?BibliographicCitation|format=template|template=PrintQueryOutput}}|<br> }} }}</td>
</tr>
</pre>

### Template:PrintQueryOutput
<pre>
{{#ifexist: {{{1}}} | [[{{{1}}}|{{{2}}}]] | [[{{{1}}}|Seite existiert nicht]] }}
</pre>