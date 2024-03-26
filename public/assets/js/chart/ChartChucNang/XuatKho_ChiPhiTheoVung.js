const XuatKho_ChiPhiTheoVung = document.getElementById("XuatKho_ChiPhiTheoVung");

new Chart(XuatKho_ChiPhiTheoVung, {
  type: "pie",
  data: {
      labels: ['Miền Bắc', 'Miền Trung', 'Miền Nam'],
      datasets: [
          {
              label: "Chi phí",
              backgroundColor: ['rgb(0, 23, 137)', 'rgb(47, 184, 239)', 'rgb(32, 127, 204)'],              
              data: [20, 8, 14],
              borderWidth: 1,
              datalabels: {
                // formatter: function (value) {
                //     return Math.round(value) + '%';
                // },
                color: "white",
            },
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
              position: 'right',
              labels:{
                font: {
                  size:8
                },
                boxWidth:15,
                position:'top',
              },
          },          
          tooltip: { enabled: true },
          title: {
            display: false,
            text: 'Lượng kho theo vùng'
          }
      },
  },
});

