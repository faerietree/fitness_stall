<?php
$year = now('year');
$costs = 330;
?>

<table class="shadow_blue_">
<thead><tr><th><span style="background-color: yellowgreen;"><!-- peru -->
<img title="Gute Chancen." src="http://img163.imageshack.us/img163/5152/horseheadg.png" alt="HorseHeadLeft" width="37" height="27" /></span></th></tr>
</thead>

<tbody><tr>
<td colspan="3">Verl&auml;ngerung oder Verk&uuml;rzung der Aufenthalte nach Absprache m&ouml;glich.
Weitere Termine auf Anfrage! 
<span class="anno">Start Anmeldung: <span class="forest">Januar <?php echo $year ?></span>!<span style="display:block">
    Zus&auml;tzliche M&uuml;llabfuhrgeb&uuml;hren vom Land f&uuml;r Ferienbetrieb eingefordert, trotz eindeutig vernachl&auml;ssigbarem M&uuml;llanfall unserer ordentlichen Ferieng&auml;ste! :/
    <!--
    Dieses Jahr keine Preiserh&ouml;hung! Viel Spa&szlig;!
    --></span>
</span>
</td></tr>
<tr><td colspan="3"><!-- ____________________________ --><hr class="trenn1" /></td></tr>
<tr class="labelrow">
<td colspan="2">
<!-- OSTERN -->
<strong>Osterferien</strong></td><td></td></tr>
<tr>
<td>1. Woche:</td>
<td>Mo, 30.03. - Do, 02.04.<?php echo $year ?></td>
<td><strong>***  &euro; </strong> Kreisjugendring</td>
</tr>

<tr>
<td>2. Woche:</td>
<td>Do, 09.04. - So, 12.04.<?php echo $year ?></td>
<td><strong>290 &euro;</strong> <a href="./.anmeldeformular.pdf"> anmelden</a></td>
</tr>


<tr><td colspan="3"><!-- ____________________________ --><hr class="trenn1" /></td></tr>

<tr class="labelrow">
<td colspan="3">
<!-- PFINGSTEN -->
<strong>Pfingstferien</strong></td></tr>
<tr>
<td>1. Woche</td>
<td>So, 24.05. - Do, 28.05.<?php echo $year ?><br />
<span style="font-size:0.8em;color:#888;">(Verl&auml;ngerung m&ouml;glich)</span></td>
<td><strong><?php echo $costs ?> &euro;<a class="" href="./.anmeldeformular.pdf"> anmelden</a><br />
<span style="color:#888; font-size:0.8em;">+ 55 &euro; / Tag Verl&auml;ngerung</span></strong></td>
</tr>
<tr>
<td>2. Woche</td>
<td>Mo, 01.06. - Fr, 05.06.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;<a class="" href="./.anmeldeformular.pdf"> anmelden</a></strong></td>
</tr>



<tr><td colspan="3"><!-- ____________________________ --><hr class="trenn1" /></td></tr>
<tr class="labelrow">
<td colspan="3">
<!-- SOMMER -->
<strong>Sommerferien</strong></td></tr>
<tr>
<td><span class="">1. Woche:</span></td>
<td>Mo, 03.08. - Fr, 07.08.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;</strong> <a href="./.anmeldeformular.pdf"> anmelden</a></td></tr>

<tr>
<td><span class="">2. Woche:</span></td>
<td>10.08. - 14.08.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;</strong> <a href="./.anmeldeformular.pdf"> anmelden</a></td></tr>

<tr>
<td><span class="">3. Woche:</span></td>
<td>17.08. - 21.08.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;</strong><a href="./.anmeldeformular.pdf"> anmelden</a></td></tr>

<tr>
<td><span class="">4. Woche:</span></td>
<td>24.08. - 28.08.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;</strong><!-- color: #00e000; --> <a href="./.anmeldeformular.pdf"> anmelden</a></td></tr>

