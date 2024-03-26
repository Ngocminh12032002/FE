const IT = document.getElementById('IT');

new Chart(IT, {
  type: 'line',
  data: {
    labels: [
      "T1",
      "T2",
      "T3",
      "T4"
    ],
    datasets: [
      {
        label: "Tháng",
        data: [1, 10, 14, 12],
        backgroundColor: "rgb(64, 51, 33)",
        borderColor: "rgb(230, 181, 102)",
        pointStyle: 'rectRot',
        pointRadius: 4,
        // pointHoverRadius: 10,
  
        tension: 0,
        fill: false
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        display: false
      },
      y: {
        display: false
      }
    },
    plugins: {
      legend: {
        display: false
      },
      title: {
        // display: true,
        // text: 'Chart.js Line Chart'
      }
    }
  }
});
