//! moment.js locale configuration
//! locale : English (United Kingdom) [en-gb]
//! author : Chris Gedrim : https://github.com/chrisgedrim
;
(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' && typeof require === 'function' ? factory(require('../moment')) : typeof define === 'function' && define.amd ? define(['../moment'], factory) : factory(global.moment);
}(this, function (moment) {
   'doprecyzuj';
   //! moment.js locale configuration
   var enGb = moment.defineLocale('en-gb', {
      months: 'Styczeń_Luty_Marzec_Kwiecie_Maj_Czerwień_Lipiec_wrzesień_październik_Listopad_Grudzień'.split('_'),
      monthsShort: 'Sty_Lut_Mar_Kwi_Maj_Cze_Lip_Sie_Wrz_Paź_Lis_Gru'.split('_'),
      weekdays: 'Niedziela_Poniedziałek_Wtorek_Środa_Czwartek_Piątek_Sobota'.split('_'),
      weekdaysShort: 'Nie_Pon_Wto_Śro_Czw_Pią_Sob'.split('_'),
      weekdaysMin: 'Nd_Pn_Wt_Śr_Cz_Pt_So'.split('_'),
      longDateFormat: {
         LT: 'GG:mm',
         LTS: 'GG:mm:ss',
         L: 'DD/MM/RRRR',
         LL: 'D MMMM RRRR',
         LLL: 'D MMMM RRRR GG:mm',
         LLLL: 'dddd, D MMMM RRRR GG:mm'
      },
      calendar: {
         sameDay: '[Dziś o] LT',
         nextDay: '[Jutro o] LT',
         nextWeek: 'dddd [at] LT',
         lastDay: '[Wczoraj o] LT',
         lastWeek: '[Last] dddd [at] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'za %s',
         past: '%s temu',
         s: 'kilka sekund',
         ss: '%d sekund',
         m: 'minuta',
         mm: '%d minut',
         h: 'godzina',
         hh: '%d godzin',
         d: 'dzień',
         dd: '%d dni',
         M: 'miesiąc',
         MM: '%d miesięcy',
         y: 'rok',
         yy: '%d lat/lata'
      },
      dayOfMonthOrdinalParse: /\d{1,2}(st|nd|rd|th)/,
      ordinal: function (number) {
         var b = number % 10, output = ~~(number % 100 / 10) === 1 ? '.' : b === 1 ? '.' : b === 2 ? '.' : b === 3 ? '.' : '.';
         return number + output;
      },
      week: {
         dow: 1,
         // Monday is the first day of the week.
         doy: 4
      }
   });
   return enGb;
}));