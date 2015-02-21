<?php header('Content-type: text/css'); ?>
/**--------------------------------------**
 * by FairyTale Magic Green Physic engineering for fantasy. dragontale.de
 * Anna Tenzer, Mona Fuhrmann, Marisa Mair, Jan R.I.Balzer-Wein von Zenker und Wegelein.
 * Cascading Style Sheet -- Open source ecology.
 **--------------------------------------**/




@import url("css/style.css");
@import url("css/Sidebar-Left.css");
@import url("css/mobile.css");
/*mozilla developer examples:
@import url("fineprint.css") print;
@import url("bluish.css") projection, tv;
@import 'custom.css';
@import url("chrome://communicator/skin/");
@import "common.css" screen, projection;
@import url('landscape.css') screen and (orientation:landscape);
*/



/* tags */
h1 {
    font-size: 2em;
	text-shadow: 1px 1px rgb(0, 119, 204)/*cornflowerblue*/;
	color: cornflowerblue;
}
h2 {
    margin-bottom: 10px !important;
}
h3 {}
h4 {
    font-size: 1.3em;
	text-shadow: 1px 1px lavender;
}
h3 + div,
h4 + div {}


div.blogentry {
	box-shadow: 0px 0px 5px white;
	background-color: white;
	padding: 10px;
	margin-top: 50px;
}
div.blogentry img {
    cursor: pointer;
}
p.blogentry {
    box-shadow: 0px 0px 5px white;
	background-color: white;
	padding: 10px;
}

div.bloglist {
    position: fixed;
    top: 500px;
    left: .5%;
    font-size: .7em;
	max-width: 19%;
    overflow: hidden;
	text-align: left;
}
div.bloglist a {
    display: block;
}
div.bloglist a:hover {
    text-shadow:15px 5px 4px royalblue;
	opacity: .9;
	filter: alpha(opacity=90);
	
}
div#allCategories {
    position: fixed;
	left: 50%;
	top: 50%;
	width: 100px;
	/*height: 100px;*/
	margin-left: 350px;
	margin-top: 50px;
	overflow: visible;
	font-size: .7em !important;
}
div#allCategories a {
    
}


body {
    /*
    text-align: center;
    font-size: 100%;
    font-family: serif, ms-serif;
    padding: 0;
    margin: 0;
<?php switch ($_GET['design']) {
    case 'sky': ?>
    background-color: #3A7DA2;
<?php break;
    case 'blueGrey':
    case 'silver': ?>
    background-color: #333;
    background-image: url("img/css/gradient_lin_horizon_toBlack.png");
    background-repeat: repeat-y;
    background-position: center;
    */
    /*workaround bottom*/
    /*
    background: #333 -moz-linear-gradient(90deg, #333, lavender) no-repeat;
    background: #333 -webkit-gradient(linear, 0% 100%, 0% 0%, from(#333), to(lavender)) no-repeat;
<?php break;
    default: ?>
    background-color: lavender;
    background-repeat: repeat;
<?php break; } ?>
    */
}
a:visited,
#usrRow a {
    color: royalblue;
}
#usrRow a:visited {
    color: coral;
}
img {
    border: 0 none;
}
legend {
    color: #DDDD99;
    font-size:1.5em;
    font-weight:bold;
}
fieldset ~ fieldset > legend {
    color: #557799;
}
fieldset ~ fieldset ~ fieldset > legend {
    color: #559999;
}
fieldset ~ fieldset ~ fieldset > legend {
    color: #333355;
}

.loginMessage fieldset,
#loginForm fieldset {
    background-image: url("img/css/gradient_lin_verti_blackTo.png");
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#333), to(#555));
    background-image: -moz-linear-gradient(-90deg, #333, #555);
    background-position: center 65%;
    border:1px solid #999;
}
form.registerW fieldset:first-child {
    border:1px solid #444455;
}

label {
    color:#111111;
    font-size:1.2em;
    font-weight:bold;
    text-shadow:1px 1px 3px #BBBBFF;
}
.loginMessage label,
#loginForm label {
    color:#CCCCCC;
    font-weight:bold;
    font-size: inherit;
    text-shadow:1px 1px black;
}
form.profile label,
form.labelGrid label {
    width: 200px;
    display: block;
    float: left;
}
form.labelGrid select {
    width: 157px;
}
form.labelGrid select + select {
    max-width: 49%;
}
form *.formDate select {
    width: 60px;
}
input[type="text"],
input[type="submit"],
input[type="password"] {
    font-size: 1.1em;
    padding: 2px;
    height: 25px;
    width: 150px;
    color: #000;
    font-weight: normal;
    border:1px solid #999999;
}
.registerW input {
    width: 170px;
}
input#plz {
    width: 110px;
}

