/**
 * Romanian translation
 * @author Cristian Tabacitu <hello@tabacitu.ro>
 * @version 2020-12-04
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
	elFinder.prototype.i18.ro = {
		translator : 'Cristian Tabacitu &lt;hello@tabacitu.ro&gt;',
		language   : 'Romanian',
		direction  : 'ltr',
		dateFormat : 'd M Y h:i', // will show like: 04 Dec 2020 04:08
		fancyDateFormat : '$1 h:i A', // will show like: Astăzi 04:08 PM
		nonameDateFormat : 'ymd-His', // noname upload will show like: 201204-160801
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Eroare',
			'errUnknown'           : 'Eroare necunoscută.',
			'errUnknownCmd'        : 'Comandă necunoscuta.',
			'errJqui'              : 'Configurație jQuery UI necunoscută. Componentele selectable, draggable și droppable trebuie să fie incluse.',
			'errNode'              : 'elFinder necesită ca DOM Element să fie creat.',
			'errURL'               : 'Configurație elFinder nevalidă! URL option nu este setat.',
			'errAccess'            : 'Acces interzis.',
			'errConnect'           : 'Nu ne-am putut conecta la backend.',
			'errAbort'             : 'Conexiunea a fost oprită.',
			'errTimeout'           : 'Conexiunea a fost întreruptă.',
			'errNotFound'          : 'Nu am gasit backend-ul.',
			'errResponse'          : 'Răspuns backend greșit.',
			'errConf'              : 'Configurație backend greșită.',
			'errJSON'              : 'Modulul PHP JSON nu este instalat.',
			'errNoVolumes'         : 'Volumele citibile nu sunt disponibile.',
			'errCmdParams'         : 'Parametri greșiți pentru comanda "$1".',
			'errDataNotJSON'       : 'Datele nu sunt în format JSON.',
			'errDataEmpty'         : 'Datele sunt goale.',
			'errCmdReq'            : 'Cererea către backend necesită un nume de comandă.',
			'errOpen'              : 'Nu am putut deschide "$1".',
			'errNotFolder'         : 'Obiectul nu este un dosar.',
			'errNotFile'           : 'Obiectul nu este un fișier.',
			'errRead'              : 'Nu am putut citi "$1".',
			'errWrite'             : 'Nu am putu scrie în "$1".',
			'errPerm'              : 'Nu ai permisiunea necesară.',
			'errLocked'            : '"$1" este blocat și nu poate fi redenumit, mutat sau șters.',
			'errExists'            : 'Un fișier cu numele "$1" există deja.',
			'errInvName'           : 'Numele pentru fișier este greșit.',
			'errInvDirname'        : 'Invalid folder name.',  // from v2.1.24 added 12.4.2017
			'errFolderNotFound'    : 'Nu am găsit dosarul.',
			'errFileNotFound'      : 'Nu am găsit fișierul.',
			'errTrgFolderNotFound' : 'Nu am găsit dosarul pentru destinație "$1".',
			'errPopup'             : 'Browserul tău a prevenit deschiderea ferestrei popup. Pentru a deschide fișierul permite deschidere ferestrei.',
			'errMkdir'             : 'Nu am putut crea dosarul "$1".',
			'errMkfile'            : 'Nu am putut crea fișierul "$1".',
			'errRename'            : 'Nu am putut redenumi "$1".',
			'errCopyFrom'          : 'Copierea fișierelor de pe volumul "$1" este interzisă.',
			'errCopyTo'            : 'Copierea fișierelor către volumul "$1" este interzisă.',
			'errMkOutLink'         : 'Nu am putut crea linkul în afara volumului rădăcină.', // from v2.1 added 03.10.2015
			'errUpload'            : 'Eroare de upload.',  // old name - errUploadCommon
			'errUploadFile'        : 'Nu am putut urca "$1".', // old name - errUpload
			'errUploadNoFiles'     : 'Nu am găsit fișiere pentru a le urca.',
			'errUploadTotalSize'   : 'Datele depâșest limita maximă de mărime.', // old name - errMaxSize
			'errUploadFileSize'    : 'Fișierul este prea mare.', //  old name - errFileMaxSize
			'errUploadMime'        : 'Acest tip de fișier nu este permis.',
			'errUploadTransfer'    : 'Eroare la transferarea "$1".',
			'errUploadTemp'        : 'Nu am putut crea fișierul temporar pentru upload.', // from v2.1 added 26.09.2015
			'errNotReplace'        : 'Obiectul "$1" există deja în acest loc și nu poate fi înlocuit de un obiect de alt tip.', // new
			'errReplace'           : 'Nu am putut înlocui "$1".',
			'errSave'              : 'Nu am putut salva "$1".',
			'errCopy'              : 'Nu am putut copia "$1".',
			'errMove'              : 'Nu am putut muta "$1".',
			'errCopyInItself'      : 'Nu am putut copia "$1" în el însuși.',
			'errRm'                : 'Nu am putut șterge "$1".',
			'errTrash'             : 'Unable into trash.', // from v2.1.24 added 30.4.2017
			'errRmSrc'             : 'Nu am putut șterge fișierul sursă.',
			'errExtract'           : 'Nu am putut extrage fișierele din "$1".',
			'errArchive'           : 'Nu am putut crea arhiva.',
			'errArcType'           : 'Arhiva este de un tip nesuportat.',
			'errNoArchive'         : 'Fișierul nu este o arhiva sau este o arhivă de un tip necunoscut.',
			'errCmdNoSupport'      : 'Backend-ul nu suportă această comandă.',
			'errReplByChild'       : 'Dosarul “$1” nu poate fi înlocuit de un element pe care el îl conține.',
			'errArcSymlinks'       : 'Din motive de securitate, arhiva nu are voie să conțină symlinks sau fișiere cu nume interzise.', // edited 24.06.2012
			'errArcMaxSize'        : 'Fișierul arhivei depășește mărimea maximă permisă.',
			'errResize'            : 'Nu am putut redimensiona "$1".',
			'errResizeDegree'      : 'Grad de rotație nevalid.',  // added 7.3.2013
			'errResizeRotate'      : 'Imaginea nu a fost rotită.',  // added 7.3.2013
			'errResizeSize'        : 'Mărimea imaginii este nevalidă.',  // added 7.3.2013
			'errResizeNoChange'    : 'Mărimea imaginii nu a fost schimbată.',  // added 7.3.2013
			'errUsupportType'      : 'Tipul acesta de fișier nu este suportat.',
			'errNotUTF8Content'    : 'Fișierul "$1" nu folosește UTF-8 și nu poate fi editat.',  // added 9.11.2011
			'errNetMount'          : 'Nu am putut încărca "$1".', // added 17.04.2012
			'errNetMountNoDriver'  : 'Protocol nesuportat.',     // added 17.04.2012
			'errNetMountFailed'    : 'Încărcare eșuată.',         // added 17.04.2012
			'errNetMountHostReq'   : 'Gazda este necesară.', // added 18.04.2012
			'errSessionExpires'    : 'Sesiunea a expirat datorită lipsei de activitate.',
			'errCreatingTempDir'   : 'Nu am putut crea fișierul temporar: "$1"',
			'errFtpDownloadFile'   : 'Nu am putut descarca fișierul de pe FTP: "$1"',
			'errFtpUploadFile'     : 'Nu am putut încărca fișierul pe FTP: "$1"',
			'errFtpMkdir'          : 'Nu am putut crea acest dosar pe FTP: "$1"',
			'errArchiveExec'       : 'Eroare la arhivarea fișierelor: "$1"',
			'errExtractExec'       : 'Eroare la dezarhivarea fișierelor: "$1"',
			'errNetUnMount'        : 'Nu am putut elimina volumul', // from v2.1 added 30.04.2012
			'errConvUTF8'          : 'Nu poate fi convertit la UTF-8', // from v2.1 added 08.04.2014
			'errFolderUpload'      : 'Pentru a urca dosare încearcă Google Chrome.', // from v2.1 added 26.6.2015
			'errSearchTimeout'     : 'Timed out while searching "$1". Search result is partial.', // from v2.1 added 12.1.2016
			'errReauthRequire'     : 'Re-authorization is required.', // from v2.1.10 added 24.3.2016
			'errMaxTargets'        : 'Max number of selectable items is $1.', // from v2.1.17 added 17.10.2016
			'errRestore'           : 'Unable to restore from the trash. Can\'t identify the restore destination.', // from v2.1.24 added 3.5.2017
			'errEditorNotFound'    : 'Editor not found to this file type.', // from v2.1.25 added 23.5.2017
			'errServerError'       : 'Error occurred on the server side.', // from v2.1.25 added 16.6.2017
			'errEmpty'             : 'Unable to empty folder "$1".', // from v2.1.25 added 22.6.2017
			'moreErrors'           : 'There are $1 more errors.', // from v2.1.44 added 9.12.2018

			/******************************* commands names ********************************/
			'cmdarchive'   : 'Creeaza arhivă',
			'cmdback'      : 'Înapoi',
			'cmdcopy'      : 'Copiază',
			'cmdcut'       : 'Taie',
			'cmddownload'  : 'Descarcă',
			'cmdduplicate' : 'Creează duplicat',
			'cmdedit'      : 'Modifică fișier',
			'cmdextract'   : 'Extrage fișierele din arhivă',
			'cmdforward'   : 'Înainte',
			'cmdgetfile'   : 'Alege fișiere',
			'cmdhelp'      : 'Despre acest software',
			'cmdhome'      : 'Acasă',
			'cmdinfo'      : 'Informații',
			'cmdmkdir'     : 'Dosar nou',
			'cmdmkdirin'   : 'Into New Folder', // from v2.1.7 added 19.2.2016
			'cmdmkfile'    : 'Fișier nou',
			'cmdopen'      : 'Deschide',
			'cmdpaste'     : 'Lipește',
			'cmdquicklook' : 'Previzualizează',
			'cmdreload'    : 'Reîncarcă',
			'cmdrename'    : 'Redenumește',
			'cmdrm'        : 'Șterge',
			'cmdtrash'     : 'Into trash', //from v2.1.24 added 29.4.2017
			'cmdrestore'   : 'Restore', //from v2.1.24 added 3.5.2017
			'cmdsearch'    : 'Găsește fișiere',
			'cmdup'        : 'Mergi la dosarul părinte',
			'cmdupload'    : 'Urcă fișiere',
			'cmdview'      : 'Vezi',
			'cmdresize'    : 'Redimensionează & rotește',
			'cmdsort'      : 'Sortează',
			'cmdnetmount'  : 'Încarcă volum din rețea', // added 18.04.2012
			'cmdnetunmount': 'Elimină volum', // from v2.1 added 30.04.2012
			'cmdplaces'    : 'La Locuri', // added 28.12.2014
			'cmdchmod'     : 'Schimbă mod', // from v2.1 added 20.6.2015
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
			'btnClose'  : 'Închide',
			'btnSave'   : 'Salvează',
			'btnRm'     : 'Șterge',
			'btnApply'  : 'Aplică',
			'btnCancel' : 'Anulează',
			'btnNo'     : 'Nu',
			'btnYes'    : 'Da',
			'btnMount'  : 'Încarcă',  // added 18.04.2012
			'btnApprove': 'Mergi la $1 și aprobă', // from v2.1 added 26.04.2012
			'btnUnmount': 'Elimină volum', // from v2.1 added 30.04.2012
			'btnConv'   : 'Convertește', // from v2.1 added 08.04.2014
			'btnCwd'    : 'Aici',      // from v2.1 added 22.5.2015
			'btnVolume' : 'Volum',    // from v2.1 added 22.5.2015
			'btnAll'    : 'Toate',       // from v2.1 added 22.5.2015
			'btnMime'   : 'Tipuri MIME', // from v2.1 added 22.5.2015
			'btnFileName':'Nume fișier',  // from v2.1 added 22.5.2015
			'btnSaveClose': 'Salvează și închide', // from v2.1 added 12.6.2015
			'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
			'btnRename'    : 'Rename',      // from v2.1.24 added 6.4.2017
			'btnRenameAll' : 'Rename(All)', // from v2.1.24 added 6.4.2017
			'btnPrevious' : 'Prev ($1/$2)', // from v2.1.24 added 11.5.2017
			'btnNext'     : 'Next ($1/$2)', // from v2.1.24 added 11.5.2017
			'btnSaveAs'   : 'Save As', // from v2.1.25 added 24.5.2017

			/******************************** notifications ********************************/
			'ntfopen'     : 'Deschide dosar',
			'ntffile'     : 'Deschide fișier',
			'ntfreload'   : 'Actualizează conținutul dosarului',
			'ntfmkdir'    : 'Se creează dosarul',
			'ntfmkfile'   : 'Se creează fișierele',
			'ntfrm'       : 'Șterge fișiere',
			'ntfcopy'     : 'Copiază fișiere',
			'ntfmove'     : 'Mută fișiere',
			'ntfprepare'  : 'Pregătește copierea fișierelor',
			'ntfrename'   : 'Redenumește fișiere',
			'ntfupload'   : 'Se urcă fișierele',
			'ntfdownload' : 'Se descarcă fișierele',
			'ntfsave'     : 'Salvează fișiere',
			'ntfarchive'  : 'Se creează arhiva',
			'ntfextract'  : 'Se extrag fișierele din arhivă',
			'ntfsearch'   : 'Se caută fișierele',
			'ntfresize'   : 'Se redimnesionează imaginile',
			'ntfsmth'     : 'Se întamplă ceva',
			'ntfloadimg'  : 'Se încarcă imaginea',
			'ntfnetmount' : 'Se încarcă volumul din rețea', // added 18.04.2012
			'ntfnetunmount': 'Se elimină volumul din rețea', // from v2.1 added 30.04.2012
			'ntfdim'      : 'Se preiau dimensiunile imaginii', // added 20.05.2013
			'ntfreaddir'  : 'Se citesc informațiile dosarului', // from v2.1 added 01.07.2013
			'ntfurl'      : 'Se preia URL-ul din link', // from v2.1 added 11.03.2014
			'ntfchmod'    : 'Se schimba modul de fișier', // from v2.1 added 20.6.2015
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
			'dateUnknown' : 'necunoscută',
			'Today'       : 'Astăzi',
			'Yesterday'   : 'Ieri',
			'msJan'       : 'Ian',
			'msFeb'       : 'Feb',
			'msMar'       : 'Mar',
			'msApr'       : 'Apr',
			'msMay'       : 'Mai',
			'msJun'       : 'Iun',
			'msJul'       : 'Iul',
			'msAug'       : 'Aug',
			'msSep'       : 'Sep',
			'msOct'       : 'Oct',
			'msNov'       : 'Nov',
			'msDec'       : 'Dec',
			'January'     : 'Ianuarie',
			'February'    : 'Februarie',
			'March'       : 'Martie',
			'April'       : 'Aprilie',
			'May'         : 'Mai',
			'June'        : 'Iunie',
			'July'        : 'Iulie',
			'August'      : 'August',
			'September'   : 'Septembrie',
			'October'     : 'Octombrie',
			'November'    : 'Noiembrie',
			'December'    : 'Decembrie',
			'Sunday'      : 'Duminică',
			'Monday'      : 'Luni',
			'Tuesday'     : 'Marți',
			'Wednesday'   : 'Miercuri',
			'Thursday'    : 'Joi',
			'Friday'      : 'Vineri',
			'Saturday'    : 'Sâmbătă',
			'Sun'         : 'Du',
			'Mon'         : 'Lu',
			'Tue'         : 'Ma',
			'Wed'         : 'Mi',
			'Thu'         : 'Jo',
			'Fri'         : 'Vi',
			'Sat'         : 'Sâ',

			/******************************** sort variants ********************************/
			'sortname'          : 'după nume',
			'sortkind'          : 'după tip',
			'sortsize'          : 'după mărime',
			'sortdate'          : 'după dată',
			'sortFoldersFirst'  : 'Dosarele primele',
			'sortperm'          : 'by permission', // from v2.1.13 added 13.06.2016
			'sortmode'          : 'by mode',       // from v2.1.13 added 13.06.2016
			'sortowner'         : 'by owner',      // from v2.1.13 added 13.06.2016
			'sortgroup'         : 'by group',      // from v2.1.13 added 13.06.2016
			'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

			/********************************** new items **********************************/
			'untitled file.txt' : 'FisierNou.txt', // added 10.11.2015
			'untitled folder'   : 'DosarNou',   // added 10.11.2015
			'Archive'           : 'ArhivaNoua',  // from v2.1 added 10.11.2015
			'untitled file'     : 'NewFile.$1',  // from v2.1.41 added 6.8.2018
			'extentionfile'     : '$1: File',    // from v2.1.41 added 6.8.2018
			'extentiontype'     : '$1: $2',      // from v2.1.43 added 17.10.2018

			/********************************** messages **********************************/
			'confirmReq'      : 'Este necesară confirmare',
			'confirmRm'       : 'Ești sigur că vrei să ștergi fișierele?<br/>Acțiunea este ireversibilă!',
			'confirmRepl'     : 'Înlocuiește fișierul vechi cu cel nou?',
			'confirmRest'     : 'Replace existing item with the item in trash?', // fromv2.1.24 added 5.5.2017
			'confirmConvUTF8' : 'Nu este în UTF-8<br/>Convertim la UTF-8?<br/>Conținutul devine UTF-8 după salvarea conversiei.', // from v2.1 added 08.04.2014
			'confirmNonUTF8'  : 'Character encoding of this file couldn\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
			'confirmNotSave'  : 'Au avut loc modificări.<br/>Dacă nu salvezi se vor pierde modificările.', // from v2.1 added 15.7.2015
			'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
			'confirmMove'     : 'Are you sure you want to move items to "$1"?', //from v2.1.50 added 27.7.2019
			'apllyAll'        : 'Aplică pentru toate',
			'name'            : 'Nume',
			'size'            : 'Mărime',
			'perms'           : 'Permisiuni',
			'modify'          : 'Modificat la',
			'kind'            : 'Tip',
			'read'            : 'citire',
			'write'           : 'scriere',
			'noaccess'        : 'acces interzis',
			'and'             : 'și',
			'unknown'         : 'necunoscut',
			'selectall'       : 'Alege toate fișierele',
			'selectfiles'     : 'Alege fișier(e)',
			'selectffile'     : 'Alege primul fișier',
			'selectlfile'     : 'Alege ultimul fișier',
			'viewlist'        : 'Vezi ca listă',
			'viewicons'       : 'Vezi ca icoane',
			'viewSmall'       : 'Small icons', // from v2.1.39 added 22.5.2018
			'viewMedium'      : 'Medium icons', // from v2.1.39 added 22.5.2018
			'viewLarge'       : 'Large icons', // from v2.1.39 added 22.5.2018
			'viewExtraLarge'  : 'Extra large icons', // from v2.1.39 added 22.5.2018
			'places'          : 'Locuri',
			'calc'            : 'Calculează',
			'path'            : 'Cale',
			'aliasfor'        : 'Alias pentru',
			'locked'          : 'Securizat',
			'dim'             : 'Dimensiuni',
			'files'           : 'Fișiere',
			'folders'         : 'Dosare',
			'items'           : 'Elemente',
			'yes'             : 'da',
			'no'              : 'nu',
			'link'            : 'Link',
			'searcresult'     : 'Rezultatele căutării',
			'selected'        : 'elemente alese',
			'about'           : 'Despre',
			'shortcuts'       : 'Scurtături',
			'help'            : 'Ajutor',
			'webfm'           : 'Manager web pentru fișiere',
			'ver'             : 'Versiune',
			'protocolver'     : 'versiune protocol',
			'homepage'        : 'Pagina proiectului',
			'docs'            : 'Documentație',
			'github'          : 'Fork nou pe Github',
			'twitter'         : 'Urmărește-ne pe twitter',
			'facebook'        : 'Alătura-te pe facebook',
			'team'            : 'Echipa',
			'chiefdev'        : 'chief developer',
			'developer'       : 'developer',
			'contributor'     : 'contributor',
			'maintainer'      : 'maintainer',
			'translator'      : 'translator',
			'icons'           : 'Icoane',
			'dontforget'      : 'și nu uita să-ți iei prosopul',
			'shortcutsof'     : 'Scurtăturile sunt dezactivate',
			'dropFiles'       : 'Dă drumul fișierelor aici',
			'or'              : 'sau',
			'selectForUpload' : 'Alege fișiere pentru a le urca',
			'moveFiles'       : 'Mută fișiere',
			'copyFiles'       : 'Copiază fișiere',
			'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
			'rmFromPlaces'    : 'Șterge din locuri',
			'aspectRatio'     : 'Aspect ratio',
			'scale'           : 'Scală',
			'width'           : 'Lățime',
			'height'          : 'Înălțime',
			'resize'          : 'Redimensionează',
			'crop'            : 'Decupează',
			'rotate'          : 'Rotește',
			'rotate-cw'       : 'Rotește cu 90° în sensul ceasului',
			'rotate-ccw'      : 'Rotește cu 90° în sensul invers ceasului',
			'degree'          : '°',
			'netMountDialogTitle' : 'Încarcă volum din rețea', // added 18.04.2012
			'protocol'            : 'Protocol', // added 18.04.2012
			'host'                : 'Gazdă', // added 18.04.2012
			'port'                : 'Port', // added 18.04.2012
			'user'                : 'Utilizator', // added 18.04.2012
			'pass'                : 'Parolă', // added 18.04.2012
			'confirmUnmount'      : 'Vrei să elimini volumul $1?',  // from v2.1 added 30.04.2012
			'dropFilesBrowser': 'Drag&drop sau lipește din browser', // from v2.1 added 30.05.2012
			'dropPasteFiles'  : 'Drag&drop sau lipește fișiere aici', // from v2.1 added 07.04.2014
			'encoding'        : 'Encodare', // from v2.1 added 19.12.2014
			'locale'          : 'Locale',   // from v2.1 added 19.12.2014
			'searchTarget'    : 'Țintă: $1',                // from v2.1 added 22.5.2015
			'searchMime'      : 'Caută după tipul MIME', // from v2.1 added 22.5.2015
			'owner'           : 'Owner', // from v2.1 added 20.6.2015
			'group'           : 'Group', // from v2.1 added 20.6.2015
			'other'           : 'Other', // from v2.1 added 20.6.2015
			'execute'         : 'Execute', // from v2.1 added 20.6.2015
			'perm'            : 'Permission', // from v2.1 added 20.6.2015
			'mode'            : 'Mod', // from v2.1 added 20.6.2015
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
			'kindUnknown'     : 'Necunoscut',
			'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
			'kindFolder'      : 'Dosar',
			'kindSelects'     : 'Selections', // from v2.1.29 added 29.8.2017
			'kindAlias'       : 'Alias',
			'kindAliasBroken' : 'Alias stricat',
			// applications
			'kindApp'         : 'Aplicație',
			'kindPostscript'  : 'Document Postscript',
			'kindMsOffice'    : 'Document Microsoft Office',
			'kindMsWord'      : 'Document Microsoft Word',
			'kindMsExcel'     : 'Document Microsoft Excel',
			'kindMsPP'        : 'Prezentare Microsoft Powerpoint',
			'kindOO'          : 'Document Open Office',
			'kindAppFlash'    : 'Aplicație Flash',
			'kindPDF'         : 'Document Portabil (PDF)',
			'kindTorrent'     : 'Fișier Bittorrent',
			'kind7z'          : 'Arhivă 7z',
			'kindTAR'         : 'Arhivă TAR',
			'kindGZIP'        : 'Arhivă GZIP',
			'kindBZIP'        : 'Arhivă BZIP',
			'kindXZ'          : 'Arhivă XZ',
			'kindZIP'         : 'Arhivă ZIP',
			'kindRAR'         : 'Arhivă RAR',
			'kindJAR'         : 'Fișier Java JAR',
			'kindTTF'         : 'Font True Type',
			'kindOTF'         : 'Font Open Type',
			'kindRPM'         : 'Pachet RPM',
			// texts
			'kindText'        : 'Document text',
			'kindTextPlain'   : 'Text simplu',
			'kindPHP'         : 'Sursă PHP',
			'kindCSS'         : 'Fișier de stil (CSS)',
			'kindHTML'        : 'Document HTML',
			'kindJS'          : 'Sursă Javascript',
			'kindRTF'         : 'Text formatat (rich text)',
			'kindC'           : 'Sursă C',
			'kindCHeader'     : 'Sursă C header',
			'kindCPP'         : 'Sursă C++',
			'kindCPPHeader'   : 'Sursă C++ header',
			'kindShell'       : 'Script terminal Unix',
			'kindPython'      : 'Sursă Python',
			'kindJava'        : 'Sursă Java',
			'kindRuby'        : 'Sursă Ruby',
			'kindPerl'        : 'Script Perl',
			'kindSQL'         : 'Sursă SQL',
			'kindXML'         : 'Document XML',
			'kindAWK'         : 'Sursă AWK',
			'kindCSV'         : 'Valori separate de virgulă (CSV)',
			'kindDOCBOOK'     : 'Document Docbook XML',
			'kindMarkdown'    : 'Text Markdown', // added 20.7.2015
			// images
			'kindImage'       : 'Imagine',
			'kindBMP'         : 'Imagine BMP',
			'kindJPEG'        : 'Imagine JPEG',
			'kindGIF'         : 'Imagine GIF',
			'kindPNG'         : 'Imagine PNG',
			'kindTIFF'        : 'Imagine TIFF',
			'kindTGA'         : 'Imagine TGA',
			'kindPSD'         : 'Imagine Adobe Photoshop',
			'kindXBITMAP'     : 'Imagine X bitmap',
			'kindPXM'         : 'Imagine Pixelmator',
			// media
			'kindAudio'       : 'Audio',
			'kindAudioMPEG'   : 'Audio MPEG',
			'kindAudioMPEG4'  : 'Audio MPEG-4',
			'kindAudioMIDI'   : 'Audio MIDI',
			'kindAudioOGG'    : 'Audio Ogg Vorbis',
			'kindAudioWAV'    : 'Audio WAV',
			'AudioPlaylist'   : 'Playlist MP3',
			'kindVideo'       : 'Video',
			'kindVideoDV'     : 'Video DV',
			'kindVideoMPEG'   : 'Video MPEG',
			'kindVideoMPEG4'  : 'Video MPEG-4',
			'kindVideoAVI'    : 'Video AVI',
			'kindVideoMOV'    : 'Video Quick Time',
			'kindVideoWM'     : 'Video Windows Media',
			'kindVideoFlash'  : 'Video Flash',
			'kindVideoMKV'    : 'Video Matroska',
			'kindVideoOGG'    : 'Video Ogg'
		}
	};
}));

