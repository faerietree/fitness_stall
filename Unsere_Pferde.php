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
        
        // construct arrays for sorting categories (as specified in the file/directory names:
	    $categories_pre_indices = array();
	    $categories_pre = array();
	    $categories_pre_index = 0;
	    
	    $categories = array();
	    $categories_index = -1;
        
	    $categories_succeding_indices = array();
	    $categories_succeding = array();
	    $categories_succeding_index = 0;
        
	    $no_category_entries = array();

        $categories_to_order_index = array();
	    
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
                    echo '<p>No -separated pair (' . $key . ') in line '. $horseline .'</p>'."\r\n";
					continue;
				}
				# ignore a potential third value as it's required for appending a space only.
                $value = trim($key[1]);
                $key = trim($key[0]);
                $horse[$key] = $value;
            }
            /*sort the elements to unify the order - so that it's not important in which order the pairs are in the directory name
            and hence element pairs simply can be omitted!*/
            //asort($elements);
            
            
            $entry = '<hr />';
            //Horse image heading (one heading has multiple images underneath):
            $entry .= '<p>';
            $i = 0;
            $horseL = count($horse);
            $horseline_render = '';
			$age_reference = now('year');
			foreach ($horse as $key => $value) {
				//echo 'key: ' . $key . '; value: ' . $value;
				$key_base = strtolower(substr($key, 0, 3));
				if ($key_base == 'tod')
				{
					//echo 'intval: ' . intval($value) . ' versus: ' . getInt($value);
					$age_reference = getInt($value);
					//echo ' reached!!' . $age_reference;
					break;
				}
			}
			//echo '<br />age reference: ' . $age_reference;
            foreach ($horse as $key => $value) {
                $is_bold = strpos($key, '.bold');
                $is_name = strpos($key, 'name');
                if ($is_bold !== false || $is_name !== false) {
                    $horseline_render .= 
                    /*echo*/ '<strong>';
                }
                
                //special output:
                if ($key == 'cat' || $key == 'category')
                    continue;
                //if (isset($horse['geburt'])) {
                else if ($key == 'geburt') {
                    $age = $age_reference - $horse['geburt']/*or $value*/;
					//echo 'AGE = ' . $age;
                    $horseline_render .= 
                    /*echo*/ $age . ' Jahre';
                }
                else if ($key == 'stockmass') {
                    $horseline_render .= 
                    /*echo*/  str_replace('_', ',', $value) . ' Stockma&szlig;';/*1_10m -> 1,10m*/
                }
                else if ($key == 'gegangen' || $key == 'gone' || $key == 'tod' || $key == 'Tod' || strpos($key, '.force') !== false) {
                    $horseline_render .= 
                    /*echo*/  toFairy(str_replace('.force', '', $key)) . ': ' . toFairy($value);/*1_10m -> 1,10m*/
                }
                // general case:
                else {
                    $horseline_render .= /*echo*/ /*ucfirst($key) . */ toFairy($value);
                }
                
                
                // separator
                if ($is_bold !== false || $is_name !== false) {
                    $horseline_render .= 
                    /*echo*/ '</strong>';
                }
                // Is this the last element pair?
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
            $entry .= $horseline_render . "\n";
            $entry .= '<p>';
            
            
            
            // SHOW ALL IMAGES THAT ARE FOUND IN THE DIRECTORY:
            $directory = $path_base . '/' . $horseline;
			$horse_images = array();
            if (!is_dir($directory))
			{
				# Include this single image then (or skip)?
				#continue;
				$horse_images[] = '.';
				$horse_images[] = '..';
				$horse_images[] = $directory;
				$directory = '';
			}
            else
				$horse_images = scandir($directory);
            if (sizeOf($horse_images) < 3) {
                $entry .= '<li class="anno" style="list-style: none;">- keinen Eintrag gefunden -</li>';
            }
            foreach ($horse_images as $file) {
                //skip this entry?
                if ($file == $_SERVER['PHP_SELF']
                        || array_search($file, $bscmscexceptions) !== false
                        || array_search(substr($file, 0, 1), $hiddenIndicators) !== false) {
                    continue;
                }
                
                //assemble the imagelinks:
                $prefix = '';
                if (!empty($directory)) # It is empty e.g. if the images array contains the directory itself because it's a file instead of a directory.
					$prefix = $directory . '/'; 
					
                $imagelink = $prefix . $file;
                $previewlink = $prefix . '.preview__' . $file;
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
                $entry .= '
                        <span class="curl">
                            <a href="' . $imagelink . '" title="" alt="">
		                    <img src="' . $previewlink . '" title="' . strip_tags($horseline_render) . '" rel="lightbox"
		                      class="ngg-singlepic ngg-left alignleft size-thumbnail wp-image-558" height="120" alt="" />
                            </a>
		                </span>
		                ';
		        
            }
            
    	    $entry .= '
                    <br style="clear:both;"><!-- Clear columns. Begin new line. --><p>&nbsp;</p>
	            	';
		    
            
            // store if printing heading once
            if (isset($horse['cat'])) {
				// order index is appended with .:
				$cat = $horse['cat'];
				if (strpos($cat, '.') != false)
				{
				    //echo "\n" . 'category with index: ' . $horse['cat'];
					// sort order index given
					$parts = explode('.', $horse['cat']);
					$cat = $parts[0];
					$categories_to_order_index[$cat] = $parts[1];
				}
                
				// At this point $cat is set correctly no matter if order index has initially been appended or not.
				if (!isset($categories_to_order_index[$cat]))
				{
    				//echo "\n" . 'no cat_order_index: ' . $horse['cat'];
                	if (!isset($categories[$horse['cat']]))
						$categories[$horse['cat']] = array();
					$categories[$horse['cat']][] = $entry;
				}
                else
                {
                    $cat_order_index = $categories_to_order_index[$cat];
                    if (strpos($cat_order_index, '-') != false) #array_keys()) !== false))
                    {
                	    //echo "\n" . ' succeding category: ' . $horse['cat'] . ' order_index: ' . $cat_order_index;
					    if (!isset($categories_pre[$categories_succeding_index]) || !isset($categories_succeding[$categories_succeding_index][$cat]))
                        {
                            // only increment the index for every different category:
                            $categories_succeding_index++;
                        	$categories_succeding[$categories_succeding_index] = array();
					    	$categories_succeding[$categories_succeding_index][$cat] = array();
                            $categories_succeding_indices[$categories_succeding_index] = $cat_order_index;
					    }
					    $categories_succeding[$categories_succeding_index][$cat][] = $entry;
                        
				    }
				    else // cat_order_index valid and not succeding:
				    {
				        //echo "\n" . ' preceding category: ' . $horse['cat'] . ' order_index: ' . $cat_order_index;				    	-
				        // This results in only the first occurrence of a category with order index being taken into account:
					    if (!isset($categories_pre[$categories_pre_index]) || !isset($categories_pre[$categories_pre_index][$cat]))
                        {
                            // only increment the index for every different category:
                            $categories_pre_index++;
                            $categories_pre[$categories_pre_index] = array();
						    $categories_pre[$categories_pre_index][$cat] = array();
                            $categories_pre_indices[$categories_pre_index] = $cat_order_index;
                        }
				        $categories_pre[$categories_pre_index][$cat][] = $entry;
				        //echo '<br/>SETTING CATEGORIES PRE: ' . $cat . ' to entry: ' .$entry;
				        
				    }
                    
				}
				// Ensure proper category (without a potential temporary order index)
				//aready ensured above with initializing it and then overwriting$horse['cat'] = $cat;
	    	}
	    	else
	    	{
	    	    //echo 'no category: ' . $entry;
	    	    // No category defined, store it nevertheless, add first to make it visible to find anomalies immediately
	    	    //  and because this way there is no impression that these category-less entries belong to the last heading.
                $no_category_entries[] = $entry;
	    	}    
			
		}
        
        
        // OUTPUT
		process_entries($no_category_entries, '', $printed_already_once);
		
        // sort categories according to specified position using the indices array:
        array_multisort($categories_pre_indices, $categories_pre, SORT_ASC, SORT_REGULAR);
        /*
        echo "\n<br/>" . 'categories pre: ';
        var_dump($categories_pre);
        echo "\n<br/>" . 'indices: ';
        var_dump($categories_pre_indices);
        */
		foreach ($categories_pre as $index => $category_to_entries)
		    foreach ($category_to_entries as $cat => $entries)
		    {
                process_entries($entries, $cat, $printed_already_once);
		    }

		foreach ($categories as $cat => $entries)
		{
            process_entries($entries, $cat, $printed_already_once);
		}

        # referencing from the end via e.g. -1 = length - 1 = last element:
        array_multisort($categories_succeding_indices, $categories_succeding, SORT_DESC);
		foreach ($categories_succeding as $index => $category_to_entries)
		    foreach ($category_to_entries as $cat => $entries)
		    {
                process_entries($entries, $cat, $printed_already_once);
	    	}

		
		?>

		</div>
		
		
		
	</div>	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END
function process_entries($entries, $cat, $printed_already_once)
{
            //echo 'entries: ';
            //var_dump($entries);
            //echo 'category: ';
            //var_dump($cat);           
 	//print heading once
           	if (isset($cat) && !empty($cat)) {
           		if (!isset($printed_already_once[$cat])) {
				    $post = ' Pferde';
				    if (strpos($cat, '_') === False)//!== count($cat) - 1)
                    {
                        // remove spaces
				        $post = trim(strtolower($post));
                    }
                    
           		    echo '<h3>Unsere ' . toFairy($cat) . $post . ':</h3>';
                   	$printed_already_once[$cat] = true;
                       
                   	// Print special notes:
                   	if ($cat == 'hof') {
                   		echo '<p>Alle unsere Schulpferde werden regelm&auml;&szlig;ig von fachkundigem Reiter korrigiert und weiter ausgebildet.</p>';
                   	}
               	}
              	//unset($cat);
           	}
           
    		foreach ($entries as $entry)
	    	{
            	echo $entry;
            }

}
?>

