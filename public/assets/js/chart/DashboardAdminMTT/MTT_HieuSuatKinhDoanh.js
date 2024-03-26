const MTT_HieuSuatKinhDoanh = document.getElementById('MTT_HieuSuatKinhDoanh');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_HieuSuatKinhDoanh, {
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
        label: 'KPI đạt được',
        data: [87, 86, 105, 91, 103, 93, 106, 90, 108, 93, 83, 93],
        backgroundColor:'rgb(255,165,0)',
        borderColor: 'rgb(255,165,0, 0.75)',
        stack: 'combined',
        type: 'bar'
      },     
      {
        label: 'KPI yêu cầu',
        data: [126, 130, 130, 134, 138, 123, 129, 127, 128, 125, 136, 127],
        backgroundColor: 'rgb(255, 230, 139)',
        borderColor: 'rgb(255, 230, 139, 0.75)',
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
        text: 'Hiệu suất kinh doanh'
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
