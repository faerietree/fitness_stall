<?php
/**********************************
 | MENU
 | FileShark - Konfigurationsdatei
 |
 **********************************/



//------- EINSTELLUNGEN ----------------------------------------------------//
#FORSCHER
$dozent = $wissenschaftler = 'J.R. Balzer';
$email  = 'development&lt;AT&gt;dragontale.de';
$tel    = '+49 (0)931 -[no phone]';
$fax    = '+49 (0)931 -[no fax]';

#SEITE
$ownSheets  = array('css/additionalclasses.css','css/seasharkstyle.css');
$ownScripts = array('js/func.js');
$charset = 'iso-8859-1';

#STARTSEITE
$startEN = 'home.php';
$startDE = 'home.php';

#YOUR CHAIR
$lehrstuhl  = 'Lehrstuhl II';
$lehrstuhlHomepage = 'http://www2.mathematik.uni-wuerzburg.de/';
$chair      = 'Chair II';
$chairHomepage = 'http://www2.mathematik.uni-wuerzburg.de/?lang=en';





//MENU -----------
#AUSNAHMEN
$e = array(
    'index.php',
    'db.inc.php',
    'fileshark.cfg.php',
    'dynamicmenu.config.php',
	'dynamicmenu.cfg.php',
    'Archive',
    'archive',
    'impressum.html',
    'sonstiges.html',
    'other_information.html',
    'FileShark.class.php',
    'DynamicMenu.class.php',
    'error.php',
    'error404.php',
    'body.tpl.php',
    'top.tpl.php',
    'bottom.tpl.php',
    'foot.tpl.php'
    ,'conf.n'
    ,'pfly'
    
    
    

);
#ELEMENTE ein/aus                      --//to disable set to FALSE:
$impressum = true;
$quicknav = true;
$quicklinks = false;
$ownquicklinks = false;
$ownquickhtml = '<ul class="csc-menu csc-menu-1">'//simply copy next line:
        .'<li>'/*.extlink('Beispiel', 'http://beispiel.de/', false, true)*/.'</li>'

        .'</ul>';


#DYNAMIC MENU
$recursive  = false;
$shortIDs   = true;
$end        = false;
$notEnd     = array('js', 'css');
$endMode    = 'l';
$path       = './';
$type       = 'filesget'; # {all|files|dir}get bedeutet, MenuMethod = phpInclude

#EVOLVED DYNAMIC MENU
$evolved = true;
$orderBy = 'order';
$orderMode = 'asc';
$homeAlwaysAtTop = true;
$menuMap = array('Home', 'Seashark');  #Test
$translate = true;
//um 1click-language-switch unabhängig zu machen, nachfolgende Zeile entkommentieren
#$translate = array('en_file'=>'de_file','english'=>'englisch','german'=>'deutsch');




#WEITERE MENU-EINTRAGE (statisch, d.h. z.B. www.google.com)
$staticEntries = array('Anmeldeformular'=>'./.anmeldeformular.pdf');
if (isset($language) && $language == 'en') {
    $staticEntries = array('Mathematics Chair II'=>'http://www2.mathematik.uni-wuerzburg.de/');
}








#FOOTER HTML
$footer = true;
$footerText = 'Dynamic Menu';
$footerUrl = 'http://www2.mathematik.uni-wuerzburg.de/~balzer/seashark/?id=dynamic_menu';
$footerClasses = '';
$dynMenuContact = 'contact jan.balzer@stud-mail.uni-wuerzburg.de for Dynamic Menu';
$footerHTML = '<a href="'.$footerUrl.'" class="'.$footerClasses.'"'
              .' title="'.$dynMenuContact.'">'.$footerText.'</a>';















/*------- NUR UEBERSCHREIBEN, FALLS z.B. anderer Titel GEWUENSCHT ----------*
 |                                                                          |
 | Entkommentieren, falls gewuenscht                                        |
 | => Dazu einfach das '#' am Anfang der Zeile entfernen.                   |
 *--------------------------------------------------------------------------*/
$title = $wissenschaftler;
#$title = '<Your title>';

#$impressumUrl = '?id=impressum.html';  #default
//Bei $hrefImpressum='?id=impressum.html' gibt's English(en)& Deutsch(de-Ordner)


//SET START IF ONLY ONE IS SET
$start = false;
if (!empty($startEN) && !$startDE) {
    $start = $startEN;
}
else if (!empty($startDE) && !$startEN) {
    $start = $startDE;
}



//handle menu map and translate seperately or not
if (isset($menuMap)
    && (!isset($translate) || !empty($translate) || $translate === true)) {
    $translate = $menuMap;
}





//------- VALIDATION-TESTs -------------------------------------------------//

if (!is_bool($impressum)) {
    $impressum = false;                         #only {true|false} is possible
}







?>

