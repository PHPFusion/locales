<?php
$locale['BLS_000'] = "Svartlista"; //406
//Blacklist message
$locale['BLS_010'] = "Ogiltig e-postadress eller IP-adress.";
$locale['BLS_011'] = "Lägga till användare i svartlistan.";
$locale['BLS_012'] = "Användar modifierad svartlista.";
$locale['BLS_013'] = "Användare borttagen från svartlistan"; //401
$locale['BLS_014'] = "Är du säker på att du vill radera det här?";
$locale['BLS_015'] = "Svartlistan är för närvarande tom."; //465
$locale['BLS_016'] = "Epostadressen är inte giltig."; //405

$locale['BLS_020'] = "Svartlista Användare"; //420
$locale['BLS_021'] = "Redigera svartlistad användare"; //421
$locale['BLS_022'] = "Lägg till svartlistad användare";
$locale['BLS_023'] = "Visar för närvarande %d av %d totalt Svartlisteposter.";

$locale['BLS_030'] = "Svartlistade information"; //461
$locale['BLS_031'] = "Administratör"; //467
$locale['BLS_032'] = "Datum";  //468
$locale['BLS_033'] = "Alternativ"; //462
$locale['BLS_034'] = "Svartlista IP-adress: [STRONG]eller[/STRONG]"; //441
$locale['BLS_035'] = "Svartlista e-postadress"; //442
$locale['BLS_036'] = "Orsak till svartlistning"; //443
$locale['BLS_037'] = "Svartlista användare";  //444
$locale['BLS_038'] = "Uppdatera";
$locale['BLS_039'] = "Välj alla";

$locale['BLS_MS'] = "Att ange en IP-adress kommer att förhindra en användare vars IP-adress matchar posten från att besöka denna webbplats.
Du kan ange en fullständig IP, t.ex. <em>23.45.67.89.</em>, eller en partiell IP, e.. 
23.45.67</em> eller <em>123.45</em>.
Observera: IPv6-adresser konverteras till sitt fullständiga formulär på denna webbplats,
t.ex. <em>ABCD:1234:5:6:8:9:FF</em> kommer att visas som <em> ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Blandade IP-adresser (de innehåller både IPv6 och IPv4 del) kommer inte att kontrolleras för partiell matchning.
<br /><br />
Att ange en e-postadress kommer att hindra medlemmar från att registrera sig med den adressen.
Du kan ange en fullständig e-postadress, e.. <em>foo@bar.com</em>eller en e-postdomän, t.ex. <em>bar.com</em>.<br /><br />

% - matchar alla strängar.<br /><br />

%..%.%@domain.tld förbjuder alla adresser som innehåller minst 3 punkter.<br />
 %+%@domain.tld förbjuder alla adresser som innehåller minst ett plustecken.<br />
%@domain.tld förbjuder alla adresser från domain.tld<br />
%.domain.tld förbjuder alla underdomäner av domän. ld<br />
%payday% förbjuder alla adresser som innehåller ordet \"payday\" som ofta fanns på webbplatser.<br />
domain.tld är ett alias av %@domain.tld för att göra den kompatibel med regler som definieras i v7.<br />"; //440
