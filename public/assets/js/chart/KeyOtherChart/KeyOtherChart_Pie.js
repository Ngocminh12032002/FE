const KeyOtherChart_Pie = document.getElementById("KeyOtherChart_Pie");

new Chart(KeyOtherChart_Pie, {
  type: "pie",
  data: {
      labels: ["Đã trình", "Đã duyệt", "Đã từ chối"],
      datasets: [
          {
              label: "Chỉ số",
              data: [12, 19, 3],
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
