const MTT_NhaPhanPhoi = document.getElementById('MTT_NhaPhanPhoi');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_NhaPhanPhoi, {
  
  type: 'line',
  data: {
    labels:[ 
      "Nhà thuốc Tâm Phúc",
      "Nhà thuốc Quang Minh",
      "Nhà thuốc Ngọc Ái",
      "Nhà thuốc Hoàng Minh",
      "Nhà thuốc Viên Thành",           
  ],
    datasets: [      
      {
        data: [12000, 9980, 8490, 7370, 3400],
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
        text: 'Top 5 nhà phân phối có doanh thu cao nhất'
      }
    }
  },
});
