//! moment.js locale configuration
//! locale : English (United Kingdom) [en-gb]
//! author : Chris Gedrim : https://github.com/chrisgedrim
;
(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' && typeof require === 'function' ? factory(require('../moment')) : typeof define === 'function' && define.amd ? define(['../Moment'], factory) : factory(global.moment);
}(this, function (moment) {
   'streng verwenden';
   //! moment.js locale configuration
   var enGb = moment.defineLocale('en-gb', {
      months: 'Januar_Februar_März_April_Mai_Juni_Juli_August_September_Oktober_November_Dezember'.split('_'),
      monthsShort: 'Jan_Feb_Mar_Apr_Mai_Jun_Jul_Aug_Sep_Okt_Nov_Dec'.split('_'),
      weekdays: 'Sonntag_Montag_Dienstag_Mittwoch_Donnerstag_Freitag_Samstag'.split('_'),
      weekdaysShort: 'So_Mo_Di_Mi_Do_Fr_Sa'.split('_'),
      weekdaysMin: 'So_Mo_Di_Mi_Do_Fr_Sa'.split('_'),
      longDateFormat: {
         LT: 'HH:mm',
         LTS: 'HH:mm:ss',
         L: 'TT/MM/JJJJ',
         LL: 'T MMMM JJJJ',
         LLL: 'T MMMM JJJJ HH:mm',
         LLLL: 'tttt, T MMMM JJJJ HH:mm'
      },
      calendar: {
         sameDay: '[Heute um] LT',
         nextDay: '[Morgen um] LT',
         nextWeek: 'tttt [at] LT',
         lastDay: '[Gestern um] LT',
         lastWeek: '[Last] tttt [at] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'in %s',
         past: 'vor %s',
         s: 'ein paar Sekunden',
         ss: '%d Sekunden',
         m: 'eine Minute',
         mm: '%d Minuten',
         h: 'eine Stunde',
         hh: '%d Stunden',
         d: 'ein Tag',
         dd: '%d Tage',
         M: 'ein Monat',
         MM: '%d Monate',
         y: 'ein Jahr',
         yy: '%d Jahre'
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