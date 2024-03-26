const Road = document.getElementById('Road');
new Chart(Road, {
  type: 'bar',
  data: {
    labels: [ 
      
      "Road",
      "Courier",
      "Air",
      "Mail",
  ],
    datasets: [
      {
        label: 'CY',
        data: [20, 40, 60, 60, 10],
        backgroundColor: 'rgb(246, 214, 173)',
      },
      {
        label: 'PY',
        data: [10, 20, 20, 30, 10,],
        backgroundColor: 'rgb(204, 246, 200)',
      },
     
    ]
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: false,
        // text: 'Chart.js Bar Chart'
      }
    },
    scales: {
      y: {
        display: false, 
        stacked: false
      }
    }
  },
});

