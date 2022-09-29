//! moment.js locale configuration
//! locale : English (United Kingdom) [en-gb]
//! author : Chris Gedrim : https://github.com/chrisgedrim
;
(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' && typeof require === 'function' ? factory(require('../moment')) : typeof define === 'function' && define.amd ? define(['../moment'], factory) : factory(global.moment);
}(this, function (moment) {
   'brug streng';
   //! moment.js locale configuration
   var enGb = moment.defineLocale('en-gb', {
      months: 'Januar_Februar_Marts_April_Maj_Juni_Juli_August_September_Oktober_November_December'.split('_'),
      monthsShort: 'Jan_Feb_Mar_Apr_Maj_Jun_Jul_Aug_Sep_Okt_Nov_Dec'.split('_'),
      weekdays: 'Søndag_Mandag_Tirsdag_Onsdag_Torsdag_Fredag_Lørdag'.split('_'),
      weekdaysShort: 'Søn_Man_Tir_Ons_Tor_Fre_Lør'.split('_'),
      weekdaysMin: 'Sø_Ma_Ti_On_To_Fr_Lø'.split('_'),
      longDateFormat: {
         LT: 'TT:mm',
         LTS: 'TT:mm:ss',
         L: 'DD/MM/ÅÅÅÅ',
         LL: 'D MMMM ÅÅÅÅ',
         LLL: 'D MMMM ÅÅÅÅ TT:mm',
         LLLL: 'dddd, D MMMM ÅÅÅÅ TT:mm'
      },
      calendar: {
         sameDay: '[I dag kl.] LT',
         nextDay: '[I morgen kl.] LT',
         nextWeek: 'dddd [kl.] LT',
         lastDay: '[I går kl.] LT',
         lastWeek: '[Sidste] dddd [kl.] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'i %s',
         past: '%s siden',
         s: 'nogle få sekunder',
         ss: '%d sekunder',
         m: 'et minut',
         mm: '%d minutter',
         h: 'en time',
         hh: '%d timer',
         d: 'en dag',
         dd: '%d dage',
         M: 'en måned',
         MM: '%d måneder',
         y: 'et år',
         yy: '%d år'
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