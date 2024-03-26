const HSNV_HieuSuatLamViec = document.getElementById('HSNV_HieuSuatLamViec');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(HSNV_HieuSuatLamViec, {
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
        label: 'KPI thực tế',
        data: [101, 99, 97, 102, 110, 108, 106, 90, 93, 100, 98, 102],
        borderColor: 'rgb(255, 50, 146)',
        backgroundColor: 'rgb(255, 50, 146)',
        stack: 'combined',
        type: 'bar',
        datalabels: {
          // formatter: function (value) {
          //     return Math.round(value) + '%';
          // },
          display: false,
          color: "white",
      },
      },      
      {
        label: 'KPI được giao',
        data: [120, 115, 110, 111, 115, 120, 123, 110, 106, 107, 105, 112],
        borderColor: 'rgb(32, 127, 204)',
        backgroundColor: 'rgb(32, 127, 204)',
        datalabels: {
          // formatter: function (value) {
          //     return Math.round(value) + '%';
          // },
          display: false,
          color: "white",
      },
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Stacked Line/Bar Chart'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
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
