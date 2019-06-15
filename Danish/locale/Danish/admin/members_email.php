<?php
$locale['email_create_subject'] = "En brugerkonto er oprettet på [SITENAME]";
$locale['email_create_message'] = "Hej [USER_NAME]<br/>
Din brugerkonto på [SITENAME] er blevet oprettet.<br/>Du kan nu logge ind med følgende oplysninger:<br/>
Brugernavn: [USER_NAME]<br/>Kodeord: [PASSWORD]<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Din konto er blevet aktiveret på [SITENAME]";
$locale['email_activate_message'] = "Hej [USER_NAME]<br/>Din konto på [SITENAME] er nu blevet aktiveret.<br/>
Derfor kan du nu logge på siden med det brugernavn og det kodeord, du valgte ved oprettelsen.<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Det er nødvendigt at genaktivere kontoen på [SITENAME]";
$locale['email_deactivate_message'] = "Hej [USER_NAME]<br/>Der er gået [DEACTIVATION_PERIOD] dag(e) siden du sidst loggede ind på [SITENAME]. Din konto er derfor blevet sat som inaktiv, men alle oplysninger og alt indhold er intakt.<br/>
For at genaktivere din konto, skal du ganske enkelt klikke på følgende link: [REACTIVATION_LINK]<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_ban_message'] = "Hej [USER_NAME]<br/>Din konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] af følgende årsag:<br/>
[REASON]<br/> Hvis du vil have yderligere information om udelukkelsen, kan du kontakte administrator på [SITENAME].<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_secban_message'] = "Hej [USER_NAME]<br/>Din konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] på grund af at aktiviteter, du har udført eller aktiviteter knyttet til din konto betragtes som en sikkerhedsrisiko for siden.<br/>
Hvis du vil vide mere om denne sikkerhedsudelukkelse, kan du kontakte en administrator på [SITENAME].<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Din konto på [SITENAME] er blevet suspenderet";
$locale['email_suspend_message'] = "Hej [USER_NAME]<br/>
Din konto på [SITENAME] er blevet suspenderet af [ADMIN_USERNAME] indtil [DATE] (sidens tidszone) af følgende årsag:<br/>
[REASON]<br/>Hvis du vil vide mere om denne suspendering, så kontakt administrator på [SITENAME].<br/>Venlig hilsen<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Gensendt aktiveringslink - [SITENAME]";
$locale['email_resend_message'] = "Hej [USER_NAME]<br/>
Du har modtaget denne mail fordi du ikke har aktiveret din mailadresse på hjemmesiden - [SITENAME].<br/>Hvis du ikke aktiverer mailadressen indenfor et døgn, vil din registrering blive afvist.<br/>
Du er blevet registreret med følgende information:<br/>Brugernavn: [USER_NAME]<br/>
Du kan aktivere kontoen på dette link:<br/>[ACTIVATION_LINK]<br/>Med venlig hilsen<br/>[SITENAME]";
