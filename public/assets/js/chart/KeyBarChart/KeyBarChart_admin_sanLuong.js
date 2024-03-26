const KeyBarChart_admin_sanLuong = document.getElementById('KeyBarChart_admin_sanLuong');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_sanLuong, {
  type: 'bar',
  data: {
    labels: [ 
      "T1",
      "T2",
      "T3",
      "T4",
      "T5",
      "T6",
      "T7",
      "T8",
      "T9",
      "T10",
      "T11",
      "T12",
  ],
    datasets: [
      {
        label: 'Sản xuất-lắp ráp',
        data: [10, 19, 15, 20, 12, 19, 12, 20, 17, 11, 15, 16],
        backgroundColor: 'rgb(203, 11, 11)',
      },
      {
        label: 'Bảo dưỡng/sửa chữa',
        data: [17, 11, 18, 13, 19, 13, 14, 15, 14, 14, 20, 10],
        backgroundColor: 'rgb(235, 131, 131)',
      },
      {
        label: 'Gia công',
        data: [19, 16, 19, 15, 20, 15, 12, 17, 18, 16, 10, 20],
        backgroundColor: 'rgb(236, 184, 184)',
      },
    ]
  },
  options: {
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Bar Chart - Stacked'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,
          position:'right',
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
