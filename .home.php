<?php
/*------------------*
 |overview.tpl.php -- 
 *------------------*/
?>

    <style type="text/css">/*<![CDATA[*/

	
	/*]]>*/</style>

<?php if (isset($_SESSION['usr'])) { ?>

    

    



    <div id="innerW" class="innerW inW">

    <?php include 'in/home.in.php'; ?>



    </div>











<?php 

}

else {//NOT LOGGED IN OVERVIEW ?>



<div>
        <h2>Herzlich Willkommen im Fitness-Stall Badwerk!</h2>
        <p>
	<div>Seit 1999 tummeln sich Reitsch&uuml;ler und seit 2004 auch kleine und gro&szlig;e Ferieng&auml;ste bei uns. Pr&uuml;fungen zum Steckenpferd, kleinen und gro&szlig;en Hufeisen finden seit 2005 regelm&auml;&szlig;ig statt.
	</div>
	<div style="">
	<!-- img_1608 -->
        <a href="./gallery/reitstall/img_1378.jpg" title="Draussen im Gr&uuml;nen macht die Theorie einfach mehr Spass.">
		<img class="ngg-singlepic ngg-left" src="./gallery/reitstall/thumbs/img_1471.jpg" alt="Draussen im Gr&uuml;nen macht die Theorie einfach mehr Spass." title="Draussen im Gr&uuml;nen macht die Theorie einfach mehr Spass."/>
	</a>
	<!--<a href="./gallery/auswahl/badwerk_pause.jpg" title="">-->
    <a href=".sheep/cat-Lamm__name-Lamm__geburt-2014__stockmass-0_40m/Lur_Gaenseblumen_Wiese_gruen__Foto2092.jpg" title="" alt="">
	<!-- w165 h240 -->
		<!--<img class="ngg-singlepic ngg-left" src="./gallery/auswahl/badwerk_pause.jpg" alt="" title=""/>-->
		<img class="ngg-singlepic ngg-left" src=".sheep/cat-Lamm__name-Lamm__note-2_Tage_alt,_Geburt_2014__stockmass-0_40m/Lur_Gaenseblumen_Wiese_gruen__Foto2092.jpg" alt="" title=""/>
	</a>
	<a href="./gallery/reitstall/img_1255.jpg" title="">
		<img class="ngg-singlepic ngg-left" src="./gallery/reitstall/thumbs/img_1255.jpg" alt="" title=""/>
	</a>
	</div>
	<div style="display:block;">
        Enten, mehrere Schafe, viele Katzen, gelegentlich Rehe, unser Labrador Phil und &uuml;ber ein Dutzend Pferde bev&ouml;lkern unseren Hof. Bis Oktober 2018 standen zus&auml;tzlich 30 Milchk&uuml;he mit Nachzucht in unserem Stall.
	</div>
	<div style="">
        <a href="./gallery/reitstall/img_1619.jpg" title=""><!--1623-->
		<img class="ngg-singlepic ngg-left" src="./gallery/reitstall/thumbs/img_1619.jpg" alt="" title=""/>
	</a>
	<a href="./gallery/auswahl/georg.jpg" title="">
		<img class="ngg-singlepic ngg-left" src="./gallery/auswahl/georg.jpg" alt="" title=""/>
	</a>
	<a href="./gallery/auswahl/badwerk_kaelbchen.jpg" title="">
		<img class="ngg-singlepic ngg-left" src="./gallery/auswahl/badwerk_kaelbchen.jpg" alt="" title=""/>
	</a>
	</div>
	<div style="display:block;">
        Und dann nat&uuml;rlich wir, die Zweibeiner: Finn, Marietta, gelegentlich Anuschka und Jan, sowie Andrea und Georg Waibl. Nicht zu vergessen unsere Oma, Rosina Waibl.</div>
	</p>
        <p><strong>Wir alle freuen uns &uuml;ber Euren Besuch!</strong></p>
</div>




















<?php }//NOT LOGGED IN OVERVIEW -END ?>




