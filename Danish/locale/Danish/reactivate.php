<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/reactivate.php
| Author: Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
// Error messages
$locale['500'] = "Der opstod en fejl";
$locale['501'] = "Genaktiveringslinket du har trykket på er ikke længere gyldigt.<br/><br/>
Kontakt sidens administrator via <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> hvis du vil forespørge om manuel genaktivering.";
$locale['502'] = "Genaktiveringslinket du har trykket på er ikke gyldigt!<br/><br/>
Kontakt sidens administrator via <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> hvis du vil forespørge om manuel genaktivering.";
$locale['503'] = "Det genaktiveringslink du fulgte kunne ikke genaktivere din konto.<br/>
Måske er din konto allerede blevet aktiveret igen, og i så fald bør du være i stand til at <a href='".$settings['siteurl']."login.php'>logge ind her</a>.<br/><br/>
Hvis du ikke kan logge ind nu, kan du kontakte sidens administrator på <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> 
hvis du vil anmode om en manuel genaktivering.";
$locale['504'] = "Konto genaktiveret p� ".$settings['sitename'];
$locale['505'] = "Hej [USER_NAME],\n
Din brugerkonto på ".$settings['sitename']." er blevet genaktiveret. Vi håber at se dig oftere på hjemmesiden.\n\n
Med venlig hilsen\n\n
".$settings['siteusername'];
$locale['506'] = "Genaktiveret af bruger.";
?>