'use strict';

(function () {
    let cardColor, headingColor, axisColor, shadeColor, borderColor;
    cardColor = config.colors.cardColor;
    headingColor = config.colors.headingColor;
    axisColor = config.colors.axisColor;
    borderColor = config.colors.borderColor;

    // Income Chart - Area chart
    // --------------------------------------------------------------------
    const incomeChartEl = document.querySelector('#incomeChart'),
        incomeChartConfig = {
            series: [
                {
                    name: 'Total Pendapatan',
                    data: incomeData
                }
            ],
            chart: {
                height: 325,
                parentHeightOffset: 0,
                parentWidthOffset: 0,
                toolbar: {
                    show: false
                },
                type: 'area'
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            legend: {
                show: false
            },
            markers: {
                size: 6,
                colors: 'transparent',
                strokeColors: 'transparent',
                strokeWidth: 4,
                discrete: [
                    {
                        fillColor: config.colors.white,
                        seriesIndex: 0,
                        dataPointIndex: dataPointIndex,
                        strokeColor: config.colors.tertiary,
                        strokeWidth: 2,
                        size: 6,
                        radius: 8
                    }
                ],
                hover: {
                    size: 7
                }
            },
            colors: [config.colors.tertiary],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: shadeColor,
                    shadeIntensity: 0.6,
                    opacityFrom: 0.5,
                    opacityTo: 0.25,
                    stops: [0, 95, 100]
                }
            },
            grid: {
                borderColor: borderColor,
                strokeDashArray: 3,
                padding: {
                    top: -20,
                    bottom: -8,
                    left: 0,
                    right: 0
                }
            },
            xaxis: {
                categories: incomeCategories,
                axisBorder: { show: false },
                axisTicks: { show: false },
                labels: {
                    show: true,
                    style: {
                    fontSize: '13px',
                    colors: axisColor,
                    }
                },
                offsetX: 10
            },
            yaxis: {
                labels: {
                    show: false,
                    style: {
                        fontSize: '13px',
                        colors: axisColor
                    },
                    formatter: function (value) {
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                },
                min: 0, // Set minimum value for Y-axis
                max: Math.max(...incomeData) * 1.2, // Set maximum value dynamically (20% higher than max data)
                tickAmount: 25// Number of ticks on Y-axis
            }
        };
    if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
        const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
        incomeChart.render();
    }
})();
