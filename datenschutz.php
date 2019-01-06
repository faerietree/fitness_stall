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
		IP-Adressen sowie vom Browser übermittelte Daten (beispielsweise Browsertyp/-version, Betriebssystem) werden zur Verfolgung von Vergehen gespeichert.
		Es erfolgt keine Weitergabe an Dritte. Weitere Daten werden nicht erhoben. Weder Cookies noch externe Dienste wie Google Fonts, Analytics oder Piwik werden verwendet. Gemäß §16 TMG

		</div>
	</div>
</div>

<?php }//NOT LOGGED IN OVERVIEW -END ?>








