<?php

namespace Skins\Chameleon\Components;

class VerticalRibbon extends Structure
{

    /**
     * Builds the HTML code for the main container
     *
     * @return String the HTML code
     * @throws \MWException
     */
    public function getHtml()
    {
        $ret = $this->indent() . \Html::openElement('div', ['class' => 'vertical-ribbon' . $this->getClassString()]);
        $this->indent(1);
        $ret .= \Html::openElement('div', ['class' => 'vertical-ribbon-inner']);
        $ret .= parent::getHtml();
        $ret .= '</div>';
        $ret .= $this->indent(-1) . '</div>';

        return $ret;
    }
}
