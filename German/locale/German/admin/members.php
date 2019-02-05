<?php
// Benutzer Verwaltung Optionen
$locale['400'] = "Benutzer Verwaltung";
$locale['401'] = "Benutzer";
$locale['402'] = "Neuen Benutzer hinzuf&uuml;gen";
$locale['403'] = "Benutzertyp";
$locale['404'] = "Optionen";
$locale['405'] = "Ansehen";
$locale['406'] = "Bearbeiten";
$locale['407'] = "Aktivieren";
$locale['408'] = "Entsperren";
$locale['409'] = "Sperren";
$locale['410'] = "L&ouml;schen";
$locale['411'] = "Es gibt keine %s Mitglieder";
$locale['412'] = ", beginnend mit ";
$locale['413'] = ", zutreffend ";
$locale['414'] = "Alle anzeigen";
$locale['415'] = "Mitglied suchen:";
$locale['416'] = "Los";
$locale['417'] = "Aktion ausw&auml;hlen";
$locale['418'] = "Abbrechen";
$locale['419'] = "Zur&uuml;cksetzten";

// Mitglied Bannen/Unbannen/Loeschen
$locale['420'] = "Die Sperre wurde gespeichert.";
$locale['421'] = "Die Sperre wurde aufgehoben.";
$locale['422'] = "Der Benutzer wurde gel&ouml;scht.";
$locale['423'] = "Willst du diesen Benutzer wirklich löschen?";
$locale['424'] = "Der Benutzer wurde aktiviert.";
$locale['425'] = "<h2>Warnung!</h2><br />
Sie sind dabei das Mitglied <strong>%s</strong> zu l&ouml;schen!<br />
Die folgenden Inhalte <u>von diesem Mitglied</u> auf dieser Webseite werden dann gelöscht:<br />
- Artikel<br />
- News<br />
- Themen im Forum. Bitte beachten Sie, dass Beitr&auml;ge von anderen Mitgliedern, die in diesen Themen gepostet wurden zusammen mit Umfragen und Anh&auml;gen ebenfalls gel&ouml;scht werden.<br />
- Forumbeiträge<br />
- Forumanh&auml;nge<br />
- Kommentare<br />
- Private Nachrichten, die von diesem Mitglied gesendet oder empfangen wurden<br />
- Umfragestimmen<br />
- Bewertungen<br />
Es sei denn dieses Mitglied ist z.B. ein Spammer. Dann empfehlen wir Ihnen dieses zu Bannen oder zu Suspendieren.<br />
<br />
Sind Sie sicher, dass Sie dieses Mitglied l&ouml;schen wollen?<br />";
$locale['426'] = "Ja";
$locale['427'] = "Nein";

// Mitglied bearbeiten
$locale['430'] = "Benutzer bearbeiten";
$locale['431'] = "Der Benutzer wurde aktualisiert.";
$locale['432'] = "Zur&uuml;ck zur Benutzer Verwaltung";
$locale['433'] = "Zur&uuml;ck zur Administrations &Uuml;bersicht";
$locale['434'] = "Der Benutzer konnte nicht aktualisiert werden:";
$locale['440'] = "&Auml;nderungen speichern";

// Aenderungen speichern Fehler
$locale['450'] = "Du kannst den Seiten Administrator nicht bearbeiten.";
$locale['451'] = "Du musst einen Benutzernamen und eine E-Mail Adresse angeben.";
$locale['452'] = "Der Benutzername enth&auml;hlt ung&uuml;ltige Zeichen.";
$locale['453'] = "Der Benutzername &quot;<em>".(isset($_POST['user_name']) ? $_POST['user_name'] : "")."</em>&quot; ist bereits in Verwendung.";
$locale['454'] = "Die angegebene E-Mail Adresse ist fehlerhaft oder enth&auml;lt ung&uuml;ltige Zeichen.";
$locale['455'] = "Die E-Mail Adresse &quot;<em>".(isset($_POST['user_email']) ? $_POST['user_email'] : "")."</em>&quot; ist bereits in Verwendung.";
$locale['456'] = "Die neuen Passw&ouml;rter stimmen nicht &uuml;berein.";
$locale['457'] = "Das Passwort enth&aum;lt ung&uuml;ltige Zeichen.<br />\n";
$locale['457'] .= "Das Passwort muss mindestens 8 Zeichen lang sein.<br />\n";
$locale['458'] = "<strong>Warnung:</strong> Unerwartete Scriptausf&uuml;hrung.";

// Mitglied Profil anzeigen
$locale['470'] = "Benutzer Profil";
$locale['472'] = "Statistiken";
$locale['473'] = "Benutzergruppen";

// Mitglied hinzufuegen
$locale['480'] = "Benutzer hinzuf&uuml;gen";
$locale['481'] = "Der Benutzer wurde hinzugef&uuml;gt.";
$locale['482'] = "Der Benutzer konnte nicht hinzugef&uuml;gt werden.";

