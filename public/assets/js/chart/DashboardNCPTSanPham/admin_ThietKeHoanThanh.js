const PTSP_admin_BanThietKeHoanThanh = document.getElementById('PTSP_admin_BanThietKeHoanThanh');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_BanThietKeHoanThanh, {
  type: 'line',
  data: {
    labels: [ 
      "Tuần 1",
      "Tuần 2",
      "Tuần 3",
      "Tuần 4", 
      "Tuần 5",      
  ],
    datasets: [
      {
        label: 'Hoàn thành',
        data: [5, 4, 5, 3, 4],
        borderColor: 'rgba(249, 143, 143)',
        backgroundColor: 'rgba(249, 143, 143)',
        stack: 'combined',
        type: 'bar'
      },      
      {
        label: 'Yêu cầu',
        data: [6, 7, 7, 5, 6],
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
        text: 'Bản thiết kế đã hoàn thành trong tháng'
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