button {
    border:2px solid #999999;
    height: 28px;
    font-size: 1.1em;
    padding: 2px;
    width: auto;
    color: tan;
    text-align: center;
    vertical-align: middle;
    background-color: lavender;
    background-repeat: repeat;
    background-position: center center;
    /*several designs*/
    <?php if ($_GET['design'] == 'sky') { ?>
    background-image: url("img/css/gradient_lin_horizon_toBlack.png");
    background-image: -moz-linear-gradient(-90deg, #BBC, #333);
    background-image: -webkit-gradient(linear, 0% 120%, 0% 0%, from(#BBC), to(#333));
    <?php } else { ?>
    background-image: url("img/css/gradient_lin_horizon_toBlack.png");
    background-image: -moz-linear-gradient(-90deg, #BBB, #333);
    background-image: -webkit-gradient(linear, 0% 120%, 0% 0%, from(#BBB), to(#333));
    <?php } ?>
    
    
    margin-top:0;
    -webkit-box-shadow: 2px 2px 1px #333, 0px 0px 20px inset;
    -o-box-shadow: 2px 2px 1px #333, 0px 0px 20px inset;
    -moz-box-shadow: 2px 2px 1px #333, 0px 0px 20px inset;
    box-shadow: 2px 2px 1px #333, 0px 0px 20px inset;
}


button:hover {
    position: relative;
    left: +1px;
    cursor: pointer;
    -webkit-box-shadow: 0 0 0 #333, 0px 0px 25px gold inset;
    -o-box-shadow: 0 0 0 #333, 0px 0px 25px gold inset;
    -moz-box-shadow: 0 0 0 #333, 0px 0px 25px gold inset;
    box-shadow: 0 0 0 #333, 0px 0px 25px gold inset;
}

sup {
    font-size: 0.7em;
}

div#inM button {
    text-align: left;
    background-color: transparent;
    padding:10px 12px 10px 0;
    -moz-box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;
    -webkit-box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;
    box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;

    -moz-transition: all 0.75s ease-in-out 0s;
    -webkit-transition: all 0.75s ease-in-out;
    -o-transition: all 0.75s ease-in-out;
    transition: all 0.75s ease-in-out;
}
div#inM button:hover {
    -moz-box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;
    -webkit-box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;
    box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;

}
div#inM a > button > img {
    float: left;
    height: 25px;
}
.curl b {/*overrides fairyclasses setting*/
    padding: 1px;
}
div.ovGoToW ~ form {
    margin: 8px 7px 7px 1px;
    float: right;
}
form.labelGrid textarea {
    width: 95%;
}
/*overview mini-table simulator*/
div.equalCols span {
    display: block;
    width: 25%;
    float: left;
}
div.equalCols > div > div:nth-child(odd),
div.miniTable > div > div:nth-child(odd) {
    background-color: rgba(170,170,250, 0.2);
    filter: alpha(opacity=70);
    opacity: 0.7;
    border: 1px solid #bbc;
}



  
  
  


/* ids */
#globalW {
    /*
    position: relative;
    min-height: 1169px;
    */
}
#globalW/*, #foot*/ {
    /*
    min-width: 1180px;
    width: 1180px/*89%*/;
    margin: auto;
    text-align: left;
    */
}
#globalW {
    /*background-color: lavender;/*#fff*/
    /*
    <?php if ($_GET['design'] == 'sky'
            || $_GET['design'] == 'blueGrey') { ?>
    background-image: -moz-linear-gradient(-90deg, #3A7DA2, lavender);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#3A7DA2), to(lavender));
    background-repeat: repeat-x;
    <?php } else { ?>
    <?php } ?>
    */
}


