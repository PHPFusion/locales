<?php
/*
Nederlandse Locale Bestanden
Engels door Nick Jones (Digitanium)
E-mail: digitanium@php-fusion.co.uk
Web: http://www.php-fusion.co.uk
Vertaald door Paul Beuk (muscapaul) en Wim de Lange (Wanabo)
Nederlandstalige support site: http://www.phpfusion-nederlands.info
*/
// Locale Settings
// setlocale(LC_TIME, "nl","NL"); // Voor Windows Server
setlocale(LC_TIME, "nl_NL"); // Voor Linux Server
ini_set('default_charset', 'utf-8');
$locale['charset'] = "utf-8";
$locale['xml_lang'] = "nl";
$locale['tinymce'] = "nl";
$locale['phpmailer'] = "nl";
$locale['datepicker'] = "nl-nl";
$locale['datepicker_js'] = "DD-m-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "nl";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";

// Full & Short Months
$locale['months'] = "&nbsp|Januari|Februari|Maart|April|Mei|Juni|Juli|Augustus|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Maa|Apr|Mei|Jun|Jul|Aug|Sept|Okt|Nov|Dec";
$locale['weekdays'] = "Zondag|Maandag|Dinsdag|Woensdag|Donderdag|Vrijdag|Zaterdag";
// Timers
$locale['year'] = "jaar";
$locale['year_a'] = "jaren";
$locale['month'] = "maand";
$locale['month_a'] = "maanden";
$locale['week'] = "week";
$locale['week_a'] = "weken";
$locale['day'] = "dag";
$locale['day_a'] = "dagen";
$locale['hour'] = "uur";
$locale['hour_a'] = "uren";
$locale['minute'] = "minuut";
$locale['minute_a'] = "minuten";
$locale['second'] = "seconde";
$locale['second_a'] = "seconden";
$locale['just_now'] = "op dit moment";
$locale['now'] = 'nu';
$locale['ago'] = "geleden";
// Name
$locale['name'] = "Volledige Naam";
$locale['username_pretext'] = "Uw publieke gebruikersnaam is hetzelfde als uw profiel adres op: %s %s";
$locale['first_name'] = "Voornaam";
$locale['middle_name'] = "Tussenvoegsel";
$locale['last_name'] = "Achternaam";
// Standard User Levels
$locale['user0'] = "Publiek";
$locale['user1'] = "Lid";
$locale['user2'] = "Beheerder";
$locale['user3'] = "Superbeheerder";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gast";
$locale['user_anonymous'] = "Anonieme Gebruiker";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Actief";
$locale['status1'] = "Geband";
$locale['status2'] = "Nog te activeren";
$locale['status3'] = "Geschorst";
$locale['status4'] = "Veiligheids Verbanning";
$locale['status5'] = "Geannuleerd";
$locale['status6'] = "Anoniem";
$locale['status7'] = "Gedeactiveerd";
$locale['status8'] = "Inactief";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigatie";
$locale['global_002'] = "Geen links aangemaakt\n";
$locale['global_003'] = "Geen voorvertoning mogelijk";
// Users Online
$locale['global_010'] = "Gebruikers Online";
$locale['global_011'] = "Gasten online";
$locale['global_012'] = "Leden online";
$locale['global_013'] = "Geen leden online";
$locale['global_014'] = "Totaal aantal leden";
$locale['global_015'] = "Niet-geactiveerde leden";
$locale['global_016'] = "Nieuwste lid";
$locale['global_017'] = "Navigatie aan/uit";
// Forum Side panel
$locale['global_020'] = "Forum Onderwerpen";
$locale['global_021'] = "Nieuwste onderwerpen";
$locale['global_022'] = "Actiefste onderwerpen";
$locale['global_023'] = "Geen onderwerpen aanwezig";
$locale['global_024'] = "Deelgenomen Discussies";
$locale['global_027'] = "Niet opgeloste onderwerpen";
$locale['global_028'] = "Niet opgeloste vragen";
// Comments Side panel
$locale['global_025'] = "Laatste Commentaar";
$locale['global_026'] = "Geen commentaar beschikbaar";
// Articles Side panel
$locale['global_030'] = "Laatste Artikelen";
$locale['global_031'] = "Geen artikelen beschikbaar";
// Downloads Side panel
$locale['global_032'] = "Laatste Downloads";
$locale['global_033'] = "Geen Downloads beschikbaar";
// Welcome panel
$locale['global_035'] = "Welkom";
// Latest Active Forum Threads panel
$locale['global_040'] = "Hieronder de recente Forum onderwerpen. Het <u><i>complete</i></u> Forum overzicht staat &raquo;<a href='".BASEDIR."forum/index.php' class='capmain' title='".$settings['siteusername']." forum overzicht' style='text-decoration: blink'>hier</a>&laquo;.</td><td class='capmain' style='text-align:right;'><a class='capmain' href='http://telfort.gebruikers.eu' target='_blank' title=''>&copy;</a>";
$locale['global_041'] = "Mijn recente onderwerpen";
$locale['global_042'] = "Mijn recente berichten";
$locale['global_043'] = "Nieuwe berichten";
$locale['global_044'] = "Onderwerpen";
$locale['global_045'] = "X bekeken";
$locale['global_046'] = "Antw.";
$locale['global_047'] = "Laatste bericht";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Gepost";
$locale['global_050'] = "Auteur";
$locale['global_051'] = "Enquête";
$locale['global_052'] = "Verplaatst";
$locale['global_053'] = "U heeft nog geen onderwerpen in het forum gestart.";
$locale['global_054'] = "U heeft nog geen berichten in het forum geplaatst.";
$locale['global_055'] = "Er zijn %u nieuwe berichten sinds uw laatste bezoek.";
$locale['global_056'] = "Onderwerpen die ik volg";
$locale['global_057'] = "Opties";
$locale['global_058'] = "Stop";
$locale['global_059'] = "U volgt geen enkel onderwerp.";
$locale['global_060'] = "Stop met volgen van dit onderwerp?";
// News & Articles
$locale['global_070'] = "Gepost door ";
$locale['global_070b'] = "Toon alles gepost door %s";
$locale['global_071'] = "op ";
$locale['global_071b'] = "Autheur";
$locale['global_072'] = "Lees meer";
$locale['global_073'] = " reacties";
$locale['global_073b'] = " reactie";
$locale['global_074'] = " keer gelezen";
$locale['global_074b'] = " gelezen";
$locale['global_075'] = "Afdrukken";
$locale['print'] = "Print";
$locale['global_076'] = "Wijzigen";
$locale['global_077'] = "Nieuws";
$locale['global_078'] = "Er is nog geen nieuws geplaatst";
$locale['global_079'] = "In ";
$locale['global_080'] = "Nog niet gecategoriseerd";
$locale['global_081'] = "Nieuws Start";
$locale['global_082'] = "Nieuws";
$locale['global_083'] = "Laaste Update";
$locale['global_084'] = "Nieuws Categorie";
$locale['global_085'] = "Alle andere Categorie&euml;";
$locale['global_086'] = "Laatst geplaatste nieuws";
$locale['global_087'] = "Nieuws met de meeste commentaren";
$locale['global_088'] = "Hoogst gewaardeerde Nieuws";
$locale['global_089'] = "Wees de eerste om een commentaar te plaatsen op %s";
$locale['global_089a'] = "Wees de eerste om een waardeering te geven voor %s";
$locale['global_089b'] = "Miniatuur weergave";
$locale['global_089c'] = "Lijst weergave";
// Page Navigation
$locale['global_090'] = "Vorige";
$locale['global_091'] = "Volgende";
$locale['global_092'] = "Pagina ";
$locale['global_093'] = " van ";
$locale['global_094'] = " van de ";
// Guest User Menu
$locale['global_100'] = "Inloggen";
$locale['global_101'] = "Gebruikersnaam";
$locale['global_101a'] = "Geef gebruikersnaam";
$locale['global_101b'] = "Geef Email";
$locale['global_101c'] = "Geef Email of Gebruikersnaam";
$locale['global_102'] = "Wachtwoord";
$locale['global_103'] = "Onthouden";
$locale['global_104'] = "Inloggen";
$locale['global_105'] = "<font style='font-size:16px; font-weight:bold;'><b>Nog geen lid?</b></font><br /><br /><a href='".BASEDIR."register.php' class='side' title='Registreren'><font style='font-size:14px; font-weight:bold;'><b>&raquo; Registreer &laquo;</b></font></a><br />Als geregistreerd lid kunt u reageren en alle extra functies gebruiken.";
$locale['global_106'] = "Wachtwoord vergeten?<br />Verzoek <a href='".BASEDIR."lostpassword.php' class='side' title='Verzoek nieuw wachtoord'>nieuw</a> wachtwoord.";
$locale['global_107'] = "Aanmelden";
$locale['global_108'] = "Wachtwoord kwijt";
$locale['global_109'] = "Aanmelden";
// Member User Menu
$locale['global_120'] = "Pas us profiel pagina aan";
$locale['global_121'] = "Priv&eacute; Berichten";
$locale['global_122'] = "Ledenlijst";
$locale['global_123'] = "Beheerder Paneel";
$locale['global_124'] = "Uitloggen";
$locale['global_125'] = "U heeft %u nieuwe ";
$locale['global_126'] = "bericht";
$locale['global_127'] = "berichten";
$locale['global_128'] = "inzending";
$locale['global_129'] = "inzendingen";
// Poll
$locale['global_130'] = "Ledenenqu&ecirc;te";
$locale['global_131'] = "Stemmen";
$locale['global_132'] = "U dient in te loggen om te stemmen.";
$locale['global_133'] = "stem";
$locale['global_134'] = "stemmen";
$locale['global_135'] = "Stemmen: ";
$locale['global_136'] = "Gestart: ";
$locale['global_137'] = "Ge&euml;indigd: ";
$locale['global_138'] = "Enqu&ecirc;te-archief";
$locale['global_139'] = "Kies een enqu&ecirc;te uit de lijst om die te bekijken:";
$locale['global_140'] = "Bekijken";
$locale['global_141'] = "Enqu&ecirc;te bekijken";
$locale['global_142'] = "Er zijn nog geen enqu&ecirc;tes aangemaakt.";
$locale['global_143'] = "Waaerderingen";
// User Menu
$locale['UM060'] = "Inloggen";
$locale['UM061'] = "Gebruikersnaam";
$locale['UM061a'] = "Email";
$locale['UM061b'] = "Gebruikersnaam of Email";
$locale['UM062'] = "Wachtwoord";
$locale['UM063'] = "Onthouden";
$locale['UM064'] = "Inloggen";
$locale['UM065'] = "<font style='font-size:16px; font-weight:bold;'><b>Nog geen lid?</b></font><br /><br /><a href='".BASEDIR."register.php' class='side' title='Registreren'><font style='font-size:14px; font-weight:bold;'><b>&raquo; Registreer &laquo;</b></font></a><br />Als geregistreerd lid kunt u reageren en alle extra functies gebruiken.";
$locale['UM066'] = "Wachtwoord vergeten?<br />Verzoek <a href='".BASEDIR."lostpassword.php' class='side' title='Verzoek nieuw wachtoord'>nieuw</a> wachtwoord.";
$locale['UM067'] = "(niet aanbevolen op gedeelde of publiek computer)";
$locale['UM080'] = "Profiel aanpassen";
$locale['UM081'] = "Priv&eacute; Berichten";
$locale['UM082'] = "Ledenlijst";
$locale['UM083'] = "Beheerder Paneel";
$locale['UM084'] = "Uitloggen";
$locale['UM085'] = "U hebt %u nieuwe ";
$locale['UM086'] = "bericht";
$locale['UM087'] = "berichten";
$locale['UM088'] = "Gevolgde onderwerpen";
// Submit (news, blog, link, article)
$locale['UM089'] = "Inzenden...";
$locale['UM090'] = "Nieuws inzenden";
$locale['UM091'] = "Link inzenden";
$locale['UM092'] = "Artikel inzenden";
$locale['UM093'] = "Fhoto inzenden";
$locale['UM094'] = "Download inzenden";
$locale['UM095'] = "Blog inzenden";
$locale['UM102'] = "FAQ inzenden";
// User Panel
$locale['UM095'] = "Welkom: ";
$locale['UM096'] = "Persoonlijk menu";
$locale['UM097'] = "Kies taal";
// Gauges
$locale['UM098'] = "Berichten inbox:";
$locale['UM099'] = "Berichten outbox:";
$locale['UM100'] = "Berichten archief:";
// Keywords and Meta
$locale['tags'] = "Tags";
$locale['notfound'] = "Geen resultaten gevonden..";
$locale['sel_user'] = "Selecteer Gebruiker";
// Captcha
$locale['global_150'] = "Validatie Code:";
$locale['global_151'] = "Voer Validatie Code in:";
// Footer Counter
$locale['global_170'] = "uniek bezoek";
$locale['global_171'] = "unieke bezoeken";
$locale['global_172'] = "Verwerkingstijd: %s seconden";
$locale['global_173'] = "Zoekopdrachten";
$locale['global_174'] = "Geheugen gebruik";
$locale['global_175'] = "Gemiddelde: %s seconden";
$locale['global_176'] = "Privacy Policy";
// Admin Navigation
$locale['global_180'] = "Beheerder Index";
$locale['global_181'] = "Terug naar site";
$locale['global_182'] = "<strong>Waarschuwing:</strong> Beheerderwachtwoord niet opgegeven of incorrect";
// Miscellaneous
$locale['global_190'] = "Onderhoudsmodus geactiveerd";
$locale['global_191'] = "Uw IP-adres staat op dit moment op de zwarte lijst.";
$locale['global_192'] = "Uw cookie is verlopen! Log opnieuw in om verder te gaan.";
$locale['global_193'] = "Kan geen cookie instellen! Sta a.u.b. cookies toe, controleer de instellingen van uw firewall of uw browser, om correct in te kunnen loggen.";
$locale['global_194'] = "Dit account is momenteel geschorst.";
$locale['global_195'] = "Dit account is nog niet geactiveerd.";
$locale['global_196'] = "Ongeldige gebruikersnaam of wachtwoord.";
$locale['global_197'] = "Wacht u a.u.b. terwijl we u doorsturen...<br /><br />
[ <a href='".BASEDIR."index.php'>Of klik hier indien u niet wenst te wachten.</a> ]";
$locale['global_198'] = "<strong>Waarschuwing:</strong> setup.php aangetroffen, a.u.b. onmiddellijk verwijderen.";
$locale['global_199'] = "<strong>Waarschuwing:</strong> beheerderwachtwoord niet ingesteld, klik <a href='".BASEDIR."edit_profile.php' title='Profiel wijzigen'>Profiel wijzigen</a> om dit in te stellen.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Zoeken";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Ga naar inhoud";
// No themes found
$locale['global_300'] = "geen thema gevonden";
$locale['global_301'] = "Het spijt ons zeer, maar deze pagina kan niet worden getoond. Door bepaalde omstandigheden kan geen site-thema worden gevonden. Indien u een beheerder van de site bent, gebruik dan a.u.b. uw FTP-programma om een voor <em>PHP-Fusion v7</em> ontworpen thema naar de <em>themes</em> map te uploaden. Controleer na de upload in <em>Algemene Instellingen</em> of het geselecteerde thema correct is ge-upload. Houdt er rekening mee dat de ge-uploade thema map exact dezelfde naam moet hebben (inclusief eventuele hoofdletters, van belang bij Unix-servers) als gekozen in <em>Algemene Instellingen</em>.<br /><br />Indien u een gewoon lid van de site bent, neemt u dan a.u.b. contact op met de beheerder van de site via ".hide_email($settings['siteemail'])." e-mail en meldt dit probleem.";
$locale['global_302'] = "Het thema gekozen in Algemene Instellingen bestaat niet of is incompleet.!";
// JavaScript Not Enabled
$locale['global_303'] = "<center>Oeps! <strong>JavaScript</strong> ontbreekt!<br />Uw Web browser heeft JavaScript uitstaan of ondersteund geen JavaScript.<br />Om deze website optimaal te kunnen zien dient u <strong>JavaScript aan te zetten</strong> in uw Web browser en/of Firewall.<br />Of <strong>verander</strong> van Web browser die wel JavaScript ondersteund; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> nieuwer dan versie 6.</center>";
// User Management
$locale['global_400'] = "geschorst";
$locale['global_401'] = "verbannen";
$locale['global_402'] = "gedeactiveerd";
$locale['global_403'] = "account beeindigd";
$locale['global_404'] = "account geanonimiseerd";
$locale['global_405'] = "annonieme gebruiker";
$locale['global_406'] = "Dit account is verbannen om de volgende reden:";
$locale['global_407'] = "Dit account is geschorst tot ";
$locale['global_408'] = " om de volgende reden:";
$locale['global_409'] = "Dit account is verbannen om veiligheidsredenen.";
$locale['global_410'] = "De reden hiervoor is: ";
$locale['global_411'] = "Dit account is geannuleerd.";
$locale['global_412'] = "Dit account is geanonimiseerd, waarschijnlijk door inactiviteit.";
// Banning due to flooding
$locale['global_440'] = "Automatische verbanning door Flood Control";
$locale['global_441'] = "Uw account op ".$settings['sitename']." is verbannen";
$locale['global_442'] = "Beste [USER_NAME],\n
Uw account op ".$settings['sitename']." heeft in korte tijd te veel berichten in het systeem geplaatst met IP ".USER_IP.", en is daarom verbannen. Dit is gedaan om snelle verspreiding van spam door robots te voorkomen.\n
Neem contact op met de site beheerder via ".$settings['siteemail']." om uw account vrij te geven of om te melden dat u het niet was die dit veroorzaakt heeft.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Uw schorsing is automatisch opgeheven door het systeem";
$locale['global_451'] = "Schorsing opgeheven op ".$settings['sitename'];
$locale['global_452'] = "Beste USER_NAME,\n
De schorsing van uw account op ".$settings['siteurl']." is opgeheven. Hier zijn uw login gegevens:\n
Gebruikersnaam: USER_NAME\n
Wachtwoord: verborgen wegens veiligheid redenen\n\n
Als u uw wachtwoord bent vergeten, kunt u hier het wachtwoord opvragen:LOST_PASSWORD\n\n
Met vriendelijke groet,\n
".$settings['siteusername'];
$locale['global_453'] = "Beste USER_NAME,\n
De schorsing van uw account op ".$settings['siteurl']." is opgeheven.\n\n
Met vriendelijke groet,\n
".$settings['siteusername'];
$locale['global_454'] = "Account gereactiveerd op ".$settings['sitename'];
$locale['global_455'] = "Beste USER_NAME,\n
De laatste keer dat u bent ingelogd is uw account gereactiveerd op ".$settings['siteurl']." en is uw account niet langer meer als inactief gemarkeerd.\n\n
Met vriendelijke groet,\n
".$settings['siteusername'];
$locale['global_456'] = "Nieuw wachtwoord notificatie voor [SITENAME]";
$locale['global_457'] = "Hallo USER_NAME,
<br/>Er is een nieuw wachtwoord ingesteld voor uw account op [SITENAME]. Hieronder vindt u uw nieuwe login gegevens:<br/>
Gebruikersnaam: USER_NAME<br/>Wachtwoord: [PASSWORD]<br/>Met vriendelijke groet,<br/>[SITEUSERNAME]";
$locale['global_458'] = "Nieuw wachtwoord ingesteld voor USER_NAME";
$locale['global_459'] = "Nieuw wachtwoord ingesteld voor USER_NAME, maar email kon niet worden verzonden. Informeer de gebruiker op andere wijze.";

