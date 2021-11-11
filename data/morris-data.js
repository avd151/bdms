$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2008 Q1',
            male: 1666,
            female: 966,
        }, {
            period: '2009 Q2',
            male: 1806,
            female: 1066,
        }, {
            period: '2010 Q3',
            male: 2612,
            female: 1469,
           
        }, {
            period: '2011 Q4',
            male: 3702,
            female: 1969,
        }, {
            period: '2012 Q1',
            male: 2915,
            female: 1279,
        }, {
            period: '2013 Q2',
            male: 2424,
            female: 1500,
        }, {
            period: '2014 Q3',
            male: 2501,
            female: 1622,
        }, {
            period: '2015 Q4',
            male: 4236,
            female: 1997,
        }, {
            period: '2016 Q1',
            male: 4992,
            female: 2602,
        }, {
            period: '2017 Q2',
            male: 5777,
            female: 2963,
        }],
        xkey: 'period',
        ykeys: ['male', 'female'],
        labels: ['male', 'female'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
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
