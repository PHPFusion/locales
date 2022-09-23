<?php
$locale['setup_0000'] = "Instalacja PHPFusion";
$locale['setup_0002'] = "Witamy w instalatorze PHPFusion";
$locale['setup_0003'] = "Podręcznik instalatora poprowadzi Cię przez kroki wymagane do zainstalowania PHPFusion CMS na Twoim serwerze. Jeśli potrzebujesz dodatkowej pomocy, sprawdź naszą <a class='strong' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=216' target='_blank'>dokumentację instalacji online</a>.";
$locale['setup_0005'] = " Przeczytałem i akceptuję <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>regulamin użytkowania</a> PHPFusion";
$locale['setup_0006'] = "PHPFusion 9 wymaga co najmniej PHP w wersji 7.0. Więcej informacji można znaleźć w sekcji <a href=\"https://phpfusion.com/infusions/wiki/documentation.php?page_id=215\">wymagania systemowe</a>.";
$locale['setup_0007'] = "Systemy z zainstalowanym OPcache muszą mieć włączone <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a>.";
$locale['setup_5000'] = "Aby korzystać z PHPFusion, musisz sprawdzić i zaakceptować warunki PHPFusion</a>.";
$locale['setup_0010'] = "Aktualna wersja wydania - ";
$locale['setup_0011'] = "pl";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "Aktualizacja PHPFusion";
$locale['setup_0022'] = "Witamy w aktualizacji usługi PHPFusion";
$locale['setup_0023'] = "Usługa uaktualniania poprowadzi Cię przez kroki wymagane do uaktualnienia PHPFusion CMS na Twoim serwerze. Wykonaj następujące czynności za pośrednictwem przewodnika i sprawdź wymagane informacje.";
$locale['setup_0050'] = "Serwer internetowy";
$locale['setup_0051'] = "Wersja PHP";
$locale['setup_0052'] = "Rozszerzenie PHP";
$locale['setup_0053'] = "Wsparcie dla OPCache";
$locale['setup_0054'] = "Wsparcie bazy danych PDO";
$locale['setup_0055'] = "Limit pamięci PHP";
$locale['setup_0056'] = "Wymagania dotyczące wyboru plików";
$locale['setup_0101'] = "Wprowadzenie";
$locale['setup_0102'] = "Wymagania systemowe";
$locale['setup_0103'] = "Ustawienia bazy danych";
$locale['setup_0104'] = "Ustawienia konfiguracji / bazy danych";
$locale['setup_0105'] = "Konfigurowanie podstawowego systemu";
$locale['setup_0106'] = "Główne dane administratora";
$locale['setup_0107'] = "Ustawienia końcowe";
$locale['setup_0109'] = "Minimalna wersja Apache potrzebna do uruchomienia PHPFusion bez włączania mod_rewrite to 2.2.16.";
$locale['setup_0110'] = "Ze względu na ustawienia Servertokens w pliku httpd.conf, niemożliwe jest określenie wersji Apache bez mod_rewrite, wymagana jest minimalna wersja 2.2.16.";
$locale['setup_0112'] = "Funkcja phpinfo () została wyłączona ze względów bezpieczeństwa. Aby zobaczyć informacje o serwerze phpinfo (), zmień ustawienia PHP lub skontaktuj się z administratorem serwera.";
$locale['setup_0113'] = "Twoja instalacja PHP jest za stara. PHPFusion wymaga przynajmniej co najmniej 5.5.21. Wersje PHP wyższe niż 5.6.5 lub 5.5.21 zapewniają wbudowaną ochronę przed wtryskiem SQL dla baz danych mysql. Zaleca się aktualizację.";
$locale['setup_0114'] = "PHPFusion wymaga włączenia rozszerzenia PHP na poniższej liście";
$locale['setup_0115'] = "Włączone";
$locale['setup_0115a'] = "Nie włączone";
$locale['setup_0116'] = "Buforowanie PHP OPcode może poprawić wydajność witryny. Jest to <strong>wysoce zalecane</strong>, aby <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> został zainstalowany na serwerze.";
$locale['setup_0118'] = "Twój serwer sieci Web nie wydaje się obsługiwać PDO (obiektów danych PHP). Poproś dostawcę usługi hostingowej o wsparcie rodzimego rozszerzenia PDO.";
$locale['setup_0119a'] = "Rozważ zwiększenie limitu pamięci PHP do %memory_minimum_limit, aby zapobiec błędom w procesie instalacji";
$locale['setup_0119b'] = "Zwiększ limit pamięci, edytując parametr memory_limit w pliku [CFG_FILE_PATH], następnie zrestartuj serwer WWW (lub skontaktuj się z administratorem systemu lub dostawcą usług hostingowych w celu uzyskania pomocy).";
$locale['setup_0119c'] = "Skontaktuj się z administratorem systemu lub dostawcą usług hostingowych w celu zwiększenia limitu pamięci w PHP.";
// Buttons
$locale['setup_0120'] = "Zakończ konfigurację";
$locale['setup_0121'] = "Zapisz i wykonaj";
$locale['setup_0122'] = "Spróbuj ponownie";
$locale['setup_0124'] = "Przejdź do opcji odzyskiwania";
$locale['setup_0125'] = "Deinstalacja w toku. Proszę czekać...";
$locale['setup_0130'] = "Ustawienia Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level jest ustawione na";
$locale['setup_0132'] = "Ustaw {%code%} w konfiguracji PHP, ponieważ niektóre strony w witrynie Drupal nie będą działać, gdy to ustawienie jest za niskie.";
$locale['setup_0134'] = "Wszystkie wymagane pliki przekazały wymagania zapisu plików.";
$locale['setup_0135'] = "Aby kontynuować konfigurację, następujące pliki i foldery powinny być zapisywalne. Ustaw chmod dla plików na 755 i 777";
$locale['setup_0136'] = "Nie zapisywalne (Źle)";
$locale['setup_0137'] = "Zapisywalne (Dobrze)";
$locale['setup_0138'] = "Utworzono połączenie z bazą danych";
$locale['setup_0139'] = "Wybór kolumny bazy danych";
$locale['setup_0140'] = "Baza danych jest dostępna i jest gotowa do instalacji";
$locale['setup_0141'] = "Uprawnienia i dostęp do bazy danych zweryfikowano";
$locale['setup_0142'] = "Utworzono plik config.php";
$locale['setup_0143'] = "Podany przedrostek tabeli jest już w użyciu i jest uruchomiony. Instalator będzie kontynuować aktualizację różnice jako wymagane";
$locale['setup_0144'] = "Diagnostyka bazy danych została zakończona";
// Step 1
$locale['setup_1000'] = "Proszę wybrać język";
$locale['setup_1001'] = "Pobierz więcej pakietów regionalnych z <a href='https://phpfusion.com/downloads.php#langpacks' target='_blank'><strong>oficjalnej strony wsparcia PHPFusion</strong></a>";
$locale['setup_1002'] = "Witamy w tryb odzyskiwania PHPFusion 9.0.";
$locale['setup_1003'] = "Wykryliśmy, że zainstalowany jest istniejący system. Wybierz jedną z poniższych czynności, aby kontynuować.";
$locale['setup_1004'] = "Czysta instalacja";
$locale['setup_1005'] = "Można odinstalować i wyczyścić bazę danych i ponownie uruchomić czystą instalację.";
$locale['setup_1006'] = "NALEŻY WYKONAĆ KOPIĘ ZAPASOWĄ PLIKU CONFIG.PHP. ZOSTANIE USUNIĘTY Z SYSTEMU PODCZAS ODINSTALOWYWANIA.";
$locale['setup_1007'] = "Odinstaluj i uruchom ponownie";
$locale['setup_1008'] = "Instalator systemu rdzenia";
$locale['setup_1009'] = "Zmień konfiguracje systemu rdzenia.";
$locale['setup_1010'] = "Przejdź do instalatora systemu";
$locale['setup_1011'] = "Zmień podstawowe dane konta";
$locale['setup_1012'] = "Zmień dane super administratora bez konieczności odzyskiwania hasła lub przeniesienia własności konta SA na inną osobę.";
$locale['setup_1013'] = "Zmień szczegółowe informacje o administratorze";
$locale['setup_1014'] = "Przebuduj .htaccess";
$locale['setup_1015'] = "drzuć bieżący plik i zastąp go standardową wersją pliku .htaccess";
$locale['setup_1017'] = "Anuluj i zamknij ten instalator";
$locale['setup_1018'] = "Możesz teraz zamknąć instalator, klikając przycisk poniżej. Spowoduje to zmianę nazwy pliku config_temp.php z powrotem na config.php.";
$locale['setup_1019'] = "Zakończ instalację";
$locale['setup_1020'] = "Utworzono/zaktualizowano plik .htaccess";
// Step 2
$locale['setup_1090'] = "Pliki";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Konfiguracja bazy danych i sterownik";
$locale['setup_1106'] = "Serwer i diagnostyka wymagana struktury plików";
// Step 3 - Access criteria
$locale['setup_1200'] = "Ustawienia bazy danych i ścieżki serwera";
$locale['setup_1201'] = "Proszę wprowadzić ustawienia dostępu do bazy danych MySQL.";
$locale['setup_1202'] = "Nazwa hosta bazy danych:";
$locale['setup_1202a'] = "Port bazy danych:";
$locale['setup_1202b'] = "Pozostaw puste, jeśli nie używasz innego portu";
$locale['setup_1203'] = "Nazwa użytkownika bazy danych:";
$locale['setup_1204'] = "Hasło bazy danych:";
$locale['setup_1205'] = "Nazwa bazy danych:";
$locale['setup_1206'] = "Prefiks tabeli:";
$locale['setup_1207'] = "Prefiks pliku cookie:";
$locale['setup_1208'] = "Sterownik bazy danych";
// Step 4 - Database Setup
$locale['setup_1210'] = "Błędy instalacji PHPFusion. Zrestartuj instalatora.";
$locale['setup_1211'] = "Zakończono nową instalację PHPFusion. Przejdź do następnego kroku.";
$locale['setup_1212'] = "Konfiguracje witryn i super administratorów";
$locale['setup_1213'] = "Szczegóły witryny";
$locale['setup_1214'] = "Nazwa strony";
$locale['setup_1215'] = "Strona internetowa PHPFusion";
$locale['setup_1216'] = "PHPFusion to lekki system zarządzania treścią open source (CMS) napisany w PHP.";
$locale['setup_1217'] = "Twoje konto jest uaktualnione. Proszę korzystać z nowych list uwierzytelniających od tej chwili.";
$locale['setup_1220'] = "Nazwa bazy danych, którą chcesz uruchomić PHPFusion";
$locale['setup_1221'] = "Twoja nazwa użytkownika MYSQL";
$locale['setup_1222'] = "... i hasło MYSQL";
$locale['setup_1223'] = "Zrobi to bardzo unikalną ochronę bazy danych";
$locale['setup_1224'] = "Prefiks identyfikatora Cookie przeglądarki";
$locale['setup_1225'] = "np. localhost";
$locale['setup_1307'] = "Upewnij się, że config.php jest zapisywalny.";
$locale['setup_1310'] = "Nie można połączyć się z bazą danych MySQL.";
$locale['setup_1311'] = "Podana baza danych MySQL nie istnieje.";
$locale['setup_1313'] = "Podany przedrostek tabeli jest już w użyciu i jest uruchomiony. Nie zostaną zainstalowane żadne tabele. Zacznij od początku lub przejdź do następnego kroku.";
$locale['setup_1315'] = "Upewnij się, że użytkownik MySQL ma prawa do odczytytywania, pisania i usuwania uprawnienia dla wybranej bazy danych.";
$locale['setup_1317'] = "Upewnij się, że wypełniłeś wszystkie pola potrzebne do połączenia z MySQL.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Pierwsze konto Super Admin";
$locale['setup_1501'] = "Skonfiguruj szczegóły swojego konta Super Administratora.";
$locale['setup_1504'] = "Nazwa użytkownika:";
$locale['setup_1505'] = "Hasło logowania:";
$locale['setup_1506'] = "Powtórz hasło logowania:";
$locale['setup_1507'] = "Hasło administratora:";
$locale['setup_1508'] = "Powtórz hasło administratora:";
$locale['setup_1509'] = "Adres e-mail:";
$locale['setup_1510'] = "Adres e-mail witryny:";
$locale['setup_1511'] = "Wybierz region witryny:";
$locale['setup_1512'] = "Instalacja języków strony:";
$locale['setup_1513'] = "Nazwa właściciela witryny";
// Progress Reports
$locale['setup_1600'] = "Instalacja ";
$locale['setup_1601'] = "Aktualizowanie struktury tabeli ";
$locale['setup_1602'] = "Dodawanie nowej kolumny ";
$locale['setup_1603'] = "Populacja danych ";
// Step 6 - User details validation
$locale['setup_5010'] = "Nazwa użytkownika zawiera nieprawidłowe znaki.";
$locale['setup_5011'] = "Pole nazwy użytkownika nie może pozostać puste.";
$locale['setup_5012'] = "Twoje dwa hasła logowania różnią się.";
$locale['setup_5013'] = "Nieprawidłowe hasło logowania, użyj tylko znaków alfanumerycznych.<br />Hasło musi mieć długość minimum 8 znaków";
$locale['setup_5015'] = "Twoje dwa hasła administratora różnią się.";
$locale['setup_5016'] = "Hasło użytkownika i hasło administratora muszą się różnić.";
$locale['setup_5017'] = "Nieprawidłowe hasło administratora, użyj tylko znaków alfanumerycznych.<br />Hasło musi mieć długość minimum 8 znaków";
$locale['setup_5020'] = "Pole adresu e-mail nie może pozostać puste.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administratorzy";
$locale['setup_3002'] = "Artykuły";
$locale['setup_3003'] = "Banery";
$locale['setup_3004'] = "Kody BB";
$locale['setup_3005'] = "Czarna lista";
$locale['setup_3006'] = "Komentarze";
$locale['setup_3007'] = "Dodatkowe strony";
$locale['setup_3008'] = "Kopia zapasowa bazy danych";
$locale['setup_3010'] = "Download";
$locale['setup_3011'] = "FAQ";
$locale['setup_3012'] = "Fora";
$locale['setup_3013'] = "Obrazy";
$locale['setup_3014'] = "Wtyczki";
$locale['setup_3015'] = "Panele wtyczki";
$locale['setup_3016'] = "Użytkownicy";
$locale['setup_3018'] = "Aktualności";
$locale['setup_3019'] = "Panele";
$locale['setup_3020'] = "Galeria";
$locale['setup_3021'] = "Informacja o serwerze";
$locale['setup_3022'] = "Ankiety";
$locale['setup_3023'] = "Linki witryny";
$locale['setup_3024'] = "Emotoikony";
$locale['setup_3026'] = "Aktualizacja";
$locale['setup_3027'] = "Grupy użytkowników";
$locale['setup_3029'] = "Katalog stron";
$locale['setup_3030'] = "Główne";
$locale['setup_3031'] = "Data i czas";
$locale['setup_3033'] = "Rejestracja";
$locale['setup_3035'] = "Różne";
$locale['setup_3036'] = "Prywatne wiadomości";
$locale['setup_3037'] = "Pola użytkownika";
$locale['setup_3038'] = "Rangi na forum";
$locale['setup_3041'] = "Zarządzanie użytkownikiem";
$locale['setup_3044'] = "Bezpieczeństwo";
$locale['setup_3047'] = "Resetowanie hasła administratora";
$locale['setup_3048'] = "Logi błędów";
$locale['setup_3049'] = "Dziennik użytkownika";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Ustawienia językowe";
$locale['setup_3052'] = "Odnośniki bezpośrednie";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Menedżer motywów";
$locale['setup_3057'] = "Narzędzie migracji";
$locale['setup_3058'] = "Ustawienia motywu";
$locale['setup_3059'] = "Menedżer plików Fusion";
// Multilanguage table rights
$locale['setup_3200'] = "Artykuły";
$locale['setup_3201'] = "Dodatkowe strony";
$locale['setup_3202'] = "Download";
$locale['setup_3203'] = "FAQ";
$locale['setup_3204'] = "Fora";
$locale['setup_3205'] = "Aktualności";
$locale['setup_3206'] = "Galeria";
$locale['setup_3207'] = "Ankiety";
$locale['setup_3208'] = "Szablony e-mail";
$locale['setup_3209'] = "Katalog stron";
$locale['setup_3210'] = "Linki witryny";
$locale['setup_3211'] = "Panele";
$locale['setup_3212'] = "Rangi na forum";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Strona główna";
$locale['setup_3302'] = "Download";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Forum";
$locale['setup_3305'] = "Kontakt";
$locale['setup_3307'] = "Katalog stron";
$locale['setup_3308'] = "Galeria";
$locale['setup_3309'] = "Wyszukiwarka";
$locale['setup_3310'] = "Dodaj link";
$locale['setup_3311'] = "Dodaj aktualność";
$locale['setup_3312'] = "Dodaj artykuł";
$locale['setup_3313'] = "Dodaj zdjęcie";
$locale['setup_3314'] = "Dodaj plik";
$locale['setup_3315'] = "Zgłoszenia";
$locale['setup_3316'] = "Czat";
$locale['setup_3317'] = "Dodaj wpis";
$locale['setup_3318'] = "Archiwum blogu Panel";
$locale['setup_3319'] = "Najnowsze dyskusje";
$locale['setup_3320'] = "Uczestnicy dyskusji";
$locale['setup_3321'] = "Obserwowane wątki";
$locale['setup_3322'] = "Wątki bez odpowiedzi";
$locale['setup_3323'] = "Nierozwiązane pytania";
$locale['setup_3324'] = "Nowy wątek";
$locale['setup_3325'] = "Najnowsze artykuły";
$locale['setup_3326'] = "Najnowsze pliki";
$locale['setup_3327'] = "Dodaj FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Nawigacja";
$locale['setup_3401'] = "Użytkownicy online";
$locale['setup_3402'] = "Wątki na forum";
$locale['setup_3404'] = "Wiadomość powitalna";
$locale['setup_3405'] = "Lista wątków Forum";
$locale['setup_3406'] = "Informacje użytkownika";
$locale['setup_3407'] = "Ankiety użytkowników";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Błędy";
$locale['setup_3501'] = "Download";
$locale['setup_3502'] = "Gry";
$locale['setup_3503'] = "Grafika";
$locale['setup_3504'] = "Sprzęt";
$locale['setup_3505'] = "Dziennik";
$locale['setup_3506'] = "Użytkownicy";
$locale['setup_3507'] = "Modyfikacje";
$locale['setup_3508'] = "Filmy";
$locale['setup_3509'] = "Sieć";
$locale['setup_3510'] = "Aktualności";
$locale['setup_3511'] = "PHPFusion";
$locale['setup_3512'] = "Bezpieczeństwo";
$locale['setup_3513'] = "Oprogramowanie";
$locale['setup_3514'] = "Motywy";
$locale['setup_3515'] = "Okna";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Super administrator";
$locale['setup_3601'] = "Administrator";
$locale['setup_3602'] = "Moderator";
$locale['setup_3603'] = "Nowicjusz";
$locale['setup_3604'] = "Junior";
$locale['setup_3605'] = "Użytkownik";
$locale['setup_3606'] = "Senior";
$locale['setup_3607'] = "Weteran";
$locale['setup_3608'] = "Fusioneer";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Uśmiech";
$locale['setup_3621'] = "Mrugnięcie";
$locale['setup_3622'] = "Smutek";
$locale['setup_3623'] = "Skrzywienie";
$locale['setup_3624'] = "Szok";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Super";
$locale['setup_3627'] = "Szeroki uśmiech";
$locale['setup_3628'] = "Złość";
$locale['setup_3629'] = "Polubienie";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Informacje kontaktowe";
$locale['setup_3642'] = "Różne informacje";
$locale['setup_3643'] = "Opcje";
$locale['setup_3644'] = "Statystyki";
$locale['setup_3645'] = "Prywatność";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Informacje o witrynie";
$locale['setup_3661'] = "Dyskusje dotyczące zarządzania tą stroną internetową";

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
$locale['setup_3650'] = "Witamy na witrynie";
// Final message
$locale['setup_1700'] = "Instalacja została zakończona";
$locale['setup_1701'] = "PHPFusion 9.0 jest gotowy do użycia. Kliknij przycisk Zakończ, aby przepisać plik config_temp.php do config.php<br/>";
$locale['setup_1702'] = "<strong>Uwaga: Po instalacji witryny należy usunąć cały folder /install i ustawić chmod dla config.php znów na 0644 ze względów bezpieczeństwa.</strong>";
$locale['setup_1703'] = "Dziękujemy za wybranie PHPFusion.";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Szablony e-mail";
$locale['setup_3801'] = "Powiadomienie o nowej PW";
$locale['setup_3802'] = "Masz nową prywatną wiadomość od użytkownika [USER], czekającego na [SITENAME]";
$locale['setup_3803'] = "Witaj [RECEIVER],<br/>
Otrzymałeś/aś nową prywatną wiadomość zatytułowaną [SUBJECT] od [USER] na [SITENAME]. Możesz przeczytać prywatną wiadomość na [SITEURL]messages.php<br/>
Wiadomość: [MESSAGE]<br/>
Jeśli nie chcesz już otrzymywać powiadomień o nowych wiadomościach, możesz wyłączyć powiadomienie e-mail za pośrednictwem zakładki Opcje w panelu Prywatne wiadomości.<br/>
Pozdrawiamy,<br/>
[SENDER].";
$locale['setup_3804'] = "Powiadomienie o nowych postach na forum";
$locale['setup_3805'] = "Powiadomienie o odpowiedzi w wątku - [SUBJECT]";
$locale['setup_3806'] = "Witaj [RECEIVER],

