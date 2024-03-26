const Center = document.getElementById("Center");

new Chart(Center, {
  type: 'line',
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
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'P&L Budget',
        data: [0, 20, 10, 30, 40, 60, 50, 70, 80, 100, 90, 0],
        borderColor: 'rgb(183, 229, 221)',
        backgroundColor: 'rgb(183, 229, 221, 0.5)',
        stack: 'combined'
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Stacked Line/Bar Chart'
      }
    },
    scales: {
      y: {
        stacked: true
      }
    }
  },

});
