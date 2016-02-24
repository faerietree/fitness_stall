<?php
/*------------------*
 |Aktuelles.php 
 *------------------*/
if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include $_SERVER['SCRIPT_NAME'] . ".in.tpl.php"; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main limitImageSize Aktuelles">



        <div class="maintext">


        <div style="border: 1px solid inset; padding: 1em;">        

        <a href="gallery/tipi_from_west.jpg">
            <img src="gallery/.preview__tipi_from_west.jpg" alt="" align="right" />
        </a>
        
        <a href="gallery/tipi_from_west_far.jpg">
            <img src="gallery/.preview__tipi_from_west_far.jpg" alt="" align="right" />
        </a>

        <a href="gallery/tipi_inside.jpg">
            <img src="gallery/.preview__tipi_inside.jpg" alt="" align="right" />
        </a>
        

        <h3>Themengeburtstage: Indianer im Tipi</h3>
        <p>
        <strong>Dauer:</strong> ca. 4 Stunden
        </p>
        <p><strong>Inhalt:</strong> Kopfschmuck basteln, Naturfarben herstellen, Ponies bemalen, Pony-Parcour bewältigen (Wanderung);</p>
        <p><strong>Kosten:</strong> 200,- €</p>
        <p>Maximal 10 Personen ohne Verpflegung, evtl. Lagerfeuer oder Bogenschießen.</p>
        </div>


        <div style="border: 1px solid inset; padding: 1em;">        

        <a href="gallery/erlebnis_deko_tannen.jpg">
            <img src="gallery/.preview__erlebnis_deko_tannen.jpg" alt="" align="right" />
        </a>
        
        <h3>Mit allen Sinnen</h3>
        <p>
        <strong>Dauer:</strong> ca. 4 Stunden
        </p>
        <p><strong>Inhalt</strong> (Wahl und Kombination nach Absprache): Memory (Wald, Wiese), Balance, Mandala legen, Geschicklichkeitsspiel, Fühl-Parcour, Seilspiele, je nach Jahreszeit Früchte, Blüten oder Kräuter sammeln + verarbeiten, Schnitzen, Wolle färben oder filzen, Käseherstellung oder Naturmaterialien sammeln und Bilder weben.
        </p>
        <p><strong>Kosten:</strong> 200,- € für 10 Personen, jede weitere Person 20,- €, maximal jedoch 14 Personen.
        </p>

		</div>
		
        
		
		
	</div>	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END
?>

