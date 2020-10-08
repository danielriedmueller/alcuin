<?php
/**
 * HelloWorld SpecialPage for BoilerPlate extension
 *
 * @file
 * @ingroup Extensions
 */
/******************
 *  variable Extension - this class is an QBox Training extention
 *  Copyright (C) 2010 qbox4u.com <qbox4u@gmail.com>
 *
 *  This program is not free software therefore you can-not redistribute
 *  it and/or modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2 of the
 *  License, or (at your option) any later version.
 *
 *  Please consult and/or request the administrator of qbox4u@gmail.com
 *  to use the information and samples
 *
 *  To copy the data an written autorisation of the developer as stated in
 *  the $wgExtensionCredits is required
 *
 *  You should have received a copy of the GNU General Public License along
 *  with this program; if not, write to the Free Software Foundation, Inc.,
 *  59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *  http://www.gnu.org/copyleft/gpl.html
 *
 *
 *  @ingroup Extensions
 *  @author Jan boer <qbox4u@gmail.com>
 *  @LinkedIn https://www.linkedin.com/in/jan-boer-a24640113
 *  @version 1.0
 *  @link http://QBox4u.com
 *
 */


class SpecialHelloWorld extends SpecialPage {


    public function __construct() {
        parent::__construct( 'HelloWorld' );
    }

    const B_TagTest = <<<QBoxFSP

=Testing the functionality=
{|class="wikitable sortable mw-collapsible mw-collapsed" style="white-space: nowrap;font-size:12px;" width=80%
! TAG !! TAG
|+ ''' CLICK ON EXPAND TO VIEW THE TEST, OR ON COLLAPSE TO HIDE THE TEST'''
|- style="vertical-align: top;"
|
 <nowiki><TAG11 const1=aaa const2=bbbb> Hallo World </TAG11></nowiki>
<TAG11 const1=aaa const2=bbbb> Hallo World </TAG11>
|
 <nowiki>{{#FUNCTION11:Hallo|World}}</nowiki>
{{#FUNCTION11:Hallo|World}}
|}

QBoxFSP;

    /**
     * Show the page to the user
     *
     * @param string $sub The subpage string argument (if any).
     *  [[Special:HelloWorld/subpage]].
     */

    function execute( $par ) {
        global $wgUser,$B_TestPage;

        $output = $this->getOutput();
        $output->setPageTitle( $this->msg( 'boilerplate-helloworld' ) );
        $request = $this->getRequest();
        $this->setHeaders();

        # ...Add the base instructions from mediawiki
        $output->addHelpLink( 'Extension:BoilerPlate' );
        # ...User name
        $a = $wgUser->getName();
        # ...Messages
        $SpecialPageinfo = "Hello user:$a !<br>";
        $SpecialPageinfo .= $this->msg( 'boilerplate-welcome' )->parse().'<br>';
        $output->addWikiText( $SpecialPageinfo );

        $output->addWikiText( " Follow the Training page: [[Create_new_extension]]" );


        $output->addWikiText( self::B_TagTest );

    }

    protected function getGroupName() {
        return 'other';
    }
}