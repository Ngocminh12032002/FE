const Actual = document.getElementById('Actual');

new Chart(Actual, {
  type: 'line',
  data: {
    labels:  [
      "T1",
      "T2",
      "T3",
      "T4",
      "T5",
      "T6",
  ],
    datasets: [
      {
        label: 'IT',
        data: [100, -20, 20, -30, 10,40],
        borderColor: 'rgb(230, 181, 102)',
        backgroundColor: 'rgb(230, 181, 102)',
        fill: true
      },
      {
        label: 'Finance',
        data: [-5, -10, -10, 30, 20, 30],
        borderColor: 'rgb(173, 142, 112)',
        backgroundColor: 'rgb(173, 142, 112)',
        fill: true
      },
      {
        label: 'HR',
        data: [30, 5, 30, -5, -10, 20],
        borderColor: 'rgb(162, 221, 202)',
        backgroundColor: 'rgb(162, 221, 202)',
        fill: true
      },
      {
        label: 'Strategy',
        data: [-30, 10, 20, 5, 10, -20],
        borderColor: 'rgb(255, 247, 212)',
        backgroundColor: 'rgb(255, 247, 212)',
        fill: true
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      title: {
        display: true,
        // text: (ctx) => 'Chart.js Line Chart - stacked=' + ctx.chart.options.scales.y.stacked
      },
      tooltip: {
        mode: 'index'
      },
    },
    interaction: {
      mode: 'nearest',
      axis: 'x',
      intersect: false
    },
    scales: {
      x: {
        title: {
          display: true,
          text: 'Month'
        }
      },
      y: {
        stacked: true,
        title: {
          display: true,
          text: 'Value'
        }
      }
    }
  }
});

