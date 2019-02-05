<?php
/**
 * Deutsche Locale
 *
 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @package locale/English
 */

setlocale(LC_TIME, "de_DE.UTF-8");
$locale['charset'] = "utf-8";
$locale['region'] = "DE";
$locale['xml_lang'] = "de";
$locale['short_lang_name'] = "de";
$locale['tinymce'] = "de";
$locale['select2'] = "de";
$locale['phpmailer'] = "de";
$locale['datepicker'] = "de-de";
$locale['datepicker_js'] = "M-DD-YYYY H:mm:ss";
$locale['datepicker_php'] = "m-d-Y H:i:s";
$locale['password_strength'] = "de";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";

// Monate
$locale['months']      = "&nbsp|Januar|Februar|M&auml;rz|April|Mai|Juni|Juli|August|September|Oktober|November|Dezember";
$locale['shortmonths'] = "&nbsp|Jan|Feb|M&auml;r|Apr|Mai|Jun|Jul|Aug|Sept|Okt|Nov|Dez";
$locale['weekdays'] = "Sonntag|Montag|Dienstag|Mittwoch|Donnerstag|Freitag|Samstag";
// Timers
$locale['year'] = "Jahr";
$locale['year_a'] = "Jahre";
$locale['month'] = "Monat";
$locale['month_a'] = "Monate";
$locale['week'] = "Woche";
$locale['week_a'] = "Wochen";
$locale['day'] = "Tag";
$locale['day_a'] = "Tage";
$locale['hour'] = "Stunde";
$locale['hour_a'] = "Stunden";
$locale['minute'] = "Minute";
$locale['minute_a'] = "Minuten";
$locale['second'] = "Sekunde";
$locale['second_a'] = "Sekunden";
$locale['just_now'] = "Gerade eben..";
$locale['now'] = 'gerade';
$locale['ago'] = "vor";
// Name
$locale['name'] = "Vollständiger Name";
$locale['username_pretext'] = "Your public username is also the same as your user profile address located at: %s %s";
$locale['first_name'] = "Vorname";
$locale['middle_name'] = "Zweiter Vorname";
$locale['last_name'] = "Nachname";
// Benutzerlevel
$locale['user0'] = "Besucher";
$locale['user1'] = "Mitglied";
$locale['user2'] = "Administrator";
$locale['user3'] = "Seiten Administrator";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gast";
$locale['user_anonymous'] = "Anonymer Benutzer";
$locale['genitive'] = "%s's %s";
// Benutzerstatus
$locale['status0'] = "Aktiv";
$locale['status1'] = "Gebannt";
$locale['status2'] = "Unaktiviert";
$locale['status3'] = "Tempor&auml;r gesperrt";
$locale['status4'] = "Sicherheitshalber gebannt";
$locale['status5'] = "Ung&uuml;ltig";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktiviert";
$locale['status8'] = "Inaktiv";
// Forum Moderator
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Keine Links angelegt.";
$locale['global_003'] = "Nichts zum anzeigen";
// Benutzer Online
$locale['global_010'] = "Mitglieder Online";
$locale['global_011'] = "G&auml;ste Online";
$locale['global_012'] = "Mitglieder Online";
$locale['global_013'] = "Keine Mitglieder Online";
$locale['global_014'] = "Mitglieder insgesamt";
$locale['global_015'] = "Unaktivierte Mitglieder";
$locale['global_016'] = "Neuestes Mitglied";
$locale['global_017'] = "Toggle Navigation";
// Forum Seitenpanel
$locale['global_020'] = "Foren Themen";
$locale['global_021'] = "Neueste Themen";
$locale['global_022'] = "Hei&szlig;este Themen";
$locale['global_023'] = "Keine Themen erstellt";
$locale['global_024'] = "Participated Discussions";
$locale['global_027'] = "Unanswered Threads";
$locale['global_028'] = "Unsolved Questions";
// Kommentare Seitenpanel
$locale['global_025'] = "Neueste Kommentare";
$locale['global_026'] = "Keine Kommentare verf&uuml;gbar";
// Artikel Seitenpanel
$locale['global_030'] = "Neueste Artikel";
$locale['global_031'] = "Keine Artikel verf&uuml;gbar";
// Downloads Seitenpanel
$locale['global_032'] = "Neueste Downloads";
$locale['global_033'] = "Keine Downloads verf&uuml;gbar";
// Willkommenspanel
$locale['global_035'] = "Willkommen";
// Letzte aktive Foren Themen Panel
$locale['global_040'] = "Letzte aktive Foren";
$locale['global_041'] = "Meine letzten Themen";
$locale['global_042'] = "Meine letzten Beitr&auml;ge";
$locale['global_043'] = "Neue Beitr&auml;ge";
$locale['global_044'] = "Thema";
$locale['global_045'] = "Aufrufe";
$locale['global_046'] = "Antworten";
$locale['global_047'] = "Letzter Beitrag";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Geschrieben";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Umfrage";
$locale['global_052'] = "Verschoben";
$locale['global_053'] = "Du hast bisher noch keine Foren Themen verfasst.";
$locale['global_054'] = "Du hast bisher noch keine Foren Beitr&auml;ge verfasst.";
$locale['global_055'] = "Seit deinem letzten Besuch gibt es %u neue Beitr&auml;ge in %u unterschiedlichen Themen.";
$locale['global_056'] = "Meine abonnierten Themen";
$locale['global_057'] = "Optionen";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Aktuell hast du keine Themen abonniert.";
$locale['global_060'] = "Dieses Thema nicht mehr verfolgen?";
// News und Artikel
$locale['global_070']  = "Geschrieben von ";
$locale['global_070b'] = "View all Post by %s";
$locale['global_071']  = ", ";
$locale['global_071b'] = "Author";
$locale['global_072']  = "Mehr lesen";
$locale['global_073']  = " Kommentare";
$locale['global_073b'] = " Kommentar";
$locale['global_074']  = " Gelesen";
$locale['global_074b'] = " Read";
$locale['global_075']  = "Drucken";
$locale['print'] = "Drucken";
$locale['global_076']  = "Bearbeiten";
$locale['global_077']  = "News";
$locale['global_078']  = "Bisher wurden keine News verfasst.";
$locale['global_079']  = "In ";
$locale['global_080']  = "keiner Kategorie";
$locale['global_081'] = "News Home";
$locale['global_082'] = "News";
$locale['global_083'] = "Last Updated";
$locale['global_084'] = "News Category";
$locale['global_085'] = "All Other Categories";
$locale['global_086'] = "Most Recent News";
$locale['global_087'] = "Most Commented News";
$locale['global_088'] = "Highest Rating News";
$locale['global_089'] = "Be the first to comment on %s";
$locale['global_089a'] = "Be the first to rate on this %s";
$locale['global_089b'] = "Thumb view";
$locale['global_089c'] = "List view";
// Seiten Navigation
$locale['global_090'] = "Zur&uuml;ck";
$locale['global_091'] = "Vorw&auml;rts";
$locale['global_092'] = "Seite ";
$locale['global_093'] = " von ";
$locale['global_094'] = " out of ";
// Gaeste Menu
$locale['global_100'] = "Login";
$locale['global_101'] = "Name oder Email";
$locale['global_101a'] = "Enter Username";
$locale['global_101b'] = "Enter Email";
$locale['global_101c'] = "Enter Email or Username";
$locale['global_102'] = "Passwort";
$locale['global_103'] = " Eingeloggt bleiben";
$locale['global_104'] = "Login";
$locale['global_105'] = "Noch kein Mitglied?<br /><a href='".BASEDIR."register.php' class='side' title='Klicke hier'>Klicke hier</a> um dich zu registrieren";
$locale['global_106'] = "Passwort vergessen?<br />Um ein neues Passwort anzufordern <a href='".BASEDIR."lostpassword.php' class='side' title='klicke hier'>klicke hier</a>.";
$locale['global_107'] = "Registrieren";
$locale['global_108'] = "Passwort vergessen?";
$locale['global_109'] = "Sign Up";
// Member User Menu
$locale['global_120'] = "Customize your Profile Page";
$locale['global_121'] = "Private Messages";
$locale['global_122'] = "Members List";
$locale['global_123'] = "Adminbereich";
$locale['global_124'] = "Logout";
$locale['global_125'] = "You have %u new ";
$locale['global_126'] = "message";
$locale['global_127'] = "messages";
$locale['global_128'] = "submission";
$locale['global_129'] = "submissions";
// Poll
$locale['global_130'] = "Member Poll";
$locale['global_131'] = "Submit Vote";
$locale['global_132'] = "You must login to vote.";
$locale['global_133'] = "Vote";
$locale['global_134'] = "Votes";
$locale['global_135'] = "Votes: ";
$locale['global_136'] = "Started: ";
$locale['global_137'] = "Ended: ";
$locale['global_138'] = "Polls Archive";
$locale['global_139'] = "Please select a poll to view from the list:";
$locale['global_140'] = "View";
$locale['global_141'] = "View Poll";
$locale['global_142'] = "There are no polls defined.";
$locale['global_143'] = "Ratings";
// User Menu
$locale['UM060'] = "Login";
$locale['UM061'] = "Benutzername";
$locale['UM061a'] = "Email";
$locale['UM061b'] = "Benutzername oder Email";
$locale['UM062'] = "Passwort";
$locale['UM063'] = "Eingeloggt bleiben";
$locale['UM064'] = "Login";
$locale['UM065'] = "Noch kein Mitglied?<br /><a href='".BASEDIR."register.php' class='side' title='Klicke hier'>Klicke hier</a> um dich zu registrieren";
$locale['UM066'] = "Passwort vergessen?<br />Um ein neues Passwort anzufordern <a href='".BASEDIR."lostpassword.php' class='side' title='klicke hier'>klicke hier</a>.";
$locale['UM067'] = "(not recommended on public or shared computer)";
$locale['UM080'] = "Profil bearbeiten";
$locale['UM081'] = "Private Nachrichten";
$locale['UM082'] = "Mitgliederliste";
$locale['UM083'] = "Adminbereich";
$locale['UM084'] = "Logout";
$locale['UM085'] = "Du hast %u neue ";
$locale['UM086'] = "Nachricht";
$locale['UM087'] = "Nachrichten";
$locale['UM088'] = "Verfolgte Themen";
// Submit (news, link, article)
$locale['UM089'] = "Senden...";
$locale['UM090'] = "News hinzuf&uuml;gen";
$locale['UM091'] = "Link hinzuf&uuml;gen";
$locale['UM092'] = "Artikel  hinzuf&uuml;gen";
$locale['UM093'] = "Foto  hinzuf&uuml;gen";
$locale['UM094'] = "Download hinzuf&uuml;gen";
$locale['UM095'] = "Submit Blog";
$locale['UM102'] = "Submit FAQ";
// User Panel
$locale['UM095'] = "Willkommen: ";
$locale['UM096'] = "Pers&oouml;nliches Menu";
$locale['UM097'] = "Sprache wechseln";
// Gauges
$locale['UM098'] = "Posteingang:";
$locale['UM099'] = "Postausgang:";
$locale['UM100'] = "Archiv:";
// Keywords and Meta
$locale['tags'] = "Tags";
$locale['notfound'] = "No Results Found..";
$locale['sel_user'] = "Select User";
// Sicherheitscode
$locale['global_150'] = "Sicherheitscode:";
$locale['global_151'] = "Sicherheitscode eingeben:";
// Footer Z&auml;hler
$locale['global_170'] = "eindeutiger Besuch";
$locale['global_171'] = "eindeutige Besuche";
$locale['global_172'] = "Seitenaufbau in %s Sekunden";
$locale['global_173'] = "DB-Abfragen";
$locale['global_174'] = "Memory used";
$locale['global_175'] = "Average: %s seconds";
$locale['global_176'] = "Privacy Policy";
// Admin Navigation
$locale['global_180'] = "Admin &Uuml;bersicht";
$locale['global_181'] = "Zur&uuml;ck zur Seite";
$locale['global_182'] = "<strong>Hinweis:</strong> Dein Admin Passwort ist fehlerhaft oder wurde nicht eingegeben.";
// Verschiedenes
$locale['global_190'] = "Wartungsmodus aktiviert";
$locale['global_191'] = "Deine IP-Adresse ist bei uns auf der Blacklist.";
$locale['global_192'] = "Dein Benutzercookie ist abgelaufen. Bitte logge dich erneut ein, um fortfahren zu k&ouml;nnen.";
$locale['global_193'] = "Das Benutzercookie konnte nicht gesetzt werden. Bitte stelle sicher, dass Cookies aktiviert sind, um dich korrekt anmelden zu k&ouml;nnen.";
$locale['global_194'] = "Dieser Account ist zur Zeit gesperrt.";
$locale['global_195'] = "Dieser Account ist noch nicht aktiviert.";
$locale['global_196'] = "Falscher Benutzername oder falsches Passwort.";
$locale['global_197'] = "Bitte warte, w&auml;hrend du weitergeleitet wirst ...<br /><br />";
$locale['global_197'] = "[ <a href='index.php' title='Oder klicke hier, wenn du nicht warten m&ouml;chtest'>Oder klicke hier, wenn du nicht warten m&ouml;chtest</a> ]";
$locale['global_198'] = "<strong>Hinweis:</strong> setup.php wurde gefunden. Bitte umgehend l&ouml;schen.";
$locale['global_199'] = "<strong>Hinweis:</strong> Du hast noch kein Admin Passwort gesetzt, klicke auf <a href='".BASEDIR."edit_profile.php' title='Profil bearbeiten'>Profil bearbeiten</a> um eines zu setzen.";
// Titel
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Suche";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
// Themes
$locale['global_210'] = "Zum Inhalt";
$locale['global_300']  = "Kein Theme gefunden";
$locale['global_301']  = "Wir m&ouml;chten uns Entschuldigen, aber diese Seite kann leider nicht angezeigt werden.\n";
$locale['global_301'] .= "Es wurde kein Theme gefunden.<br />\n";
$locale['global_301'] .= "Wenn du ein Seiten Administrator bist, nutze bitte dein FTP-Programm, um ein geeignetes Theme f&uuml;r <strong><em>PHP-Fusion v7</em></strong> in den Ordner <strong><em>themes/</em></strong> hochzuladen.\n";
$locale['global_301'] .= "Nach dem Upload &uuml;berpr&uuml;fe in den <strong><em>Haupteinstellungen</em></strong> ob das gew&auml;hlte Theme korrekt in den Ordner <strong><em>themes/</em></strong> hochgeladen wurde.\n";
$locale['global_301'] .= "Bitte beachte, dass der hochgeladene Theme Ordner den selben Namen (inklusive Gro&szlig;-/Kleinschreibung) wie in den <strong><em>Haupteinstellungen</em></strong> haben muss.<br />\n";
$locale['global_301'] .= "Wenn du ein normaler Benutzer bist, berichte bitte dem Seiten Administrator unter ".hide_email($settings['siteemail'])." &uuml;ber dieses Problem.<br />\n";
$locale['global_302']  = "Das in den Haupteinstellungen ausgew&auml;hlte Theme existiert nicht oder ist unvollst&auml;ndig.";
// Javascript deaktiviert
$locale['global_303']  = "Du hast in deinem Browser kein <strong>Javascript</strong> aktiviert.<br />\n";
$locale['global_303'] .= "Um diese Seite korrekt anzuzeigen ist Javascript jedoch zwingend n&ouml;tig.<br />\n";
$locale['global_303'] .= "Bitte aktiviere Javascript in den Einstellungen deines Browser beziehungswei&szlig;e besorge dir einen Browser, der diesen unterst&uuml;tzt.<br />\n";
$locale['global_303'] .= "<a href='http://www.firefox.com/' rel='nofollow' title='Mozilla Firefox'>Mozilla Firefox</a>&nbsp;|&nbsp;\n";
$locale['global_303'] .= "<a href='http://www.apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>&nbsp;|&nbsp;\n";
$locale['global_303'] .= "<a href='http://www.opera.com/' rel='nofollow' title='Opera'>Opera</a>&nbsp;|&nbsp;\n";
$locale['global_303'] .= "<a href='http://www.google.com/chrome/' rel='nofollow' title='Google Chrome'>Google Chrome</a>&nbsp;|&nbsp;\n";
$locale['global_303'] .= "<a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer h&ouml;her Version 6</a>\n";

