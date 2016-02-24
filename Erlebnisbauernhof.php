<?php
/*------------------*
 |Erlebnisbauernhof.php 
 *------------------*/
if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include $_SERVER['SCRIPT_NAME'] . ".in.tpl.php"; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main limitImageSize Erlebnisbauernhof">



    <div class="maintext">
        <a href="gallery/Zertifikat_Erlebnisbaeuerin_Andrea_Balzer.jpg">
            <img src="gallery/.preview__Zertifikat_Erlebnisbaeuerin_Andrea_Balzer.jpg" alt="" align="right" />
        </a>
        Nach 16-tägiger Ausbildung mit bestandener Prüfung dürfen wir uns als zertifizierter Erlebnisbauernhof bezeichnen.


        <h3>Unsere Betriebsschwerpunkte</h3>

        <ul>
            <li>Milchgewinnung aus Kuh und Schaf</li>
            <li>Reit- und Ferienbetrieb</li>
            <li>Grünland, Wald und Streuobstwiese</li>
        </ul>
        

        <h3>Unsere Themenschwerpunkte (Lernprogramme)</h3>
        <p>zirka 3 - 4 Stunden</p>
        <ul>
            <li>Mit allen Sinnen Wald und Wiese entdecken</li>
            <li>Schafe: Wollgewinnung und Verarbeitung</li>
            <li>Von der Milch zum Käse</li>
        </ul>



        <div>
        <a href=".sheep/.lamm/3xlamm__waermelampe__Foto1372.jpg">
            <img src=".sheep/.lamm/.preview__3xlamm__waermelampe__Foto1372.jpg" alt="" align="right" />
        </a>

        <h3>Unser Jahreskreis</h3>
        <p>"Rund ums Schaf"</p>

        <p>In jedem Monat starten wir mit einem Besuch im Schafstall, direkt anschließend folgen im:</p>
<!--
        <br />findet 1x monatlich entweder vormittags oder nachmittags statt.
        </p>
        <p><b>Dauer:</b> ca. 3 Stunden;</p>
        <p><b>Inhalt:</b>
        <u>jedes mal:</u>
        <ul><li>Besuch im Schafstall;</li>
            
        </ul>
        <u>monatlich:</u>
        <ul><li>Balance - Teppich, Baumstamm;</li>
            <li>Seilspiele</li>
            
        </ul>
        </p>
-->

        <a href="">
            <img src="" alt="" align="right" />
        </a>

        
        <ul>
            <li><strong>Januar:</strong> Spurensuche im Schnee</li>
            <li><strong>Februar:</strong> Baumschnitt</li>
            <li><strong>März:</strong> Lammgeburten</li>
            <li><strong>April:</strong> Kräuter-/Blütensuche</li>
            <li><strong>Mai:</strong> Wolle waschen und kardieren</li>
            <li><strong>Juni:</strong> Schafschur</li>
            <li><strong>Juli:</strong> Sommerfest, „Kräuterboschen“ binden</li>
            <li><strong>August:</strong> Ferien</li>
            <li><strong>September:</strong> Früchte sammeln, Weben</li>
            <li><strong>Oktober:</strong> Obstverarbeitung</li>
            <li><strong>November:</strong>  Weiden  flechten</li>
            <li><strong>Dezember:</strong> Winterfest, Weihnachtsgeschichte und Schnitzen</li>

        </ul>
        </div>

        
        <div>
        <a href="gallery/erlebnis_deko.jpg">
            <img src="gallery/.preview__erlebnis_deko.jpg" alt="" align="right" />
        </a>

        <h3>Kosten pro Vormittag von 9 bis 12 Uhr</h3>
        <p>1. - 11. Veranstaltung:</b> jeweils 190,- €</p>
        <p>1. Veranstaltung kostenlos entweder für die 3. oder 4. Schulklasse (wird vom bayerischen Staatsministerium in Höhe von Euro 170,- € für übernommen)</p>
        
        <p>Sämtliche Angebote (Monatsveranstaltungen) sind auch einzeln mit einem Aufschlag von Euro 10,- buchbar.
        </p>
        <p>Witterungsbedingte Änderungen sind möglich.
        </p>
        </div>

    </div>

</div>

<?php
}
?>