#message {
    width: 400px;
    background-color: lavender;
    text-align: center;
    
    position: absolute;
    top:    81px;/*116px;*//*-14px;*/
    margin-top: 2%;
    left: 50%;
    margin-left: -200px;
    
    -moz-box-shadow: 0px 0px 14px inset, 0 1px 25px;
    -webkit-box-shadow: 0px 0px 14px inset, 0 1px 25px;
    box-shadow: 0px 0px 14px inset, 0 1px 25px;
    
    -moz-border-radius: 1% 1% 2% 2%;
    -webkit-border-radius: 1% 1% 2% 2%;
    border-radius: 1% 1% 2% 2%;
    
    opacity: 0.8;
    filter: alpha(opacity=80);
    
    border: 1px solid #999999 inset;
    min-height: 28px;
    padding: 7px 5px;
}
#pwMessage {
    width: 350px;
}
 
form#usrRow {
    position: absolute;
    top: -50px;

}
form#usrRow input {
    -moz-border-radius: 15px / 25px;
    -webkit-border-radius: 15px / 25px;
    border-radius: 15px / 25px;
    -moz-box-shadow:0 0 10px inset, 0 0 0px royalblue;
    -webkit-box-shadow:0 0 10px coral inset, 0 0 0px royalblue;
    box-shadow: 0 0 10px inset coral, 0 0 0px royalblue;
    
    color:coral;
    cursor:pointer;
    font-size:0.7em;
    font-weight:bold;
    margin-top: 1px;
 
    -moz-transition: all 0.75s ease-in-out 0s;
    -webkit-transition: all 0.75s ease-in-out;
    -o-transition: all 0.75s ease-in-out;
    transition: all 0.75s ease-in-out;
    background: rgba(55, 55, 55, 0.4);
    background: transparent --gradient(linea r, 0% 0%, 0% 100%, from(#333), to(transparent));
    background: transparent -webkit-gradient(linea r, 0% 0%, 0% 100%, from(#333), to(transparent));
}
form#usrRow input:hover {
    -moz-box-shadow:0 0 19px inset, 0 0 10px royalblue;
    -webkit-box-shadow:0 0 19px coral inset, 0 0 10px royalblue;
    box-shadow: 0 0 19px coral inset, 0 0 10px royalblue;
    
}
form#usrRow span {
    -moz-box-shadow:0 0 10px coral, 0 0 30px coral inset;
    -webkit-box-shadow:0 0 10px coral, 0 0 30px coral inset;
    box-shadow:0 0 10px coral, 0 0 30px coral inset;
    border:1px solid #999999;
    color:coral;
    display:block;
    float:left;
    font-size:0.7em;
    font-weight:bold;
    height: 17px;
    margin-top:2px;
    padding:4px 2px 0;
    -moz-border-radius-bottomleft:10px 20px;
    -moz-border-radius-bottomright:10px 40px;
    -moz-border-radius-topleft:50px 20px;
    -moz-border-radius-topright:10px 20px;
}

#foot {
    width: 100%;
    text-align: center;
}
#quicklinks {
    /*
    font-size: 0.7em;
    margin: 342px auto;
    width: 660px;
    */
    list-style-type: none;
    list-style-image: none;
    list-style-position: outside;

}
#quicklinks li {
    float: left;
    margin: 1px 5px;
}
#quicklinks li a {
    /*
    color: #909090;
    */
}
#quicklinks li a:visited {
    color: rgb(0, 119, 194);
}


#message > h4 {
    margin-top: 2px;
    margin-bottom: 0pt;
    padding-top: 5px;
}

#loginRowW,
div.indexNavW button {
    background-color: transparent;
    padding:10px 12px 10px 0;
    -moz-box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;
    -webkit-box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;
    box-shadow: 0 0 1px greenyellow inset, 0 0 11px wheat;

    -moz-transition: all 0.75s ease-in-out 0s;
    -webkit-transition: all 0.75s ease-in-out;
    -o-transition: all 0.75s ease-in-out;
    transition: all 0.75s ease-in-out;
}
#loginRowW {
    margin-bottom: 40px;
}
#loginRowW:hover,
div.indexNavW button:hover {
    -moz-box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;
    -webkit-box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;
    box-shadow: 0 0 1px greenyellow inset, 0 0 11px gold;

}

input#search {
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    height: 16px;
    margin: 0px 2px;
}