// Mitgliederstatus
$locale['global_400'] = "Tempor&auml;r gesperrt";
$locale['global_401'] = "Gebannt";
$locale['global_402'] = "Deaktiviert";
$locale['global_403'] = "Account gel&ouml;scht";
$locale['global_404'] = "Account anonymisiert";
$locale['global_405'] = "Anonymer Benutzer";
$locale['global_406'] = "Dieser Account wurde aus folgenden Grund gesperrt:";
$locale['global_407'] = "Dieser Account ist tempor&auml;r gesperrt bis ";
$locale['global_408'] = " aus folgenden Grund:";
$locale['global_409'] = "Dieser Account wurde aus Sicherheitsgr&uuml;nden gesperrt.";
$locale['global_410'] = "Der Grund daf&uuml;r ist: ";
$locale['global_411'] = "Dieser Account wurde gel&ouml;scht.";
$locale['global_412'] = "Dieser Account wurde anonymisiert, weil der Benutzer m&ouml;glicherwei&szlig;e inaktiv war.";
// Autoban wegen Spam
$locale['global_440']  = "Automatische Sperre durch die Floodkontrolle";
$locale['global_441']  = "Dein Account auf ".$settings['sitename']." wurde gesperrt";
$locale['global_442']  = "Hallo [USER_NAME],\n\n";
$locale['global_442'] .= "dein Account auf ".$settings['sitename']." wurde wegen zuvieler Anfragen beziehungsweiße Postings über die IP-Adresse ".USER_IP." gesperrt.\n";
$locale['global_442'] .= "Dies geschah zum Schutz vor Spambots.\n";
$locale['global_442'] .= "Um deinen Account wieder zu aktivieren, oder uns mitzuteilen, dass dies nicht der Grund für die Sperre sein kann, kontaktiere bitte einen Administrator unter ".$settings['siteemail']."\n\n";
$locale['global_442'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];
// Account deaktivierung
$locale['global_450']  = "Sperre deines Accounts aufgehoben";
$locale['global_451']  = "Dein Account auf ".$settings['sitename']." wurde entsperrt";
$locale['global_452']  = "Hallo USER_NAME,\n\n";
$locale['global_452'] .= "die Sperre deines Accounts auf ".$settings['siteurl']." wurde aufgehoben.\n";
$locale['global_452'] .= "Deine Login Daten waren:\n";
$locale['global_452'] .= "Benutzername: USER_NAME\n";
$locale['global_452'] .= "Passwort: Aus Sicherheitsgründen nicht genannt.\n";
$locale['global_452'] .= "Solltest du dein Passwort vergessen haben, kannst du hier LOST_PASSWORD ein neues anfordern.\n\n";
$locale['global_452'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];
$locale['global_453']  = "Hallo USER_NAME,\n\n";
$locale['global_453'] .= "die Sperre deines Accounts auf ".$settings['siteurl']." wurde aufgehoben.\n\n";
$locale['global_453'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];
$locale['global_454']  = "Dein Account auf ".$settings['sitename']." wurde reaktiviert";
$locale['global_455']  = "Hallo USER_NAME,\n\n";
$locale['global_455'] .= "bei deinem letzten Login auf ".$settings['siteurl']." wurde dein Account reaktiviert und ist nicht mehr länger als inaktiv makiert.\n\n";
$locale['global_455'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Leer";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
// Weiterleitung
$locale['global_500'] = "Bitte warte, du wirst weitergeleitet zu %s. Sollte die Weiterleitung nicht funktionieren, klicke bitte hier.";
// Sicherheitscode
$locale['global_600'] = "Sicherheitscode";
$locale['global_601'] = "You must enter a correct validation code";
$locale['recaptcha']  = "de";
// Site links
$locale['global_700'] = "Show More";
//Miscellaneous
$locale['global_900'] = "Nicht m&ouml;glich HEX zu DEC umzuwandeln.";
$locale['global_901'] = "Insert Media";
//Language Selection
$locale['global_ML100'] = "Sprache:";
$locale['global_ML101'] = "- Sprache ausw&auml;hlen -";
$locale['global_ML102'] = "Seitensprache";
$locale['global_ML103'] = "Switch Language";
// Flood Control
$locale['flood'] = "Du wurdest durch die Floodkontrolle gesperrt. Bitte warte %t";
$locale['no_image'] = "No Image";
$locale['send_message'] = "Send Message";
$locale['go_profile'] = "Go to %s Profile Page";
// Global one word locales
$locale['hello'] = "Hello!";
$locale['goodbye'] = "Goodbye!";
$locale['welcome'] = "Welcome back";
$locale['home'] = "Home";
// Status
$locale['error'] = "Error!";
$locale['success'] = "Success!";
$locale['enable'] = "Enable";
$locale['disable'] = "Disable";
$locale['can'] = "can";
$locale['cannot'] = "cannot";
$locale['no'] = "No";
$locale['yes'] = "Yes";
$locale['off'] = "Off";
$locale['on'] = "On";
$locale['or'] = "or";
$locale['by'] = "by";
$locale['in'] = "in";
$locale['of'] = "of";
$locale['and'] = "and";
$locale['na'] = "No information available";
$locale['joined'] = "Joined since: ";
$locale['enter'] = "Enter";
// Navigation
$locale['next'] = "Next";
$locale['previous'] = "Previous";
$locale['back'] = "Back";
$locale['forward'] = "Forward";
$locale['go'] = "Go";
$locale['cancel'] = "Cancel";
$locale['clear'] = "Clear";
$locale['move'] = "Move";
$locale['move_up'] = "Move up";
$locale['move_down'] = "Move down";
$locale['load_more'] = "Load more Items";
$locale['load_end'] = "Load from Beginning";
// Actions
$locale['add'] = "Add";
$locale['save'] = "Save";
$locale['save_changes'] = "Save Changes";
$locale['save_and_close'] = "Save and Close";
$locale['confirm'] = "Confirm";
$locale['update'] = "Update";
$locale['updated'] = "Updated";
$locale['remove'] = "Remove";
$locale['delete'] = "Delete";
$locale['search'] = "Search";
$locale['help'] = "Help";
$locale['register'] = "Register";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Reactivate";
$locale['user'] = "User";
$locale['promote'] = "Promote";
$locale['show'] = "Show";
$locale['actions'] = "Actions";
$locale['language'] = "Language";
$locale['loading'] = "Loading...";
// Persons & Identifiers
$locale['you'] = "You";
$locale['me'] = "Me";
$locale['they'] = "They";
$locale['we'] = "We";
$locale['us'] = "Us";
$locale['he'] = "He";
$locale['she'] = "She";
$locale['it'] = "It";
//Tables
$locale['order'] = "Order";
$locale['sort'] = "Sort";
$locale['id'] = "ID";
$locale['title'] = "Title";
$locale['rights'] = "Rights";
$locale['info'] = "Info";
$locale['image'] = "Image";
// Forms
$locale['choose'] = "Please Choose One...";
$locale['no_opts'] = "No selection";
$locale['root'] = "As Parent";
$locale['choose-user'] = "Please Choose a User...";
$locale['choose-location'] = "Please Choose a Location";
$locale['parent'] = "Create as New Parent..";
$locale['item_order'] = "Item Ordering";
$locale['status'] = "Status";
$locale['note'] = "Make a note of this item";
$locale['publish'] = "Publish";
$locale['unpublish'] = "Unpublish";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Draft";
$locale['settings'] = "Settings";
$locale['posted'] = "posted";
$locale['profile'] = "Profile";
$locale['edit'] = "Edit";
$locale['qedit'] = "Quick Edit";
$locale['view'] = "View";
$locale['login'] = "Login";
$locale['logout'] = "Logout";
$locale['admin-logout'] = "Admin Logout";
$locale['message'] = "Private Messages";
$locale['logged'] = "Logged in as ";
$locale['version'] = "Version ";
$locale['browse'] = "Browse ...";
$locale['close'] = "Close";
$locale['nopreview'] = "There is nothing to Preview";
$locale['mark_as'] = "Mark As";
$locale['preview'] = "Preview";
$locale['custom'] = "Custom";
$locale['submit'] = "Submit";
// Alignment
$locale['left'] = "Left";
$locale['center'] = "Center";
$locale['right'] = "Right";
// Comments and ratings
$locale['comments'] = "Comments";
$locale['ratings'] = "Ratings";
$locale['comments_ratings'] = "Comments and Ratings";
$locale['user_account'] = "User Account";
$locale['about'] = "About";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "submission|submissions";
$locale['fmt_article'] = "article|articles";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "comment|comments";
$locale['fmt_vote'] = "vote|votes";
$locale['fmt_rating'] = "rating|ratings";
$locale['fmt_day'] = "day|days";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "follower|followers";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "guest|guests";
$locale['fmt_hour'] = "hour|hours";
$locale['fmt_item'] = "item|items";
$locale['fmt_member'] = "member|members";
$locale['fmt_message'] = "message|messages";
$locale['fmt_minute'] = "minute|minutes";
$locale['fmt_month'] = "month|months";
$locale['fmt_news'] = "news|news";
$locale['fmt_photo'] = "photo|photos";
$locale['fmt_post'] = "post|posts";
$locale['fmt_question'] = "question|questions";
$locale['fmt_read'] = "read|reads";
$locale['fmt_second'] = "second|seconds";
$locale['fmt_shouts'] = "shout|shouts";
$locale['fmt_thread'] = "thread|threads";
$locale['fmt_user'] = "user|users";
$locale['fmt_views'] = "view|views";
$locale['fmt_weblink'] = "weblink|weblinks";
$locale['fmt_week'] = "week|weeks";
$locale['fmt_year'] = "year|years";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "group|groups";
$locale['fmt_category'] = "category|categories";
$locale['fmt_review'] = "review|reviews";
