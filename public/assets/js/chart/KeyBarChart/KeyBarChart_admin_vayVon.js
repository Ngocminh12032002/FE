const KeyBarChart_admin_vayVon = document.getElementById('KeyBarChart_admin_vayVon');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_vayVon, {
  type: 'line',
  data: {
    labels: [ 
      "BIDV",
      "LienVietPostBank",
      "MB Bank",
      "Techcombank",
      "TP Bank",
      "Vietcombank",
      "VP Bank",      
  ],
    datasets: [      
      {
        label: 'Lượng vay',
        data: [300, 200, 200, 500, 300, 500, 400],
        borderColor:'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131, 0.5)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Lãi suất',
        data: [30, 15, 16, 42, 25, 52, 35],
        borderColor:'rgb(236, 184, 184)',
        backgroundColor: 'rgb(236, 184, 184, 0.5)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Lượng trả',
        data: [200, null, null, 110, null, 300],        
        borderColor: 'rgb(255, 17, 17)',
        backgroundColor: 'rgb(255, 17, 17)',
        
      }
    ]
  },
  options: {
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Bar Chart - Stacked'
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
    responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
      },
      stacked: false,
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
