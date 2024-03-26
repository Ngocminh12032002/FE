const KeyBarChart_m_soLuongXe = document.getElementById('KeyBarChart_m_soLuongXe');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_m_soLuongXe, {
  type: 'bar',
  data: {
    labels: [ 
      "TC Cart",
      "Golf",
      "TQ",
      "Van",      
  ],
    datasets: [
      {
        label: 'Kế hoạch',
        data: [2000, 1500, 1300, 900],
        backgroundColor: 'rgb(239, 197, 14)',
      },
      {
        label: 'Đã bán',
        data: [800, 450, 350, 270],
        backgroundColor: 'rgb(247, 129, 11)',
      },
      {
        label: 'Đã SX&LR',
        data: [300, 170, 120, 90],
        backgroundColor: 'rgb(38, 115, 215)',
      },
    ]
  },
  options: {
    plugins: {
      title: {
        display: true,
        // text: 'Chart.js Bar Chart - Stacked'
      },
      datalabels: {
        formatter: function (value) {
            return Math.round(value) + '';
        },
        color: "black",
    },
    },
    responsive: true,
      maintainAspectRatio: false,
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