<tr>
<td>5. Woche:</td>
<td>31.08. - 04.09.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro; </strong><a href="./.anmeldeformular.pdf"> auf Anfrage</a></td></tr>

<tr>
<td>6. Woche:</td>
<td>07.09. - 11.09.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro; </strong><a href="./.anmeldeformular.pdf"> auf Anfrage</a></td></tr>


<!--
<tr>
<td><span class="">6. Woche:</span></td>
<td>0. Woche umf&auml;sst leider zu wenige Tage.</td>
<td><strong>***  &euro; </strong> nicht verf&uuml;gbar</td>
</tr>
-->

<tr class="labelrow"><td colspan="3"><!-- ____________________________ --><hr class="trenn1" /></td></tr>
<tr class="labelrow">
<td colspan="3">
<!-- HERBST -->
<strong>Herbstferien</strong></td></tr>
<tr>
<td>1. Woche</td>
<td>Mo, 02.11. - Fr, 06.11.<?php echo $year ?></td>
<td><strong><?php echo $costs ?> &euro;</strong> <a href="./.anmeldeformular.pdf"> anmelden</a></td></tr>

<tr><td colspan="3"><!-- ____________________________ --><hr class="trenn1" /></td></tr>

</tbody></table>




<!-- FERIENTERMINE -->
<h4>Ferientermine Bayern <?php echo $year ?></h4>
<table id="ferientermine" class="txtCen bgLBlue shadow_blue_" style="padding: 2px 15px;" cellspacing="0">
<tbody>
<tr>
<?php

/*
    $node->parentNode->replaceChild(
        $node->ownerDocument->createTextNode('Making this world a better place.')
    );
*/



// More generic naming: columnsParsed or nodesParsed.
$holidaysParsed = array('row_label', 'Winter', 'Ostern', 'Pfingsten', 'Sommer', 'Herbst', 'Weihnachten');
$holidaysWanted = array('Ostern', 'Pfingsten', 'Sommer', 'Herbst');
// PARSE
$url = "http://www.schulferien.org/Schulferien_nach_Jahren/2015/schulferien_2015.html";
$handle = null;
// save webpage to file using curl: http://codular.com/curl-with-php
/*
$params = '?&';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url.$params,
    CURLOPT_USERAGENT => 'School holiday request',
    //CURLOPT_POST => 1,
    //CURLOPT_POSTFIELDS => array(
    //    item1 => 'value',
    //    item2 => 'value2'
    //)
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
$c = curl_init('http://stackoverflow.com/questions/ask');
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
//curl_setopt(... other options you want...)

$html = curl_exec($c);

if (curl_error($c))
    die(curl_error($c));

// Get the status code
$status = curl_getinfo($c, CURLINFO_HTTP_CODE);

curl_close($c);
*/
#if (($handle = fopen($url, 'r')))
#    echo 'created handle';
//$html = fgets($handle);
$cache_filename = dirname(__FILE__).'/.schulferien.html';
$html = "";
$cache_exists = file_exists($cache_filename);
if ($cache_exists)
{
    $html = file_get_contents($cache_filename);
}

$last_modified_year = intval(substr($html, 0, 4));
// When a new year arrives, then automatically regenerate the cache:
if (empty($html) || $last_modified_year != $year)
{
    $html = file_get_contents($url);
    $source_encoding = 'ISO-8859-15';
    $source_encoding = mb_detect_encoding($html);#, [$source_encoding_candidates], $string);
    #$html = iconv($source_encoding, 'utf-8', $html);
    #$html = html_entity_decode(htmlentities($html, ENT_QUOTES, 'UTF-8'), ENT_QUOTES , $source_encoding);
    $html = mb_convert_encoding($html, $source_encoding, 'UTF-8');
}   
$tidy = new tidy();
$config = array(
    'output-xml'   => false, 
    'input-xml'    => false, #true,
#    'add-xml-decl' => true,
);
$tidy->ParseString($html, $config);
$tidy->cleanRepair();
file_put_contents($cache_filename, $year.''.$tidy);
$html = $tidy;


