const PTSP_admin_MucDoThuHutSP = document.getElementById('PTSP_admin_MucDoThuHutSP');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_MucDoThuHutSP, {
  type: 'line',
  data: {
    labels: [ 
      "TC cart",
      "Golf",
      "TQ",
      "Van",     
  ],
    datasets: [  
      {
        label: 'KH',
        data: [10, 15, 20, 12],
        borderColor: 'rgb(209, 20, 20)',
        backgroundColor: 'rgb(209, 20, 20)',
        // stack: 'combined',
        type: 'scatter',
      },
      {
        label: 'KH tiềm năng',
        data: [100, 80, 60, 70],
        borderColor: 'rgba(249, 143, 143)',
        backgroundColor: 'rgba(249, 143, 143)',
        stack: 'combined',
        type: 'bar',
      },    
    ]
  },
  options: {
    barPercentage:0.5,
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: true,
        text: 'Mức độ thu hút của sản phẩm'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
        maxWidth:4,
        position:'bottom',
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


