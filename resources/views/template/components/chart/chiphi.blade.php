@php
    $listKpiKeys = Session::get('listKpiKeys');
    $firstKey = $listKpiKeys[0] ?? null;
@endphp

<div id="ChiPhí" class="data_chart-items">
    <canvas id="stackedChart_chiPhi"></canvas>
</div>

@section('script-chart')
    <script>
        var firstKey = @json($firstKey);

        var id = firstKey.id ?? '';
        var name = firstKey.name ?? '';
        var total = firstKey.total ?? 0;
        var accumulated = firstKey.accumulated ?? 0;
        var maxLength = 16;
        var shortenedLabel = name.length > maxLength ? name.substring(0, maxLength) + '...' : name;
        console.log(total ,accumulated)
        // Chart.register(ChartjsPluginStacked100.default);

        new Chart(document.getElementById('stackedChart_chiPhi'), {
            type: 'bar',
            data: {
                labels: [shortenedLabel],
                datasets: [{
                        label: 'Tổng tháng',
                        data: [total],
                        backgroundColor: ['rgb(255 99 132)'],
                        borderColor: ['rgb(255 99 132)'],
                        borderWidth: 1,
                        stack: 'Stack 1'
                    },
                    {
                        label: 'Tổng năm',
                        data: [accumulated],
                        backgroundColor: ['rgb(54 162 235)'],
                        borderColor: ['rgb(54 162 235)'],
                        borderWidth: 1,
                        stack: 'Stack 1'
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,

                aspectRatio: 3,

                plugins: {
                    // stacked100: {
                    //     enable: true,
                    //     replaceTooltipLabel: false
                    // },
                    legend: {
                        display: false,
                    },
                    datalabels: {
                        formatter: function(value) {
                            return Math.round(value) + '%';
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
                        stacked: true
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
    </script>
@endsection