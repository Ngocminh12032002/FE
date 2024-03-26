const GTB_TrangBiTheoThang = document.getElementById('GTB_TrangBiTheoThang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(GTB_TrangBiTheoThang, {
  type: 'line',
  data: {
    labels: [ 
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12",
  ],
    datasets: [      
      {
        label: 'Trang bị',
        data: [43, 35, 33, 46, 33, 37, 50, 36, 39, 41, 46, 43],
        backgroundColor:'rgb(203, 11, 11)',
        borderColor: 'rgb(203, 11, 11, 0.5)',
        stack: 'combined',
        type: 'bar'
      }, 
      {
        label: 'Tồn kho',
        data: [13, 18, 19, 10, 12, 19, 13, 16, 10, 11, 18, 17],
        backgroundColor:'rgb(235, 131, 131)',
        borderColor: 'rgb(236, 184, 184, 0.5)',
        type: 'bar'
      },      
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Stacked Line/Bar Chart'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
      },
    },
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
