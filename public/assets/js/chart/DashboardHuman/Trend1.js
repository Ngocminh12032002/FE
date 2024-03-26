const Trend1 = document.getElementById('Trend1');

new Chart(Trend1, {
  type: 'bar',
  data: {
    labels: [ 
      "Q1",
      "Q2",
      "Q3",
      "Q4",
    ],
    datasets: [
      {
        // label: 'Dataset 1',
        data: [27, 39, 55, 78],
        backgroundColor: 'rgb(255, 99, 132)',
        tension: 0,
        fill: false
      }
    ]
  },
  options: {
    plugins: {
      legend: {
        display: false
      },
      title: {
        display: true,
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        display: false, 
        stacked: false,
      },
      y: {
        display: false, 
        stacked: false
      }
    }
  }
});

