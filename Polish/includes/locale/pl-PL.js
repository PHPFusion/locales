//! moment.js locale configuration
//! locale : English (United Kingdom) [en-gb]
//! author : Chris Gedrim : https://github.com/chrisgedrim
;
(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' && typeof require === 'function' ? factory(require('../moment')) : typeof define === 'function' && define.amd ? define(['../moment'], factory) : factory(global.moment);
}(this, function (moment) {
   'use strict';
   //! moment.js locale configuration
   var enGb = moment.defineLocale('en-gb', {
      months: 'Styczeń_Luty_Marzec_Kwiecie_Maj_Czerwień_Lipiec_wrzesień_październik_Listopad_Grudzień'.split('_'),
      monthsShort: 'Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec'.split('_'),
      weekdays: 'Niedziela_Poniedziałek_Wtorek_Środa_Czwartek_Piątek_Sobota'.split('_'),
      weekdaysShort: 'Sun_Mon_Tue_Wed_Thu_Fri_Sat'.split('_'),
      weekdaysMin: 'Su_Mo_Tu_We_Th_Fr_Sa'.split('_'),
      longDateFormat: {
         LT: 'HH:mm',
         LTS: 'HH:mm:ss',
         L: 'DD/MM/YYYY',
         LL: 'D MMMM YYYY',
         LLL: 'D MMMM YYYY HH:mm',
         LLLL: 'dddd, D MMMM YYYY HH:mm'
      },
      calendar: {
         sameDay: '[Today at] LT',
         nextDay: '[Tomorrow at] LT',
         nextWeek: 'dddd [at] LT',
         lastDay: '[Yesterday at] LT',
         lastWeek: '[Last] dddd [at] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'in %s',
         past: '%s ago',
         s: 'a few seconds',
         ss: '%d seconds',
         m: 'a minute',
         mm: '%d minutes',
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
         var b = number % 10, output = ~~(number % 100 / 10) === 1 ? 'th' : b === 1 ? 'st' : b === 2 ? 'nd' : b === 3 ? 'rd' : 'th';
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