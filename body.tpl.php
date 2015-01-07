<div id="wrapper" class="hfeed">

    
    <!-- TOP -->
    <?php
    //SWITCH => PAGE TO LOAD!
    if (!isset($_GET['id'])) {
        $_GET['id'] = isset($_SESSION['id']) ? $_SESSION['id'] : '';
    }
    //
    if (isset($_POST['task']) && $_POST['task'] != 'logout'
            || isset($_SESSION['usr'])) { ?>
        <!-- MESSAGE -->
        <div id="message" class="<?php echo $baby->getMessageClass(); ?>">
            <?php echo $baby->getMessage().'<br />Blog-Meldung: '
			.$blog-getMessage(); ?>
        </div>        
    <?php
    }
    require_once('./top.tpl.php');
    ?>
    <div class="topBG"></div>
        
    <!-- COMPLETE LAYERS
    <div class="bodyUpperOnly"></div>
    <div class="bodyLowerOnly"></div>
    <div class="tragflieger"></div>
    
    <div class="flowerleaves"></div>
    <div class="sittingbird"></div>
    <div class="moreflowers"></div>
    <div id="paradisebird" class="paradisebird"></div>
     -->
    
    <!-- MIDDLE -->
    <div id="container" class="middle" onmouseover="fadeInTo_c('paradisebird', 100, 300);"
     onmouseout="fadeOutTo_c('paradisebird', 0, 100);">

     	
    <?php
    
    # Dynamisch die Datei laden, oder den Fehlerteufel 404 beschwoeren
    $loggedInAddition = isset($_SESSION['usr']) ? '.in' : '';
	if (empty($_GET['id'])) {
		$_GET['id'] = 'home';
		if (!file_exists('./'.$_GET['id'].$loggedInAddition.'.php')) {
		   $_GET['id'] = '.home';//or #
		}
	}
	$fanfare = './'.$_GET['id'].$loggedInAddition.'.php';//<-- omitted tpl because I question myself if it really is useful.
	if (!file_exists($fanfare)) {
        $fanfare = './error404.php';
	}
    ?>
        <!-- PAGE CONTENT -->
        <div id="content" class="limitImageSize <?php echo $_GET['id'] ?>W">
            <?php if ($_GET['id'] != 'home' && $_GET['id'] != '.home' && $_GET['id'] != '#home') { ?>
            <h2 class=" bold"><?php echo toFairy($_GET['id']) ?></h2>
            <?php } ?>
	<?php
	
	require($fanfare);
	
    ?>
        </div>
    </div>

    <div id="primary" class="sidebar">
        <ul class="xoxo">
        <li class="widget widget-text">
        <!--logo-->
		    <div class="textwidget">
        		<img src="images/logo.gif" alt="Fitness-Stall Badwerk" title="&rarr; Home" />
		    </div>
        </li>
        <li class="widget widget_pages">
        <!--menu-->
            <h3 class="widgettitle">Hauptmen&uuml;</h3>
        <?php
        include_once('dynamicmenu.config.php');
        include_once('DynamicMenu.class.php');
        ?>
        </li>
        </ul>
    </div>
    <div id="secondary" class="sidebar">
    </div>
    <!-- BOTTOM -->
    <!-- FOOT -->
    <?php require_once('./foot.tpl.php'); ?>
    <div class="footBG"></div>
</div>
