//! moment.js locale configuration
//! locale : English (United Kingdom) [en-gb]
//! author : Chris Gedrim : https://github.com/chrisgedrim
;
(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' && typeof require === 'function' ? factory(require('../moment')) : typeof define === 'function' && define.amd ? define(['../اللحظة'], factory) : factory(global.moment);
}(this, function (moment) {
   'استخدام صارم';
   //! moment.js locale configuration
   var enGb = moment.defineLocale('en-gb', {
      months: 'يناير_فبراير_مارس_أبريل_مايو_يونيو_يوليو_أغسطس_سبتمبر_أكتوبر_نوفمبر_ديسمبر'.split('_'),
      monthsShort: 'يناير_فبراير_مارس_أبريل_مايو_يونيو_يوليو_أغسطس_سبتمبر_أكتوبر_نوفمبر_ديسمبر'.split('_'),
      weekdays: 'الأحد_الإثنين_الثلاثاء_الأربعاء_الخميس_الجمعة_السبت'.split('_'),
      weekdaysShort: 'الأحد_الإثنين_الثلاثاء_الأربعاء_الخميس_الجمعة_السبت'.split('_'),
      weekdaysMin: 'الأحد_الإثنين_الثلاثاء_الأربعاء_الخميس_الجمعة_السبت'.split('_'),
      longDateFormat: {
         LT: 'HH:mm',
         LTS: 'HH:mm:ss',
         L: 'يوم/شهر/سنة',
         LL: 'D MMMM YYYY',
         LLL: 'D MMMM YYYY HH:mm',
         LLLL: 'dddd, D MMMM YYYY HH:mm'
      },
      calendar: {
         sameDay: '[اليوم في] LT',
         nextDay: '[غداً في] LT',
         nextWeek: 'dddd [at] LT',
         lastDay: '[بالأمس] LT',
         lastWeek: '[Last] dddd [at] LT',
         sameElse: 'L'
      },
      relativeTime: {
         future: 'في %s',
         past: 'منذ %s',
         s: 'بضعة ثواني',
         ss: '%d ثانية',
         m: 'منذ دقيقة',
         mm: '%d دقائق',
         h: 'ساعة',
         hh: '%d ساعات',
         d: 'يوم',
         dd: '%d أيام',
         M: 'شهر',
         MM: '%d أشهر',
         y: 'سنة',
         yy: '%d سنوات'
      },
      dayOfMonthOrdinalParse: /\d{1,2}(st|nd|rd|th)/,
      ordinal: function (number) {
         var b = number % 10, output = ~~(number % 100 / 10) === 1 ? 'ثانيةً' : b === 1 ? 'الأول' : b === 2 ? 'الثاني' : b === 3 ? 'الثالث' : 'ثانيةً';
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