const PTSP_admin_GiaNVLMuaTrongThang = document.getElementById('PTSP_admin_GiaNVLMuaTrongThang');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_GiaNVLMuaTrongThang, {
  type: 'line',
  data: {
    labels: [ 
      "Bánh xe Trolley",
      "Vỏ xe Golf",
      "Bánh xe tải vận",
      "Động cơ xe Trolley",     
  ],
    datasets: [  
        {
        label: 'Thực tế',
        data: [350, 600, 450, 850],
        borderColor: 'rgb(209, 20, 20)',
        backgroundColor: 'rgb(209, 20, 20)',
        // stack: 'combined',
        type: 'scatter',
          },   
        {
        label: 'Dự kiến',
        data: [300, 500, 400, 900],
        borderColor: 'rgba(249, 143, 143)',
        backgroundColor: 'rgba(249, 143, 143)',
        stack: 'combined',
        type: 'bar',
      },
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
        text: 'Giá NVL mua trong tháng'
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


