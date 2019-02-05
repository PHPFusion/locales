/*!
 * FileInput Lithuanian Translations
 * Edmundas Jankauskas - PHP-Fusion Lithuania (http://www.phpfusion-lt.com/index.php)
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['_LANG_'] = {
        fileSingle: 'failas',
        filePlural: 'failai',
        browseLabel: 'Naršyti&hellip;',
        removeLabel: 'Pašalinti',
        removeTitle: 'Išvalyti pasirinktus failus',
        cancelLabel: 'Atšaukti',
        cancelTitle: 'Atšaukti vykstantį įkėlimą',
        uploadLabel: 'Įkelti',
        uploadTitle: 'Įkelti pasirinktus failus',
        msgZoomTitle: 'Peržiūrėti detales',
        msgZoomModalHeading: 'Detali peržiūra',
        msgSizeTooLarge: 'Failas "{name}" (<b>{size} KB</b>) viršija maksimalų leidžiama failo dydį <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Privaloma pasirinkti bent <b>{n}</b> {files} norint įkelti.',
        msgFilesTooMany: 'Įkėlimui pažymėtų failų skaičius <b>({n})</b> viršija maksimalų leidžiamą limitą <b>({m})</b>.',
        msgFileNotFound: 'Failas "{name}" nerastas!',
        msgFileSecured: 'Saugumo ribojimai neleidžia atidaryti failo "{name}".',
        msgFileNotReadable: 'Failas "{name}" yra neperskaitomas.',
        msgFilePreviewAborted: 'Failo "{name}" peržiūra nutraukta.',
        msgFilePreviewError: 'Bandant perskaityti failą "{name}" įvyko klaida.',
        msgInvalidFileType: 'Netinkamas failo "{name}" tipas. Leidžiami failų tipai: {types}.',
        msgInvalidFileExtension: 'Netinkamas failo "{name}" plėtinys. Leidžiami failų plėtiniai: {extensions}.',
        msgUploadAborted: 'Failo įkėlimas buvo nutrauktas',
        msgValidationError: 'Failo įkėlimo klaida',
        msgLoading: 'Įkeliamas failas {index} iš {files}&hellip;',
        msgProgress: 'Įkeliamas failas {index} iš {files} - {name} - {percent}% baigta.',
        msgSelected: '{n} {files} pažymėta',
        msgFoldersNotAllowed: 'Vilkti ir įkelti galima tik failus! Bandytas įkelti aplankas(-ai) {n} neįkeltas.',
        msgImageWidthSmall: 'Nuotraukos "{name}" plotis turi būti bent {size}px.',
        msgImageHeightSmall: 'Nuotraukos "{name}" aukštis turi būti bent {size}px.',
        msgImageWidthLarge: 'Nuotraukos "{name}" plotis negali viršyti {size}px.',
        msgImageHeightLarge: 'Nuotraukos "{name}" aukštis negali viršyti {size}px.',
        msgImageResizeError: 'Nepavyko gauti keičiamos nuotraukos dydžio išmatavimų.',
        msgImageResizeException: 'Klaida keičiant nuotraukos dydį.<pre>{errors}</pre>',
        dropZoneTitle: 'Vilkite ir įkelkite failus&hellip;',
        fileActionSettings: {
            removeTitle: 'Pašalinti failą',
            uploadTitle: 'Įkelti failą',
            indicatorNewTitle: 'Dar neįkeltas',
            indicatorSuccessTitle: 'Įkeltas',
            indicatorErrorTitle: 'Įkėlimo klaida',
            indicatorLoadingTitle: 'Įkeliama...'
        }
    };
})(window.jQuery);