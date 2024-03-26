const KeyOtherChart_Pie = document.getElementById("KeyOtherChart_Pie_nhanSuHienTai");

new Chart(KeyOtherChart_Pie, {
  type: "pie",
  data: {
      labels: ["Đã trình", "Đã duyệt", "Đã từ chối"],
      datasets: [
          {
              label: "Chỉ số",
              data: [10, 15, 8, 20, 6, 9],
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
          tooltip: { enabled: true },
          title: {
            display: true,
            // text: 'Chart.js Pie Chart'
          }
      },
  },
});
