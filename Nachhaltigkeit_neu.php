<?php
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
<p>
    <strong>H&uuml;tten f&uuml;r Selbstversorger:</strong><br />
    Nachhaltige Materialien wie gesunder Innenverputz aus Lehm. Erschlossen mit Strom und Sanit&auml;ranlagen. Fragen Sie nach!<br />
</p>



<p>
    <strong>&Ouml;kologische Bewirtschaftung</strong> seit den 90ern:<br />
    Seit Oktober 2018 f&auml;hrt die Molkerei Andechs jedoch den Ort nicht mehr an, da ihnen zu abgelegen ist. Soviel sind Andechs nachhaltig bewirtschaftete Bergbauernbetriebe mit beinah Ganztagesweidehaltung also in Wirklichkeit wert!?<br />
</p>



<p>
    <strong><span style="color: ; font-weight: bold;" href="\">Salzgrotte:</span></strong><br />
    <p>Wir bieten gesunde Erholung f&uuml;r Mensch und Pferd! M&ouml;chten Ihre Tiere sich nicht auch in der wohltemperierten Grotte gemeinsam mit Ihnen regenerieren?<br />
</p>





        </div>


	</div>
</div>

<?php }//NOT LOGGED IN OVERVIEW -END ?>








