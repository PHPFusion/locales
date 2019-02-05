<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/blacklist.php
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
// Delete blacklisted user
$locale['400'] = "Ophæv udelukkelse af bruger";
$locale['401'] = "Brugerens udelukkelse er ophævet";
$locale['402'] = "Tilbage til administration af udelukkelse";
$locale['403'] = "Tilbage til administrationsside";
$locale['404'] = "Indtast venligst udeluk IP eller udeluk mailadresse";
$locale['405'] = "Udeluk mailadresse er ikke en gyldig mailadresse.";
// Add/Edit Blacklist Titles
$locale['420'] = "Udeluk bruger";
$locale['421'] = "Rediger oplysninger for udelukket bruger";
// Add/Edit blacklist form
$locale['440'] = "Når du indtaster en IP adresse her, vil det forhindre brugere der anvender den IP-adresse i at besøge siden. Du kan enten indtaste en fuld IP-adresse, f. eks. <strong>123.123.123.123</strong>, eller en del af en IP-adresse, f. eks.
<strong>123.123.123 eller 123.123</strong>.<br/><br/>
BEMÆRK: IPv6-adresser konverteres til fuld længde her på siden, dvs. at <strong>ABCD:1234:5:6:7:8:9:FF</strong> vil blive vist som <strong>ABCD:1234:0005:0006:0007:0008:0009:00FF</strong>. Blandede IP-adresser (der indeholder både en IPv6-del og en IPv4-del) bliver ikke kontrolleret for delvis overensstemmelse.
<br/><br/>
Når du indtaster en mailadresse her, vil det forhindre besøgende på siden i at oprette sig som brugere med den adresse. Du kan indskrive en fuld mailadresse - f. eks. <strong>foo@bar.com</strong>, eller et domænenavn - f. eks. <strong>bar.com</strong>";
$locale['441'] = "Udeluk IP-adresse <strong>eller</strong> ";
$locale['442'] = "Udeluk mailadresse:";
$locale['443'] = "Årsag til udelukkelse";
$locale['444'] = "Udeluk bruger";
// Current blacklisted users
$locale['460'] = "Udelukkede brugere";
$locale['461'] = "Informationer om udelukkelse";
$locale['462'] = "Valgmuligheder";
$locale['463'] = "Ret";
$locale['464'] = "Slet";
$locale['465'] = "Der er aktuelt ingen udelukkede brugere.";
$locale['466'] = "N/A";
$locale['467'] = "Administrator";
$locale['468'] = "Dato";
/*
// IPv6 secific
$locale['480'] = "IPv6 options";
$locale['481'] = "The specified IPv6 address contains a shortcut (::) therefore cannot be determined unequivocally.";
$locale['482'] = "Which version would you use?";
$locale['483'] = "Save";
*/
?>