const XuatKho_ChiPhiTheoThang = document.getElementById('XuatKho_ChiPhiTheoThang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(XuatKho_ChiPhiTheoThang, {
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
        label: 'Chi phí',
        data: [42, 35, 30, 48, 36, 44, 43, 35, 33, 30, 40, 36],
        backgroundColor: 'rgb(32, 127, 204)',
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
