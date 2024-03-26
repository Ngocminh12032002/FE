// Chart.register(ChartjsPluginStacked100.default);
new Chart(document.getElementById('stackedChart_m_khachHang'), {
    type: 'bar',
    data: {
        labels: ['Khách hàng'],
        datasets: [         
            {
                label: 'Khách hàng mới',
                data: [30],
                backgroundColor: ['rgb(247 129 11)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Khách hàng cũ',
                data: [70],
                backgroundColor: ['rgb(239 197 14)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
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
                    callback: value => `${value} %`,
                },
            },
        },
    },
});
