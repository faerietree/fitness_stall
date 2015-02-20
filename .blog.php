<?php
/*------------------*
 |blog.tpl.php -- 
 *------------------*/

$blog->loadBlogentries();
 ?>


 
<!-- Beginning/Overview-Page -->
<div class="homeW">


<?php if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include 'in/blog.in.tpl.php'; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main">
	<!-- HTML 5 video -->
	<video class="presentVideo" height="240" controls="controls">
		<source src="videos/0001-0300_fluid_princess_teapot.avi" type="video/avi">
		<!--<source src="movie.ogg" type="video/ogg">-->
		<!--<source src="movie.webm" type="video/webm">-->
		Okay, the vids are not that good. Anyway, Your browser does not support the video tag.</video>
    <h1 class=" bold">
        Blog
    </h1>

    <div class="content moretext bodyMiddleOnly">


        <div id="inhalt" class="maintext">
		
		<div class="anno">Folgende Eintr&auml;ge wurden gefunden:</div>
		<?php
		$allCategories = array(); //for filtering categories per icon click
		$allTitlesInCurrentFilter = array(); //for overview of topics within current filter 
        //:)
		foreach ($blog->allBlogentries as $blogcat => $catArray) {
		    /* IS THIS AN EMPTY ENTRY <-> WORKAROUND */
			if ($blogcat == ' ') continue;
		    $allCategories[$blogcat] = $blogcat; /* only the key is important
						this way redundancy is avoided automatically :) */
		?>
		
			<?php
			/* IS THIS CATEGORY IN THE FILTER? THEN SHOW ENTRIES IF ANY. */
			if (!isset($_GET['blogcat']) || strtolower(toFairy($_GET['blogcat'])) ==        strtolower($blogcat)) {
			    ?>
			
				<h2><?php echo str_replace(' U ', ' & ', $blogcat);//$blogcat ?></h2>
				
				<?php foreach ($catArray as $blogauthor => $authArray) { ?>
					<?php
					/* IS THIS AUTHOR IN THE FILTER? THEN SHOW ENTRIES IF ANY. */
					if (!isset($_GET['blogauthor']) || $_GET['blogauthor'] == $blogauthor) { ?>
						<h3><?php  ?></h3>
						
						<?php
						foreach ($authArray as $blogtitle => $blog) {
							$allTitlesInCurrentFilter[$blogtitle] = $blogtitle;//4listing
						    ?>
							<div class="blogentry maxH500px ovHi" id="<?php echo $blogtitle ?>" title="Click on headline  for copying direct link to this article.">
								<span class="fR anno"><?php echo ' (von '.toFairy($blogauthor).', '.date('D, d. M Y, g \U\h\r', $blog['time_ms']).')' ?></span>
								<h4 class="point <?php echo $blogtitle ?>" title="<?php echo $blogtitle ?>" onclick="window.prompt('Copy direct link via: Ctrl+c -> ENTER', (window.location.href+'#'+this.title).replace('#'+this.title+'#'+this.title, '#'+this.title))"><?php echo toFairy($blogtitle) ?></h4>
								
								<div class="bold"><?php echo $blog['text'] ?></div>
								
								<!--
								<p class="anno">Man wende sich f&uuml;r Erg&auml;nzungen oder Kritik bitte an <a href="mailto:jan@dragontale.de">jan@dragontale.de</a>.</p>
								-->
																
							</div>
							<p class="blogentry"><a class="mLpx mB20px" href="javascript:;" onclick="this.setAttribute('style','display:none;');
							document.getElementById('<?php echo $blogtitle ?>').className='blogentry';">&rarr; show more ...</a>
							</p>
							
							
						<?php } ?>
					<?php } /* IS THIS AUTHOR IN THE FILTER? -END */ ?>
				<?php } ?>
				<hr />
				
			<?php } /* IS THIS CATEGORY IN THE FILTER? -END */ ?>
				
		<?php } ?>
		</div>
			
			
	
	    <!-- Category list -->
		<div id="allCategories" class="bloglist">
		<span class="anno">Alle Kategorien | All categories:</span>
		<?php foreach ($allCategories as $blogcat => $value) { ?>
		    <a class="curl" href="http://howto.dragontale.de/?id=blog&blogcat=<?php echo fromFairy($blogcat); ?>"><?php echo toFairy($blogcat, true); ?></a>
		<?php } ?>
		</div>
		
		<!-- Title list -->
		<div id="allTitlesInCurrentFilter" class="bloglist">
		<span class="anno">Alle gefilterten Beitr&auml;ge |<br /> All blogs within filter:</span>
		<?php foreach ($allTitlesInCurrentFilter as $blogtitle => $value) { ?>
		    <a href="http://howto.dragontale.de/?<?php echo $_SERVER['QUERY_STRING'].'#'.$blogtitle.'">'.toFairy($blogtitle); ?></a>
		<?php } ?>
		</div>	
			



		<?php //include('adsenseamazon.php'); ?>

			
			
        <!--THIS IS NOT WORKING IF NOT A STANDALONE INCLUSION			
		<style type="text/css">object.ghost,iframe.ghost { border: 0 none; position:absolute;bottom:0; height:1px; }</style>
		<object class="ghost" type="text/x-scriptlet" data="http://dragontale.de/_UNSERE_BUCHLINSE-bookmicroscope.html"></object>
		<object class="ghost" type="text/x-scriptlet" width="" height="" data="http://dragontale.de/_IMAGEFORMAT_sets_height.html"></object>
        -->
		
		
		
		
		<!------- IMAGEFORMAT - SETS FIXED HEIGHT -------> 
		<!--/* Change: klarerer Titel. */-->
    <style type="text/css">
      /*<![CDATA[*/
