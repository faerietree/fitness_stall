<div id="footer" class="footW">
    <ul id="quicklinks" class="clearBoth">
        <?php if (false && !isset($_SESSION['usr']) && (isset($_GET['id']) && $_GET['id'] != 'overview') ): ?>
        <!-- <li>[ </li> -->
        <li><a href="?id=login">Login</a></li><li> | </li>
        <li><a href="?id=register">Registrieren</a></li><li> | </li>
        <?php else: ?>
        <li class="fillOverview"></li>
        <!-- <li>[ </li> -->
        <?php endif ?>
        <li><span id="copyright">&copy; Fitness-Stall Badwerk</span> <!--<span class="meta-sep">|</span>-->
        </li><li> | </li>
        <li>created by <a href="http://www.studio7media.de/" target="_blank">Achim 
    Juhl</a>, <a href="http://opensourceecology.de/">Fairytale Productions</a>, <a href="http://diekretzschmars.de/wordpress/themes/dkret-theme/" rel="designer">dkret3</a>
        </li><li> | </li>
        <li><a href="?id=kontakt">Kontakt</a></li>
        <!-- <li> ]</li> -->
    </ul>
</div>