// Function parsebytesize()
$locale['global_460'] = "Leeg";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "U wordt doorgestuurd naar %s, wacht een moment. Als u niet wordt doorgestuurd, klikt u hier.";
// Captcha Locales
$locale['global_600'] = "Validatie Code";
$locale['recaptcha'] = "en";
// Site links
$locale['global_700'] = "Toon meer";
//Miscellaneous
$locale['global_900'] = "Niet in staat om HEX naar DEC te converteren";
$locale['global_901'] = "Media toevoegen";
//Language Selection
$locale['global_ML100'] = "Taal:";
$locale['global_ML101'] = "- Selecteer Taal -";
$locale['global_ML102'] = "Site taal";
$locale['global_ML103'] = "Verander taal";
// Flood Control
$locale['flood'] = "U mag niet meer posten totdat de Flood periode voorbij is. Wacht a.u.b. %t";
$locale['no_image'] = "Geen afbeeldinge";
$locale['send_message'] = "Stuur bericht";
$locale['go_profile'] = "Ga naar %s Profiel pagina";
// Global one word locales
$locale['hello'] = "Hallo!";
$locale['goodbye'] = "Tot ziens!";
$locale['welcome'] = "Welkom terug";
$locale['home'] = "Start";
// Status
$locale['error'] = "Fout!";
$locale['success'] = "Succesvol!";
$locale['enable'] = "Inschakelen";
$locale['disable'] = "Uitschakelen";
$locale['can'] = "kan";
$locale['cannot'] = "kan niet";
$locale['no'] = "Nee";
$locale['yes'] = "Ja";
$locale['off'] = "Uit";
$locale['on'] = "Aan";
$locale['or'] = "of";
$locale['by'] = "door";
$locale['in'] = "in";
$locale['of'] = "van";
$locale['and'] = "en";
$locale['na'] = "Geen informatie beschikbaar";
$locale['joined'] = "Lid sinds: ";
$locale['enter'] = "Ga";
// Navigation
$locale['next'] = "Volgende";
$locale['previous'] = "Vorige";
$locale['back'] = "Terug";
$locale['forward'] = "Vooruit";
$locale['go'] = "Ga";
$locale['cancel'] = "Afbreken";
$locale['clear'] = "Wissen";
$locale['move'] = "Verplaats";
$locale['move_up'] = "Omhoog verplaatsen";
$locale['move_down'] = "Omlaag verplaatsen";
$locale['load_more'] = "Toon meer Items";
$locale['load_end'] = "Toon vanaf begin";
// Actions
$locale['add'] = "Toevoegen";
$locale['save'] = "Opslaan";
$locale['save_changes'] = "Wijzigingen opslaan";
$locale['save_and_close'] = "Opslaan en sluiten";
$locale['confirm'] = "Bevestig";
$locale['update'] = "Bijwerken";
$locale['updated'] = "Bijgewerkt";
$locale['remove'] = "Wissen";
$locale['delete'] = "Verwider";
$locale['search'] = "Zoeken";
$locale['help'] = "Help";
$locale['register'] = "Registreer";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Reactivateer";
$locale['user'] = "Gebruiker";
$locale['promote'] = "Promote";
$locale['show'] = "Toon";
$locale['actions'] = "Acties";
$locale['language'] = "Taal";
$locale['loading'] = "Laden...";
// Persons & Identifiers
$locale['you'] = "Jij";
$locale['me'] = "Mij";
$locale['they'] = "Zij";
$locale['we'] = "Wij";
$locale['us'] = "Ons";
$locale['he'] = "Hij";
$locale['she'] = "Zij";
$locale['it'] = "Het";
//Tables
$locale['order'] = "Volgorde";
$locale['sort'] = "Sorteer";
$locale['id'] = "ID";
$locale['title'] = "Titel";
$locale['rights'] = "Rechten";
$locale['info'] = "Info";
$locale['image'] = "Afbeelding";
// Forms
$locale['choose'] = "Maak een keuze...";
$locale['no_opts'] = "Niets gekozen";
$locale['root'] = "Als Ouder";
$locale['choose-user'] = "Kies a.u.b. een gebruiker...";
$locale['choose-location'] = "Kies a.u.b. een locatie";
$locale['parent'] = "Maak als nieuwe ouder..";
$locale['item_order'] = "Item Sortering";
$locale['status'] = "Status";
$locale['note'] = "Make een notitie van dit item";
$locale['publish'] = "Publiseer";
$locale['unpublish'] = "Onpubliseer";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Niet sticky";
$locale['draft'] = "Concept";
$locale['settings'] = "Instellingen";
$locale['posted'] = "Geplaatst";
$locale['profile'] = "Profiel";
$locale['edit'] = "Wijzig";
$locale['qedit'] = "Snel wijzigen";
$locale['view'] = "Toon";
$locale['login'] = "Login";
$locale['logout'] = "Loguit";
$locale['admin-logout'] = "Admin Loguit";
$locale['message'] = "Priv&eacute; Berichten";
$locale['logged'] = "Ingelogd als ";
$locale['version'] = "Versie ";
$locale['browse'] = "Bladeren ...";
$locale['close'] = "Sluiten";
$locale['nopreview'] = "Er is niet om weer te geven";
$locale['mark_as'] = "Markeer Als";
$locale['preview'] = "Voorvertoning";
$locale['custom'] = "Eigen";
$locale['submit'] = "Inzenden";
// Alignment
$locale['left'] = "Links";
$locale['center'] = "Centreer";
$locale['right'] = "Rechts";
// Comments and ratings
$locale['comments'] = "Commentaren";
$locale['ratings'] = "Waarderingen";
$locale['comments_ratings'] = "Commentaen en waarderingen";
$locale['user_account'] = "Gebruikers Account";
$locale['about'] = "Over";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "inzending|inzendingen";
$locale['fmt_article'] = "artikel|artikelen";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "commentaar|commentaren";
$locale['fmt_vote'] = "stem|stemmen";
$locale['fmt_rating'] = "waardering|waarderingen";
$locale['fmt_day'] = "dag|dagen";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "volger|volgers";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "gast|gasten";
$locale['fmt_hour'] = "uur|uren";
$locale['fmt_item'] = "item|items";
$locale['fmt_member'] = "lid|leden";
$locale['fmt_message'] = "bericht|berichten";
$locale['fmt_minute'] = "minuut|minuten";
$locale['fmt_month'] = "maand|maanden";
$locale['fmt_news'] = "nieuws|nieuws";
$locale['fmt_photo'] = "foto|fotos";
$locale['fmt_post'] = "post|posts";
$locale['fmt_question'] = "vraag|vragen";
$locale['fmt_read'] = "gelezen|gelezen";
$locale['fmt_second'] = "seconde|seconden";
$locale['fmt_shouts'] = "shout|shouts";
$locale['fmt_thread'] = "onderwerp|onderwerpen";
$locale['fmt_user'] = "gebruiker|gebruikers";
$locale['fmt_views'] = "toon|tonen";
$locale['fmt_weblink'] = "weblink|weblinks";
$locale['fmt_week'] = "week|weken";
$locale['fmt_year'] = "jaar|jaren";
$locale['fmt_points'] = "punt|punten";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "groep|groepen";
$locale['fmt_category'] = "categorie|categorie&euml;n";
$locale['fmt_review'] = "beoordeling|beoordelingen";
