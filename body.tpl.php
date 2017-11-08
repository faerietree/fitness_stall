<div id="wrapper" class="hfeed">

    
    <!-- TOP -->
    <?php
	require('../.determine_file.php');
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

        <!-- PAGE CONTENT -->
        <div id="content" class="limitImageSize <?php echo $_GET['id'] ?>W">
            <?php if ($_GET['id'] != 'home' && $_GET['id'] != '.home' && $_GET['id'] != '#home') { ?>
            <h2 class=" bold"><?php echo toFairy($_GET['id']) ?></h2>
            <?php } ?>
	<?php
		require($file);
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
