<?php
$locale['setup_0000'] = "PHPFusion installeren";
$locale['setup_0002'] = "Welkom bij PHPFusion installatie";
$locale['setup_0003'] = "Het installatieprogramma zal u begeleiden door de stappen die nodig zijn om PHPFusion CMS te installeren op uw server. Mocht u verdere hulp nodig hebben, kijk dan op onze <a class='strong' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=216' target='_blank'>Online Installation Documentatio</a>.";
$locale['setup_0005'] = " Ik heb de PHPFusion <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>Terms and Conditions of Use</a> gelezen en ga hiermee akkoord";
$locale['setup_0006'] = "PHPFusion 9 vereist minstens PHP 7.0. Zie de <a href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=215'>system requirements</a> pagina voor meer informatie.";
$locale['setup_0007'] = "Systemen met OPCache geïnstalleerd moeten <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> ingeschakeld hebben.";
$locale['setup_5000'] = "Om PHPFusion te kunnen gebruiken, dient u akkoord gaan met de voorwaarden van PHPFusion.";
$locale['setup_0010'] = "Huidige Build versie - ";
$locale['setup_0011'] = "nl";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "PHPFusion Upgrade";
$locale['setup_0022'] = "Welkom bij PHPFusion Upgrading Service";
$locale['setup_0023'] = "De upgrade service zal u begeleiden door de stappen die nodig zijn om PHPFusion CMS op uw server te upgraden. Volg deze stappen en controleer alle vereiste informatie.";
$locale['setup_0050'] = "Webserver";
$locale['setup_0051'] = "PHP-versie";
$locale['setup_0052'] = "PHP extensies";
$locale['setup_0053'] = "OPCache ondersteuning";
$locale['setup_0054'] = "PDO Database ondersteuning";
$locale['setup_0055'] = "PHP geheugenlimiet";
$locale['setup_0056'] = "Controleer Bestands vereisten";
$locale['setup_0101'] = "Introductie";
$locale['setup_0102'] = "Bestands en folder diagnose";
$locale['setup_0103'] = "Database-instellingen";
$locale['setup_0104'] = "Configuratie / Database setup";
$locale['setup_0105'] = "Configuratie Basis Systeem";
$locale['setup_0106'] = "Inloggegevens primaire superbeheerder";
$locale['setup_0107'] = "Laatste instellingen";
$locale['setup_0109'] = "De minimale versie van Apache die nodig is om PHPFusion te voeren zonder mod_rewrite in te schakelen is 2.2.16.";
$locale['setup_0110'] = "Vanwege de instellingen voor Server tokens in httpd.confg is het onmogelijk om de versie van Apache te bepalen zonder mod_rewrite, een minimale versie van 2.2.16 is nodig.";
$locale['setup_0112'] = "De phpinfo() functie is uitgeschakeld om veiligheidsredenen. Om de phpinfo() informatie van uw server te zien, verander uw PHP instellingen of neem contact op met uw server beheerder.";
$locale['setup_0113'] = "Uw PHP installatie is te oud. PHPFusion vereist een minimum versie van 5.6.39. PHP versies hoger dan 5.6.39 bieden ingebouwde SQL injectie bescherming voor mysql databases. Het wordt aanbevolen om bij te werken.";
$locale['setup_0114'] = "PHPFusion vereist dat u de PHP extensies inschakelt volgens onderstaande lijst";
$locale['setup_0115'] = "Ingeschakeld";
$locale['setup_0115a'] = "Niet Ingeschakeld";
$locale['setup_0116'] = "PHP OPCache caching kan de prestaties van uw site aanzienlijk verbeteren. Het is <strong>zeer aanbevolen</strong> om <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPCache</a> te hebben geïnstalleerd op uw server.";
$locale['setup_0118'] = "Uw webserver lijkt PDO (PHP Data Objects) niet te ondersteunen. Vraag uw hostingprovider of zij de native PDO extensie ondersteunen.";
$locale['setup_0119a'] = "Overweeg om uw PHP geheugenlimiet te verhogen tot %memory_minimum_limit om fouten in het installatieproces te voorkomen.";
$locale['setup_0119b'] = "Verhoog de geheugenlimiet door de memory_limit parameter in het [CFG_FILE_PATH] - bestand te bewerken en herstart uw webserver (of neem contact op met uw systeembeheerder of hostingprovider voor hulp).";
$locale['setup_0119c'] = "Neem contact op met uw systeembeheerder of hostingprovider voor hulp met het verhogen van uw PHP geheugenlimiet.";
// Buttons
$locale['setup_0120'] = "Configuratie afronden";
$locale['setup_0121'] = "Opslaan en doorgaan";
$locale['setup_0122'] = "Probeer opnieuw";
$locale['setup_0124'] = "Ga naar herstelopties";
$locale['setup_0125'] = "De-installatie is bezig, een ogenblik geduld...";
$locale['setup_0130'] = "Xdebug instellingen";
$locale['setup_0131'] = "xdebug.max_nesting_level is ingesteld op";
$locale['setup_0132'] = "Stel {%code%} in in uw PHP configuratie omdat sommige pagina's op uw PHPFusion site niet werken wanneer deze instelling te laag is.";
$locale['setup_0134'] = "Test voor schrijfpermissies geslaagd. In alle vereiste bestanden.";
$locale['setup_0135'] = "Om door te gaan met de setup moeten de volgende bestanden en mappen schrijfbaar zijn. Gelieve de bestanden te chmod-en naar 755 of 777 om door te gaan";
$locale['setup_0136'] = "Test voor schrijfpermissies niet geslaagd (Mislukt)";
$locale['setup_0137'] = "Test voor schrijfpermissies geslaagd (Gelukt)";
$locale['setup_0138'] = "Verbinding met database gemaakt";
$locale['setup_0139'] = "Database kolom selectie gemaakt";
$locale['setup_0140'] = "Database is beschikbaar en gereed voor installatie";
$locale['setup_0141'] = "Database machtigingen en toegang gecontroleerd";
$locale['setup_0142'] = "config.php bestand gemaakt";
$locale['setup_0143'] = "Het opgegeven tabelvoorvoegsel is al in gebruik en wordt uitgevoerd. Het installatieprogramma zal doorgaan met het bijwerken van de verschillen zoals vereist";
$locale['setup_0144'] = "Database diagnose voltooid";
// Step 1
$locale['setup_1000'] = "Kies aub een Taal";
$locale['setup_1001'] = "U kunt meer talen downloaden van de <a href='https://phpfusion.com/php_fusion_9_downloads.php' target='_blank'><strong>PHPFusion Official Support Site</strong></a> website";
$locale['setup_1002'] = "Welkom bij PHPFusion 9 Herstel Modus.";
$locale['setup_1003'] = "We hebben gedetecteerd dat er een bestaand systeem geïnstalleerd is. Kies een van de volgende opties om verder te gaan.";
$locale['setup_1004'] = "Nieuwe installatie";
$locale['setup_1005'] = "U kunt uw database verwijderen en wissen en een nieuwe installatie starten.";
$locale['setup_1006'] = "MAAK A.U.B.EEN BACKUP VAN UW CONFIG.PHP. HET ZAL VAN UW SYSTEEM WORDEN VERWIJDERD GEDURENDE DE-INSTALLATIE.";
$locale['setup_1007'] = "Verwijderen en opnieuw starten";
$locale['setup_1008'] = "Basis systeem Installatie programma";
$locale['setup_1009'] = "Wijzig basis systeem configuraties.";
$locale['setup_1010'] = "Ga naar het systeem Installatie programma";
$locale['setup_1011'] = "Wijzig primaire accountgegevens";
$locale['setup_1012'] = "Wijzig systeem Super Administrator details zonder wachtwoord te moeten herstellen of het bezit van SA account over te dragen aan een andere persoon.";
$locale['setup_1013'] = "Wijzig Super Admin Details";
$locale['setup_1014'] = "Herstellen.htaccess";
$locale['setup_1015'] = "Huidige bestand verwijderen en vervangen door een standaard versie van het .htaccess bestand";
$locale['setup_1017'] = "Annuleren en afsluiten van deze installatie";
$locale['setup_1018'] = "U kunt deze installatie nu afsluiten door op de knop hieronder te klikken. Dit zal uw config_temp.php bestand hernoemen naar config.php.";
$locale['setup_1019'] = "Installatie afsluiten";
$locale['setup_1020'] = ".htaccess bestand aangemaakt/bijgewerkt";
// Step 2
$locale['setup_1090'] = "Bestanden";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Database configuratie en Driver";
$locale['setup_1106'] = "Server- en Bestandsstructuur vereisten diagnose";
// Step 3 - Access criteria
$locale['setup_1200'] = "Database instellingen en server mappen";
$locale['setup_1201'] = "Voer uw MySQL database toegangsinstellingen in.";
$locale['setup_1202'] = "Database hostnaam:";
$locale['setup_1202a'] = "Database poort:";
$locale['setup_1202b'] = "Laat leeg als u geen andere poort gebruikt";
$locale['setup_1203'] = "Naam van databasegebruiker:";
$locale['setup_1204'] = "Database wachtwoord:";
$locale['setup_1205'] = "Database naam:";
$locale['setup_1206'] = "Tabelvoorvoegsel:";
$locale['setup_1207'] = "Cookie Voorvoegsel:";
$locale['setup_1208'] = "Database Stuurprogramma";
// Step 4 - Database Setup
$locale['setup_1210'] = "PHPFusion installatiefouten. Herstart de installatie.";
$locale['setup_1211'] = "Nieuwe PHPFusion-installatie voltooid. Ga naar de volgende stap.";
$locale['setup_1212'] = "Site- en Super Beheerder configuraties";
$locale['setup_1213'] = "Website informatie details";
$locale['setup_1214'] = "Site naam";
$locale['setup_1215'] = "PHPFusion Powered Website";
$locale['setup_1216'] = "PHPFusion is een lichtgewicht open source content management systeem (CMS) geschreven in PHP.";
$locale['setup_1217'] = "Uw account is bijgewerkt. Gebruik de nieuwe inloggegevens vanaf nu.";
$locale['setup_1220'] = "De naam van de database die u PHPFusion wilt laten uitvoeren";
$locale['setup_1221'] = "Uw MYSQL gebruikersnaam";
$locale['setup_1222'] = "...en uw MYSQL wachtwoord";
$locale['setup_1223'] = "Maak dit zeer uniek om je database te beveiligen";
$locale['setup_1224'] = "Browser Cookie Identifier voorvoegsel";
$locale['setup_1225'] = "bijv. localhost";
$locale['setup_1307'] = "Zorg ervoor dat config.php schrijfbaar is.";
$locale['setup_1310'] = "Kan geen verbinding maken met MySQL database.";
$locale['setup_1311'] = "De gekozen database bestaat niet.";
$locale['setup_1313'] = "Het opgegeven tabelvoorvoegsel is al in gebruik en wordt uitgevoerd. Er worden geen tabellen geïnstalleerd. Start opnieuw of ga verder naar de volgende stap.";
$locale['setup_1315'] = "Zorg ervoor dat uw MySQL-gebruiker de toestemming voor de geselecteerde database heeft om te lezen, te schijven en te verwijderen.";
$locale['setup_1317'] = "Zorg ervoor dat u alle velden voor de MySQL verbinding hebt ingevuld.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Inloggegevens primaire superbeheerder";
$locale['setup_1501'] = "Configureer uw superbeheerders account.";
$locale['setup_1504'] = "Gebruikersnaam:";
$locale['setup_1505'] = "Login wachtwoord:";
$locale['setup_1506'] = "Herhaal inlog wachtwoord:";
$locale['setup_1507'] = "Beheerderwachtwoord:";
$locale['setup_1508'] = "Herhaal Admin wachtwoord:";
$locale['setup_1509'] = "E-mailadres:";
$locale['setup_1510'] = "E-mailadres website:";
$locale['setup_1511'] = "Selecteer Website Regio:";
$locale['setup_1512'] = "Site taal Installaties:";
$locale['setup_1513'] = "Naam website eigenaar";
// Progress Reports
$locale['setup_1600'] = "Installeren ";
$locale['setup_1601'] = "Tabel structuur bijwerken op ";
$locale['setup_1602'] = "Nieuwe kolom toevoegen aan ";
$locale['setup_1603'] = "Populatie gegevens ";
// Step 6 - User details validation
$locale['setup_5010'] = "Gebruikersnaam bevat ongeldige tekens.";
$locale['setup_5011'] = "Gebruikersnaam veld mag niet leeg worden gelaten.";
$locale['setup_5012'] = "De wachtwoorden komen niet overeen.";
$locale['setup_5013'] = "Ongeldig inlogwachtwoord, gebruik alleen alfanumerieke tekens.<br />Wachtwoord moet minimaal 8 tekens lang zijn.";
$locale['setup_5015'] = "Uw twee admin wachtwoorden komen niet overeen.";
$locale['setup_5016'] = "Uw wachtwoord en admin wachtwoord moeten verschillend zijn.";
$locale['setup_5017'] = "Ongeldig admin wachtwoord, gebruik alleen alfanumerieke tekens.<br />Wachtwoord moet minimaal 8 tekens lang zijn.";
$locale['setup_5020'] = "Gebruikersnaam veld mag niet leeg worden gelaten.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Beheerders";
$locale['setup_3002'] = "Artikelen";
$locale['setup_3003'] = "Site-Banners";
$locale['setup_3004'] = "BB Codes";
$locale['setup_3005'] = "Zwarte lijst";
$locale['setup_3006'] = "Reacties";
$locale['setup_3007'] = "Eigen Pagina&rsquo;s";
$locale['setup_3008'] = "Database Backup";
$locale['setup_3010'] = "Downloads";
$locale['setup_3011'] = "FAQ&rsquo;s";
$locale['setup_3012'] = "Forum Beheer";
$locale['setup_3013'] = "Afbeeldingen";
$locale['setup_3014'] = "Infusies";
$locale['setup_3015'] = "Infusie Panelen";
$locale['setup_3016'] = "Leden";
$locale['setup_3018'] = "Nieuws";
$locale['setup_3019'] = "Panelen";
$locale['setup_3020'] = "Foto Albums";
$locale['setup_3021'] = "PHP Info";
$locale['setup_3022'] = "Enquêtes";
$locale['setup_3023'] = "Site Links";
$locale['setup_3024'] = "Smileys";
$locale['setup_3026'] = "Upgrade";
$locale['setup_3027'] = "Gebruikers Groepen";
$locale['setup_3029'] = "Web Links";
$locale['setup_3030'] = "Algemeen";
$locale['setup_3031'] = "Datum en tijd";
$locale['setup_3033'] = "Registratie";
$locale['setup_3035'] = "Diverse";
$locale['setup_3036'] = "Priv&eacute; Berichten";
$locale['setup_3037'] = "Gebruikers Velden";
$locale['setup_3038'] = "Forum Rangen";
$locale['setup_3041'] = "Gebruikersbeheer";
$locale['setup_3044'] = "Beveiliging";
$locale['setup_3047'] = "Admin Wachtwoord Reset";
$locale['setup_3048'] = "Fouten Log";
$locale['setup_3049'] = "Gebruikers Log";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Taal instellingen";
$locale['setup_3052'] = "Permalinks";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Thema Instellingen";
$locale['setup_3057'] = "Migratie Tool";
$locale['setup_3058'] = "Thema Instellingen";
$locale['setup_3059'] = "Fusion bestandsbeheerder";
// Multilanguage table rights
$locale['setup_3200'] = "Artikelen";
$locale['setup_3201'] = "Eigen Pagina&rsquo;s";
$locale['setup_3202'] = "Downloads";
$locale['setup_3203'] = "FAQ&rsquo;s";
$locale['setup_3204'] = "Forum Beheer";
$locale['setup_3205'] = "Nieuws";
$locale['setup_3206'] = "Foto Gallerij";
$locale['setup_3207'] = "Enquêtes";
$locale['setup_3208'] = "Email Sjablonen";
$locale['setup_3209'] = "Web Links";
$locale['setup_3210'] = "Site Links";
$locale['setup_3211'] = "Panelen";
$locale['setup_3212'] = "Forum Rangen";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Start";
$locale['setup_3302'] = "Downloads";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Discussieforum";
$locale['setup_3305'] = "Contact opnemen";
$locale['setup_3307'] = "Web Links";
$locale['setup_3308'] = "Foto Gallerij";
$locale['setup_3309'] = "Zoeken";
$locale['setup_3310'] = "Link inzenden";
$locale['setup_3311'] = "Nieuws inzenden";
$locale['setup_3312'] = "Artikel inzenden";
$locale['setup_3313'] = "Foto inzenden";
$locale['setup_3314'] = "Download inzenden";
$locale['setup_3315'] = "Inzendingen";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Blog inzenden";
$locale['setup_3318'] = "Blog Archief Paneel";
$locale['setup_3319'] = "Nieuwste onderwerpen";
$locale['setup_3320'] = "Deelgenomen Discussies";
$locale['setup_3321'] = "Onderwerpen die ik volg";
$locale['setup_3322'] = "Niet opgeloste onderwerpen";
$locale['setup_3323'] = "Niet opgeloste vragen";
$locale['setup_3324'] = "Start een nieuw Onderwerp";
$locale['setup_3325'] = "Laatste Artikelen";
$locale['setup_3326'] = "Laatste Downloads";
$locale['setup_3327'] = "FAQ inzenden";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigatie";
$locale['setup_3401'] = "Online gebruikers";
$locale['setup_3402'] = "Forum Onderwerpen";
$locale['setup_3404'] = "Welkomstbericht";
$locale['setup_3405'] = "Forum Onderwerpen lijst";
$locale['setup_3406'] = "Gebruikersinfo";
$locale['setup_3407'] = "Leden Poll";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Fouten";
$locale['setup_3501'] = "Downloads";
$locale['setup_3502'] = "Games";
$locale['setup_3503'] = "Grafisch";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Journaal";
$locale['setup_3506'] = "Leden";
$locale['setup_3507'] = "Mods";
$locale['setup_3508'] = "Films";
$locale['setup_3509'] = "Netwerk";
$locale['setup_3510'] = "Nieuws";
$locale['setup_3511'] = "PHPFusion";
$locale['setup_3512'] = "Veiligheid";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Thema's";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Super Beheerder";
$locale['setup_3601'] = "Beheerder";
$locale['setup_3602'] = "Moderator";
$locale['setup_3603'] = "Nieuweling";
$locale['setup_3604'] = "Junior lid";
$locale['setup_3605'] = "Lid";
$locale['setup_3606'] = "Senior lid";
$locale['setup_3607'] = "Veteraan";
$locale['setup_3608'] = "Guru";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Lachen";
$locale['setup_3621'] = "Knipogen";
$locale['setup_3622'] = "Triest";
$locale['setup_3623'] = "Fronzen";
$locale['setup_3624'] = "Geschoqueerd";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Geweldig";
$locale['setup_3627'] = "Grijnzen";
$locale['setup_3628'] = "Boos";
$locale['setup_3629'] = "Leuk vinden";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profiel";
$locale['setup_3641'] = "Contact informatie";
$locale['setup_3642'] = "Diverse informatie";
$locale['setup_3643'] = "Opties";
$locale['setup_3644'] = "Statistieken";
$locale['setup_3645'] = "Privacy";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Site-informatie";
$locale['setup_3661'] = "Discussies over het beheer van deze website";

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
$locale['setup_3650'] = "Welkom op uw site";
// Final message
$locale['setup_1700'] = "Installatie is voltooid";
$locale['setup_1701'] = "PHPFusion 9 is nu klaar voor gebruik. Klik op Voltooien om uw config_temp.php bestand te herschrijven naar config.php<br/>";
$locale['setup_1702'] = "<strong> Indien uw site goed blijkt te werken dient u uit veiligheidsoverwegingen setup.php van uw server te verwijderen en moet u config.php tegen schrijven beveiligen (CHMOD 644).</strong>";
$locale['setup_1703'] = "Dank u wel voor het kiezen van PHPFusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Email Sjablonen";
$locale['setup_3801'] = "Notificatie bij niew PB";
$locale['setup_3802'] = "Je hebt een nieuw privé bericht van [USER] op [SITENAME]";
$locale['setup_3803'] = "Hallo [RECEIVER],<br/>
U heeft een nieuw priv&eacute; bericht ontvangen met het onderwerp [SUBJECT] van [USER] op [SITENAME]. U kunt uw priv&eacute; bericht lezen op [SITEURL]messages.php\\r<br/>
Bericht: [MESSAGE]<br/>
Indien u niet langer notificaties voor nieuwe priv&eacute; berichten per e-mail wilt ontvangen kunt u dit uitschakelen via het <strong>Opties Paneel</strong> in uw priv&eacute; berichten pagina.<br/>
Met vriendelijke groet,<br/>
[SENDER].";
$locale['setup_3804'] = "Notificatie bij nieuwe forum berichten";
$locale['setup_3805'] = "Notificatie van antwoord in forum - [SUBJECT]";
$locale['setup_3806'] = "Hallo [RECEIVER],<br/>
Er is een antwoord geplaatst in het forumonderwerp \\'[SUBJECT]\\' welke u volgt op [SITENAME]. U kunt de onderstaande link gebruiken om het antwoord te bekijken:<br/>
[THREAD_URL]<br/>
Indien u het onderwerp niet langer wenst te volgen, dan kunt u op de link \\'Volg dit onderwerp niet langer\\' klikken. U vindt de link bovenaan in het betreffende onderwerp.<br/>
Met vriendelijke groet,<br/>
[SENDER].";
$locale['setup_3807'] = "Contact formulier";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artikelen";
$locale['articles']['description'] = "Een standaard Documentatiesysteem.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Een standaard blogsysteem.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "Een standaard downloadsysteem.";
$locale['faqs']['title'] = "FAQ&rsquo;s";
$locale['faqs']['description'] = "Een kennisbank FAQ systeem.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "Een Bulletin Board Forum System.";
$locale['news']['title'] = "Nieuws";
$locale['news']['description'] = "Een Nieuws publicatie systeem.";
$locale['photos']['title'] = "Foto Gallerij";
$locale['photos']['description'] = "Een fotogalerij.";
$locale['polls']['title'] = "Enquêtes";
$locale['polls']['description'] = "Een Poll- en Gebruikersstemsysteem.";
$locale['weblinks']['title'] = "Web Links";
$locale['weblinks']['description'] = "Een Web Directory Systeem.";
$locale['install'] = "Installeer Basis";
