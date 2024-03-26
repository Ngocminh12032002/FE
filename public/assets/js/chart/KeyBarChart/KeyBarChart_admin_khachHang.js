const KeyBarChart_admin_khachHang = document.getElementById('KeyBarChart_admin_khachHang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_khachHang, {
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
        label: 'Khách hàng',
        data: [24, 24, 28, 20, 21, 27, 24, 20, 20, 26, 20, 23],
        borderColor: 'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131)',
        stack: 'combined',
        type: 'bar'
      },      
      {
        label: 'Số đơn hàng',
        data: [36, 36, 33, 39, 31, 36, 36, 35, 33, 37, 31, 36],
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
