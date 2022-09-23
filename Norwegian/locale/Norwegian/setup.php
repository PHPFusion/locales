<?php
$locale['setup_0000'] = "PHPFusion Versjon 9 innstallasjon";
$locale['setup_0002'] = "Velkommen til innstallasjonsprogrammet for PHPFusion 9.00";
$locale['setup_0003'] = "Guiden her vil føre deg gjennom de nødvendige trin til innstallasjonen av CMS løsningen PHPFusion på din server. Har du bruk for mere hjelp, så se våres online <a class='strong' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=208'>innstallasjonshjelp</a>.";
$locale['setup_0005'] = " Jeg har lest og akseptert de relevante PHPFusion <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>betingelser</a>";
$locale['setup_0006'] = "PHPFusion 9 requires at least PHP 7.0. See the <a href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=215'>system requirements</a> page for more information.";
$locale['setup_0007'] = "Systems with OPCache installed must have <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> enabled.";
$locale['setup_5000'] = "For å kunne bruke PHPFusion, skal du akseptere betingelsene</a>.";
$locale['setup_0010'] = "9.0";
$locale['setup_0011'] = "no";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "PHPFusion Upgrade";
$locale['setup_0022'] = "Welcome to PHPFusion Upgrading Service";
$locale['setup_0023'] = "The upgrade service will guide you through the steps required to upgrade PHPFusion CMS on your server. Please follow these steps through and verify each information required.";
$locale['setup_0050'] = "Web Server";
$locale['setup_0051'] = "PHP Version";
$locale['setup_0052'] = "PHP Extension";
$locale['setup_0053'] = "OPCache Support";
$locale['setup_0054'] = "PDO Database Support";
$locale['setup_0055'] = "PHP Memory limit";
$locale['setup_0056'] = "Files Check Requirements";
$locale['setup_0101'] = "Trin 1: Inntroduksjon";
$locale['setup_0102'] = "System Requirements";
$locale['setup_0103'] = "Trin 3: Databaseoppsetning";
$locale['setup_0104'] = "Trin 4: Konfigurasjon / Oppsetning av database";
$locale['setup_0105'] = "Trin 6: Oppsetning av selve systemet";
$locale['setup_0106'] = "Trin 5: De viktigste administrator innformasjoner";
$locale['setup_0107'] = "Trin 7: Avsluttende oppsetning";
$locale['setup_0109'] = "The minimum version of Apache needed to run PHPFusion without mod_rewrite enabled is 2.4.";
$locale['setup_0110'] = "Due to the settings for Server tokens in httpd.confg, it is impossible to determine the version of Apache without mod_rewrite, a minimum version of 2.4 is needed.";
$locale['setup_0112'] = "The phpinfo() function has been disabled for security reasons. To see your server's phpinfo() information, change your PHP settings or contact your server administrator.";
$locale['setup_0113'] = "Your PHP installation is too old. PHPFusion requires at least a minimum of 7.0. PHP versions higher than 7.0 provide built-in SQL injection protection for mysql databases. It is recommended to update.";
$locale['setup_0114'] = "PHPFusion requires you to enable the PHP extension in the following list";
$locale['setup_0115'] = "Enabled";
$locale['setup_0115a'] = "Not Enabled";
$locale['setup_0116'] = "PHP OPCache caching can improve your site's performance considerably. It is <strong>highly recommended</strong> to have <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPCache</a> installed on your server.";
$locale['setup_0118'] = "Your web server does not appear to support PDO (PHP Data Objects). Ask your hosting provider if they support the native PDO extension.";
$locale['setup_0119a'] = "Consider increasing your PHP memory limit to %memory_minimum_limit to help prevent errors in the installation process.";
$locale['setup_0119b'] = "Increase the memory limit by editing the memory_limit parameter in the file [CFG_FILE_PATH] and then restart your web server (or contact your system administrator or hosting provider for assistance).";
$locale['setup_0119c'] = "Contact your system administrator or hosting provider for assistance with increasing your PHP memory limit.";
// Buttons
$locale['setup_0120'] = "Gjør konfigurasjonen ferdig";
$locale['setup_0121'] = "Neste";
$locale['setup_0122'] = "Forsøk igjen";
$locale['setup_0124'] = "Go to Recovery Options";
$locale['setup_0125'] = "Uninstalling in Progress. Please wait...";
$locale['setup_0130'] = "Xdebug settings";
$locale['setup_0131'] = "xdebug.max_nesting_level is set to";
$locale['setup_0132'] = "Set {%code%} in your PHP configuration as some pages in your PHPFusion site will not work when this setting is too low.";
$locale['setup_0134'] = "All required files passed the file writable requirements.";
$locale['setup_0135'] = "In order for setup to continue, the following files and folders should be writable. Please chmod the files to 755 or 777 to continue";
$locale['setup_0136'] = "Not Writable (Failed)";
$locale['setup_0137'] = "Writable (Pass)";
$locale['setup_0138'] = "Database connection established";
$locale['setup_0139'] = "Database column selection established";
$locale['setup_0140'] = "Database is available and ready for installation";
$locale['setup_0141'] = "Database permissions and access verified";
$locale['setup_0142'] = "config.php file created";
$locale['setup_0143'] = "The specified table prefix is already in use and is running. The installer will proceed with updating differences as required";
$locale['setup_0144'] = "Database Diagnostics Completed";
// Step 1
$locale['setup_1000'] = "Du må velge språkversjon (språk):";
$locale['setup_1001'] = "Hent flere lokale språkversjoner fra <a href='https://phpfusion.com/downloads.php#langpacks'><strong>PHPFusions offisielle støtteside</strong></a>";
$locale['setup_1002'] = "Velkommen til PHPFusion version 9.00 Opprettelse.";
$locale['setup_1003'] = "Vi kan se, at det allerede er en versjon av systemet installert.<br/><br/>Velg en blant nedenforstående allternativer for åt fortsette.";
$locale['setup_1004'] = "Installer";
$locale['setup_1005'] = "Du kan avinstallere og rense databasen og så starte opp en ny installasjon.";
$locale['setup_1006'] = "LAG FØRST EN SIKKERHETSKOPI AV CONFIG.PHP. DEN VIL BLI SLETTET UNDER AVINSTALLERINGEN.";
$locale['setup_1007'] = "Avinstaller og start forfra";
$locale['setup_1008'] = "Installasjonsfungsjon til kjernefungsjonene";
$locale['setup_1009'] = "Lag systemoppsetningen om.";
$locale['setup_1010'] = "Gå videre til systeminstallasjonen";
$locale['setup_1011'] = "Rediger innstillingene for den primære brukerkonto";
$locale['setup_1012'] = "Rediger verdiene for systemets superadministrator uten å gjenopprette kontoens passord eller uten å overføre eierskapet til en annen bruker.";
$locale['setup_1013'] = "Rediger data for superadministrator";
$locale['setup_1014'] = "Gjenoppbygg .htaccess";
$locale['setup_1015'] = "Slett den aktuelle filen og erstatt den med standarutgaven av filen .htaccess";
$locale['setup_1017'] = "Avbryt og forlat denne installatsjonsprosess";
$locale['setup_1018'] = "Du kan forlate installasjonen ved å klikke på knappen under. Gjør du det, blir filen config_temp.php døpt om til config.php.";
$locale['setup_1019'] = "Forlat installasjonsprogrammet";
$locale['setup_1020'] = ".htaccess file created/updated";
// Step 2
$locale['setup_1090'] = "Files";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Database Configurations and Driver";
$locale['setup_1106'] = "Diagnose på filstrukturen";
// Step 3 - Access criteria
$locale['setup_1200'] = "Oppsetning av database verdier og stier på serveren";
$locale['setup_1201'] = "Skriv inn adgangsopplysningene til din MySQL database.";
$locale['setup_1202'] = "Databasens servernavn:";
$locale['setup_1202a'] = "Database Port:";
$locale['setup_1202b'] = "Leave empty if you do not use another port";
$locale['setup_1203'] = "Databasens brukernavn:";
$locale['setup_1204'] = "Databasens passord:";
$locale['setup_1205'] = "Databasens navn:";
$locale['setup_1206'] = "Fornavn til tabeller:";
$locale['setup_1207'] = "Fornavn til cookie:";
$locale['setup_1208'] = "Skal PDO slås aktiveres";
// Step 4 - Database Setup
$locale['setup_1210'] = "Nei";
$locale['setup_1211'] = "Ja";
$locale['setup_1212'] = "Bruk det språk, som skal annvendes:";
$locale['setup_1213'] = "Sideeierens navn";
$locale['setup_1214'] = "Site Name";
$locale['setup_1215'] = "PHPFusion Powered Website";
$locale['setup_1216'] = "PHPFusion is a lightweight open source content management system (CMS) written in PHP.";
$locale['setup_1217'] = "Your account is updated. Please use the new credentials from now on.";
$locale['setup_1220'] = "The name of the database you want to run PHPFusion";
$locale['setup_1221'] = "Your MYSQL username";
$locale['setup_1222'] = "...and your MYSQL password";
$locale['setup_1223'] = "Make this very unique to secure your database";
$locale['setup_1224'] = "Browser Cookie Identifier Prefix";
$locale['setup_1225'] = "e.g. localhost";
$locale['setup_1307'] = "Kontroller at din config.php har de korrekte rettigheter.";
$locale['setup_1310'] = "Kunne ikke komme i kontakt med din MySQL database.";
$locale['setup_1311'] = "Den oppgitte MySQL database eksisterer ikke.";
$locale['setup_1313'] = "Det oppgitte tabellfornavn brukes allerede.";
$locale['setup_1315'] = "Du må sikre deg, at den opgitte bruker til databasen har lese, skrive og slette tillatelse i den oppgitte database.";
$locale['setup_1317'] = "Kontroller at du har utfylt alle feltene i forbindelse med tilkopling til databasen.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Primær superadministrator";
$locale['setup_1501'] = "Sett opp verdier for din primære superadministratorkonto.";
$locale['setup_1504'] = "Brukernavn:";
$locale['setup_1505'] = "Passord:";
$locale['setup_1506'] = "Gjenta passordet:";
$locale['setup_1507'] = "Administrator passord:";
$locale['setup_1508'] = "Gjenta administratorpassordet:";
$locale['setup_1509'] = "E-Post adresse:";
$locale['setup_1510'] = "Website Email address:";
$locale['setup_1511'] = "Select Website Region:";
$locale['setup_1512'] = "Site Language Installations:";
$locale['setup_1513'] = "Site Owner Name";
// Progress Reports
$locale['setup_1600'] = "Installasjonen er ferdig";
$locale['setup_1601'] = "PHPFusion version9.00 er nå klar til å bli tatt i bruk. Klikk på avslutt for å få lagrett din config_temp.php fil som config.php<br/>";
$locale['setup_1602'] = "<strong>NB: Når du første gang går inn på din nye side, så må du slette hele mappen /install og endre rettigheter på din config.php til 0644 av sikkerhetsmessige årsaker.</strong>";
$locale['setup_1603'] = "Takk fordi du valgte PHPFusion.";
// Step 6 - User details validation
$locale['setup_5010'] = "Brukernavnet inndeholder forbudte karakterer.";
$locale['setup_5011'] = "Brukernavnet må oppgis.";
$locale['setup_5012'] = "De to passordene er ikke identiske.";
$locale['setup_5013'] = "Passordet overholder ikke reglene. Det må kun brukes alfanumeriske karakter.<br />Og passordet må være på minst 8 tegn.";
$locale['setup_5015'] = "De to administrator passordene er ikke identiske.";
$locale['setup_5016'] = "Passord og administrator passordkan ikke være like.";
$locale['setup_5017'] = "Administrator passordet har feil format. Det må kun anvendes alfanumeriske karakterer.<br />Og administrator passordet må være på minst 8 tegn.";
$locale['setup_5020'] = "Det må oppgis en e-post adresse.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administratorer";
$locale['setup_3002'] = "Artikler";
$locale['setup_3003'] = "Bannerere";
$locale['setup_3004'] = "BB koder";
$locale['setup_3005'] = "Svarteliste";
$locale['setup_3006'] = "Kommentarer";
$locale['setup_3007'] = "Brukeropprettede sider";
$locale['setup_3008'] = "Database sikkerhetskopi";
$locale['setup_3010'] = "Nedlastinger";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Debatter";
$locale['setup_3013'] = "Bilder";
$locale['setup_3014'] = "Infusjoner";
$locale['setup_3015'] = "Infusjonselementer";
$locale['setup_3016'] = "Brukere";
$locale['setup_3018'] = "Nyheter";
$locale['setup_3019'] = "Elementer";
$locale['setup_3020'] = "Fotoalbums";
$locale['setup_3021'] = "Server Info";
$locale['setup_3022'] = "Brukeravstemninger";
$locale['setup_3023'] = "Interne lenker";
$locale['setup_3024'] = "Smilefjes";
$locale['setup_3026'] = "Oppgradering";
$locale['setup_3027'] = "Brukergrupper";
$locale['setup_3029'] = "Lenker";
$locale['setup_3030'] = "Hovedoppsetning";
$locale['setup_3031'] = "Tidspunkter og datoer";
$locale['setup_3033'] = "Brukeropprettelse";
$locale['setup_3035'] = "Diverse";
$locale['setup_3036'] = "Private beskjeder";
$locale['setup_3037'] = "Brukgerfelter";
$locale['setup_3038'] = "Debatt: Brukerkategorier";
$locale['setup_3041'] = "Brukeradministrasjon";
$locale['setup_3044'] = "Sikkerhet";
$locale['setup_3047'] = "Nullstill administrator passord";
$locale['setup_3048'] = "Feil logg";
$locale['setup_3049'] = "Bruker logg";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Språk oppsetning";
$locale['setup_3052'] = "Permalenker";
$locale['setup_3055'] = "Blogg";
$locale['setup_3056'] = "Tema Kustom";
$locale['setup_3057'] = "Migreringsverktøy";
$locale['setup_3058'] = "Tema oppsettning";
$locale['setup_3059'] = "Fusion File Manager";
// Multilanguage table rights
$locale['setup_3200'] = "Artikler";
$locale['setup_3201'] = "Brukeropprettede sider";
$locale['setup_3202'] = "Nedlastinger";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Debatter";
$locale['setup_3205'] = "Nyheter";
$locale['setup_3206'] = "Fotoalbum";
$locale['setup_3207'] = "Brukeravstemninger";
$locale['setup_3208'] = "E-Post maler";
$locale['setup_3209'] = "Lenker";
$locale['setup_3210'] = "Interne lenker";
$locale['setup_3211'] = "Elementer";
$locale['setup_3212'] = "Debatt: Brukerkategorier";
$locale['setup_3213'] = "Blogg";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Hjem";
$locale['setup_3302'] = "Nedlastinger";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Debattforum";
$locale['setup_3305'] = "Contact";
$locale['setup_3307'] = "Lenker";
$locale['setup_3308'] = "Fotoalbum";
$locale['setup_3309'] = "Search";
$locale['setup_3310'] = "Foreslå Link";
$locale['setup_3311'] = "Foreslå Nyheter";
$locale['setup_3312'] = "Foreslå Artikkel";
$locale['setup_3313'] = "Foreslå Foto";
$locale['setup_3314'] = "Foreslå Nedlasting";
$locale['setup_3315'] = "Brukerforslag";
$locale['setup_3316'] = "Meldingsboks";
$locale['setup_3317'] = "Foreslå Blogg";
$locale['setup_3318'] = "Blogg Arkiv Panel";
$locale['setup_3319'] = "Siste Tråder";
$locale['setup_3320'] = "Participated Discussions";
$locale['setup_3321'] = "Tråder jeg følger";
$locale['setup_3322'] = "Unanswered Threads";
$locale['setup_3323'] = "Unsolved Questions";
$locale['setup_3324'] = "Start a New Thread";
$locale['setup_3325'] = "Siste artikler";
$locale['setup_3326'] = "Siste Nedlastinger";
$locale['setup_3327'] = "Submit FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigasjon";
$locale['setup_3401'] = "Brukere pålogget";
$locale['setup_3402'] = "Forumtråder";
$locale['setup_3404'] = "Velkomstbeskjed";
$locale['setup_3405'] = "Liste over debattemner";
$locale['setup_3406'] = "Brukerinformasjon";
$locale['setup_3407'] = "Brukeravstemning";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Feil";
$locale['setup_3501'] = "Nedlastinger";
$locale['setup_3502'] = "Spill";
$locale['setup_3503'] = "Grafikk";
$locale['setup_3504'] = "Maskinvare";
$locale['setup_3505'] = "Journal";
$locale['setup_3506'] = "Brukere";
$locale['setup_3507'] = "Systemmodifikasjoner";
$locale['setup_3508'] = "Film";
$locale['setup_3509'] = "Nettverk";
$locale['setup_3510'] = "Nyheter";
$locale['setup_3511'] = "PHPFusion";
$locale['setup_3512'] = "Sikkerhet";
$locale['setup_3513'] = "Programvare";
$locale['setup_3514'] = "Temaer";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Superadministrator";
$locale['setup_3601'] = "Admininistrator";
$locale['setup_3602'] = "Moderator";
$locale['setup_3603'] = "Nytt medlem";
$locale['setup_3604'] = "Juniormedlem";
$locale['setup_3605'] = "Medlem";
$locale['setup_3606'] = "Erfaren bruker";
$locale['setup_3607'] = "Veteran";
$locale['setup_3608'] = "Fusioneer";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Smil";
$locale['setup_3621'] = "Blunk";
$locale['setup_3622'] = "Trist";
$locale['setup_3623'] = "Pannerynker";
$locale['setup_3624'] = "Sjokk";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Gøy";
$locale['setup_3627'] = "Høy latter";
$locale['setup_3628'] = "Sinna";
$locale['setup_3629'] = "Like";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profile";
$locale['setup_3641'] = "Kontaktinformasjon";
$locale['setup_3642'] = "Diverse informasjoner";
$locale['setup_3643'] = "Valg";
$locale['setup_3644'] = "Statistikk";
$locale['setup_3645'] = "Privat";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Site Information";
$locale['setup_3661'] = "Discussions regarding the management of this website";

