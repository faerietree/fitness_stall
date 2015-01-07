<?php
/*-----------------------------------------*
 | CopyRight (C) FairyTale Productions GbR |
 | CattleTool - db_connect.inc.php         |
 *-----------------------------------------*/

     // Konstanten
     define("DB_HOST", "mysql11.1blu.de");
     define("DB_USR", "s118002_1301150");
     define("DB_PASS", "cattletool007");
     // Verbindungsaufbau
     $mysqli = new MySQLi(DB_HOST, DB_USR, DB_PASS);
     if (mysqli_connect_errno()) {
       die ('Keine Verbindung zum Server! ..<br />=> Abbruch des Skriptes!\n'
            .'Fehlermeldung: '.mysqli_connect_error());
     }
     // DB-Auswahl
     $mysqli->select_db("db118002x1301150")
         or die ("Beim Zugriff auf die Datenbank ging etwas schief! :( ");
?>