$dom = new DOMDocument('1.0', 'utf-8');
#echo $dom->saveXML();
//echo $tidy;
#$dom->load($tidy); //loadXML | loadHTML both throw namespace warning when undefined namespace is encountered. load() filters these namespaces out.


$dom = new DOMDocument('1.0', 'utf-8');
libxml_use_internal_errors(true);
$is_loaded = $dom->loadHTML($html);#, LIBXML_NOCDATA | LIBXML_NOWARNING);# | LIBXML_NOERROR);
$error = libxml_get_last_error();
libxml_use_internal_errors(true);
if (!$is_loaded && !$error || $error)
{
    print_r($error);
    throw new Exception('Invalid xml: ' . $html);
}
/*
$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//a/@href');
foreach($nodes as $href) {
    echo $href->nodeValue;                       // echo current attribute value
    $href->nodeValue = 'new value';              // set new attribute value
    $href->parentNode->removeAttribute('href');  // remove attribute
}
*/
#$nodeList = $dom->getElementsByTagNameNS($dom->lookupNamespaceURI('a'), 'body');

$nodeList = $dom->getElementsByTagName('body');
$body = $nodeList->item(0);
// TODO Traverse recursively and check for "Schulferien <number>". Then we've found the a close or div or whatever. Or use "Ferientermine Deutschland[ (<number>)]" in a text node.
// From there the next element sibling or the parentNode's 2nd child is the table containing the federal states.
// ^ No idea though if that's more generic/less maintenance heavy.
$div = $dom->getElementById('content_container_inner');
//$div = $body->ownerDocument->getElementById('content_container_inner');

$table = $div->getElementsByTagName('table')->item(0);

$toFind = "Bayern";
$toFindRowNode = null;

$tbody = null;
if ($table->hasChildNodes())
    $tbody = $table->childNodes->item(1);
$nodeList = $tbody->childNodes;
$nodeList_index = $nodeList->length;
#echo "Row count: ".$nodeList_index . '<br />'."\r\n";
while (--$nodeList_index > -1)
{
    #echo '<br />'."\r\n";
    #echo '================<br />'."\r\n";
    #echo 'Examining row ' . $nodeList_index .'<br />'."\r\n";
    $row = $nodeList->item($nodeList_index);
    #echo $row->nodeValue . ' vs. ' .$row->textContent; <-- both equal!
/*
    $cols = $row->childNodes;
    $cols_index = $cols->length;
    while (--$cols_index > -1)
    {
        $col = $cols->item($cols_index);
	#echo $col->ownerDocument->saveHTML($col);
        #echo $col->ownerDocument->documentElement->nodeValue;
        $text = dom_get_text($col); 
*/
        $text = $row->textContent;
        $i = strpos($text, $toFind); 
        if ($i !== false)
        {
            #echo 'Found ' . $toFind . ' in ' ."'" . $text. "' on position " . $i . ".\r\n";
            $toFindRowNode = $row;
            break;
        }
/*
    }
*/
}


// Skip first child as this is the row label: (else it'd be -1)
$index = 0;
$cols_index = $index;
$cols = $toFindRowNode->childNodes;
$cols_count = $cols->length;
$output_counter = 0;
$line_break_row_count_interval = 2;
$holidaysParsed_length = sizeOf($holidaysParsed);

