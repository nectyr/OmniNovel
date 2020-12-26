(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/daterangepicker"],{

/***/ "./resources/js/vendor/flowdash/plugins/daterangepicker.js":
/*!*****************************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/daterangepicker.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-toggle="daterangepicker"]').each(function () {
    var element = $(this);
    var format = void 0 !== element.data('daterangepicker-locale-format') ? element.data('daterangepicker-locale-format') : 'YYYY/MM/DD';
    var ranges = {
      'Today': [moment(), moment()],
      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    };
    var options = {
      showDropdowns: void 0 !== element.data('daterangepicker-show-dropdowns') ? element.data('daterangepicker-show-dropdowns') : false,
      drops: void 0 !== element.data('daterangepicker-drops') ? element.data('daterangepicker-drops') : 'down',
      opens: void 0 !== element.data('daterangepicker-opens') ? element.data('daterangepicker-opens') : 'right',
      startDate: void 0 !== element.data('daterangepicker-start-date') ? element.data('daterangepicker-start-date') : moment(),
      endDate: void 0 !== element.data('daterangepicker-end-date') ? element.data('daterangepicker-end-date') : moment().add(1, 'month'),
      singleDatePicker: void 0 !== element.data('daterangepicker-single-date-picker') ? element.data('daterangepicker-single-date-picker') : false,
      autoApply: void 0 !== element.data('daterangepicker-auto-apply') ? element.data('daterangepicker-auto-apply') : true,
      timePicker: void 0 !== element.data('daterangepicker-time-picker') ? element.data('daterangepicker-time-picker') : false,
      timePicker24Hour: void 0 !== element.data('daterangepicker-time-picker-24-hour') ? element.data('daterangepicker-time-picker-24-hour') : false,
      ranges: void 0 !== element.data('daterangepicker-ranges') ? ranges : false,
      locale: {
        format: format,
        separator: void 0 !== element.data('daterangepicker-locale-separator') ? element.data('daterangepicker-locale-separator') : ' to '
      }
    };
    element.daterangepicker(options);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 2:
/*!***********************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/daterangepicker.js ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/dlavoie/Sandbox/OmniNovel/resources/js/vendor/flowdash/plugins/daterangepicker.js */"./resources/js/vendor/flowdash/plugins/daterangepicker.js");


/***/ })

},[[2,"/js/manifest","/js/vendor"]]]);