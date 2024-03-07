"use strict";
var high_chart = function () {
    "use strict";

    var tax_data = [
        {"period": "2011 Q3", "licensed": 3407, "sorned": 660},
        {"period": "2011 Q2", "licensed": 3351, "sorned": 629},
        {"period": "2011 Q1", "licensed": 3269, "sorned": 618},
        {"period": "2010 Q4", "licensed": 3246, "sorned": 661},
        {"period": "2009 Q4", "licensed": 3171, "sorned": 676},
        {"period": "2008 Q4", "licensed": 3155, "sorned": 681},
        {"period": "2007 Q4", "licensed": 3226, "sorned": 620},
        {"period": "2006 Q4", "licensed": 3245, "sorned": null},
        {"period": "2005 Q4", "licensed": 3289, "sorned": null}
    ];
    Morris.Line({
        element: 'hero-graph',
        data   : tax_data,
        lineColors: [
            '#db393f',
            '#FB404B',
        ],
        xkey   : 'period',
        ykeys  : [ 'licensed', 'sorned' ],
        labels : [ 'Licensed', 'Off the road' ]
    });

    Morris.Donut({
        element  : 'hero-donut',
        data     : [
            {label: 'Jam', value: 25},
            {label: 'Frosted', value: 40},
            {label: 'Custard', value: 25},
            {label: 'Sugar', value: 10}
        ],
        colors: [
            '#FB404B',
            '#db393f',
            '#FFA534',
            '#87CB16'
        ],
        formatter: function (y) {
            return y + "%"
        }
    });

    Morris.Area({
        element  : 'hero-area',
        data     : [
            {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
            {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
            {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
            {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
            {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
            {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
            {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
            {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
            {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
            {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
        ],
        lineColors: [
            '#db393f',
            '#FB404B',
            '#FFA534',
            '#87CB16'
        ],
        xkey     : 'period',
        ykeys    : [ 'iphone', 'ipad', 'itouch' ],
        labels   : [ 'iPhone', 'iPad', 'iPod Touch' ],
        pointSize: 2,
        hideHover: 'auto'
    });

    Morris.Bar({
        element    : 'hero-bar',
        data       : [
            {device: 'iPhone', geekbench: 136},
            {device: 'iPhone 3G', geekbench: 137},
            {device: 'iPhone 3GS', geekbench: 275},
            {device: 'iPhone 4', geekbench: 380},
            {device: 'iPhone 4S', geekbench: 655},
            {device: 'iPhone 5', geekbench: 1571}
        ],
        barColors: [
            '#db393f'
        ],
        xkey       : 'device',
        ykeys      : [ 'geekbench' ],
        labels     : [ 'Geekbench' ],
        barRatio   : 0.4,
        xLabelAngle: 35,
        hideHover  : 'auto'
    });

    new Morris.Line({
        element: 'examplefirst',
        xkey   : 'year',
        ykeys  : [ 'value' ],
        labels : [ 'Value' ],
        data   : [
            {year: '2008', value: 20},
            {year: '2009', value: 10},
            {year: '2010', value: 5},
            {year: '2011', value: 5},
            {year: '2012', value: 20}
        ],
        lineColors: [
            '#db393f',
        ],
    });
};
var Chart = function () {
    "use strict";
    return {
        init: function () {
            high_chart();
        }
    }
}();
$(function () {
    Chart.init();
});