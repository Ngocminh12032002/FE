const MTT_SoLuongBan = document.getElementById('MTT_SoLuongBan');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_SoLuongBan, {
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
        label: 'Bán ra',
        data: [318, 165, 192, 318, 475, 391, 190, 310, 348, 477, 199, 121],
        backgroundColor: 'rgb(186, 213, 106)',
      },
      {
        label: 'Đổi trả',
        data: [25, 44, 37, 35, 59, 31, 43, 41, 33, 48, 41, 37],
        backgroundColor: 'rgb(255, 230, 139)',
      },      
    ]
  },
  options: {
    barPercentage:0.5,
    plugins: {
      title: {
        display: true,
        text: 'Số lượng bán'
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
