const PTSP_admin_DoanhThuLoaiKhachHang = document.getElementById('PTSP_admin_DoanhThuLoaiKhachHang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_DoanhThuLoaiKhachHang, {
  
  type: 'line',
  data: {
    labels:[ 
      "Đại lý",
      "Khách hàng bán buôn",
      "Khách hàng bán lẻ",
      "Dự án",            
  ],
    datasets: [      
      {
        data: [6796, 5290, 4678, 3047],
        borderColor:'rgb(245, 168, 168)',
        backgroundColor: 'rgb(245, 168, 168)',
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
        text: 'Doanh thu theo loại khách hàng(triệu đồng)'
      }
    }
  },
});
