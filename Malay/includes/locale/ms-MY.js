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
      months: 'Januari_Februari_Mac_April_Mei_Jun_Julai_Ogos_September_Oktober_November_Disember'.split('_'),
      monthsShort: 'Jan_Feb_Mac_Apr_Mei_Jun_Jul_Ogos_Sep_Okt_Nov_Dis'.split('_'),
      weekdays: 'Ahad_Isnin_Selasa_Rabu_Khamis_Jumaat_Sabtu'.split('_'),
      weekdaysShort: 'Ahad_Isnin_Selasa_Rabu_Khamis_Jumaat_Sabtu'.split('_'),
      weekdaysMin: 'Ahad_Isnin_Selasa_Rabu_Khamis_Jumaat_Sabtu'.split('_'),
      longDateFormat: {
         LT: 'HH:mm',
         LTS: 'HH:mm:ss',
         L: 'DD/MM/YYYY',
         LL: 'D MMMM YYYY',
         LLL: 'D MMMM YYYY HH:mm',
         LLLL: 'dddd, D MMMM YYYY HH:mm'
      },
      calendar: {
         sameDay: '[Hari ini] LT',
         nextDay: '[Esok pada] LT',
         nextWeek: 'dddd [at] LT',
         lastDay: '[Kelmarin pada] LT',
         lastWeek: '[Akhir] dddd [pada] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'dalam %s',
         past: '%s lalu',
         s: 'beberapa saat',
         ss: '%d saat',
         m: 'seminit',
         mm: '%d minit',
         h: 'sejam',
         hh: '%d jam',
         d: 'sehari',
         dd: '%d hari ',
         M: 'sebulan',
         MM: '%d bulan',
         y: 'setahun',
         yy: '%d tahun'
      },
      dayOfMonthOrdinalParse: /\d{1,2}(st|nd|rd|th)/,
      ordinal: function (number) {
         var b = number % 10, output = ~~(number % 100 / 10) === 1 ? ' ' : b === 1 ? ' ' : b === 2 ? ' ' : b === 3 ? ' ' : '  ';
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