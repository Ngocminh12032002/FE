const MTT_KhachHangTheoVung = document.getElementById("MTT_KhachHangTheoVung");

new Chart(MTT_KhachHangTheoVung, {
  type: "pie",
  data: {
      labels: ['Miền Bắc', 'Miền Trung', 'Miền Nam'],
      datasets: [
          {
              label: "Khách hàng",
              backgroundColor: ['rgb(197, 230, 126)', 'rgb(255, 230, 139)', 'rgb(255, 165, 0)'],              
              data: [600, 580, 700],
              borderWidth: 1,
          },
      ],
  },
  options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              display: false,
              scaleLabel: {
                  display: true,
                  labelString: "probability",
              },
              ticks: {
                  beginAtZero: true,
              },
          },
          x: {
              display: false,
          },
      },
      plugins: {
          legend: {
              display: true,
              position: 'bottom',
              labels:{
                font: {
                  size:8
                },
                boxWidth:15,
                position:'top',
              },
              maxWidth:4, 
          },
          datalabels: {
            formatter: function (value) {
                return Math.round(value) + '%';
            },
            color: "white",
        },
          tooltip: { enabled: true },
          title: {
            display: true,
            text: 'Khách hàng theo vùng'
          }
      },
  },
});
