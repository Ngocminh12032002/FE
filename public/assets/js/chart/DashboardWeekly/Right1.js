const Right1 = document.getElementById("Right1");

new Chart(Right1, {
  type: 'bar',
  data: {
    labels:  [
      "T1",
      "T2",
      "T3",
      "T4",
      "T5",
      "T6",
      "T7",
      "T8",
      "T9",
      "T10",
      "T11",
      "T12",
  ],
    datasets: [
      {
        label: 'P&L Actual',
        data: [80, 75, 70, 65, 60, 65, 70, 75, 80, 75, 70, 65],
        borderColor: 'rgb(177, 188, 230)',
        backgroundColor: 'rgb(177, 188, 230, 0.5)',
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    scales: {
      
      y: {
        display: false
      }
    },
    plugins: {
      legend: {
        display: false,
        position: 'top',
      },
      title: {
        display: false,
        // text: 'Chart.js Bar Chart'
      },
      datalabels: {
        anchor: 'center',
        align: 'center',
        font: {
          size: 12,
        },
        formatter: function(value) {
          return value + '%';
        },
        color: 'black'
      }
    }

  },
  plugins: [ChartDataLabels],


});


