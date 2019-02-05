<?php
// Member Management Options
$locale['400'] = "Užívatelia";
$locale['401'] = "Meno";
$locale['402'] = "Pridať nového užívateľa";
$locale['403'] = "Typ účtu";
$locale['404'] = "Nastavenia";
$locale['405'] = "Náhľad";
$locale['406'] = "Upraviť";
$locale['407'] = "Aktivovať";
$locale['408'] = "Odbanovať";
$locale['409'] = "Zabanovať";
$locale['410'] = "Vymazať";
$locale['411'] = "Neexistujú žiadny %s užívatelia";
$locale['412'] = " začínajúci na ";
$locale['413'] = " obsahujúci ";
$locale['414'] = "Ukázať všetkých";
$locale['415'] = "Hľadať užívateľa:";
$locale['416'] = "Hľadať";
$locale['417'] = "Vybrať akciu";
$locale['418'] = "Ukončenie";
$locale['419'] = "Obnoviť";
// Ban/Unban/Delete Member
$locale['420'] = "Zabanovaný";
$locale['421'] = "Odbanovaný";
$locale['422'] = "Užívateľ bol vymazaný";
$locale['423'] = "Ste si istý, že chcete vymazať tohoto užívateľa?";
$locale['424'] = "Užívateľ aktivovaný";
$locale['425'] = "<h2>Varovanie!</h2><br />
Chystáte sa odstrániť užívateľa <strong>%s</strong> !<br />
Ak budete pokračovať, nasledujúci obsah <u>uverejnený týmto užívateľom</u> na tejto stránke bude odstránený:<br />
- Články<br />
- Novinky<br />
- Vlákna fóra. Upozorňujeme, že aj príspevky ostatných používateľov v týchto vláknoch budú tiež odstránené spolu s hlasmi v anketách a prílohami, ktoré sa v tomto vlákne nachádzajú.<br />
- Príspevky vo fóre<br />
- Prílohy vo fóre<br />
- Komentáre<br />
- Súkromné správy odoslané alebo prijaté týmto užívateľom<br />
- Hlasy v anketách<br />
- Získané hodnotenia<br />
Pokiaľ to nie je spammer, napr. odporúčame vám zakázať, pozastaviť, zrušiť alebo anonymizovať tohto užívateľa.<br />
<br />
Naozaj chcete odstrániť tohto používateľa?<br />";
$locale['426'] = "Áno";
$locale['427'] = "Nie";
// Edit Member Details
$locale['430'] = "Upraviť užívateľa";
$locale['431'] = "Detaily užívateľa boli aktualizované";
$locale['432'] = "Návrat do administrácie užívateľov";
$locale['433'] = "Návrat do administrátorského indexu";
$locale['434'] = "Detaily užívateľa sa nedajú upraviť:";
// Extra Edit Member Details form options
$locale['440'] = "Uložiť zmeny";
// Update Profile Errors
$locale['450'] = "Nemôžem upraviť hlavného administrátora.";
$locale['451'] = "Musíte zadať meno a e-mailovú adresu.";
$locale['452'] = "Meno obsahuje nepovolené znaky.";
$locale['453'] = "Meno ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." už niekto používa. Zvoľte si prosím iné.";
$locale['454'] = "Nesprávna e-mailová adresa.";
$locale['455'] = "Emailovú adresu ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." už niekto používa. Zvoľte si prosím inú.";
$locale['456'] = "Nové heslá sa nezhodujú.";
$locale['457'] = "Nesprávne heslo. Používajte len alfa-numerické znaky.<br>
Heslo musí mať minimálne 6 znakov.";
$locale['458'] = "<strong>Upozornenie:<strong> nepovolené spustenie skriptu.";
// View Member Profile
$locale['470'] = "Profil";
$locale['472'] = "Štatistiky";
$locale['473'] = "Užívateľské skupiny";
// Add Member Errors
$locale['480'] = "Pridať užívateľa";
$locale['481'] = "Konto bolo úspešne vytvorené.";
$locale['482'] = "Konto nebolo vytvorené.";
// Suspension Log
$locale['510s'] = "Záznam o pozastavení pre ";
$locale['511s'] = "Nie je záznam o pozastavení pre tohto užívateľa.";
$locale['512s'] = "Predošlé pozastavenia v ";
$locale['513'] = "Č."; // as in number
$locale['514'] = "Dátum";
$locale['515'] = "Dôvod";
$locale['516'] = "Pozastavujúci administrátor";
$locale['517'] = "Akcia systému";
$locale['518'] = "Späť do profilu užívateľa";
$locale['519'] = "Záznam o pozastavení pre tohto užívateľa ";
$locale['520'] = "Vyňatý: ";
$locale['521'] = "IP: ";
$locale['522'] = "Zatiaľ neobnovený";
$locale['540'] = "Chyba";
$locale['541'] = "Chyba: Musíte uviesť dôvod pre pozastavenie!";
$locale['542'] = "Chyba: Musíte uviesť dôvod pre bezpečnostný BAN!";
// User Management Admin
$locale['550'] = "Pozastavený užívateľ: ";
$locale['551'] = "Pozastavenie v dňoch:";
$locale['552'] = "Dôvod:";
$locale['553'] = "Pozastavenie";
$locale['554'] = "Nie je záznam o pozastavení pre tohto užívateľa.";
$locale['555'] = "Ak ste sa rozhodli, že tento užívateľ by mal byť pozastavený, kliknite na 'Ban'";
$locale['556'] = "Vyňatie z pozastavenia užívateľa: ";
$locale['557'] = "Vyňatie z pozastavenia";
$locale['558'] = "Vyňatie z banu užívateľa: ";
$locale['559'] = "Vyňatie z banu ";
$locale['560'] = "Vyňatie z bezpečnostného banu užívateľa: ";
$locale['561'] = "Vyňatie z bezpečnostného banu";
$locale['562'] = "Ban užívateľa: ";
$locale['563'] = "Bezpečnostný Ban užívateľa: ";
$locale['585a'] = "Prosím uveďte dôvod, prečo je banovaný/odbanovaný ";
$locale['566'] = "Ban vyňatý";
$locale['568'] = "Bezpečnostný Ban daný";
$locale['569'] = "Bezpečnostný Ban vyňatý";
$locale['572'] = "Pozastavený užívateľ";
$locale['573'] = "Pozastavenie vyňaté";
$locale['574'] = "Deaktivovaný užívateľ";
$locale['575'] = "Reaktivovaný užívateľ";
$locale['576'] = "Účet ukončený";
$locale['577'] = "Účet nebol ukončený";
$locale['578'] = "Účet zrušený a utajený";
$locale['579'] = "Účet nebol utajený";
$locale['580'] = "Deaktivácia neaktívnych užívateľov";
$locale['581'] = "Máte viac než 50 neaktívnych užívateľov a budete musieť spustiť deaktivačný proces <strong>%d časov</strong>.";
$locale['582'] = "Reaktivácia";
$locale['583'] = "Obnovenie";
$locale['584'] = "Vyberte novú funkciu";
$locale['585'] = "Tento užívateľ bol pôvodne zakázaný z bezpečnostných dôvodov! Ste si istý, že chcete zrušiť zákaz tohto užívateľa ?";
$locale['590'] = "Pozastavenie";
$locale['591'] = "Obnovenie";
$locale['592'] = "pozastavenie";
$locale['593'] = "obnovenie";
$locale['594'] = "Zadajte prosím dôvod, prečo ste  ";
$locale['595'] = " užívateľ ";
$locale['596'] = "Trvanie:";
$locale['600'] = "Bezpečnostný ban";
$locale['601'] = "bezpečnostné banovanie";
$locale['602'] = "Odban";
$locale['603'] = "odbanovanie";
$locale['604'] = "Dôvod:";
// Deactivation System
$locale['610'] = "<strong>%d užívateľ(s)</strong> nebol prihlásený <strong>%d deň(dní)</strong> a bol označený ako neaktívny.
Deaktivovaním budú mať títo užívatelia <strong>%d dní(s)</strong> predtým, než sú %s.";
$locale['611'] = "Vezmite prosím na vedomie, že niektorí užívatelia môžu mať predložený obsah na vašich stránkach, ako sú fóra, komentáre, fotky atď.
tie budú vymazané spolu s deaktivovaním užívateľa.";
$locale['612'] = "užívateľ";
$locale['613'] = "užívatelia";
$locale['614'] = "Deaktivácia";
$locale['615'] = "úplne zmazaný";
$locale['616'] = "utajenie";
$locale['617'] = "Varovanie:";
$locale['618'] = "Doporučuje sa zmeniť deaktivačnú akciu na anonimizáciu, aby sa nestratili dáta!";
$locale['619'] = "Môžete tak urobiť tu.";
$locale['620'] = "utajenie";
$locale['621'] = "Automatická deaktivácia neaktívnych užívateľov.";
