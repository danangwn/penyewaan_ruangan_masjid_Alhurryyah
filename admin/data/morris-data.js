$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            bulan: '2018-01',
            pemasukan: 110000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-02',
            pemasukan: 100000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-03',
            pemasukan: 250000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-04',
            pemasukan: 140000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-05',
            pemasukan: 90000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-06',
            pemasukan: 180000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-07',
            pemasukan: 500000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-08',
            pemasukan: 300000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-09',
            pemasukan: 240000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-10',
            pemasukan: 310000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-11',
            pemasukan: 400000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }, {
            bulan: '2018-12',
            pemasukan: 180000
            /*iphone: 2666,
            ipad: null,
            itouch: 2647*/
        }],
        xkey: 'bulan',
        ykeys: ['pemasukan'],
        labels: ['pemasukan'],
        pointSize: 5,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "R. Abu Bakar",
            value: 12
        }, {
            label: "R. Umar bin Khattab",
            value: 20
        }, {
            label: "R. Utsman bin Affan",
            value: 10
        }, {
            label: "R. Ali bin Abi Thalib",
            value: 15
        }, {
            label: "R. Utama",
            value: 4
        }, {
            label: "R. Seminar",
            value: 40
        }, {
            label: "R. Aula",
            value: 47
        }, {
            label: "R. Asma",
            value: 2
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    
});