/*classes*/
div.topBG {
    /*
    position: absolute;
    top: 0;
    background-image: url("img/skyblue-black_mainfairynav_withoutlogo.png");
    background-repeat: no-repeat;
    width: 100%;
    height: 242px;
    z-index: 90;
    */
}
div.topW {
    /*
    position: absolute;
    top: 0;
    width: 100%;
    height: 242px;
    z-index: 1001;
    */
}
div.footBG {
    /*
    position: absolute;
    bottom: 0;
    background-image: url("img/footer_withbirds.png");
    background-repeat: no-repeat;
    width: 100%;
    height: 364px;
    z-index: 90;
    */
}
div.footW {
    /*
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 364px;
    z-index: 1001;
    */
}

div.bodyUpperOnly {
    /*
    position: absolute;
    top: 0;
    width:100%;
    height: 729px;
    z-index: 130;
    background-image:url(img/body_upperonly.png);
    background-position: 0 top;
    background-repeat:no-repeat;
    */
}
div.bodyLowerOnly {
    /*
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 440px;
    z-index: 130;
    background-image:url(img/body_loweronly.png);
    background-position: 0 bottom;
    background-repeat:no-repeat;
    */
}
div.tragflieger {
    position: absolute;
    bottom: 0;
    width:100%;
    height: 1180px;
    z-index: 100;
    background-image:url(img/bottom_tragflieger.png);
    background-position: 0 bottom;
    background-repeat:no-repeat;
}
div.flowerleaves,
div.leavesflowers {
    position: absolute;
    top: 0;
    width:100%;
    height: 1180px;
    z-index: 120;
    background-image:url("img/leavesflowers.png");
    background-position: 0 top;
    background-repeat:no-repeat;
}
div.sittingbird {
    position: fixed;/*absolute;*/;
    top: 0;
    width:100%;
    height: 1180px;
    z-index: 120;
    background-image:url(img/sittingbird.png);
    background-position: 0 top;
    background-repeat:no-repeat;
}
div.paradisebird {
    position: absolute;
    top: 0;
    width:100%;
    height: 1180px;
    z-index: 120;
    background-image:url(img/paradisebird_withshadow.png);
    background-position: 0 top;
    background-repeat:no-repeat;
}
div.moreflowers {
    position: fixed;/*absolute;*/
    top: 0;
    width:100%;
    height: 1180px;
    z-index: 120;
    background-image:url(img/sittingbird.png);
    background-position: 0 top;
    background-repeat:no-repeat;
}


.middle {
    /*
    margin-left: 180px;
    margin-top: 0;
    padding: 200px 0 463px;
    position: relative;
    width: 1000px;
    z-index: 999;
    */
}
.slideshow {
    left:50%;
    margin-left:-422px;
    margin-top:200px;
    padding:0;
    position:absolute;
    width:575px;
    z-index:1000;
}
.heading {
    left:50%;
    margin-left:-422px;
    margin-top:200px;
    padding:0;
    position:absolute;
    width: 575px;
    z-index:1000;
}

.main {/*relatively to .middle*/
    /*
    margin-top:420px;
    text-align:justify;
    width:525px;
	font-size: 1.2em;
	font-family:  Garamond, serif;
	*/
}
.main div {
    /*
    font-weight: bold;*/
	/*text-shadow: 1px 1px 1px lavenderblush;*/
}
.content {
    
}
div.bodyMiddleOnly {
    /*
    background-image:url(img/body_middleonly.png);
    background-position:0 bottom;
    background-repeat:repeat-y;
    left:-195px;
    margin-top: 43px/*74px*//*;
    min-height:10px;
    padding-left:175px;
    padding-right:75px;
    position:relative;
    padding-bottom: 10px;
    margin-bottom: -24px;
    width:600px;
    */
}








div.ovCatT {
    margin-top: 5px;
    margin-left:7px;
}
div.ovGoToW {
    width: 220px;
    height: 40px;
}
div b.curl {
    width: 94%;
    height: 84%;
}

