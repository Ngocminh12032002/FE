const MTT_SanPhamBanChay = document.getElementById('MTT_SanPhamBanChay');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_SanPhamBanChay, {
  
  type: 'line',
  data: {
    labels:[ 
      "Kinder Optima",
      "Aktiv Meno",
      "Vital Pregna",
      "A-Z Depot",
      "A-Z Fizz",           
  ],
    datasets: [      
      {
        data: [1390, 1010, 820, 800, 300],
        borderColor:'rgb(255, 230, 139)',
        backgroundColor: 'rgb(255, 230, 139)',
        stack: 'combined',
        type: 'bar'
      },      
    ]
  },
  options: {
    barPercentage:0.5,
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
      maintainAspectRatio: false,      
      stacked: false,
    plugins: {
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
        maxWidth:4,
        display: false,        
      },
      title: {
        display: true,
        text: 'Top 5 sản phẩm bán chạy nhất'
      }
    }
  },
});
