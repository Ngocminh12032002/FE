const Age = document.getElementById('Age');
new Chart(Age, {
  type: 'bar',
  data: {
    labels: [ 
      "19-25",
      "26-35",
      "36-45",
      "46-55",
      "55+",
  ],
    datasets: [
      {
        label: 'IT',
        data: [20, 40, 60, 60, 10],
        backgroundColor: 'rgb(230, 181, 102)',
      },
      {
        label: 'Finance',
        data: [10, 20, 20, 30, 10,],
        backgroundColor: 'rgb(173, 142, 112)',
      },
      {
        label: 'HR',
        data: [10, 20, 20, 10, 40,],
        backgroundColor: 'rgb(162, 221, 202)',
      },
      {
        label: 'Strategy',
        data: [10, 20, 20, 30, 50,],
        backgroundColor: 'rgb(255, 247, 212)',
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
        display: true,
        // text: 'Chart.js Bar Chart'
      }
    }
  },
});

