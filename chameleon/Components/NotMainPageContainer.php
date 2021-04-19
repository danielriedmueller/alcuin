<?php

namespace Skins\Chameleon\Components;

class NotMainPageContainer extends Structure
{

    /**
     * Builds the HTML code for the main container
     *
     * @return String the HTML code
     * @throws \MWException
     */
    public function getHtml()
    {
        /** Hide content for Main_Page */
        if ($this->getSkinTemplate()->get('thispage') === 'Hauptseite') {
            return "";
        }

        return parent::getHtml();
    }
}
