const MTCV_BienDongTuyenDung = document.getElementById('MTCV_BienDongTuyenDung');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTCV_BienDongTuyenDung, {
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
        label: 'Chính thức',
        data: [30, 31, 32, 32, 31, 33, 34, 32, 34, 35, 33, 36],
        backgroundColor: 'rgb(11, 91, 123)',
      },
      {
        label: 'Thử việc',
        data: [3, 4, 2, 4, 2, 1, 3, 4, 3, 4, 3, 2],
        backgroundColor: 'rgb(34, 128, 165)',
      },
      {
        label: 'Cộng tác viên',
        data: [6, 7, 8, 8, 6, 7, 7, 9, 7, 8, 6, 7],
        backgroundColor: 'rgb(47, 184, 239)',
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
