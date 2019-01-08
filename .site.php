<?php session_start();
/**------------------------------- *
 *
 * Copyright FaerieTree
 * [dragontale j.r.i.b.-w.v.w.v.z.]
 *
 *-------------------------------- */




//------------ PART ONE ----------------------------------------------------//
if (isset($_POST['usr']) && isset($_POST['pw']) || isset($_SESSION['usr'])) {
     // DB-CONNECT
     require_once('./db.inc.php');              //mysqli-obj $mysqli
}
include_once('../.functions.inc.php');            //some functions
include_once('../.functions2i.inc.php');          //some more functions =)

require_once('../.User.class.php');            	//static user-class
if (isset($_SESSION['usr'])) {
    require_once('./HowTo.class.php');              //ENGINE
    $baby = new HowTo($mysqli);                     //nu erblicke die Welt =)
}


//BLOG-ENGINE
require_once('../.Blog.class.php');               //ENGINE
$blog = new Blog(false, './blog');              //nu erblicke die Welt =)











//------------ PART TWO ----------------------------------------------------//
//+++++++PREP+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
getToPost('usr', 'em', 'pw', 'task');                 //GetToPost!
//
if (isset($_POST['task'])) {
    switch($_POST['task']) {

    #login
    case 'login':
        if (isset($_POST['login']) && isset($_POST['pw'])) {
            User::authenticate('accounts');
        }
        break;

    #logout
    case 'logout':
        //Evtl nice feature: session to db!?
        User::logout();
        break;

    #register
    case 'register':
        User::register();
        break;

    case 'validate':
        User::validate($_GET['u'], $_GET['v']);
        break;



    }
}


//+++++++LOAD+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
if (isset($_SESSION['usr'])) {
    User::loadAll();
}
//+++++++PAGE+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
include_once('../.Page.class.php');               //Page-Geruest --Head-->Foot--
$pageId = getIfSet($_GET, 'id');
if (empty($pageId))
    $pageId = getIfSet($_GET, 'id');
if (!empty($pageId))
    $pageId = toFairy($pageId) . ' - ';
$title = $pageId . 'Fitness-Stall Badwerk' ;
$sheets = array('http://ciry.at/fairyclasses.css'
                ,'http://ciry.at/mediacolumn.css'
                ,'./css/ngg_dkret3.css'
                ,'./.fitness-stall.css.php?design='.getIfSet($_SESSION, 'design')
);
$scripts = array(0 => './fitnessstall.js',1 => 'http://ciry.at/fairytale.js');
$titleIcon = './images/favicon.ico';
//random header background:
$pathParts = explode('/', $_SERVER['PHP_SELF']);
unset($pathParts[sizeOf($pathParts) - 1]);/*remove file*/
foreach ($pathParts as $key => $pathPart) {
    $pathParts[$key] = rawurlencode($pathPart);
}
$directory = implode('/', $pathParts);
//abs -> rel: realPath() -- basename(/etc/opt/spacecraft.d) =>spacecraft
//echo 'directory: ' . $directory . '  dirname: ' . dirname(__FILE__);
$style = "#header { background: url(" . getRandomImageLinkFrom(
                                            array(
                                                'gallery/'
                                                , 'images/header/'
                                                /*, ... more directories to choose from*/
                                            )
                                            , dirname(__FILE__)
                                        )
                                 .") repeat-x; }"."\n"
	."#content { text-align: justify; }"."\n";
$page = new Page($title, $titleIcon, $sheets, $scripts, 'xhtml', 'iso-8859-1', "", $style);










//+++++++PAGE+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//

//HEAD
$page->head();
$page->headE(); //BODY-END
//BODY
$page->body();
require('./body.tpl.php');
//FOOT
$page->foot();


$page->footE(); //FOOT-END
$page->bodyE(); //BODY-END


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//



?>