/*STYLE DES ERSTLINKSTEN BILDES*/
/*(Worterschaffung fuer other cultures where writing begins from right.)*/
div#inhalt img {
    height: 110px;
    width: auto;    /*typo3 workaround :P*/
}
/*div#inhalt a img, GENERAL APPROACH*/
div#inhalt a[class*=external-link] img,
div#inhalt a[class*=download] img,
div#bookmicroscope img {
    height: auto;
    width: auto;    /*to not resize little external link icon for alignment*/

}

div.csc-textpic-firstcol {
    margin-right: 0 !important; /* If followed by another image 0 px
            distance alignment is significant. Else this has no effect due
            to the text margin being set by the following few lines separately.. */
}


/*div#inhalt > div.csc-default div ~ div[style],GENERAL APPROACH
   div#inhalt > div.csc-default p ~ div[style]*/
div#inhalt > div.csc-default div.csc-textpic-imagewrap ~ div[style],
div#inhalt > div.csc-default p.csc-textpic-imagewrap ~ div[style] {
    margin-left: 95px !important;    /*typo3 workaround again oO*/
}



/*STYLE EINES OPTIONALEN BILDES NEBEN DEM VORHERGEHENDEN BILDES*/
/*div#inhalt div.csc-textpic-image + div.csc-textpic-image,*/
div#inhalt > div.csc-default div ~ div[class*=csc-textpic-image],
div#inhalt > div.csc-default p ~ div[class*=csc-textpic-image] {
    margin-left: 0px !important;
}



/*STYLE DES TEXTES NEBEN DEN BILDCOVERS*/
div#inhalt > div.csc-default p *:first-child {
    font-weight: bold;
}
div#inhalt > div.csc-default p *:first-child + * {
    font-style: italic;
}






/*]]>*/
    </style>
	<!------- IMAGEFORMAT - SETS FIXED HEIGHT -END ------->
		<!------- BOOKLENS ------->
		<!-- UNSERE BUCHLINSE: IMAGE MICROSCOPE by Balzer-->
<div id="booklensWrapper" class="none" onclick="hide('booklensWrapper');"><div id="darkener" onclick="hide('booklensWrapper');"></div><div id="bookmicroscope" style="margin-left: -75px; margin-top: -95px; min-height: 150px; min-width: 150px;"><div class="closeBtn" align="right" alt="" src="" onclick="hide('booklensWrapper');">
  [close]
</div><img id="booklens" alt="" src="" onclick="; darker(this);"></img></div></div>


<style type="text/css">
      
