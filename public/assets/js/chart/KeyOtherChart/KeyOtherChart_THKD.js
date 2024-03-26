const KeyOtherChart_THKD = document.getElementById("KeyOtherChart_THKD");

new Chart(KeyOtherChart_THKD, {
  type: "pie",
  data: {
      labels: ["Troller & Cargo cart", "Golf & nội khu", "Xe tham quan", "Xe tải Van"],
      datasets: [
          {
              label: "Số xe",
              backgroundColor: ['rgb(235, 131, 131)', 'rgb(203, 11, 11)', 'rgb(241, 158, 158)', 'rgb(236, 184, 184)'],
              data: [200, 300, 100, 150],
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
              display: false,
              position: 'top',
          },
          datalabels: {
            formatter: function (value) {
                return Math.round(value) + '%';
            },
            color: "white",
        },
          tooltip: { enabled: true },
          title: {
            display: false,
            // text: 'Tình hình kinh doanh'
          }
      },
  },
});
