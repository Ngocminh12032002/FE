const KeyBarChart_admin_Marketing = document.getElementById('KeyBarChart_admin_Marketing');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_Marketing, {
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
        label: 'Lượt chào hàng',
        data: [30, 27, 27, 30, 30, 21, 28, 24, 28, 30, 22, 30],
        borderColor:'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131, 0.5)',
        stack: 'combined',
        type: 'bar'
      }, 
      {
        label: 'Lượt lái thử',
        data: [13, 15, 12, 8, 16, 15, 13, 13, 12, 8, 15, 15],
        borderColor:'rgb(236, 184, 184)',
        backgroundColor: 'rgb(236, 184, 184, 0.5)',
        type: 'bar'
      },       
      {
        label: 'Khách hàng',
        data: [5, 4, 4, 3, 7, 5, 6, 8, 4, 7, 9, 8],
        borderColor: 'rgb(255, 17, 17)',
        backgroundColor: 'rgb(255, 17, 17, 0.5)',
        
      }
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
        maxWidth:4,        
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
