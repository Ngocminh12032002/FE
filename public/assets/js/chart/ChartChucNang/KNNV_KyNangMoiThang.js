const KNNV_KyNangMoiThang = document.getElementById('KNNV_KyNangMoiThang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KNNV_KyNangMoiThang, {
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
        label: 'Lượng tăng',
        data: [2, 3, 5, 4, 6, 7, 3, 2, 4, 1, 3, 4],
        backgroundColor: 'rgb(32, 127, 204)',
        datalabels: {
          // formatter: function (value) {
          //     return Math.round(value) + '%';
          // },
          color: "white",
      },
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
        display: false,
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
