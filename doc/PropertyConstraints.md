### LocalSettings.php
<pre>
<code>
$wgGroupPermissions['admin']['smw-schemaedit'] = true;
</code>
</pre>


### smw/schema:Constraint:PersonName
<pre>
<code>
{
    "type": "PROPERTY_CONSTRAINT_SCHEMA",
    "constraints": {
        "allowed_namespaces": [
            "NS_USER"
        ]
    },
    "tags": [
        "property constraint"
    ]
}
</code>
</pre>

### Property:PersonName
<pre>
<code>
[[Has type::Text]]
[[Constraint schema::Constraint:PersonName]]
</code>
</pre>

