<?php
/*------------------*
 |kontakt.tpl.php -- 
 *------------------*/
if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include 'in/' . getIfSet($_GET, 'id') . '.in.tpl.php'; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main">

    <div class="content moretext bodyMiddleOnly">



        <div class="maintext">
        
        
        <img src="images/horsehead_dreamboy.png" border="0" alt="" align="right" /><br />
        <br />&nbsp;<br />


<p>
    <strong>Reitunterricht:</strong><br />
    Einzel-und Gruppenstunden, Longen, gef&uuml;hrte Ausritte, Bodenarbeit.<br />
</p>



<p>
    <strong>Spielstunden</strong> f&uuml;r die Kleinsten ab 2 Jahre.<br />
    &nbsp;<br />
</p>



<p>
    <strong><a style="color: forestgreen; font-weight: bold;" href=".?page_id=258">Reiterferien:</a></strong><br />
    <p>Wir bieten Reiterferien f&uuml;r Kinder ab 6 Jahre im Zeitraum von M&auml;rz bis Mitte November.<br />

    1 Woche Reiterferien (Mo-Fr) Vollpension mit &Uuml;bernachtung im Mehrbettzimmer f&uuml;r 320.- Euro . <a href="?id=kontakt">Weitere Termine und Preise auf Anfrage!</a><br />&nbsp;<br />
    </p>
</p>



<p>
    <strong>Abzeichen: </strong><br />
    In den Herbstferien besteht die M&ouml;glichkeit, je nach Kenntnisstand und K&ouml;nnen, ein Motivationsabzeichen (Steckenpferd, kleines oder gro&szlig;es Hufeisen) abzulegen. Die H&ouml;he der Pr&uuml;fungsgeb&uuml;hr richtet sich nach der Teilnehmerzahl.<br />&nbsp;<br />
</p>



<p>
    <strong>Spezial:</strong><br />
    Bogenschie&szlig;en mit oder ohne Trainer nach Absprache.<br />&nbsp;<br /><br />
</p>



<p>
    <span style="color: forestgreen; font-weight: bold;">Neu:</span> <br />
    <span style="color:midnightblue;">Pfingstferien: </span>5 Tage 320 &#8364; + Verl&auml;ngerungsm&ouml;glichkeit: <span style="color: midnightblue;">55 &#8364; / Tag</span>   <br />
</p>        
        
        
        
        
        
        
        </div>
		
		
	</div>	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END ?>








