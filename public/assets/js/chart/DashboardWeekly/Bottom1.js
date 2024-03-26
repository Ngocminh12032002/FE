const Bottom1 = document.getElementById("Bottom1");

new Chart(Bottom1, {
  type: "doughnut",
  data: {
    labels: ["England", "Scotland", "Wales", "Northern Ireland"],
    datasets: [
        {
            label: "Chỉ số",
            data: [5, 5, 3, 0],
            borderWidth: 1,
            backgroundColor: [
              'rgb(177, 188, 230)',
              'rgb(154, 134, 164)',
              'rgb(183, 229, 221)',
              'rgb(241, 240, 192)'
          ]
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
          position: "left",
        },
        title: {
          display: false,
          //   text: 'Chart.js Doughnut Chart'
        },
        datalabels: {
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map((data) => {
              sum += data;
            });
            let percentage = value + "%";
            return percentage;
          },
          color: "black",
        },
      },
    },
    plugins: [ChartDataLabels],
});
