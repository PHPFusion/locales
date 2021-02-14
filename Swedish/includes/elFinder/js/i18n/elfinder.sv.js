/**
 * Svenska translation
 * @author Gabriel Satzger <gabriel.satzger@sbg.se>
 * @version 2021-02-14
 */
(function(root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(['elfinder'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('elfinder'));
    } else {
        factory(root.elFinder);
    }
}(this, function(elFinder) {
    elFinder.prototype.i18.sv = {
        translator : 'Gabriel Satzger &lt;gabriel.satzger@sbg.se&gt;',
        language   : 'Svenska',
        direction  : 'ltr',
        dateFormat : 'Y-m-d H:i', // will show like: 2021-02-14 20:25
        fancyDateFormat : '$1 H:i', // will show like: Idag 20:25
        nonameDateFormat : 'ymd-His', // noname upload will show like: 210214-202538
        messages   : {

            /********************************** errors **********************************/
            'error'                : 'Error',
            'errUnknown'           : 'Okänt error.',
            'errUnknownCmd'        : 'Okänt kommando.',
            'errJqui'              : 'Felaktig jQuery UI konfiguration. Komponenterna selectable, draggable och droppable måste vara inkluderade.',
            'errNode'              : 'elFinder kräver att DOM Elementen skapats.',
            'errURL'               : 'Felaktig elFinder konfiguration! URL parametern är inte satt.',
            'errAccess'            : 'Åtkomst nekad.',
            'errConnect'           : 'Kan inte ansluta till backend.',
            'errAbort'             : 'Anslutningen avbröts.',
            'errTimeout'           : 'Anslutningen löpte ut.',
            'errNotFound'          : 'Backend hittades inte.',
            'errResponse'          : 'Ogiltig backend svar.',
            'errConf'              : 'Ogiltig backend konfiguration.',
            'errJSON'              : 'PHP JSON modul är inte installerad.',
            'errNoVolumes'         : 'Läsbara volymer är inte tillgängliga.',
            'errCmdParams'         : 'Ogiltiga parametrar för kommandot "$1".',
            'errDataNotJSON'       : 'Datan är inte JSON.',
            'errDataEmpty'         : 'Datan är tom.',
            'errCmdReq'            : 'Backend begäran kräver kommandonamn.',
            'errOpen'              : 'Kan inte öppna "$1".',
            'errNotFolder'         : 'Objektet är inte en mapp.',
            'errNotFile'           : 'Objektet är inte en fil.',
            'errRead'              : 'Kan inte läsa "$1".',
            'errWrite'             : 'Kan inte skriva till "$1".',
            'errPerm'              : 'Tillstånd nekat.',
            'errLocked'            : '"$1" är låst och kan inte döpas om, flyttas eller tas bort.',
            'errExists'            : 'Fil med namn "$1" finns redan.',
            'errInvName'           : 'Ogiltigt filnamn.',
            'errInvDirname'        : 'Invalid folder name.',  // from v2.1.24 added 12.4.2017
            'errFolderNotFound'    : 'Mappen hittades inte.',
            'errFileNotFound'      : 'Filen hittades inte.',
            'errTrgFolderNotFound' : 'Målmappen "$1" hittades inte.',
            'errPopup'             : 'Webbläsaren hindrade popup-fönstret att öppnas. Ändra i webbläsarens inställningar för att kunna öppna filen.',
            'errMkdir'             : 'Kan inte skapa mappen "$1".',
            'errMkfile'            : 'Kan inte skapa filen "$1".',
            'errRename'            : 'Kan inte döpa om "$1".',
            'errCopyFrom'          : 'Kopiera filer från volym "$1" tillåts inte.',
            'errCopyTo'            : 'Kopiera filer till volym "$1" tillåts inte.',
            'errMkOutLink'         : 'Unable to create a link to outside the volume root.', // from v2.1 added 03.10.2015
            'errUpload'            : 'Error vid uppladdningen.',  // old name - errUploadCommon
            'errUploadFile'        : 'Kan inte ladda upp "$1".', // old name - errUpload
            'errUploadNoFiles'     : 'Inga filer hittades för uppladdning.',
            'errUploadTotalSize'   : 'Data överskrider den högsta tillåtna storleken.', // old name - errMaxSize
            'errUploadFileSize'    : 'Filen överskrider den högsta tillåtna storleken.', //  old name - errFileMaxSize
            'errUploadMime'        : 'Otillåten filtyp.',
            'errUploadTransfer'    : '"$1" överföringsfel.',
            'errUploadTemp'        : 'Unable to make temporary file for upload.', // from v2.1 added 26.09.2015
            'errNotReplace'        : 'Object "$1" already exists at this location and can not be replaced by object with another type.', // new
            'errReplace'           : 'Unable to replace "$1".',
            'errSave'              : 'Kan inte spara "$1".',
            'errCopy'              : 'Kan inte kopiera "$1".',
            'errMove'              : 'Kan inte flytta "$1".',
            'errCopyInItself'      : 'Kan inte flytta "$1" till sig själv.',
            'errRm'                : 'Kan inte ta bort "$1".',
            'errTrash'             : 'Unable into trash.', // from v2.1.24 added 30.4.2017
            'errRmSrc'             : 'Unable remove source file(s).',
            'errExtract'           : 'Kan inte packa upp filen från "$1".',
            'errArchive'           : 'Kan inte skapa arkiv.',
            'errArcType'           : 'Arkivtypen stöds inte.',
            'errNoArchive'         : 'Filen är inte av typen arkiv.',
            'errCmdNoSupport'      : 'Backend stöder inte detta kommando.',
            'errReplByChild'       : 'Mappen “$1” kan inte ersättas av ett objekt den innehåller.',
            'errArcSymlinks'       : 'Av säkerhetsskäl nekas arkivet att packas upp då det innehåller symboliska länkar eller filer med ej tillåtna namn.', // edited 24.06.2012
            'errArcMaxSize'        : 'Arkivfiler överskrider största tillåtna storlek.',
            'errResize'            : 'Kan inte ändra storlek "$1".',
            'errResizeDegree'      : 'Invalid rotate degree.',  // added 7.3.2013
            'errResizeRotate'      : 'Unable to rotate image.',  // added 7.3.2013
            'errResizeSize'        : 'Invalid image size.',  // added 7.3.2013
            'errResizeNoChange'    : 'Image size not changed.',  // added 7.3.2013
            'errUsupportType'      : 'Filtypen stöds inte.',
            'errNotUTF8Content'    : 'Filen "$1" är inte i UTF-8 och kan inte redigeras.',  // added 9.11.2011
            'errNetMount'          : 'Kan inte koppla "$1".', // added 17.04.2012
            'errNetMountNoDriver'  : 'Protokollet stöds inte.',     // added 17.04.2012
            'errNetMountFailed'    : 'Kopplingen misslyckades.',         // added 17.04.2012
            'errNetMountHostReq'   : 'Host krävs.', // added 18.04.2012
            'errSessionExpires'    : 'Your session has expired due to inactivity.',
            'errCreatingTempDir'   : 'Unable to create temporary directory: "$1"',
            'errFtpDownloadFile'   : 'Unable to download file from FTP: "$1"',
            'errFtpUploadFile'     : 'Unable to upload file to FTP: "$1"',
            'errFtpMkdir'          : 'Unable to create remote directory on FTP: "$1"',
            'errArchiveExec'       : 'Error while archiving files: "$1"',
            'errExtractExec'       : 'Error while extracting files: "$1"',
            'errNetUnMount'        : 'Unable to unmount.', // from v2.1 added 30.04.2012
            'errConvUTF8'          : 'Not convertible to UTF-8', // from v2.1 added 08.04.2014
            'errFolderUpload'      : 'Try the modern browser, If you\'d like to upload the folder.', // from v2.1 added 26.6.2015
            'errSearchTimeout'     : 'Timed out while searching "$1". Search result is partial.', // from v2.1 added 12.1.2016
            'errReauthRequire'     : 'Re-authorization is required.', // from v2.1.10 added 24.3.2016
            'errMaxTargets'        : 'Max number of selectable items is $1.', // from v2.1.17 added 17.10.2016
            'errRestore'           : 'Unable to restore from the trash. Can\'t identify the restore destination.', // from v2.1.24 added 3.5.2017
            'errEditorNotFound'    : 'Editor not found to this file type.', // from v2.1.25 added 23.5.2017
            'errServerError'       : 'Error occurred on the server side.', // from v2.1.25 added 16.6.2017
            'errEmpty'             : 'Unable to empty folder "$1".', // from v2.1.25 added 22.6.2017
            'moreErrors'           : 'There are $1 more errors.', // from v2.1.44 added 9.12.2018

            /******************************* commands names ********************************/
            'cmdarchive'   : 'Skapa arkiv',
            'cmdback'      : 'Tillbaka',
            'cmdcopy'      : 'Kopiera',
            'cmdcut'       : 'Klipp ut',
            'cmddownload'  : 'Ladda ned',
            'cmdduplicate' : 'Duplicera',
            'cmdedit'      : 'Redigera fil',
            'cmdextract'   : 'Extrahera filer från arkiv',
            'cmdforward'   : 'Framåt',
            'cmdgetfile'   : 'Välj filer',
            'cmdhelp'      : 'Om denna programvara',
            'cmdhome'      : 'Hem',
            'cmdinfo'      : 'Visa info',
            'cmdmkdir'     : 'Ny mapp',
            'cmdmkdirin'   : 'Into New Folder', // from v2.1.7 added 19.2.2016
            'cmdmkfile'    : 'Ny fil',
            'cmdopen'      : 'Öppna',
            'cmdpaste'     : 'Klistra in',
            'cmdquicklook' : 'Förhandsgranska',
            'cmdreload'    : 'Ladda om',
            'cmdrename'    : 'Döp om',
            'cmdrm'        : 'Radera',
            'cmdtrash'     : 'Into trash', //from v2.1.24 added 29.4.2017
            'cmdrestore'   : 'Restore', //from v2.1.24 added 3.5.2017
            'cmdsearch'    : 'Hitta filer',
            'cmdup'        : 'Gå till överordnade katalog',
            'cmdupload'    : 'Ladda upp filer',
            'cmdview'      : 'Visa',
            'cmdresize'    : 'Ändra bildstorlek',
            'cmdsort'      : 'Sortera',
            'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
            'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
            'cmdplaces'    : 'To Places', // added 28.12.2014
            'cmdchmod'     : 'Change mode', // from v2.1 added 20.6.2015
            'cmdopendir'   : 'Open a folder', // from v2.1 added 13.1.2016
            'cmdcolwidth'  : 'Reset column width', // from v2.1.13 added 12.06.2016
            'cmdfullscreen': 'Full Screen', // from v2.1.15 added 03.08.2016
            'cmdmove'      : 'Move', // from v2.1.15 added 21.08.2016
            'cmdempty'     : 'Empty the folder', // from v2.1.25 added 22.06.2017
            'cmdundo'      : 'Undo', // from v2.1.27 added 31.07.2017
            'cmdredo'      : 'Redo', // from v2.1.27 added 31.07.2017
            'cmdpreference': 'Preferences', // from v2.1.27 added 03.08.2017
            'cmdselectall' : 'Select all', // from v2.1.28 added 15.08.2017
            'cmdselectnone': 'Select none', // from v2.1.28 added 15.08.2017
            'cmdselectinvert': 'Invert selection', // from v2.1.28 added 15.08.2017
            'cmdopennew'   : 'Open in new window', // from v2.1.38 added 3.4.2018
            'cmdhide'      : 'Hide (Preference)', // from v2.1.41 added 24.7.2018

            /*********************************** buttons ***********************************/
            'btnClose'  : 'Stäng',
            'btnSave'   : 'Spara',
            'btnRm'     : 'Ta bort',
            'btnApply'  : 'Verkställ',
            'btnCancel' : 'Ångra',
            'btnNo'     : 'Nej',
            'btnYes'    : 'Ja',
            'btnMount'  : 'Mount',  // added 18.04.2012
            'btnApprove': 'Goto $1 & approve', // from v2.1 added 26.04.2012
            'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
            'btnConv'   : 'Convert', // from v2.1 added 08.04.2014
            'btnCwd'    : 'Here',      // from v2.1 added 22.5.2015
            'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
            'btnAll'    : 'All',       // from v2.1 added 22.5.2015
            'btnMime'   : 'MIME Type', // from v2.1 added 22.5.2015
            'btnFileName':'Filename',  // from v2.1 added 22.5.2015
            'btnSaveClose': 'Save & Close', // from v2.1 added 12.6.2015
            'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
            'btnRename'    : 'Rename',      // from v2.1.24 added 6.4.2017
            'btnRenameAll' : 'Rename(All)', // from v2.1.24 added 6.4.2017
            'btnPrevious' : 'Prev ($1/$2)', // from v2.1.24 added 11.5.2017
            'btnNext'     : 'Next ($1/$2)', // from v2.1.24 added 11.5.2017
            'btnSaveAs'   : 'Save As', // from v2.1.25 added 24.5.2017

            /******************************** notifications ********************************/
            'ntfopen'     : 'Öppnar mapp',
            'ntffile'     : 'Öppnar fil',
            'ntfreload'   : 'Laddar om mappinnehållet',
            'ntfmkdir'    : 'Skapar katalog',
            'ntfmkfile'   : 'Skapar fil',
            'ntfrm'       : 'Tar bort filer',
            'ntfcopy'     : 'Kopierar filer',
            'ntfmove'     : 'Flyttar filer',
            'ntfprepare'  : 'Förbereder att flytta filer',
            'ntfrename'   : 'Döper om filer',
            'ntfupload'   : 'Laddar upp filer',
            'ntfdownload' : 'Laddar ner filer',
            'ntfsave'     : 'Sparar filer',
            'ntfarchive'  : 'Skapar arkiv',
            'ntfextract'  : 'Extraherar filer från arkiv',
            'ntfsearch'   : 'Söker filer',
            'ntfresize'   : 'Resizing images',
            'ntfsmth'     : 'Gör någonting >_<',
            'ntfloadimg'  : 'Laddar bild',
            'ntfnetmount' : 'kopplar nätverksvolym', // added 18.04.2012
            'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
            'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
            'ntfreaddir'  : 'Reading folder infomation', // from v2.1 added 01.07.2013
            'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
            'ntfchmod'    : 'Changing file mode', // from v2.1 added 20.6.2015
            'ntfpreupload': 'Verifying upload file name', // from v2.1 added 31.11.2015
            'ntfzipdl'    : 'Creating a file for download', // from v2.1.7 added 23.1.2016
            'ntfparents'  : 'Getting path infomation', // from v2.1.17 added 2.11.2016
            'ntfchunkmerge': 'Processing the uploaded file', // from v2.1.17 added 2.11.2016
            'ntftrash'    : 'Doing throw in the trash', // from v2.1.24 added 2.5.2017
            'ntfrestore'  : 'Doing restore from the trash', // from v2.1.24 added 3.5.2017
            'ntfchkdir'   : 'Checking destination folder', // from v2.1.24 added 3.5.2017
            'ntfundo'     : 'Undoing previous operation', // from v2.1.27 added 31.07.2017
            'ntfredo'     : 'Redoing previous undone', // from v2.1.27 added 31.07.2017
            'ntfchkcontent' : 'Checking contents', // from v2.1.41 added 3.8.2018

            /*********************************** volumes *********************************/
            'volume_Trash' : 'Trash', //from v2.1.24 added 29.4.2017

            /************************************ dates **********************************/
            'dateUnknown' : 'okänt',
            'Today'       : 'Idag',
            'Yesterday'   : 'Igår',
            'msJan'       : 'Jan',
            'msFeb'       : 'Feb',
            'msMar'       : 'Mar',
            'msApr'       : 'Apr',
            'msMay'       : 'Maj',
            'msJun'       : 'Jun',
            'msJul'       : 'Jul',
            'msAug'       : 'Aug',
            'msSep'       : 'Sep',
            'msOct'       : 'Okt',
            'msNov'       : 'Nov',
            'msDec'       : 'Dec',
            'January'     : 'Januari',
            'February'    : 'Februari',
            'March'       : 'Mars',
            'April'       : 'April',
            'May'         : 'Maj',
            'June'        : 'Juni',
            'July'        : 'Juli',
            'August'      : 'Augusti',
            'September'   : 'September',
            'October'     : 'Oktober',
            'November'    : 'November',
            'December'    : 'December',
            'Sunday'      : 'Söndag',
            'Monday'      : 'Måndag',
            'Tuesday'     : 'Tisdag',
            'Wednesday'   : 'Onsdag',
            'Thursday'    : 'Torsdag',
            'Friday'      : 'Fredag',
            'Saturday'    : 'Lördag',
            'Sun'         : 'Sön',
            'Mon'         : 'Mån',
            'Tue'         : 'Tis',
            'Wed'         : 'Ons',
            'Thu'         : 'Tor',
            'Fri'         : 'Fre',
            'Sat'         : 'Lör',

            /******************************** sort variants ********************************/
            'sortname'          : 'efter namn',
            'sortkind'          : 'efter sort',
            'sortsize'          : 'efter storlek',
            'sortdate'          : 'efter datum',
            'sortFoldersFirst'  : 'Mappar först',
            'sortperm'          : 'by permission', // from v2.1.13 added 13.06.2016
            'sortmode'          : 'by mode',       // from v2.1.13 added 13.06.2016
            'sortowner'         : 'by owner',      // from v2.1.13 added 13.06.2016
            'sortgroup'         : 'by group',      // from v2.1.13 added 13.06.2016
            'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

            /********************************** new items **********************************/
            'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
            'untitled folder'   : 'NewFolder',   // added 10.11.2015
            'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015
            'untitled file'     : 'NewFile.$1',  // from v2.1.41 added 6.8.2018
            'extentionfile'     : '$1: File',    // from v2.1.41 added 6.8.2018
            'extentiontype'     : '$1: $2',      // from v2.1.43 added 17.10.2018

            /********************************** messages **********************************/
            'confirmReq'      : 'Bekräftelse krävs',
            'confirmRm'       : 'Är du säker på att du vill ta bort filer? <br/> Detta kan inte ångras!',
            'confirmRepl'     : 'Ersätt den gamla filen med en ny?',
            'confirmRest'     : 'Replace existing item with the item in trash?', // fromv2.1.24 added 5.5.2017
            'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
            'confirmNonUTF8'  : 'Character encoding of this file couldn\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
            'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
            'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
            'confirmMove'     : 'Are you sure you want to move items to "$1"?', //from v2.1.50 added 27.7.2019
            'apllyAll'        : 'Använd för alla',
            'name'            : 'Namn',
            'size'            : 'Storlek',
            'perms'           : 'Rättigheter',
            'modify'          : 'Ändrad',
            'kind'            : 'Sort',
            'read'            : 'läs',
            'write'           : 'skriv',
            'noaccess'        : 'ingen åtkomst',
            'and'             : 'och',
            'unknown'         : 'okänd',
            'selectall'       : 'Välj alla filer',
            'selectfiles'     : 'Välj fil(er)',
            'selectffile'     : 'Välj första filen',
            'selectlfile'     : 'Välj sista filen',
            'viewlist'        : 'Listvy',
            'viewicons'       : 'Ikonvy',
            'viewSmall'       : 'Small icons', // from v2.1.39 added 22.5.2018
            'viewMedium'      : 'Medium icons', // from v2.1.39 added 22.5.2018
            'viewLarge'       : 'Large icons', // from v2.1.39 added 22.5.2018
            'viewExtraLarge'  : 'Extra large icons', // from v2.1.39 added 22.5.2018
            'places'          : 'Platser',
            'calc'            : 'Beräkna',
            'path'            : 'Sökväg',
            'aliasfor'        : 'Alias för',
            'locked'          : 'Låst',
            'dim'             : 'Dimensioner',
            'files'           : 'Filer',
            'folders'         : 'Mappar',
            'items'           : 'Objekt',
            'yes'             : 'ja',
            'no'              : 'nej',
            'link'            : 'Länk',
            'searcresult'     : 'Sökresultat',
            'selected'        : 'valda objekt',
            'about'           : 'Om',
            'shortcuts'       : 'Genväg',
            'help'            : 'Hjälp',
            'webfm'           : 'Webbfilhanterare',
            'ver'             : 'Version',
            'protocolver'     : 'protokolversion',
            'homepage'        : 'Projekt hemsida',
            'docs'            : 'Dokumentation',
            'github'          : 'Forka oss på Github',
            'twitter'         : 'Följ oss på twitter',
            'facebook'        : 'Följ oss på facebook',
            'team'            : 'Team',
            'chiefdev'        : 'senior utvecklare',
            'developer'       : 'utvecklare',
            'contributor'     : 'bidragsgivare',
            'maintainer'      : 'underhållare',
            'translator'      : 'översättare',
            'icons'           : 'Ikoner',
            'dontforget'      : 'och glöm inte att ta med din handduk',
            'shortcutsof'     : 'Genvägar avaktiverade',
            'dropFiles'       : 'Släpp filerna här',
            'or'              : 'eller',
            'selectForUpload' : 'Välj filer att ladda upp',
            'moveFiles'       : 'Flytta filer',
            'copyFiles'       : 'Kopiera filer',
            'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
            'rmFromPlaces'    : 'Ta bort från platser',
            'aspectRatio'     : 'Aspekt ratio',
            'scale'           : 'Skala',
            'width'           : 'Bredd',
            'height'          : 'Höjd',
            'resize'          : 'Ändra storlek',
            'crop'            : 'Beskär',
            'rotate'          : 'Rotera',
            'rotate-cw'       : 'Rotera 90 grader medurs',
            'rotate-ccw'      : 'Rotera 90 grader moturs',
            'degree'          : 'Grader',
            'netMountDialogTitle' : 'Koppla nätverksvolym', // added 18.04.2012
            'protocol'            : 'Protokol', // added 18.04.2012
            'host'                : 'Host', // added 18.04.2012
            'port'                : 'Port', // added 18.04.2012
            'user'                : 'användare', // added 18.04.2012
            'pass'                : 'Lösenord', // added 18.04.2012
            'confirmUnmount'      : 'Are you unmount $1?',  // from v2.1 added 30.04.2012
            'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
            'dropPasteFiles'  : 'Drop files, Paste URLs or images(clipboard) here', // from v2.1 added 07.04.2014
            'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
            'locale'          : 'Locale',   // from v2.1 added 19.12.2014
            'searchTarget'    : 'Target: $1',                // from v2.1 added 22.5.2015
            'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
            'owner'           : 'Owner', // from v2.1 added 20.6.2015
            'group'           : 'Group', // from v2.1 added 20.6.2015
            'other'           : 'Other', // from v2.1 added 20.6.2015
            'execute'         : 'Execute', // from v2.1 added 20.6.2015
            'perm'            : 'Permission', // from v2.1 added 20.6.2015
            'mode'            : 'Mode', // from v2.1 added 20.6.2015
            'emptyFolder'     : 'Folder is empty', // from v2.1.6 added 30.12.2015
            'emptyFolderDrop' : 'Folder is empty\\A Drop to add items', // from v2.1.6 added 30.12.2015
            'emptyFolderLTap' : 'Folder is empty\\A Long tap to add items', // from v2.1.6 added 30.12.2015
            'quality'         : 'Quality', // from v2.1.6 added 5.1.2016
            'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
            'moveUp'          : 'Move up',  // from v2.1.6 added 18.1.2016
            'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
            'selectedItems'   : 'Selected items ($1)', // from v2.1.7 added 2.19.2016
            'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
            'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
            'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
            'nowLoading'      : 'Now loading...', // from v2.1.12 added 4.26.2016
            'openMulti'       : 'Open multiple files', // from v2.1.12 added 5.14.2016
            'openMultiConfirm': 'You are trying to open the $1 files. Are you sure you want to open in browser?', // from v2.1.12 added 5.14.2016
            'emptySearch'     : 'Search results is empty in search target.', // from v2.1.12 added 5.16.2016
            'editingFile'     : 'It is editing a file.', // from v2.1.13 added 6.3.2016
            'hasSelected'     : 'You have selected $1 items.', // from v2.1.13 added 6.3.2016
            'hasClipboard'    : 'You have $1 items in the clipboard.', // from v2.1.13 added 6.3.2016
            'incSearchOnly'   : 'Incremental search is only from the current view.', // from v2.1.13 added 6.30.2016
            'reinstate'       : 'Reinstate', // from v2.1.15 added 3.8.2016
            'complete'        : '$1 complete', // from v2.1.15 added 21.8.2016
            'contextmenu'     : 'Context menu', // from v2.1.15 added 9.9.2016
            'pageTurning'     : 'Page turning', // from v2.1.15 added 10.9.2016
            'volumeRoots'     : 'Volume roots', // from v2.1.16 added 16.9.2016
            'reset'           : 'Reset', // from v2.1.16 added 1.10.2016
            'bgcolor'         : 'Background color', // from v2.1.16 added 1.10.2016
            'colorPicker'     : 'Color picker', // from v2.1.16 added 1.10.2016
            '8pxgrid'         : '8px Grid', // from v2.1.16 added 4.10.2016
            'enabled'         : 'Enabled', // from v2.1.16 added 4.10.2016
            'disabled'        : 'Disabled', // from v2.1.16 added 4.10.2016
            'emptyIncSearch'  : 'Search results is empty in current view.\\APress [Enter] to expand search target.', // from v2.1.16 added 5.10.2016
            'emptyLetSearch'  : 'First letter search results is empty in current view.', // from v2.1.23 added 24.3.2017
            'textLabel'       : 'Text label', // from v2.1.17 added 13.10.2016
            'minsLeft'        : '$1 mins left', // from v2.1.17 added 13.11.2016
            'openAsEncoding'  : 'Reopen with selected encoding', // from v2.1.19 added 2.12.2016
            'saveAsEncoding'  : 'Save with the selected encoding', // from v2.1.19 added 2.12.2016
            'selectFolder'    : 'Select folder', // from v2.1.20 added 13.12.2016
            'firstLetterSearch': 'First letter search', // from v2.1.23 added 24.3.2017
            'presets'         : 'Presets', // from v2.1.25 added 26.5.2017
            'tooManyToTrash'  : 'It\'s too many items so it can\'t into trash.', // from v2.1.25 added 9.6.2017
            'TextArea'        : 'TextArea', // from v2.1.25 added 14.6.2017
            'folderToEmpty'   : 'Empty the folder "$1".', // from v2.1.25 added 22.6.2017
            'filderIsEmpty'   : 'There are no items in a folder "$1".', // from v2.1.25 added 22.6.2017
            'preference'      : 'Preference', // from v2.1.26 added 28.6.2017
            'language'        : 'Language', // from v2.1.26 added 28.6.2017
            'clearBrowserData': 'Initialize the settings saved in this browser', // from v2.1.26 added 28.6.2017
            'toolbarPref'     : 'Toolbar settings', // from v2.1.27 added 2.8.2017
            'charsLeft'       : '... $1 chars left.',  // from v2.1.29 added 30.8.2017
            'linesLeft'       : '... $1 lines left.',  // from v2.1.52 added 16.1.2020
            'sum'             : 'Sum', // from v2.1.29 added 28.9.2017
            'roughFileSize'   : 'Rough file size', // from v2.1.30 added 2.11.2017
            'autoFocusDialog' : 'Focus on the element of dialog with mouseover',  // from v2.1.30 added 2.11.2017
            'select'          : 'Select', // from v2.1.30 added 23.11.2017
            'selectAction'    : 'Action when select file', // from v2.1.30 added 23.11.2017
            'useStoredEditor' : 'Open with the editor used last time', // from v2.1.30 added 23.11.2017
            'selectinvert'    : 'Invert selection', // from v2.1.30 added 25.11.2017
            'renameMultiple'  : 'Are you sure you want to rename $1 selected items like $2?<br/>This cannot be undone!', // from v2.1.31 added 4.12.2017
            'batchRename'     : 'Batch rename', // from v2.1.31 added 8.12.2017
            'plusNumber'      : '+ Number', // from v2.1.31 added 8.12.2017
            'asPrefix'        : 'Add prefix', // from v2.1.31 added 8.12.2017
            'asSuffix'        : 'Add suffix', // from v2.1.31 added 8.12.2017
            'changeExtention' : 'Change extention', // from v2.1.31 added 8.12.2017
            'columnPref'      : 'Columns settings (List view)', // from v2.1.32 added 6.2.2018
            'reflectOnImmediate' : 'All changes will reflect immediately to the archive.', // from v2.1.33 added 2.3.2018
            'reflectOnUnmount'   : 'Any changes will not reflect until un-mount this volume.', // from v2.1.33 added 2.3.2018
            'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
            'selectionInfo'   : 'Selection Info', // from v2.1.33 added 7.3.2018
            'hashChecker'     : 'Algorithms to show the file hash', // from v2.1.33 added 10.3.2018
            'infoItems'       : 'Info Items (Selection Info Panel)', // from v2.1.38 added 28.3.2018
            'pressAgainToExit': 'Press again to exit.', // from v2.1.38 added 1.4.2018
            'toolbar'         : 'Toolbar', // from v2.1.38 added 4.4.2018
            'workspace'       : 'Work Space', // from v2.1.38 added 4.4.2018
            'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
            'all'             : 'All', // from v2.1.38 added 4.4.2018
            'iconSize'        : 'Icon Size (Icons view)', // from v2.1.39 added 7.5.2018
            'editorMaximized' : 'Open the maximized editor window', // from v2.1.40 added 30.6.2018
            'editorConvNoApi' : 'Because conversion by API is not currently available, please convert on the website.', //from v2.1.40 added 8.7.2018
            'editorConvNeedUpload' : 'After conversion, you must be upload with the item URL or a downloaded file to save the converted file.', //from v2.1.40 added 8.7.2018
            'convertOn'       : 'Convert on the site of $1', // from v2.1.40 added 10.7.2018
            'integrations'    : 'Integrations', // from v2.1.40 added 11.7.2018
            'integrationWith' : 'This elFinder has the following external services integrated. Please check the terms of use, privacy policy, etc. before using it.', // from v2.1.40 added 11.7.2018
            'showHidden'      : 'Show hidden items', // from v2.1.41 added 24.7.2018
            'hideHidden'      : 'Hide hidden items', // from v2.1.41 added 24.7.2018
            'toggleHidden'    : 'Show/Hide hidden items', // from v2.1.41 added 24.7.2018
            'makefileTypes'   : 'File types to enable with "New file"', // from v2.1.41 added 7.8.2018
            'typeOfTextfile'  : 'Type of the Text file', // from v2.1.41 added 7.8.2018
            'add'             : 'Add', // from v2.1.41 added 7.8.2018
            'theme'           : 'Theme', // from v2.1.43 added 19.10.2018
            'default'         : 'Default', // from v2.1.43 added 19.10.2018
            'description'     : 'Description', // from v2.1.43 added 19.10.2018
            'website'         : 'Website', // from v2.1.43 added 19.10.2018
            'author'          : 'Author', // from v2.1.43 added 19.10.2018
            'email'           : 'Email', // from v2.1.43 added 19.10.2018
            'license'         : 'License', // from v2.1.43 added 19.10.2018
            'exportToSave'    : 'This item can\'t be saved. To avoid losing the edits you need to export to your PC.', // from v2.1.44 added 1.12.2018
            'dblclickToSelect': 'Double click on the file to select it.', // from v2.1.47 added 22.1.2019
            'useFullscreen'   : 'Use fullscreen mode', // from v2.1.47 added 19.2.2019

            /********************************** mimetypes **********************************/
            'kindUnknown'     : 'Okänd',
            'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
            'kindFolder'      : 'Mapp',
            'kindSelects'     : 'Selections', // from v2.1.29 added 29.8.2017
            'kindAlias'       : 'Alias',
            'kindAliasBroken' : 'Trasigt alias',
            // applications
            'kindApp'         : 'Applikation',
            'kindPostscript'  : 'Postscript',
            'kindMsOffice'    : 'Microsoft Office',
            'kindMsWord'      : 'Microsoft Word',
            'kindMsExcel'     : 'Microsoft Excel',
            'kindMsPP'        : 'Microsoft Powerpoint',
            'kindOO'          : 'Open Office',
            'kindAppFlash'    : 'Flash',
            'kindPDF'         : 'Portable Document Format (PDF)',
            'kindTorrent'     : 'Bittorrent',
            'kind7z'          : '7z',
            'kindTAR'         : 'TAR',
            'kindGZIP'        : 'GZIP',
            'kindBZIP'        : 'BZIP',
            'kindXZ'          : 'XZ',
            'kindZIP'         : 'ZIP',
            'kindRAR'         : 'RAR',
            'kindJAR'         : 'Java JAR',
            'kindTTF'         : 'True Type',
            'kindOTF'         : 'Open Type',
            'kindRPM'         : 'RPM',
            // texts
            'kindText'        : 'Text',
            'kindTextPlain'   : 'Plain',
            'kindPHP'         : 'PHP',
            'kindCSS'         : 'Cascading style sheet',
            'kindHTML'        : 'HTML',
            'kindJS'          : 'Javascript',
            'kindRTF'         : 'Rich Text Format',
            'kindC'           : 'C',
            'kindCHeader'     : 'C header',
            'kindCPP'         : 'C++',
            'kindCPPHeader'   : 'C++ header',
            'kindShell'       : 'Unix shell script',
            'kindPython'      : 'Python',
            'kindJava'        : 'Java',
            'kindRuby'        : 'Ruby',
            'kindPerl'        : 'Perl',
            'kindSQL'         : 'SQL',
            'kindXML'         : 'XML',
            'kindAWK'         : 'AWK',
            'kindCSV'         : 'CSV',
            'kindDOCBOOK'     : 'Docbook XML',
            'kindMarkdown'    : 'Markdown text', // added 20.7.2015
            // images
            'kindImage'       : 'Bild',
            'kindBMP'         : 'BMP',
            'kindJPEG'        : 'JPEG',
            'kindGIF'         : 'GIF',
            'kindPNG'         : 'PNG',
            'kindTIFF'        : 'TIFF',
            'kindTGA'         : 'TGA',
            'kindPSD'         : 'Adobe Photoshop',
            'kindXBITMAP'     : 'X bitmap',
            'kindPXM'         : 'Pixelmator',
            // media
            'kindAudio'       : 'Audio media',
            'kindAudioMPEG'   : 'MPEG audio',
            'kindAudioMPEG4'  : 'MPEG-4 audio',
            'kindAudioMIDI'   : 'MIDI audio',
            'kindAudioOGG'    : 'Ogg Vorbis audio',
            'kindAudioWAV'    : 'WAV audio',
            'AudioPlaylist'   : 'MP3 playlist',
            'kindVideo'       : 'Video media',
            'kindVideoDV'     : 'DV movie',
            'kindVideoMPEG'   : 'MPEG movie',
            'kindVideoMPEG4'  : 'MPEG-4 movie',
            'kindVideoAVI'    : 'AVI movie',
            'kindVideoMOV'    : 'Quick Time movie',
            'kindVideoWM'     : 'Windows Media movie',
            'kindVideoFlash'  : 'Flash movie',
            'kindVideoMKV'    : 'Matroska movie',
            'kindVideoOGG'    : 'Ogg movie'
        }
    };
}));

