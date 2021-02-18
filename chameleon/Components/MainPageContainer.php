<?php

namespace Skins\Chameleon\Components;

class MainPageContainer extends Structure
{

    /**
     * Builds the HTML code for the main container
     *
     * @return String the HTML code
     * @throws \MWException
     */
    public function getHtml()
    {
        /** Show content for Main_Page */
        if ($this->getSkinTemplate()->get('thispage') !== 'Main_Page') {
            return "";
        }

        return parent::getHtml();
    }
}
