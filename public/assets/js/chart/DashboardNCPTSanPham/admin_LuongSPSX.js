const PTSP_admin_SanPhamSanXuat = document.getElementById('PTSP_admin_SanPhamSanXuat');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_SanPhamSanXuat, {
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
        label: 'Bản thiết kế',
        data: [20, 13, 18, 10],
        borderColor: 'rgba(247, 188, 188)',
        backgroundColor: 'rgba(247, 188, 188)',
        stack: 'combined',
        type: 'bar'
      },      
      {
        label: 'Lượng mua',
        data: [30, 40, 35, 20],
        borderColor: 'rgb(209, 20, 20)',
        backgroundColor: 'rgb(209, 20, 20)',
        stack: 'combined'
      }
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
        text: 'Lượng sản phẩm sản xuất'
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


