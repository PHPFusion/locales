<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/global.php
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

setlocale( LC_ALL, "da", "dan", "da_DK", "da_DK.DK.UTF-8", "danish" );
setlocale(LC_TIME, "da","DA"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "DA";
$locale['xml_lang'] = "da";
$locale['short_lang_name'] = "da";
$locale['tinymce'] = "da";
$locale['select2'] = "da";
$locale['phpmailer'] = "da";
$locale['filemanager'] = "da_DK";
$locale['datepicker'] = "da";
$locale['datepicker_js'] = "DD-M-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "da";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";

// Full & Short Months
$locale['months'] = "&nbsp|Januar|Februar|Marts|April|Maj|Juni|Juli|August|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Maj|Jun|Jul|Aug|Sep|Okt|Nov|Dec";
$locale['weekdays'] = "Søndag|Mandag|Tirsdag|Onsdag|Torsdag|Fredag|Lørdag";
// Timers
$locale['year'] = "år";
$locale['year_a'] = "år";
$locale['month'] = "måned";
$locale['month_a'] = "måneder";
$locale['week'] = "uge";
$locale['week_a'] = "uger";
$locale['day'] = "dag";
$locale['day_a'] = "dage";
$locale['hour'] = "time";
$locale['hour_a'] = "timer";
$locale['minute'] = "minut";
$locale['minute_a'] = "minutter";
$locale['second'] = "sekund";
$locale['second_a'] = "sekunder";
$locale['just_now'] = "lige nu";
$locale['now'] = 'nu';
$locale['ago'] = "siden";
// Name
$locale['name'] = "Fulde navn";
$locale['username_pretext'] = "Dit offentlige brugernavn er det samme som din brugerprofil adresse: %s %s";
$locale['first_name'] = "Fornavn";
$locale['middle_name'] = "Mellemnavn";
$locale['last_name'] = "Efternavn";
// Standard User Levels
$locale['user0'] = "Gæst";
$locale['user1'] = "Bruger";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super Administrator";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gæst";
$locale['user_anonymous'] = "Anonym Bruger";
$locale['genitive'] = "%ss %s";
// Standard User Status
$locale['status0'] = "Aktiv";
$locale['status1'] = "Udelukket";
$locale['status2'] = "Ikke aktiveret";
$locale['status3'] = "Suspenderet";
$locale['status4'] = "Udelukket af sikkerhedsårsager";
$locale['status5'] = "Annulleret";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktiveret";
$locale['status8'] = "Inaktiv";
// Forum Moderator Level(s)
$locale['userf1'] = "Ordstyrer";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Der er ikke oprettet links\n";
$locale['global_003'] = "Intet at vise";
// Users Online
$locale['global_010'] = "Besøgende";
$locale['global_011'] = "Gæster online";
$locale['global_012'] = "Brugere online";
$locale['global_013'] = "Ingen brugere online";
$locale['global_014'] = "Antal brugere";
$locale['global_015'] = "Ikke aktiverede";
$locale['global_016'] = "Nyeste bruger";
$locale['global_017'] = "Skift navigation";
// Forum Side panel
$locale['global_020'] = "Debatemner";
$locale['global_021'] = "Nyeste emne";
$locale['global_022'] = "Mest aktive emner";
$locale['global_023'] = "Ingen emner oprettet";
$locale['global_024'] = "Deltaget i debat";
$locale['global_027'] = "Ubesvarede tråde";
$locale['global_028'] = "Ulæste spørgsmål";
// Comments Side panel
$locale['global_025'] = "Seneste kommentarer";
$locale['global_026'] = "Der er ikke skrevet kommentarer";
// Articles Side panel
$locale['global_030'] = "Nyeste artikler";
$locale['global_031'] = "Ingen artikler tilgængelige";
// Downloads Side panel
$locale['global_032'] = "Seneste downloads";
$locale['global_033'] = "Der er ikke oprettet downloads";
// Welcome panel
$locale['global_035'] = "Velkommen";
// Latest Active Forum Threads panel
$locale['global_040'] = "Senest aktive debatemner";
$locale['global_041'] = "Mine nyeste emner";
$locale['global_042'] = "Mine nyeste indlæg";
$locale['global_043'] = "Nye indlæg";
$locale['global_044'] = "Debat";
$locale['global_045'] = "Visninger";
$locale['global_046'] = "Svar";
$locale['global_047'] = "Nyeste indlæg";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Skrevet";
$locale['global_050'] = "Forfatter";
$locale['global_051'] = "Afstemning";
$locale['global_052'] = "Flyttet";
$locale['global_053'] = "Du har ikke oprettet debatemner endnu.";
$locale['global_054'] = "Du har ikke oprettet debatindlæg endnu.";
$locale['global_055'] = "Der er kommet %u nye indlæg siden dit sidste besøg.";
$locale['global_056'] = "Mine udvalgte emner";
$locale['global_057'] = "Valgmuligheder";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Du har ikke udvalgt emner.";
$locale['global_060'] = "Fravælg dette emne?";
// News & Articles
$locale['global_070'] = "Skrevet af ";
$locale['global_070b'] = "Se alle indlæg af %s";
$locale['global_071'] = "d. ";
$locale['global_071b'] = "Skribent";
$locale['global_072'] = "Læs mere";
$locale['global_073'] = " Kommentarer";
$locale['global_073b'] = " Kommentar";
$locale['global_074'] = " Visninger";
$locale['global_074b'] = " visning";
$locale['global_075'] = "Udskriv";
$locale['print'] = "Print";
$locale['global_076'] = "Rediger";
$locale['global_077'] = "Nyheder";
$locale['global_078'] = "Der er ikke oprettet nyheder endnu";
$locale['global_079'] = "I ";
$locale['global_080'] = "Ikke-kategoriseret";
$locale['global_081'] = "Nyheder hjem";
$locale['global_082'] = "Nyheder";
$locale['global_083'] = "Senest opdateret";
$locale['global_084'] = "Nyheds kategori";
$locale['global_085'] = "Alle andre kategorier";
$locale['global_086'] = "Seneste nyheder";
$locale['global_087'] = "Mest kommenterede nyheder";
$locale['global_088'] = "Højest bedømte nyheder";
$locale['global_089'] = "Vær den første til at kommentere %s";
$locale['global_089a'] = "Vær den første til at bedømme %s";
$locale['global_089b'] = "Thumb visning";
$locale['global_089c'] = "Liste visning";
// Page Navigation
$locale['global_090'] = "Foregående";
$locale['global_091'] = "Næste";
$locale['global_092'] = "Side ";
$locale['global_093'] = " af ";
$locale['global_094'] = " ud af ";
// Guest User Menu
$locale['global_100'] = "Log ind";
$locale['global_101'] = "Brugernavn";
$locale['global_101a'] = "Indtast brugernavn";
$locale['global_101b'] = "Indtast mailadresse";
$locale['global_101c'] = "Indtast mailadresse eller brugernavn";
$locale['global_102'] = "Kodeord";
$locale['global_103'] = "Husk mig";
$locale['global_104'] = "Log ind";
$locale['global_105'] = "Er du endnu ikke registreret bruger?<br/><a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['global_106'] = "Har du glemt dit kodeord?<br/>Bed om et nyt <a href='".BASEDIR."lostpassword.php' class='side'>ved at klikke her</a>.";
$locale['global_107'] = "Tilmelding";
$locale['global_108'] = "Glemt kodeord";
$locale['global_109'] = "Tilmeld";
// Member User Menu
$locale['global_120'] = "Rediger profil";
$locale['global_121'] = "Beskeder";
$locale['global_122'] = "Brugerliste";
$locale['global_123'] = "Administration";
$locale['global_124'] = "Log ud";
$locale['global_125'] = "Der er %u <br/>";
$locale['global_126'] = "ny besked til dig";
$locale['global_127'] = "nye beskeder til dig";
$locale['global_128'] = "forslag";
$locale['global_129'] = "forslag";
// Poll
$locale['global_130'] = "Brugerafstemning";
$locale['global_131'] = "Stem";
$locale['global_132'] = "Du er nødt til at logge på for at stemme.";
$locale['global_133'] = "Stemme";
$locale['global_134'] = "Stemmer";
$locale['global_135'] = "Stemmer: ";
$locale['global_136'] = "Påbegyndt: ";
$locale['global_137'] = "Afsluttet: ";
$locale['global_138'] = "Afstemningsarkiv";
$locale['global_139'] = "Vælg en afstemning fra listen:";
$locale['global_140'] = "Se";
$locale['global_141'] = "Se afstemning";
$locale['global_142'] = "Der er endnu ikke oprettet afstemninger.";
$locale['global_143'] = "Bedømmelser";
// User Menu
$locale['UM060'] = "Log ind";
$locale['UM061'] = "Brugernavn";
$locale['UM061a'] = "Mailadresse";
$locale['UM061b'] = "Brugernavn eller mailadresse";
$locale['UM062'] = "Kodeord";
$locale['UM063'] = "Husk mig på denne computer";
$locale['UM064'] = "Log ind";
$locale['UM065'] = "Ikke registreret endnu?<br/><a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['UM066'] = "Glemt kodeord?<br/>Få et nyt <a href='".BASEDIR."lostpassword.php' class='side'>her</a>.";
$locale['UM067'] = "(ikke anbefalet på offentlige eller delte computere)";
$locale['UM080'] = "Rediger profil";
$locale['UM081'] = "Private beskeder";
$locale['UM082'] = "Brugerliste";
$locale['UM083'] = "Administration";
$locale['UM084'] = "Log ud";
$locale['UM085'] = "Du har %u nye ";
$locale['UM086'] = "besked";
$locale['UM087'] = "beskeder";
$locale['UM088'] = "Fulgte tråde";
// Submit (news, blog, link, article)
$locale['UM089'] = "Indsend ...";
$locale['UM090'] = "Indsend nyhed";
$locale['UM091'] = "Indsend link";
$locale['UM092'] = "Indsend artikel";
$locale['UM093'] = "Indsend foto";
$locale['UM094'] = "Indsend download";
$locale['UM095'] = "Indsend blog";
$locale['UM102'] = "Indsend FAQ";
// User Panel
$locale['UM096'] = "Velkommen: ";
$locale['UM097'] = "Personlig menu";
$locale['UM101'] = "Skift sprog";
// Gauges
$locale['UM098'] = "PB indboks :";
$locale['UM099'] = "PB udboks :";
$locale['UM100'] = "PB arkiv :";
// Keywords and Meta
$locale['tags'] = "Tags";
$locale['notfound'] = "Ikke fundet noget.";
$locale['sel_user'] = "Vælg bruger";
// Captcha
$locale['global_150'] = "Valideringskode";
$locale['global_151'] = "Indtast valideringskode:";
// Footer Counter
$locale['global_170'] = "Unikt besøg";
$locale['global_171'] = "Unikke besøg";
$locale['global_172'] = "Siden dannet på: %s sekunder";
$locale['global_173'] = "Forespørgsler";
$locale['global_174'] = "Anvendt hukommelse";
$locale['global_175'] = "Gennemsnit: %s sekunder";
$locale['global_176'] = "Privatlivspolitik";
// Admin Navigation
$locale['global_180'] = "Administration";
$locale['global_181'] = "Forside";
$locale['global_182'] = "<strong>Bemærk</strong>: Administratorkodeordet er ikke blevet indtastet eller er ikke korrekt.";
// Miscellaneous
$locale['global_190'] = "Vedligeholdelsestilstand er aktiveret";
$locale['global_191'] = "Din IP adresse er aktuelt udelukket.";
$locale['global_192'] = "Logger ud som ";
$locale['global_193'] = "Logger ind som ";
$locale['global_194'] = "Denne konto er aktuelt lukket.";
$locale['global_195'] = "Denne konto er endnu ikke aktiveret.";
$locale['global_196'] = "Forkert brugernavn eller kodeord.";
$locale['global_197'] = "Vent et øjeblik, mens vi overfører dig ...<br/><br/>
[ <a href='index.php'>Eller klik her, hvis du ikke ønsker at vente</a> ]";
$locale['global_198'] = "<strong>Advarsel:</strong> Du har glemt at slette setup.php. Slet den med det samme!";
$locale['global_199'] = "<strong>Advarsel:</strong> administratorkodeord er ikke oprettet. Klik på <a href='".BASEDIR."edit_profile.php'>Rediger profil</a> for at oprette det.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Søg";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Debat";
//Themes
$locale['global_210'] = "Spring til indhold";
$locale['global_300'] = "intet tema fundet";
$locale['global_301'] = "Vi beklager meget, men siden kan ikke vises. Af ukendte årsager kan sidens tema ikke findes. 
Hvis du er administrator på siden, så brug din FTP-klient til at uploade et tema designet til brug i forbindelse med 
<strong>PHP-Fusion version 7</strong> til folderen <strong>themes/</strong>. Efter at du har gjort det, skal du se 
under <strong>Hovedopsætning</strong> for at sikre dig, at det uploadede tema er kommet korrekt op på siden. 
Bemærk at den uploadede temafolder skal have nøjagtigt samme navn inklusive store og små bogstaver som navnet 
på det tema, du vælger under <strong>Hovedopsætning</strong>.<br/><br/> Hvis du er medlem på siden, så skal 
du kontakte sidens administrator via ".hide_email($settings['siteemail'])." mail og rapportere om problemet.";
$locale['global_302'] = "Det tema, som du har valgt under hovedopsætning eksisterer ikke eller er inkompatibelt!";
// JavaScript Not Enabled
$locale['global_303'] = "Jamen dog! Hvor finder vi det stærke <strong>JavaScript</strong>?<br/>Din browser understøtter ikke
JavaScript eller har ikke understøttelsen slået til. SlŒ <strong>JavaScript til</strong> i din browser for at se denne side
ordentligt,<br/> eller <strong>opgrader</strong> til en browser, der understøtter JavaScript.";
// User Management
$locale['global_400'] = "suspenderet";
$locale['global_401'] = "udelukket";
$locale['global_402'] = "deaktiveret";
$locale['global_403'] = "brugerkontoen lukket";
$locale['global_404'] = "brugerkontoen anonymiseret";
$locale['global_405'] = "anonym bruger";
$locale['global_406'] = "Denne brugerkonto er udelukket af følgende årsag:";
$locale['global_407'] = "Denne brugerkonto er suspenderet indtil ";
$locale['global_408'] = " af følgende årsag:";
$locale['global_409'] = "Denne konto er blevet udelukket af sikkerhedsårsager.";
$locale['global_410'] = "Begrundelsen er: ";
$locale['global_411'] = "Denne konto er blevet sat i passiv tilstand.";
$locale['global_412'] = "Denne konto er blevet anonymiseret sandsynligvis på grund af manglende aktivitet.";
// Banning due to flooding
$locale['global_440'] = "Automatisk udelukkelse via Flood Control";
$locale['global_441'] = "Din brugerkonto på [SITENAME] er blevet udelukket";
$locale['global_442'] = "Hej [USER_NAME]<br/>
Din konto på [SITENAME] blev registreret fordi den offentliggjorde for mange indlæg på for kort tid fra IP-adressen [USER_IP]. Derfor er kontoen blevet udelukket. Dette sker for at forhindre, at scripts kan lægge spam ind meget hurtigt.<br/>
Kontakt administratoren på [SITE_EMAIL] for at få genåbnet din konto eller dokumenter, at det ikke var dig der udlæste denne udelukkelse.<br/>
[SITEUSERNAME]";
// Lifting of suspension
$locale['global_450'] = "Udelukkelsen er automatisk ophævet af systemet";
$locale['global_451'] = "Udelukkelse er ophævet på [SITENAME]";
$locale['global_452'] = "Hej USER_NAME<br/>
Udelukkelsen af din konto pŒ [SITEURL] er blevet ophævet. Her er dine pålogningsoplysninger:<br/>
Brugernavn: USER_NAME
Kodeord: Skjult af sikkerhedsårsager<br/>
Hvis du har glemt dit kodeord kan du oprette et nyt via følgende link: LOST_PASSWORD<br/><br/>
Venlig hilsen<br/>
[SITEUSERNAME]";
$locale['global_453'] = "Hej USER_NAME<br/>
Udelukkelsen af din konto på [SITEURL] er blevet ophævet.<br/><br/>
Venlig hilsen<br />
[SITEUSERNAME]";
$locale['global_454'] = "Kontoen er genaktiveret på [SITENAME]";
$locale['global_455'] = "Hej USER_NAME<br/>
Sidste gang du loggede pŒ, blev din konto reaktiveret pŒ [SITEURL] og du er ikke længere registreret som inaktiv.<br/><br/>
Venlig hilsen<br/>
[SITEUSERNAME]";
$locale['global_456'] = "Nyt koderord underrettelse til [SITENAME]";
$locale['global_457'] = "Hej USER_NAME,
<br/>Et nyt kodeord er blevet oprettet til din konto hos [SITENAME]. Her er de nye log ind oplysninger:<br/>
Brugernavn: USER_NAME<br/>Kodeord: [PASSWORD]<br/>Med venlig hilsen,<br/>[SITEUSERNAME]";
$locale['global_458'] = "Nyt kodeord er blevet oprettet til USER_NAME";
$locale['global_459'] = "Nyt kodeord er blevet oprettet til USER_NAME, og mail blev ikke sendt. Venligst underret brugeren om de nye oplysninger.";
// Function parsebytesize()
$locale['global_460'] = "Tom";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vi sender dig videre til %s, vent venligst. Hvis du ikke bliver sendt videre, så klik her.";
// Captcha Locales
$locale['global_600'] = "Sikkerhedskode";
$locale['global_601'] = "Du skal indtaste en gyldig valideringskode";
$locale['recaptcha'] = "da";
// Site links
$locale['global_700'] = "Vis mere";
//Miscellaneous
$locale['global_900'] = "Ude af stand til at konvertere HEX til DEC";
$locale['global_901'] = "Indsæt media";
//Language Selection
$locale['global_ML100'] = "Sprog:";
$locale['global_ML101'] = "- Vælg sprog -";
$locale['global_ML102'] = "Hjemmesidens sprog";
$locale['global_ML103'] = "Skift sprog";
// Flood Control
$locale['flood'] = "Du kan ikke skrive indlæg før flood periodens cooldown er overstået. Vent venligst i %s.";
$locale['no_image'] = "Ingen billede";
$locale['send_message'] = "Send besked";
$locale['go_profile'] = "Gå til %s profilside";
// Global one word locales
$locale['hello'] = "Hej!";
$locale['goodbye'] = "Farvel!";
$locale['welcome'] = "Velkommen tilbage";
$locale['home'] = "Hjem";
// Status
$locale['error'] = "Fejl!";
$locale['success'] = "Gennemført!";
$locale['enable'] = "Aktiver";
$locale['disable'] = "Deaktiver";
$locale['can'] = "kan";
$locale['cannot'] = "kan ikke";
$locale['no'] = "Nej";
$locale['yes'] = "Ja";
$locale['off'] = "Aktiveret";
$locale['on'] = "Deaktiveret";
$locale['or'] = "eller";
$locale['by'] = "af";
$locale['in'] = "i";
$locale['of'] = "af";
$locale['and'] = "og";
$locale['na'] = "Ingen information tilgængelig";
$locale['joined'] = "Tilmeldt siden: ";
$locale['enter'] = "Kom ind";
// Navigation
$locale['next'] = "Næste";
$locale['previous'] = "Forrige";
$locale['back'] = "Tilbage";
$locale['forward'] = "Frem";
$locale['go'] = "Gå";
$locale['cancel'] = "Fortryd";
$locale['clear'] = "Ryd";
$locale['move'] = "Flyt";
$locale['move_up'] = "Flyt op";
$locale['move_down'] = "Flyt ned";
$locale['load_more'] = "Hent flere emner";
$locale['load_end'] = "Hent fra begyndelsen";
// Actions
$locale['add'] = "Tilføj";
$locale['save'] = "Gem";
$locale['save_changes'] = "Gem ændringer";
$locale['save_and_close'] = "Gem og luk";
$locale['confirm'] = "Bekræft";
$locale['update'] = "Opdater";
$locale['updated'] = "Opdateret";
$locale['remove'] = "Fjern";
$locale['delete'] = "Slet";
$locale['search'] = "Søg";
$locale['help'] = "Hjælp";
$locale['register'] = "Registrer";
$locale['ban'] = "Udeluk";
$locale['reactivate'] = "Genaktiver";
$locale['user'] = "Bruger";
$locale['promote'] = "Promover";
$locale['show'] = "Vis";
$locale['actions'] = "Handlinger";
$locale['language'] = "Sprog";
$locale['loading'] = "Henter ...";
// Persons & Identifiers
$locale['you'] = "Dig";
$locale['me'] = "Mig";
$locale['they'] = "Dem";
$locale['we'] = "Vi";
$locale['us'] = "Os";
$locale['he'] = "Ham";
$locale['she'] = "Hende";
$locale['it'] = "Den";
//Tables
$locale['order'] = "Rækkefølge";
$locale['sort'] = "Sorter";
$locale['id'] = "ID";
$locale['title'] = "Titel";
$locale['rights'] = "Rettigheder";
$locale['info'] = "Info";
$locale['image'] = "Billede";
// Forms
$locale['choose'] = "Vælg venligst en ...";
$locale['no_opts'] = "Ingen valg";
$locale['root'] = "Som forældre";
$locale['choose-user'] = "Vælg venligst en bruger ...";
$locale['choose-location'] = "Vælg venligst en lokation";
$locale['parent'] = "Opret som ny forælder ...";
$locale['item_order'] = "Emne sortering";
$locale['status'] = "Status";
$locale['note'] = "Lav en note om dette emne";
$locale['publish'] = "Offentliggør";
$locale['unpublish'] = "Fjern offentliggørelse";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Kladde";
$locale['settings'] = "Indstillinger";
$locale['posted'] = "oprettet";
$locale['profile'] = "Profil";
$locale['edit'] = "Rediger";
$locale['qedit'] = "Hurtig redigering";
$locale['view'] = "Se";
$locale['login'] = "Log ind";
$locale['logout'] = "Log ud";
$locale['admin-logout'] = "Admin log ud";
$locale['message'] = "Private beskeder";
$locale['logged'] = "Logget ind som ";
$locale['version'] = "Version ";
$locale['browse'] = "Browse ...";
$locale['close'] = "Luk";
$locale['nopreview'] = "Intet at vise";
$locale['mark_as'] = "Marker som";
$locale['preview'] = "Se";
$locale['custom'] = "Brugerdefineret";
$locale['submit'] = "Send";
// Alignment
$locale['left'] = "Venstre";
$locale['center'] = "Center";
$locale['right'] = "Højre";
// Comments and ratings
$locale['comments'] = "Kommentarer";
$locale['ratings'] = "Bedømmelser";
$locale['comments_ratings'] = "Kommentarer og bedømmelser";
$locale['user_account'] = "Brugerkonto";
$locale['about'] = "Om";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "forslag|forslag";
$locale['fmt_article'] = "artikel|artikler";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "kommentar|kommentarer";
$locale['fmt_vote'] = "stemme|stemmer";
$locale['fmt_rating'] = "bedømmelse|bedømmelser";
$locale['fmt_day'] = "dage|dage";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "følger|følgere";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "gæst|gæster";
$locale['fmt_hour'] = "time|timer";
$locale['fmt_item'] = "emne|emner";
$locale['fmt_member'] = "bruger|brugere";
$locale['fmt_message'] = "besked|beskeder";
$locale['fmt_minute'] = "minut|minutter";
$locale['fmt_month'] = "måned|måneder";
$locale['fmt_news'] = "nyhed|nyheder";
$locale['fmt_photo'] = "foto|fotos";
$locale['fmt_post'] = "indlæg|indlæg";
$locale['fmt_question'] = "spørgsmål|spørgsmål";
$locale['fmt_read'] = "løsning|løsninger";
$locale['fmt_second'] = "sekund|sekunder";
$locale['fmt_shouts'] = "replik|replikker";
$locale['fmt_thread'] = "tråd|tråde";
$locale['fmt_user'] = "bruger|brugere";
$locale['fmt_views'] = "visning|visninger";
$locale['fmt_weblink'] = "link|links";
$locale['fmt_week'] = "uge|uger";
$locale['fmt_year'] = "år|år";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "gruppe|grupper";
$locale['fmt_category'] = "kategori|kategorier";
$locale['fmt_review'] = "anmeldelse|anmeldelser";
