const MTT_NhapXuatKho = document.getElementById('MTT_NhapXuatKho');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_NhapXuatKho, {
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
        label: 'Nhập',
        data: [135, 122, 144, 229, 290, 194, 127, 126, 227, 260, 112, 249],
        borderColor: 'rgb(254, 138, 0, 0.75)',
        backgroundColor: 'rgb(254, 138, 0)',
        stack: 'combined',
        type: 'bar'
      }, 
      {
        label: 'Tồn kho',
        data: [57, 126, 106, 58, 129, 113, 148, 155, 131, 100, 109, 138],
        borderColor: 'rgb(255, 230, 139, 0.75)',
        backgroundColor: 'rgb(255, 230, 139)',
        type: 'bar'
      },       
      {
        label: 'Bán ra',
        data: [318, 165, 192, 318, 475, 391, 190, 310, 348, 477, 199, 121],
        borderColor: 'rgb(209, 20, 20, 0.75)',
        backgroundColor: 'rgb(209, 20, 20)',
        
      }
    ]
  },
  options: {
    barPercentage:0.75,
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
        text: 'Nhập kho - Xuất kho'
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