while (++$index < $cols_count)
{
    // unlikely:
    if ($cols_index > $holidaysParsed_length - 1)
    {
        #echo 'Attention: More columns ('.$cols_index.') than holidays parsed in total (' . $holidaysParsed_length . ').<br />'."\r\n";
        break ;
    }

    $col = $cols->item($index);
    if ($col->nodeType != XML_ELEMENT_NODE)
        continue;

    // Only here we advance by one column: (The rest of the nodes iterated over are just nodes due to spaces inbetween elements or similar.)
    ++$cols_index;
    // skip some holidays that are not available:
    $holidaysCurrent = $holidaysParsed[$cols_index];
    if (array_search($holidaysCurrent, $holidaysWanted) !== false)
    {
        #echo 'Found holidays: ' . $holidaysCurrent . '<br />'."\r\n";
    }
    else 
    {
        continue;
    }


    // PARSE DATE:
    #echo $col->ownerDocument->saveHTML($col);
    $holidays_date_interval = trim(get_text_from_node($col));
    #->textContent;#nodeValue;
    

    if (($output_counter  % $line_break_row_count_interval) == 1)
    {
    ?>
        <td class="boT_white">
            <strong><?php echo $holidaysCurrent; ?></strong>
        </td>
        <td class="bgGrey boT_white">
            <!--
            $day.$month.<?php echo $year ?> - $day.$month.<?php echo $year ?>
            -->
            <?php echo $holidays_date_interval; ?>
        </td>
    <?php
    }
    else
    {
    ?>
        <td class="boB_blue"><strong><?php echo $holidaysCurrent; ?></strong></td>
        <td class="boB_blue">
            <!--
            14.04.<?php echo $year ?> - 26.04.<?php echo $year ?>
            -->
            <?php echo $holidays_date_interval; ?>
        </td>
        
    <?php
    }


    // Every two columns a line break: (but not the last)
    if (($output_counter % $line_break_row_count_interval) == 1)
    {
    ?>

       <?php
       // Are we already at the second 
       if ($cols_index < $cols_count - 1)
       {
       ?>
        </tr>
           <tr>
       <?php
       }
    }

    ++$output_counter;

}
?>

</tr>
</tbody></table>


