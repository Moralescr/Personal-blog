/* ========================================================================

Home Js

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {
    //CACHE JQUERY OBJECTS
    var $window = $(window);
    var total_revenue = function() {
        $("#total_revenue").sparkline([31,69,47,62,73,79,89,77,73,52,31,50,60,55,47,68,31,62,53,69,59,67,69,58,50,47,65], {
            type: 'line',
            width: '100%',
            height: '60',
            spotRadius: 4,
            lineWidth: 2,
            lineColor:'rgba(255,255,255,.85)',
            fillColor: 'rgba(0,0,0,0.1)',
            spotColor: 'rgba(255,255,255,.5)',
            minSpotColor: 'rgba(255,255,255,.5)',
            maxSpotColor: 'rgba(255,255,255,.5)',
            highlightLineColor : '#ffffff',
            highlightSpotColor: '#ffffff',
            tooltipChartTitle: 'Earning',
            tooltipSuffix:' %'

        });
    }

    var yesterday_revenue = function() {
        $("#yesterday_revenue").sparkline([31,43,54,62,65,70,89,77,65,52,61,50,60,55,54,68,56,62,53,43,59,67,69,58,50,47,65], {
            type: 'line',
            width: '100%',
            height: '60',
            spotRadius: 4,
            lineWidth: 2,
            lineColor:'rgba(255,255,255,.85)',
            fillColor: 'rgba(0,0,0,0.1)',
            spotColor: 'rgba(255,255,255,.5)',
            minSpotColor: 'rgba(255,255,255,.5)',
            maxSpotColor: 'rgba(255,255,255,.5)',
            highlightLineColor : '#ffffff',
            highlightSpotColor: '#ffffff',
            tooltipChartTitle: 'Earning',
            tooltipSuffix:' %'

        });
    }
    var barValues = [40,32,54,34,45,55,24,67,45,47,45,56,34,67,89,32,54,53,45,55,24,67,45,47,45,56,70,45,56,34,67,89,32,65,53];
    var barValueCount = barValues.length;
    var barSpacing = 1;
    var daily_sales = function(){
        $("#daily_sales").sparkline(barValues, {
            type: 'bar',
            height: 78,
            barWidth: Math.round(($("#daily_sales").parent().width() - ( barValueCount - 1 ) * barSpacing ) / barValueCount),
            barSpacing: barSpacing,
            zeroAxis: false,
            tooltipChartTitle: 'Daily Sales',
            tooltipSuffix: ' Sales',
            barColor: 'rgba(0,0,0,.15)'
        });
    }
    $window.on('resizeEnd', function(){
        total_revenue();
        daily_sales();
        yesterday_revenue();
    })
    total_revenue();
    daily_sales();
    yesterday_revenue();

    if ($('#morris_line').length) {
        // Use Morris.Area instead of Morris.Line
        Morris.Line({
            element: 'morris_line',
            behaveLikeLine: true,
            data: [
                { y: '2008', a: 50, b: 0 },
                { y: '2009', a: 75, b: 50 },
                { y: '2010', a: 30, b: 80 },
                { y: '2011', a: 50, b: 50 },
                { y: '2012', a: 75, b: 10 },
                { y: '2013', a: 50, b: 25 },
                { y: '2014', a: 75, b: 50 },
                { y: '2015', a: 100, b: 70 }
            ],

            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            lineColors: ['#3644FF', '#D2DDEB'],
            resize: true,
            gridTextSize: '14px'
        });

    }

    if ($('#bar_chart').length) {
        var ctx = document.getElementById("bar_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
                datasets: [{
                    label: 'Profit Months',
                    data: [12, 19, 9, 17, 15, 24, 7, 10, 15, 17, 16 ],
                    backgroundColor: "#D2DDEB",
                    borderColor: "transparent",
                    borderWidth: 0
                }, {
                    label: 'Loss Month',
                    data: [15, 29, 10, 12, 20, 15, 10,12, 14, 18, 11],
                    backgroundColor: "#3644FF",
                    borderColor: "transparent",
                    borderWidth: 0
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        maxBarThickness: 10,
                        categoryPercentage: 0.3,
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                            beginAtZero: true,
                        }
                    }],
                    yAxes: [{
                        tabIndex: 0,
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }]
                }
            }


        });
    }

    if($("#average-sales").length>0) {
        var ctx = document.getElementById("average-sales").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels:["Total Revenue", "Paid", "Digital Marketing"],
                datasets: [{
                    backgroundColor: [
                        "#727cf5",
                        "#fa5c7c",
                        "#0acf97",
                        "#ebeff2",
                    ]
                    , borderColor: "transparent",
                    borderWidth: "1",
                    data: [20, 6, 10]
                }]
            },
            options: {
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
                maintainAspectRatio: false,
                cutoutPercentage:60,
            }

        });
    }
    if ($('#dataTable').length) {
        $('#dataTable').DataTable();
    }
});
/*======== End Doucument Ready Function =========*/