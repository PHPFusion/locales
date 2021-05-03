/**
 * Norwegian translation
 * @author Stian Jacobsen <stian@promonorge.no>
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
	elFinder.prototype.i18.no = {
		translator : 'Stian Jacobsen &lt;stian@promonorge.no&gt;',
		language   : 'Norwegian',
		direction  : 'ltr',
		dateFormat : 'M d, Y h:i A', // will show like: Des 04, 2020 04:05 PM
		fancyDateFormat : '$1 h:i A', // will show like: I dag 04:05 PM
		nonameDateFormat : 'ymd-His', // noname upload will show like: 201204-160558
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Feil',
			'errUnknown'           : 'Ukjent feil.',
			'errUnknownCmd'        : 'Ukjent kommando.',
			'errJqui'              : 'Ugyldig jQuery UI konfigurasjon. Selectable, draggable og droppable komponentene må være inkludert.',
			'errNode'              : 'elFinder påkrever at DOM Elementer kan opprettes.',
			'errURL'               : 'Ugyldig elFinder konfigurasjon! URL-valget er ikke satt.',
			'errAccess'            : 'Ingen adgang.',
			'errConnect'           : 'Kunne ikke koble til.',
			'errAbort'             : 'Tilkoblingen avbrutt.',
			'errTimeout'           : 'Tilkoblingen tidsavbrudd.',
			'errNotFound'          : 'Backend ble ikke funnet',
			'errResponse'          : 'Ugyldig backend respons.',
			'errConf'              : 'Ugyldig backend konfigurasjon.',
			'errJSON'              : 'PHP JSON modul er ikke installert.',
			'errNoVolumes'         : 'Lesbar volum er ikke tilgjennelig.',
			'errCmdParams'         : 'Ugyldig parameter for kommando "$1".',
			'errDataNotJSON'       : 'Innhold er ikke JSON.',
			'errDataEmpty'         : 'Innholdet er tomt.',
			'errCmdReq'            : 'Backend spørringen påkrever kommando.',
			'errOpen'              : 'Kunne ikke åpne "$1".',
			'errNotFolder'         : 'Objektet er ikke en mappe.',
			'errNotFile'           : 'Objektet er ikke en fil.',
			'errRead'              : 'Kunne ikke lese "$1".',
			'errWrite'             : 'Kunne ikke skrive til "$1".',
			'errPerm'              : 'Du har ikke rettigheter.',
			'errLocked'            : '"$1" er låst og kan ikke flyttes, slettes eller endres',
			'errExists'            : 'Filen "$1" finnes allerede.',
			'errInvName'           : 'Ugyldig filnavn.',
			'errInvDirname'        : 'Invalid folder name.',  // from v2.1.24 added 12.4.2017
			'errFolderNotFound'    : 'Mappen finnes ikke.',
			'errFileNotFound'      : 'Filen finnes ikke.',
			'errTrgFolderNotFound' : 'Målmappen "$1" ble ikke funnet.',
			'errPopup'             : 'Nettleseren din blokkerte et pop-up vindu. For å åpne filen må du aktivere pop-up i din nettlesers innstillinger.',
			'errMkdir'             : 'Kunne ikke opprette mappen "$1".',
			'errMkfile'            : 'Kunne ikke opprette filen "$1".',
			'errRename'            : 'Kunne ikke gi nytt navn til "$1".',
			'errCopyFrom'          : 'Kopiere filer fra "$1" er ikke tillatt.',
			'errCopyTo'            : 'Kopiere filer til "$1" er ikke tillatt.',
			'errMkOutLink'         : 'Unable to create a link to outside the volume root.', // from v2.1 added 03.10.2015
			'errUpload'            : 'Feil under opplasting.',  // old name - errUploadCommon
			'errUploadFile'        : 'Kunne ikke laste opp "$1".', // old name - errUpload
			'errUploadNoFiles'     : 'Ingen filer funnet til opplasting.',
			'errUploadTotalSize'   : 'Innholdet overgår maksimum tillatt størrelse.', // old name - errMaxSize
			'errUploadFileSize'    : 'Filen vergår maksimum tillatt størrelse.', //  old name - errFileMaxSize
			'errUploadMime'        : 'Filtypen ikke tillatt.',
			'errUploadTransfer'    : '"$1" overførings feil.',
			'errUploadTemp'        : 'Unable to make temporary file for upload.', // from v2.1 added 26.09.2015
			'errNotReplace'        : 'Object "$1" already exists at this location and can not be replaced by object with another type.', // new
			'errReplace'           : 'Unable to replace "$1".',
			'errSave'              : 'Kunne ikke lagre "$1".',
			'errCopy'              : 'Kunne ikke kopiere "$1".',
			'errMove'              : 'Kunne ikke flytte "$1".',
			'errCopyInItself'      : 'Kunne ikke kopiere "$1" til seg selv.',
			'errRm'                : 'Kunne ikke slette "$1".',
			'errTrash'             : 'Unable into trash.', // from v2.1.24 added 30.4.2017
			'errRmSrc'             : 'Unable remove source file(s).',
			'errExtract'           : 'Kunne ikke pakke ut filer fra "$1".',
			'errArchive'           : 'Kunne ikke opprette arkiv.',
			'errArcType'           : 'akriv-typen er ikke støttet.',
			'errNoArchive'         : 'Filen er ikke et arkiv eller et arkiv som ikke er støttet.',
			'errCmdNoSupport'      : 'Backend støtter ikke denne kommandoen.',
			'errReplByChild'       : 'The folder “$1” can’t be replaced by an item it contains.',
			'errArcSymlinks'       : 'For security reason denied to unpack archives contains symlinks or files with not allowed names.', // edited 24.06.2012
			'errArcMaxSize'        : 'Archive files exceeds maximum allowed size.',
			'errResize'            : 'Unable to resize "$1".',
			'errResizeDegree'      : 'Invalid rotate degree.',  // added 7.3.2013
			'errResizeRotate'      : 'Unable to rotate image.',  // added 7.3.2013
			'errResizeSize'        : 'Invalid image size.',  // added 7.3.2013
			'errResizeNoChange'    : 'Image size not changed.',  // added 7.3.2013
			'errUsupportType'      : 'Unsupported file type.',
			'errNotUTF8Content'    : 'File "$1" is not in UTF-8 and cannot be edited.',  // added 9.11.2011
			'errNetMount'          : 'Unable to mount "$1".', // added 17.04.2012
			'errNetMountNoDriver'  : 'Unsupported protocol.',     // added 17.04.2012
			'errNetMountFailed'    : 'Mount failed.',         // added 17.04.2012
			'errNetMountHostReq'   : 'Host required.', // added 18.04.2012
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
			'cmdarchive'   : 'Opprett arkiv',
			'cmdback'      : 'Tilbake',
			'cmdcopy'      : 'Kopier',
			'cmdcut'       : 'Klipp ut',
			'cmddownload'  : 'Last ned',
			'cmdduplicate' : 'Dupliser',
			'cmdedit'      : 'Rediger fil',
			'cmdextract'   : 'Pakk ut filer fra arkiv',
			'cmdforward'   : 'Frem',
			'cmdgetfile'   : 'Velg filer',
			'cmdhelp'      : 'Om',
			'cmdhome'      : 'Hjem',
			'cmdinfo'      : 'Vis info',
			'cmdmkdir'     : 'Ny mappe',
			'cmdmkdirin'   : 'Into New Folder', // from v2.1.7 added 19.2.2016
			'cmdmkfile'    : 'Ny fil',
			'cmdopen'      : 'Åpne',
			'cmdpaste'     : 'Lim inn',
			'cmdquicklook' : 'Forhåndsvis',
			'cmdreload'    : 'Last inn på nytt',
			'cmdrename'    : 'Gi nytt navn',
			'cmdrm'        : 'Slett',
			'cmdtrash'     : 'Into trash', //from v2.1.24 added 29.4.2017
			'cmdrestore'   : 'Restore', //from v2.1.24 added 3.5.2017
			'cmdsearch'    : 'Find filer',
			'cmdup'        : 'Opp et nivå',
			'cmdupload'    : 'Last opp filer',
			'cmdview'      : 'Vis',
			'cmdresize'    : 'Resize & Rotate',
			'cmdsort'      : 'Sort',
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
			'btnClose'  : 'Lukk',
			'btnSave'   : 'Lagre',
			'btnRm'     : 'Slett',
			'btnApply'  : 'Apply',
			'btnCancel' : 'Avbryt',
			'btnNo'     : 'Nei',
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
			'ntfopen'     : 'Åpne mappe',
			'ntffile'     : 'Åpne fil',
			'ntfreload'   : 'Last inn mappen på nytt',
			'ntfmkdir'    : 'Oppretter mappe',
			'ntfmkfile'   : 'Oppretter filer',
			'ntfrm'       : 'Sletter filer',
			'ntfcopy'     : 'Kopierer filer',
			'ntfmove'     : 'Flytter filer',
			'ntfprepare'  : 'Gjør klar til kopiering av filer',
			'ntfrename'   : 'Gir nytt navn til filer',
			'ntfupload'   : 'Laster opp filer',
			'ntfdownload' : 'Laster ned filer',
			'ntfsave'     : 'Lagrer filer',
			'ntfarchive'  : 'Oppretter arkiv',
			'ntfextract'  : 'Pakker ut filer fra arkiv',
			'ntfsearch'   : 'Søker i filer',
			'ntfresize'   : 'Resizing images',
			'ntfsmth'     : 'Gjør noe... >_<',
			'ntfloadimg'  : 'Loading image',
			'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
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
			'dateUnknown' : 'Ukjent',
			'Today'       : 'I dag',
			'Yesterday'   : 'I går',
			'msJan'       : 'Jan',
			'msFeb'       : 'Feb',
			'msMar'       : 'Mar',
			'msApr'       : 'Apr',
			'msMay'       : 'Mai',
			'msJun'       : 'Jun',
			'msJul'       : 'Jul',
			'msAug'       : 'Aug',
			'msSep'       : 'Sep',
			'msOct'       : 'Okt',
			'msNov'       : 'Nov',
			'msDec'       : 'Des',
			'January'     : 'January',
			'February'    : 'February',
			'March'       : 'March',
			'April'       : 'April',
			'May'         : 'May',
			'June'        : 'June',
			'July'        : 'July',
			'August'      : 'August',
			'September'   : 'September',
			'October'     : 'October',
			'November'    : 'November',
			'December'    : 'December',
			'Sunday'      : 'Sunday',
			'Monday'      : 'Monday',
			'Tuesday'     : 'Tuesday',
			'Wednesday'   : 'Wednesday',
			'Thursday'    : 'Thursday',
			'Friday'      : 'Friday',
			'Saturday'    : 'Saturday',
			'Sun'         : 'Sun',
			'Mon'         : 'Mon',
			'Tue'         : 'Tue',
			'Wed'         : 'Wed',
			'Thu'         : 'Thu',
			'Fri'         : 'Fri',
			'Sat'         : 'Sat',

			/******************************** sort variants ********************************/
			'sortname'          : 'by name',
			'sortkind'          : 'by kind',
			'sortsize'          : 'by size',
			'sortdate'          : 'by date',
			'sortFoldersFirst'  : 'Folders first',
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
			'confirmReq'      : 'Bekreftelse nødvendig',
			'confirmRm'       : 'Er du sikker på at du ønsker å slette filene?',
			'confirmRepl'     : 'Erstatt fil?',
			'confirmRest'     : 'Replace existing item with the item in trash?', // fromv2.1.24 added 5.5.2017
			'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
			'confirmNonUTF8'  : 'Character encoding of this file couldn\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
			'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
			'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
			'confirmMove'     : 'Are you sure you want to move items to "$1"?', //from v2.1.50 added 27.7.2019
			'apllyAll'        : 'Apply to all',
			'name'            : 'Navn',
			'size'            : 'Størrelse',
			'perms'           : 'Rettigheter',
			'modify'          : 'Endret',
			'kind'            : 'Type',
			'read'            : 'les',
			'write'           : 'skriv',
			'noaccess'        : 'ingen adgang',
			'and'             : 'og',
			'unknown'         : 'ukjent',
			'selectall'       : 'Velg alle filene',
			'selectfiles'     : 'Velg fil(er)',
			'selectffile'     : 'Velg første fil',
			'selectlfile'     : 'Velg siste fil',
			'viewlist'        : 'Listevisning',
			'viewicons'       : 'Ikoner',
			'viewSmall'       : 'Small icons', // from v2.1.39 added 22.5.2018
			'viewMedium'      : 'Medium icons', // from v2.1.39 added 22.5.2018
			'viewLarge'       : 'Large icons', // from v2.1.39 added 22.5.2018
			'viewExtraLarge'  : 'Extra large icons', // from v2.1.39 added 22.5.2018
			'places'          : 'Områder',
			'calc'            : 'Beregn',
			'path'            : 'Bane',
			'aliasfor'        : 'Alias for',
			'locked'          : 'Låst',
			'dim'             : 'Størrelser',
			'files'           : 'Filer',
			'folders'         : 'Mapper',
			'items'           : 'objekter',
			'yes'             : 'ja',
			'no'              : 'nei',
			'link'            : 'Link',
			'searcresult'     : 'Søkeresultater',
			'selected'        : 'valgte filer',
			'about'           : 'Om',
			'shortcuts'       : 'Snarveier',
			'help'            : 'Hjelp',
			'webfm'           : 'Web-filbehandler',
			'ver'             : 'Versjon',
			'protocolver'     : 'protokol versjon',
			'homepage'        : 'Project home',
			'docs'            : 'dokumentasjon',
			'github'          : 'Fork us on Github',
			'twitter'         : 'Follow us on twitter',
			'facebook'        : 'Join us on facebook',
			'team'            : 'Team',
			'chiefdev'        : 'chief developer',
			'developer'       : 'developer',
			'contributor'     : 'contributor',
			'maintainer'      : 'maintainer',
			'translator'      : 'translator',
			'icons'           : 'Ikoner',
			'dontforget'      : 'and don\'t forget to bring a towel',
			'shortcutsof'     : 'Snarveier avslått',
			'dropFiles'       : 'Slipp filer her',
			'or'              : 'eller',
			'selectForUpload' : 'Velg filer til opplasting',
			'moveFiles'       : 'Flytt filer',
			'copyFiles'       : 'Kopier filer',
			'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
			'rmFromPlaces'    : 'Remove from places',
			'aspectRatio'     : 'Aspect ratio',
			'scale'           : 'Scale',
			'width'           : 'Width',
			'height'          : 'Height',
			'resize'          : 'Resize',
			'crop'            : 'Crop',
			'rotate'          : 'Rotate',
			'rotate-cw'       : 'Rotate 90 degrees CW',
			'rotate-ccw'      : 'Rotate 90 degrees CCW',
			'degree'          : '°',
			'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
			'protocol'            : 'Protocol', // added 18.04.2012
			'host'                : 'Host', // added 18.04.2012
			'port'                : 'Port', // added 18.04.2012
			'user'                : 'User', // added 18.04.2012
			'pass'                : 'Password', // added 18.04.2012
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
			'kindUnknown'     : 'Ukjent',
			'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
			'kindFolder'      : 'Mappe',
			'kindSelects'     : 'Selections', // from v2.1.29 added 29.8.2017
			'kindAlias'       : 'Snarvei',
			'kindAliasBroken' : 'Ugyldig snarvei',
			// applications
			'kindApp'         : 'Programfil',
			'kindPostscript'  : 'Postscript dokument',
			'kindMsOffice'    : 'Microsoft Office dokument',
			'kindMsWord'      : 'Microsoft Word dokument',
			'kindMsExcel'     : 'Microsoft Excel dokument',
			'kindMsPP'        : 'Microsoft Powerpoint presentation',
			'kindOO'          : 'Open Office dokument',
			'kindAppFlash'    : 'Flash',
			'kindPDF'         : 'Portabelt dokument (PDF)',
			'kindTorrent'     : 'Bittorrent file',
			'kind7z'          : '7z arkiv',
			'kindTAR'         : 'TAR arkiv',
			'kindGZIP'        : 'GZIP arkiv',
			'kindBZIP'        : 'BZIP arkiv',
			'kindXZ'          : 'XZ arkiv',
			'kindZIP'         : 'ZIP arkiv',
			'kindRAR'         : 'RAR ar',
			'kindJAR'         : 'Java JAR file',
			'kindTTF'         : 'True Type font',
			'kindOTF'         : 'Open Type font',
			'kindRPM'         : 'RPM package',
			// texts
			'kindText'        : 'Tekst dokument',
			'kindTextPlain'   : 'Plain text',
			'kindPHP'         : 'PHP kilde',
			'kindCSS'         : 'Cascading style sheet',
			'kindHTML'        : 'HTML dokument',
			'kindJS'          : 'Javascript',
			'kindRTF'         : 'Rikt Tekst Format',
			'kindC'           : 'C kilde',
			'kindCHeader'     : 'C header kilde',
			'kindCPP'         : 'C++ kilde',
			'kindCPPHeader'   : 'C++ header kilde',
			'kindShell'       : 'Unix shell script',
			'kindPython'      : 'Python kilde',
			'kindJava'        : 'Java kilde',
			'kindRuby'        : 'Ruby kilde',
			'kindPerl'        : 'Perl script',
			'kindSQL'         : 'SQL skilde',
			'kindXML'         : 'XML dokument',
			'kindAWK'         : 'AWK kilde',
			'kindCSV'         : 'Comma separated values',
			'kindDOCBOOK'     : 'Docbook XML dokument',
			'kindMarkdown'    : 'Markdown text', // added 20.7.2015
			// images
			'kindImage'       : 'Bilde',
			'kindBMP'         : 'BMP bilde',
			'kindJPEG'        : 'JPEG bilde',
			'kindGIF'         : 'GIF bilde',
			'kindPNG'         : 'PNG bilde',
			'kindTIFF'        : 'TIFF bilde',
			'kindTGA'         : 'TGA bilde',
			'kindPSD'         : 'Adobe Photoshop bilde',
			'kindXBITMAP'     : 'X bitmap bilde',
			'kindPXM'         : 'Pixelmator bilde',
			// media
			'kindAudio'       : 'Audio media',
			'kindAudioMPEG'   : 'MPEG audio',
			'kindAudioMPEG4'  : 'MPEG-4 audio',
			'kindAudioMIDI'   : 'MIDI audio',
			'kindAudioOGG'    : 'Ogg Vorbis audio',
			'kindAudioWAV'    : 'WAV audio',
			'AudioPlaylist'   : 'MP3 spilleliste',
			'kindVideo'       : 'Video media',
			'kindVideoDV'     : 'DV film',
			'kindVideoMPEG'   : 'MPEG film',
			'kindVideoMPEG4'  : 'MPEG-4 film',
			'kindVideoAVI'    : 'AVI film',
			'kindVideoMOV'    : 'Quick Time film',
			'kindVideoWM'     : 'Windows Media film',
			'kindVideoFlash'  : 'Flash film',
			'kindVideoMKV'    : 'Matroska film',
			'kindVideoOGG'    : 'Ogg film'
		}
	};
}));

