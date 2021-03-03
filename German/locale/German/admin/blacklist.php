<?php
$locale['BLS_000'] = "Blacklist"; //406
//Blacklist message
$locale['BLS_010'] = "Ung&uuml;ltige E-Mail oder IP-Adresse.";
$locale['BLS_011'] = "Benutzer zur Blacklist hinzufügen.";
$locale['BLS_012'] = "Benutzer geänderte Blacklist.";
$locale['BLS_013'] = "Benutzer von Blacklist gelöscht"; //401
$locale['BLS_014'] = "Wollen Sie diesen Eintrag wirklich löschen?";
$locale['BLS_015'] = "Die Blacklist ist zur Zeit leer."; //465
$locale['BLS_016'] = "E-Mail-Adresse der Blacklist ist ungültig."; //405

$locale['BLS_020'] = "Benutzer Blacklist"; //420
$locale['BLS_021'] = "Benutzer auf der Blacklist bearbeiten"; //421
$locale['BLS_022'] = "Benutzer auf der Blackliste hinzufügen";
$locale['BLS_023'] = "Derzeit werden %d von %d gesamten Blacklist-Einträgen angezeigt.";

$locale['BLS_030'] = "Blacklist Information"; //461
$locale['BLS_031'] = "Administrator"; //467
$locale['BLS_032'] = "Datum";  //468
$locale['BLS_033'] = "Optionen"; //462
$locale['BLS_034'] = "Sperrliste der IP-Adresse: [STRONG]oder[/STRONG]"; //441
$locale['BLS_035'] = "Sperrliste E-Mail Adresse"; //442
$locale['BLS_036'] = "Sperrlisten-Grund"; //443
$locale['BLS_037'] = "Benutzer Blacklist";  //444
$locale['BLS_038'] = "Aktualisieren";
$locale['BLS_039'] = "Alles";

$locale['BLS_MS'] = "Die Eingabe einer IP-Adresse verhindert, dass ein Benutzer, dessen IP-Adresse mit dem Eintrag übereinstimmt, diese Seite besucht.
Du kannst eine vollständige IP eingeben, z.B. <em>23.45.67.89.</em>, oder eine partielle IP, e.. 
23.45.67</em> oder <em>123.45</em>.
Bitte beachten Sie: IPv6-Adressen werden auf dieser Seite in ihre volle Länge konvertiert
z. <em>ABCD:1234:5:6:7:8:9:FF</em> wird als <em> ABCD:1234:0005:0006:0007:0008:0009:00FF</em>angezeigt.
Gemischte IP-Adressen (beide enthalten sowohl IPv6 als auch IPv4 Teil) werden nicht auf partielle Übereinstimmung überprüft.
<br /><br />
Die Eingabe einer E-Mail-Adresse wird Mitglieder daran hindern, sich unter dieser Adresse zu registrieren.
Sie können eine vollständige E-Mail-Adresse eingeben.. <em>foo@bar.com</em>oder eine E-Mail-Domain, z.B. <em>bar.com</em>.<br /><br />

% - passt zu jeder Zeichenkette.<br /><br />

%..%.%@domain.tld verbietet jede Adresse, die mindestens 3 Punkte enthält.<br />
 %+%@domain.tld verbietet jede Adresse, die mindestens ein Pluszeichen enthält.<br />
%@domain.tld verbietet jede Adresse von domain.tld<br />
%.domain.tld alle Subdomains der Domain. ld<br />
%payday% verbietet jede Adresse, die das Wort \"Zahlungstag\" enthält, das sehr oft auf Websites auftrat.<br />
domain.tld ist ein Alias für %@domain.tld um es mit in v7 definierten Regeln kompatibel zu machen.<br />"; //440
