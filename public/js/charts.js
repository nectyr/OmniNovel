(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/charts"],{

/***/ "./resources/js/vendor/flowdash/plugins/charts.js":
/*!********************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/charts.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var extend = function extend(object, value) {
  for (var key in value) {
    "object" != _typeof(value[key]) ? object[key] = value[key] : extend(object[key], value[key]);
  }
};

var add = function add(element) {
  var data = element.data("add");
  var chart = $(element.data("target")).data("chart");

  if (element.is(":checked")) {
    var addRecursive = function addRecursive(chart, data) {
      for (var o in data) {
        Array.isArray(data[o]) ? data[o].forEach(function (a) {
          chart[o].push(a);
        }) : addRecursive(chart[o], data[o]);
      }
    };

    addRecursive(chart, data);
  } else {
    var removeRecursive = function removeRecursive(chart, data) {
      for (var o in data) {
        Array.isArray(data[o]) ? data[o].forEach(function (a) {
          chart[o].pop();
        }) : removeRecursive(chart[o], data[o]);
      }
    };

    removeRecursive(chart, data);
  }

  chart.update();
};

var update = function update(element) {
  var data = element.data("update");
  var chart = $(element.data("target")).data("chart");
  extend(chart, data);

  if (void 0 !== element.data("prefix") || void 0 !== element.data("suffix")) {
    var prefix = element.data("prefix") ? element.data("prefix") : "";
    var suffix = element.data("suffix") ? element.data("suffix") : "";

    if (chart.options.scales !== undefined) {
      chart.options.scales.yAxes[0].ticks.callback = function (a) {
        if (!(a % 10)) return prefix + a + suffix;
      };
    }

    chart.options.tooltips.callbacks.label = function (a, e) {
      var t = e.datasets[a.datasetIndex].label || "",
          o = a.yLabel || e.datasets[0].data[a.index],
          r = "";
      return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + prefix + o + suffix + "</span>";
    };
  }

  chart.update();
};

var globalSettings = {
  responsive: true,
  maintainAspectRatio: false,
  defaultColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[700] : settings.colors.gray[600],
  defaultFontColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[700] : settings.colors.gray[600],
  defaultFontFamily: settings.fonts.base,
  defaultFontSize: 13,
  layout: {
    padding: 0
  },
  legend: {
    display: false,
    position: "bottom",
    labels: {
      usePointStyle: true,
      padding: 16
    }
  },
  elements: {
    point: {
      radius: 0,
      backgroundColor: settings.colors.primary[700]
    },
    line: {
      tension: .4,
      borderWidth: 3,
      borderColor: settings.colors.primary[700],
      backgroundColor: settings.colors.transparent,
      borderCapStyle: "rounded"
    },
    rectangle: {
      backgroundColor: settings.colors.primary[700]
    },
    arc: {
      backgroundColor: settings.colors.primary[700],
      borderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white,
      borderWidth: 4
    }
  },
  tooltips: {
    enabled: !1,
    mode: "index",
    intersect: !1,
    custom: function custom(r) {
      var a = $("#chart-tooltip");

      if (a.length || (a = $('<div id="chart-tooltip" class="popover bs-popover-top" role="tooltip"></div>'), $("body").append(a)), 0 !== r.opacity) {
        if (r.body) {
          var e = r.title || [],
              l = r.body.map(function (a) {
            return a.lines;
          }),
              n = "";
          n += '<div class="arrow"></div>', e.forEach(function (a) {
            n += '<h3 class="popover-header text-center">' + a + "</h3>";
          }), l.forEach(function (a, e) {
            var t = '<span class="popover-body-indicator" style="background-color: ' + r.labelColors[e].backgroundColor + '"></span>',
                o = 1 < l.length ? "justify-content-left" : "justify-content-center";
            n += '<div class="popover-body d-flex align-items-center ' + o + '">' + t + a + "</div>";
          }), a.html(n);
        }

        var t = $(this._chart.canvas),
            o = (t.outerWidth(), t.outerHeight(), t.offset().top),
            s = t.offset().left,
            i = a.outerWidth(),
            c = a.outerHeight(),
            d = o + r.caretY - c - 16,
            u = s + r.caretX - i / 2;
        a.css({
          top: d + "px",
          left: u + "px",
          display: "block"
        });
      } else a.css("display", "none");
    },
    callbacks: {
      label: function label(a, e) {
        var t = e.datasets[a.datasetIndex].label || "",
            o = a.yLabel,
            r = "";
        return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + o + "</span>";
      }
    }
  }
};
var doughnutSettings = {
  cutoutPercentage: 83,
  tooltips: {
    callbacks: {
      title: function title(a, e) {
        return e.labels[a[0].index];
      },
      label: function label(a, e) {
        var t = "";
        return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "</span>";
      }
    }
  },
  legendCallback: function legendCallback(a) {
    var o = a.data,
        r = "";
    return o.labels.forEach(function (a, e) {
      var t = o.datasets[0].backgroundColor[e];
      r += '<span class="chart-legend-item">', r += '<i class="chart-legend-indicator" style="background-color: ' + t + '"></i>', r += a, r += "</span>";
    }), r;
  }
};

var create = function create(id) {
  var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
  var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
  var data = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};
  var element = $(id);
  var chart = new Chart(element, {
    type: type,
    options: options,
    data: data
  });
  element.data("chart", chart);

  if (element.data("chart-legend")) {
    document.querySelector(element.data("chart-legend")).innerHTML = chart.generateLegend();
  }
};

var init = function init() {
  extend(Chart, {
    defaults: {
      global: globalSettings,
      doughnut: doughnutSettings
    }
  });
  Chart.scaleService.updateScaleDefaults("linear", {
    gridLines: {
      borderDash: [2],
      borderDashOffset: [2],
      color: "dark" == settings.charts.colorScheme ? settings.colors.gray[900] : settings.colors.gray[100],
      drawBorder: !1,
      drawTicks: !1,
      lineWidth: 0,
      zeroLineWidth: 0,
      zeroLineColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[900] : settings.colors.gray[100],
      zeroLineBorderDash: [2],
      zeroLineBorderDashOffset: [2]
    },
    ticks: {
      beginAtZero: !0,
      padding: 10,
      callback: function callback(a) {
        if (!(a % 10)) return a;
      }
    }
  });
  Chart.scaleService.updateScaleDefaults("category", {
    gridLines: {
      drawBorder: !1,
      drawOnChartArea: !1,
      drawTicks: !1
    },
    ticks: {
      padding: 20
    },
    maxBarThickness: 10
  });
  $('[data-toggle="chart"]').on({
    change: function change() {
      var el = $(this);

      if (el.is("[data-add]")) {
        add(el);
      }
    },
    click: function click() {
      var el = $(this);

      if (el.is("[data-update]")) {
        update(el);
      }
    }
  });
};

var Charts = {
  settings: settings,
  init: init,
  add: add,
  update: update,
  create: create
};

if (window !== undefined) {
  window.Charts = Charts;
}
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 1:
/*!**************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/charts.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/dlavoie/Sandbox/OmniNovel/resources/js/vendor/flowdash/plugins/charts.js */"./resources/js/vendor/flowdash/plugins/charts.js");


/***/ })

},[[1,"/js/manifest","/js/vendor"]]]);