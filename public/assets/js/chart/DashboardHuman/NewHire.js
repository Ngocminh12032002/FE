const NewHire = document.getElementById('NewHire');
new Chart(NewHire, {
  type: 'bar',
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
        label: 'New Hires',
        data: [20, 40, 60, 60, 10, 20, 150, 150, 50, 105, 160, 190],
        backgroundColor: 'rgb(230, 181, 102)',
      },
      {
        label: 'Termination',
        data: [-10, -20, -20, -60, -60, -120, -20, -180, -120, -125, -105, -110],
        backgroundColor: 'rgb(173, 142, 112)',
      },
    ]
  },
  options: {
    plugins: {
      title: {
        display: true,
        // text: 'Bar Chart'
      },
    },
    responsive: true,
      maintainAspectRatio: false,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
});