// Mitglied sperren
$locale['510s'] = "Sperrprotokoll f&uuml;r ";
$locale['511s'] = "Es liegen keine tempor&auml;ren Sperren f&uuml;r diesen Benutzer vor.";
$locale['512s'] = "&Auml;ltere tempor&auml;re Sperren von ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Datum";
$locale['515'] = "Grund";
$locale['516'] = "Verantwortlicher";
$locale['517'] = "System Aktion";
$locale['518'] = "Zur&uuml;ck zum Benutzer Profil";
$locale['519'] = "Sperrprotokoll f&uuml;r diesen Benutzer ";
$locale['520'] = "Aufgehoben: ";
$locale['521'] = "IP-Adresse: ";
$locale['522'] = "Noch nicht aufgehoben";
$locale['540'] = "Fehler";
$locale['541'] = "Fehler: Du musst einen Grund f&uuml;r die tempor&aum;re Sperrung angeben.";
$locale['542'] = "Fehler: Du musst einen Grund f&uuml;r die Sicherheitssperre angeben.";

// Benutzer Verwaltung Admin
$locale['550'] = "Benutzer tempor&auml;r sperren: ";
$locale['551'] = "Dauer (Tage):";
$locale['552'] = "Grund:";
$locale['553'] = "Sperren";
$locale['554'] = "Es liegen keine tempor&auml;ren Sperren f&uuml;r diesen Benutzer vor.";
$locale['555'] = "Wenn du m&ouml;chtest, dass der Benutzer gesperrt wird, so klicke auf 'Sperren'.";
$locale['556'] = "Tempor&auml;re Sperre aufheben von: ";
$locale['557'] = "Tempor&auml;re Sperre aufheben";
$locale['558'] = "Sperre aufheben von: ";
$locale['559'] = "Sperre aufheben";
$locale['560'] = "Sicherheitssperre aufheben von: ";
$locale['561'] = "Sicherheitssperre aufheben";
$locale['562'] = "Benutzer sperren: ";
$locale['563'] = "Benutzer aus Sicherheitsgr&uuml;nden sperren: ";
$locale['585a'] = "Du musst einen Grund f&uuml;r die Sperrung beziehungswei&szlig;e f&uuml;r die Aufhebung der Sperre angeben.";

$locale['566'] = "Sperre aufgehoben";
$locale['568'] = "Sicherheitssperre verh&auml;ngt";
$locale['569'] = "Sicherheitssperre aufgehoben";
$locale['572'] = "Benutzer tempor&auml;r gesperrt";
$locale['573'] = "Tempor&auml;re Sperre aufgehoben";
$locale['574'] = "Benutzer deaktiviert";
$locale['575'] = "Benutzer reaktiviert";
$locale['576'] = "Account aufgel&ouml;st";
$locale['577'] = "Accountaufl&ouml;sung r&uuml;ckg&auml;ngig gemacht";
$locale['578'] = "Account aufgel&ouml;st und anonymisiert";
$locale['579'] = "Account Anonymisierung r&uuml;ckg&auml;ngig gemacht";
$locale['580'] = "Inaktive Benutzer reaktivieren";
$locale['581'] = "Du hast mehr als 50 inaktive Benutzer und musst den Deaktivierungsprozess noch <strong>%d mal</strong> durchf&uuml;hren.";
$locale['582'] = "Reaktivieren";
$locale['583'] = "Wieder einsetzen";
$locale['584'] = "W&auml;hle neuen Status";
$locale['585'] = "Dieser Benutzer wurde urspr&uuml;nglich aus Sicherheitsgr&uuml;nden gesperrt! Bist du dir sicher, dass du diesen Benutzer entsperren m&ouml;chtest?";
$locale['590'] = "Tempor&auml;re Sperre f&uuml;r";
$locale['591'] = "Tempor&auml;re Sperre aufheben f&uuml;r";
$locale['592'] = "tempor&auml;re Sperre";
$locale['593'] = "Aufhebung der tempor&auml;ren Sperre";
$locale['594'] = "Bitte gib einen Grund an f&uuml;r die ";
$locale['595'] = " von ";
$locale['596'] = "Dauer:";
$locale['600'] = "Sicherheitssperre";
$locale['601'] = "aus Sicherheitsgr&uuml;nden sperrst";
$locale['602'] = "Sperre aufheben";
$locale['603'] = "Sperre aufheben";
$locale['604'] = "Grund:";

// Deactivation System
$locale['610'] = "<strong>%d Benutzer</strong> waren nicht eingeloggt seit <strong>%d Tag(en)</strong> und wurden als inaktiv gekennzeichnet. Durch die Deaktivierung haben diese Benutzer <strong>%d Tag(e)</strong> Zeit bevor Sie %s werden.";
$locale['611'] = "Bitte beachte, dass einige Benutzer Inhalte eingereicht haben wie z.B. Forenbeitr&auml;ge, Kommentare, Fotos usw. Diese werden gel&ouml;scht, sobald die deaktivierten Benutzer gel&ouml;scht werden.";
$locale['612'] = "Benutzer";
$locale['613'] = "Benutzer";
$locale['614'] = "Deaktivieren";
$locale['615'] = "dauerhaft gel&ouml;scht";
$locale['616'] = "anonymisieren";
$locale['617'] = "Warnung:";
$locale['618'] = "Es wird dringend empfohlen, den Deaktivierungsprozess von L&ouml;schen auf Anonymisieren zu &auml;ndern, um Datenverlust zu verhindern!";
$locale['619'] = "Um das zu tun klicke <a href='".ADMIN."settings_users.php".$aidlink."'>hier</a>.";
$locale['620'] = "anonymisieren";
$locale['621'] = "Automatische Deaktivierung von inaktiven Benutzern.";
?>