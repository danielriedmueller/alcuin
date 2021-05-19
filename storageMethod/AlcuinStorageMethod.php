<?php

class BeerwikiStorageMethod extends StorageMethodAbstract {
    /**
     * @return string
     */

    private $graphNamed = "fuseki";

    public function getQueryReadStringWithTagLang() {
        return <<<EOT
SELECT DISTINCT  ?value
WHERE
        {
            ?subject ?property ?value .
            FILTER ( lang(?value) = ?lang )
        }
EOT;
    }

    /**
     * @return string
     */
    public function getQueryReadStringWithoutTagLang() {
        return <<<EOT
SELECT DISTINCT  ?value
WHERE
        {
            ?subject ?property ?value .
            FILTER ( lang(?value) = "" )
        }
EOT;
    }

    /**
     * @return string
     */
    public function getQueryReadValue() {
        return <<<EOT
SELECT DISTINCT  ?value
WHERE
        {
            ?subject ?property ?value .
        }
EOT;
    }

    /**
     * @return string
     */
    public function getQueryInsertValue() {
        return <<<EOT
INSERT DATA
    {
            ?subject ?property ?value .
    }
EOT;
    }

    /**
     * @return string
     */
    public function getQueryDeleteSubject() {
        return <<<EOT
DELETE
        { ?subject ?property ?value . }
WHERE
        { ?subject ?property ?value . }

EOT;
    }

    /**
     * @param string $url
     * @return string
     */
    public function getQueryLoadData( $url ) {
        return "";
    }

}