<style type="text/css">/*<[CDATA[*/
 table { background-color: #EDF8FB; }
 .txtCen { text-align: center; }
 .radius { -moz-border-radius: 1%;   -webkit-border-radius: 1%;   -o-border-radius: 1%;   -khtml-border-radius: 1%;   border-radius: 1%;  }
  /*table.shadow_blue_ tr:nth-child(even) { background-color: #EFFAFD; }
  table.shadow_blue_ tr:nth-child(even) td { background-color: #EFFAFD; }*/
  table.shadow_blue_ tr:hover { background-color: #EFFEFF; }
  tr.labelrow, tr.labelrow td { background-color: #FFFFFF; }

  /*tr-linieneffect*/
  table#ferientermine tr { margin: 0; }
  table#ferientermine tr td { margin-bottom: 0; }
  table#ferientermine tr ~ tr { margin-top: 0; margin-bottom: 0;}
 .boT_blue { border-top: 1px solid #BFBBFC; }
 .boB_blue { border-bottom: 1px solid #BFBBFC; }
 .boT_white { border-top: 1px solid white; }
 .boB_white { border-bottom: 1px solid white; }
 .grey   { color: #DDDDDD; }
 .bgBlack { background-color: rgb(30,30,32); }
 .bgLBlue { background-color: #EDF8FB; }
 .shadow_blue_, .shadow_blue_:hover {
   -moz-box-shadow: 1px 1px 4px black;
   -webkit-box-shadow: 1px 1px 4px black;
   -o-box-shadow: 1px 1px 4px black;
   -khtml-box-shadow: 1px 1px 4px black;
   -ms-box-shadow: 1px 1px 4px black;
   box-shadow: 1px 1px 4px black;
   margin: 55px -50px 1%;
   width: 108%;
   padding: 0 15px 15px;
   z-index: 100;
   overflow: visible;
   position: relative;
 }
 div#post-258 { overflow: visible; }
 div.entry-content { overflow: visible; }
 div#content { overflow: visible !important; }
/*---- Organisationsklassen ---------------------------------------------------------------------*/
a[href="#"], .fire { color: firebrick; }
.trenn1 { border: 0px dashed #cccccc; width: 100%; margin-right: 0px; height: 1px; background-color: #cccccc; text-align: center; }
.trenn1 { display: none; }
table hr.trenn1 { display: inline !important; } /* first hr.trenn1 is somehow generated wrongly ..*/
.anno { color:#999999;size:0.7em; }
.green { color: #00e000; }
.forest { color: #009000; }
.floatR { float: right; }
/*]]>*/</style>
<?php

function dom_find_all_text_nodes($node)
{
    echo 'dom_find_all_text_nodes(): Line:'.__LINE__.'<br />'."\r\n";
    print_r($node);
    echo '<br />'."\r\n" . 'XML representation: ' . ($node->ownerDocument->saveXML($node)) . '<br />'."\r\n";
    if (!isset($node))
        return array();
    if ($node->nodeType == XML_TEXT_NODE)
        return array($node);

    //print_r($node);
    $nodes = array();
    
    $nodeList = $node->childNodes;
    #$nodeList_index = $nodeList->length; <-- Attention: Here the text order is messed up.
    $nodeList_index = -1;
    while (++$nodeList_index < $nodeList->length)
    {
        $childNode = $nodeList->item($nodeList_index);
        if ($childNode->nodeType != XML_TEXT_NODE)
        {
            $child_childTextNodes = dom_find_all_text_nodes($childNode);
            print_r($child_childTextNodes);
            $nodes = array_merge($nodes, $child_childTextNodes);
            #continue;
        }
        else
            $nodes[] = $childNode;
    }
    print_r($nodes);
    return $nodes;
}
function get_text_from_node_recursively($node)
{
    echo 'dom_get_text(): Line:'.__LINE__.'<br />'."\r\n";
    echo $node->ownerDocument->saveHTML($node);
    $string = "";
    #$nodes = dom_find_all_text_nodes($node);
    // TODO HOW CONCATENATE TEXT IF MIXED CHILD CONTENT TYPES, e.g. OBJECT TREE and TEXT NODE?
    // Here a workaround:
    $nodes = dom_find_all_nodes_with_text_nodes_as_children($node);
    // Then iterate these found elements in the correct order, and remove all elements that are no text nodes. TODO TODO <-- this should work!
    $nodes_count = sizeOf($nodes);
    $nodes_index = -1;
    while (++$nodes_index < $nodes_count) // iteration direction matters!
    {
       $n = $nodes[$nodes_index];
       #echo $n;
       #echo $n->ownerDocument->documentElement->nodeValue;
       #$s = (string)$n;
       #print_r($n);
       $s = get_text_from_node($n); 

       #$s = $n->nodeValue; // TODO textValue() ?
       #echo 'nodeValue: ' . $s . '<br />'."\r\n";
       #$s = $n->textContent;
       echo 'textContent: ' . $s . '<br />'."\r\n";
       $string .= $s;
    }
    #echo 'string: '.$string."\n";
    return $string;
}
# Non recursive, i.e. just one level.
# @return Only text child nodes' text concatenated.
function get_text_from_node($n)
{
    #echo 'nodeType: ' . $n->nodeType . ' == XML_TEXT_NODE '.XML_TEXT_NODE . '<br />'."\r\n";
    if ($n->nodeType == XML_TEXT_NODE)
        return $n->textContent;
    if (!$n->hasChildNodes())
        return '';
    

    if ($n->childNodes->length < 2)
        return $n->nodeValue; #firstChild->nodeValue;
    else
    {
        $string = "";
        $nodes_index = -1;
        $shallDeepcopy = true;
        $n_clone = $n->cloneNode($shallDeepcopy);
        $childNodesListClone = $n_clone->childNodes;
        // remove all nodes that are elements, i.e. not text nodes:
        while (++$nodes_index < $childNodesListClone->length) // iteration direction matters if text were to be concatenated within the loop!
        {
           $c = $childNodesListClone->item($nodes_index);
           if ($c->nodeType != XML_TEXT_NODE)
               $c->parentNode->removeChild($c);
        }
        $string = $n_clone->textContent;
        return $string;
    }
}
?>
