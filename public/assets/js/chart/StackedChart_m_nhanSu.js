// Chart.register(ChartjsPluginStacked100.default);
new Chart(document.getElementById('stackedChart_m_nhanSu'), {
    type: 'bar',
    data: {
        labels: ['Nhân sự'],
        datasets: [           
            {
                label: 'IT',
                data: [9],
                backgroundColor: ['rgb(148 45 26)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Marketing',
                data: [6],
                backgroundColor: ['rgb(200 23 181)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Kế toán',
                data: [20],
                backgroundColor: ['rgb(247 129 11)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Kinh doanh',
                data: [8],
                backgroundColor: ['rgb(239 197 14)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Hành chính',
                data: [15],
                backgroundColor: ['rgb(121 205 27)'],
                borderColor: ['rgb(54 162 235)'],
                borderWidth: 0,
            },
            {
                label: 'Nhân sự',
                data: [9],
                backgroundColor: ['rgb(38 115 215)'],
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
