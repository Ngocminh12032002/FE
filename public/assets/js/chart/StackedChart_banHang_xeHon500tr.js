// Chart.register(ChartjsPluginStacked100.default);
// Chart.register(ChartDataLabels);
var month_more500mcar = document.getElementById('salesstaff_month_more500mcar').value;
var year_more500mcar = document.getElementById('salesstaff_year_more500mcar').value;
new Chart(document.getElementById('stackedChart_banHang_more500mCar'), {
    type: 'bar',
    data: {
        labels: ['Hơn 500tr đã bán(Xe)'],
        datasets: [
            {
                label: 'Tổng tháng',
                data: [month_more500mcar],
                backgroundColor: ['rgb(255 99 132)'],
                borderColor: ['rgb(255 99 132)'],
                borderWidth: 1,
            },
            {
                label: 'Tổng năm',
                data: [year_more500mcar- month_more500mcar],
                backgroundColor: ['rgb(54 162 235)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,

        plugins: {
            stacked100: { enable: true, replaceTooltipLabel: false },
            legend: {
                display: false,
            },
            datalabels: {
                formatter: function (value) {
                    return Math.round(value) + '';
                },
                color: "white",
            },
            tooltip: {
                padding: 4,
                titleFont: {
                    size: 8,
                },
                bodyFont: {
                    size: 8,
                },
                
            },
        },
        scales: {
            x: {
                ticks: {
                    font: {
                        size: 10,
                        weight: '700',
                    },
                },
            },
            y: {
                beginAtZero: true,
                ticks: {
                    font: {
                        size: 8,
                        weight: '700',
                    },
                },
            },
        },
    },
});