// Stage 6 - User Fields
require_once __DIR__."/user_fields/user_birthdate.php";
require_once __DIR__."/user_fields/user_icq.php";
require_once __DIR__."/user_fields/user_location.php";
require_once __DIR__."/user_fields/user_sig.php";
require_once __DIR__."/user_fields/user_skype.php";
require_once __DIR__."/user_fields/user_theme.php";
require_once __DIR__."/user_fields/user_web.php";
require_once __DIR__."/user_fields/user_timezone.php";
require_once __DIR__."/user_fields/user_blacklist.php";

// Welcome message
$locale['setup_3650'] = "Velkommen til din side";
// Final message
$locale['setup_1700'] = "Setup is Complete";
$locale['setup_1701'] = "PHPFusion 9 is now ready for use. Click Finish to rewrite your config_temp.php file to config.php<br/>";
$locale['setup_1702'] = "<strong>Note: After you enter your site you should delete /install.php file and chmod your config.php back to 0644 for security reasons.</strong>";
$locale['setup_1703'] = "Thank you for choosing PHPFusion.";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "E-Post maler";
$locale['setup_3801'] = "Beskjed ved ny privat melding";
$locale['setup_3802'] = "Du har mottatt en ny privat melding fra [USER]. Den kan sees på [SITENAME]";
$locale['setup_3803'] = "Hei [RECEIVER],
Du har mottatt en ny privat melding med overskriften [SUBJECT] fra [USER] på [SITENAME]. Du kan se dine private meldinger på [SITEURL]messages.php