Odpowiedź została opublikowana na wątku forum \\'[SUBJECT]\\' którego śledzisz na [SITENAME]. Aby zobaczyć odpowiedź, skorzystaj z następującego linku:

[THREAD_URL]

Jeśli już nie chcesz oglądać tego wątku, kliknij przycisk \\'Przestań śledzić ten wątek\\' link jest umieszczony na początku podstrony wątku.

Pozdrawiamy,
[SENDER].";
$locale['setup_3807'] = "Formularz kontaktowy";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artykuły";
$locale['articles']['description'] = "System standardowej dokumentacji.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Standardowy system blogowania.";
$locale['downloads']['title'] = "Download";
$locale['downloads']['description'] = "Standardowy system pobieralni.";
$locale['faqs']['title'] = "FAQ";
$locale['faqs']['description'] = "Baza wiedzy FAQ.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "System forum dyskusyjnego.";
$locale['news']['title'] = "Aktualności";
$locale['news']['description'] = "System publikacji aktualności.";
$locale['photos']['title'] = "Galeria";
$locale['photos']['description'] = "System galerii zdjęć.";
$locale['polls']['title'] = "Ankiety";
$locale['polls']['description'] = "Ankiety i system głosowania użytkowników.";
$locale['weblinks']['title'] = "Katalog stron";
$locale['weblinks']['description'] = "System katalogu stron internetowych.";
$locale['install'] = "Zainstaluj rdzeń aplikacji";
