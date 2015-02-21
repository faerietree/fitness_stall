

<div id="topW" class="topW">




    <!-- header has a background depending on the previously randomly picked image. -->
    <a href="?id=home" id="header"><!-- onclick="location.href='http://www.fitness-stall.de' ">-->
        <!-- <img src="./img/logos/tree[d]_niceTree_logo.png" alt="" class="logo mA" /> -->
    </a>



    <!-- TOP NAV WRAPPER -->
    <!--
    <div class="topNavW">
        
        <?php if (isset($_SESSION['usr'])) { ?>
        <?php } ?>
        <!-- LOGO - ->
        <span class="logoW mA">
            <?php if (isset($_SESSION['usr'])) { ?>
            <!-- logout - ->
            <form id="usrRow" action="" method="post">
                <span class="">
                    <?php
                    $nick_ = $_SESSION['nick'];
                    if (empty($_SESSION['nick'])) {
                        $nick_ = 'Profil';
                    }
                    echo getA(addToQS('id','profile'),'','','noTD','','Profil')
                        .$nick_.getAE()
                        .' ('.$_SESSION['em'].')';
                    ?>
                </span>
                <input class="noBG" type="submit" name="task" value="logout" />
            </form>
            <?php } ?>
            
            
            
            
        </span>
        <!-- Umbruch - ->
        <div class="clearBoth"></div>
    </div>
    -->
    
    








</div>


