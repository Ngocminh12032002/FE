const MTT_TyLeChuyenDoi = document.getElementById('MTT_TyLeChuyenDoi');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_TyLeChuyenDoi, {
  type: 'line',
  data: {
    labels: [ 
      "An thần",
      "Bổ mắt",
      "Bổ não",   
      "Làm đẹp",
      "Sức khoẻ nam giới",
      "Sức khoẻ phụ nữ",
      "Tăng sức đề kháng",
      "Tiền liệt tuyến",
      "Tiểu đường",
      "Trẻ em",
      "Vitamin và khoáng chất",
      "Xương khớp",     
  ],
    datasets: [  
      {
        label: 'Khách hàng',
        data: [96, 76, 80, 42, 96, 82, 95, 41, 77, 72, 65, 87],
        borderColor: 'rgba(254, 138, 0)',
        backgroundColor: 'rgba(254, 138, 0)',
        // stack: 'combined',
        type: 'scatter',
      },
      {
        label: 'Khách hàng tiềm năng',
        data: [129, 145, 115, 113, 198, 139, 111, 172, 176, 161, 120, 173],
        borderColor: 'rgb(255, 230, 139)',
        backgroundColor: 'rgb(255, 230, 139)',
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
        text: 'Tỷ lệ chuyển đổi khách hàng'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
        maxWidth:4,
        position:'top',
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


