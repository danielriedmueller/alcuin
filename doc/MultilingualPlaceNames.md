### Create Property e.g. Property:Has monolingual text
<pre><code>
[[Has type::Monolingual text]]
</code></pre>

### Define placename with multiple languagues
<pre><code>
{{DISPLAYTITLE:Berlin}}

[[Has monolingual text::Berlin@de]]
[[Has monolingual text::Börlin@en]]
[[Has monolingual text::La Berlin@fr]]

[[Category:Place]]
</code></pre>

### Display single language
<pre><code>
{{#ask:
 [[{{{Place}}}]]
 |?Has monolingual text=Text|+lang=de
 |mainlabel=-
 |headers=hide
}}
</code></pre>

### Display all languages dropdown
<pre><code>
{{#ask:
 [[{{{Place}}}]]
 |?Has monolingual text=Text|+lang=de
 |mainlabel=-
 |headers=hide
}}
</code></pre>