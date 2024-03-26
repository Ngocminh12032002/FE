const HSNV_LuongThuong = document.getElementById("HSNV_LuongThuong");

new Chart(HSNV_LuongThuong, {
  type: "pie",
  data: {
      labels: ['Miền Bắc', 'Miền Trung', 'Miền Nam'],
      datasets: [
          {
              label: "Chi phí",
              backgroundColor: ['rgb(32, 127, 204)', 'rgb(255, 50, 146)', 'rgb(255, 159, 50)'],              
              data: [33, 61, 6],
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