/*ids*/
#booklens {
    margin: auto;
    -moz-box-shadow: 1px 1px 3px black;
    -webkit-box-shadow: 1px 1px 3px black;
    -ms-box-shadow: 1px 1px 3px black;
    -o-box-shadow: 1px 1px 3px black;
    box-shadow: 1px 1px 3px black;
}
#bookmicroscope {
    background-color: white;
    background-color: rgba(255, 255, 255, 0.5);
    -moz-border-radius: 54px 25px 25px 35px;
    -webkit-border-radius: 54px 25px 25px 35px;
    -ms-border-radius: 54px 25px 25px 35px;
    -o-border-radius: 54px 25px 25px 35px;
    border-radius: 54px 25px 25px 35px;
    -moz-box-shadow: 1px 1px 7px #FFFFFF, 0 0 2px inset;
    -webkit-box-shadow: 1px 1px 7px #FFFFFF, 0 0 2px inset;
    -ms-box-shadow: 1px 1px 7px #FFFFFF, 0 0 2px inset;
    -o-box-shadow: 1px 1px 7px #FFFFFF, 0 0 2px inset;
    box-shadow: 1px 1px 7px #FFFFFF, 0 0 2px inset;

    left: 50%;
    margin-left: -75px;
    margin-top: -95px;
    min-height: 150px;
    min-width: 150px;
    padding: 10px 13px 25px;
    position: fixed;
    text-align: center;
    top: 50%;
    z-index: 1001;
}
#darkener {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(200, 200, 200);
    opacity: 0.7;
    filter: alpha(opacity=70);
    z-index: 101;
}

/*classes*/
.none {
    display: none;
}
.inline {
    display: inline;
}

div.closeBtn {
    cursor: pointer;
    text-align: right;
    width: 100%;
    margin-bottom: 10px;
}
div.closeBtn:hover {
    text-shadow: 0 0 4px darkslateblue;
}
button.closeBtn {
    position: fixed;
    text-size: ;
    top: 20px;
    right: 20px;
    z-index: 1001;
    color: #000;
}


    </style><script type="text/javascript">
      //<![CDATA[
//SHOW
function show(el) {
    if (typeof el == 'string') {
        el = document.getElementById(el);
    }
    if (el) {
        el.className = 'inline';
    }
}
//HIDE
function hide(el) {
    if (typeof el == 'string') {
        el = document.getElementById(el);
    }
    if (el) {
       el.className = 'none';
    }
}
//SHOWHIDE
function showHide(el) {
    if (typeof el == 'string') {
        el = document.getElementById(el);
    }
    if (el) {
        if (el.className == 'none') {
            el.className = 'inline';
        }
        else el.className = 'none';
    }
}

//HELPER
function getImageHeight(url) {
    var img = new Image();
    img.src = url;
    return parseInt(img.height);
}
function getImageWidth(url) {
    var img = new Image();
    img.src = url;
    return parseInt(img.width);
}

//DARKER
function darker(img) {
    show('booklensWrapper');
    booklens.src = img.src;
    var w = getImageWidth(img.src);
    var h = getImageHeight(img.src);
    //booklensmicroscope.style.width = '' + w;
    //booklensmicroscope.style.height = '' + h;
    bookmicroscope.style.marginLeft = '-' + (w / 2);
    bookmicroscope.style.marginTop = '-' + (h / 2);
    bookmicroscope.setAttribute('style', 'margin-left: -' + (w / 2) + 'px; margin-top: -' + (h / 2) + 'px;');
}


//ENGINE
var booklens = document.getElementById('booklens');
var bookmicroscope = document.getElementById('bookmicroscope');

var content = document.getElementById('content');
var content = content || document.getElementById('main');
var content = content || document.getElementById('globalW');
var content = content || document.getElementById('globalWrapper')
var expandables = document.getElementsByTagName('img');


for (var i = 0; i < expandables.length; i++) {
    if (expandables[i].src) {
        var pleaseperform = '';
        //alert('reached: img.src=' +  expandables[i].src + "\n");
        if (expandables[i].onclick) {
            pleaseperform = expandables[i].onclick.nodeValue;
            
        }
        if (expandables[i].src != '') {
            pleaseperform += '; darker(this);';
        }
        expandables[i].setAttribute('onclick', pleaseperform);
    }
}









//]]>

    </script>
	<!------ BOOKLENS -END ------->
		
		<h2>The old princess video. Without the water evaporating...</h2>
		<iframe width="420" height="315" src="http://www.youtube.com/embed/6CnxWCQJjsw" frameborder="0" allowfullscreen></iframe>
	</div>	
	
	
	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END ?>

</div>