Beskjed: [MESSAGE]

Du kan deaktivere e-post beskjed i din profiladministrasjon.

Vennligst,
[SENDER].";
$locale['setup_3804'] = "Beskjed ved nye debattinndlegg";
$locale['setup_3805'] = "Det er kommet et nytt innlegg - [SUBJECT]";
$locale['setup_3806'] = "Hei [RECEIVER],

Det er blitt skrevet et innlegg i debatten \\'[SUBJECT]\\' som du følger på [SITENAME]. Du kan bruke følgende lenke til å se innlegget:

[THREAD_URL]

Hvis du ikke lenger ønsker den slags beskjeder, kan du klikke på lenken \\'Stopp med å følge denne debatt\\' i toppen av debatten.

Vennligst,
[SENDER].";
$locale['setup_3807'] = "Kontaktskjema";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artikler";
$locale['articles']['description'] = "Et dokumentasjonssystem.";
$locale['blog']['title'] = "Blogg";
$locale['blog']['description'] = "Et bloggsystem.";
$locale['downloads']['title'] = "Nedlastinger";
$locale['downloads']['description'] = "Et nedlastingssystem.";
$locale['faqs']['title'] = "FAQs";
$locale['faqs']['description'] = "Ofte stilte spørsmål.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "Et debattsystem.";
$locale['news']['title'] = "Nyheter";
$locale['news']['description'] = "En nyhetsløsning.";
$locale['photos']['title'] = "Fotoalbum";
$locale['photos']['description'] = "Et system til opprettelse av fotoalbums.";
$locale['polls']['title'] = "Brukeravstemninger";
$locale['polls']['description'] = "Et system til opprettelse av brukeravstemninger.";
$locale['weblinks']['title'] = "Lenker";
$locale['weblinks']['description'] = "Et system til håndtering av lenker.";
$locale['install'] = "Installer systemet";
