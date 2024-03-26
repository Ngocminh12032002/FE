const KeyBarChart_admin_chiPhiTheoPhongBan = document.getElementById('KeyBarChart_admin_chiPhiTheoPhongBan');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_chiPhiTheoPhongBan, {
  
  type: 'line',
  data: {
    labels:[ 
      "Kỹ sư",
      "Kế toán",
      "Mua hàng",
      "Phát triển SP",
      "Marketing",
      "Kinh doanh",
      "Hành chính",
      "Nhân sự",
      "IT",      
  ],
    datasets: [      
      {
        label: 'Lương',
        data: [190000000, 130000000, 110000000, 144018080, 111762686, 187411568, 128253068, 194165909, 173087206],
        borderColor:'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Thưởng',
        data: [65000000, 60000000, 50000000, 56014569, 64040857, 62835464, 53933722, 66261388, 60704943],
        borderColor:'rgb(236, 184, 184)',
        backgroundColor: 'rgb(236, 184, 184)',   
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Mua sắm',
        data: [3900000, 5600000, 6000000, 4284352, 1109798, 2393005, 2536401, 1128546, 4412999],
        borderColor: 'rgb(255, 17, 17)',
        backgroundColor: 'rgb(255, 17, 17)',
        stack: 'combined',
        type: 'bar'
      }
    ]
  },
  options: {
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
      },
      title: {
        display: false,
        // text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
});
