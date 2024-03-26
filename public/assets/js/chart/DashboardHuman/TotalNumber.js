const TotalNumber = document.getElementById('TotalNumber');

new Chart(TotalNumber, {
  type: 'line',
  data: {
    labels: [ 
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
        label: 'Consultants',
        data: [0, 20, 20, -60, 60, 120, -20, 180, 120, 125, -105, 110, 170],
        borderColor: 'rgb(162, 221, 202)',
        backgroundColor: 'rgb(162, 221, 202, 0.5)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Open Positions',
        data: [0, 10, 70, 40, -60, 10, 120, 150, 150, 185, 125, -110, 170],
        borderColor: 'rgb(230, 181, 102)',
        backgroundColor: 'rgb(230, 181, 102, 0.5)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Part Time Staff',
        data: [0, 26, 10, 48, -94, 118, -10, 80, 20, 25, 115, -10, 70],
        borderColor: 'rgb(173, 142, 112)',
        backgroundColor: 'rgb(173, 142, 112, 0.5)',
        stack: 'combined'
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        // text: 'Chart.js Stacked Line/Bar Chart'
      }
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }

  },
});
