<?php
/*------------------*
 |kontakt.tpl.php -- 
 *------------------*/
?>


<!-- FOR THIS PAGE SPECIFIC STYLE ET ALIA GOES HERE -->
<?php if (isset($_SESSION['usr'])) { ?>


    <div id="innerW" class="innerW inW">

	<?php include 'in/overview.in.tpl.php'; ?>

    </div>


	<?php 
}
else {//NOT LOGGED IN OVERVIEW ?>




<div class="main">

    <div class="content moretext bodyMiddleOnly">

        <div class="maintext">
		<p>
		Wenn Sie mehr Informationen w&uuml;nschen,  rufen Sie uns doch einfach unter folgender Telefonnummer an:
		</p>
        <p> 
            <strong>Tel.: 08860 - 8312</strong>
        </p>
        <p>
            oder senden sie uns eine email an:
        </p>
        <p>
            <a href="mailto:fitness-stall@web.de"> fitness-stall@web.de</a>
        </p>
        <p>
            <strong>Impressum</strong>
            <p>
            Copyright &copy; <?php echo now('year'); ?> Fitness-Stall Badwerk
            Alle Rechte vorbehalten.
            </p>
        </p>
        <p>
        Verantwortlich gem&auml;&szlig; &#x00A7; 55 RfStV und &#x00A7; 5 TMG ist <!-- Paragraph-Symbol in UNICODE, see: http://www.tamasoft.co.jp/en/general-info/unicode.html -->
        <strong>Waibl Georg</strong><br />
        <strong>Badwerk1</strong><br />
        <strong>86975 Bernbeuren</strong>
        </p>

        <p>
        Unternehmensdaten: UST-IdNr. DE 168/191/87820<!-- 168/284/70071 -->
        </p>
        
        <p>
        <div>Haftungsausschluss:</div>
        Trotz sorgf&auml;ltiger inhaltlicher Kontrolle kann keine Haftung f&uuml;r Inhalte externer Links &uuml;bernommen werden. F&uuml;r die Inhalte der verlinkten Seiten sind ausschlie&szlig;lich deren Betreiber verantwortlich.
        </p>
        
        <p>
        Webmaster: <a href="mailto:achim.juhl@gmail.com" target="_blank">achim.juhl&lt;at&gt;gmail.com</a> & <a href="mailto:fitness-stall@web.de">fitness-stall&lt;at&gt;web.de</a>
        </p>


		</div>
	</div>	
</div>	
	
<?php }//NOT LOGGED IN OVERVIEW -END ?>








