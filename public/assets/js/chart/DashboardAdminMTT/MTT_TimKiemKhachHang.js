const MTT_TimKiemKhachHang = document.getElementById('MTT_TimKiemKhachHang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_TimKiemKhachHang, {
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
        label: 'Khách hàng',
        data: [100, 144, 150, 158, 140, 132, 104, 87, 139, 185, 143, 157],
        backgroundColor: 'rgb(209, 20, 20)',
        borderColor: 'rgb(209, 20, 20, 0.5)',
        
      },     
      {
        label: 'Cuộc gọi',
        data: [903, 1100, 1232, 1056, 959, 1111, 1371, 1220, 839, 817, 866, 1118],
        backgroundColor:'rgb(186, 213, 106)',
        borderColor: 'rgb(186, 213, 106, 0.5)',
        stack: 'combined',
        type: 'bar'
      }, 
      {
        label: 'Cuộc hẹn',
        data: [300, 233, 499, 213, 323, 401, 438, 406, 295, 498, 376, 241],
        backgroundColor:'rgb(255, 230, 139)',
        borderColor: 'rgb(255, 230, 139, 0.5)',
        type: 'bar'
      },        
    ]
  },
  options: {
    barPercentage:0.75,
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
        text: 'Tìm kiếm khách hàng'
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