.message0 {
    background-color: rgba(1,1,153, 0.4);
    border: dashed midnightblue 1px;
}
.message1 {
    background-color: rgba(15,120,153, 0.4);
    border: dashed midnightblue 1px;
}
.anno, .anno0:hover {
    color: #999999;
}
.anno0, .anno:hover {
    color: #444444;
}
.littleT {
    color: #999;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 10px;
}
span.darkred,
div#message span.gold {
    color: darkRed;
}
.curl {
    display: inline-block;
    background-color: #fff;/*lavender;#999;*/
    border: 1px solid #8899AB;
	-moz-transition: 0.75s ease-in;
    -webkit-transition: all 0.75s ease-in-out;
    -o-transition: all 0.75s ease-in-out;
    -ms-transition: all 0.75s ease-in-out;
    transition: all 0.75s ease-in-out;
	box-shadow: 0px 1px 3px rgba(0,0,0, 0.4);
	text-shadow: 0px 0px 2px lavender;
}
a.curl:hover {
    /*color: midnightblue;*/
    text-shadow: 0px 0px 5px rgb(230,230, 250);
    box-shadow: 0px 4px 5px rgba(22,155,240, 0.4);
}

div.innerW {
/*very important - switches to logged in input,..-style*/
}

/*other classes*/
.textRight {
    text-align: right;
}
.textLeft {
    text-align: left;
}
.textC {
    text-align: center;
}
.mAuto {
    margin: auto;
}
.block {
    display: block;
}
.annotation,
.anno,
.anmerkung,
.anm {
    color: #999999;
    font-size: 0.9em;
    font-style: italic;
}

.footnote {
    font-size: 11px;
}
.footnote span:first-letter {
    vertical-align: super;
    font-size: 75%;
}
.footnote span {/*ermoeglicht schnell-auflistung*/
    display: block;
}
.tiny {
    font-size: 9px;
}
.screeny {
    -moz-box-shadow: 2px 2px 2px #333;
    -webkit-box-shadow: 2px 2px 2px #333;
    box-shadow: 2px 2px 2px #333;
}
.cen {
    text-align: center;
}
.cen > * {
    margin: auto;
}
.floatingtext {

	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
	
.quicklinks {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	/*
	color: #666666;
	*/
	text-decoration:none;
}
}
.moretext {
    color: #555;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 10px;
    font-weight: bold;
}





.limitImageSize img {
    max-width: 165px;
    margin: 10px;
}







/**----Special---------------------------**/
/*TOP*/
.logo {
    left:36px;
    position:relative;
    top: 2px;
}
div#topWrapper div.logoWrapper {
    text-align: center;
    width: 364px;
    position: relative;
    top: -115px;
}
div.topNavWrapper,
div.topNavW {
    /*
    height: 140px;
    margin: auto;
    padding: 0 90px 0 193px;
    width: 875px;
    */
    /*overflow: hidden;*/
}
div.topNavW > a,
div.topNavW > span {
    display: inline-block;
    width: 124px;
    height: 147px;
    color:transparent;
    float:left;
    padding:37px 0;
    text-align:center;
    text-decoration:none;
    text-shadow:-15px 5px 4px #111;
    -moz-transition: 0.75s ease-in;
    -webkit-transition: all 0.75s ease-in-out;
    -o-transition: all 0.75s ease-in-out;
    -ms-transition: all 0.75s ease-in-out;
    transition: all 0.75s ease-in-out;
}
div.topNavW > a:hover,
div.topNavW > span:hover {
    text-shadow:15px 5px 4px royalblue;
}
div.topNavW > a.download {
    width: 157px;
}
div.topNavW > a.contact {
    width: 150px;
}
div.topNavW > span.logoW {
    width: 187px;
    margin-left: 10px;
}





















/*-------HOME---------------------------------------------------------------------*/
div.homeW {
    padding: 1px 15px;
}























/*-------REGISTER-----------------------------------------------------------------*/
.obligInfo {
    font-size: 0.7em;
    color: #010;
    font-style: italic;
    width: 45%;
    text-align: right;
}





/*-------PARTNER.-----------------------------------------------------------------*/
.partner {
    border: 1px solid #999999;
    padding: 5px 7px;
    width: 98%;
}
.partner {
    -moz-box-shadow: 0 0 3px;
    -webkit-box-shadow: 0 0 3px;
    box-shadow: 0 0 3px;
}
.partner:hover {
    background-color: #bbbbff;
}










/*-------FORUM--------------------------------------------------------------------*/
.forumW {


}





/*-------BLOG---------------------------------------------------------------------*/


/*-------PRESENT VIDEO------------------------------------------------------------*/
video.presentVideo {
	position: absolute;
	top: 300px;
}












