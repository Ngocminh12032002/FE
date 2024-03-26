const MTT_LuongKhachHang = document.getElementById('MTT_LuongKhachHang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_LuongKhachHang, {
  type: 'bar',
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
        label: 'Khách hàng cũ',
        data: [80, 136, 113, 190, 148, 114, 141, 141, 176, 105, 175, 153],
        backgroundColor: 'rgb(254, 138, 0)',
      },
      {
        label: 'Khách hàng mới',
        data: [57, 72, 54, 67, 42, 36, 35, 26, 76, 71, 53, 35],
        backgroundColor: 'rgb(255, 230, 139)',
      },      
    ]
  },
  options: {
    barPercentage:0.5,
    plugins: {
      title: {
        display: true,
        text: 'Lượng khách hàng'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,
          position:'top',
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
