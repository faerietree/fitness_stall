<?php
/*------------------*
 |Unsere_Pferde.php 
 *------------------*/
if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include $_SERVER['SCRIPT_NAME'] . ".in.tpl.php"; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main">

    <div class="content moretext bodyMiddleOnly">



        <div class="maintext">
        
        <?php
        //include('generator_oneheadingmultipleimages.php');
        ?>
        <!-- Generator Stylesheet -->
        <style type="text/css">/*<![CDATA[*/

        ol.dozenten,
        ol.dozenten > li {
            list-style-type: none;
            padding-left: 0;
            margin-left: 0;
        }
        ol.dozenten ol {
            margin-bottom: 30px;
        }

        /*]]>*/</style>

        <?php
        /*======= ENGINE ===============================================*/
        //globale Variable
        $exceptions = array('.', '..');
        $bscmscexceptions = array('.', '..');
        $hiddenIndicators = array('#', '-', '_', '.');
        
        $path_base = './.our_horses';
        //$path_base = '.';
        $horses = scandir($path_base);
        $printed_already_once = array();
        foreach ($horses as $horseline) {
            //skip this entry?
            if ($horseline == $_SERVER['PHP_SELF']
                    || array_search($horseline, $bscmscexceptions) !== false
                    || array_search(substr($horseline, 0, 1), $hiddenIndicators) !== false) {
                continue;
            }
        
            //parse the horse line data
            $parts = explode('__', $horseline);
			/*if (count($parts) < 1)
				# Skip highest level files without any structuring in the filename.
				continue;
			*/
            $horse = array(); //<-- this clearing of the horse variable is important for not showing wildly mixed horses' data.
            foreach ($parts as $part_pair) {
                $key = explode('-', $part_pair);
                if (count($key) < 2)
				{
                    echo '<p>No pair in line '. $horseline .'</p>'."\r\n";
					continue;
				}
                $value = trim($key[1]);
                $key = trim($key[0]);
                $horse[$key] = $value;
            }
            /*sort the elements to unify the order - so that it's not important in which order the pairs are in the directory name
            and hence element pairs simply can be omitted!*/
            //asort($elements);
            
            
            //print heading once
            if (isset($horse['cat'])) {
                if (!isset($printed_already_once[$horse['cat']])) {
                    echo '<h3>Unsere ' . toFairy($horse['cat']) . 'pferde:</h3>';
                    $printed_already_once[$horse['cat']] = true;
                    if ($horse['cat'] == 'hof') {
                        echo '<p>Alle unsere Schulpferde werden regelm&auml;&szlig;ig von fachkundigem Reiter korrigiert und weiter ausgebildet.</p>';
                    }
                }
                unset($horse['cat']);
            }
            
            
            echo '<hr />';
            //Horse image heading (one heading has multiple images underneath):
            echo '<p>';
            $i = 0;
            $horseL = count($horse);
            $horseline_render = '';
            foreach ($horse as $key => $value) {
                $is_bold = strpos($key, '.bold');
                $is_name = strpos($key, 'name');
                if ($is_bold !== false || $is_name !== false) {
                    $horseline_render .= 
                    /*echo*/ '<strong>';
                }
                
                //special output:
                //if (isset($horse['geburt'])) {
                if ($key == 'geburt') {
                    $age = now('year') - $horse['geburt']/*or $value*/;
                    $horseline_render .= 
                    /*echo*/ $age . ' Jahre';
                }
                else if ($key == 'stockmass') {
                    $horseline_render .= 
                    /*echo*/  str_replace('_', ',', $value) . ' Stockma&szlig;';/*1_10m -> 1,10m*/
                }
                else if ($key == 'gegangen' || $key == 'tod' || $key == 'Tod' || strpos($key, '.force') !== false) {
                    $horseline_render .= 
                    /*echo*/  toFairy(str_replace('.force', '', $key)) . ': ' . toFairy($value);/*1_10m -> 1,10m*/
                }
                //general case:
                else {
                    $horseline_render .= 
                    /*echo*/ /*ucfirst($key) . */ toFairy($value);
                }
                
                
                //separator
                if ($is_bold !== false || $is_name !== false) {
                    $horseline_render .= 
                    /*echo*/ '</strong>';
                }
                //is this the last element pair:
                if (++$i != $horseL/* - 1*/) {
                    if ($is_name !== false) {
                        $horseline_render .= 
                        /*echo*/ ' ~ ';
                    }
                    else {
                        $horseline_render .= 
                        /*echo*/ ', ';
                    }
                }
            }
            echo $horseline_render . "\n";
            echo '<p>';
            
            //SHOW ALL IMAGES THAT ARE FOUND IN THE DIRECTORY:
            $directory = $path_base . '/' . $horseline;
			$horse_images = array();
            if (!is_dir($directory))
			{
				# Include this single image then (or skip)?
				#continue;
				$horse_images[] = '.';
				$horse_images[] = '..';
				$horse_images[] = $directory;
			}
            else
				$horse_images = scandir($directory);
            if (sizeOf($horse_images) < 3) {
                echo '<li class="anno" style="list-style: none;">- keinen Eintrag gefunden -</li>';
            }
            foreach ($horse_images as $file) {
                //skip this entry?
                if ($file == $_SERVER['PHP_SELF']
                        || array_search($file, $bscmscexceptions) !== false
                        || array_search(substr($file, 0, 1), $hiddenIndicators) !== false) {
                    continue;
                }
                
                //assemble the imagelinks:
                $imagelink = $directory . '/' . $file;
                $previewlink =  $directory . '/.preview__' . $file;
                #$previewlink =  str_replace('.jpg', '', $imagelink, . '__preview.jpg';
                if (!file_exists($previewlink))
                {
                    // Generate the small size preview (thumbnail): TODO Ensure escapeshellarg() is used on external variables.
                    #$files_space_separated = shell_exec("find $path_base -type f -name '*jpg|png'") #equivalent to backticks ``
                    #`for f in $files_space_separated; do convert $f -resize x90 ${f#.jpg}'__preview.jpg' done`
                    #echo 'Generating preview image: ' . $previewlink;
                    $output = shell_exec("convert $imagelink -resize x90 $previewlink");
                    #echo $output;
                }
            ?>
                <span class="curl">
                    <a href="<?php echo $imagelink ?>" title="" alt="">
		            <img src="<?php echo $previewlink ?>" title="<?php echo strip_tags($horseline_render) ?>" rel="lightbox"
		              class="ngg-singlepic ngg-left alignleft size-thumbnail wp-image-558" height="120" alt="" />
                    </a>
		</span>
            <?php } ?>
            <br style="clear:both;"><!-- Clear columns. Begin new line. --><p>&nbsp;</p>

		
		
		<?php } ?>
		</div>
		
		
		
	</div>	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END ?>








